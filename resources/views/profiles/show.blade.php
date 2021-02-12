<x-app>
    <header class="mb-3 relative">
        <div class="relative">
            <img class="mb-6" src="https://raw.githubusercontent.com/laracasts/Tweety/master/public/images/default-profile-banner.jpg" alt="">
            <img src="{{ $user->avatar }}" alt="" class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2" style="left:50%" width="150px">
        </div>
        <div class="flex justify-between items-center mb-6">
            <div style="max-width: 270px">
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined at: {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div class="flex">
                @can('edit', $user)
                <a href="{{ $user->path('edit') }}" class="py-2 border border-grey-300 rounded-full px-4 text-xs">
                    Edit Profile
                </a>
                @endcan
                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>
        <div>
            <p class="text-sm">
                The name’s Bugs. Bugs Bunny. Don’t wear it out. Bugs is an anthropomorphic gray and white rabbit or hare who is famous for his flippant, insouciant personality.
                He is also characterized by a Brooklyn accent, his portrayal as a trickster, and his catch phrase "Eh...What's up, doc?"
            </p>
        </div>
    </header>

    @include('_timeline', [
    "tweets" => $tweets
    ])
</x-app>
