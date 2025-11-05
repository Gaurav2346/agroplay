@extends('layouts.app')
@section('content')

    <div class="bg-transparent p-6 rounded shadow">
        <h1 class="text-2xl font-bold">AgroPlay — Gamified Sustainable Farming</h1>
        <p class="mt-2 text-gray-700">
            Demo: complete quests, earn points, redeem rewards this prototype is based on our SIH idea.
        </p>

        <div class="mt-4 grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-transparent p-4 rounded shadow">
                <h3 class="font-semibold">Quests</h3>
                <p class="text-sm text-gray-600">Hands-on actions for farmers to earn points.</p>
                <a href="{{ route('quests.index') }}" class="inline-block mt-2 text-indigo-600">Open Quests →</a>
            </div>

            <div class="bg-transparent p-4 rounded shadow">
                <h3 class="font-semibold">Leaderboard</h3>
                <p class="text-sm text-gray-600">Top farmers by points.</p>
                <a href="{{ route('leaderboard') }}" class="inline-block mt-2 text-indigo-600">View Leaderboard →</a>
            </div>

            <div class="bg-transparent p-4 rounded shadow">
                <h3 class="font-semibold">Rewards</h3>
                <p class="text-sm text-gray-600">Redeem points for benefits.</p>
                <a href="{{ route('rewards.index') }}" class="inline-block mt-2 text-indigo-600">Redeem →</a>
            </div>
        </div>

        <div class="mt-6">
            <p class="text-sm text-gray-700 mt-2">
                A gamified platform to promote sustainable farming. Quests, badges, leaderboards, and rewards for farmers. Admin & AI features are placeholders in this demo.
            </p>
        </div>
    </div>
@endsection
