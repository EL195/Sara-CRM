<div class="mx-auto">
    <div class="panel mb-0 rounded-0" id="modal_form">
        <div class="panel-hdr">
            <h2>
                {if $f_type eq 'edit'}
                    {$_L['Edit']}
                {else}
                    {$_L['Create New']}
                {/if}
            </h2>
        </div>
        <div class="panel-container">
            <div class="panel-content">
                <form class="form-horizontal" id="ib_modal_form">

                    <div class="form-group"><label for="name">{$_L['Name']}<small class="red">*</small></label>

                        <input type="text" id="name" name="name" class="form-control" value="{$val['name']}">


                    </div>


                    <div class="form-group"><label for="type">{$_L['Type']}</label>

                        <select class="form-control" id="type" name="type">
                            <option value="Piece" {if $val['name'] eq 'Piece'}selected{/if}>{$_L['Piece']}</option>
                            <option value="Weight" {if $val['name'] eq 'Weight'}selected{/if}>{$_L['Weight']}</option>
                            <option value="Time" {if $val['name'] eq 'Time'}selected{/if}>{$_L['Time']}</option>
                            <option value="Dimension" {if $val['name'] eq 'Dimension'}selected{/if}>{$_L['Dimension']}</option>

                            <option value="Surface" {if $val['name'] eq 'Surface'}selected{/if}>{$_L['Surface']}</option>

                            <option value="Volume" {if $val['name'] eq 'Volume'}selected{/if}>{$_L['Volume']}</option>


                        </select>


                    </div>









                    {if $f_type eq 'edit'}
                        <input type="hidden" name="uid" id="uid" value="{$val['uid']}">
                    {else}
                        <input type="hidden" name="uid" id="uid" value="0">
                    {/if}


                    <input type="hidden" name="f_type" id="f_type" value="{$f_type}">

                    <button class="btn btn-primary modal_submit" type="submit" id="modal_submit">{$_L['Save']}</button>

                </form>
            </div>
        </div>
    </div>
</div>


