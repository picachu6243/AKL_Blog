<link rel="stylesheet" href="/css/nav.css">
<div class="navbar1">
        <a style="float: left;    font-size: 2rem;
        display: inline;
        color: white;
        font-family: cursive;
        margin: 4px 0 0 10px;
        padding: 0;
        width: 10px;
        mix-blend-mode: screen;" class="img" href="/">ALKBlog</a>
        {{-- <h2>ALKBlog</h2> --}}
    <div>
        @if (Route::has('login'))
            <div class="loReg">
                @auth
                    <div>
                        <div class="flex items-center">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <div class="shrink-0 mr-3">
                                    <img class="h-10 w-10 rounded-full object-cover"
                                        src="{{ Auth::user()->profile_photo_url }}"
                                        alt="{{ Auth::user()->name }}" />
                                </div>
                            @endif
                            <div class="dropdown1">
                                <button class="dropbtn">{{ Auth::user()->name }} <i class="fa fa-caret-down"></i></button>
                                <div class="dropdown1-content">
                                    <div class="column">
                                        <div>
                                            <x-jet-responsive-nav-link href="{{ route('profile.show') }}"
                                                :active="request()->routeIs('profile.show')">
                                                {{ __('Profile') }}
                                            </x-jet-responsive-nav-link>
                                        </div>

                                        <div>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                                                </x-jet-responsive-nav-link>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">????ng
                        nh???p</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">????ng k??</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>

    <div class="dropdown1">
        <button class="dropbtn">Th??? lo???i <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown1-content">
            <div class="row">
                <div class="column">
                    <a href="#">B?? ???n</a>
                    <a href="#">V?? thu???t</a>
                    <a href="#">Shounen</a>
                    <a href="#">??m nh???c</a>
                    <a href="#">Seinen</a>
                    <a href="#">Tokusatsu</a>
                    <a href="#">Ki???m hi???p</a>
                    <a href="#">D??? gi???i</a>
                    <a href="#">Demon</a>
                    <a href="#">H??nh ?????ng</a>
                </div>
                <div class="column">
                    <a href="#">Bi k???ch</a>
                    <a href="#">Tr?? ch??i</a>
                    <a href="#">Si??u nhi??n</a>
                    <a href="#">Samurai</a>
                    <a href="#">Xuy??n kh??ng</a>
                    <a href="#">H??i h?????c</a>
                    <a href="#">Live Action</a>
                    <a href="#">Gi??? t?????ng</a>
                    <a href="#">Th??m t???</a>
                    <a href="#">Shoujo</a>
                </div>
                <div class="column">
                    <a href="#">Mecha</a>
                    <a href="#">Phi??u l??u</a>
                    <a href="#">Vi???n t?????ng</a>
                    <a href="#">Tr??ng sinh</a>
                    <a href="#">T??nh c???m</a>
                    <a href="#">H???c ???????ng</a>
                    <a href="#">L???ch s???</a>
                    <a href="#">Kinh d???</a>
                    <a href="#">Qu???n ?????i</a>
                    <a href="#">?????i th?????ng</a>
                </div>
            </div>
        </div>
    </div>

    <div class="search-box1">
        <button class="btn-search1"><i class="fa fa-search"></i></i></button>
        <input type="text" class="input-search1" placeholder="C?? kh??ng gi??? m???t th?? t??m...">
    </div>

</div>
