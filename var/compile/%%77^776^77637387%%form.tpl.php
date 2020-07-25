<?php /* Smarty version 2.6.31, created on 2020-07-24 13:20:33
         compiled from categories/form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'categories/form.tpl', 10, false),)), $this); ?>
<form method="post" action="" class="form f400p">
    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['category']['id']; ?>
">
    <div class="form-element">
        <label>
            <span class="label">Название категории:</span>
            <input type="text" name="name" required" value="<?php echo $this->_tpl_vars['category']['name']; ?>
" autofocus>
        </label>
    </div>
    <div class="form-element">
        <input type="submit" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['submit_name'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Сохранить') : smarty_modifier_default($_tmp, 'Сохранить')); ?>
">
    </div>
</form>