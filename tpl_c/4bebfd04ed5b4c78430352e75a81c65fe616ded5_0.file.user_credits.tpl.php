<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-07 18:05:15
  from 'C:\xampp\htdocs\Test\booked\tpl\Credits\user_credits.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60201dcb558a81_91985310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bebfd04ed5b4c78430352e75a81c65fe616ded5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Test\\booked\\tpl\\Credits\\user_credits.tpl',
      1 => 1600868990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:globalheader.tpl' => 1,
    'file:javascript-includes.tpl' => 1,
    'file:globalfooter.tpl' => 1,
  ),
),false)) {
function content_60201dcb558a81_91985310 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:globalheader.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="page-user-credits">

    <div class="default-box">
        <div>
            <h1 class="inline-block" style="width:100%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'YourCredits'),$_smarty_tpl ) );?>

                <div class="inline-block pull-right"><?php echo $_smarty_tpl->tpl_vars['CurrentCredits']->value;?>
</div>
            </h1>
        </div>

        <div>
            <ul class="nav nav-pills" role="tablist">
                <li class="nav-item active">
                    <a class="nav-link active" data-toggle="tab" href="#credit-log"
                       role="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'CreditHistory'),$_smarty_tpl ) );?>
</a>
                </li>

                <?php if ($_smarty_tpl->tpl_vars['AllowPurchasingCredits']->value && $_smarty_tpl->tpl_vars['IsCreditCostSet']->value) {?>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#purchase"
                           role="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'BuyMoreCredits'),$_smarty_tpl ) );?>
</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#transaction-log"
                           role="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'TransactionHistory'),$_smarty_tpl ) );?>
</a>
                    </li>
                <?php }?>
            </ul>
        </div>

        <div class="tab-content margin-top-25">
            <div class="tab-pane active" id="credit-log" role="tabpanel">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array('id'=>'creditLogIndicator'),$_smarty_tpl ) );?>

                <div id="credit-log-content">

                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['AllowPurchasingCredits']->value && $_smarty_tpl->tpl_vars['IsCreditCostSet']->value) {?>
                <div class="tab-pane" id="purchase" role="tabpanel">

                    <div class="col-xs-4">
                        <form role="form" name="purchaseCreditsForm" id="purchaseCreditsForm" method="post"
                              action="checkout.php">
                            <div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'EachCreditCosts'),$_smarty_tpl ) );?>
 <span class="cost"><?php echo $_smarty_tpl->tpl_vars['CreditCost']->value;?>
</span></div>
                            <div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Quantity'),$_smarty_tpl ) );?>

                                <input id="quantity" <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['formname'][0], array( array('key'=>'CREDIT_QUANTITY'),$_smarty_tpl ) );?>
 type="number"
                                       class="form-control inline-block" min="1"
                                       style="width:100px" value="1"/>
                            </div>
                            <div>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Total'),$_smarty_tpl ) );?>
 <span id="totalCost" class="cost"><?php echo $_smarty_tpl->tpl_vars['CreditCost']->value;?>
</span>
                            </div>
                            <button type="submit" class="btn btn-default col-xs-12"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>'Checkout'),$_smarty_tpl ) );?>
</button>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf_token'][0], array( array(),$_smarty_tpl ) );?>

                        </form>
                    </div>

                    <div class="col-xs-8">&nbsp;</div>
                    <div class="clearfix"></div>

                </div>

                <div class="tab-pane" id="transaction-log" role="tabpanel">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['indicator'][0], array( array('id'=>'transactionLogIndicator'),$_smarty_tpl ) );?>

                    <div id="transaction-log-content">

                    </div>
                </div>
            <?php }?>
        </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:javascript-includes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"user-credits.js"),$_smarty_tpl ) );?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['jsfile'][0], array( array('src'=>"ajax-helpers.js"),$_smarty_tpl ) );?>


</div>

<?php echo '<script'; ?>
 type="text/javascript">
    $(function () {

        var opts = {
            calcQuantityUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
?dr=calcQuantity&quantity=',
            creditLogUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
?dr=creditLog&page=[page]&pageSize=[pageSize]',
            transactionLogUrl: '<?php echo $_SERVER['SCRIPT_NAME'];?>
?dr=transactionLog&page=[page]&pageSize=[pageSize]'
        };

        var userCredits = new UserCredits(opts);
        userCredits.init();

        var url = document.location.toString();
        if (url.match('#')) {
            $('.nav-pills a[href="#' + url.split('#')[1] + '"]').tab('show');
        }

        $('.nav-pills a').on('shown.bs.tab', function (e) {
            window.location.hash = e.target.hash;
        });
    });
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:globalfooter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
