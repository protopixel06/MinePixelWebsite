<?php
/* Smarty version 4.2.0, created on 2022-08-31 14:36:46
  from '/srv/http/MinePixelWebsite/custom/templates/DefaultRevamp/privacy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_630f63eec21a13_05667304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c7adaab0e6befdce10a3da3e175c369a72c4e07' => 
    array (
      0 => '/srv/http/MinePixelWebsite/custom/templates/DefaultRevamp/privacy.tpl',
      1 => 1661950942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_630f63eec21a13_05667304 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2 class="ui header">
    <?php echo $_smarty_tpl->tpl_vars['PRIVACY_POLICY']->value;?>

</h2>

<div class="ui padded segment" id="privacy-policy">
    <p><?php echo $_smarty_tpl->tpl_vars['POLICY']->value;?>
</p>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
