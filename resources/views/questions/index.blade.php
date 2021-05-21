@extends('template')

@section('index')

<div class="container">
    <h1> Recent Questions</h1>

    <hr>
    @foreach ($questions as $item)

    <div class="jumbotron">
    <h3>{{ $item->title }}</h3>
    <p>{{ $item->description }}</p>
    <a href="{{ route('questions.show', $item->id) }}" class="btn btn-primary btn-sm">{{ $item->id }}</a>
    </div> 
    @endforeach
   
    
    {{ $questions->links() }}
</div>
    
@endsection