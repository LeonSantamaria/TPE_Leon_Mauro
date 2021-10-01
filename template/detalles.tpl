{foreach from=$detalles item=$detalle }
    <div class="publicacion-detallada">
        <h1>{$detalle->Titulo}</h1>
        <h4>{$detalle->Descripcion}</h4>
        <h3>{$detalle->Contacto}</h3>
        <h4>{$detalle->Tipo}</h4>
    </div>    
{/foreach}
<h3>Comodidades disponibles : </h3>