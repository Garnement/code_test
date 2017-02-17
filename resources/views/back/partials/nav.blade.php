  <nav class="nav-extended blue-grey darken-1">
    <div class="nav-wrapper">
      <a href="{{route('home')}}" class="brand-logo">Code Test</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{route('logout')}}">Déconnexion</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
        @foreach ($categories as $category)
          <li><a href="{{ route('cat', $category->id) }}">{{$category->name}}</a></li>
        @endforeach
        <li><a href="{{route('logout')}}">Déconnexion</a></li>
      </ul>
    </div>

    <div class="nav-content blue-grey darken-1">
      <ul>
        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        @foreach ($categories as $category)
          <li><a href="{{ route('cat', $category->id) }}" title="">{{$category->name}}</a>
        @endforeach
        <li><a href="{{route('nocat')}}" title="">Sans catégorie</a>
      </ul>
    </div>
  </nav>