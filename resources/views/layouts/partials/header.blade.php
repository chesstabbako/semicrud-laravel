<header>

    <nav>
       
     <ul>
         <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'ac' : ''}}">
             Home</a>
         </li>
         <li><a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'ac' : ''}}">Cursos</a></li>
         <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'ac' : ''}}">Nosotros</a></li>
         <li><a href="{{route('contactanos.index')}}" class="{{request()->routeIs('contactanos.index') ? 'ac' : ''}}">Contactanos</a></li>
     </ul>

    </nav>

 </header>