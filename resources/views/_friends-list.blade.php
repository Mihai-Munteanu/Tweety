<div class="bg-gray-200 border border-gray-300 rounded-lg py-4 px-6">
    <h3 class="font-bold text-xl">Following</h3>

    <ul>
        @forelse(auth()->user()->follows as $user)
            <li class="{{$loop->last ? '' : 'mb-4' }}">
                <div>
                    <a href="{{ route('profile', $user) }}" class="flex items-center text-sm">
                        <img width="40px" height="40px" class="rounded-full mr-2" src="{{ $user->avatar }}" alt="">
                        {{$user->name}}
                    </a>
                </div>
            </li>

        @empty
            <p class="p-6">no friends yet</p>
        @endforelse
    </ul>

</div>
