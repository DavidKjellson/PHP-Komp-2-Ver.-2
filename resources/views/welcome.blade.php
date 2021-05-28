<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IK Svalan</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8" style="width: 50%;">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <h1>IK Svalan</h1>
            </div>
            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    @foreach ($activities as $actitivty)
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg leading-7 font-semibold">

                                <h2 class="text-center">{{ $actitivty->activity }}</h2>

                            </div>
                        </div>

                        <ul class="ml-12">
                            @foreach ($teams as $team)
                            @if ($team->activity_id === $actitivty->id)

                            <li class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                <a href="/teams/{{$team->id}}" class="underline text-gray-900 dark:text-white">{{$team->team_name}}</a>
                            </li>
                            @endif

                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Copyright © 2021 by David Kjellson. All Rights Reserved. Or something.
                </div>
            </div>
        </div>
    </div>
</body>

</html>