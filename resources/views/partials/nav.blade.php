<nav>
    <ul>
        <li class="{{  setActive('home')}}"><a href="{{ route('home')}}">Home</a></li>
        <li class="{{  setActive('project.*')}}"><a href="{{ route('project.index')}}">Portafolio</a></li>
        <li class="{{  setActive('about')}}"><a href="{{ route('about')}}">About</a></li>
        <li class="{{  setActive('contact')}}"><a href="{{ route('contact')}}">Contactos</a></li>

        @guest
        <li class="{{  setActive('contact')}}"><a href="{{ route('login')}}">login</a></li>
         @else
         <li><a href="#" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">cerrar session</a></li>
        @endguest
      
    </ul>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form> 
