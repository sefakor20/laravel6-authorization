@foreach ($conversation->replies as $reply)
    <div>
      <header style="display: flex; justify-content: space-between;">
        <p class="m-0"><strong>{{ $reply->user->name }} said ...</strong></p>

        {{-- display best reply --}}
        @if ($reply->isBest())
            <span class="text-success">Best Reply!!</span>
        @endif
      </header>

      {{ $reply->body }}

      @can('update', $conversation)
        <form method="POST" action="/best-replies/{{ $reply->id }}" class="mt-2">
          @csrf
          <button type="submit" class="btn btn-primary text-white">Best Reply?</button>
        </form>
      @endcan

      @continue($loop->last)

      <hr>
    </div>
@endforeach