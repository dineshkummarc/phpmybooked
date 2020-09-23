<?php
/**
 * Smarty Internal Plugin Compile Function_Call
<<<<<<< HEAD
 * Compiles the calls of user defined tags defined by {function}
 *
 * @package    Smarty
 * @subpackage Compiler
 * @author     Uwe Tews
=======
 *
 * Compiles the calls of user defined tags defined by {function}
 *
 * @package Smarty
 * @subpackage Compiler
 * @author Uwe Tews
>>>>>>> old/master
 */

/**
 * Smarty Internal Plugin Compile Function_Call Class
 *
<<<<<<< HEAD
 * @package    Smarty
=======
 * @package Smarty
>>>>>>> old/master
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Call extends Smarty_Internal_CompileBase
{
    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $required_attributes = array('name');
<<<<<<< HEAD

=======
>>>>>>> old/master
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
    public $optional_attributes = array('_any');

    /**
     * Compiles the calls of user defined tags defined by {function}
     *
<<<<<<< HEAD
     * @param  array  $args     array with attributes from parser
     * @param  object $compiler compiler object
     *
=======
     * @param  array  $args      array with attributes from parser
     * @param  object $compiler  compiler object
     * @param  array  $parameter array with compilation parameter
>>>>>>> old/master
     * @return string compiled code
     */
    public function compile($args, $compiler)
    {
        // check and get attributes
        $_attr = $this->getAttributes($compiler, $args);
        // save possible attributes
<<<<<<< HEAD
        if (isset($_attr[ 'assign' ])) {
            // output will be stored in a smarty variable instead of being displayed
            $_assign = $_attr[ 'assign' ];
        }
        //$_name = trim($_attr['name'], "'\"");
        $_name = $_attr[ 'name' ];
        unset($_attr[ 'name' ], $_attr[ 'assign' ], $_attr[ 'nocache' ]);
        // set flag (compiled code of {function} must be included in cache file
        if (!$compiler->template->caching || $compiler->nocache || $compiler->tag_nocache) {
=======
        if (isset($_attr['assign'])) {
            // output will be stored in a smarty variable instead of beind displayed
            $_assign = $_attr['assign'];
        }
        $_name = $_attr['name'];
        if ($compiler->compiles_template_function) {
            $compiler->called_functions[] = trim($_name, "'\"");
        }
        unset($_attr['name'], $_attr['assign'], $_attr['nocache']);
        // set flag (compiled code of {function} must be included in cache file
        if ($compiler->nocache || $compiler->tag_nocache) {
>>>>>>> old/master
            $_nocache = 'true';
        } else {
            $_nocache = 'false';
        }
        $_paramsArray = array();
        foreach ($_attr as $_key => $_value) {
            if (is_int($_key)) {
                $_paramsArray[] = "$_key=>$_value";
            } else {
                $_paramsArray[] = "'$_key'=>$_value";
            }
        }
<<<<<<< HEAD
        $_params = 'array(' . implode(",", $_paramsArray) . ')';
        //$compiler->suppressNocacheProcessing = true;
        // was there an assign attribute
        if (isset($_assign)) {
            $_output =
                "<?php ob_start();\n\$_smarty_tpl->ext->_tplFunction->callTemplateFunction(\$_smarty_tpl, {$_name}, {$_params}, {$_nocache});\n\$_smarty_tpl->assign({$_assign}, ob_get_clean());?>\n";
        } else {
            $_output =
                "<?php \$_smarty_tpl->ext->_tplFunction->callTemplateFunction(\$_smarty_tpl, {$_name}, {$_params}, {$_nocache});?>\n";
        }
        return $_output;
    }
=======
        if (isset($compiler->template->properties['function'][$_name]['parameter'])) {
            foreach ($compiler->template->properties['function'][$_name]['parameter'] as $_key => $_value) {
                if (!isset($_attr[$_key])) {
                    if (is_int($_key)) {
                        $_paramsArray[] = "$_key=>$_value";
                    } else {
                        $_paramsArray[] = "'$_key'=>$_value";
                    }
                }
            }
        } elseif (isset($compiler->smarty->template_functions[$_name]['parameter'])) {
            foreach ($compiler->smarty->template_functions[$_name]['parameter'] as $_key => $_value) {
                if (!isset($_attr[$_key])) {
                    if (is_int($_key)) {
                        $_paramsArray[] = "$_key=>$_value";
                    } else {
                        $_paramsArray[] = "'$_key'=>$_value";
                    }
                }
            }
        }
        //varibale name?
        if (!(strpos($_name, '$') === false)) {
            $call_cache = $_name;
            $call_function = '$tmp = "smarty_template_function_".' . $_name . '; $tmp';
        } else {
            $_name = trim($_name, "'\"");
            $call_cache = "'{$_name}'";
            $call_function = 'smarty_template_function_' . $_name;
        }

        $_params = 'array(' . implode(",", $_paramsArray) . ')';
        $_hash = str_replace('-', '_', $compiler->template->properties['nocache_hash']);
        // was there an assign attribute
        if (isset($_assign)) {
            if ($compiler->template->caching) {
                $_output = "<?php ob_start(); Smarty_Internal_Function_Call_Handler::call ({$call_cache},\$_smarty_tpl,{$_params},'{$_hash}',{$_nocache}); \$_smarty_tpl->assign({$_assign}, ob_get_clean());?>\n";
            } else {
                $_output = "<?php ob_start(); {$call_function}(\$_smarty_tpl,{$_params}); \$_smarty_tpl->assign({$_assign}, ob_get_clean());?>\n";
            }
        } else {
            if ($compiler->template->caching) {
                $_output = "<?php Smarty_Internal_Function_Call_Handler::call ({$call_cache},\$_smarty_tpl,{$_params},'{$_hash}',{$_nocache});?>\n";
            } else {
                $_output = "<?php {$call_function}(\$_smarty_tpl,{$_params});?>\n";
            }
        }

        return $_output;
    }

>>>>>>> old/master
}
