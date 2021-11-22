<?php
require 'base.php';
?>
<?php echo CloudOnexInstaller::header('Welcome!'); ?>
<body>

<div style="max-width: 800px; width: 100%; margin-top: 50px;" class="mx-auto">

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form class="form-horizontal" role="form" id="ib_form">

                        <h3>Setup your profile</h3>

                        <div class="form-group">
                            <label for="fullname">Your Full Name:</label>
                            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter Full Name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Choose Password:</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                        </div>

                        <div class="form-group">
                            <label for="confirm_password">Confirm Password:</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Re Enter password" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" id="ib_submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>

</div>

    <?php
    $extras = <<<EOF
    <script type="text/javascript">

    var block_msg = '<div class="md-preloader"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="32" width="32" viewbox="0 0 75 75"><circle cx="37.5" cy="37.5" r="33.5" stroke-width="6"/></svg></div>';

    var ib_submit = $("#ib_submit");
    var ib_box = $("#main-container");

    ib_submit.on('click', function(e) {

        e.preventDefault();
        ib_box.block({message: block_msg});

        $.post("post_profile.php", $('#ib_form').serialize())
            .done(function( data ) {


                if ($.isNumeric(data)) {

                    window.location = '../index.php';

                }
                else{
                    ib_box.unblock();
                    bootbox.alert(data);
                }


            });

    });

</script>
EOF;
    ?>

<?php echo CloudOnexInstaller::footer($extras); ?>

