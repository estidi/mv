<?php /* Smarty version Smarty-3.1.18, created on 2014-08-07 20:18:06
         compiled from "/home/estidi/Pulpit/home/Main/View/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19404215553bb1d7fb81cf8-70572933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8811d9b91c438e84a4c39ec282fa5ba3ed6032d4' => 
    array (
      0 => '/home/estidi/Pulpit/home/Main/View/index.tpl',
      1 => 1407435437,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19404215553bb1d7fb81cf8-70572933',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53bb1d7fe353a5_28247461',
  'variables' => 
  array (
    'register' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53bb1d7fe353a5_28247461')) {function content_53bb1d7fe353a5_28247461($_smarty_tpl) {?>
<div class="wrapper">

<div class="loginBox">
    <?php if (isset($_smarty_tpl->tpl_vars['register']->value)) {?>
    <?php echo $_smarty_tpl->getSubTemplate ('User/register.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php } else { ?>
    <?php echo $_smarty_tpl->getSubTemplate ('User/login.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>
</div>

<div class="">

</div>
</div><?php }} ?>
