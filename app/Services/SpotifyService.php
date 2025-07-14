<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SpotifyService
{
    protected $clientId;
    protected $clientSecret;

    public function __construct()
    {
        $this->clientId = config('services.spotify.client_id');
        $this->clientSecret = config('services.spotify.client_secret');
    }

    public function getAccessToken()
    {
        $response = Http::asForm()
            ->withBasicAuth($this->clientId, $this->clientSecret)
            ->post('https://accounts.spotify.com/api/token', [
                'grant_type' => 'client_credentials',
            ]);

        return $response->json()['access_token'];
    }

    public function getPlaylistTracks($playlistId)
    {
        $token = $this->getAccessToken();

        $response = Http::withToken($token)
            ->get("https://api.spotify.com/v1/playlists/{$playlistId}/tracks");

        return $response->json()['items'];
    }
}
