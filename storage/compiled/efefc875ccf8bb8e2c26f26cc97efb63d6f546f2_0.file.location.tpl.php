<?php
/* Smarty version 3.1.39, created on 2021-06-24 06:01:04
  from '/Users/razib/Documents/valet/business-suite/apps/square/views/location.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60d457e0e85880_38147295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efefc875ccf8bb8e2c26f26cc97efb63d6f546f2' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/apps/square/views/location.tpl',
      1 => 1556267286,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d457e0e85880_38147295 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">



    <div class="col-md-6">


        <div class="ibox float-e-margins" id="ib_box">
            <div class="ibox-title">

                <h5>Get Location ID</h5>
            </div>
            <div class="ibox-content">

                <form role="form" method="post" id="ib_form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
square/init/get_location/">
                    <div class="form-group">
                        <label for="access_token">Access Token</label>
                        <input type="text" class="form-control" name="access_token" id="access_token">
                    </div>


                    <button type="submit" id="ib_submit" class="btn btn-primary">Submit</button>
                </form>



                <div id="resp">

                </div>


            </div>
        </div>




    </div>

</div><?php }
}
