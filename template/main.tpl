<main>
    <h2 class="display-2 text-primary " style="text-align: center;">Catalogo</h2>
    <hr style="width: 50%; margin: auto;">
    <div class="categorias">
        <h5 class="display-5 inline">Filtrar</h5>
            {if $logueado}
                <h1>La puse</h1>
            {/if}
            <span class="s-categoria">Tipo</span>
            {foreach from=$categorias item=$categoria }
                <a href="ShowCategory/{$categoria->Tipo}" class="btn btn-outline-primary btn-categoria">{$categoria->Tipo}</a>
            {/foreach}
            
            <span class="s-categoria">Ciudad</span>
            {foreach from=$ciudades item=$ciudad}
                <a href="ShowCategoryCiudad/{$ciudad->ciudad}" class="btn btn-outline-primary btn-categoria">{$ciudad->ciudad}</a>
            {/foreach}
       
    </div>
    <div class="clasificados">
        {foreach from=$rental item=rent }
        
            <div class="card text-white bg-primary mb-3 border cards" style="width: 18rem;">
                <img src="images/1.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{$rent->Titulo}</h5>
                    <p class="card-text">{$rent->Contacto}</p>
                    <a href="ShowDetails/{$rent->Id}" class="btn btn-primary">Ver Mas</a>
                </div>
            </div>
        {/foreach}
    </div>
</main>
