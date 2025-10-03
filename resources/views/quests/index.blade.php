@extends('layouts.app')
@section('content')
    <div class="bg-white p-6 rounded shadow">
        <h1 class="text-xl font-bold">Quests</h1>
        <p class="text-sm text-gray-600">Complete a quest to earn points.</p>

        @if(!$currentUser)
            <div class="mt-4 p-3 bg-yellow-50 border border-yellow-200 rounded text-yellow-800">
                Select a farmer from the top-right dropdown to complete quests.
            </div>
        @else
            <div class="mt-4 text-sm">Current: <span class="font-semibold">{{ $currentUser->name }}</span> — Points: <span class="font-semibold">{{ $currentUser->points }}</span></div>
        @endif

        <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach($quests as $q)
                <div class="p-4 border rounded bg-slate-50">
                    <h3 class="font-semibold">{{ $q->title }}</h3>
                    <p class="text-sm text-gray-700 mt-1">{{ $q->description }}</p>
                    <div class="mt-3 flex items-center justify-between">
                        <div class="text-sm text-gray-600">Reward: <strong>{{ $q->reward_points }} pts</strong></div>

                        <form method="POST" action="{{ route('quests.complete', $q->id) }}">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ $currentUser?->id }}">
                            <button class="px-3 py-1 bg-green-600 text-white rounded hover:opacity-90">Complete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
