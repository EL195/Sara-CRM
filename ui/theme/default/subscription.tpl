{extends file="$layouts_admin"}

{block name="content"}

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3>{$_L['Subscriptions']}</h3>
                <div class="hr-line-dashed"></div>

                <form id="form_main" method="post">

                    <div class="form-group">
                        <label for="contact_id">{$_L['Customer']}</label>
                        <select class="form-control" data-pristine-required data-pristine-required-message="{$_L['This field is required']}" id="contact_id" name="contact_id">
                            <option value="0">{$_L['None']}</option>
                            {foreach $contacts as $contact}
                                <option value="{$contact->id}"
                                        {if !empty($contract->contact_id) && ($contact->id == $contract->contact_id)}
                                            selected

                                        {/if}
                                >{$contact->account}</option>
                            {/foreach}
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>{__('Subscription Plan')}</label>
                        <select class="custom-select" name="plan_id">
                            <option value="">{__('None')}</option>
                            {foreach $plans as $plan}
                                <option value="{$plan->id}">{$plan->title}</option>
                            {/foreach}
                        </select>
                    </div>

                    <div class="form-group">
                        <label>
                            {$_L['Start Date']}
                        </label>
                        <input type="text" class="form-control"  value="{date('Y-m-d')}" name="start_date" id="start_date" datepicker data-date-format="yyyy-mm-dd" data-auto-close="true" data-pristine-required data-pristine-required-message="{$_L['This field is required']}">
                    </div>

                    {if !empty($subscription)}

                        <input type="hidden" name="id" value="{$subscription->id}">

                    {/if}

                    <button id="btn_plan" type="submit" class="btn btn-primary">{{__('Save')}}</button>
                </form>

            </div>
        </div>
    </div>

{/block}

{block name=script}

    <script>

        $(function () {

            var form = document.getElementById("form_main");
            var pristine = new Pristine(form);
            let $form_main = $('#form_main');

            $("#contact_id").select2({
                    language: {
                        noResults: function () {
                            return $("#_lan_no_results_found").val();
                        }
                    }
                }
            );

            $('[data-toggle="datepicker"]').datepicker();



            $form_main.on('submit',function (event) {
                event.preventDefault();
                if(pristine.validate())
                {
                    axios.post(base_url + 'subscriptions/subscription',$form_main.serialize()).then(function (response) {
                        window.location = base_url + 'subscriptions/view/' + response.data.id;
                    }).catch(function (error) {
                        $.each(error.response.data, function(key, value) {
                            toastr.error(value);
                        });
                    });
                }

            });


        });

    </script>


{/block}
