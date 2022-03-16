<div>

    <form method="post" wire:submit.prevent='create'>
        <input type="text" id="content" name="content" wire:model='content'>
        @error('content') {{ $message }} @enderror

        <button type="submit">Criar Tweet</button>
    </form>

    <hr>

    @foreach ($tweets as $tweet)
        {{ $tweet->user->name  }} - <b>{{ $tweet->content }}</b> <br>
    @endforeach

    <hr>

    <div>
        {{ $tweets->links() }}
    </div>
</div>
