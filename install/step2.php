<?php
require 'base.php';
$all_passed = true;
?>
<?php echo CloudOnexInstaller::header('System requirements'); ?>
<body>

<div style="max-width: 800px; width: 100%; margin-top: 50px;" class="mx-auto">

    <div class="card">
        <div class="card-body">
            <div class="col-md-12">
                <h2>Checking system requirements</h2>
                <p>
                    Before continue to the next step, we're checking your <a target="_blank" href="https://www.cloudonex.com/business-suite/system-requirements">system requirements</a> .
                </p>
                <hr>
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>Requirement</th>
                        <th>Available</th>
                        <th>Comment</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <h3>PHP 7.3.0</h3>
                            <p>
                                We use the latest coding syntax of PHP, which requires a minimum version of PHP 7.3.0. Of course, you can use any higher version.
                            </p>
                        </td>
                        <td>

                            <?php if (
                                version_compare(PHP_VERSION, '7.3.0') >= 0
                            ) { ?>
                                <span class="svg-icon svg-icon-success"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
        <path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg></span>
                            <?php } else {$all_passed = false;} ?>

                        </td>
                        <td>
                            <?php if (
                                version_compare(PHP_VERSION, '7.3.0') >= 0
                            ) {
                                echo '<i class="fal fa-check"></i> Awesome! your PHP version is ' .
                                    PHP_VERSION;
                            } else {
                                $all_passed = false;
                            } ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <h3>PDO</h3>
                            <p>The business suite needs PDO to connect with your database securely.</p>
                        </td>
                        <td>
                            <?php if (extension_loaded('PDO')) {
                                $has_pdo = true; ?>
                                <span class="svg-icon svg-icon-success"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
        <path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg></span>
                                <?php
                            } else {
                                $all_passed = false;
                            } ?>
                        </td>
                        <td>
                            <?php if (isset($has_pdo)) { ?>

                                <i class="fal fa-check"></i> Cool!

                            <?php } else { ?>

                                <i class="fal fa-times-circle"></i> Oops! How come! it's not installed in <?php echo date(
                                    'Y'
                                ); ?>! If you manage your server, enable it. Or ask your hosting provider to enable it.

                            <?php } ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <h3>PDO MySQL</h3>
                            <p>PDO_MYSQL is a driver that implements the PHP Data Objects (PDO). For database, MySQL, or Maria DB, both will work.</p>
                        </td>
                        <td>
                            <?php if (extension_loaded('pdo_mysql')) {
                                $has_pdo_mysql = true; ?>
                                <span class="svg-icon svg-icon-success"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
        <path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg></span>
                                <?php
                            } else {
                                $all_passed = false;
                            } ?>
                        </td>
                        <td>
                            <?php if (isset($has_pdo_mysql)) { ?>

                                <i class="fal fa-check"></i> Stunning!

                                <?php } else { ?>

                                <i class="fal fa-times-circle"></i> Oops! How come! it's not installed in <?php echo date(
                                    'Y'
                                ); ?>! If you manage your server, enable it. Or ask your hosting provider to enable it.

                                <?php } ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <h3>curl</h3>
                            <p>Curl requires working with various APIs.</p>
                        </td>
                        <td>
                            <?php if (function_exists('curl_version')) {
                                $has_curl = true; ?>
                                <span class="svg-icon svg-icon-success"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
        <path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg></span>
                                <?php
                            } else {
                                $all_passed = false;
                            } ?>
                        </td>
                        <td>
                            <?php if (isset($has_curl)) { ?>

                                <i class="fal fa-check"></i> Astounding!

                                <?php } else { ?>

                                <i class="fal fa-times-circle"></i> Oops! How come! it's not installed in <?php echo date(
                                    'Y'
                                ); ?>! If you manage your server, enable it. Or ask your hosting provider to enable it.

                                <?php } ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <h3>GD</h3>
                            <p>GD(Graphics Library) requires to transform images and embed image in your pdf.</p>
                        </td>
                        <td>
                            <?php if (extension_loaded('gd')) {
                                $has_gd = true; ?>
                                <span class="svg-icon svg-icon-success"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
        <path d="M16.7689447,7.81768175 C17.1457787,7.41393107 17.7785676,7.39211077 18.1823183,7.76894473 C18.5860689,8.1457787 18.6078892,8.77856757 18.2310553,9.18231825 L11.2310553,16.6823183 C10.8654446,17.0740439 10.2560456,17.107974 9.84920863,16.7592566 L6.34920863,13.7592566 C5.92988278,13.3998345 5.88132125,12.7685345 6.2407434,12.3492086 C6.60016555,11.9298828 7.23146553,11.8813212 7.65079137,12.2407434 L10.4229928,14.616916 L16.7689447,7.81768175 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg></span>
                                <?php
                            } ?>
                        </td>
                        <td>
                            <?php if (isset($has_gd)) { ?>

                                <i class="fal fa-check"></i> Wondrous!

                                <?php } else { ?>

                                <i class="fal fa-times-circle"></i>
                                GD is not available. However, this will not prevent you from installation. You can enable it later. But remember, to generate your invoice with your shiny logo, the business suite requires GD.

                                <?php } ?>
                        </td>
                    </tr>

                    </tbody>
                </table>




                <?php if (!$all_passed) {
                    echo '<a href="javascript:;" class="btn btn-primary disabled">Correct The Problem To Continue</a>';
                } else {
                    echo '<a href="' .
                        $installer_base_url .
                        '/install/step3.php" class="btn btn-primary">Continue</a>';
                } ?>
            </div>
        </div>
    </div>

</div>

<?php echo CloudOnexInstaller::footer(); ?>

