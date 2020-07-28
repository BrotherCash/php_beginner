{include file="header.tpl" h1="Список категорий"}

        <p class="mb-4">
            <a class="btn btn-outline-primary font-weight-bold shadow" href="/categories/add">Добавить</a>
        </p>
        <p>
            <table class="table table-striped shadow-sm">
                <thead>
                    <tr class="table-primary align-top">
                        <th scope="col">#</th>
                        <th scope="col">Название категории</th>
                        <th scope="col">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$categories item=category}
                    <tr>
                        <th scope="row">{$category.id}</th>
                        <td>{$category.name}</td>
                        <td>
                            <a class="btn btn-success" href='/categories/edit?id={$category.id}'>Edit</a>
                            &nbsp;&nbsp;|&nbsp;&nbsp;
                            <form action="/categories/delete" method="post" style="display: inline-block"><input type="hidden" name="id" value="{$category.id}"><input type="submit"  class="btn btn-danger font-weight-bold" value="X"></form>
                        </td>
                    </tr>
                    {/foreach}
                </tbody>
            </table>
        </p>
    </div>

{include file="bottom.tpl"}