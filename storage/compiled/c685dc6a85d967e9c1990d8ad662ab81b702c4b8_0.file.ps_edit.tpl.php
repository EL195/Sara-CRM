<?php
/* Smarty version 3.1.39, created on 2021-05-26 08:34:55
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/ps_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ae406f8f47c6_28966467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c685dc6a85d967e9c1990d8ad662ab81b702c4b8' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/ps_edit.tpl',
      1 => 1599977819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ae406f8f47c6_28966467 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="mx-auto" style="max-width: 800px;">

    <div class="panel mb-0 rounded-0">

        <div class="panel-hdr ">

            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Edit'];?>
</h2>
        </div>


        <div class="panel-container">
            <div class="panel-content">
                <div class="row">
                    <div class="col-md-8">
                        <form class="form-horizontal" role="form" id="edit_form" method="post">
                            <div class="form-group">
                                <label for="name"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>
                                <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>
" name="name" id="name">
                            </div>
                            <div class="form-group">
                                <label for="rate"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item Number'];?>
</label>
                                <input type="text" class="form-control" name="item_number" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->item_number;?>
" id="item_number">
                            </div>
                            <div class="form-group">
                                <label for="rate" ><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales Price'];?>
</label>
                                <input type="text" id="sales_price" name="sales_price" class="form-control amount" autocomplete="off" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
"  data-a-dec="<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['config']->value['thousands_sep'];?>
" data-d-group="2" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->sales_price;?>
">
                            </div>

                            <div class="form-group">
                                <label for="cost_price" ><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cost Price'];?>
</label>
                                <input type="text" id="cost_price" name="cost_price" class="form-control amount" autocomplete="off" data-a-sign="<?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
"  data-a-dec="<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
" data-a-sep="<?php echo $_smarty_tpl->tpl_vars['config']->value['thousands_sep'];?>
" data-d-group="2" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->cost_price;?>
">
                            </div>
                            <div class="form-group">
                                <label for="available" ><?php echo $_smarty_tpl->tpl_vars['_L']->value['Available'];?>
</label>
                                <input type="text" id="inventory" name="inventory" class="form-control" autocomplete="off" value="<?php echo round($_smarty_tpl->tpl_vars['item']->value->inventory);?>
">
                            </div>

                            <div class="form-group">
                                <label for="description"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</label>
                                <textarea id="description" name="description" class="form-control" rows="3"><?php echo $_smarty_tpl->tpl_vars['item']->value->description;?>
</textarea>
                            </div>

                            <div class="form-group">
                                <label for="sku"><?php echo $_smarty_tpl->tpl_vars['_L']->value['SKU'];?>
</label>
                                <input type="text" class="form-control" name="sku" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->sku;?>
" id="sku">
                            </div>

                            <div class="form-group">
                                <label for="inventory"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Size'];?>
</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input type="text" id="width" name="width" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Width'];?>
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->width;?>
" autocomplete="off">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" id="width" name="length" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Length'];?>
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->length;?>
" autocomplete="off">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" id="width" name="height" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Height'];?>
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->height;?>
" autocomplete="off">
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" id="width" name="weight" placeholder="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Weight'];?>
" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->weight;?>
" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>






                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
">
                            <input type="hidden" name="file_link" id="file_link_image" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->image;?>
">
                            <button id="update" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Update'];?>
</button>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <form action="" class="dropzone" id="upload_container">

                            <div class="dz-message">
                                <h3> <i class="fal fa-cloud-upload"></i>  <?php echo $_smarty_tpl->tpl_vars['_L']->value['Drop File Here'];?>
</h3>
                                <br />
                                <span class="note"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Click to Upload'];?>
</span>
                            </div>

                            <hr>



                        </form>

                        <?php echo $_smarty_tpl->tpl_vars['has_img']->value;?>


                    </div>

                </div>




            </div>


        </div>
    </div>


</div>


<?php }
}
