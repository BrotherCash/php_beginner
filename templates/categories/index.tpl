{include file="header.tpl" h1="Список категорий"}

        <p>
            <a href="/categories/add">Добавить</a>
        </p>
        <p>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Название категории</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$categories item=category}
                    <tr>
                        <td>{$category.id}</td>
                        <td>{$category.name}</td>
                        <td>
                            <a href='/categories/edit?id={$category.id}'>Редактировать</a>
                            &nbsp;&nbsp;|&nbsp;&nbsp;
                            <form action="/categories/delete" method="post" style="display: inline-block"><input type="hidden" name="id" value="{$category.id}"><input type="submit" value="Удалить"></form>
                        </td>
                    </tr>
                    {/foreach}
                </tbody>
            </table>
        </p>
    </div>

{include file="bottom.tpl"}