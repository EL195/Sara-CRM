<?php
/* Smarty version 3.1.39, created on 2021-03-12 12:11:58
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/pg-conf.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604ba0dec5db58_17119777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0999d2214eea6d2e8e3d3aa84835caa932ac95a' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/pg-conf.tpl',
      1 => 1593549340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604ba0dec5db58_17119777 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_496696768604ba0dec37c67_84552302', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_947115388604ba0dec5cd25_55982690', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "content"} */
class Block_496696768604ba0dec37c67_84552302 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_496696768604ba0dec37c67_84552302',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-<?php if ($_smarty_tpl->tpl_vars['extra_panel']->value == '') {?>12<?php } else { ?>6<?php }?>">
            <div class="panel">
                <div class="panel-hdr">
                    <h2><?php echo $_smarty_tpl->tpl_vars['d']->value['name'];?>
</h2>

                </div>
                <div class="panel-container" id="ibox_form">
                    <div class="panel-content">
                        <div class="alert alert-danger" id="emsg">
                            <span id="emsgbody"></span>
                        </div>
                        <form class="form-horizontal" method="post" id="pg-conf" role="form">

                            <?php if (((isset($_smarty_tpl->tpl_vars['icon_url']->value))) && ($_smarty_tpl->tpl_vars['icon_url']->value) != '') {?>
                                <div class="form-group">
                                    <label for="name" class="col-sm-3 control-label">&nbsp;</label>
                                    <div class="col-sm-9">
                                        <img style="max-height: 64px;" src="<?php echo $_smarty_tpl->tpl_vars['icon_url']->value;?>
">
                                    </div>
                                </div>
                            <?php }?>


                            <div class="form-group">
                                <label for="name"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Name'];?>
</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['name'];?>
">
                            </div>

                                                                                                                                                                        
                            <div class="form-group">
                                <label for="value"><?php echo $_smarty_tpl->tpl_vars['label']->value['value'];?>
</label>
                                <?php echo $_smarty_tpl->tpl_vars['input']->value['value'];?>

                                <?php if (($_smarty_tpl->tpl_vars['help_txt']->value['value']) != '') {?>
                                    <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['help_txt']->value['value'];?>
</span>
                                <?php }?>
                            </div>





                            <?php if (((isset($_smarty_tpl->tpl_vars['label']->value['c1']))) && ($_smarty_tpl->tpl_vars['label']->value['c1']) != '') {?>
                                <div class="form-group">
                                    <label for="c1"><?php echo $_smarty_tpl->tpl_vars['label']->value['c1'];?>
</label>
                                    <?php echo $_smarty_tpl->tpl_vars['input']->value['c1'];?>

                                    <?php if (($_smarty_tpl->tpl_vars['help_txt']->value['c1']) != '') {?>
                                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['help_txt']->value['c1'];?>
</span>
                                    <?php }?>
                                </div>
                            <?php }?>

                            <?php if (((isset($_smarty_tpl->tpl_vars['label']->value['c2']))) && ($_smarty_tpl->tpl_vars['label']->value['c2']) != '') {?>

                                <div class="form-group">
                                    <label for="c2"><?php echo $_smarty_tpl->tpl_vars['label']->value['c2'];?>
</label>
                                    <?php echo $_smarty_tpl->tpl_vars['input']->value['c2'];?>

                                    <?php if (($_smarty_tpl->tpl_vars['help_txt']->value['c2']) != '') {?>
                                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['help_txt']->value['c2'];?>
</span>
                                    <?php }?>
                                </div>

                            <?php }?>


                            <?php if (((isset($_smarty_tpl->tpl_vars['label']->value['c3']))) && ($_smarty_tpl->tpl_vars['label']->value['c3']) != '') {?>

                                <div class="form-group">
                                    <label for="c3"><?php echo $_smarty_tpl->tpl_vars['label']->value['c3'];?>
</label>
                                    <?php echo $_smarty_tpl->tpl_vars['input']->value['c3'];?>

                                    <?php if (($_smarty_tpl->tpl_vars['help_txt']->value['c3']) != '') {?>
                                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['help_txt']->value['c3'];?>
</span>
                                    <?php }?>
                                </div>

                            <?php }?>



                            <?php if (((isset($_smarty_tpl->tpl_vars['label']->value['c4']))) && ($_smarty_tpl->tpl_vars['label']->value['c4']) != '') {?>

                                <div class="form-group">
                                    <label for="c4"><?php echo $_smarty_tpl->tpl_vars['label']->value['c4'];?>
</label>
                                    <?php echo $_smarty_tpl->tpl_vars['input']->value['c4'];?>

                                    <?php if (($_smarty_tpl->tpl_vars['help_txt']->value['c4']) != '') {?>
                                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['help_txt']->value['c4'];?>
</span>
                                    <?php }?>
                                </div>

                            <?php }?>



                            <?php if (((isset($_smarty_tpl->tpl_vars['label']->value['c5']))) && ($_smarty_tpl->tpl_vars['label']->value['c5']) != '') {?>
                                <div class="form-group">
                                    <label for="c5" ><?php echo $_smarty_tpl->tpl_vars['label']->value['c5'];?>
</label>
                                    <?php echo $_smarty_tpl->tpl_vars['input']->value['c5'];?>

                                    <?php if (($_smarty_tpl->tpl_vars['help_txt']->value['c5']) != '') {?>
                                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['help_txt']->value['c5'];?>
</span>
                                    <?php }?>
                                </div>
                            <?php }?>


                            <div class="form-group">
                                <label for="status" ><?php echo $_smarty_tpl->tpl_vars['_L']->value['Status'];?>
</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="Active" <?php if ($_smarty_tpl->tpl_vars['d']->value['status'] == 'Active') {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Active'];?>
</option>
                                    <option value="Inactive" <?php if ($_smarty_tpl->tpl_vars['d']->value['status'] == 'Inactive') {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Inactive'];?>
</option>

                                </select>


                            </div>


                            <?php if (((isset($_smarty_tpl->tpl_vars['label']->value['mode']))) && ($_smarty_tpl->tpl_vars['label']->value['mode'])) {?>

                                <div class="form-group">
                                    <label for="mode"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Mode'];?>
</label>
                                    <select name="mode" id="mode" class="form-control">
                                        <option value="Live" <?php if ($_smarty_tpl->tpl_vars['d']->value['mode'] == 'Live') {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Live'];?>
</option>
                                        <option value="Sandbox" <?php if ($_smarty_tpl->tpl_vars['d']->value['mode'] == 'Sandbox') {?>selected="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['_L']->value['Sandbox'];?>
</option>

                                    </select>

                                    <?php if (($_smarty_tpl->tpl_vars['help_txt']->value['mode']) != '') {?>
                                        <span class="help-block"><?php echo $_smarty_tpl->tpl_vars['help_txt']->value['mode'];?>
</span>
                                    <?php }?>
                                </div>

                            <?php }?>



                            <div class="form-group">
                                <div>
                                    <input type="hidden" name="pgid" id="pgid" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
                                    <button type="submit" id="submit" class="btn btn-primary"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Submit'];?>
</button>
                                    | <?php echo $_smarty_tpl->tpl_vars['_L']->value['Or'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/pg/"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Back To The List'];?>
</a>
                                </div>
                            </div>
                        </form>
                    </div>



                </div>
            </div>

        </div>


        <?php if ($_smarty_tpl->tpl_vars['extra_panel']->value != '') {?>
            <div class="col-md-6">
                <?php echo $_smarty_tpl->tpl_vars['extra_panel']->value;?>

            </div>
        <?php }?>

    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_947115388604ba0dec5cd25_55982690 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_947115388604ba0dec5cd25_55982690',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        
        $(document).ready(function () {

            $("#emsg").hide();
            $("#submit").click(function (e) {
                e.preventDefault();
                $('#ibox_form').block({ message: null });
                var _url = $("#_url").val();
                $.post(_url + 'settings/pg-post/', {


                    name: $('#name').val(),
                    settings: $('#settings').val(),
                    pgid: $('#pgid').val(),
                    value: $('#value').val(),
                    status: $('#status').val(),
                    c1: $('#c1').val(),
                    c2: $('#c2').val(),
                    c3: $('#c3').val(),
                    c4: $('#c4').val(),
                    c5: $('#c5').val(),
                    mode: $('#mode').val()
                })
                    .done(function (data) {

                        setTimeout(function () {
                            var sbutton = $("#submit");
                            var _url = $("#_url").val();
                            if ($.isNumeric(data)) {

                                location.reload();
                            }
                            else {
                                $('#ibox_form').unblock();
                                var body = $("html, body");
                                body.animate({scrollTop:0}, '1000', 'swing');
                                $("#emsgbody").html(data);
                                $("#emsg").show("slow");
                            }
                        }, 2000);
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
