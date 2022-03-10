<div>
    show tweets

    <p>{{ $message }}</p>

    <form method="post" wire:submit.prevent='create'>
        <input type="text" id="message" name="message" wire:model='message'>
        <button type="submit">Criar Tweet</button>
    </form>

    <hr>

    @foreach ($tweets as $tweet)
        {{ $tweet->user->name  }} - <b>{{ $tweet->content }}</b> <br>
    @endforeach
</div>
