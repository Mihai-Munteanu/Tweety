<div class="flex p-4 {{$loop->last ? "" : "border-b border-b-grey-400"}}">
    <div name="avatar" class="mr-2 flex-shrink-0">
        <a href="{{ route('profile', $tweet->user) }}">
            <img width="50px" height="50px" src="{{ $tweet->user->avatar }}" alt="" class="rounded-full mr-2">
        </a>
    </div>

    <div name="userName">
        <h5 class="bold mb-2">
            <a href="{{ route('profile', $tweet->user) }}">
                {{ $tweet->user->name }}
            </a>
        </h5>
        <p class="text-sm mb-2">
            {{$tweet->body}}

            <x-like-buttons :tweet='$tweet' />

    </div>
</div>
