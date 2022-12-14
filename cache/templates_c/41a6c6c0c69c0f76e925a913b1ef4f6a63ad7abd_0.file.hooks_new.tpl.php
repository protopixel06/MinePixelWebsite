<?php
/* Smarty version 4.2.0, created on 2022-08-31 14:39:25
  from '/srv/http/MinePixelWebsite/custom/panel_templates/Default/core/hooks_new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_630f648d053950_26975371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41a6c6c0c69c0f76e925a913b1ef4f6a63ad7abd' => 
    array (
      0 => '/srv/http/MinePixelWebsite/custom/panel_templates/Default/core/hooks_new.tpl',
      1 => 1661950942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:sidebar.tpl' => 1,
    'file:navbar.tpl' => 1,
    'file:includes/update.tpl' => 1,
    'file:includes/alerts.tpl' => 1,
    'file:footer.tpl' => 1,
    'file:scripts.tpl' => 1,
  ),
),false)) {
function content_630f648d053950_26975371 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body id="page-top">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $_smarty_tpl->_subTemplateRender('file:sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main content -->
            <div id="content">

                <!-- Topbar -->
                <?php $_smarty_tpl->_subTemplateRender('file:navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><?php echo $_smarty_tpl->tpl_vars['HOOKS']->value;?>
</h1>
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo $_smarty_tpl->tpl_vars['PANEL_INDEX']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value;?>
</a></li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['CONFIGURATION']->value;?>
</li>
                            <li class="breadcrumb-item active"><?php echo $_smarty_tpl->tpl_vars['HOOKS']->value;?>
</li>
                        </ol>
                    </div>

                    <!-- Update Notification -->
                    <?php $_smarty_tpl->_subTemplateRender('file:includes/update.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col-md-9">
                                    <h5 style="margin-top: 7px; margin-bottom: 7px;"><?php echo $_smarty_tpl->tpl_vars['CREATING_NEW_HOOK']->value;?>
</h5>
                                </div>
                                <div class="col-md-3">
                                    <span class="float-md-right">
                                        <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['BACK_LINK']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
</a>
                                    </span>
                                </div>
                            </div>
                            <hr />

                            <!-- Success and Error Alerts -->
                            <?php $_smarty_tpl->_subTemplateRender('file:includes/alerts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <form role="form" action="" method="post">
                                <div class="form-group">
                                    <label for="InputName"><?php echo $_smarty_tpl->tpl_vars['HOOK_NAME']->value;?>
</label>
                                    <input type="text" name="hook_name" class="form-control" id="InputName"
                                        value="<?php echo $_smarty_tpl->tpl_vars['HOOK_NAME_VALUE']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['HOOK_NAME']->value;?>
">
                                </div>
                                <div class="form-group">
                                    <label for="InputURL"><?php echo $_smarty_tpl->tpl_vars['HOOK_URL']->value;?>
</label>
                                    <input type="text" name="hook_url" class="form-control" id="InputURL"
                                        placeholder="https://example.com/examplelistener">
                                </div>
                                <div class="form-group">
                                    <label for="link_location"><?php echo $_smarty_tpl->tpl_vars['HOOK_TYPE']->value;?>
</label>
                                    <select class="form-control" id="hook_type" name="hook_type">
                                        <option value="2">Discord</option>
                                        <option value="1"><?php echo $_smarty_tpl->tpl_vars['NORMAL']->value;?>
</option>
                                    </select>
                                </div>
                                <label for="InputName"><?php echo $_smarty_tpl->tpl_vars['HOOK_EVENTS']->value;?>
</label>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALL_EVENTS']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                <div class="form-group custom-control custom-switch">
                                    <input type="checkbox" id="inputevents[<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true);?>
]" name="events[<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true);?>
]"
                                        class="custom-control-input">
                                    <label class="custom-control-label" for="inputevents[<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8', true);?>
]">
                                        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'UTF-8', true);?>

                                    </label>
                                </div>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <div class="form-group">
                                    <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
                                    <input type="submit" class="btn btn-primary" value="<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>
">
                                </div>
                            </form>

                        </div>
                    </div>

                    <!-- Spacing -->
                    <div style="height:1rem;"></div>

                    <!-- End Page Content -->
                </div>

                <!-- End Main Content -->
            </div>

            <?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <!-- End Content Wrapper -->
        </div>

        <!-- End Wrapper -->
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:scripts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html><?php }
}
