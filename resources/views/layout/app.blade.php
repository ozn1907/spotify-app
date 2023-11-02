<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/flowbite.js'])

</head>

<body>
    <x-header :title="'Gelikete nummers'" :totalSongsSynced="$totalSongsSynced"
        :totalDurationInHours="$totalDurationInHours" :totalDurationInMinutes="$totalDurationInMinutes" />

    <main>
        @yield('content')
    </main>

    <x-artists :Artists="$artists" />

</body>

</html>