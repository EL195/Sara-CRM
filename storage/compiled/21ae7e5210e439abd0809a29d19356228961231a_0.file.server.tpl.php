<?php
/* Smarty version 3.1.39, created on 2021-08-02 14:41:27
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/server.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61083c578bbb01_20030065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21ae7e5210e439abd0809a29d19356228961231a' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/hostbilling/admin/server.tpl',
      1 => 1627929682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61083c578bbb01_20030065 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93150074461083c57899527_87419373', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53010143361083c578bac82_55618612', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_93150074461083c57899527_87419373 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_93150074461083c57899527_87419373',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="mx-auto" style="width: 100%; max-width: 800px;">
        <div class="card">
            <div class="card-body">
                <?php if (!$_smarty_tpl->tpl_vars['server']->value) {?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['available_server_types']->value[$_smarty_tpl->tpl_vars['selected_type']->value]))) {?>
                        <h3>New Server (<?php echo $_smarty_tpl->tpl_vars['available_server_types']->value[$_smarty_tpl->tpl_vars['selected_type']->value]['name'];?>
)</h3>
                    <?php }?>

                    <?php } else { ?>

                    <h3><?php echo $_smarty_tpl->tpl_vars['server']->value->name;?>
</h3>

                <?php }?>

                <div class="hr-line-dashed"></div>
                <form method="post" id="form_main">
                    <div class="mb-3">
                        <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>
                        <input class="form-control" name="name"
                        <?php if ($_smarty_tpl->tpl_vars['server']->value) {?>
                            value="<?php echo $_smarty_tpl->tpl_vars['server']->value->name;?>
"
                        <?php }?>
                        >
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['selected_type']->value === 'cpanel') {?>

                        <div class="mb-3">
                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Host'];?>
</label>
                            <input class="form-control" name="host"
                                    <?php if ($_smarty_tpl->tpl_vars['server']->value) {?>
                                        value="<?php echo $_smarty_tpl->tpl_vars['server']->value->host;?>
"
                                    <?php }?>
                            >
                        </div>

                        <div class="mb-3">
                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</label>
                            <input class="form-control" name="username"
                                    <?php if ($_smarty_tpl->tpl_vars['server']->value) {?>
                                        value="<?php echo $_smarty_tpl->tpl_vars['server']->value->username;?>
"
                                    <?php }?>
                            >
                        </div>

                        <div class="mb-3">
                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['API Token'];?>
</label>
                            <input class="form-control" name="api_key"
                                    <?php if ($_smarty_tpl->tpl_vars['server']->value) {?>
                                        value="<?php echo $_smarty_tpl->tpl_vars['server']->value->api_key;?>
"
                                    <?php }?>
                            >
                        </div>

                    <?php } elseif ($_smarty_tpl->tpl_vars['selected_type']->value === 'directadmin') {?>

                        <div class="mb-3">
                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Host'];?>
</label>
                            <input class="form-control" name="host"
                                    <?php if ($_smarty_tpl->tpl_vars['server']->value) {?>
                                        value="<?php echo $_smarty_tpl->tpl_vars['server']->value->host;?>
"
                                    <?php }?>
                            >
                        </div>

                        <div class="mb-3">
                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
</label>
                            <input class="form-control" name="username"
                                    <?php if ($_smarty_tpl->tpl_vars['server']->value) {?>
                                        value="<?php echo $_smarty_tpl->tpl_vars['server']->value->username;?>
"
                                    <?php }?>
                            >
                        </div>

                        <div class="mb-3">
                            <label><?php echo $_smarty_tpl->tpl_vars['_L']->value['Password'];?>
</label>
                            <input class="form-control" name="password"
                                    <?php if ($_smarty_tpl->tpl_vars['server']->value) {?>
                                        value="<?php echo $_smarty_tpl->tpl_vars['server']->value->password;?>
"
                                    <?php }?>
                            >
                        </div>


                        <?php } else { ?>


                        <?php if (!empty($_smarty_tpl->tpl_vars['input_require_for_this_server_type']->value['host'])) {?>

                            <div class="mb-3">
                                <label><?php if (!empty($_smarty_tpl->tpl_vars['input_require_for_this_server_type']->value['host']['label'])) {?> <?php echo $_smarty_tpl->tpl_vars['input_require_for_this_server_type']->value['host']['label'];?>
 <?php } else { ?> Host<?php }?></label>
                                <input class="form-control" name="host"
                                        <?php if ($_smarty_tpl->tpl_vars['server']->value) {?>
                                            value="<?php echo $_smarty_tpl->tpl_vars['server']->value->host;?>
"
                                        <?php }?>
                                >
                            </div>

                        <?php }?>

                        <?php if (!empty($_smarty_tpl->tpl_vars['input_require_for_this_server_type']->value['port'])) {?>

                            <div class="mb-3">
                                <label><?php if (!empty($_smarty_tpl->tpl_vars['input_require_for_this_server_type']->value['port']['label'])) {?> <?php echo $_smarty_tpl->tpl_vars['input_require_for_this_server_type']->value['port']['label'];?>
 <?php } else { ?> <?php ob_start();
echo __('Port');
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
}?></label>
                                <input class="form-control" name="port"
                                        <?php if ($_smarty_tpl->tpl_vars['server']->value) {?>
                                            value="<?php echo $_smarty_tpl->tpl_vars['server']->value->port;?>
"
                                        <?php }?>
                                >
                            </div>

                        <?php }?>

                        <?php if (!empty($_smarty_tpl->tpl_vars['input_require_for_this_server_type']->value['username'])) {?>

                            <div class="mb-3">
                                <label><?php if (!empty($_smarty_tpl->tpl_vars['input_require_for_this_server_type']->value['username']['label'])) {?> <?php echo $_smarty_tpl->tpl_vars['input_require_for_this_server_type']->value['username']['label'];?>
 <?php } else { ?> Username<?php }?></label>
                                <input class="form-control" name="username"
                                        <?php if ($_smarty_tpl->tpl_vars['server']->value) {?>
                                            value="<?php echo $_smarty_tpl->tpl_vars['server']->value->username;?>
"
                                        <?php }?>
                                >
                            </div>

                        <?php }?>

                        <?php if (!empty($_smarty_tpl->tpl_vars['input_require_for_this_server_type']->value['password'])) {?>

                            <div class="mb-3">
                                <label><?php if (!empty($_smarty_tpl->tpl_vars['input_require_for_this_server_type']->value['password']['label'])) {?> <?php echo $_smarty_tpl->tpl_vars['input_require_for_this_server_type']->value['password']['label'];?>
 <?php } else { ?> Password<?php }?></label>
                                <input class="form-control" name="password"
                                        <?php if ($_smarty_tpl->tpl_vars['server']->value) {?>
                                            value="<?php echo $_smarty_tpl->tpl_vars['server']->value->password;?>
"
                                        <?php }?>
                                >
                            </div>

                        <?php }?>


                        <?php if (!empty($_smarty_tpl->tpl_vars['input_require_for_this_server_type']->value['api_key'])) {?>

                            <div class="mb-3">
                                <label><?php if (!empty($_smarty_tpl->tpl_vars['input_require_for_this_server_type']->value['api_key']['label'])) {?> <?php echo $_smarty_tpl->tpl_vars['input_require_for_this_server_type']->value['api_key']['label'];?>
 <?php } else { ?> API Key<?php }?></label>
                                <input class="form-control" name="api_key"
                                        <?php if ($_smarty_tpl->tpl_vars['server']->value) {?>
                                            value="<?php echo $_smarty_tpl->tpl_vars['server']->value->api_key;?>
"
                                        <?php }?>
                                >
                            </div>

                        <?php }?>

                        <?php if (!empty($_smarty_tpl->tpl_vars['input_require_for_this_server_type']->value['api_secret'])) {?>

                            <div class="mb-3">
                                <label><?php if (!empty($_smarty_tpl->tpl_vars['input_require_for_this_server_type']->value['api_secret']['label'])) {?> <?php echo $_smarty_tpl->tpl_vars['input_require_for_this_server_type']->value['api_secret']['label'];?>
 <?php } else { ?> API Key<?php }?></label>
                                <input class="form-control" name="api_secret"
                                        <?php if ($_smarty_tpl->tpl_vars['server']->value) {?>
                                            value="<?php echo $_smarty_tpl->tpl_vars['server']->value->api_secret;?>
"
                                        <?php }?>
                                >
                            </div>

                        <?php }?>

                    <?php }?>


                    <div class="mb-3">
                        <?php if ($_smarty_tpl->tpl_vars['server']->value) {?>
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['server']->value->id;?>
">
                            <input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['server']->value->type;?>
">
                            <?php } else { ?>
                            <input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['selected_type']->value;?>
">
                        <?php }?>
                        <button class="btn btn-primary" id="btn_submit" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_53010143361083c578bac82_55618612 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_53010143361083c578bac82_55618612',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {

            let $form_main = $('#form_main');
            let $btn_submit = $('#btn_submit');

            $form_main.on('submit',function (event) {
                event.preventDefault();
                $btn_submit.prop('disabled',true);
                axios.post(base_url + 'hostbilling/server',$form_main.serialize()).then(function (response) {
                    $btn_submit.prop('disabled',false);

                    window.location = base_url + 'hostbilling/servers/'

                }).catch(function (error) {

                    $btn_submit.prop('disabled',false);

                    $.each(error.response.data, function(key, value) {
                        toastr.error(value);
                    });

                });
            });

        });

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
