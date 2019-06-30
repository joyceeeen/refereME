<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
  .vh-100 {
    height: 100vh !important;
}
.bg-cover {
    background-repeat: no-repeat;
    background-position: 50%;
    background-size: cover;
}
.mr-n3, .mx-n3 {
    margin-right: -.75rem !important;
}
.mt-n1, .my-n1 {
    margin-top: -.1875rem !important;
}

body {
    font-family: Cerebri Sans,sans-serif;
    font-size: .9375rem;
    font-weight: 400;
    line-height: 1.5;
    color: #12263f;
    text-align: left;
}
.container-fluid {
    width: 100%;
    padding-right: 12px;
    padding-left: 12px;
    margin-right: auto;
    margin-left: auto;
    overflow: hidden;
}
.border-top-2 {
    border-top-width: 3px !important;
}
.bg-auth {
    background-color: #fff;
}
.align-items-center {
    align-items: center !important;
}
.d-flex {
    display: flex !important;
}
*, ::after, ::before {
    box-sizing: border-box;
}
body,html{
  padding: 0px;
  margin: 0px;
}
  </style>
</head>
<body class="d-flex align-items-center bg-auth border-top border-top-2 border-primary">
  @yield('content')

</body>
</html>
