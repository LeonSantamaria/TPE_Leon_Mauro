<?php
/* Smarty version 3.1.39, created on 2021-09-30 17:28:03
  from 'C:\xampp\htdocs\web2\TPELyM\template\for.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6155d783e41790_86258237',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e7464baeb188af93b4fa11da1c5196608e40915' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TPELyM\\template\\for.tpl',
      1 => 1633015329,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6155d783e41790_86258237 (Smarty_Internal_Template $_smarty_tpl) {
?><table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Contacto</th>
            </tr>
        <thead>
        <tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rental']->value, 'rent');
$_smarty_tpl->tpl_vars['rent']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rent']->value) {
$_smarty_tpl->tpl_vars['rent']->do_else = false;
?>
    <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['rent']->value->Titulo;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['rent']->value->Contacto;?>
</td>
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table><?php }
}
