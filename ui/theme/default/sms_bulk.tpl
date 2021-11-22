{extends file="$layouts_admin"}

{block name="content"}

    <div class="mx-auto" style="width: 100%; max-width: 600px;">
        <div class="panel">

            <div class="panel-container">
                <div class="panel-content">

                    <div id="result"></div>

                    <form class="form-horizontal" action="{$_url}sms/init/send_post/" method="post" id="iform">

                        <div class="form-group"><label for="from">From </label>

                            <input type="text" name="from" id="from" class="form-control " value="{$config['sms_sender_name']}">
                        </div>

                        <div class="form-group"><label for="sms_to">To </label>

                            <select multiple="multiple" id="contacts" name="contacts[]">
                                {foreach $c as $cs}
                                    <option value="{$cs['phone']}">{$cs['account']} - {$cs['phone']}</option>
                                {/foreach}
                            </select>

                            <p class="mt-3">
                                <a href="#" id="ib_select_all">Select All</a> |
                                <a href="#" id="ib_de_select_all">De Select All</a>
                            </p>
                        </div>


                        <div class="form-group"><label for="message">SMS </label>

                            <textarea class="form-control" name="message" id="message" rows="4"></textarea>

                            <p id="sms-counter">
                                Remaining: <span class="remaining"></span> | Length: <span class="length"></span> | Messages: <span class="messages"></span>
                            </p>

                        </div>


                        <div class="form-group">
                            <button class="btn btn-primary" type="submit" id="send">{$_L['Send']}</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>


{/block}
{block name="script"}
    <script>
        $(function () {

            var _url = base_url;

            var send = $("#send");

            var result = $("#result");

            var iform = $( "#iform" );

            $('#message').countSms('#sms-counter');

            var contacts = $("#contacts");

            contacts.multiSelect({
                selectableHeader: "<input type='text' class='form-control' autocomplete='off' placeholder='Search...'>",
                selectionHeader: "<input type='text' class='form-control' autocomplete='off' placeholder='Search...'>",
                afterInit: function(ms){
                    var that = this,
                        $selectableSearch = that.$selectableUl.prev(),
                        $selectionSearch = that.$selectionUl.prev(),
                        selectableSearchString = '#'+that.$container.attr('id')+' .ms-elem-selectable:not(.ms-selected)',
                        selectionSearchString = '#'+that.$container.attr('id')+' .ms-elem-selection.ms-selected';

                    that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                        .on('keydown', function(e){
                            if (e.which === 40){
                                that.$selectableUl.focus();
                                return false;
                            }
                        });

                    that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                        .on('keydown', function(e){
                            if (e.which == 40){
                                that.$selectionUl.focus();
                                return false;
                            }
                        });
                },
                afterSelect: function(){
                    this.qs1.cache();
                    this.qs2.cache();
                },
                afterDeselect: function(){
                    this.qs1.cache();
                    this.qs2.cache();
                }
            });


            $('#ib_select_all').click(function(){
                contacts.multiSelect('select_all');
                return false;
            });
            $('#ib_de_select_all').click(function(){
                contacts.multiSelect('deselect_all');
                return false;
            });








            send.on('click', function(e) {


                e.preventDefault();

                iform.block({ message: null });


                $.post( _url + "sms/init/bulk_post/", iform.serialize())
                    .done(function (data) {

                        iform.unblock();

                        result.html(data);

                    });


            });


        });
    </script>
{/block}
