<x-master>
    <div class="container mx-auto mt-10">
        <div class="flex justify-center">
            <div class="w-1/4 bg-gray-200 rounded-lg p-8 text-center">
                <div class="mb-10">
                    Tweety
                </div>

                <div class="links text-blue-500 underline space-x-2">
                    @auth
                        <a href="{{ url('/tweets') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-master>
