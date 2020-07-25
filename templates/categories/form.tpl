<form method="post" action="" class="form f400p">
    <input type="hidden" name="id" value="{$category.id}">
    <div class="form-element">
        <label>
            <span class="label">Название категории:</span>
            <input type="text" name="name" required" value="{$category.name}" autofocus>
        </label>
    </div>
    <div class="form-element">
        <input type="submit" value="{$submit_name|default:'Сохранить'}">
    </div>
</form>
