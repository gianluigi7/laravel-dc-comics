<header>
    <div class="container">

        <div>
            <img src="{{ Vite::asset('resources/img/DC_Comics_logo.png') }}" alt="">
        </div>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="{{  route('comics.create')  }}">Create</a></li>
                <li><a href="{{  route('comics.index')  }}">Comics</a></li>
            </ul>
        </nav>
    </div>
</header>