<!DOCTYPE html>
<html class="wide wow-animation smoothscroll scrollTo" lang="en">

@include('head')
@section('after-head')

@include('header')
@section('after-header')

<body>
  @if (Route::current()->getUri() == '/')
    @include('home')
    @section('after-home')
  @elseif (Route::current()->getUri() == 'quienes-somos')
    @include('quienes-somos')
    @section('after-quienes-somos')
  @elseif (Route::current()->getUri() == 'que-hacemos')
    @include('que-hacemos')
    @section('after-que-hacemos')
  @elseif (Route::current()->getUri() == 'conversemos')
    @include('conversemos')
    @section('after-conversemos')
  @else 
    @include('home')
    @section('after-home')
  @endif
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/underline.js"></script>
</body>
</html>