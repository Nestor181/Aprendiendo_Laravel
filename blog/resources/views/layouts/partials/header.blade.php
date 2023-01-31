<header> 
    <h1> <strong> Aprendiendo </strong></h1>
    <nav>
        <ul>
            <!--La class usa un método de laravel sirve para saver si es que estamos en el link de douteIs y si sí devuelve un true-->
            <li> <a href="{{route('Home')}}" class="{{ request()->routeIs('Home') ? 'active' : ''}}">Home</a> </li>   
            <li> <a href="{{route('cursos.index')}}" class="{{ request()->routeIs('cursos.*') ? 'active' : ''}}">Cursos</a> </li>       
            <li> <a href="{{route('nosotros')}}" class="{{ request()->routeIs('nosotros') ? 'active' : ''}}">Nosotros</a> </li>
            <li>
                <a href="{{route('contactanos.index')}}" class="{{ request()->routeIs('contactanos.index') ? 'active' : ''}}">Contactanos</a>
            </li>

        </ul>
    </nav>
</header>