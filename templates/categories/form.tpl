<form method="post" action="" class="narrow-form">
    <input type="hidden" name="id" value="{$category.id}">
    <div class="mb-3">
        <label for="name" class="form-label">Название категории:</label>
        <input type="text" name="name" id="name" class="form-control" required" value="{$category.name}" autofocus>
    </div>

    <input type="submit" class="btn btn-primary" value="{$submit_name|default:'Сохранить'}">
</form>
