@extends('layouts.app')
@section('title', 'Halaman Home')
@section('content')
  ini adalah halaman home {{ $name }}
@endsection
@section('js')
  <script>
    console.log('hello');
  </script>
@endsection