<?php /* Smarty version Smarty-3.1.15, created on 2013-11-14 16:44:39
         compiled from "/Users/shangchun/Repoes/mustache-benchmark/smarty/templates/comment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186042940052848d7783fd21-25701450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c358d43444a0d4c6b6497e263da080a2d8595d67' => 
    array (
      0 => '/Users/shangchun/Repoes/mustache-benchmark/smarty/templates/comment.tpl',
      1 => 1384418122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186042940052848d7783fd21-25701450',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'comments' => 0,
    'comment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52848d778cfe97_14379528',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52848d778cfe97_14379528')) {function content_52848d778cfe97_14379528($_smarty_tpl) {?><div class="comments">    <h3><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</h3>    <ul>        <?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>}        <li class="comment">            <h5><?php echo $_smarty_tpl->tpl_vars['comment']->value['name'];?>
</h5>            <p><?php echo $_smarty_tpl->tpl_vars['comment']->value['body'];?>
</p>        </li>        <?php } ?>    </ul></div><?php }} ?>
