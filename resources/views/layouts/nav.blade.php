<nav class="navbar navbar-expand-lg nav fixed-top" style="background-color: #003457">
    <a class="navbar-brand" href="#">
        @if (Auth::user())
        <img alt="" class="logounanL" src="/imagenes/logoUnanL.png">
            @else
            <img alt="" class="logounan" src="/imagenes/marcaUNANlb.png">
            </img>
            @endif
        </img>
    </a>

     

    <i class="mr-auto"></i>

     <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler btn btn-outline-warning" data-target="#navbarSupportedContent" data-toggle="collapse" type="button">
        <span class="fa fa-bars">
        </span>
    </button>


   

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        @guest
        <i style="margin-right: 20px">
        </i>
        <ul class="nav mr-auto">
            <li class="nav-item">
                <h3 style="text-align: center;width: auto;height: auto;color: white">
                    FACULTAD REGIONAL MULTIDISCIPLINARIA FAREM-ESTEÍ
                </h3>
                <h3 style="text-align: center;width: auto;height: auto;color: white">
                    SISTEMA DE DEPORTES
                </h3>
            </li>
        </ul>
        @else
        
       

        <ul class="nav">
            @if (Auth::user() -> tipo == "administrador")
            {{-- Controles para el administrador --}}
            <i style="margin-right: 20px">
            </i>
            <li class="nav-item px-4">
                 <a class="fa fa-home btn btn-dark" href="/" style="font-size: 30px">
                 </a>
            </li>

            <li class="nav-item dropdown mt-1">
                <a aria-expanded="false" aria-haspopup="true" class="btn btn-outline-warning" data-toggle="dropdown" href="#" id="DropdownMenu" role="button" v-pre="">
                    Administracion
                </a>
                <div aria-labelledby="dropdownMenu" class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('users.index') }}">
                        Usuarios
                    </a>
                    <a class="dropdown-item" href="{{ route('deportes.index') }}">
                        Deportes
                    </a>
                    <a class="dropdown-item" href="{{ route('deportistas.index') }}">
                        Deportistas
                    </a>
                    <a class="dropdown-item" href="{{ route('instituciones.index') }}">
                        Instituciones
                    </a>
                    <a class="dropdown-item" href="{{ route('tipos.index') }}">
                        Tipos de personas
                    </a>
                    
                    
                </div>
            </li>

            
            @else
        {{-- Controles para los usuarios --}}
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Eventos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Deportistas
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Link
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">
                    Link
                </a>
            </li>


            @endif
           
           
        </ul>
        
             <ul class="nav ml ml-auto">
                <i class="ml-auto"></i>
            <li class="nav-item dropdown mt-1 dropleft">
                <a aria-expanded="false" aria-haspopup="true" data-toggle="dropdown" href="#" id="navbarDropdown" role="button" v-pre="">
                    <img class="img-usuario" src="/imagenes/usuarios/{{ Auth::user()->imagen }}">

                    
                </a>
                <div aria-labelledby="navbarDropdow" class="dropdown-menu p-0">

                    
                        <div class="dropdown-item badge badge-info">
                            <img class="img-usuario " src="/imagenes/usuarios/{{ Auth::user()->imagen }}">

                            <span class="ml-2">{{ Auth::user()->name }} <br> {{ Auth::user()->email }}</span>
                            
                        </div>
                    <hr class="mt-0 mb-0">
                    <a class="dropdown-item text-center" href="/control/perfil/{{ Auth::user()->id }}/edit">
                        {{ ('Perfil') }}
                    </a>
                    <hr class="mt-0 mb-0">
                    <a class="dropdown-item text-center" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ ('Cerrar Cesión') }}
                    </a>

                   

                    <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>

        
       

        @endguest


    </div>

</nav>
