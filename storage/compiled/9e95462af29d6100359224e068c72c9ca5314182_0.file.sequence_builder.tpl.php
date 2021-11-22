<?php
/* Smarty version 3.1.39, created on 2021-06-02 09:06:00
  from '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/sequence_builder.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b78238576143_32450418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e95462af29d6100359224e068c72c9ca5314182' => 
    array (
      0 => '/Users/razib/Documents/valet/business-suite/ui/theme/default/marketing_crm/admin/sequence_builder.tpl',
      1 => 1622639157,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b78238576143_32450418 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54290211260b7823856fbc6_78179182', "head");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8311031160b78238571727_20740899', "content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178186696860b78238575980_01268129', 'script');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_admin']->value));
}
/* {block "head"} */
class Block_54290211260b7823856fbc6_78179182 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_54290211260b7823856fbc6_78179182',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <style>
        .timeline {
            border-left: 3px solid #727cf5;
            border-bottom-right-radius: 4px;
            border-top-right-radius: 4px;
            background: rgba(114, 124, 245, 0.09);
            margin: 0 auto;
            letter-spacing: 0.2px;
            position: relative;
            line-height: 1.4em;
            font-size: 1.03em;
            padding: 50px;
            list-style: none;
            text-align: left;
            max-width: 40%;
        }

        .timeline:before {
            content: none;
        }

        @media (max-width: 767px) {
            .timeline {
                max-width: 98%;
                padding: 25px;
            }
        }

        .timeline h1 {
            font-weight: 300;
            font-size: 1.4em;
        }

        .timeline h2,
        .timeline h3 {
            font-weight: 600;
            font-size: 1rem;
            margin-bottom: 10px;
        }

        .timeline .event {
            border-bottom: 1px dashed #e8ebf1;
            padding-bottom: 25px;
            margin-bottom: 25px;
            position: relative;
        }

        @media (max-width: 767px) {
            .timeline .event {
                padding-top: 30px;
            }
        }

        .timeline .event:last-of-type {
            padding-bottom: 0;
            margin-bottom: 0;
            border: none;
        }

        .timeline .event:before,
        .timeline .event:after {
            position: absolute;
            display: block;
            top: 0;
        }

        .timeline .event:before {
            left: -207px;
            content: attr(data-date);
            text-align: right;
            font-weight: 100;
            font-size: 0.9em;
            min-width: 120px;
        }

        @media (max-width: 767px) {
            .timeline .event:before {
                left: 0px;
                text-align: left;
            }
        }

        .timeline .event:after {
            -webkit-box-shadow: 0 0 0 3px #727cf5;
            box-shadow: 0 0 0 3px #727cf5;
            left: -55.8px;
            background: #fff;
            border-radius: 50%;
            height: 9px;
            width: 9px;
            content: "";
            top: 5px;
        }

        @media (max-width: 767px) {
            .timeline .event:after {
                left: -31.8px;
            }
        }

        .rtl .timeline {
            border-left: 0;
            text-align: right;
            border-bottom-right-radius: 0;
            border-top-right-radius: 0;
            border-bottom-left-radius: 4px;
            border-top-left-radius: 4px;
            border-right: 3px solid #727cf5;
        }

        .rtl .timeline .event::before {
            left: 0;
            right: -170px;
        }

        .rtl .timeline .event::after {
            left: 0;
            right: -55.8px;
        }
    </style>
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_8311031160b78238571727_20740899 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8311031160b78238571727_20740899',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title"><?php echo $_smarty_tpl->tpl_vars['sequence']->value->name;?>
</h6>
                        <div id="content">
                            <ul class="timeline">
                                <li class="event" data-date="2:30 - 4:00pm">
                                    <h3>Send Welcome Email</h3>
                                    <p>Welcome to CloudOnex</p>

                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="#">Edit</a>
                                        <a class="btn btn-danger" href="#">Delete</a>
                                    </div>

                                </li>
                                <li class="event">
                                    <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
marketing/sequence-add-step/<?php echo $_smarty_tpl->tpl_vars['sequence']->value->id;?>
">Add Step</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
/* {block 'script'} */
class Block_178186696860b78238575980_01268129 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_178186696860b78238575980_01268129',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
>

    <?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'script'} */
}
