  <nav class="nav-extended blue-grey darken-1">
    <div class="nav-wrapper">
      <a href="{{route('home')}}" class="brand-logo">Code Test</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{route('logout')}}">Sign out</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>
      </ul>
    </div>
    <div class="nav-content">
      <ul>
        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
        @foreach ($categories as $category)
          <li><a href="{{route('cat', $category->id)}}" title="">{{$category->name}}</a>
        @endforeach
          <li><a href="#" title="">Sans catégorie</a>
      </ul>
    </div>
  </nav>