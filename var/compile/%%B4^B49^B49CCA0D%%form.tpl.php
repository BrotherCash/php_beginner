<?php /* Smarty version 2.6.31, created on 2020-07-23 03:21:32
         compiled from products/form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'products/form.tpl', 38, false),)), $this); ?>
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
            <span class="label">Название товара:</span>
            Артикул: <input type="text" name="article" required value="<?php echo $this->_tpl_vars['product']['article']; ?>
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