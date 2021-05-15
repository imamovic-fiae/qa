@extends('template')

@section('content')
  
<div class="container mt-2">
    <h1>Submit Question</h1>
    <form action="{{ route('questions.store') }}" method="POST">
        @csrf
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <div class="form-group">
          <label for="email">Title</label>
          <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="form-group">
          <label for="desc">Description:</label>
          <textarea class="form-control" name="description" id="description" rows="4"></textarea>
        </div>
        @php
        $counter = (random_int(1,9)*3);
        @endphp
        <label>{{ $counter }}</label>
        <input name="counter">
        <button type="submit" class="btn btn-primary">Submit</button>
      </form> 
</div>
@endsection