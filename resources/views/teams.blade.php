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
      <table id="customers">
        <tr>
          <th>Name</th>
          <th>Birthday</th>
          <th>E-mail</th>
          <th>Member Fee</th>
        </tr>
        @foreach ($members as $member)
        <tr>
          <td>{{$member->firstname}} {{$member->lastname}}</td>
          <td>{{$member->birthday}}</td>
          <td><a href="mailto:{{$member->email}}">{{$member->email}}</a></td>
          <td>€{{$member->member_fee}}</td>
        </tr>
        @endforeach
      </table>
      <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
        <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
          Copyright © 2021 by David Kjellson. All Rights Reserved. Or something.
        </div>
      </div>
    </div>
  </div>
</body>

</html>