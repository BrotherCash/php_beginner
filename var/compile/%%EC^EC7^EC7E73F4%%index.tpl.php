<?php /* Smarty version 2.6.31, created on 2020-07-27 10:36:14
         compiled from categories/index.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('h1' => "Список категорий")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

        <p class="mb-4">
            <a class="btn btn-outline-primary font-weight-bold" href="/categories/add">Добавить</a>
        </p>
        <p>
            <table class="table table-striped">
                <thead>
                    <tr class="table-primary align-top">
                        <th scope="col">#</th>
                        <th scope="col">Название категории</th>
                        <th scope="col">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category']):
?>
                    <tr>
                        <th scope="row"><?php echo $this->_tpl_vars['category']['id']; ?>
</th>
                        <td><?php echo $this->_tpl_vars['category']['name']; ?>
</td>
                        <td>
                            <a class="btn btn-success" href='/categories/edit?id=<?php echo $this->_tpl_vars['category']['id']; ?>
'>Edit</a>
                            &nbsp;&nbsp;|&nbsp;&nbsp;
                            <form action="/categories/delete" method="post" style="display: inline-block"><input type="hidden" name="id" value="<?php echo $this->_tpl_vars['category']['id']; ?>
"><input type="submit"  class="btn btn-danger font-weight-bold" value="X"></form>
                        </td>
                    </tr>
                    <?php endforeach; endif; unset($_from); ?>
                </tbody>
            </table>
        </p>
    </div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "bottom.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>