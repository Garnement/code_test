  <nav class="nav-extended blue lighten-1">
    <div class="nav-wrapper">
      <a href="{{route('home')}}" class="brand-logo">Code Test</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{route('login')}}">Connexion</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="{{route('home')}}">Accueil</a></li>
        @foreach ($categories as $category)
          <li><a href="{{ route('category', $category->id) }}">{{$category->name}}</a></li>
        @endforeach
        <li><a href="{{route('login')}}">Connexion</a></li>
      </ul>
    </div>

    <div class="nav-content blue lighten-1">
      <ul>
        <li><a href="{{ route('home') }}">Accueil</a></li>
        @foreach ($categories as $category)
          <li><a href="{{ route('category', $category->id) }}" title="{{$category->name}}">{{$category->name}}</a>
        @endforeach
        <li><a href="{{route('frontNoCat')}}" title="Questions sans catégorie">Sans catégorie</a>
      </ul>
    </div>
  </nav>