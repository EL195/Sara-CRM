<?php
/* Smarty version 3.1.39, created on 2021-04-30 18:39:49
  from '/Users/razib/Documents/valet/business-suite/apps/notes/views/add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_608c8735c74530_38854235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e922f450a8e930d63fbfe7a75ec2036784c792f' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/notes/views/add.tpl',
      1 => 1607564673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608c8735c74530_38854235 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36547638608c8735c72c05_16982081', "content");
?>

<?php }
/* {block "content"} */
class Block_36547638608c8735c72c05_16982081 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_36547638608c8735c72c05_16982081',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row">



        <div class="col-md-12">



            <div class="card">

                <div class="card-body">

                    <h3>Add Note</h3>

                    <hr>

                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
notes/app/save">

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input class="form-control" name="title" id="title">
                        </div>

                        <div class="form-group">
                            <label for="contents">Contents</label>
                            <textarea class="form-control" rows="10" id="contents" name="contents"></textarea>
                        </div>

                        <button class="btn btn-primary" type="submit">Save</button>

                    </form>


                </div>
            </div>
        </div>



    </div>



<?php
}
}
/* {/block "content"} */
}
