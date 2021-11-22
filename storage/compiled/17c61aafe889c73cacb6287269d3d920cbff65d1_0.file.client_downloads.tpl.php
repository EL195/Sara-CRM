<?php
/* Smarty version 3.1.39, created on 2021-02-21 17:35:10
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_downloads.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6032e01e259495_06811364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17c61aafe889c73cacb6287269d3d920cbff65d1' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_downloads.tpl',
      1 => 1593622782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6032e01e259495_06811364 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14215878666032e01e24aa58_16176219', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_client']->value));
}
/* {block "content"} */
class Block_14215878666032e01e24aa58_16176219 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14215878666032e01e24aa58_16176219',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">
        <div class="col-md-12">

            <div class="card border" id="t_options">

                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item active"><a class="nav-link active" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/downloads"><i class="fal fa-th"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Downloads'];?>
</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/uploads"><i class="fal fa-tasks"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Uploads'];?>
</a></li>
                    </ul>
                </div>




                <div class="card-body">




                    <div class="tab-content">
                        <div id="details" class="tab-pane fade show active ib-tab-box">


                            <div class="row">
                                <div class="col-lg-12">

                                    <?php if (count($_smarty_tpl->tpl_vars['d']->value) > 0) {?>

                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>

                                            <div class="file-box">
                                                <div class="file">
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/dl/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['ds']->value['file_dl_token'];?>
/">
                                                        <span class="corner"></span>

                                                        <div class="icon">
                                                            <?php if ($_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'jpg' || $_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'png' || $_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'gif') {?>
                                                                <i class="fal fa-file-image-o"></i>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'pdf') {?>
                                                                <i class="fal fa-file-pdf-o"></i>
                                                            <?php } elseif ($_smarty_tpl->tpl_vars['ds']->value['file_mime_type'] == 'zip') {?>
                                                                <i class="fal fa-file-archive-o"></i>
                                                            <?php } else { ?>
                                                                <i class="fal fa-file"></i>
                                                            <?php }?>
                                                        </div>
                                                        <div class="file-name">
                                                            <?php echo $_smarty_tpl->tpl_vars['ds']->value['title'];?>

                                                            <br/>
                                                            <small>
                                                                <?php if (((isset($_smarty_tpl->tpl_vars['ds']->value['updated_at'])) && ($_smarty_tpl->tpl_vars['ds']->value['updated_at']) != '')) {?>
                                                                    <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['updated_at']));?>

                                                                <?php } else { ?>
                                                                    <?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['created_at']));?>

                                                                <?php }?>

                                                            </small>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>

                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['No Data Available'];?>

                                    <?php }?>






                                </div>
                            </div>

                        </div>



                    </div>





                </div>

            </div>



        </div>
    </div>





<?php
}
}
/* {/block "content"} */
}
