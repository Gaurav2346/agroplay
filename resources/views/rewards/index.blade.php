@extends('layouts.app')
@section('content')
    <div class="bg-white p-6 rounded shadow">
        <h1 class="text-xl font-bold">Rewards</h1>
        <p class="text-sm text-gray-600">Use points to redeem useful items.</p>

        @if(!$currentUser)
            <div class="mt-4 p-3 bg-yellow-50 border border-yellow-200 rounded text-yellow-800">
                Select a farmer first to redeem rewards.
            </div>
        @else
            <div class="mt-2">Current: <strong>{{ $currentUser->name }}</strong> — Points: <strong>{{ $currentUser->points }}</strong></div>
        @endif

        <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach($rewards as $r)
                <div class="p-4 border rounded bg-slate-50">
                    <h3 class="font-semibold">{{ $r->title }}</h3>
                    <p class="text-sm text-gray-700 mt-1">{{ $r->description }}</p>
                    <div class="mt-3 flex items-center justify-between">
                        <div class="text-sm text-gray-600">Cost: <strong>{{ $r->cost_points }} pts</strong></div>
                        <form method="POST" action="{{ route('rewards.redeem', $r->id) }}">
                            @csrf
                            <button class="px-3 py-1 bg-indigo-600 text-white rounded hover:opacity-90">Redeem</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
