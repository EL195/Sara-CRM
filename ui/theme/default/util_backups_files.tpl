{extends file="$layouts_admin"}

{block name="content"}

    <div class="row">
        <div class="col-md-12">
            <div class="panel-hdr">
                <h2>{$_L['Backup']}</h2>
            </div>


        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-container">
                    <div class="panel-content">
                        <div class="tabs-container">
                            <ul class="nav nav-tabs">
                                <li><a class="nav-link" href="{$_url}util/backups">{$_L['Database']}</a></li>
                                <li class="active"><a class="nav-link active show" href="{$_url}util/backup_files">{$_L['Files']}</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active show">
                                    <div class="panel-body panel-body-with-border">

                                        <br>


                                        <a href="{$_url}util/do-backup-files" id="btnBackup" class="btn btn-primary add_document waves-effect waves-light"><i class="fal fa-file"></i> {$_L['Backup now']}</a>

                                        <hr>

                                        <div class="row">
                                            <div class="col-lg-12">

                                                {if count($files) > 0}

                                                    {foreach $files as $file => $value}

                                                        {if $file == '..' || $file == 'index.html' || $file == 'task.log'}
                                                            {continue}
                                                        {/if}

                                                        <div class="file-box" style="margin-bottom: 15px;">
                                                            <div class="file">
                                                                <a href="{$app_url}/{$value['file_path']}">
                                                                    <span class="corner"></span>

                                                                    <div class="icon">
                                                                        <i class="fa {$value['icon_class']}"></i>
                                                                    </div>
                                                                    <div class="file-name">
                                                                        {$file}
                                                                        <br/>
                                                                        <small>
                                                                            {$value['mod_time']}

                                                                        </small>
                                                                    </div>

                                                                </a>


                                                            </div>

                                                            <a href="{$_url}util/delete-backup-files/{str_replace('/',':',$value['file_path'])}" class="btn btn-danger">{$_L['Delete']}</a>

                                                        </div>



                                                    {/foreach}

                                                {else}
                                                    {$_L['No Data Available']}
                                                {/if}






                                            </div>
                                        </div>



                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

{/block}

{block name=script}

    <script>

        $(function () {
            $('#btnBackup').click(function () {
                $('#btnBackup').prop('disabled',true);
            });
        })

    </script>


{/block}
