@extends('layouts.main')

@section('container')
    <h1>Halaman BLOG</h1>
    <h3> {{ $name }} </h3>
    <p>{{$email}}</p>
    <img src="img/{{ $image }}" alt="kkn" width="200px">
@endsection