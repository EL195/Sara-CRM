<?php
/* Smarty version 3.1.39, created on 2021-06-20 17:04:22
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_shipping_addresses.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60cfad56a90824_75295853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '690ea19abefc6cd23d449bd1ce3b57135188d0a9' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_shipping_addresses.tpl',
      1 => 1599417713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cfad56a90824_75295853 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53113960960cfad56a86a02_91059229', "head");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104175447160cfad56a87ad9_90178617', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97345922060cfad56a8ff78_12471722', "script");
?>





<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_client']->value));
}
/* {block "head"} */
class Block_53113960960cfad56a86a02_91059229 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_53113960960cfad56a86a02_91059229',
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
            font-weight: 600!important;
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
class Block_104175447160cfad56a87ad9_90178617 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_104175447160cfad56a87ad9_90178617',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="panel">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Shipping Addresses'];?>
</h2>
            <div class="panel-toolbar">

            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/shipping-address/" class="btn btn-sm btn-success"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Address'];?>
</a>
            </div>

        </div>
        <div class="panel-container">

        <div class="panel-content">


        <div class="table-responsive">
        <table class="table  table-striped sys_table">




        <thead style="background: #f0f2ff">
            <tr>


            <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Shipping Addresses'];?>
</th>
            <th class="float-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                        
            </tr>



        </thead>

        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipping_addresses']->value, 'shipping_address');
$_smarty_tpl->tpl_vars['shipping_address']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping_address']->value) {
$_smarty_tpl->tpl_vars['shipping_address']->do_else = false;
?>


            <tr>

                <td class="h6"><?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->address_line_1;?>

                <br>
                    <?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->zip;?>
, <?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->city;?>

                    <br>
                    <?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->state;?>
, <?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->country;?>

                </td>
                <td>

                    <div class="btn-group float-right">
                        <?php if ($_smarty_tpl->tpl_vars['shipping_address']->value->is_default) {?>
                            <?php } else { ?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/set-default-shipping-address/<?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->id;?>
" class="btn btn-primary "><?php echo $_smarty_tpl->tpl_vars['_L']->value['Set Default'];?>
 </a>
                        <?php }?>

                        <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/shipping-address/<?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->id;?>
" class="btn btn-warning btn-icon"><i class="fal fa-pencil"></i> </a>
                        <a href="" class="btn btn-danger btn-icon cdelete" id="<?php echo $_smarty_tpl->tpl_vars['shipping_address']->value->id;?>
" ><i class="fal fa-trash-alt"></i> </a>
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




    

<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_97345922060cfad56a8ff78_12471722 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_97345922060cfad56a8ff78_12471722',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <?php echo '<script'; ?>
>
        $(function () {

            var $modal = $('#cloudonex_body');

            $modal.on('click', '.cdelete', function(e){

                e.preventDefault();
                var id = this.id;
                bootbox.confirm("Are You Sure?", function(result) {
                    if(result){
                        var _url = $("#_url").val();
                        window.location.href = _url + "client/delete-shipping-address/" + id;
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
