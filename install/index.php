<?php
require 'base.php'; ?>
<?php echo CloudOnexInstaller::header('Welcome!'); ?>
<body>

<div style="max-width: 800px; width: 100%; margin-top: 50px;" class="mx-auto">

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">

                    <h2> <?php echo $app_name; ?> Installer </h2>

                    <hr>


                    <h5>Hey, There!</h5>
                    <p>
                        Thanks for choosing the <?php echo $app_name; ?>. This easy wizard will guide you to install this software. Let's begin.
                    </p>

                    <p>
                        By: CloudOnex [ <a href="https://<?php echo $app_url; ?>" target="_blank"><?php echo $app_url; ?></a> ]
                    </p>

                </div>

                <div class="col-md-12"><br>
                    <a href="<?php echo $installer_base_url; ?>/install/step2.php" class="btn btn-primary">Continue</a>
                </div>
            </div>
        </div>
    </div>

</div>

<?php echo CloudOnexInstaller::footer(); ?>


