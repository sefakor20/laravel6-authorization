@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
          <div class="mb-5">
            <a href="/conversations" class="btn btn-danger">Go Back</a>
          </div>
            <h1>{{ $conversation->title }}</h1>
            <p class="text-muted">Posted by: {{ $conversation->user->name }}</p>
            <p>{{ $conversation->body }}</p>
            <br>
            <hr>

            @include('conversations.replies')
        </div>
    </div>
</div>

@endsection