<?php /* Smarty version Smarty-3.1.8, created on 2012-04-03 13:56:35
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112174f7ae5733b9223-54198201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1333449909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112174f7ae5733b9223-54198201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'session' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f7ae5733db906_16485391',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f7ae5733db906_16485391')) {function content_4f7ae5733db906_16485391($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
  <head>
   
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php if ($_smarty_tpl->tpl_vars['session']->value['idioma']=="es"){?>Título<?php }else{ ?>Tituloa<?php }?></title>
<link href="css/estilo.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
<div id="header">
<h1>Titulo de mi plantilla</h1>
<?php echo $_smarty_tpl->getSubTemplate ("menuidioma.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("menuusuario.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php }} ?>