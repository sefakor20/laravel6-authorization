@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            @foreach ($conversations as $conversation)
                <h2><a href="/conversations/{{ $conversation->id }}">{{ $conversation->title }}</a></h2>

                @continue($loop->last)

                <hr>
            @endforeach
        </div>
    </div>
</div>
@endsection