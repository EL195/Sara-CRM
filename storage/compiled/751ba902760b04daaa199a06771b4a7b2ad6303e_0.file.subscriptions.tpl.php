<?php
/* Smarty version 3.1.39, created on 2021-10-07 13:27:09
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/subscriptions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615f2deddb3f38_52259994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '751ba902760b04daaa199a06771b4a7b2ad6303e' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/subscriptions.tpl',
      1 => 1633627628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615f2deddb3f38_52259994 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_555727529615f2dedda23e7_37371994', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97435000615f2deddb0445_43836750', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_555727529615f2dedda23e7_37371994 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_555727529615f2dedda23e7_37371994',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="subheader">
        <h1 class="subheader-title">
            <i class='subheader-icon fal fa-window'></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Subscriptions'];?>


        </h1>
    </div>



    <div class="row">
        <div class="col-md-12">

            <div class="panel">

                <div class="panel-hdr">




                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoices'];?>
</h2>


                    <div class="panel-toolbar">

                        <div class="btn-group">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
subscriptions/add" class="btn btn-primary  btn-sm"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['New Subscription'];?>
</a>
                        </div>

                    </div>
                </div>

                <div class="panel-container">
                    <div class="panel-content">

                        <ul class="nav nav-tabs nav-tabs-clean mb-3" role="tablist">
                            <li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['tab']->value == '' || $_smarty_tpl->tpl_vars['tab']->value == 'active') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
subscriptions/list"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Active'];?>
</a></li>
                            <li class="nav-item"><a class="nav-link  <?php if ($_smarty_tpl->tpl_vars['tab']->value == 'paid') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
subscriptions/list/inactive"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Inactive'];?>
</a></li>
                            <li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['tab']->value == 'cancelled') {?>active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
subscriptions/list/suspended"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Suspended'];?>
</a></li>
                            <li class="nav-item"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['tab']->value == 'all') {?>}active<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
subscriptions/list/all"><?php echo $_smarty_tpl->tpl_vars['_L']->value['All'];?>
</a></li>
                        </ul>

                        <div class="table-responsive">

                            <table id="clx_datatable" class="table table-striped w-100 sys_table footable">
                                <thead style="background: #f0f2ff">
                                <tr>
                                    <th>#</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer'];?>
</th>
                                    <th><?php echo __('Subscription Plan');?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Start Date'];?>
</th>
                                    <th><?php echo __('Next Renewal Date');?>
</th>
                                    <th>
                                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>

                                    </th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                                    <th class="text-right" width="140px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subscriptions']->value, 'subscription');
$_smarty_tpl->tpl_vars['subscription']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subscription']->value) {
$_smarty_tpl->tpl_vars['subscription']->do_else = false;
?>

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
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_97435000615f2deddb0445_43836750 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_97435000615f2deddb0445_43836750',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>




    <?php echo '<script'; ?>
>
        $(function () {

            var $modal = $('#cloudonex_body');

            $('#clx_datatable').dataTable(
                {
                    responsive: true,
                    lengthChange: false,
                    dom:
                    /*	--- Layout Structure
                        --- Options
                        l	-	length changing input control
                        f	-	filtering input
                        t	-	The table!
                        i	-	Table information summary
                        p	-	pagination control
                        r	-	processing display element
                        B	-	buttons
                        R	-	ColReorder
                        S	-	Select

                        --- Markup
                        < and >				- div element
                        <"class" and >		- div with a class
                        <"#id" and >		- div with an ID
                        <"#id.class" and >	- div with an ID and a class

                        --- Further reading
                        https://datatables.net/reference/option/dom
                        --------------------------------------
                     */
                        "<'row mb-3'<'col-sm-12 col-md-6 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'lB>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                    buttons: [
                        {
                            extend: 'csvHtml5',
                            text: 'CSV',
                            titleAttr: 'Generate CSV',
                            className: 'btn-primary btn-sm mr-1'
                        },
                        {
                            extend: 'copyHtml5',
                            text: 'Copy',
                            titleAttr: 'Copy to clipboard',
                            className: 'btn-warning btn-sm mr-1'
                        },
                        {
                            extend: 'print',
                            text: 'Print',
                            titleAttr: 'Print Table',
                            className: 'btn-secondary btn-sm'
                        }
                    ],
                    "language": {
                        "emptyTable": "<?php echo $_smarty_tpl->tpl_vars['_L']->value['No items to display'];?>
",
                        "info":      "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Showing _START_ to _END_ of _TOTAL_ entries'];?>
",
                        "infoEmpty":      "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Showing 0 to 0 of 0 entries'];?>
",
                        buttons: {
                            pageLength: '<?php echo $_smarty_tpl->tpl_vars['_L']->value['Show all'];?>
'
                        },
                        searchPlaceholder: "<?php echo __('Search');?>
"
                    },
                }
            );


            $modal.on('click', '.cdelete', function(e){

                e.preventDefault();
                var id = this.id;
                bootbox.confirm("Are You Sure?", function(result) {
                    if(result){
                        var _url = $("#_url").val();
                        window.location.href = _url + "delete/invoice/" + id;
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
