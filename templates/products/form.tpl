<form method="post" action="" class="narrow-form">
    <input type="hidden" name="id" value="{$product.id}">
    <div class="mb-3">
        <label for="name" class="form-label">Название товара:</label>
        <input type="text" name="name" id="name" class="form-control shadow-sm" required" value="{$product.name}">
    </div>

    <div class="mb-3">
        <label for="category_id" class="form-label">Категория товара:</label>
        <select name="category_id" id="category_id" class="form-select shadow-sm">
            <option value="0">Не выбрано</option>
            {foreach from=$categories item=category}
            <option {if $product.category_id == $category.id}selected {/if}value="{$category.id}">{$category.name}</option>
            {/foreach}
        </select>
    </div>

    <div class="mb-3">
        <label for="article" class="form-label">Артикул:</label>
        <input type="text" name="article" id="article" class="form-control shadow-sm" required value="{$product.article}">
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Цена:</label>
        <input type="number" name="price" id="price" class="form-control shadow-sm" required value="{$product.price}">
    </div>

    <div class="mb-3">
        <label for="amount" class="form-label">Количество на складе:</label>
        <input type="number" name="amount" id="amount" class="form-control shadow-sm" value="{$product.amount}">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Описание товара:</label>
        <textarea name="description" id="description" class="form-control shadow-sm" rows="4" required>{$product.description}</textarea>
    </div>

    <input type="submit" class="btn btn-primary shadow" value="{$submit_name|default:'Сохранить'}">

</form>
