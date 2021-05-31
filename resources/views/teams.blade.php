<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{$team->team_name}}</title>
  <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
</head>

<body class="antialiased">
  <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8" style="width: 50%;">
      <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
        <h1>{{$team->team_name}}</h1>
      </div>
      <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-2">
          <div class="p-6">
            <div class="flex items-center">
              <div class="ml-4 text-lg leading-7 font-semibold">

                <h2 class="text-center">Medlemmar</h2>

              </div>
            </div>

            <ul class="ml-12">
              @foreach ($members as $member)
              <li class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                {{$member->firstname }} {{$member->lastname}}
              </li>
              @endforeach
            </ul>
          </div>
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