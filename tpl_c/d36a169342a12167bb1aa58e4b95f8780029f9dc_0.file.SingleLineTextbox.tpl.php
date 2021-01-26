<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-23 10:25:28
  from 'C:\xampp\htdocs\Tested\booked\tpl\Controls\Attributes\SingleLineTextbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_600beb88032635_34919501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd36a169342a12167bb1aa58e4b95f8780029f9dc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tested\\booked\\tpl\\Controls\\Attributes\\SingleLineTextbox.tpl',
      1 => 1600868990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600beb88032635_34919501 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group <?php if (!$_smarty_tpl->tpl_vars['searchmode']->value && $_smarty_tpl->tpl_vars['attribute']->value->Required()) {?>has-feedback<?php }?> <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
	<label class="customAttribute <?php if ($_smarty_tpl->tpl_vars['readonly']->value) {?>readonly<?php } elseif ($_smarty_tpl->tpl_vars['searchmode']->value) {?>search<?php } else { ?>standard<?php }?>" for="<?php echo $_smarty_tpl->tpl_vars['attributeId']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['attribute']->value->Label();?>
</label>
	<?php if ($_smarty_tpl->tpl_vars['readonly']->value) {?>
		<span class="attributeValue <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['attribute']->value->Value();?>
</span>
	<?php } else { ?>
		<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['attributeId']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['attributeName']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['attribute']->value->Value();?>
"
			   class="customAttribute form-control <?php echo $_smarty_tpl->tpl_vars['inputClass']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['attribute']->value->Required() && !$_smarty_tpl->tpl_vars['searchmode']->value) {?>required<?php }?>/>
		<?php if ($_smarty_tpl->tpl_vars['attribute']->value->Required() && !$_smarty_tpl->tpl_vars['searchmode']->value) {?>
		<i class="glyphicon glyphicon-asterisk form-control-feedback" data-bv-icon-for="<?php echo $_smarty_tpl->tpl_vars['attributeId']->value;?>
"></i>
		<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['searchmode']->value) {?>
            <span class="searchclear searchclear-label glyphicon glyphicon-remove-circle" ref="<?php echo $_smarty_tpl->tpl_vars['attributeId']->value;?>
"></span>
        <?php }?>
	<?php }?>
</div><?php }
}
