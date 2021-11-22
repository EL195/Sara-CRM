<?php
/* Smarty version 3.1.39, created on 2021-05-21 06:56:11
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/reports_sales.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a791cbd2d584_05008959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95bf0848e99bf9fac3edf5eaabf3ea17f4aa9cb1' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/reports_sales.tpl',
      1 => 1596718216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a791cbd2d584_05008959 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27570437360a791cbd10795_99473304', "head");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49183882760a791cbd12010_55597761', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17339855360a791cbd2c6f4_31300613', 'script');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_27570437360a791cbd10795_99473304 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_27570437360a791cbd10795_99473304',
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
class Block_49183882760a791cbd12010_55597761 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_49183882760a791cbd12010_55597761',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">

        <div class="col-md-12">

            <div class="panel" id="calendar_wrap">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Calendar'];?>
 [ <?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoice'];?>
 ] </h2>
                </div>

                
            </div>

        </div>

        <div class="col-md-12">

            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sales'];?>
 </h2>
                </div>

                <div class="panel-container">
                    <div class="panel-content">
                        <div class="table-responsive">
                            <table class="table  table-striped dataTable" id="sales_items">
                                <thead style="background: #f0f2ff">
                                <tr>
                                    <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item'];?>
</th>
                                    <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Qty'];?>
</th>
                                    <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                                    <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>
                                    <th class="h6"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['invoice_items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                    <tr>
                                        <td class="h6"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</td>
                                        <td class="h6"><?php echo $_smarty_tpl->tpl_vars['item']->value['qty'];?>
</td>
                                        <td class="h6"><?php echo $_smarty_tpl->tpl_vars['item']->value['amount'];?>
</td>
                                        <td class="h6"><?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
</td>
                                        <td class="h6 text-info"><?php echo $_smarty_tpl->tpl_vars['item']->value['duedate'];?>
</td>
                                    </tr>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Item'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Qty'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                                </tr>
                                </tfoot>
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
/* {block 'script'} */
class Block_17339855360a791cbd2c6f4_31300613 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_17339855360a791cbd2c6f4_31300613',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>





    <?php echo '<script'; ?>
>
        

        var $calendar_wrap = $("#calendar_wrap");

        function view_event(id) {


        }

        var ib_calendar_options = {
            customButtons: {},
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay,viewFullCalendar'
            },
            loading: function(isLoading, view) {
                if (isLoading) {
                    $calendar_wrap.block({ message: block_msg });
                } else {
                    $calendar_wrap.unblock();
                    $('[data-toggle="tooltip"]').tooltip();
                }
            },
            editable: true,
            eventLimit: 3,
            lang: ib_lang,
            isRTL: ib_rtl,
            eventSources: [{
                url: base_url + 'reports/sales_invoice_calendar',
                type: 'GET',
                error: function() {
                    bootbox.alert("Unable to load data.");
                }
            } ],
            eventRender: function(event, element) {
                element.attr('title', event._tooltip);
                element.attr('onclick', event.onclick);
                element.attr('data-toggle', 'tooltip');
                if (!event.url) {
                    element.click(function() {
                        view_event(event.eventid);
                    });
                }
            },
            eventStartEditable: false,

            firstDay: 0,
        };




        $('#calendar').fullCalendar(ib_calendar_options);

        
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'script'} */
}
