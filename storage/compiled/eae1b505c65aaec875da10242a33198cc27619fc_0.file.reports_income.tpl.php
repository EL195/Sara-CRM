<?php
/* Smarty version 3.1.39, created on 2021-04-18 07:41:48
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/reports_income.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607c1afc46b244_29736483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eae1b505c65aaec875da10242a33198cc27619fc' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/reports_income.tpl',
      1 => 1596221994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607c1afc46b244_29736483 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1326625104607c1afc439d26_12594892', "head");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1684755538607c1afc43c3d3_39262059', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_812106189607c1afc465645_02789957', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_1326625104607c1afc439d26_12594892 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1326625104607c1afc439d26_12594892',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F7F9FC;
        }
    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_1684755538607c1afc43c3d3_39262059 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1684755538607c1afc43c3d3_39262059',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="panel">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income Reports'];?>
 </h2>
        </div>

        <div class="panel-container">
            <div class="panel-content">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>

                    <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income Summary'];?>
 [ <?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
 ]</h4>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="p-3 bg-warning-400 rounded overflow-hidden position-relative text-white mb-g">
                                <div class="">
                                    <h5 class="display-4 d-block l-h-n m-0 fw-500">
                                        <?php echo $_smarty_tpl->tpl_vars['currency']->value->symbol;
echo $_smarty_tpl->tpl_vars['total_income_all_time']->value;?>

                                        <small class="m-0 l-h-n"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Income'];?>
</small>
                                    </h5>
                                    <i class="fal fa-gem position-absolute pos-right pos-bottom opacity-15  mb-n1 mr-n4" style="font-size: 6rem;"></i>


                                </div>

                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="p-3 bg-success-200 rounded overflow-hidden position-relative text-white mb-g">
                                <div class="details">
                                    <h5 class="display-4 d-block l-h-n m-0 fw-500">
                                        <?php echo $_smarty_tpl->tpl_vars['currency']->value->symbol;
echo Transaction::totalAmount('Income',$_smarty_tpl->tpl_vars['currency']->value->id,'current_month',$_smarty_tpl->tpl_vars['all_data']->value);?>

                                        <small class="m-0 l-h-n"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Income This Month'];?>
 </small>
                                    </h5>
                                    <i class="fal fa-lightbulb position-absolute pos-right pos-bottom opacity-15 mb-n5 mr-n6" style="font-size: 8rem;"></i>


                                </div>
                            </div>

                         </div>


                    </div>




                    <div class="row">
                        <div class="col-md-6">
                            <div class="p-3 bg-primary-200 rounded overflow-hidden position-relative text-white mb-g">                           <div>
                                    <h5 class="display-4 d-block l-h-n m-0 fw-500">
                                        <?php echo $_smarty_tpl->tpl_vars['currency']->value->symbol;
echo Transaction::totalAmount('Income',$_smarty_tpl->tpl_vars['currency']->value->id,'last_30_days',$_smarty_tpl->tpl_vars['all_data']->value);?>

                                        <small class="m-0 l-h-n"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Income Last 30 days'];?>
  </small>
                                    </h5>
                                    <i class="fal fa-credit-card position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n1" style="font-size:6rem"></i>


                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="p-3 bg-info-200 rounded overflow-hidden position-relative text-white mb-g">                           <div>
                                    <h5 class="display-4 d-block l-h-n m-0 fw-500">
                                        <?php echo $_smarty_tpl->tpl_vars['currency']->value->symbol;
echo Transaction::totalAmount('Income',$_smarty_tpl->tpl_vars['currency']->value->id,'current_week',$_smarty_tpl->tpl_vars['all_data']->value);?>

                                        <small class="m-0 l-h-n"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total Income This Week'];?>
  </small>
                                    </h5>
                                    <i class="fal fa-globe position-absolute pos-right pos-bottom opacity-15 mb-n1 mr-n4" style="font-size: 6rem;"></i>


                                </div>
                            </div>
                        </div>
                    </div>



                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Last 20 deposit Income'];?>
</h4>
                <hr>

                <div class="table-responsive">
                    <table class="table table-striped w-100">
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Date'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Account'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Category'];?>
</th>
                        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Payer'];?>
</th>

                        <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</th>

                        <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Cr'];?>
</th>


                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                            <tr>
                                <td><?php echo date($_smarty_tpl->tpl_vars['config']->value['df'],strtotime($_smarty_tpl->tpl_vars['ds']->value['date']));?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['account'];?>
</td>
                                <td><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['type']);?>
</td>
                                <td><?php if ($_smarty_tpl->tpl_vars['ds']->value['category'] == 'Uncategorized') {
echo $_smarty_tpl->tpl_vars['_L']->value['Uncategorized'];?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['ds']->value['category'];?>
 <?php }?></td>
                                <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['ds']->value['amount'],2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['payer'];?>
</td>



                                <td><?php echo $_smarty_tpl->tpl_vars['ds']->value['description'];?>
</td>

                                <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['config']->value['currency_code'];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['ds']->value['cr'],2,$_smarty_tpl->tpl_vars['config']->value['dec_point'],$_smarty_tpl->tpl_vars['config']->value['thousands_sep']);?>
</td>


                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                    </table>

                </div>



                <div id="income_by_month"></div>
                <hr>

                <h4><?php echo $_smarty_tpl->tpl_vars['_L']->value['Income by Category'];?>
</h4>

                <div id="category_pie_chart"></div>

            </div>

        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_812106189607c1afc465645_02789957 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_812106189607c1afc465645_02789957',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>
        $(function () {

            $('.amount').autoNumeric('init', {


                dGroup: 3,
                aPad: true,
                pSign: 'p',
                aDec: '<?php echo $_smarty_tpl->tpl_vars['config']->value['dec_point'];?>
',
                aSep: '<?php echo $_smarty_tpl->tpl_vars['config']->value['thousands_sep'];?>
',
                vMax: '9999999999999999.00',
                vMin: '-9999999999999999.00'

            });


           // var myChart = echarts.init(document.getElementById('placeholder'));

            // specify chart configuration item and data


            var income_by_months = {
                chart: { height: 500, type: "area", zoom: { enabled: !1 } },
                colors: ["#5A8DEE", "#FDAC41", "#FF5B5C", "#39DA8A", "#00CFDD"],
                dataLabels: { enabled: !1 },
                stroke: { curve: "straight" },
                series: [{ name: "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Income'];?>
", data: [<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['m_data']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
                        <?php echo $_smarty_tpl->tpl_vars['d']->value['value'];?>
,
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>] }],
                title: { text: "<?php echo $_smarty_tpl->tpl_vars['_L']->value['Reports by Month'];?>
", align: "left"},
                grid: { row: { colors: ["#f3f3f3", "transparent"], opacity: .5 } },
                xaxis: { categories: [
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['m_data']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
                        "<?php echo $_smarty_tpl->tpl_vars['d']->value['month'];?>
",
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    ] },
                yaxis: { tickAmount: 5 }
            };

            new ApexCharts(document.querySelector("#income_by_month"), income_by_months).render();


            var category_pie_chart_options = {
                chart: { type: "donut", height: 500 },
                colors: ["#5A8DEE", "#FDAC41", "#FF5B5C", "#39DA8A", "#00CFDD"],
                labels: [
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cat_data']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
                    '<?php echo $_smarty_tpl->tpl_vars['d']->value['category'];?>
',
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                ],
                series: [
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cat_data']->value, 'd');
$_smarty_tpl->tpl_vars['d']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->do_else = false;
?>
                    <?php echo $_smarty_tpl->tpl_vars['d']->value['value'];?>
,
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                ],
                legend: { itemMargin: { horizontal: 2 } },
                responsive: [ { breakpoint: 576, options: { chart: { width: 300 }, legend: { position: "bottom" } } }]
            };

            new ApexCharts(document.querySelector("#category_pie_chart"), category_pie_chart_options).render();


        });
    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
