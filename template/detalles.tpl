{foreach from=$detalles item=$detalle }
    <h1>Detalles del alojamiento:<h1>
    <div class="row justify-content-md-center">
        <div class="col-11">
            <ul>
                {if $logueado}
                    <li>{$detalle->Titulo}
                        <a class="btn btn-warning" href="{BASE_URL}eliminarAlojamiento/{$detalle->Id}">Eliminar</a>
                        <a class="btn btn-danger" href="{BASE_URL}modificarAlojamiento/{$detalle->Id}">Modificar</a>
                    </li>
                {/if}
                <li><h4>{$detalle->Descripcion}</h4>
                <li><h3>{$detalle->Contacto}</h3></li>
                <li><h4>{$detalle->Tipo}</h4></li>
                <li><h4>{$detalle->ciudad}</h4></li>
            </ul>
        </div>
    </div>    
{/foreach}
