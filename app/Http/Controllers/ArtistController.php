<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Schema;

use Illuminate\Http\Request;
use App\Models\Artist;
use Illuminate\Support\Facades\DB;

class ArtistController extends Controller
{


    public function show()
    {
        $artists = Artist::all();
        $totalDurationInSeconds = $artists->sum('duration');

        // Calculate total duration in hours and minutes
        $totalDurationInHours = floor($totalDurationInSeconds / 3600);
        $totalDurationInMinutes = ($totalDurationInSeconds % 3600) / 60;

        // Format the minutes with two decimal places
        $totalDurationInMinutesFormatted = number_format($totalDurationInMinutes, 2);
        return view('layout.app', [
            'artists' => $artists,
            'totalSongsSynced' => $artists->count(),
            'totalDurationInHours' => $totalDurationInHours,
            'totalDurationInMinutes' => $totalDurationInMinutesFormatted,
        ]);
    }

    public function delete($id)
    {
        $artist = Artist::find($id);
        $artist->delete();
        return redirect('/');
    }

    public function deleteAll()
    {
        // Delete all records from the 'title' table
        DB::table('artists')->delete();

        return redirect('/');
    }

    public function view($id)
    {
        $artist = Artist::find($id);

        return view('components.edit-artist', [
            'artist' => $artist,
        ]);
    }


    public function edit(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'album' => 'required|string|max:255',
            'duration' => 'required|integer|min:1',
        ]);

        $artist = Artist::find($id);

        if (!$artist) {
            return redirect()->back()->with('error', 'Record not found');
        }

        $artist->update($validatedData);

        return redirect('/');
    }



    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'album' => 'required|string|max:255',
            'duration' => 'required|integer|min:1',
        ]);

        Artist::create($validatedData);

        return redirect('/');
    }
}
