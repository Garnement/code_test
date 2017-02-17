    <nav class="center {{ (auth()->check()) ? 'blue-grey darken-1' : 'blue lighten-1'}}">
        <div class="nav-wrapper">
            <ul class="right hide-on-med-and-down">
                <li><a href="">Contact</a></li>
                <li><a href="{{route('home')}}">Accueil</a></li>
                <li><a href="">Mentions légales</a></li>
            </ul>
        </div>
    </nav>