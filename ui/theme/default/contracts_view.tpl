{extends file="layouts/paper.tpl"}
{block name="content"}

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6">
                <h1>{$contract->title}</h1>
                {if !empty($contract_types[$contract->type])}
                    <p class="text-muted">{$contract_types[$contract->type]}</p>
                {/if}
            </div>
            <div class="col-md-6 text-right">
                <button class="btn btn-success"><i class="fal fa-sign"></i> {__('Sign')}</button>
                <a href="{$base_url}contracts/download/{$contract->id}/{$contract->uuid}" class="btn btn-primary"><i class="fal fa-file-pdf"></i> {__('Download')}</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            {$contract->description}
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div id="signaturePadArea">

                                </div>
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>

                        <div class="row">
                            <div class="col-md-6">
                                <h4>{__('Sign above')}</h4>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="button" id="clearSignature" class="btn btn-danger btn-sm">{__('Clear signature')}</button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-md-4">

            </div>
        </div>

    </div>

{/block}


{block name=script}
    <script src="{$app_url}ui/lib/jSignature.min.js"></script>
    <script>

        $(function () {

            var $signaturePadArea = $("#signaturePadArea");

            $signaturePadArea.jSignature({
                color:"#000",


            });

            {if $contract->party_two_sign != '' }

            $signaturePadArea.jSignature("setData","{$contract->party_two_sign}");

            {/if}

            $signaturePadArea.bind('change', function(e){
                var signData = $signaturePadArea.jSignature("getData");
                $.post( "{$base_url}contracts/save-signature/{$contract->id}/{$contract->uuid}", {
                    signData: signData,
                });
            });


            $('#clearSignature').on('click',function () {
                $signaturePadArea.jSignature("reset");
            });

        });

    </script>


{/block}

