<?php
/* Smarty version 3.1.39, created on 2021-08-23 12:11:17
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/feature-settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6123c8a514a943_86683268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ced49798b5794da80f96d4a09e137e2bd45637c8' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/feature-settings.tpl',
      1 => 1629654578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6123c8a514a943_86683268 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3122556406123c8a50fc629_94236010', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21247594666123c8a5139f12_83385706', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_3122556406123c8a50fc629_94236010 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3122556406123c8a50fc629_94236010',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-6">



            <div class="panel" id="ui_settings">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Choose Features'];?>
</h2>


                </div>

                <div class="panel-container">
                    <div class="panel-content">
                        <table class="table table-hover">
                            <tbody>

                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_accounting"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Accounting'];?>
 </label></td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_accounting" <?php if (get_option('accounting') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>

                                </td>
                            </tr>

                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_invoicing"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoicing'];?>
 </label></td>
                                <td>

                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_invoicing" <?php if (get_option('invoicing') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>

                                </td>
                            </tr>

                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_pos"><?php echo $_smarty_tpl->tpl_vars['_L']->value['POS'];?>
 </label></td>
                                <td>

                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_pos" <?php if (get_option('pos') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>

                                </td>
                            </tr>

                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_invoice_receipt_number"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoicing'];?>
 - <?php echo $_smarty_tpl->tpl_vars['_L']->value['Receipt Number'];?>
</label></td>
                                <td>

                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_invoice_receipt_number" <?php if (get_option('invoice_receipt_number') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>

                                </td>
                            </tr>


                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_show_business_number"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Invoicing'];?>
 - <?php echo $_smarty_tpl->tpl_vars['_L']->value['Show Business Number'];?>
</label></td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_show_business_number" <?php if (get_option('show_business_number') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td width="80%">
                                    <label class="font-weight-bold" for="label_business_number"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Business Number Label Name'];?>
 </label> <br>

                                </td>
                                <td> <div class="form-group">
                                        <label class="font-weight-bold" for="label_business_number"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>
                                        <input class="form-control" type="text" id="label_business_number" name="label_business_number" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['label_business_number'];?>
">

                                    </div></td>
                            </tr>



                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_quotes"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Quotes'];?>
 </label></td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_quotes" <?php if (get_option('quotes') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>


                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_delivery_challans"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delivery Challans'];?>
 </label></td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_delivery_challans" <?php if (get_option('delivery_challans') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>


                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_companies"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Companies'];?>
 </label></td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_companies" <?php if (get_option('companies') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_fax_field"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Fax'];?>
 field </label></td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_fax_field" <?php if (get_option('fax_field') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_leads"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Leads'];?>
 </label></td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_leads" <?php if (get_option('leads') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_orders"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Orders'];?>
 </label></td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_orders" <?php if (get_option('orders') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>

                            <?php if ($_smarty_tpl->tpl_vars['config']->value['orders'] == '1') {?>

                                <tr>
                                    <td width="80%">
                                        <label class="font-weight-bold" for="config_order_method"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Order Method'];?>
 </label> <br>
                                    </td>
                                    <td>

                                        <select class="form-control" name="config_order_method" id="config_order_method">
                                            <option value="default" <?php if ($_smarty_tpl->tpl_vars['config']->value['order_method'] == 'default') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Default'];?>
</option>
                                            <option value="create_invoice_later" <?php if ($_smarty_tpl->tpl_vars['config']->value['order_method'] == 'create_invoice_later') {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Place Order, Create Invoice Later'];?>
</option>

                                        </select>

                                    </td>
                                </tr>





                            <?php }?>

                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_support"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Support'];?>
 </label></td>
                                <td>

                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_support" <?php if (get_option('support') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>


                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_kb"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Knowledgebase'];?>
 </label></td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_kb" <?php if (get_option('kb') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>

                            </tr>


                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_hrm"><?php echo $_smarty_tpl->tpl_vars['_L']->value['HRM'];?>
 </label></td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_hrm" <?php if (get_option('hrm') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_projects"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Projects'];?>
 </label></td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_projects" <?php if (get_option('projects') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_tasks"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Tasks'];?>
 </label></td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_tasks" <?php if (get_option('tasks') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>


                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_create_task_from_ticket"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Create tasks automatically from ticket'];?>
 </label></td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_create_task_from_ticket" <?php if (get_option('create_task_from_ticket') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_calendar"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Calendar'];?>
 </label></td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_calendar" <?php if (get_option('calendar') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_documents"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Documents'];?>
 </label></td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_documents" <?php if (get_option('documents') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>


                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_subscriptions"><?php echo __('Subscriptions');?>
 </label></td>
                                <td>

                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input id="config_subscriptions" type="checkbox" class="on_change_feature" data-feature="subscriptions" value="1" <?php if (get_option('subscriptions') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>

                                </td>
                            </tr>

                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_contracts"><?php echo __('Contracts');?>
 </label></td>
                                <td>

                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_contracts" class="on_change_feature" data-feature="contracts" value="1" <?php if (get_option('contracts') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>

                                </td>
                            </tr>


                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_suppliers"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Suppliers'];?>
 </label></td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_suppliers" <?php if (get_option('suppliers') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>

                                </td>
                            </tr>

                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_purchase"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Purchase'];?>
 </label></td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_purchase" <?php if (get_option('purchase') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_inventory"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Inventory'];?>
 </label></td>
                                <td>

                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_inventory" <?php if (get_option('inventory') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>





                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_sms"><?php echo $_smarty_tpl->tpl_vars['_L']->value['SMS'];?>
 </label></td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_sms" <?php if (get_option('sms') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>


                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_plugins"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Plugins'];?>
 </label></td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_plugins" <?php if (get_option('plugins') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_client_drive">Client Drive </label></td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_client_drive" <?php if (get_option('client_drive') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_allow_customer_registration"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Client Registration'];?>
 </label></td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_allow_customer_registration" <?php if (get_option('allow_customer_registration') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>
                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_allow_customer_registration"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Enable Language change on the client portal'];?>
 </label></td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_allow_customer_change_language" <?php if (get_option('allow_customer_change_language') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_recaptcha_in_client_login"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Enable Recaptcha in Client Login'];?>
</label></td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_recaptcha_in_client_login" <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['config_recaptcha_in_client_login'])) && $_smarty_tpl->tpl_vars['config']->value['config_recaptcha_in_client_login'] == 1) {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_recaptcha_in_admin_login"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Enable Recaptcha in Admin Login'];?>
 </label></td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_recaptcha_in_admin_login" <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['config_recaptcha_in_admin_login'])) && $_smarty_tpl->tpl_vars['config']->value['config_recaptcha_in_admin_login'] == 1) {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_customer_custom_username"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Username'];?>
 </label></td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_customer_custom_username" <?php if (get_option('customer_custom_username') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>


                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_contact_list_show_company_column"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer list show company'];?>
 </label></td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_contact_list_show_company_column" <?php if (get_option('contact_list_show_company_column') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_contact_list_show_group_column"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Customer list show group'];?>
 </label></td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_contact_list_show_group_column" <?php if (get_option('contact_list_show_group_column') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>


                            <tr>
                                <td width="80%"><label class="font-weight-bold" for="config_tickets_assigned_sms_notification"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Send sms notification to admin when ticket is assigned'];?>
 </label></td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_tickets_assigned_sms_notification" <?php if (get_option('tickets_assigned_sms_notification') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td width="80%">
                                    <label class="font-weight-bold" for="add_contact_remove_welcome_email"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Admin - Disable customer welcome email'];?>
 ?</label>

                                </td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="add_contact_remove_welcome_email" <?php if (get_option('add_contact_remove_welcome_email') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>

                            <tr>
                                <td width="80%">
                                    <label class="font-weight-bold" for="config_add_fund"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Fund'];?>
 </label> <br>
                                    <span><?php echo $_smarty_tpl->tpl_vars['_L']->value['Option to enabled Add Fund to Client'];?>
</span>
                                </td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_add_fund" <?php if (get_option('add_fund') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>

                            <?php if ($_smarty_tpl->tpl_vars['config']->value['add_fund'] == '1') {?>



                                <tr>
                                    <td width="80%">
                                        <label class="font-weight-bold" for="add_fund_minimum_deposit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Minimum Deposit'];?>
 </label> <br>
                                        <span><?php echo $_smarty_tpl->tpl_vars['_L']->value['Enter the minimum amount a client can add in a single transaction'];?>
</span>
                                    </td>
                                    <td> <div class="form-group">
                                            <label class="font-weight-bold" for="add_fund_minimum_deposit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</label>
                                            <input class="form-control" type="text" id="add_fund_minimum_deposit" name="add_fund_minimum_deposit" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['add_fund_minimum_deposit'];?>
">


                                        </div></td>
                                </tr>


                                <tr>
                                    <td width="80%">
                                        <label class="font-weight-bold" for="add_fund_maximum_deposit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Maximum Deposit'];?>
 </label> <br>
                                        <span><?php echo $_smarty_tpl->tpl_vars['_L']->value['Enter the maximum amount a client can add in a single transaction'];?>
</span>
                                    </td>
                                    <td> <div class="form-group">
                                            <label class="font-weight-bold" for="add_fund_maximum_deposit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Amount'];?>
</label>
                                            <input class="form-control" type="text" id="add_fund_maximum_deposit" name="add_fund_maximum_deposit" value="<?php echo $_smarty_tpl->tpl_vars['config']->value['add_fund_maximum_deposit'];?>
">


                                        </div></td>
                                </tr>

                                <tr>
                                    <td width="80%">
                                        <label class="font-weight-bold" for="config_add_fund_client"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Enable Add Fund Option from Client Portal'];?>
</label> <br>
                                        <span><?php echo $_smarty_tpl->tpl_vars['_L']->value['Adding of funds by clients from the client dashboard'];?>
</span>
                                    </td>
                                    <td>
                                        <label class="switch s-icons s-outline s-outline-primary">
                                            <input type="checkbox" id="config_add_fund_client" <?php if (get_option('add_fund_client') == '1') {?>checked<?php }?>>
                                            <span class="slider round"></span>
                                        </label>
                                    </td>
                                </tr>

                            <?php }?>

                            <tr>
                                <td width="80%">
                                    <label class="font-weight-bold" for="config_hide_expense_client"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Hide Expense from Client Portal'];?>
</label> <br>

                                </td>
                                <td>
                                    <label class="switch s-icons s-outline s-outline-primary">
                                        <input type="checkbox" id="config_hide_expense_client" <?php if (get_option('hide_expense_client') == '1') {?>checked<?php }?>>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                            </tr>


                                                                                                                
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
/* {block "script"} */
class Block_21247594666123c8a5139f12_83385706 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_21247594666123c8a5139f12_83385706',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

        $(function () {

                var _url = $("#_url").val();


            $('.on_change_feature').change(function() {

                $('#ui_settings').block({ message: null });

                let feature = $(this).data('feature');

                if($(this).prop('checked')){

                    $.post( _url+'settings/update_option/', { opt: feature, val: "1" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });

                }
                else{
                    $.post( _url+'settings/update_option/', { opt: feature, val: "0" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });
                }
            });

                $('#config_accounting').change(function() {

                    $('#ui_settings').block({ message: null });


                    if($(this).prop('checked')){

                        $.post( _url+'settings/update_option/', { opt: "accounting", val: "1" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });

                    }
                    else{
                        $.post( _url+'settings/update_option/', { opt: "accounting", val: "0" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });
                    }
                });

                $('#config_invoicing').change(function() {

                    $('#ui_settings').block({ message: null });


                    if($(this).prop('checked')){

                        $.post( _url+'settings/update_option/', { opt: "invoicing", val: "1" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });

                    }
                    else{
                        $.post( _url+'settings/update_option/', { opt: "invoicing", val: "0" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });
                    }
                });


                $('#config_kb').change(function() {

                    $('#ui_settings').block({ message: null });


                    if($(this).prop('checked')){

                        $.post( _url+'settings/update_option/', { opt: "kb", val: "1" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });

                    }
                    else{
                        $.post( _url+'settings/update_option/', { opt: "kb", val: "0" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });
                    }
                });

                $('#config_quotes').change(function() {

                    $('#ui_settings').block({ message: null });


                    if($(this).prop('checked')){

                        $.post( _url+'settings/update_option/', { opt: "quotes", val: "1" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });

                    }
                    else{
                        $.post( _url+'settings/update_option/', { opt: "quotes", val: "0" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });
                    }
                });


                $('#config_orders').change(function() {

                    $('#ui_settings').block({ message: null });


                    if($(this).prop('checked')){

                        $.post( _url+'settings/update_option/', { opt: "orders", val: "1" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });

                    }
                    else{
                        $.post( _url+'settings/update_option/', { opt: "orders", val: "0" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });
                    }
                });


                $('#config_documents').change(function() {

                    $('#ui_settings').block({ message: null });


                    if($(this).prop('checked')){

                        $.post( _url+'settings/update_option/', { opt: "documents", val: "1" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });

                    }
                    else{
                        $.post( _url+'settings/update_option/', { opt: "documents", val: "0" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });
                    }
                });


                $('#config_inventory').change(function() {

                    $('#ui_settings').block({ message: null });


                    if($(this).prop('checked')){

                        $.post( _url+'settings/update_option/', { opt: "inventory", val: "1" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });

                    }
                    else{
                        $.post( _url+'settings/update_option/', { opt: "inventory", val: "0" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });
                    }
                });


            $('#add_contact_remove_welcome_email').change(function() {

                $('#ui_settings').block({ message: null });


                if($(this).prop('checked')){

                    $.post( _url+'settings/update_option/', { opt: "add_contact_remove_welcome_email", val: "1" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });

                }
                else{
                    $.post( _url+'settings/update_option/', { opt: "add_contact_remove_welcome_email", val: "0" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });
                }
            });



                $('#config_leads').change(function() {

                    $('#ui_settings').block({ message: null });


                    if($(this).prop('checked')){

                        $.post( _url+'settings/update_option/', { opt: "leads", val: "1" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });

                    }
                    else{
                        $.post( _url+'settings/update_option/', { opt: "leads", val: "0" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });
                    }
                });


                $('#config_suppliers').change(function() {

                    $('#ui_settings').block({ message: null });


                    if($(this).prop('checked')){

                        $.post( _url+'settings/update_option/', { opt: "suppliers", val: "1" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });

                    }
                    else{
                        $.post( _url+'settings/update_option/', { opt: "suppliers", val: "0" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });
                    }
                });


                $('#config_support').change(function() {

                    $('#ui_settings').block({ message: null });


                    if($(this).prop('checked')){

                        $.post( _url+'settings/update_option/', { opt: "support", val: "1" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });

                    }
                    else{
                        $.post( _url+'settings/update_option/', { opt: "support", val: "0" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });
                    }
                });


                $('#config_purchase').change(function() {

                    $('#ui_settings').block({ message: null });


                    if($(this).prop('checked')){

                        $.post( _url+'settings/update_option/', { opt: "purchase", val: "1" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });

                    }
                    else{
                        $.post( _url+'settings/update_option/', { opt: "purchase", val: "0" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });
                    }
                });


                $('#config_tasks').change(function() {

                    $('#ui_settings').block({ message: null });


                    if($(this).prop('checked')){

                        $.post( _url+'settings/update_option/', { opt: "tasks", val: "1" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });

                    }
                    else{
                        $.post( _url+'settings/update_option/', { opt: "tasks", val: "0" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });
                    }
                });


                $('#config_calendar').change(function() {

                    $('#ui_settings').block({ message: null });


                    if($(this).prop('checked')){

                        $.post( _url+'settings/update_option/', { opt: "calendar", val: "1" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });

                    }
                    else{
                        $.post( _url+'settings/update_option/', { opt: "calendar", val: "0" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });
                    }
                });


                $('#config_hrm').change(function() {

                    $('#ui_settings').block({ message: null });


                    if($(this).prop('checked')){

                        $.post( _url+'settings/update_option/', { opt: "hrm", val: "1" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });

                    }
                    else{
                        $.post( _url+'settings/update_option/', { opt: "hrm", val: "0" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });
                    }
                });


                $('#config_companies').change(function() {

                    $('#ui_settings').block({ message: null });


                    if($(this).prop('checked')){

                        $.post( _url+'settings/update_option/', { opt: "companies", val: "1" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });

                    }
                    else{
                        $.post( _url+'settings/update_option/', { opt: "companies", val: "0" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });
                    }
                });


                $('#config_plugins').change(function() {

                    $('#ui_settings').block({ message: null });


                    if($(this).prop('checked')){

                        $.post( _url+'settings/update_option/', { opt: "plugins", val: "1" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });

                    }
                    else{
                        $.post( _url+'settings/update_option/', { opt: "plugins", val: "0" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });
                    }
                });

            $('#config_pos').change(function() {

                $('#ui_settings').block({ message: null });


                if($(this).prop('checked')){

                    $.post( _url+'settings/update_option/', { opt: "pos", val: "1" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });

                }
                else{
                    $.post( _url+'settings/update_option/', { opt: "pos", val: "0" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });
                }
            });

                $('#config_customer_custom_username').change(function() {

                    $('#ui_settings').block({ message: null });


                    if($(this).prop('checked')){

                        $.post( _url+'settings/update_option/', { opt: "customer_custom_username", val: "1" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });

                    }
                    else{
                        $.post( _url+'settings/update_option/', { opt: "customer_custom_username", val: "0" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });
                    }
                });


                $('#config_projects').change(function() {

                    $('#ui_settings').block({ message: null });


                    if($(this).prop('checked')){

                        $.post( _url+'settings/update_option/', { opt: "projects", val: "1" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });

                    }
                    else{
                        $.post( _url+'settings/update_option/', { opt: "projects", val: "0" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });
                    }
                });


                $('#config_add_fund').change(function() {

                    $('#ui_settings').block({ message: null });


                    if($(this).prop('checked')){

                        $.post( _url+'settings/update_option/', { opt: "add_fund", val: "1" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });

                    }
                    else{
                        $.post( _url+'settings/update_option/', { opt: "add_fund", val: "0" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });
                    }
                });


                $('#config_invoice_receipt_number').change(function() {

                    $('#ui_settings').block({ message: null });


                    if($(this).prop('checked')){

                        $.post( _url+'settings/update_option/', { opt: "invoice_receipt_number", val: "1" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });

                    }
                    else{
                        $.post( _url+'settings/update_option/', { opt: "invoice_receipt_number", val: "0" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });
                    }
                });


                $("#add_fund_minimum_deposit").on("blur",function(e){
                    $('#ui_settings').block({ message: null });
                    $.post(base_url + 'settings/update_option/',{ opt: "add_fund_minimum_deposit", val: $("#add_fund_minimum_deposit").val() },function (data) {
                        if ($.isNumeric(data)) {
                            $('#ui_settings').unblock();
                            toastr.success(_L['Saved Successfully']);

                        }

                        else {
                            $('#ui_settings').unblock();
                            toastr.error(data);
                        }
                    })
                });

                $("#add_fund_maximum_deposit").on("blur",function(e){
                    $('#ui_settings').block({ message: null });
                    $.post(base_url + 'settings/update_option/',{ opt: "add_fund_maximum_deposit", val: $("#add_fund_maximum_deposit").val() },function (data) {
                        if ($.isNumeric(data)) {
                            $('#ui_settings').unblock();
                            toastr.success(_L['Saved Successfully']);

                        }

                        else {
                            $('#ui_settings').unblock();
                            toastr.error(data);
                        }
                    })
                });


                $("#config_order_method").on("change",function(e){
                    $('#ui_settings').block({ message: null });
                    $.post(base_url + 'settings/update_option/',{ opt: "order_method", val: $("#config_order_method").val() },function (data) {
                        if (data === 'ok') {
                            $('#ui_settings').unblock();
                            toastr.success(_L['Saved Successfully']);

                        }

                        else {
                            $('#ui_settings').unblock();
                            toastr.error(data);
                        }
                    })
                });


                $('#config_add_fund_client').change(function() {

                    $('#ui_settings').block({ message: null });


                    if($(this).prop('checked')){

                        $.post( _url+'settings/update_option/', { opt: "add_fund_client", val: "1" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });

                    }
                    else{
                        $.post( _url+'settings/update_option/', { opt: "add_fund_client", val: "0" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });
                    }
                });


                $('#config_allow_customer_registration').change(function() {

                    $('#ui_settings').block({ message: null });


                    if($(this).prop('checked')){

                        $.post( _url+'settings/update_option/', { opt: "allow_customer_registration", val: "1" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });

                    }
                    else{
                        $.post( _url+'settings/update_option/', { opt: "allow_customer_registration", val: "0" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });
                    }
                });
            $('#config_allow_customer_change_language').change(function() {

                $('#ui_settings').block({ message: null });


                if($(this).prop('checked')){

                    $.post( _url+'settings/update_option/', { opt: "allow_customer_change_language", val: "1" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });

                }
                else{
                    $.post( _url+'settings/update_option/', { opt: "allow_customer_change_language", val: "0" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });
                }
            });


            $('#config_client_drive').change(function() {

                    $('#ui_settings').block({ message: null });


                    if($(this).prop('checked')){

                        $.post( _url+'settings/update_option/', { opt: "client_drive", val: "1" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });

                    }
                    else{
                        $.post( _url+'settings/update_option/', { opt: "client_drive", val: "0" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });
                    }
                });

            $('#config_automatic_payment_reminder').change(function() {

                $('#ui_settings').block({ message: null });


                if($(this).prop('checked')){

                    $.post( _url+'settings/update_option/', { opt: "automatic_payment_reminder", val: "1" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });

                }
                else{
                    $.post( _url+'settings/update_option/', { opt: "automatic_payment_reminder", val: "0" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });
                }
            });


                $('#config_show_business_number').change(function() {

                    $('#ui_settings').block({ message: null });


                    if($(this).prop('checked')){

                        $.post( _url+'settings/update_option/', { opt: "show_business_number", val: "1" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });

                    }
                    else{
                        $.post( _url+'settings/update_option/', { opt: "show_business_number", val: "0" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });
                    }
                });


                $("#label_business_number").on("blur",function(e){
                    $('#ui_settings').block({ message: null });
                    $.post(base_url + 'settings/update_option/',{ opt: "label_business_number", val: $("#label_business_number").val() },function (data) {
                        toastr.success(_L['Saved Successfully']);
                        $('#ui_settings').unblock();
                    })
                });


                $('#config_fax_field').change(function() {

                    $('#ui_settings').block({ message: null });


                    if($(this).prop('checked')){

                        $.post( _url+'settings/update_option/', { opt: "fax_field", val: "1" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });

                    }
                    else{
                        $.post( _url+'settings/update_option/', { opt: "fax_field", val: "0" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });
                    }
                });


                $('#config_sms').change(function() {

                    $('#ui_settings').block({ message: null });


                    if($(this).prop('checked')){

                        $.post( _url+'settings/update_option/', { opt: "sms", val: "1" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });

                    }
                    else{
                        $.post( _url+'settings/update_option/', { opt: "sms", val: "0" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });
                    }
                });


                $('#config_recaptcha_in_client_login').change(function() {

                    $('#ui_settings').block({ message: null });


                    if($(this).prop('checked')){

                        $.post( _url+'settings/update_option/', { opt: "config_recaptcha_in_client_login", val: "1" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });

                    }
                    else{
                        $.post( _url+'settings/update_option/', { opt: "config_recaptcha_in_client_login", val: "0" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });
                    }
                });


                $('#config_recaptcha_in_admin_login').change(function() {

                    $('#ui_settings').block({ message: null });


                    if($(this).prop('checked')){

                        $.post( _url+'settings/update_option/', { opt: "config_recaptcha_in_admin_login", val: "1" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });

                    }
                    else{
                        $.post( _url+'settings/update_option/', { opt: "config_recaptcha_in_admin_login", val: "0" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });
                    }
                });


                $('#config_contact_list_show_company_column').change(function() {

                    $('#ui_settings').block({ message: null });


                    if($(this).prop('checked')){

                        $.post( _url+'settings/update_option/', { opt: "contact_list_show_company_column", val: "1" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });

                    }
                    else{
                        $.post( _url+'settings/update_option/', { opt: "contact_list_show_company_column", val: "0" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });
                    }
                });


                $('#config_contact_list_show_group_column').change(function() {

                    $('#ui_settings').block({ message: null });


                    if($(this).prop('checked')){

                        $.post( _url+'settings/update_option/', { opt: "contact_list_show_group_column", val: "1" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });

                    }
                    else{
                        $.post( _url+'settings/update_option/', { opt: "contact_list_show_group_column", val: "0" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });
                    }
                });


                $('#config_tickets_assigned_sms_notification').change(function() {

                    $('#ui_settings').block({ message: null });


                    if($(this).prop('checked')){

                        $.post( _url+'settings/update_option/', { opt: "tickets_assigned_sms_notification", val: "1" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });

                    }
                    else{
                        $.post( _url+'settings/update_option/', { opt: "tickets_assigned_sms_notification", val: "0" })
                            .done(function( data ) {
                                $('#ui_settings').unblock();
                                location.reload();
                            });
                    }
                });


            $('#config_delivery_challans').change(function() {

                $('#ui_settings').block({ message: null });


                if($(this).prop('checked')){

                    $.post( _url+'settings/update_option/', { opt: "delivery_challans", val: "1" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });

                }
                else{
                    $.post( _url+'settings/update_option/', { opt: "delivery_challans", val: "0" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });
                }
            });


            $('#config_hide_expense_client').change(function() {

                $('#ui_settings').block({ message: null });


                if($(this).prop('checked')){

                    $.post( base_url+'settings/update_option/', { opt: "hide_expense_client", val: "1" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });

                }
                else{
                    $.post( base_url+'settings/update_option/', { opt: "hide_expense_client", val: "0" })
                        .done(function( data ) {
                            $('#ui_settings').unblock();
                            location.reload();
                        });
                }
            });




        })

    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
