<?php
/* Smarty version 3.1.39, created on 2021-03-05 16:56:32
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/calendar_event.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6042a91060b0f9_09719018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1739d055a92ff030e35b0a8e76dc1d429134a1e3' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/calendar_event.tpl',
      1 => 1601485802,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6042a91060b0f9_09719018 (Smarty_Internal_Template $_smarty_tpl) {
?><div style="max-width: 800px;" class="mx-auto">
    <div class="panel mb-0 rounder-0">
        <div class="panel-hdr">
            <h2><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add Event'];?>
</h2>
        </div>
        <div class="panel-container">
            <div class="panel-content">

                <form method="post" id="eventForm">

                    <div class="form-group">
                        <label for="title"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Event Name'];?>
</label>
                        <input type="text" class="form-control" id="title" name="title" <?php if ($_smarty_tpl->tpl_vars['event']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['event']->value->title;?>
" <?php }?> required>
                    </div>



                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="start"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Start Date'];?>
</label>
                            <input type="text" class="form-control" data-date-format="yyyy-mm-dd" data-auto-close="true" id="start" placeholder="Select Date" name="start" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
">
                        </div>

                        <div class="form-group col-md-6" id="start_time_div">
                            <label for="start_time"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Start Time'];?>
</label>
                            <input type="text" id="start_time" name="start_time" class="form-control"  <?php if ($_smarty_tpl->tpl_vars['event']->value && $_smarty_tpl->tpl_vars['event']->value->start) {?>value="<?php echo date('h:ia',strtotime($_smarty_tpl->tpl_vars['event']->value->start));?>
" <?php } else { ?> value="9:30am" <?php }?>>
                        </div>
                    </div>



                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="end"><?php echo $_smarty_tpl->tpl_vars['_L']->value['End Date'];?>
</label>
                            <input type="text" class="form-control" <?php if ($_smarty_tpl->tpl_vars['event']->value && $_smarty_tpl->tpl_vars['event']->value->end) {?>value="<?php echo date('Y-m-d',strtotime($_smarty_tpl->tpl_vars['event']->value->end));?>
" <?php }?> datepicker data-date-format="yyyy-mm-dd" data-auto-close="true" id="end" name="end">
                        </div>

                        <div class="form-group col-md-6" id="end_time_div">
                            <label for="end_time"><?php echo $_smarty_tpl->tpl_vars['_L']->value['End Time'];?>
</label>
                            <input type="text" class="form-control" id="end_time" <?php if ($_smarty_tpl->tpl_vars['event']->value && $_smarty_tpl->tpl_vars['event']->value->end) {?>value="<?php echo date('h:ia',strtotime($_smarty_tpl->tpl_vars['event']->value->end));?>
" <?php } else { ?> value="11:30am" <?php }?> name="end_time">
                        </div>
                    </div>



                    <div class="form-group">

                        <input class="custom-checkbox" type="checkbox" name="all_day_event" value="yes" id="all_day_event">
                        <label for="all_day_event"><?php echo $_smarty_tpl->tpl_vars['_L']->value['All day event'];?>
</label>


                    </div>


                    <div class="form-group">
                        <label for="color"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Color'];?>
</label>
                        <input type="color" class="form-control color" id="color" name="color" value="#008060" style="max-width: 100px;">
                    </div>


                    <div class="form-group">
                        <label for="description"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Description'];?>
</label>
                        <textarea id="description" name="description" class="form-control" rows="5"></textarea>
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['event']->value) {?>
                        <input type="hidden" id="event_id" name="event_id" value="<?php echo $_smarty_tpl->tpl_vars['event']->value->id;?>
">
                    <?php }?>



                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" id="btnSubmit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Save'];?>
</button>
                        <?php if ($_smarty_tpl->tpl_vars['event']->value) {?>
                            <a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
calendar/delete-event/<?php echo $_smarty_tpl->tpl_vars['event']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Delete'];?>
</a>
                        <?php }?>
                    </div>



                </form>

            </div>
        </div>
    </div>
</div>


<?php }
}
