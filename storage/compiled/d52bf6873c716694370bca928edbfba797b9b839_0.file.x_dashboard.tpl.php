<?php
/* Smarty version 3.1.39, created on 2021-09-28 15:05:18
  from '/Users/razib/Documents/valet/business-suite/apps/wcsuite/views/x_dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6153676e6e3089_91244849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd52bf6873c716694370bca928edbfba797b9b839' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/wcsuite/views/x_dashboard.tpl',
      1 => 1609780158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6153676e6e3089_91244849 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h4 class="mb-3">Orders and sales summary <?php echo date('F, Y');?>
</h4>
<div class="row">
    <div class="col-md-3">
        <a  href="javascript:;">

            <div class="card mb-2" style="background: linear-gradient(to right,#4051f6,#475cf3,#4f65ef,#586eea,#6177e5); height: 120px">
                <div class="card-body">

                    <div class="row">
                        <div class="col">

                            <div class="h1 text-white  mb-0">
                                <?php if ((isset($_smarty_tpl->tpl_vars['data']->value[0]->total_sales))) {?>
                                    <?php echo formatCurrency($_smarty_tpl->tpl_vars['data']->value[0]->total_sales,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>

                                    <?php } else { ?>
                                    --
                                <?php }?>
                            </div>

                        </div>


                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="text-white text-hover-primary font-weight-bold font-size-lg mt-1">Total sales this year</p>

                        </div>

                    </div>



                </div>
            </div>

        </a>
    </div>
    <div class="col-md-3">
        <a  href="javascript:;">

            <div class="card mb-2" style="background: linear-gradient(87deg,#2dce89 0,#2dcecc 100%)!important;height: 120px">


                <div class="card-body" >
                    <div class="row">
                        <div class="col">
                            <div class="h1 text-white mb-0">
                                <?php if ((isset($_smarty_tpl->tpl_vars['data']->value[0]->total_sales))) {?>
                                    <?php echo formatCurrency($_smarty_tpl->tpl_vars['data']->value[0]->net_sales,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>

                                <?php } else { ?>
                                    --
                                <?php }?>
                            </div>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="text-white text-hover-primary font-weight-bold font-size-lg mt-1">Net sales this year</p>

                        </div>



                    </div>

                </div>

            </div>

        </a>
    </div>

    <div class="col-md-3">
        <a  href="javascript:;">

            <div class="card mb-2" style="background: linear-gradient(to right,#4051f6,#475cf3,#4f65ef,#586eea,#6177e5); height: 120px">
                <div class="card-body">

                    <div class="row">
                        <div class="col">

                            <div class="h1 text-white  mb-0">
                                <?php if ((isset($_smarty_tpl->tpl_vars['data']->value[0]->total_orders))) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['data']->value[0]->total_orders;?>

                                <?php } else { ?>
                                    --
                                <?php }?>
                            </div>

                        </div>


                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="text-white text-hover-primary font-weight-bold font-size-lg mt-1">Total orders this year</p>

                        </div>

                    </div>



                </div>
            </div>

        </a>
    </div>

    <div class="col-md-3">
        <a  href="javascript:;">

            <div class="card mb-2" style="background: linear-gradient(87deg,#008060 0,#825ee4 100%)!important;height: 120px">


                <div class="card-body" >
                    <div class="row">
                        <div class="col">
                            <div class="h1 text-white  mb-0">
                                <?php if ((isset($_smarty_tpl->tpl_vars['data']->value[0]->total_customers))) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['data']->value[0]->total_customers;?>

                                <?php } else { ?>
                                    --
                                <?php }?>
                            </div>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p class="text-white text-hover-primary font-weight-bold font-size-lg mt-1">Total customers</p>

                        </div>



                    </div>

                </div>

            </div>

        </a>
    </div>

</div>
<?php }
}
