<?php /* Smarty version Smarty-3.1.18, created on 2014-07-16 00:06:55
         compiled from "/home/estidi/Pulpit/home/Main/View/user/login.html" */ ?>
<?php /*%%SmartyHeaderCode:30981089253c5a5ffaa19a2-67239555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b0259be709c1fdbea20a99e9377d641b909549c' => 
    array (
      0 => '/home/estidi/Pulpit/home/Main/View/user/login.html',
      1 => 1405461726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30981089253c5a5ffaa19a2-67239555',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53c5a5ffac46e0_61639803',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c5a5ffac46e0_61639803')) {function content_53c5a5ffac46e0_61639803($_smarty_tpl) {?>			<h1>Enter the void</h1>
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
				<a href="#" onClick="get('/register.html','.loginBox');">Zarejestruj</a>
			</div>
<?php }} ?>
