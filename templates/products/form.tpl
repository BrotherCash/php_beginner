<form method="post" action="" class="narrow-form" enctype="multipart/form-data">
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
        <label for="image_url" class="form-label">Ссылка на изображение:</label>
        <input type="text" name="image_url" id="image_url" class="form-control shadow-sm">
    </div>

    <div class="mb-3">
        <label for="images" class="form-label">Фото товара:</label>
        <input type="file" name="images[]" id="images" multiple accept="image/*" class="form-control shadow-sm">
    </div>

    {if $product.images}
        <div class="form-group d-flex flex-wrap">
            {foreach from=$product.images item=image}
            <div class="card d-flex flex-column justify-content-between" style="width: 90px;">
                <img src="{$image.path}" class="card-img-top" alt="{$image.name}">
                <span style="flex: auto;"></span>
                <div class="card-body" style="flex: none;">
                    <button class="btn btn-danger btn-sm" data-image-id="{$image.id}" onclick="return deleteImage(this)">Remove</button>
                </div>
            </div>
            {/foreach}
        </div>
    {literal}
        <script>
            function deleteImage(button) {
                let imageId = button.dataset.imageId;
                imageId = parseInt(imageId);
                if (!imageId) {
                    alert('Проблема с image_id');
                }

                let url = '/products/delete_image';

                const formData = new FormData();
                formData.append('product_image_id', imageId);

                fetch(url, {
                    method: 'POST',
                    body: formData
                })
                .then((response) => {
                    response.text()
                    .then((text) => {
                        if (text.indexOf('error') > 0) {
                            alert('Ошибка при удалении');
                        } else {
                            document.location.reload();
                        }
                        console.log(text);
                    })
                });

                return false;
            }
        </script>
    {/literal}
    {/if}

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
        <textarea name="description" id="description" class="form-control shadow-sm" rows="4">{$product.description}</textarea>
    </div>

    <input type="submit" class="btn btn-primary shadow" value="{$submit_name|default:'Сохранить'}">

</form>

