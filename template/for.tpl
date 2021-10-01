<table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Contacto</th>
                <th>VerMas</th>
            </tr>
        <thead>
        <tbody>
{foreach from=$rental item=rent }
    <tr>
                <td>{$rent->Titulo}</td>
                <td>{$rent->Contacto}</td>
                <td><a href='ShowDetails/{$rent->Id}'>link</a></td>
                
    </tr>
{/foreach}
</tbody>
</table>