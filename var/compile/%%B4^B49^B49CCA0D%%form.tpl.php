<?php /* Smarty version 2.6.31, created on 2020-07-24 13:35:23
         compiled from products/form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'products/form.tpl', 50, false),)), $this); ?>
<form method="post" action="" class="form f400p">
    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['product']['id']; ?>
">
    <div class="form-element">
        <label>
            <span class="label">Название товара:</span>
            <input type="text" name="name" required" value="<?php echo $this->_tpl_vars['product']['name']; ?>
">
        </label>
    </div>

    <div class="form-element">
        <label>
            <span class="label">Категория товара:</span>
            <select name="category_id" id="">
                <option value="0">Не выбрано</option>
            <?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category']):
?>
                <option value="<?php echo $this->_tpl_vars['category']['id']; ?>
"><?php echo $this->_tpl_vars['category']['name']; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
            </select>
        </label>
    </div>

    <div class="form-element">
        <label>
            <span class="label">Артикул:</span>
            <input type="text" name="article" required value="<?php echo $this->_tpl_vars['product']['article']; ?>
">
        </label>
    </div>

    <div class="form-element">
        <label>
            <span class="label">Цена:</span>
            <input type="number" name="price" required value="<?php echo $this->_tpl_vars['product']['price']; ?>
">
        </label>
    </div>

    <div class="form-element">
        <label>
            <span class="label">Количество на складе:</span>
            <input type="number" name="amount" value="<?php echo $this->_tpl_vars['product']['amount']; ?>
">
        </label>
    </div>

    <div class="form-element">
        <label>
            <span class="label">Описание товара:</span>
            <textarea name="description" cols="30" rows="10" required><?php echo $this->_tpl_vars['product']['description']; ?>
</textarea>
        </label>
    </div>
    <div class="form-element">
        <input type="submit" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['submit_name'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Сохранить') : smarty_modifier_default($_tmp, 'Сохранить')); ?>
">
    </div>
</form>