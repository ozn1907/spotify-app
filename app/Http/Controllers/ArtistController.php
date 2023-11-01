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
        $artists = Artist::paginate(5);
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
