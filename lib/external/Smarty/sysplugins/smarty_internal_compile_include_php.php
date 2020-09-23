<?php
/**
 * Smarty Internal Plugin Compile Include PHP
<<<<<<< HEAD
 * Compiles the {include_php} tag
 *
 * @package    Smarty
 * @subpackage Compiler
 * @author     Uwe Tews
=======
 *
 * Compiles the {include_php} tag
 *
 * @package Smarty
 * @subpackage Compiler
 * @author Uwe Tews
>>>>>>> old/master
 */

/**
 * Smarty Internal Plugin Compile Insert Class
 *
<<<<<<< HEAD
 * @package    Smarty
=======
 * @package Smarty
>>>>>>> old/master
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Include_Php extends Smarty_Internal_CompileBase
{
    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $required_attributes = array('file');
<<<<<<< HEAD

=======
>>>>>>> old/master
    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $shorttag_order = array('file');
<<<<<<< HEAD

=======
>>>>>>> old/master
    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $optional_attributes = array('once', 'assign');

    /**
     * Compiles code for the {include_php} tag
     *
<<<<<<< HEAD
     * @param  array                                $args     array with attributes from parser
     * @param \Smarty_Internal_TemplateCompilerBase $compiler compiler object
     *
     * @return string
     * @throws \SmartyCompilerException
     * @throws \SmartyException
     */
    public function compile($args, Smarty_Internal_TemplateCompilerBase $compiler)
=======
     * @param  array  $args     array with attributes from parser
     * @param  object $compiler compiler object
     * @return string compiled code
     */
    public function compile($args, $compiler)
>>>>>>> old/master
    {
        if (!($compiler->smarty instanceof SmartyBC)) {
            throw new SmartyException("{include_php} is deprecated, use SmartyBC class to enable");
        }
        // check and get attributes
        $_attr = $this->getAttributes($compiler, $args);

<<<<<<< HEAD
        /** @var Smarty_Internal_Template $_smarty_tpl
         * used in evaluated code
         */
        $_smarty_tpl = $compiler->template;
        $_filepath = false;
        $_file = null;
        eval('$_file = @' . $_attr[ 'file' ] . ';');
        if (!isset($compiler->smarty->security_policy) && file_exists($_file)) {
            $_filepath = $compiler->smarty->_realpath($_file, true);
=======
        $_output = '<?php ';

        $_smarty_tpl = $compiler->template;
        $_filepath = false;
        eval('$_file = ' . $_attr['file'] . ';');
        if (!isset($compiler->smarty->security_policy) && file_exists($_file)) {
            $_filepath = $_file;
>>>>>>> old/master
        } else {
            if (isset($compiler->smarty->security_policy)) {
                $_dir = $compiler->smarty->security_policy->trusted_dir;
            } else {
                $_dir = $compiler->smarty->trusted_dir;
            }
            if (!empty($_dir)) {
                foreach ((array) $_dir as $_script_dir) {
<<<<<<< HEAD
                    $_path = $compiler->smarty->_realpath($_script_dir . DS . $_file, true);
                    if (file_exists($_path)) {
                        $_filepath = $_path;
=======
                    $_script_dir = rtrim($_script_dir, '/\\') . DS;
                    if (file_exists($_script_dir . $_file)) {
                        $_filepath = $_script_dir .  $_file;
>>>>>>> old/master
                        break;
                    }
                }
            }
        }
        if ($_filepath == false) {
<<<<<<< HEAD
            $compiler->trigger_template_error("{include_php} file '{$_file}' is not readable", null, true);
=======
            $compiler->trigger_template_error("{include_php} file '{$_file}' is not readable", $compiler->lex->taglineno);
>>>>>>> old/master
        }

        if (isset($compiler->smarty->security_policy)) {
            $compiler->smarty->security_policy->isTrustedPHPDir($_filepath);
        }

<<<<<<< HEAD
        if (isset($_attr[ 'assign' ])) {
            // output will be stored in a smarty variable instead of being displayed
            $_assign = $_attr[ 'assign' ];
        }
        $_once = '_once';
        if (isset($_attr[ 'once' ])) {
            if ($_attr[ 'once' ] == 'false') {
=======
        if (isset($_attr['assign'])) {
            // output will be stored in a smarty variable instead of being displayed
            $_assign = $_attr['assign'];
        }
        $_once = '_once';
        if (isset($_attr['once'])) {
            if ($_attr['once'] == 'false') {
>>>>>>> old/master
                $_once = '';
            }
        }

        if (isset($_assign)) {
<<<<<<< HEAD
            return "<?php ob_start();\ninclude{$_once} ('{$_filepath}');\n\$_smarty_tpl->assign({$_assign},ob_get_clean());\n?>";
=======
            return "<?php ob_start(); include{$_once} ('{$_filepath}'); \$_smarty_tpl->assign({$_assign},ob_get_contents()); ob_end_clean();?>";
>>>>>>> old/master
        } else {
            return "<?php include{$_once} ('{$_filepath}');?>\n";
        }
    }
<<<<<<< HEAD
=======

>>>>>>> old/master
}
