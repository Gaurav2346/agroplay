<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>AgroPlay Demo</title>
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="relative min-h-screen">
<!-- Background layer (blur applied here) -->
<div class="absolute inset-0 bg-cover bg-center blur-sm"
     style="background-image: url('{{ asset('images/bg.jpg') }}');"></div>

<!-- Optional overlay (for darkening background slightly) -->
<div class="absolute inset-0 bg-black/0"></div>


<!-- Navbar -->
<nav class="bg-white/80 backdrop-blur shadow">
    <div class="max-w-5xl mx-auto px-4 py-3 flex items-center justify-between">
        <a href="{{ route('home') }}" class="font-bold text-lg">AgroPlay</a>
        <div class="flex items-center space-x-4">
            <a href="{{ route('quests.index') }}" class="hover:underline">Quests</a>
            <a href="{{ route('leaderboard') }}" class="hover:underline">Leaderboard</a>
            <a href="{{ route('rewards.index') }}" class="hover:underline">Rewards</a>
            <form action="{{ route('select.user') }}" method="POST" class="flex items-center space-x-2">
                @csrf
                <select name="user_id" onchange="this.form.submit()" class="border rounded px-2 py-1">
                    <option value="">— Select Farmer —</option>
                    @foreach(App\Models\User::orderBy('name')->get() as $u)
                        <option value="{{ $u->id }}" {{ session('current_user')==$u->id?'selected':'' }}>
                            {{ $u->name }} ({{ $u->district }}) — {{ $u->points }} pts
                        </option>
                    @endforeach
                </select>
            </form>
        </div>
    </div>
</nav>

<!-- Main Content -->
<main class="max-w-5xl mx-auto p-6 mt-6 bg-white/80 backdrop-blur rounded-lg shadow">
    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="mb-4 p-3 bg-red-100 text-red-800 rounded">{{ session('error') }}</div>
    @endif

    @yield('content')
</main>

</body>
</html>
