<?php
/**
 * Smarty Internal Plugin Compile Continue
<<<<<<< HEAD
 * Compiles the {continue} tag
 *
 * @package    Smarty
 * @subpackage Compiler
 * @author     Uwe Tews
=======
 *
 * Compiles the {continue} tag
 *
 * @package Smarty
 * @subpackage Compiler
 * @author Uwe Tews
>>>>>>> old/master
 */

/**
 * Smarty Internal Plugin Compile Continue Class
 *
<<<<<<< HEAD
 * @package    Smarty
=======
 * @package Smarty
>>>>>>> old/master
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Continue extends Smarty_Internal_CompileBase
{
    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $optional_attributes = array('levels');
<<<<<<< HEAD

=======
>>>>>>> old/master
    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $shorttag_order = array('levels');

    /**
     * Compiles code for the {continue} tag
     *
<<<<<<< HEAD
     * @param  array                                $args      array with attributes from parser
     * @param \Smarty_Internal_TemplateCompilerBase $compiler  compiler object
     * @param  array                                $parameter array with compilation parameter
     *
     * @return string compiled code
     * @throws \SmartyCompilerException
     */
    public function compile($args, Smarty_Internal_TemplateCompilerBase $compiler, $parameter)
=======
     * @param  array  $args      array with attributes from parser
     * @param  object $compiler  compiler object
     * @param  array  $parameter array with compilation parameter
     * @return string compiled code
     */
    public function compile($args, $compiler, $parameter)
>>>>>>> old/master
    {
        static $_is_loopy = array('for' => true, 'foreach' => true, 'while' => true, 'section' => true);
        // check and get attributes
        $_attr = $this->getAttributes($compiler, $args);

<<<<<<< HEAD
        if ($_attr[ 'nocache' ] === true) {
            $compiler->trigger_template_error('nocache option not allowed', null, true);
        }

        if (isset($_attr[ 'levels' ])) {
            if (!is_numeric($_attr[ 'levels' ])) {
                $compiler->trigger_template_error('level attribute must be a numeric constant', null, true);
            }
            $_levels = $_attr[ 'levels' ];
=======
        if ($_attr['nocache'] === true) {
            $compiler->trigger_template_error('nocache option not allowed', $compiler->lex->taglineno);
        }

        if (isset($_attr['levels'])) {
            if (!is_numeric($_attr['levels'])) {
                $compiler->trigger_template_error('level attribute must be a numeric constant', $compiler->lex->taglineno);
            }
            $_levels = $_attr['levels'];
>>>>>>> old/master
        } else {
            $_levels = 1;
        }
        $level_count = $_levels;
        $stack_count = count($compiler->_tag_stack) - 1;
        while ($level_count > 0 && $stack_count >= 0) {
<<<<<<< HEAD
            if (isset($_is_loopy[ $compiler->_tag_stack[ $stack_count ][ 0 ] ])) {
                $level_count --;
            }
            $stack_count --;
        }
        if ($level_count != 0) {
            $compiler->trigger_template_error("cannot continue {$_levels} level(s)", null, true);
        }

        return "<?php continue {$_levels};?>";
    }
=======
            if (isset($_is_loopy[$compiler->_tag_stack[$stack_count][0]])) {
                $level_count--;
            }
            $stack_count--;
        }
        if ($level_count != 0) {
            $compiler->trigger_template_error("cannot continue {$_levels} level(s)", $compiler->lex->taglineno);
        }

        return "<?php continue {$_levels}?>";
    }

>>>>>>> old/master
}
