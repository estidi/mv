<?php /* Smarty version Smarty-3.1.18, created on 2014-08-05 17:45:46
         compiled from "/home/estidi/Pulpit/home/Main/View/User/login.html" */ ?>
<?php /*%%SmartyHeaderCode:7448886053dbbf3fda4eb2-00462359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '685b9b3388eb6e3cad5057f318f7ee5403e08b5d' => 
    array (
      0 => '/home/estidi/Pulpit/home/Main/View/User/login.html',
      1 => 1407253537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7448886053dbbf3fda4eb2-00462359',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53dbbf3fda57e2_12972344',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53dbbf3fda57e2_12972344')) {function content_53dbbf3fda57e2_12972344($_smarty_tpl) {?>			<h1>Enter the void</h1>
			<form method="POST" action="/user/login">
			<div>
				<label>Nazwa użytkownika: </label>
				<input type="text" name="username" />
			</div>
			<div>
				<label>Hasło: </label>
				<input type="password" name="password" />
			</div>
			<div>
				<input type="submit" name="submit"  value="Zaloguj" />
			</div>
			</form>
			<div>
				<a href="#" onClick="get('?template=User/register','.loginBox');">Zarejestruj</a>
			</div>
<?php }} ?>
