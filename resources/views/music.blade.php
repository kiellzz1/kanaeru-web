@extends('layouts.app')

@section('content')
<div class="p-6 bg-gray-900 min-h-screen text-white">
    <h1 class="text-2xl mb-6 font-bold">🎧 Kanaeru Music Player</h1>
    
    <div class="space-y-6">
        @foreach ($tracks as $track)
            <div class="bg-gray-800 p-4 rounded-lg shadow hover:shadow-blue-400 transition-all">
                <p class="text-lg font-semibold">{{ $track['track']['name'] }}</p>
                <p class="text-sm text-gray-400 mb-2">by {{ $track['track']['artists'][0]['name'] }}</p>

                @if ($track['track']['preview_url'])
                    <audio controls class="w-full">
                        <source src="{{ $track['track']['preview_url'] }}" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                @else
                    <p class="text-red-400 text-sm italic">🎧 No preview available</p>
                @endif
            </div>
        @endforeach
    </div>
</div>
@endsection
