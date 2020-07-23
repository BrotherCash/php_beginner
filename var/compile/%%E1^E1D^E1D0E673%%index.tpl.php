<?php /* Smarty version 2.6.31, created on 2020-07-23 06:42:02
         compiled from products/index.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array('h1' => "Список товаров")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

        <p>
            <a href="/App/Controllers/products/add.php">Добавить</a>
        </p>
        <p>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Название товара</th>
                        <th>Артикул</th>
                        <th>Цена</th>
                        <th>Количество на складе</th>
                        <th>Описание</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['product']):
?>
                    <tr>
                        <td><?php echo $this->_tpl_vars['product']['id']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['product']['name']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['product']['article']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['product']['price']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['product']['amount']; ?>
</td>
                        <td><?php echo $this->_tpl_vars['product']['description']; ?>
</td>
                        <td>
                            <a href='/App/Controllers/products/edit.php?id=<?php echo $this->_tpl_vars['product']['id']; ?>
'>Редактировать</a>
                            &nbsp;&nbsp;|&nbsp;&nbsp;
                            <form action="/App/Controllers/products/delete.php" method="post" style="display: inline-block"><input type="hidden" name="id" value="<?php echo $this->_tpl_vars['product']['id']; ?>
"><input type="submit" value="Удалить"></form>
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