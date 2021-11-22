{extends file="$layouts_admin"}

{block name="content"}

    <div class="row">
        <div class="col">
            <div class="subheader">
                <h1 class="subheader-title">
                    <i class='subheader-icon fal fa-window'></i> {$_L['Subscriptions']}
                </h1>
            </div>
        </div>
        <div class="col text-right">
            <a href="{$_url}subscriptions/plan" class="btn btn-primary  btn-sm"> {__('New Subscription Plan')}</a>
        </div>
    </div>


    <div class="row">

        {foreach $plans as $plan}
            <div class="col-md-3">
                <div class="card mb-3">
                    <div class="card-body">
                        <h2>{$plan->title}</h2>

                        <div class="hr-line-dashed"></div>

                        <div class="mb-3">
                            <h4>{formatCurrency($plan->price,$config['home_currency'])}</h4>
                        </div>

                        <a href="{$_url}subscriptions/plan/{$plan->id}" class="btn btn-primary">{$_L['Edit']}</a>
                        <a target="_blank" href="{$_url}subscriptions/subscribe/{$plan->slug}" class="btn btn-success">{$_L['View']}</a>
                        <a href="javascript:;" onclick="confirmThenGoToUrl(event,'subscriptions/delete-plan/{$plan->id}');" class="btn btn-danger">{$_L['Delete']}</a>
                    </div>
                </div>
            </div>
        {/foreach}

    </div>


{/block}

{block name="script"}



    <script>
        $(function () {

        });
    </script>
{/block}
