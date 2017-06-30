{{--
  This operator looks for a layout template in the resources > views folder. This particular one looks
  inside of the resources > views > layouts folder for the file 'main.blade.php'
--}}
@extends('layouts.main')



{{--
  This is a @section operator that injects code directly to the spot where
  @yield('title') is in the main.blade.php file.
--}}
@section('title')
Secondary Nav
@stop

@section('subtitle')
A Subtitle
@stop

@section('dropNav')
<li>
  <a href="#" class="byu-subnav-trigger" ><span>Secondary Nav</span></a>
  <ul>
    <li class="go-back"><a href="#0">Menu</a></li>
    <li><a href="#">Single Link</a></li>
    <li><a href="#">Another Link</a></li>
    <li><a href="#">Single Link</a></li>
    <li><a href="#">Other Link</a></li>
    <!--PUT SERVICE NAME IN PLACEHOLDER -->
    <li><a href="#" class="placeholder">Secondary Nav</a></li>
  </ul>
</li>
@stop
@section('page-title')
Example of Secondary Page
@stop
@section('content')
Place Your Content Here.

@stop


