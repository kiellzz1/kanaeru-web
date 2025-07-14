<?php

namespace App\Http\Controllers;

use App\Services\SpotifyService;

class SpotifyController extends Controller
{
    public function index(SpotifyService $spotify)
    {
        $playlistId = '37i9dQZF1DX6xZZEgC9Ubl'; // This Is Cigarettes After Sex
        $tracks = $spotify->getPlaylistTracks($playlistId);

        return view('music', compact('tracks'));
    }
}
