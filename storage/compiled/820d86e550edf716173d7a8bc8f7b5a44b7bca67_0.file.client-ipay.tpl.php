<?php
/* Smarty version 3.1.39, created on 2021-03-12 12:12:06
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/client-ipay.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604ba0e6b84e03_84356397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '820d86e550edf716173d7a8bc8f7b5a44b7bca67' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/client-ipay.tpl',
      1 => 1610529598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604ba0e6b84e03_84356397 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_926707610604ba0e6b71559_75008218', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153317102604ba0e6b81478_04092727', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/canvas.tpl");
}
/* {block "content"} */
class Block_926707610604ba0e6b71559_75008218 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_926707610604ba0e6b71559_75008218',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="mx-auto" style="width: 600px; max-width: 600px; margin-top: 50px;">
        <div class="card">
            <div class="card-body">
                <?php if ((isset($_smarty_tpl->tpl_vars['notify']->value))) {?>
                    <?php echo $_smarty_tpl->tpl_vars['notify']->value;?>

                <?php }?>

                <div class="row">
                    <div class="col-sm-6 mt-md">
                        <h2 class="h2 mt-none mb-sm text-dark text-bold"><?php echo $_smarty_tpl->tpl_vars['_L']->value['INVOICE'];?>
</h2>
                        <h4 class="h4 m-none text-dark text-bold">#<?php echo $_smarty_tpl->tpl_vars['d']->value['invoicenum'];
if ($_smarty_tpl->tpl_vars['d']->value['cn'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['d']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
 <?php }?></h4>
                    </div>
                    <div class="col-sm-6 text-right mt-md mb-md">

                        <h4> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice Total'];?>
: <?php echo ib_money_format($_smarty_tpl->tpl_vars['d']->value['total'],$_smarty_tpl->tpl_vars['config']->value,$_smarty_tpl->tpl_vars['d']->value['currency_symbol']);?>
 </h4>
                        <?php if (($_smarty_tpl->tpl_vars['d']->value['credit']) != '0.00') {?>
                            <h2> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Paid'];?>
: <?php echo ib_money_format($_smarty_tpl->tpl_vars['d']->value['credit'],$_smarty_tpl->tpl_vars['config']->value,$_smarty_tpl->tpl_vars['d']->value['currency_symbol']);?>
</h2>
                            <h2> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount Due'];?>
: <?php echo ib_money_format($_smarty_tpl->tpl_vars['i_due']->value,$_smarty_tpl->tpl_vars['config']->value,$_smarty_tpl->tpl_vars['d']->value['currency_symbol']);?>
</h2>
                        <?php }?>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-12">
                        <?php if ((isset($_smarty_tpl->tpl_vars['ins']->value))) {?>
                            <?php echo $_smarty_tpl->tpl_vars['ins']->value;?>

                        <?php }?>
                    </div>


                    <?php if (!(isset($_smarty_tpl->tpl_vars['_no_proof_of_payment']->value))) {?>
                        <div class="col-md-12">
                            <hr>
                            <a data-toggle="modal" href="#modal_add_item" class="btn btn-primary ml-sm"><i class="fal fa-paperclip"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Proof Of Payment'];?>
</a>
                        </div>
                    <?php }?>


                </div>


            </div>
        </div>
    </div>


    <div class="modal fade" id="modal_add_item" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Upload'];?>
</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="mb-3">
                        <div class="form-group">
                            <label for="doc_title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Title'];?>
</label>
                            <input type="text" class="form-control" id="doc_title" name="doc_title" value="<?php echo $_smarty_tpl->tpl_vars['_L']->value['INVOICE'];?>
/<?php echo $_smarty_tpl->tpl_vars['d']->value['invoicenum'];
if ($_smarty_tpl->tpl_vars['d']->value['cn'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['d']->value['cn'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['d']->value['id'];
}?>/<?php echo $_smarty_tpl->tpl_vars['_L']->value['Proof Of Payment'];?>
">

                        </div>



                    </form>

                    <form action="" class="dropzone" id="upload_container">

                        <div class="dz-message">
                            <h3> <i class="fal fa-cloud-upload"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Drop File Here'];?>
</h3>
                            <br />
                            <span class="note"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Click to Upload'];?>
</span>
                        </div>

                    </form>


                </div>
                <div class="modal-footer">
                    <input type="hidden" name="file_link" id="file_link" value="">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Close'];?>
</button>
                    <button type="button" id="btn_add_file" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                </div>
            </div>
        </div>
    </div>



<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_153317102604ba0e6b81478_04092727 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_153317102604ba0e6b81478_04092727',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>

        <?php if (!(isset($_smarty_tpl->tpl_vars['_no_proof_of_payment']->value))) {?>
        Dropzone.autoDiscover = false;
        <?php }?>


        jQuery(document).ready(function() {
            // initiate layout and plugins


            var $modal = $('#ajax-modal');




            <?php if (!(isset($_smarty_tpl->tpl_vars['_no_proof_of_payment']->value))) {?>



            var $btn_add_file = $("#btn_add_file");

            var $file_link = $("#file_link");

            var upload_resp;

            var ib_file = new Dropzone("#upload_container",
                {
                    url: base_url + "client/upload/<?php echo $_smarty_tpl->tpl_vars['d']->value->vtoken;?>
/<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
",
                    maxFiles: 1
                }
            );


            ib_file.on("sending", function() {

                $btn_add_file.prop('disabled', true);

            });

            ib_file.on("success", function(file,response) {

                $btn_add_file.prop('disabled', false);

                upload_resp = response;

                if(upload_resp.success == 'Yes'){

                    toastr.success(upload_resp.msg);
                    $file_link.val(upload_resp.file);


                }
                else{
                    toastr.error(upload_resp.msg);
                }


            });




            var $doc_title = $("#doc_title");


            $btn_add_file.on('click', function(e) {
                e.preventDefault();


                $.post( base_url + "client/doc_payment_proof", { title: $doc_title.val(), file_link: $file_link.val(), rid: <?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
, rtype: 'invoice' })
                    .done(function( data ) {

                        if ($.isNumeric(data)) {

                            //   location.reload();

                            window.location = base_url + 'client/iview/<?php echo $_smarty_tpl->tpl_vars['d']->value->id;?>
/<?php echo $_smarty_tpl->tpl_vars['d']->value->vtoken;?>
';



                        }

                        else {

                            toastr.error(data);
                        }




                    });


            });

            <?php }?>



        });

    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
