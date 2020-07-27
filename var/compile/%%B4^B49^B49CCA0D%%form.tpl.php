<?php /* Smarty version 2.6.31, created on 2020-07-27 10:17:04
         compiled from products/form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'products/form.tpl', 38, false),)), $this); ?>
<form method="post" action="" class="product-form">
    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['product']['id']; ?>
">
    <div class="mb-3">
        <label for="name" class="form-label">Название товара:</label>
        <input type="text" name="name" id="name" class="form-control" required" value="<?php echo $this->_tpl_vars['product']['name']; ?>
">
    </div>

    <div class="mb-3">
        <label for="category_id" class="form-label">Категория товара:</label>
        <select name="category_id" id="category_id" class="form-select">
            <option value="0">Не выбрано</option>
            <?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category']):
?>
            <option <?php if ($this->_tpl_vars['product']['category_id'] == $this->_tpl_vars['category']['id']): ?>selected <?php endif; ?>value="<?php echo $this->_tpl_vars['category']['id']; ?>
"><?php echo $this->_tpl_vars['category']['name']; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
        </select>
    </div>

    <div class="mb-3">
        <label for="article" class="form-label">Артикул:</label>
        <input type="text" name="article" id="article" class="form-control" required value="<?php echo $this->_tpl_vars['product']['article']; ?>
">
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Цена:</label>
        <input type="number" name="price" id="price" class="form-control" required value="<?php echo $this->_tpl_vars['product']['price']; ?>
">
    </div>

    <div class="mb-3">
        <label for="amount" class="form-label">Количество на складе:</label>
        <input type="number" name="amount" id="amount" class="form-control" value="<?php echo $this->_tpl_vars['product']['amount']; ?>
">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Описание товара:</label>
        <textarea name="description" id="description" class="form-control" rows="4" required><?php echo $this->_tpl_vars['product']['description']; ?>
</textarea>
    </div>

    <input type="submit" class="btn btn-primary" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['submit_name'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Сохранить') : smarty_modifier_default($_tmp, 'Сохранить')); ?>
">

</form>