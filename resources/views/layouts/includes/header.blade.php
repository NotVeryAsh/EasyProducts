<nav class="px-4 sm:px-10 drop-shadow-sm">
    <div class="flex flex-wrap items-center mx-auto p-4">
        <a href="{{ route('home') }}" class="flex items-center">
            <img src="{{ asset('images/logo.jpg') }}" class="h-20 mr-5" alt="{{config('app.name')}}"/>
            <span class="self-center text-3xl font-semibold whitespace-nowrap">{{config('app.name')}}</span>
        </a>
        <div class="flex flex-wrap items-center space-x-8 ml-auto p-4">
            {{--            <a href="">--}}
            {{--                <button class="w-8 h-8">--}}
            {{--                    <div>--}}
            {{--                        <span class="text-primary">--}}
            {{--                            <i class="fa-solid fa-heart"></i>--}}
            {{--                        </span>--}}
            {{--                    </div>--}}
            {{--                </button>--}}
            {{--            </a>--}}
            {{--            <a href="">--}}
            {{--                <button class="w-8 h-8">--}}
            {{--                    <div>--}}
            {{--                        <span class="text-primary">--}}
            {{--                            <i class="text-xl fa-solid fa-bag-shopping"></i>--}}
            {{--                        </span>--}}
            {{--                    </div>--}}
            {{--                </button>--}}
            {{--            </a>--}}
            <button data-collapse-toggle="navbar-account">
                <div
                    class="p-1 ring-2 ring-primary flex items-center justify-center w-10 h-10 overflow-hidden rounded-full bg-white">
                    <span class="text-primary"><i class="fa-solid fa-user"></i></span>
                </div>
            </button>
            <div id="navbar-account"
                 class="drop-shadow-xl z-10 hidden w-5/12 md:w-4/12 lg:w-3/12 xl:w-2/12 absolute top-0 right-0 mt-20 flex-column justify-content-center align-items-center">
                <ul class="font-medium flex flex-col py-4 mt-4 rounded-lg bg-white drop-shadow-sm">
                    <li>
                        @if(Auth::user())
                            <a href="{{--{{ route('account') }}--}}"
                               class="block py-3 pl-3 pr-4 rounded hover:bg-gray-50 hover:text-primary {{--@if(request()->routeIs('account')) text-primary @endif--}}"
                               aria-current="page">Account</a>
                            <form action="{{ route('logout') }}" method="POST"
                                  class="block py-3 pl-3 pr-4 rounded hover:bg-gray-50 hover:text-primary">
                                @csrf
                                <button type="submit" class="text-left w-full" aria-current="page">Log Out</button>
                            </form>
                        @else
                            <a href="{{--{{ route('login') }}--}}"
                               class="block py-3 pl-5 pr-4 rounded hover:bg-gray-50 hover:text-primary @if(request()->routeIs('login')) text-primary @endif"
                               aria-current="page">Log In</a>
                            <a href="{{--{{ route('register') }}--}}"
                               class="block py-3 pl-5 pr-4 rounded hover:bg-gray-50 hover:text-primary @if(request()->routeIs('register')) text-primary @endif"
                               aria-current="page">Create Account</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
