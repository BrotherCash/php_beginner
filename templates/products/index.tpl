{include file="header.tpl" h1="Список товаров"}

        <p>
            <a href="/products/add">Добавить</a>
        </p>
        <p>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Название товара</th>
                        <th>Категория</th>
                        <th>Артикул</th>
                        <th>Цена</th>
                        <th>Количество на складе</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$products item=product}
                    <tr>
                        <td>{$product.id}</td>
                        <td style="width: 200px;">
                            <strong>{$product.name}</strong>
                            {*
                            <br>
                            <p><small>{$product.description}</small></p>
                            *}
                        </td>
                        <td>{$product.category_name}</td>
                        <td>{$product.article}</td>
                        <td>{$product.price}</td>
                        <td style="width: 50px;">{$product.amount}</td>
                        <td style="width: 100px;">
                            <a href='/products/edit?id={$product.id}'>Edit</a>
                            &nbsp;&nbsp;|&nbsp;&nbsp;
                            <form action="/products/delete" method="post" style="display: inline-block"><input type="hidden" name="id" value="{$product.id}"><input type="submit" value="Remove"></form>
                        </td>
                    </tr>
                    {/foreach}
                </tbody>
            </table>
        </p>
    </div>

{include file="bottom.tpl"}