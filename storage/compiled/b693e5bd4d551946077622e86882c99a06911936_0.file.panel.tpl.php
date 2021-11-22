<?php
/* Smarty version 3.1.39, created on 2021-06-24 07:25:16
  from '/Users/razib/Documents/valet/business-suite/apps/square/views/panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60d46b9cc4b618_03855353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b693e5bd4d551946077622e86882c99a06911936' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/square/views/panel.tpl',
      1 => 1624533905,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d46b9cc4b618_03855353 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108459205760d46b9cc388e1_72331239', "head");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46424439860d46b9cc41e79_18399284', "content_body");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91900666260d46b9cc4ae11_56345537', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/base.tpl");
}
/* {block "head"} */
class Block_108459205760d46b9cc388e1_72331239 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_108459205760d46b9cc388e1_72331239',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <style>
        @media (min-width: 992px){
            .clx-fixed-navigation:not(.clx-navigation-type-top):not(.nav-function-hidden):not(.nav-function-minify) .page-content-wrapper {
                padding-left: 0;
            }
        }
    </style>


    <?php if ($_smarty_tpl->tpl_vars['gateway']->value->mode == 'Live') {?>
        <?php echo '<script'; ?>
 type="text/javascript" src="https://web.squarecdn.com/v1/square.js"><?php echo '</script'; ?>
>
        <?php } else { ?>
        <?php echo '<script'; ?>
 type="text/javascript" src="https://sandbox.web.squarecdn.com/v1/square.js"><?php echo '</script'; ?>
>
    <?php }?>

    <?php echo '<script'; ?>
>
        const appId = '<?php echo $_smarty_tpl->tpl_vars['gateway']->value->c1;?>
';
        const locationId = '<?php echo $_smarty_tpl->tpl_vars['gateway']->value->c3;?>
';
        async function initializeCard(payments) {
            const card = await payments.card();
            await card.attach('#card-container');
            return card;
        }

        // Call this function to send a payment token, buyer name, and other details
        // to the project server code so that a payment can be created with
        // Payments API
        async function createPayment(token) {
            const body = JSON.stringify({
                locationId,
                sourceId: token,
            });
            const paymentResponse = await fetch('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
square/payments/process/<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
/token_<?php echo $_smarty_tpl->tpl_vars['invoice']->value->vtoken;?>
/', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body,
            });
            if (paymentResponse.ok) {
              //  return paymentResponse.json();
                window.location = '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
client/iview/<?php echo $_smarty_tpl->tpl_vars['invoice']->value->id;?>
/token_<?php echo $_smarty_tpl->tpl_vars['invoice']->value->vtoken;?>
';
            }
            const errorBody = await paymentResponse.text();
            throw new Error(errorBody);
        }

        // This function tokenizes a payment method.
        // The ‘error’ thrown from this async function denotes a failed tokenization,
        // which is due to buyer error (such as an expired card). It is up to the
        // developer to handle the error and provide the buyer the chance to fix
        // their mistakes.
        async function tokenize(paymentMethod) {
            const tokenResult = await paymentMethod.tokenize();
            if (tokenResult.status === 'OK') {
                return tokenResult.token;
            } else {
                let errorMessage = `Tokenization failed-status: ${ tokenResult.status }`;
                if (tokenResult.errors) {
                    errorMessage += ` and errors: ${ JSON.stringify(
                    tokenResult.errors
                    ) }`;
                }
                throw new Error(errorMessage);
            }
        }

        // Helper method for displaying the Payment Status on the screen.
        // status is either SUCCESS or FAILURE;
        function displayPaymentResults(status) {
            const statusContainer = document.getElementById(
                'payment-status-container'
            );
            if (status === 'SUCCESS') {
                statusContainer.classList.remove('is-failure');
                statusContainer.classList.add('is-success');
            } else {
                statusContainer.classList.remove('is-success');
                statusContainer.classList.add('is-failure');
            }

            statusContainer.style.visibility = 'visible';
        }


        document.addEventListener('DOMContentLoaded', async function () {
            if (!window.Square) {
                throw new Error('Square.js failed to load properly');
            }
            const payments = window.Square.payments(appId, locationId);
            let card;
            try {
                card = await initializeCard(payments);
            } catch (e) {
                console.error('Initializing Card failed', e);
                return;
            }

            async function handlePaymentMethodSubmission(event, paymentMethod) {
                event.preventDefault();

                try {
                    // disable the submit button as we await tokenization and make a
                    // payment request.
                    cardButton.disabled = true;
                    const token = await tokenize(paymentMethod);
                    const paymentResults = await createPayment(token);
                    displayPaymentResults('SUCCESS');

                    console.debug('Payment Success', paymentResults);
                } catch (e) {
                    cardButton.disabled = false;
                    displayPaymentResults('FAILURE');
                    console.error(e.message);
                }
            }

            const cardButton = document.getElementById(
                'card-button'
            );
            cardButton.addEventListener('click', async function (event) {
                await handlePaymentMethodSubmission(event, card);
            });

        });
    <?php echo '</script'; ?>
>




<?php
}
}
/* {/block "head"} */
/* {block "content_body"} */
class Block_46424439860d46b9cc41e79_18399284 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_body' => 
  array (
    0 => 'Block_46424439860d46b9cc41e79_18399284',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="page-content-wrapper bg-transparent m-0">
        <div class="height-10 w-100 shadow-sm px-4 bg-brand-gradient">
            <div class="d-flex align-items-center container p-0">
                <div class="page-logo width-mobile-auto m-0 align-items-center justify-content-center p-0 bg-transparent bg-img-none shadow-0 height-9 border-0">
                    <a href="<?php echo APP_URL;?>
" class="page-logo-link press-scale-down d-flex align-items-center">
                        <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['logo_square']))) {?>
                            <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
/storage/system/<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['logo_square'];
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable3 = ob_get_clean();
echo $_prefixVariable3;?>
" aria-roledescription="logo">
                        <?php } else { ?>
                            <img src="<?php ob_start();
echo APP_URL;
$_prefixVariable4 = ob_get_clean();
echo $_prefixVariable4;?>
/storage/system/logo-512x512.png?v=2" alt="<?php ob_start();
echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];
$_prefixVariable5 = ob_get_clean();
echo $_prefixVariable5;?>
" aria-roledescription="logo">
                        <?php }?>
                        <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['logo_text']))) {?>
                            <span class="page-logo-text mr-1"><?php echo $_smarty_tpl->tpl_vars['config']->value['logo_text'];?>
</span>
                        <?php } else { ?>
                             
                        <?php }?>
                    </a>
                </div>


            </div>
        </div>
        <div class="flex-1">
            <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">

                <div class="mx-auto" style="max-width: 600px;">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h3 class="text-muted"><?php echo __('Invoice');?>
</h3>
                                    <h2><?php echo cloudonex_get_invoice_number($_smarty_tpl->tpl_vars['invoice']->value);?>
</h2>
                                </div>
                                <div class="col text-right">
                                    <h3 class="text-muted"><?php echo __('Amount');?>
</h3>
                                    <h2><?php echo formatCurrency($_smarty_tpl->tpl_vars['amount']->value/100,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</h2>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <h3><?php echo $_smarty_tpl->tpl_vars['contact']->value->account;?>
</h3>
                            <div class="hr-line-dashed"></div>

                            <form id="payment-form">
                                <div id="card-container"></div>
                                <button id="card-button" type="button" class="btn btn-primary">Pay <?php echo formatCurrency($_smarty_tpl->tpl_vars['amount']->value/100,$_smarty_tpl->tpl_vars['config']->value['home_currency']);?>
</button>
                            </form>
                            <div id="payment-status-container"></div>

                        </div>
                    </div>
                </div>

                <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center">
                    &copy; <?php echo date('Y');?>
 <?php echo $_smarty_tpl->tpl_vars['config']->value['CompanyName'];?>

                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content_body"} */
/* {block "script"} */
class Block_91900666260d46b9cc4ae11_56345537 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_91900666260d46b9cc4ae11_56345537',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        $(function () {



        });
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
}
