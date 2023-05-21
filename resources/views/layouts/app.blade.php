<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield("title")</title>
        <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
       
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
      </head>
<body>


    <div class="container-scroller">
        @include("layouts.inc.navbar")
        <div class="container-fluid page-body-wrapper">
            @include("layouts.inc.sidebar")
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield("content")
                </div>
                @include("layouts.inc.footer")
            </div>
        </div>
    </div>
    
    
    {{-- Scripts --}}
    <script defer async src="{{ asset('assets/js/app.js') }}"></script>
    <script defer async src="{{ asset('assets/js/chart.js') }}"></script>
    <script defer async src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script defer async src="{{ asset('assets/js/file-upload.js') }}"></script>
    <script defer async src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script defer async src="{{ asset('assets/js/jquery.cookie.js') }}"></script>
    <script defer async src="{{ asset('assets/js/misc.js') }}"></script>
    <script defer async src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script defer async src="{{ asset('assets/js/todo.js') }}"></script>
    <script defer async src="{{ asset('assets/js/todolist.js') }}"></script>
    <script defer async src="{{ asset('assets/vendors/js/bootstrap.min.js.map') }}"></script>
    <script defer async src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>

</body>
</html>