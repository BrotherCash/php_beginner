<form method="post" action="" class="form f400p">
    <input type="hidden" name="id" value="{$product.id}">
    <div class="form-element">
        <label>
            <span class="label">Название товара:</span>
            <input type="text" name="name" required" value="{$product.name}">
        </label>
    </div>

    <div class="form-element">
        <label>
            <span class="label">Название товара:</span>
            Артикул: <input type="text" name="article" required value="{$product.article}">
        </label>
    </div>

    <div class="form-element">
        <label>
            <span class="label">Цена:</span>
            <input type="number" name="price" required value="{$product.price}">
        </label>
    </div>

    <div class="form-element">
        <label>
            <span class="label">Количество на складе:</span>
            <input type="number" name="amount" value="{$product.amount}">
        </label>
    </div>

    <div class="form-element">
        <label>
            <span class="label">Описание товара:</span>
            <textarea name="description" cols="30" rows="10" required>{$product.description}</textarea>
        </label>
    </div>
    <div class="form-element">
        <input type="submit" value="{$submit_name|default:'Сохранить'}">
    </div>
</form>
