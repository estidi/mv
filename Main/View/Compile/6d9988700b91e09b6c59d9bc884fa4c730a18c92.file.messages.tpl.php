<?php /* Smarty version Smarty-3.1.18, created on 2014-08-07 20:20:45
         compiled from "/home/estidi/Pulpit/home/Main/View/Common/messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26441868353e3c37d829ac8-68342264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d9988700b91e09b6c59d9bc884fa4c730a18c92' => 
    array (
      0 => '/home/estidi/Pulpit/home/Main/View/Common/messages.tpl',
      1 => 1407435640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26441868353e3c37d829ac8-68342264',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'flash' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53e3c37d835298_15051428',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e3c37d835298_15051428')) {function content_53e3c37d835298_15051428($_smarty_tpl) {?><div class="messages">
    <?php if (isset($_smarty_tpl->tpl_vars['flash']->value['success'])) {?>
        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['flash']->value['success']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
            <div class="success fade">
                <?php echo $_smarty_tpl->tpl_vars['list']->value;?>

            </div>
        <?php } ?>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['flash']->value['fail'])) {?>
        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['flash']->value['fail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
            <div class="fail fade">
                <?php echo $_smarty_tpl->tpl_vars['list']->value;?>

            </div>
        <?php } ?>
    <?php }?>
</div>   <?php }} ?>
