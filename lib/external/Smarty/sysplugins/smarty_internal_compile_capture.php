<?php
/**
 * Smarty Internal Plugin Compile Capture
<<<<<<< HEAD
 * Compiles the {capture} tag
 *
 * @package    Smarty
 * @subpackage Compiler
 * @author     Uwe Tews
=======
 *
 * Compiles the {capture} tag
 *
 * @package Smarty
 * @subpackage Compiler
 * @author Uwe Tews
>>>>>>> old/master
 */

/**
 * Smarty Internal Plugin Compile Capture Class
 *
<<<<<<< HEAD
 * @package    Smarty
=======
 * @package Smarty
>>>>>>> old/master
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Capture extends Smarty_Internal_CompileBase
{
    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $shorttag_order = array('name');
<<<<<<< HEAD

=======
>>>>>>> old/master
    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $optional_attributes = array('name', 'assign', 'append');

    /**
<<<<<<< HEAD
     * Compiles code for the {$smarty.capture.xxx}
     *
     * @param  array                            $args      array with attributes from parser
     * @param \Smarty_Internal_TemplateCompilerBase$compiler  compiler object
     * @param  array                            $parameter array with compilation parameter
     *
     * @return string compiled code
     * @throws \SmartyCompilerException
     */
    public static function compileSpecialVariable($args, Smarty_Internal_TemplateCompilerBase $compiler, $parameter = null)
    {
        $tag = trim($parameter[ 0 ], '"\'');
        $name = isset($parameter[ 1 ]) ? $compiler->getId($parameter[ 1 ]) : false;
        if (!$name) {
            $compiler->trigger_template_error("missing or illegal \$smarty.{$tag} name attribute", null, true);
        }
        return "\$_smarty_tpl->smarty->ext->_capture->getBuffer(\$_smarty_tpl, '{$name}')";
    }

    /**
     * Compiles code for the {capture} tag
     *
     * @param  array                            $args     array with attributes from parser
     * @param \Smarty_Internal_TemplateCompilerBase $compiler compiler object
     * @param null                              $parameter
     *
     * @return string compiled code
     */
    public function compile($args, Smarty_Internal_TemplateCompilerBase $compiler, $parameter = null)
    {
        // check and get attributes
        $_attr = $this->getAttributes($compiler, $args, $parameter, 'capture');

        $buffer = isset($_attr[ 'name' ]) ? $_attr[ 'name' ] : "'default'";
        $assign = isset($_attr[ 'assign' ]) ? $_attr[ 'assign' ] : 'null';
        $append = isset($_attr[ 'append' ]) ? $_attr[ 'append' ] : 'null';

        $compiler->_cache[ 'capture_stack' ][] = array($compiler->nocache);
        // maybe nocache because of nocache variables
        $compiler->nocache = $compiler->nocache | $compiler->tag_nocache;
        $_output = "<?php \$_smarty_tpl->smarty->ext->_capture->open(\$_smarty_tpl, $buffer, $assign, $append);\n?>\n";

        return $_output;
    }
=======
     * Compiles code for the {capture} tag
     *
     * @param  array  $args     array with attributes from parser
     * @param  object $compiler compiler object
     * @return string compiled code
     */
    public function compile($args, $compiler)
    {
        // check and get attributes
        $_attr = $this->getAttributes($compiler, $args);

        $buffer = isset($_attr['name']) ? $_attr['name'] : "'default'";
        $assign = isset($_attr['assign']) ? $_attr['assign'] : 'null';
        $append = isset($_attr['append']) ? $_attr['append'] : 'null';

        $compiler->_capture_stack[0][] = array($buffer, $assign, $append, $compiler->nocache);
        // maybe nocache because of nocache variables
        $compiler->nocache = $compiler->nocache | $compiler->tag_nocache;
        $_output = "<?php \$_smarty_tpl->_capture_stack[0][] = array($buffer, $assign, $append); ob_start(); ?>";

        return $_output;
    }

>>>>>>> old/master
}

/**
 * Smarty Internal Plugin Compile Captureclose Class
 *
<<<<<<< HEAD
 * @package    Smarty
=======
 * @package Smarty
>>>>>>> old/master
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_CaptureClose extends Smarty_Internal_CompileBase
{
    /**
     * Compiles code for the {/capture} tag
     *
<<<<<<< HEAD
     * @param  array                            $args     array with attributes from parser
     * @param \Smarty_Internal_TemplateCompilerBase $compiler compiler object
     * @param null                              $parameter
     *
     * @return string compiled code
     */
    public function compile($args, Smarty_Internal_TemplateCompilerBase $compiler, $parameter)
    {
        // check and get attributes
        $_attr = $this->getAttributes($compiler, $args, $parameter, '/capture');
=======
     * @param  array  $args     array with attributes from parser
     * @param  object $compiler compiler object
     * @return string compiled code
     */
    public function compile($args, $compiler)
    {
        // check and get attributes
        $_attr = $this->getAttributes($compiler, $args);
>>>>>>> old/master
        // must endblock be nocache?
        if ($compiler->nocache) {
            $compiler->tag_nocache = true;
        }

<<<<<<< HEAD
        list($compiler->nocache) = array_pop($compiler->_cache[ 'capture_stack' ]);

        return "<?php \$_smarty_tpl->smarty->ext->_capture->close(\$_smarty_tpl);\n?>\n";
    }
=======
        list($buffer, $assign, $append, $compiler->nocache) = array_pop($compiler->_capture_stack[0]);

        $_output = "<?php list(\$_capture_buffer, \$_capture_assign, \$_capture_append) = array_pop(\$_smarty_tpl->_capture_stack[0]);\n";
        $_output .= "if (!empty(\$_capture_buffer)) {\n";
        $_output .= " if (isset(\$_capture_assign)) \$_smarty_tpl->assign(\$_capture_assign, ob_get_contents());\n";
        $_output .= " if (isset( \$_capture_append)) \$_smarty_tpl->append( \$_capture_append, ob_get_contents());\n";
        $_output .= " Smarty::\$_smarty_vars['capture'][\$_capture_buffer]=ob_get_clean();\n";
        $_output .= "} else \$_smarty_tpl->capture_error();?>";

        return $_output;
    }

>>>>>>> old/master
}
