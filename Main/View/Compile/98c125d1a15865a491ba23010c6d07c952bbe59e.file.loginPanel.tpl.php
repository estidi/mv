<?php /* Smarty version Smarty-3.1.18, created on 2014-08-07 20:23:14
         compiled from "/home/estidi/Pulpit/home/Main/View/User/loginPanel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87271523553e3c412d96204-81316999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98c125d1a15865a491ba23010c6d07c952bbe59e' => 
    array (
      0 => '/home/estidi/Pulpit/home/Main/View/User/loginPanel.tpl',
      1 => 1407435739,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87271523553e3c412d96204-81316999',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'register' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53e3c412daf003_49972724',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e3c412daf003_49972724')) {function content_53e3c412daf003_49972724($_smarty_tpl) {?><div class="loginBox">
    <?php if (isset($_smarty_tpl->tpl_vars['register']->value)) {?>
    <?php echo $_smarty_tpl->getSubTemplate ('User/register.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ('User/login.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>
</div><?php }} ?>
