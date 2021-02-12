@if(auth()->user()->isNot($user) )
    <form method="POST" action="{{ route('follow', $user->username) }}">
        @csrf
        <button type="submit" methid="POST" class="bg-blue-500 hover:bg-blue-600 rounded-full shadow py-2 px-4 text-white text-xs">
            {{ auth()->user()->following($user) ? 'Unfollow me' : 'Follow me' }}
        </button>
    </form>
@endif
