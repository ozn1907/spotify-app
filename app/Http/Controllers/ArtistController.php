<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Http\Requests\ArtistRequest;

class ArtistController extends Controller
{
    public function show()
    {
        $artists = Artist::all();
        $totalDurationInSeconds = $artists->sum('duration');

        // Calculate total duration in hours and minutes
        $totalDurationInHours = floor($totalDurationInSeconds / 3600);
        $totalDurationInMinutes = ($totalDurationInSeconds % 3600) / 60;

        return view('layout.app', [
            'artists' => $artists,
            'totalSongsSynced' => $artists->count(),
            'totalDurationInHours' => $totalDurationInHours,
            'totalDurationInMinutes' => number_format($totalDurationInMinutes, 2),
        ]);
    }

    public function delete($uuid)
    {
        Artist::where('uuid', $uuid)->delete();

        return redirect()->route('home')->with('delete', 'Artist deleted successfully!');
    }

    public function deleteAll()
    {
        Artist::query()->truncate();

        return redirect()->route('home');
    }

    public function view($uuid)
    {
        $artist = Artist::where('uuid', $uuid)->first();

        return view('components.edit-artist', [
            'artist' => $artist,
        ]);
    }

    public function edit(ArtistRequest $request, $uuid)
    {
        $artist = Artist::where('uuid', $uuid)->first();

        $artist->update($request->validated());
        return redirect()->route('home')->with('edit', 'Artist updated successfully!');
    }

    public function store(ArtistRequest $request)
    {
        Artist::create($request->validated());
        return redirect()->route('home')->with('success', 'Artist added successfully!');
    }
}
