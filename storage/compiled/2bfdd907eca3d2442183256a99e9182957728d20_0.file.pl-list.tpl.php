<?php
/* Smarty version 3.1.39, created on 2021-03-08 11:18:48
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/pl-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60464e68e72f65_56484206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bfdd907eca3d2442183256a99e9182957728d20' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/pl-list.tpl',
      1 => 1615220322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60464e68e72f65_56484206 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66101764060464e68e620f2_41053483', "head");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162862459660464e68e63309_79299549', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151722884260464e68e71ff8_20699487', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_66101764060464e68e620f2_41053483 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_66101764060464e68e620f2_41053483',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <style>
        .grid-item {
            width: 250px;
            padding-right: 20px;


        }

        .grid-item--width3 { width: 750px; }

        .product-imitation{
            padding: 25px;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F7F9FC;

        }
        .h2, h2 {
            font-size: 1.25rem;
        }
        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
            font-family: inherit;
            font-weight: 600;
            line-height: 1.5;
            margin-bottom: .5rem;
            color: #32325d;
        }


        .text-info{
            color: #6772E5!important;
        }
        .text-success{
            color: #2CCE89!important;}

        .text-danger{
            color: #F6365B!important;
        }
        .text-warning{
            color: #FB6340!important;
        }
        .text-primary{
            color: #10CDEF!important;
        }

    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_162862459660464e68e63309_79299549 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_162862459660464e68e63309_79299549',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">

        <div class="col-md-12">

            <div class="panel" id="uploading_inside">
                <div class="panel-container">
                    <div class="panel-content">
                        <form action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/plugin_upload/" class="dropzone" id="upload_container">

                            <div class="dz-message">
                                <h3> <i class="fal fa-cloud-upload"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['plugin_drop_help'];?>
</h3>
                                <br />
                                <span class="note"><?php echo $_smarty_tpl->tpl_vars['_L']->value['plugin_upload_help'];?>
</span>
                            </div>

                        </form>
                    </div>

                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-hdr">
                            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plugins'];?>
</h2>

                        </div>
                        <div class="panel-container">
                            <div class="panel-content">
                                <div class="project-list mt-md">
                                    <div id="progressbar">
                                    </div>

                                    <div id="application_ajaxrender">
                                        <table class="table table-striped">
                                            <tbody>

                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugins']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                                <tr>
                                                    <td>
                                                        <img class="img-thumbnail" style="max-height: 64px;" src="<?php echo $_smarty_tpl->tpl_vars['value']->value['icon_url'];?>
">
                                                    </td>
                                                    <td>


                                                        <h5><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</h5>

                                                        <?php if (!empty($_smarty_tpl->tpl_vars['value']->value['description'])) {?>

                                                            <div class="mb-3">
                                                                <?php echo $_smarty_tpl->tpl_vars['value']->value['description'];?>

                                                            </div>

                                                        <?php }?>

                                                        <?php if ($_smarty_tpl->tpl_vars['value']->value['status'] === 'Active') {?>
                                                            <span class="badge badge-success">Active</span>
                                                        <?php }?>



                                                        <div>

                                                            <div class="hr-line-dashed"></div>


                                                            <?php if (!empty($_smarty_tpl->tpl_vars['value']->value['buttons'])) {?>

                                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value['buttons'], 'button');
$_smarty_tpl->tpl_vars['button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->do_else = false;
?>
                                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;
echo $_smarty_tpl->tpl_vars['button']->value['link'];?>
"
                                                                       <?php if (!empty($_smarty_tpl->tpl_vars['button']->value['class'])) {?>
                                                                           class="<?php echo $_smarty_tpl->tpl_vars['button']->value['class'];?>
"
                                                                           <?php } else { ?>
                                                                           class="mr-1 btn btn-primary"
                                                                       <?php }?>


                                                                    >
                                                                        <?php if (!empty($_smarty_tpl->tpl_vars['button']->value['icon'])) {?>
                                                                            <i class="<?php echo $_smarty_tpl->tpl_vars['button']->value['icon'];?>
"></i>
                                                                            <?php } elseif ((!empty($_smarty_tpl->tpl_vars['button']->value['text']))) {?>
                                                                            <?php echo $_smarty_tpl->tpl_vars['button']->value['text'];?>

                                                                        <?php }?>

                                                                    </a>
                                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                                            <?php }?>

                                                            <?php if ($_smarty_tpl->tpl_vars['value']->value['status'] === 'Not Installed') {?>
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
settings/plugin_install/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
/" class="btn btn-primary mr-2">Install</a>
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
settings/plugin_delete/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
/" class="btn btn-danger mr-2"><?php echo __('Delete');?>
</a>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['value']->value['status'] === 'Active') {?>
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
settings/plugin_deactivate/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
/" class="btn btn-warning mr-2">Deactivate</a>
                                                                <?php } elseif ($_smarty_tpl->tpl_vars['value']->value['status'] === 'Inactive') {?>
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
settings/plugin_activate/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
/" class="btn btn-success mr-2">Activate</a>
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
settings/plugin_uninstall/<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
/" class="btn btn-danger mr-2">Uninstall</a>
                                                            <?php }?>



                                                            <?php if (!empty($_smarty_tpl->tpl_vars['value']->value['url'])) {?>
                                                                <a href="<?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
" target="_blank" class="btn btn-primary btn-icon waves-effect waves-themed">
                                                                    <i class="fal fa-external-link"></i>
                                                                </a>
                                                            <?php }?>

                                                        </div>

                                                    </td>
                                                </tr>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                            </tbody>
                                        </table>
                                    </div>


                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>




    </div>




    <input type="hidden" id="_msg_unzipping" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Unzipping'];?>
 ...">
    <input type="hidden" id="_msg_are_you_sure" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['are_you_sure'];?>
">

<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_151722884260464e68e71ff8_20699487 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_151722884260464e68e71ff8_20699487',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>
        Dropzone.autoDiscover = false;
        $(function() {
            var _url = $("#_url").val();
            var ib_file = new Dropzone("#upload_container",
                {
                    url: _url + "settings/plugin_upload/",
                    maxFiles: 1,
                    acceptedFiles: ".zip"
                }
            );

            //ib_file.on("addedfile", function(file) {
            //
            //});

            ib_file.on("success", function(file) {

                var _msg_unzipping = $('#_msg_unzipping').val();
                $('#uploading_inside').block({
                    message: "<h3>" + _msg_unzipping +"</h3>" ,
                    css: {
                        padding:        0,
                        margin:         0,
                        width:          '30%',
                        top:            '40%',
                        left:           '35%',
                        textAlign:      'center',
                        color:          '#FFFFFF',
                        border:         '0',
                        backgroundColor:'transparent',
                        cursor:         'wait'
                    }
                });
                //   $('#uploading_inside').block({ message: null });

                var _url = $("#_url").val();
                $.post(_url + 'settings/plugin_unzip/', {

                    name: file.name

                })
                    .done(function (data) {

                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    });
            });



            $(".c_uninstall").click(function (e) {
                e.preventDefault();
                var _msg_are_you_sure = $('#_msg_are_you_sure').val();
                var to_url = this.href;
                bootbox.confirm(_msg_are_you_sure, function(result) {
                    if(result == true){
                        window.location = to_url;
                    }
                });



            });



        });
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "script"} */
}
