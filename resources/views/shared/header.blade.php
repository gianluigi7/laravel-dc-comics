<header>
    <div class="container d-flex">

        <div>
            <img src="{{ Vite::asset('resources/img/DC_Comics_logo.png') }}" alt="">
        </div>
        <nav>
            <ul class="d-flex">
                <li><a href="/">Home</a></li>
                <li><a href="{{  route('user')  }}">Your comics</a></li>
                <li><a href="{{  route('comics.create')  }}">Create</a></li>
                <li><a href="{{  route('comics.index')  }}">Shop</a></li>
            </ul>
        </nav>
    </div>
</header>