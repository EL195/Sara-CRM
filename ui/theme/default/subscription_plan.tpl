{extends file="$layouts_admin"}

{block name="content"}

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3>{__('New Subscription Plan')}</h3>
                <div class="hr-line-dashed"></div>

                <form id="form_main" method="post">

                    <div class="mb-3">
                        <label for="input_title">{{__('Title')}}</label>
                        <input class="form-control" name="title" id="input_title"
                                {if !empty($plan)}
                                    value="{{$plan->title}}"
                                {/if}
                        >
                    </div>


                    <div class="mb-3">
                        <label for="input_slug">{{__('Slug')}}</label>
                        <div class="input-group">
                            <span class="input-group-text">{$base_url}subscriptions/subscribe/</span>
                            <input type="text" aria-label="Slug" name="slug" id="input_slug" class="form-control"
                                    {if !empty($plan)}
                                        value="{{$plan->slug}}"
                                    {/if}
                            >
                        </div>
                    </div>



                    <div class="mb-3">
                        <label for="input_price">{{__('Price')}}</label>
                        <input class="form-control" name="price" id="input_price"
                                {if !empty($plan)}
                                    value="{{$plan->price}}"
                                {/if}
                        >
                    </div>

                    <div class="mb-3">
                        <label for="input_button_text">{{__('Button Text')}}</label>
                        <input class="form-control" name="button_text" id="input_button_text"
                                {if !empty($plan)}
                                    value="{{$plan->button_text}}"
                                {/if}
                        >
                    </div>

                    <div class="mb-3">
                        <label for="input_stripe_pricing_id">{{__('Stripe Pricing Id')}}</label>
                        <input class="form-control" name="stripe_pricing_id" id="input_stripe_pricing_id"
                                {if !empty($plan)}
                                    value="{{$plan->stripe_pricing_id}}"
                                {/if}
                        >
                    </div>

                    <div class="mb-3">
                        <label for="input_description">{{__('Description')}}</label>
                        <textarea class="form-control" rows="5" id="input_description" name="description">{if !empty($plan)}{{$plan->description}}{/if}</textarea>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <h4>{$_L['Features']}</h4>

                    <div id="div_features">

                        {if !empty($plan) && $plan->features}

                            {foreach json_decode($plan->features) as $feature_line}
                                <div class="mb-3">
                                    <input class="form-control" name="features[]" value="{$feature_line}">
                                </div>
                            {/foreach}

                        {else}

                            <div class="mb-3">
                                <input class="form-control" name="features[]">
                            </div>

                        {/if}


                    </div>

                    <div class="my-3">
                        <button id="btn_add_features" type="button" class="btn btn-success btn-icon waves-effect waves-themed"><i class="fal fa-plus"></i> </button>
                    </div>

                    <div class="hr-line-dashed"></div>

                    {if !empty($plan)}

                        <input type="hidden" name="id" value="{$plan->id}">

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


            $btn_add_features = $('#btn_add_features');
            $div_features = $('#div_features');

            $btn_add_features.on('click',function () {
                $div_features.append('<div class="mb-3">\
                    <input class="form-control" name="features[]">\
                    </div>');
            });

            $('#description').redactor(
                {
                    minHeight: 200 // pixels
                }
            );

            let $form_main = $('#form_main');

            $form_main.on('submit',function (event) {
                event.preventDefault();

                axios.post(base_url + 'subscriptions/plan',$form_main.serialize()).then(function (response) {
                    window.location = base_url + 'subscriptions/plan/' + response.data.id;
                }).catch(function (error) {
                    $.each(error.response.data, function(key, value) {
                        toastr.error(value);
                    });
                });



            });


        });

    </script>


{/block}
