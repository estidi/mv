<?php /* Smarty version Smarty-3.1.18, created on 2014-09-11 22:44:27
         compiled from "/home/estidi/Pulpit/home/Main/View/template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191406501853c5a34e127558-70667654%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02e6f8412517789210700d00cc3791833511ccae' => 
    array (
      0 => '/home/estidi/Pulpit/home/Main/View/template.tpl',
      1 => 1410468240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191406501853c5a34e127558-70667654',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53c5a34e41f5f8_45590766',
  'variables' => 
  array (
    'debug' => 0,
    'leftSide' => 0,
    'rightSide' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53c5a34e41f5f8_45590766')) {function content_53c5a34e41f5f8_45590766($_smarty_tpl) {?><!DOCTYPE html> 
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>multiVerse</title>
        <link href="/Public/css/normalize.css" rel="stylesheet" />
        <link href="/Public/css/default.css" rel="stylesheet" />
        <script src="/Public/js/ajax.js"></script>
        <script src="/Public/js/common.js"></script>
        <style>
            .overlay {
                position:absolute;
                right:0px;
                top:0px;
                background:rgba(0,0,0,0.6);
                z-index:2222;
                border:1px solid green;
                padding:10px;
                font-size: 10px;
            }
            .messages {
                margin:0 auto;
                position:relative;
                top:10px;
                z-index:222;
                width:100%;
            }
            .success {
                background: rgba(0,255,0,0.1);
                border:1px solid green;

                color:green;
                margin-top:5px;
                padding:10px;
            }
            .fail {
                background: rgba(255,0,0,0.1);
                border:1px solid red;

                color:red;
                margin-top:5px;
                padding:10px;
            }
            .wrapper {
                width: 1050px;
                margin:0 auto;
            }
            .leftSide {
                width:250px;
                margin-right: 50px;
                float:left;
                    background: rgba(0, 255, 255, 0.15);
    border-radius: 5px;
    box-shadow: 0 0 36px 29px rgba(0, 255, 255, 0.15);
               
            }
            .rightSide {
                overflow: hidden;
                width:750px;
                float:left;
                     background: rgba(0, 0, 0, 0.5);
    border-radius: 5px;
    box-shadow: 0 0 36px 29px rgba(0, 0, 0, 0.5);
            }
            .top {
            height:50px;
            }
        </style>            
    </head>
    <body>
        <?php if (isset($_smarty_tpl->tpl_vars['debug']->value)) {?>
            <div class="overlay">
                <pre> <?php echo $_smarty_tpl->tpl_vars['debug']->value;?>
</pre>
            </div>
        <?php }?>
        <div class="wrapper">
            <div class="top"></div>
            <div>
                <div class="leftSide">
                    <div class="menu-left">
                        <h3>ZARZADZANIE</h3>
                        <ul>
                            <li>Podgląd</li>
                            <li>Budynki</li>
                            <li>Badania</li>
                            <li>Stocznia</li>
                            <li>Handel</li>
                            <li>Flota</li>
                            <li>Obrona</li>
                            <li>Galaktyka</li>
                            <li>Sojusz</li>
                            <li>Forum</li>
                            <li>Ustawienia</li>
                        </ul>
                    </div>
                    <?php echo $_smarty_tpl->tpl_vars['leftSide']->value;?>
                
                </div>
                <div class="rightSide">
                    <?php echo $_smarty_tpl->getSubTemplate ("Common/messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php echo $_smarty_tpl->tpl_vars['rightSide']->value;?>

                </div>
            </div>
        </div>	 
        <footer>multiVerse @ <?php echo date("Y");?>
 </footer>
    </body>
</html><?php }} ?>
