<?php
/* Smarty version 3.1.39, created on 2021-11-21 14:00:09
  from '/Users/pondo2/Sites/sara_suite/ui/theme/default/email-templates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619a97392dfcc6_53717672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e296acb1182534731b1a7517c27faff23adca45c' => 
    array (
      0 => '/Users/pondo2/Sites/sara_suite/ui/theme/default/email-templates.tpl',
      1 => 1633628023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619a97392dfcc6_53717672 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96286866619a97392ce533_29398079', "head");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1108621856619a97392d01d1_18061373', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_812394180619a97392dcba8_10136057', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_96286866619a97392ce533_29398079 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_96286866619a97392ce533_29398079',
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
class Block_1108621856619a97392d01d1_18061373 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1108621856619a97392d01d1_18061373',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-hdr">
                    <h2>
                        <?php echo $_smarty_tpl->tpl_vars['_L']->value['Email Templates'];?>

                    </h2>

                    <div class="panel-toolbar">
                        <a href="#" id="add_new_template" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add New Template'];?>
</a>
                    </div>




                </div>

                <div class="panel-container">
                    <div class="panel-content">

                        <div class="mail-box" id="application_ajaxrender">

                            <table class="table table-hover table-striped" id="tbl_email_templates">
                                <thead>
                                <tr class="heading">
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Subject'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</th>
                                    <th class="text-right" style="width: 80px;"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Manage'];?>
</th>
                                </tr>


                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['d']->value, 'ds');
$_smarty_tpl->tpl_vars['ds']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ds']->value) {
$_smarty_tpl->tpl_vars['ds']->do_else = false;
?>
                                    <tr class="read">

                                        <td><a  class="ve h6" id="f<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" href="#"><?php echo ib_lan_get_line($_smarty_tpl->tpl_vars['ds']->value['tplname']);?>
</a>  </td>
                                        <td><a  class="ve h6 text-info" id="s<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" href="#"><?php echo $_smarty_tpl->tpl_vars['ds']->value['subject'];?>
</a></td>
                                        <td class="text-right">
                                            <?php if ($_smarty_tpl->tpl_vars['ds']->value['send'] == 'Yes') {?>
                                                <span class="badge badge-success"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Active'];?>
 </span>
                                            <?php } else { ?>
                                                <span class="badge badge-danger"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Inactive'];?>
 </span>
                                            <?php }?>
                                            &nbsp;
                                            <?php if ($_smarty_tpl->tpl_vars['ds']->value['core'] == 'Yes') {?>
                                                <span class="badge badge-warning"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['System'];?>
 </span>
                                            <?php } else { ?>
                                                <span class="badge badge-info"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Custom'];?>
 </span>
                                            <?php }?>

                                        </td>

                                        <td class="text-right">

                                            <div class="btn-group">
                                                <a href="javascript:void(0)" class="btn btn-primary btn-sm ve" id="b<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['View'];?>
"><i class="fal fa-file-alt"></i></a>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/clone_email_template/<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
/" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Clone'];?>
"><i class="fal fa-file-edit"></i></a>


                                                <?php if ($_smarty_tpl->tpl_vars['ds']->value['core'] != 'Yes') {?>
                                                    <a href="javascript:void(0)" class="btn btn-danger btn-sm cdelete" id="ed<?php echo $_smarty_tpl->tpl_vars['ds']->value['id'];?>
" data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
"><i class="fal fa-trash-alt"></i></a>
                                                <?php }?>

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
        </div>



    </div>



<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_812394180619a97392dcba8_10136057 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_812394180619a97392dcba8_10136057',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {

            $('#tbl_email_templates').dataTable(
                {
                    responsive: true,
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

            var $modal = $('#cloudonex_body');
            var sysrender = $modal;

            var _url = base_url;

            var page_refresh = false;



            sysrender.on('click', '.ve', function(e){
                e.preventDefault();
                var vid = this.id;
                var id = vid.replace("f", "");
                id = id.replace("s", "");
                id = id.replace("b", "");



                $.fancybox.open({
                    src  : base_url + 'settings/email-templates-view/' + id,
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').redactor();
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    }
                });

            });


            $modal.on('click', '#update', function(){

                page_refresh = true;

                $.post(base_url + 'settings/update-email-template', {


                    message: $('#message').val(),
                    subject: $('#subject').val(),
                    tplname: $('#tplname').val(),

                    id: $('#sid').val(),
                    send: $('#send').val()

                }).done(function (data) {
                    location.reload();
                });

            });



            $(".cdelete").click(function (e) {
                e.preventDefault();
                var id = this.id;
                bootbox.confirm(_L['are_you_sure'], function(result) {
                    if(result){
                        window.location.href = base_url + "delete/email-templates/" + id + '/';
                    }
                });
            });


            $("#add_new_template").on('click', function(e) {
                e.preventDefault();

                $.fancybox.open({
                    src  : base_url + 'settings/email-templates-view/',
                    type : 'ajax',
                    opts : {
                        afterShow : function( instance, current ) {
                            $('#message').redactor();
                        },
                        touch: false,
                        autoFocus: false,
                        keyboard: false,
                    }
                });

            });

        })
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
