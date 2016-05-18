<?php /* Smarty version Smarty-3.1.18, created on 2014-08-05 17:45:48
         compiled from "/home/estidi/Pulpit/home/Main/View/User/register.html" */ ?>
<?php /*%%SmartyHeaderCode:98202919253dbc67c839db4-43890955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d2250af1e812101c6be32442ea2dbc18625ae44' => 
    array (
      0 => '/home/estidi/Pulpit/home/Main/View/User/register.html',
      1 => 1407253544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98202919253dbc67c839db4-43890955',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53dbc67c84b5b0_15016409',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53dbc67c84b5b0_15016409')) {function content_53dbc67c84b5b0_15016409($_smarty_tpl) {?>        
			<h1>Enter the void</h1>
			<form method="POST" action="/user/register">
			<div>
				<label>Nazwa użytkownika: </label>
				<input type="text" name="username" />
			</div>
			<div>
				<label>Hasło: </label>
				<input type="password" name="password" />
			</div>
			<div>
			<label>Powtórz hasło: </label>
				<input type="password" name="passwordCopy" value="passowd" />
			</div>
			<div>
				<input type="submit" name="submit"  value="Zarejestruj" />
			</div>
			</form>
			<div>
				<a href="#" onClick="get('/?template=User/login','.loginBox');">Zaloguj</a>
			</div>
		<?php }} ?>
