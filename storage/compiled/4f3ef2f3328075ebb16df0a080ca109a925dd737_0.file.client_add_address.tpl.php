<?php
/* Smarty version 3.1.39, created on 2021-06-20 17:04:25
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_add_address.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60cfad59437cd0_45578266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f3ef2f3328075ebb16df0a080ca109a925dd737' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/client_add_address.tpl',
      1 => 1599417713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60cfad59437cd0_45578266 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33414350260cfad5942f140_85312336', "head");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191578462860cfad59430148_49408946', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119826834260cfad59437357_72286582', 'script');
?>





<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_client']->value));
}
/* {block "head"} */
class Block_33414350260cfad5942f140_85312336 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_33414350260cfad5942f140_85312336',
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
class Block_191578462860cfad59430148_49408946 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_191578462860cfad59430148_49408946',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="panel">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Address'];?>
</h2>
            <div class="panel-toolbar">

            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/shipping-addresses" class="btn btn-sm btn-success"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Shipping Addresses'];?>
</a>
            </div>

        </div>
        <div class="panel-container">

        <div class="panel-content">

            <form id="main_form" method="post">

                <div class="form-group" >
                    <label  for="address"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Address'];?>
</span></label>

                    <input type="text" id="address1" name="address" class="form-control"
                           <?php if ($_smarty_tpl->tpl_vars['shipping_address']->value) {?>
                           value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['shipping_address']->value->address_line_1;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
"
                    <?php }?>>
                </div>
                <div class="form-group"><label  for="city"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['City'];?>
</span></label>

                    <input type="text" id="city" name="city" class="form-control"
                           <?php if ($_smarty_tpl->tpl_vars['shipping_address']->value) {?>
                               value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['shipping_address']->value->city;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
"
                           <?php }?>>

                </div>
                <div class="form-group"><label  for="state"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['State Region'];?>
</span></label>

                    <input type="text" id="state" name="state" class="form-control"
                            <?php if ($_smarty_tpl->tpl_vars['shipping_address']->value) {?>
                                value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['shipping_address']->value->state;
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
"
                            <?php }?>

                    >
                </div>
                <div class="form-group"><label for="zip"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['ZIP Postal Code'];?>
</span> </label>

                    <input type="text" id="zip" name="zip" class="form-control"
                            <?php if ($_smarty_tpl->tpl_vars['shipping_address']->value) {?>
                                value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['shipping_address']->value->zip;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
"
                            <?php }?>

                    >
                </div>
                <div class="form-group"><label  for="country"><span class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Country'];?>
</span></label>

                    <select name="country" id="country" class="form-control">
                        <option value=""><span></span><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select Country'];?>
</option>
                        <?php echo $_smarty_tpl->tpl_vars['countries']->value;?>


                    </select>



                </div>
                <?php if ($_smarty_tpl->tpl_vars['shipping_address']->value) {?>

                    <input type="hidden" name="form_id" value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['shipping_address']->value->id;
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
">

                <?php }?>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" id="btn_submit">Submit</button>

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
class Block_119826834260cfad59437357_72286582 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_119826834260cfad59437357_72286582',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {

            $('#success_message').redactor(
                {
                    minHeight: 200 // pixels
                }
            );

            let $main_form = $('#main_form');
            let $btn_submit = $('#btn_submit');

            var form = document.getElementById("main_form");
            var pristine = new Pristine(form);

            $main_form.on('submit',function (e) {
                e.preventDefault();


                if(pristine.validate())
                {
                    $btn_submit.prop('disabled',true);

                    $.post( base_url + 'client/save-shipping-address', $main_form.serialize())
                        .done(function( data ) {

                           window.location = base_url + 'client/shipping-addresses';

                        }).fail(function (error) {
                        $btn_submit.prop('disabled',false);
                        toastr.error(error.responseText);
                    });
                }






            });
            $country = $("#country");

            $country.select2();

        });

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
