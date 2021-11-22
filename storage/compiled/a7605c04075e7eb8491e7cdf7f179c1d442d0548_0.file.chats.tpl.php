<?php
/* Smarty version 3.1.39, created on 2021-11-21 13:43:38
  from '/Users/pondo2/Sites/sara_suite/apps/chat/views/chats.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619a935a2a5e03_19768007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7605c04075e7eb8491e7cdf7f179c1d442d0548' => 
    array (
      0 => '/Users/pondo2/Sites/sara_suite/apps/chat/views/chats.tpl',
      1 => 1637520125,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619a935a2a5e03_19768007 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2015046109619a935a289577_11451691', "head");
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1466590639619a935a28b744_59440441', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_625556096619a935a2a3f17_83056708', "script");
}
/* {block "head"} */
class Block_2015046109619a935a289577_11451691 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_2015046109619a935a289577_11451691',
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
        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, {
            font-family: inherit;
            font-weight: 600;
            line-height: 1.5;
            margin-bottom: .5rem;
            color: #32325d;
        }
        .chat-segment-sent .chat-message {
            background: #009AFF;
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
class Block_1466590639619a935a28b744_59440441 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1466590639619a935a28b744_59440441',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="d-flex flex-grow-1 p-0 border-faded shadow-4" style="max-height:800px;">
        <!-- left slider -->
        <div id="js-chat-contact" class="flex-wrap position-relative slide-on-mobile slide-on-mobile-left border-faded border-left-0 border-top-0 border-bottom-0">
            <!-- BEGIN msgr-list -->
            <div class="d-flex flex-column bg-faded position-absolute pos-top pos-bottom w-100">
                <div class="px-3 py-4">
                    <input type="text" class="form-control bg-white" placeholder="Search key words">
                </div>
                <div class="flex-1 h-100 custom-scrollbar">
                    <div class="w-100">
                        <div class="nav-title m-0 px-3 text-muted">Chat History</div>


                        <ul class="list-unstyled m-0">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'chat_user');
$_smarty_tpl->tpl_vars['chat_user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['chat_user']->value) {
$_smarty_tpl->tpl_vars['chat_user']->do_else = false;
?>

                                <?php if ($_smarty_tpl->tpl_vars['chat_user']->value->id == $_smarty_tpl->tpl_vars['user']->value->id) {?>
                                                                        <?php continue 1;?>
                                <?php }?>

                                <li>
                                    <a href="<?php echo BASE_URL;?>
chat/app/chats/user/<?php echo $_smarty_tpl->tpl_vars['chat_user']->value->id;?>
">


                                        <div class="d-flex w-100 px-3 py-2 text-dark hover-white cursor-pointer show-child-on-hover">
                                            <div class="clx-avatar" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['chat_user']->value['img'];?>
); background-size: cover;"></div>
                                            <div class="px-2 flex-1">
                                                <div class="text-truncate text-truncate-lg ">
                                                    <?php echo $_smarty_tpl->tpl_vars['chat_user']->value->fullname;?>

                                                    <small class="d-block text-muted text-truncate text-truncate-md">
                                                        <?php if ($_smarty_tpl->tpl_vars['chat_user']->value->lastlogin && (strtotime($_smarty_tpl->tpl_vars['chat_user']->value->lastlogin) < $_smarty_tpl->tpl_vars['current_time_plus_five_minutes']->value)) {?>
                                                            <small class="d-block font-italic text-success fs-xs">
                                                                Online
                                                            </small>
                                                        <?php } else { ?>
                                                            <small class="d-block font-italic text-danger fs-xs">
                                                                Offline
                                                            </small>
                                                        <?php }?>
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="position-absolute pos-right mt-2 mr-3 show-on-hover-parent">
                                                <button class="btn btn-danger btn-xs btn-icon rounded-circle shadow-0" data-toggle="tooltip" data-template="<div class=&quot;tooltip&quot; role=&quot;tooltip&quot;><div class=&quot;tooltip-inner bg-danger-500&quot;></div></div>" data-original-title="Delete">
                                                    <i class="fal fa-trash-alt"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


                        </ul>
                    </div>
                </div>
            </div>
            <!-- END msgr-list -->
        </div>
        <div class="slide-backdrop" data-action="toggle" data-class="slide-on-mobile-left-show" data-target="#js-chat-contact"></div> <!-- end left slider -->
        <!-- inbox container -->
        <div class="d-flex flex-column flex-grow-1 bg-white">
            <!-- inbox header -->
            <div class="flex-grow-0">
                <!-- inbox title -->
                <div class="d-flex align-items-center p-0 border-faded border-top-0 border-left-0 border-right-0 flex-shrink-0">
                    <div class="d-flex align-items-center w-100 pl-3 px-lg-4 py-2 position-relative">
                        <div class="d-flex flex-row align-items-center mt-1 mb-1">
                            <div class="mr-2 d-inline-block">
                                <?php if ($_smarty_tpl->tpl_vars['selected_user']->value) {?>
                                    <div class="clx-avatar" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['selected_user']->value['img'];?>
); background-size: cover;">
                                    </div>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['selected_client']->value) {?>
                                    <div class="clx-avatar" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['selected_client']->value['img'];?>
); background-size: cover;">
                                    </div>

                                <?php }?>



                            </div>
                            <div class="info-card-text">
                                <a href="javascript:void(0);" class="fs-lg text-truncate text-truncate-lg" data-toggle="dropdown" aria-expanded="false">
                                   <?php if ($_smarty_tpl->tpl_vars['selected_user']->value) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['selected_user']->value->fullname;?>

                                       <?php } elseif ($_smarty_tpl->tpl_vars['selected_client']->value) {?>
                                       <?php echo $_smarty_tpl->tpl_vars['selected_client']->value->account;?>

                                       <?php } else { ?>

-- Choose an user 


                                    <?php }?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- button for mobile -->
                    <a href="javascript:void(0);" class="px-3 py-2 d-flex d-lg-none align-items-center justify-content-center mr-2 btn" data-action="toggle" data-class="slide-on-mobile-left-show" data-target="#js-chat-contact">
                        <i class="fal fa-ellipsis-v h1 mb-0 "></i>
                    </a>
                    <!-- end button for mobile -->
                </div>
                <!-- end inbox title -->
            </div>
            <!-- end inbox header -->
            <!-- inbox message -->
            <div class="flex-wrap align-items-center flex-grow-1 position-relative bg-gray-50">
                <div class="position-absolute pos-top pos-bottom w-100 overflow-hidden">
                    <div class="d-flex h-100 flex-column">
                        <!-- message list (the part that scrolls) -->
                        <!-- BEGIN msgr-list -->
                        <div class="msgr-list d-flex flex-column bg-faded border-faded border-top-0 border-right-0 border-bottom-0 position-absolute pos-top pos-bottom">
                            <div>
                                <div class="height-4 width-3 h3 m-0 d-flex justify-content-center flex-column color-primary-500 pl-3 mt-2">
                                    <i class="fal fa-search"></i>
                                </div>
                                <input type="text" class="form-control bg-white" id="msgr_listfilter_input" placeholder="Filter contacts" aria-label="FriendSearch" data-listfilter="#js-msgr-listfilter">
                            </div>
                            <div class="flex-1 h-100 custom-scroll">
                                <div class="w-100">
                                    <ul id="js-msgr-listfilter" class="list-unstyled m-0">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clients']->value, 'client');
$_smarty_tpl->tpl_vars['client']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['client']->value) {
$_smarty_tpl->tpl_vars['client']->do_else = false;
?>
                                            <li>
                                                <a href="<?php echo BASE_URL;?>
chat/app/chats/client/<?php echo $_smarty_tpl->tpl_vars['client']->value->id;?>
" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="tracey chang online">
                                                    <div class="d-table-cell align-middle status <?php if ($_smarty_tpl->tpl_vars['client']->value->lastlogin && (strtotime($_smarty_tpl->tpl_vars['client']->value->lastlogin) < $_smarty_tpl->tpl_vars['current_time_plus_five_minutes']->value)) {?>
                                                          status-success
                                                    <?php } else { ?>
                                                    status-danger
                                                    <?php }?> status-sm ">
                                                        <span class="profile-image-md rounded-circle" ><?php echo sp_get_contact_image($_smarty_tpl->tpl_vars['client']->value);?>
</span>
                                                    </div>
                                                    <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                        <div class="text-truncate text-truncate-md">
                                                            <?php echo $_smarty_tpl->tpl_vars['client']->value->account;?>


                                                            <?php if ($_smarty_tpl->tpl_vars['client']->value->lastlogin && (strtotime($_smarty_tpl->tpl_vars['client']->value->lastlogin) < $_smarty_tpl->tpl_vars['current_time_plus_five_minutes']->value)) {?>
                                                                <small class="d-block font-italic text-success fs-xs">
                                                                    Online
                                                                </small>
                                                                <?php } else { ?>
                                                                <small class="d-block font-italic text-danger fs-xs">
                                                                    Offline
                                                                </small>
                                                            <?php }?>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>

                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



                                    </ul>
                                    <div class="filter-message js-filter-message"></div>
                                </div>
                            </div>
                            <div>
                                <a class="fs-xl d-flex align-items-center p-3">
                                    <i class="fal fa-cogs"></i>
                                </a>
                            </div>
                        </div>
                        <!-- END msgr-list -->
                        <!-- BEGIN msgr -->
                        <div class="msgr d-flex h-100 flex-column bg-white">
                            <!-- BEGIN custom-scroll -->
                            <div class="custom-scroll flex-1 h-100">
                                <div id="chat_container" class="w-100 p-4">
                                    <!-- start .chat-segment -->
                                    <!--  end .chat-segment -->
                                    <!-- start .chat-segment -->



                                    <!--  end .chat-segment -->
                                    <!-- start .chat-segment -->
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>

                                        <div class="chat-segment
<?php if ($_smarty_tpl->tpl_vars['message']->value->from_id == $_smarty_tpl->tpl_vars['user']->value->id) {?>
chat-segment-sent
<?php } else { ?>
chat-segment-get
<?php }?>

">
                                            <div class="chat-message">
                                                <?php echo $_smarty_tpl->tpl_vars['message']->value->message;?>


                                            </div>
                                            <div class="fw-300 text-muted mt-1 fs-xs">
                                                <?php echo $_smarty_tpl->tpl_vars['message']->value->updated_at;?>

                                            </div>
                                        </div>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <!--  end .chat-segment -->
                                    <!-- start .chat-segment -->

                                    <!--  end .chat-segment -->
                                    <!-- start .chat-segment -->

                                    <!--  end .chat-segment -->
                                    <!-- start .chat-segment -->

                                    <!--  end .chat-segment -->
                                    <!-- start .chat-segment -->

                                    <!--  end .chat-segment -->
                                    <!-- start .chat-segment -->

                                    <!--  end .chat-segment -->
                                    <!-- start .chat-segment for timestamp -->
                                    <div class="chat-segment">
                                        <div class="time-stamp text-center mb-2 fw-400">

                                        </div>
                                    </div>
                                    <!--  end .chat-segment for timestamp -->
                                </div>
                            </div>
                            <!-- END custom-scroll  -->
                            <!-- BEGIN msgr__chatinput -->
                            <div class="d-flex flex-column">
                                <div class="border-faded border-right-0 border-bottom-0 border-left-0 flex-1 mr-3 ml-3 position-relative shadow-top">
                                    <div class="pt-3 pb-1 pr-0 pl-0 rounded-0" tabindex="-1">
                                        <div id="msgr_input" contenteditable="true" data-placeholder="Type your message here..." class="height-10 form-content-editable"></div>
                                    </div>
                                </div>
                                <div class="height-8 px-3 d-flex flex-row align-items-center flex-wrap flex-shrink-0">
                                    <div class="ml-auto">
                                        <button id="btn_send_message" class="btn btn-info">Send</button>
                                    </div>
                                </div>
                            </div>
                            <!-- END msgr__chatinput -->
                        </div>
                        <!-- END msgr -->
                        <!-- end message list -->
                    </div>
                </div>
            </div>
            <!-- end inbox message -->
        </div>
        <!-- end inbox container -->
    </div>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_625556096619a935a2a3f17_83056708 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_625556096619a935a2a3f17_83056708',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {

            let $chat_container = $('#chat_container');
            let $msgr_input = $('#msgr_input');
            $('#btn_send_message').on('click',function (event) {
                event.preventDefault();
                $chat_container.append('<div class="chat-segment chat-segment-sent chat-end">\n' +
                    '                                        <div class="chat-message">\n' +
                    '                                            <p>\n' +
                    '                                                '+  $msgr_input.html() +' \n' +
                    '                                            </p>\n' +
                    '                                        </div>\n' +
                    '                                    </div>');
                $.post(base_url + 'chat/app/send-message/',{
                    message: $msgr_input.html(),
                    <?php if ($_smarty_tpl->tpl_vars['selected_user']->value) {?>
                    user_id: <?php echo $_smarty_tpl->tpl_vars['selected_user']->value->id;?>
,
                    type: 'Admin',
                    <?php } elseif ($_smarty_tpl->tpl_vars['selected_client']->value) {?>
                    user_id: <?php echo $_smarty_tpl->tpl_vars['selected_client']->value->id;?>
,
                    type: 'Client',
                    <?php }?>
                }).done(function () {

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
