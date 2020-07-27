<?php /* Smarty version 2.6.31, created on 2020-07-27 10:43:41
         compiled from categories/form.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'categories/form.tpl', 8, false),)), $this); ?>
<form method="post" action="" class="narrow-form">
    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['category']['id']; ?>
">
    <div class="mb-3">
        <label for="name" class="form-label">Название категории:</label>
        <input type="text" name="name" id="name" class="form-control" required" value="<?php echo $this->_tpl_vars['category']['name']; ?>
" autofocus>
    </div>

    <input type="submit" class="btn btn-primary" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['submit_name'])) ? $this->_run_mod_handler('default', true, $_tmp, 'Сохранить') : smarty_modifier_default($_tmp, 'Сохранить')); ?>
">
</form>