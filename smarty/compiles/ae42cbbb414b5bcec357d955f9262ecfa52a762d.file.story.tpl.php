<?php /* Smarty version Smarty-3.1.15, created on 2013-11-14 16:38:29
         compiled from "/Users/shangchun/Repoes/mustache-benchmark/smarty/templates/story.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149416095652848c05148090-45856587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae42cbbb414b5bcec357d955f9262ecfa52a762d' => 
    array (
      0 => '/Users/shangchun/Repoes/mustache-benchmark/smarty/templates/story.tpl',
      1 => 1384417828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149416095652848c05148090-45856587',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'url' => 0,
    'source' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52848c05211d83_63030241',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52848c05211d83_63030241')) {function content_52848c05211d83_63030241($_smarty_tpl) {?><div class="test">    <h2>This is a test of <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</h2>    <p>The homepage is <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['url']->value;?>
</a>.</p>    <p>The sources is: <?php echo $_smarty_tpl->tpl_vars['source']->value;?>
</p></div><?php }} ?>
