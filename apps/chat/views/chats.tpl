{block name="head"}


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
{/block}



{block name="content"}

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
                            {foreach $users as $chat_user}

                                {if $chat_user->id == $user->id}
                                    {* skip this iteration *}
                                    {continue}
                                {/if}

                                <li>
                                    <a href="{BASE_URL}chat/app/chats/user/{$chat_user->id}">


                                        <div class="d-flex w-100 px-3 py-2 text-dark hover-white cursor-pointer show-child-on-hover">
                                            <div class="clx-avatar" style="background-image:url({$app_url}/{$chat_user['img']}); background-size: cover;"></div>
                                            <div class="px-2 flex-1">
                                                <div class="text-truncate text-truncate-lg ">
                                                    {$chat_user->fullname}
                                                    <small class="d-block text-muted text-truncate text-truncate-md">
                                                        {if $chat_user->lastlogin && (strtotime($chat_user->lastlogin) < $current_time_plus_five_minutes)}
                                                            <small class="d-block font-italic text-success fs-xs">
                                                                Online
                                                            </small>
                                                        {else}
                                                            <small class="d-block font-italic text-danger fs-xs">
                                                                Offline
                                                            </small>
                                                        {/if}
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

                            {/foreach}


                        </ul>
{*                        <div class="nav-title px-3 text-muted">Missed calls</div>*}
{*                        <ul class="list-unstyled m-0">*}
{*                            <li>*}
{*                                <div class="d-flex w-100 px-3 py-2 text-dark hover-white cursor-pointer show-child-on-hover">*}
{*                                    <div class="profile-image-md rounded-circle" style="background-image:url('img/demo/avatars/avatar-m.png'); background-size: cover;"></div>*}
{*                                    <div class="px-2 flex-1">*}
{*                                        <div class="text-truncate text-truncate-md">*}
{*                                            +714651347790*}
{*                                            <small class="d-block font-italic fs-xs opacity-50">*}
{*                                                Missed Call*}
{*                                            </small>*}
{*                                        </div>*}
{*                                    </div>*}
{*                                    <div class="position-absolute pos-right mt-2 mr-3 show-on-hover-parent">*}
{*                                        <button class="btn btn-success btn-xs btn-icon rounded-circle shadow-0" data-toggle="tooltip" data-template="<div class=&quot;tooltip&quot; role=&quot;tooltip&quot;><div class=&quot;tooltip-inner bg-success-500&quot;></div></div>" data-original-title="Play voicemail">*}
{*                                            <i class="fal fa-play"></i>*}
{*                                        </button>*}
{*                                        <button class="btn btn-info btn-xs btn-icon rounded-circle shadow-0" data-toggle="tooltip" data-template="<div class=&quot;tooltip&quot; role=&quot;tooltip&quot;><div class=&quot;tooltip-inner bg-info-500&quot;></div></div>" data-original-title="Call back">*}
{*                                            <i class="fal fa-phone"></i>*}
{*                                        </button>*}
{*                                    </div>*}
{*                                </div>*}
{*                            </li>*}
{*                            <li>*}
{*                                <div class="d-flex w-100 px-3 py-2 text-dark hover-white cursor-pointer show-child-on-hover">*}
{*                                    <div class="profile-image-md rounded-circle" style="background-image:url('img/demo/avatars/avatar-m.png'); background-size: cover;"></div>*}
{*                                    <div class="px-2 flex-1">*}
{*                                        <div class="text-truncate text-truncate-md">*}
{*                                            +13471349199*}
{*                                            <small class="d-block font-italic fs-xs opacity-50">*}
{*                                                Ended in 32 minutes*}
{*                                            </small>*}
{*                                        </div>*}
{*                                    </div>*}
{*                                    <div class="position-absolute pos-right mt-2 mr-3 show-on-hover-parent">*}
{*                                        <button class="btn btn-info btn-xs btn-icon rounded-circle shadow-0" data-toggle="tooltip" data-template="<div class=&quot;tooltip&quot; role=&quot;tooltip&quot;><div class=&quot;tooltip-inner bg-info-500&quot;></div></div>" data-original-title="Call back">*}
{*                                            <i class="fal fa-phone"></i>*}
{*                                        </button>*}
{*                                    </div>*}
{*                                </div>*}
{*                            </li>*}
{*                        </ul>*}
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
                                {if $selected_user}
                                    <div class="clx-avatar" style="background-image:url({$app_url}/{$selected_user['img']}); background-size: cover;">
                                    </div>

                                    {elseif $selected_client}
                                    <div class="clx-avatar" style="background-image:url({$app_url}/{$selected_client['img']}); background-size: cover;">
                                    </div>

                                {/if}



                            </div>
                            <div class="info-card-text">
                                <a href="javascript:void(0);" class="fs-lg text-truncate text-truncate-lg" data-toggle="dropdown" aria-expanded="false">
                                   {if $selected_user}
                                    {$selected_user->fullname}
                                       {elseif $selected_client}
                                       {$selected_client->account}
                                       {else}

-- Choose an user 


                                    {/if}
{*                                    <i class="fal fa-angle-down d-inline-block ml-1 fs-md"></i>*}
                                </a>
{*                                <div class="dropdown-menu">*}
{*                                    <a class="dropdown-item px-3 py-2" href="#">Send Email</a>*}
{*                                    <a class="dropdown-item px-3 py-2" href="#">Create Appointment</a>*}
{*                                    <a class="dropdown-item px-3 py-2" href="#">Block User</a>*}
{*                                </div>*}
{*                                <span class="text-truncate text-truncate-md opacity-80">Online Strategist</span>*}
                            </div>
                        </div>
{*                        <div class="ml-auto">*}
{*                            <a href="javascript:void(0);" data-toggle="button" class="btn btn-outline-danger btn-icon rounded-circle">*}
{*                                <i class="fal fa-volume-mute fs-md"></i>*}
{*                            </a>*}
{*                            <a href="javascript:void(0);" class="btn btn-outline-info btn-icon rounded-circle ml-1">*}
{*                                <i class="fal fa-phone fs-md"></i>*}
{*                            </a>*}
{*                            <a href="javascript:void(0);" class="btn btn-outline-info btn-icon rounded-circle ml-1">*}
{*                                <i class="fal fa-video fs-md"></i>*}
{*                            </a>*}
{*                        </div>*}
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
                                        {foreach $clients as $client}
                                            <li>
                                                <a href="{BASE_URL}chat/app/chats/client/{$client->id}" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="tracey chang online">
                                                    <div class="d-table-cell align-middle status {if $client->lastlogin && (strtotime($client->lastlogin) < $current_time_plus_five_minutes)}
                                                          status-success
                                                    {else}
                                                    status-danger
                                                    {/if} status-sm ">
                                                        <span class="profile-image-md rounded-circle" >{sp_get_contact_image($client)}</span>
                                                    </div>
                                                    <div class="d-table-cell w-100 align-middle pl-2 pr-2">
                                                        <div class="text-truncate text-truncate-md">
                                                            {$client->account}

                                                            {if $client->lastlogin && (strtotime($client->lastlogin) < $current_time_plus_five_minutes)}
                                                                <small class="d-block font-italic text-success fs-xs">
                                                                    Online
                                                                </small>
                                                                {else}
                                                                <small class="d-block font-italic text-danger fs-xs">
                                                                    Offline
                                                                </small>
                                                            {/if}
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>

                                        {/foreach}



{*                                        <li>*}
{*                                            <a href="#" class="d-table w-100 px-2 py-2 text-dark hover-white" data-filter-tags="ali amdaney inactive">*}
{*                                                <div class="d-table-cell align-middle">*}
{*                                                    <span class="profile-image-md rounded-circle d-block" style="background-image:url('img/demo/avatars/avatar-m.png'); background-size: cover;"></span>*}
{*                                                </div>*}
{*                                                <div class="d-table-cell w-100 align-middle pl-2 pr-2">*}
{*                                                    <div class="text-truncate text-truncate-md">*}
{*                                                        +714651347790*}
{*                                                        <small class="d-block font-italic fs-xs opacity-50">*}
{*                                                            Missed Call*}
{*                                                        </small>*}
{*                                                    </div>*}
{*                                                </div>*}
{*                                            </a>*}
{*                                        </li>*}
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
{*                                    <div class="chat-segment">*}
{*                                        <div class="time-stamp text-center mb-2 fw-400">*}
{*                                            Jun 19*}
{*                                        </div>*}
{*                                    </div>*}
                                    <!--  end .chat-segment -->
                                    <!-- start .chat-segment -->



                                    <!--  end .chat-segment -->
                                    <!-- start .chat-segment -->
                                    {foreach $messages as $message}

                                        <div class="chat-segment
{if $message->from_id == $user->id}
chat-segment-sent
{else}
chat-segment-get
{/if}

">
                                            <div class="chat-message">
                                                {$message->message}

                                            </div>
                                            <div class="fw-300 text-muted mt-1 fs-xs">
                                                {$message->updated_at}
                                            </div>
                                        </div>
                                    {/foreach}
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
{*                                    <a href="javascript:void(0);" class="btn btn-icon fs-xl width-1 mr-1" data-toggle="tooltip" data-original-title="More options" data-placement="top">*}
{*                                        <i class="fal fa-ellipsis-v-alt color-fusion-300"></i>*}
{*                                    </a>*}
{*                                    <a href="javascript:void(0);" class="btn btn-icon fs-xl mr-1" data-toggle="tooltip" data-original-title="Attach files" data-placement="top">*}
{*                                        <i class="fal fa-paperclip color-fusion-300"></i>*}
{*                                    </a>*}
{*                                    <a href="javascript:void(0);" class="btn btn-icon fs-xl mr-1" data-toggle="tooltip" data-original-title="Insert photo" data-placement="top">*}
{*                                        <i class="fal fa-camera color-fusion-300"></i>*}
{*                                    </a>*}
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
{/block}

{block name="script"}
    <script>
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
                    {if $selected_user}
                    user_id: {$selected_user->id},
                    type: 'Admin',
                    {elseif $selected_client}
                    user_id: {$selected_client->id},
                    type: 'Client',
                    {/if}
                }).done(function () {

                });

            });
        });
    </script>
{/block}