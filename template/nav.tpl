<nav class="navbar navbar-expand-md navbar-light border-3 bg-light  border-bottom border-primary">
        <div class="container-fluid">
           
            <a href="{BASE_URL}" class="navbar-brand">AlquileresArgentina</a>
            <div id="MenuNavegacion" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-3">
                    <li class="nav-item  "><a href="{BASE_URL}" class="nav-link">Inicio</a></li>
                    <li class="nav-item "><a href="{BASE_URL}" class="nav-link">Catálogo</a></li>
                    <li class="nav-item "><a href="{BASE_URL}ShowLogin" class="nav-link">Ingreso</a></li>
                    {if $logueado}
                        <li class="nav-item "><a href="{BASE_URL}logout" class="nav-link">Salir</a></li>
                    {/if}
                </ul>
            </div>
        </div>
    </nav>
