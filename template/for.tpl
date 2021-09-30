<table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Contacto</th>
            </tr>
        <thead>
        <tbody>
{foreach from=$rental item=rent }
    <tr>
                <td>{$rent->Titulo}</td>
                <td>{$rent->Contacto}</td>
    </tr>
{/foreach}
</tbody>
</table>