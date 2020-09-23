<?php
/**
 * Smarty Internal Plugin Compile Debug
<<<<<<< HEAD
 * Compiles the {debug} tag.
 * It opens a window the the Smarty Debugging Console.
 *
 * @package    Smarty
 * @subpackage Compiler
 * @author     Uwe Tews
=======
 *
 * Compiles the {debug} tag.
 * It opens a window the the Smarty Debugging Console.
 *
 * @package Smarty
 * @subpackage Compiler
 * @author Uwe Tews
>>>>>>> old/master
 */

/**
 * Smarty Internal Plugin Compile Debug Class
 *
<<<<<<< HEAD
 * @package    Smarty
=======
 * @package Smarty
>>>>>>> old/master
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Debug extends Smarty_Internal_CompileBase
{
    /**
     * Compiles code for the {debug} tag
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
        // check and get attributes
        $_attr = $this->getAttributes($compiler, $args);

        // compile always as nocache
        $compiler->tag_nocache = true;

        // display debug template
<<<<<<< HEAD
        $_output =
            "<?php \$_smarty_debug = new Smarty_Internal_Debug;\n \$_smarty_debug->display_debug(\$_smarty_tpl);\n";
        $_output .= "unset(\$_smarty_debug);\n?>";
        return $_output;
    }
=======
        $_output = "<?php \$_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug(\$_smarty_tpl); ?>";

        return $_output;
    }

>>>>>>> old/master
}
