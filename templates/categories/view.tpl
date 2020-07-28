{include file="header.tpl" h1=$current_category.name}

<p>
<table class="table table-striped shadow-sm">
    <thead>
    <tr class="table-primary align-top">
        <th scope="col">#</th>
        <th scope="col">Название товара</th>
        <th scope="col">Категория</th>
        <th scope="col">Артикул</th>
        <th scope="col">Цена</th>
        <th scope="col">Количество <br> на складе</th>
        <th scope="col">&nbsp;</th>
    </tr>
    </thead>
    <tbody>
    {foreach from=$products item=product}
        <tr>
            <th scope="row">{$product.id}</th>
            <td>
                <strong>{$product.name}</strong>
                {*
                <br>
                <p><small>{$product.description}</small></p>
                *}
            </td>
            <td>{$product.category_name}</td>
            <td>{$product.article}</td>
            <td>{$product.price}</td>
            <td>{$product.amount}</td>
            <td>
                <a class="btn btn-success" href='/products/edit?id={$product.id}'>Edit</a>
                &nbsp;&nbsp;|&nbsp;&nbsp;
                <form action="/products/delete" method="post"><input type="hidden" name="id" value="{$product.id}"><input type="submit" class="btn btn-danger font-weight-bold" value="X"></form>
            </td>
        </tr>
    {/foreach}
    </tbody>
</table>
</p>
</div>

{include file="bottom.tpl"}