<?php
/* Smarty version 3.1.39, created on 2021-02-20 15:00:06
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/transactions_bills.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60316a463109e6_43518736',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e041cec4ca2342a641f16e92a6ca362215a8c668' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/transactions_bills.tpl',
      1 => 1592298703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60316a463109e6_43518736 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48032635560316a462fb7f9_58818652', "content");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_138047114360316a463102f6_89730859', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_48032635560316a462fb7f9_58818652 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_48032635560316a462fb7f9_58818652',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




    <div id="panel-12" class="panel">
        <div class="panel-hdr">
            <h2>
                <?php echo $_smarty_tpl->tpl_vars['_L']->value['Bills'];?>
 <span class="fw-300"><i></i></span>
            </h2>
            <div class="panel-toolbar">
                <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
            </div>
        </div>
        <div class="panel-container show">
            <div class="panel-content">
                <div class="row">
                    <div class="col-auto">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active svg-icon svg-icon-primary" id="v-pills-home-tab"  href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/bills" aria-controls="v-pills-home" aria-selected="true">
                               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z" fill="#000000"/>
                                    </g>
                                </svg>
                                <span class="hidden-sm-down ml-1"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Summary'];?>
</span>
                            </a>
                            <a class="nav-link svg-icon svg-icon-primary" id="v-pills-profile-tab"  href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/bills-all"aria-controls="v-pills-profile" aria-selected="false">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/>
                                        <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"/>
                                    </g>
                                </svg>

                                <span class="hidden-sm-down ml-1"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['All'];?>
</span>
                            </a>
                            <a class="nav-link svg-icon svg-icon-primary" id="v-pills-messages-tab" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/bill" aria-controls="v-pills-messages" aria-selected="false">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/>
                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/>
                                    </g>
                                </svg>
                                <span class="hidden-sm-down ml-1"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Add a bill'];?>
</span>
                            </a>

                        </div>
                    </div>
                    <div class="col">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <h3>
                                    <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Upcoming Bills'];?>
 </h3>
                                </h3>
                                <div class="row">

                                    <?php if (count($_smarty_tpl->tpl_vars['bills_upcoming']->value) > 0) {?>

                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bills_upcoming']->value, 'bill');
$_smarty_tpl->tpl_vars['bill']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bill']->value) {
$_smarty_tpl->tpl_vars['bill']->do_else = false;
?>
                                            <div class="col-lg-6">
                                                <div class="card bg-light mb-3"  style="box-shadow: none; border-radius: 5px; border: 1px solid #e2e9ec;">
                                                    <div class="panel-container">
                                                        <div class="panel-content">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <p><?php echo translate_date_string(date('D M d, Y',strtotime($_smarty_tpl->tpl_vars['bill']->value->next_date)),$_smarty_tpl->tpl_vars['_L']->value);?>
</p>
                                                                </div>
                                                                <div class="col-md-6 text-right">
                                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/bill/<?php echo $_smarty_tpl->tpl_vars['bill']->value->id;?>
" class="btn btn-primary btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="View"><i class="fal fa-pencil"></i></a>
                                                                    <?php if ($_smarty_tpl->tpl_vars['bill']->value->website != '') {?>
                                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['bill']->value->website;?>
" target="_blank" class="btn btn-dark btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['bill']->value->website;?>
"><i class="fal fa-globe"></i></a>
                                                                    <?php }?>
                                                                    <a href="javascript:;" onclick="confirmThenGoToUrl(event,'transactions/delete-bill/<?php echo $_smarty_tpl->tpl_vars['bill']->value->id;?>
');" class="btn btn-danger btn-sm btn-icon" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
"><i class="fal fa-trash"></i></a>
                                                                    <?php if ($_smarty_tpl->tpl_vars['bill']->value->is_paid == 0) {?>
                                                                        <a href="javascript:;" onclick="confirmThenGoToUrl(event,'transactions/bill-mark-as-paid/<?php echo $_smarty_tpl->tpl_vars['bill']->value->id;?>
');" class="btn btn-success btn-sm btn-icon" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Mark as Paid'];?>
"><i class="fal fa-check"></i></a>
                                                                    <?php }?>
                                                                </div>
                                                            </div>
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/bill/<?php echo $_smarty_tpl->tpl_vars['bill']->value->id;?>
"><h4><?php echo $_smarty_tpl->tpl_vars['bill']->value->title;?>
</h4></a>
                                                            <h1 class="no-margins"><?php echo formatCurrency($_smarty_tpl->tpl_vars['bill']->value->net_amount,$_smarty_tpl->tpl_vars['bill']->value->currency);?>
</h1>
                                                            <?php if ($_smarty_tpl->tpl_vars['bill']->value->is_paid) {?>
                                                                <div class="stat-percent font-bold text-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Paid'];?>
</div>
                                                            <?php } else { ?>
                                                                <div class="stat-percent font-bold text-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due'];?>
</div>
                                                            <?php }?>
                                                            <small><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['bill']->value->recurring_type);?>
</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                    <?php } else { ?>

                                        <div class="col-md-12">
                                            <p><?php echo $_smarty_tpl->tpl_vars['_L']->value['No Data Available'];?>
</p>
                                        </div>

                                    <?php }?>



                                    <?php if (count($_smarty_tpl->tpl_vars['bills_pas_due']->value) > 0) {?>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3><?php echo $_smarty_tpl->tpl_vars['_L']->value['Past Due'];?>
 </h3>
                                                <div class="hr-line-dashed"></div>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bills_pas_due']->value, 'bill');
$_smarty_tpl->tpl_vars['bill']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['bill']->value) {
$_smarty_tpl->tpl_vars['bill']->do_else = false;
?>
                                                <div class="col-lg-6">
                                                    <div class="panel" style="background: #0a6ebd;
                                                box-shadow: none; border-radius: 0; border: 1px solid #e2e9ec;">
                                                        <div class="ibox-content">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <small><?php echo translate_date_string(date('D M d, Y',strtotime($_smarty_tpl->tpl_vars['bill']->value->next_date)),$_smarty_tpl->tpl_vars['_L']->value);?>
</small>
                                                                </div>
                                                                <div class="col-md-6 text-right">
                                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/bill/<?php echo $_smarty_tpl->tpl_vars['bill']->value->id;?>
" class="btn btn-primary btn-icon" data-toggle="tooltip" data-placement="top" title="View"><i class="fal fa-file-text-o"></i></a>
                                                                    <?php if ($_smarty_tpl->tpl_vars['bill']->value->website != '') {?>
                                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['bill']->value->website;?>
" target="_blank" class="btn btn-dark btn-icon" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['bill']->value->website;?>
"><i class="fal fa-globe"></i></a>
                                                                    <?php }?>
                                                                    <a href="javascript:;" onclick="confirmThenGoToUrl(event,'transactions/delete-bill/<?php echo $_smarty_tpl->tpl_vars['bill']->value->id;?>
');" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
"><i class="fal fa-trash"></i></a>
                                                                    <?php if ($_smarty_tpl->tpl_vars['bill']->value->is_paid == 0) {?>
                                                                        <a href="javascript:;" onclick="confirmThenGoToUrl(event,'transactions/bill-mark-as-paid/<?php echo $_smarty_tpl->tpl_vars['bill']->value->id;?>
');" class="btn btn-green btn-xs" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Mark as Paid'];?>
"><i class="fal fa-check"></i></a>
                                                                    <?php }?>
                                                                </div>
                                                            </div>
                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
transactions/bill/<?php echo $_smarty_tpl->tpl_vars['bill']->value->id;?>
"><h4><?php echo $_smarty_tpl->tpl_vars['bill']->value->title;?>
</h4></a>
                                                            <h1 class="no-margins"><?php echo formatCurrency($_smarty_tpl->tpl_vars['bill']->value->net_amount,$_smarty_tpl->tpl_vars['bill']->value->currency);?>
</h1>
                                                            <?php if ($_smarty_tpl->tpl_vars['bill']->value->is_paid) {?>
                                                                <div class="stat-percent font-bold text-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Paid'];?>
</div>
                                                            <?php } else { ?>
                                                                <div class="stat-percent font-bold text-danger"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Due'];?>
</div>
                                                            <?php }?>
                                                            <small><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['bill']->value->recurring_type);?>
</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                                        </div>

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
/* {block "script"} */
class Block_138047114360316a463102f6_89730859 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_138047114360316a463102f6_89730859',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




    <?php echo '<script'; ?>
>


        $(function () {


            $('[data-toggle="tooltip"]').tooltip();


        });

    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
