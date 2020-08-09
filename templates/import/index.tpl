{include file="header.tpl" h1="Импорт товаров"}
<div>
    <h3>Загрузка файла импорта</h3>

    <form method="post" action="/import/upload" class="narrow-form mt-4" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="import_file" class="form-label">Файл импорта (csv):</label>
            <input type="file" name="import_file" id="import_file" class="form-control shadow-sm">
        </div>
        <input type="submit" class="btn btn-primary shadow" value="{$submit_name|default:'Импортировать'}">

    </form>
</div>


{include file="bottom.tpl"}