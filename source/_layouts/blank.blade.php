<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="{{ $page->description }}">
  <title>{{ $page->title }}</title>
  <link rel="canonical" href="{{ $page->getUrl() }}">
  <link rel="icon" href="/assets/images/favicon.png">
  <link rel="stylesheet" href="{{ mix('css/app.css', 'assets/build') }}">
  <script defer src="{{ mix('js/app.js', 'assets/build') }}"></script>
  @yield('head')
</head>

<body class="@yield('body_class')">
  @yield('body')
  @yield('scripts')
</body>

</html>