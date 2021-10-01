<main>
    <h2 class="display-2 text-primary " style="text-align: center;">Catalogo</h2>
    <hr style="width: 50%; margin: auto;">
    <div class="clasificados">
        {foreach from=$rental item=rent }
        
            <div class="card text-white bg-primary mb-3" style="width: 18rem;">
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
