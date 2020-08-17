<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('/md/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ url('/md/img/vue.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>
        {{ trans('panel.site_title') }}
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <meta name="app-locale" content="{{ App::getLocale() }}">

    {{-- Fonts and icons --}}
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ mix('/adminapp/css/app.css') }}">
</head>

<body>
    <div id="app"></div>

    {{-- Core JS Files --}}
    <script src="{{ url('/md/js/core/jquery.min.js') }} "></script>
    <script src="{{ url('/md/js/core/popper.min.js') }} "></script>
    <script src="{{ url('/md/js/core/bootstrap-material-design.min.js') }} "></script>
    <script src="{{ url('/md/js/plugins/perfect-scrollbar.jquery.min.js') }} "></script>
    <script src="{{ url('/md/js/plugins/bootstrap-notify.js') }} "></script>

    {{-- Plugin for the momentJs --}}
    <script src="{{ url('/md/js/plugins/moment.min.js') }} "></script>

    {{-- Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select --}}
    <script src="{{ url('/md/js/plugins/bootstrap-selectpicker.js') }} "></script>

    {{-- Notifications Plugin --}}
    <script src="{{ url('/md/js/plugins/bootstrap-notify.js') }} "></script>

    <script src="{{ mix('/adminapp/js/app.js') }}" type="text/javascript" charset="utf-8"></script>

    {{-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --}}
    {{-- <script src="{{ url('/md/js/material-dashboard.min.js') }} "></script> --}}
</body>

</html>