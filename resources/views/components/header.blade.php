@use(\Illuminate\Support\Facades\Auth as Auth)

<header>
    <div class="header__content container">
        <h1>Company</h1>
        <ul class="header__links">
            <li><a href="">Test</a></li>
            <li><a href="">Test</a></li>
            <li><a href="">Test</a></li>
        </ul>
            <ul class="header__btns">
                @auth

                    <li>
                        <form action="/user/logout" method="post">
                            @csrf
                            <button class="btn">
                                Log out
                            </button>
                        </form>
                    </li>
                    @if(Auth::user()->role_id == 3)
                        <li><a class="btn" href="/product/create">Add product</a></li>
                    @endif
                @else
                    <li><a class="btn" href="/login">Log in</a></li>
                    <li><a class="btn" href="/signup">Sign up</a></li>
                @endauth
            </ul>
    </div>
</header>
