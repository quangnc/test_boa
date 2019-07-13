<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('interface/admin/plugins/font-awesome/css/font-awesome.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('interface/admin/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('interface/admin/css/style.css') }}">

  <!-- iCheck -->
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">
  <!-- navigation-top -->
  @include('admin.navigation-top')
  <!-- /.navigation-top -->

  <!-- navigation-left -->
  @include('admin.navigation-left')
  <!-- /.navigation-left -->

  <div class="content-wrapper">
    <!-- breadcrumb -->
    @include('admin.breadcrumb')
    <!-- /.breadcrumb -->

    <!--content -->
    @yield('content')
    <!-- /.content -->

  </div>
  <!--footer -->
  @include('admin.footer')
  <!-- /.footer -->

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>

<!-- jQuery -->
<script src="{{ asset('interface/admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('interface/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('interface/admin/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('interface/admin/dist/js/demo.js') }}"></script>

{{--Editor--}}
<script src="{{ asset('interface/admin/plugins/ckeditor/ckeditor.js') }}"></script>

<script src="{{ asset('js/custom.js') }}"></script>

{{-- Vue components --}}
@if(env('DEVELOPMENT', true))
  <script src="{{ mix('js/app.js') }}"></script>
@else
  <script src="{{ asset('js/app.js') }}"></script>
@endif

</body>
</html>
