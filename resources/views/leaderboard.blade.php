@extends('layouts.app')
@section('content')
    <div class="bg-white p-6 rounded shadow">
        <h1 class="text-xl font-bold">Leaderboard</h1>
        <p class="text-sm text-gray-600">Top farmers by points</p>

        <table class="w-full mt-4 table-auto border-collapse">
            <thead>
            <tr class="text-left">
                <th class="py-2">Rank</th>
                <th class="py-2">Farmer</th>
                <th class="py-2">District</th>
                <th class="py-2">Points</th>
            </tr>
            </thead>
            <tbody>
            @foreach($top as $i => $u)
                <tr class="border-t">
                    <td class="py-2">{{ $i+1 }}</td>
                    <td class="py-2">{{ $u->name }}</td>
                    <td class="py-2">{{ $u->district }}</td>
                    <td class="py-2 font-semibold">{{ $u->points }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
