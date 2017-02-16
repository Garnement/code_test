  <nav class="nav-extended blue lighten-2">
    <div class="nav-wrapper">
      <a href="{{route('home')}}" class="brand-logo">Code Test</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{route('login')}}">Sign in</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="{{route('home')}}">Accueil</a></li>
        @foreach ($categories as $categorie)
        <li class="tab"><a class="active" href="{{route('category', $categorie->id)}}">{{$categorie->name}}</a></li>
        @endforeach
      </ul>
    </div>
  </nav>