<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dodols of Your Dreams</title>
  @vite('resources/css/app.css')
</head>
<body class="font-sans bg-white text-gray-800">

  @include('partials.navbar')

  <main>
    @yield('content')
  </main>

  @include('partials.footer')

</body>
</html>
