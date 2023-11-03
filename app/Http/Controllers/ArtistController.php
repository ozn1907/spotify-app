<?php

namespace App\Http\Controllers;

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

    public function delete($uuid)
    {
        $artist = Artist::where('uuid', $uuid)->first();

        $artist->delete();
        return redirect()->route('home')->with('delete', 'User deleted successfully!');
    }


    public function deleteAll()
    {
        DB::table('artists')->delete();

        return redirect('/');
    }

    public function view($uuid)
    {
        $artist = Artist::where('uuid', $uuid)->first();

        return view('components.edit-artist', [
            'artist' => $artist,
        ]);
    }

    protected function validateArtistData(Request $request)
    {
        return $request->validate([
            'title' => 'required|string|max:255',
            'album' => 'required|string|max:255',
            'duration' => 'required|integer|min:1',
        ]);
    }

    public function edit(Request $request, $uuid)
    {
        $artist = Artist::where('uuid', $uuid)->first();

        $artist->update($this->validateArtistData($request));
        return redirect()->route('home')->with('edit', 'User updated successfully!');
    }


    public function store(Request $request)
    {
        Artist::create($this->validateArtistData($request));
        return redirect()->route('home')->with('success', 'User added successfully!');
    }
}
