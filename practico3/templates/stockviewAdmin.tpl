{include file="header.tpl"}
{include file="form.tpl"}

<table class="table">
<thead>
<tr>
    <th scope='col'> Coca Cola </th>
    <th scope='col'> Envase</th>
    <th scope='col'> ABM</th>
</tr>
</thead>
    {foreach from=$cocacola item=$coca}
        <tr>
        <td> {$coca->tipo_coca}</td>
        <td> {if $coca->envase === 1}Lata
        {else $coca->envase === 2}1 Litro</td>
        {/if}
        <td><a href="delete/{$coca->id_stock}" type="button" class="btn btn-outline-danger"  {$coca->id_stock}>Borrar </td> </a>
        </tr>
    {/foreach}

</table>