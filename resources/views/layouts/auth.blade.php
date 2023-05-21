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
        <div class="container-fluid page-body-wrapper full-page-wrapper">
          <div class="content-wrapper d-flex align-items-center auth">
            <div class="row flex-grow">
              <div class="col-lg-4 mx-auto">
                <div class="auth-form-light text-left p-5">
                  <div class="brand-logo">
                    <img src="../../assets/images/logo.svg">
                  </div>
                  <h4>Hello! let's get started</h4>
                  <h6 class="font-weight-light">Sign in to continue.</h6>
                  @yield("form")
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
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