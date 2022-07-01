<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>{{ $title }}</title>
</head>

<body class="bg-slate-700 text-slate-400">

  @include('layout.header')
  <div class="w-[80%] mx-auto py-8">
    @yield('body')
  </div>
  @include('layout.footer')

</body>

</html>