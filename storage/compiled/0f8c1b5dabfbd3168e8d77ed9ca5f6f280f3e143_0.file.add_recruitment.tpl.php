<?php
/* Smarty version 3.1.39, created on 2021-06-29 08:38:59
  from '/Users/razib/Documents/valet/business-suite/apps/a-hrm/views/add_recruitment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60db14635f0001_86169097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f8c1b5dabfbd3168e8d77ed9ca5f6f280f3e143' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/a-hrm/views/add_recruitment.tpl',
      1 => 1612523899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60db14635f0001_86169097 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167845095760db14635e6757_10477189', "head");
?>





<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83793549660db14635e8ca5_60730649', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69645112760db14635ef719_55057539', "script");
?>



<?php }
/* {block "head"} */
class Block_167845095760db14635e6757_10477189 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_167845095760db14635e6757_10477189',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <style>
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #F7F9FC;

        }
        .h2, h2 {
            font-size: 1.25rem;
        }
        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, {
            font-family: inherit;
            font-weight: 600;
            line-height: 1.5;
            margin-bottom: .5rem;
            color: #32325d!important;
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
class Block_83793549660db14635e8ca5_60730649 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_83793549660db14635e8ca5_60730649',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="row mb-3">



        <div class="col-md-12">



            <div class="card">
                <div class="card-body">

                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
a-hrm/app/recruitment" class="btn btn-primary add_event waves-effect waves-light">Job list</a>


                </div>

            </div>
        </div>



    </div>



    <div class="row">



        <div class="col-md-12">



            <div class="card">

                <div class="card-body">

                    <h3>Add Job</h3>

                    <hr>

                    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
a-hrm/app/add-recruitment-save">

                        <?php if ($_smarty_tpl->tpl_vars['selected_recruitment']->value) {?>
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['selected_recruitment']->value->id;?>
">
                        <?php }?>


                        <div class="form-group">
                            <label for="title"><span class="h6">Title</span></label>
                            <input class="form-control" name="title" id="title"
                                    <?php if ($_smarty_tpl->tpl_vars['selected_recruitment']->value) {?>
                                        value="<?php echo $_smarty_tpl->tpl_vars['selected_recruitment']->value->title;?>
"
                                    <?php }?>>
                        </div>


                        <div class="form-group">
                            <label for="publish_date"><span class="h6">Publish Date</span></label>
                            <input class="form-control" name="publish_date"
                                    <?php if ($_smarty_tpl->tpl_vars['selected_recruitment']->value) {?>
                                        value="<?php echo $_smarty_tpl->tpl_vars['selected_recruitment']->value->publish_date;?>
"
                                    <?php } else { ?>
                                        value="<?php echo date('Y-m-d');?>
"
                                    <?php }?>
                                   value="<?php echo date('Y-m-d');?>
"  id="start_time" data-date-format="yyyy-mm-dd" data-auto-close="true">
                        </div>
                        <div class="form-group">
                            <label for="end_date"><span class="h6">End Date</span></label>
                            <input class="form-control" name="end_date"
                                    <?php if ($_smarty_tpl->tpl_vars['selected_recruitment']->value) {?>
                                        value="<?php echo $_smarty_tpl->tpl_vars['selected_recruitment']->value->end_date;?>
"
                                    <?php } else { ?>
                                        value="<?php echo date('Y-m-d');?>
"
                                    <?php }?>
                                   value="<?php echo date('Y-m-d');?>
"  id="end_date" data-date-format="yyyy-mm-dd" data-auto-close="true">
                        </div>
                        <div class="form-group">
                            <label for="contents"><span class="h6">Description</span></label>
                            <textarea  class="form-control"  rows="4" id="contents" name="description"><?php if ($_smarty_tpl->tpl_vars['selected_recruitment']->value) {
echo $_smarty_tpl->tpl_vars['selected_recruitment']->value->description;
}?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="Related"><span class="h5"><span class="h6">Status</span></span></label>
                            <select name="status" id="related"  class="form-control">

                                <option value="0">None</option>

                                <option value="1">Draft</option>
                                <option value="2">Published</option>




                            </select>


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
/* {block "script"} */
class Block_69645112760db14635ef719_55057539 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_69645112760db14635ef719_55057539',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/flatpickr"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(function () {
            let $start_time = $("#start_time");
            $start_time.flatpickr({

                enableTime: true,
                dateFormat: "Y-m-d H:i",
            });
            let $end_date = $("#end_date");
            $end_date.flatpickr({

                enableTime: true,
                dateFormat: "Y-m-d H:i",
            });

            $("#event-type").select2();
            $("#owner").select2();
            $("#related").select2();
            $("#trainer").select2();
        });

        $('#contents').redactor(
            {
                minHeight: 200, // pixels
                plugins: ['fontcolor']
            }
        );
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
