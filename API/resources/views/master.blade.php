<!DOCTYPE html>
<html lang="en">
<head>
 @include('layouts/head')
</head>
  <!-- /.navbar -->
 @include('layouts/navbar')
  <!-- Main Sidebar Container -->
@include('layouts/sidebar')

  <!-- Content Wrapper. Contains page content -->
@yield('content')



<!-- /.content-wrapper -->
@include('layouts/footer')


  <!-- Control Sidebar -->
@include('layouts/scripts')

{{-- @php
$path = $_SERVER['PHP-SELF'];
dd($path);
@endphp --}}

<!-- ./wrapper -->



<!-- Page specific script -->


</html>
