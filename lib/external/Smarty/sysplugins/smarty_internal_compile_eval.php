<?php
/**
 * Smarty Internal Plugin Compile Eval
<<<<<<< HEAD
 * Compiles the {eval} tag.
 *
 * @package    Smarty
 * @subpackage Compiler
 * @author     Uwe Tews
=======
 *
 * Compiles the {eval} tag.
 *
 * @package Smarty
 * @subpackage Compiler
 * @author Uwe Tews
>>>>>>> old/master
 */

/**
 * Smarty Internal Plugin Compile Eval Class
 *
<<<<<<< HEAD
 * @package    Smarty
=======
 * @package Smarty
>>>>>>> old/master
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Eval extends Smarty_Internal_CompileBase
{
    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $required_attributes = array('var');
<<<<<<< HEAD

=======
>>>>>>> old/master
    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $optional_attributes = array('assign');
<<<<<<< HEAD

=======
>>>>>>> old/master
    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
<<<<<<< HEAD
    public $shorttag_order = array('var', 'assign');
=======
    public $shorttag_order = array('var','assign');
>>>>>>> old/master

    /**
     * Compiles code for the {eval} tag
     *
     * @param  array  $args     array with attributes from parser
     * @param  object $compiler compiler object
<<<<<<< HEAD
     *
=======
>>>>>>> old/master
     * @return string compiled code
     */
    public function compile($args, $compiler)
    {
<<<<<<< HEAD
        // check and get attributes
        $_attr = $this->getAttributes($compiler, $args);
        if (isset($_attr[ 'assign' ])) {
            // output will be stored in a smarty variable instead of being displayed
            $_assign = $_attr[ 'assign' ];
        }

        // create template object
        $_output = "\$_template = new {$compiler->smarty->template_class}('eval:'." . $_attr[ 'var' ] .
                   ", \$_smarty_tpl->smarty, \$_smarty_tpl);";
=======
        $this->required_attributes = array('var');
        $this->optional_attributes = array('assign');
        // check and get attributes
        $_attr = $this->getAttributes($compiler, $args);
        if (isset($_attr['assign'])) {
              // output will be stored in a smarty variable instead of beind displayed
            $_assign = $_attr['assign'];
        }

        // create template object
        $_output = "\$_template = new {$compiler->smarty->template_class}('eval:'.".$_attr['var'].", \$_smarty_tpl->smarty, \$_smarty_tpl);";
>>>>>>> old/master
        //was there an assign attribute?
        if (isset($_assign)) {
            $_output .= "\$_smarty_tpl->assign($_assign,\$_template->fetch());";
        } else {
            $_output .= "echo \$_template->fetch();";
        }

        return "<?php $_output ?>";
    }
<<<<<<< HEAD
=======

>>>>>>> old/master
}
