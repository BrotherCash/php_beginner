{include file="header.tpl" h1="Список задач"}

<div>
<table class="table table-striped shadow-sm">
    <thead>
    <tr class="table-primary align-top">
        <th scope="col">#</th>
        <th scope="col">Название</th>
        <th scope="col">Статус</th>
        <th scope="col">&nbsp;</th>
    </tr>
    </thead>
    <tbody>
    {foreach from=$tasks item=task}
        <tr>
            <th scope="row">{$task.id}</th>
            <td>{$task.name}</td>
            <td>{$task.status}</td>
            <td>
                <a class="btn btn-success" href='/queue/run?id={$task.id}'>Start</a>
                &nbsp;&nbsp;|&nbsp;&nbsp;
                <form action="/queue/delete" method="post" style="display: inline-block"><input type="hidden" name="id" value="{$task.id}"><input type="submit"  class="btn btn-danger font-weight-bold" value="X"></form>
            </td>
        </tr>
    {/foreach}
    </tbody>
</table>
</div>


{include file="bottom.tpl"}