<?php
/* Smarty version 3.1.39, created on 2021-02-26 12:39:12
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_tickets_all.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60393240263d97_42302866',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52f1d0962dc38c3a834b3e1a4dbf471749231370' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_tickets_all.tpl',
      1 => 1597096719,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60393240263d97_42302866 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2068754398603932402520e3_21787476', "head");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98885921260393240253114_66359142', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_client']->value));
}
/* {block "head"} */
class Block_2068754398603932402520e3_21787476 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_2068754398603932402520e3_21787476',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <style>
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
            color: #2CCE89!important;
        }
    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_98885921260393240253114_66359142 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_98885921260393240253114_66359142',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['List Tickets'];?>
</h2>
                    <div class="panel-toolbar">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/tickets/new/" class="btn pull-right btn-primary"><i class="icon-mail"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Open New Ticket'];?>
</a>
                    </div>

                </div>
                <div class="panel-container">
                    <div class="panel-content">
                        <table class="table table-hover table-vcenter">
                            <tbody>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
                                <tr>
                                    <td class="text-center h5" style="width: 140px;"><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/tickets/view/<?php echo $_smarty_tpl->tpl_vars['d']->value['tid'];?>
/">#<?php echo $_smarty_tpl->tpl_vars['d']->value['tid'];?>
</a></td>
                                    <td class="hidden-xs hidden-sm hidden-md text-center" style="width: 100px;">
                                    <span class="badge badge-success"><?php if ((isset($_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['d']->value['status']]))) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['_L']->value[$_smarty_tpl->tpl_vars['d']->value['status']];?>

                                    <?php } else { ?>
                                    <?php echo $_smarty_tpl->tpl_vars['d']->value['status'];?>

                                    <?php }?></span>
                                    </td>
                                    <td>
                                        <a class="h4" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/tickets/view/<?php echo $_smarty_tpl->tpl_vars['d']->value['tid'];?>
/"><?php echo $_smarty_tpl->tpl_vars['d']->value['subject'];?>
</a>
                                        <div class="text-muted  mt-2">
                                            <em><?php echo $_smarty_tpl->tpl_vars['_L']->value['Updated'];?>
 </em> <em class="mmnt"><?php echo strtotime($_smarty_tpl->tpl_vars['d']->value['updated_at']);?>
</em> by <a class="text-info" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tickets/client/view/<?php echo $_smarty_tpl->tpl_vars['d']->value['tid'];?>
/"><?php echo $_smarty_tpl->tpl_vars['d']->value['last_reply'];?>
</a>
                                        </div>
                                    </td>


                                </tr>

                                <?php
}
if ($_smarty_tpl->tpl_vars['d']->do_else) {
?>
                                <tr><td align="center" style="border-top: none"><?php echo $_smarty_tpl->tpl_vars['_L']->value['You do not have any Tickets'];?>
</td></tr>
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




<?php
}
}
/* {/block "content"} */
}
