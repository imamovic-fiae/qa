@extends('template')

@section('prikaz')

<div class="container">
    <h2>{{ $prikaz->title }}</h2>
    <p>{{  $prikaz->description }}</p>
</div>

@endsection