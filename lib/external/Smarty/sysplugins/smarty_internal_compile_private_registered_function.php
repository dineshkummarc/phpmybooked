<?php
/**
 * Smarty Internal Plugin Compile Registered Function
<<<<<<< HEAD
 * Compiles code for the execution of a registered function
 *
 * @package    Smarty
 * @subpackage Compiler
 * @author     Uwe Tews
=======
 *
 * Compiles code for the execution of a registered function
 *
 * @package Smarty
 * @subpackage Compiler
 * @author Uwe Tews
>>>>>>> old/master
 */

/**
 * Smarty Internal Plugin Compile Registered Function Class
 *
<<<<<<< HEAD
 * @package    Smarty
=======
 * @package Smarty
>>>>>>> old/master
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Private_Registered_Function extends Smarty_Internal_CompileBase
{
    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $optional_attributes = array('_any');

    /**
     * Compiles code for the execution of a registered function
     *
<<<<<<< HEAD
     * @param  array                                $args      array with attributes from parser
     * @param \Smarty_Internal_TemplateCompilerBase $compiler  compiler object
     * @param  array                                $parameter array with compilation parameter
     * @param  string                               $tag       name of function
     *
     * @return string compiled code
     */
    public function compile($args, Smarty_Internal_TemplateCompilerBase $compiler, $parameter, $tag)
    {
        // check and get attributes
        $_attr = $this->getAttributes($compiler, $args);
        unset($_attr[ 'nocache' ]);
        if (isset($compiler->smarty->registered_plugins[ Smarty::PLUGIN_FUNCTION ][ $tag ])) {
            $tag_info = $compiler->smarty->registered_plugins[ Smarty::PLUGIN_FUNCTION ][ $tag ];
        } else {
            $tag_info = $compiler->default_handler_plugins[ Smarty::PLUGIN_FUNCTION ][ $tag ];
        }
        // not cachable?
        $compiler->tag_nocache = $compiler->tag_nocache || !$tag_info[ 1 ];
=======
     * @param  array  $args      array with attributes from parser
     * @param  object $compiler  compiler object
     * @param  array  $parameter array with compilation parameter
     * @param  string $tag       name of function
     * @return string compiled code
     */
    public function compile($args, $compiler, $parameter, $tag)
    {
        // This tag does create output
        $compiler->has_output = true;
        // check and get attributes
        $_attr = $this->getAttributes($compiler, $args);
        if ($_attr['nocache']) {
            $compiler->tag_nocache = true;
        }
        unset($_attr['nocache']);
               if (isset($compiler->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION][$tag])) {
                   $tag_info = $compiler->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION][$tag];
               } else {
                   $tag_info = $compiler->default_handler_plugins[Smarty::PLUGIN_FUNCTION][$tag];
               }
        // not cachable?
        $compiler->tag_nocache =  $compiler->tag_nocache || !$tag_info[1];
>>>>>>> old/master
        // convert attributes into parameter array string
        $_paramsArray = array();
        foreach ($_attr as $_key => $_value) {
            if (is_int($_key)) {
                $_paramsArray[] = "$_key=>$_value";
<<<<<<< HEAD
            } elseif ($compiler->template->caching && in_array($_key, $tag_info[ 2 ])) {
                $_value = str_replace("'", "^#^", $_value);
=======
            } elseif ($compiler->template->caching && in_array($_key,$tag_info[2])) {
                $_value = str_replace("'","^#^",$_value);
>>>>>>> old/master
                $_paramsArray[] = "'$_key'=>^#^.var_export($_value,true).^#^";
            } else {
                $_paramsArray[] = "'$_key'=>$_value";
            }
        }
        $_params = 'array(' . implode(",", $_paramsArray) . ')';
<<<<<<< HEAD
        $function = $tag_info[ 0 ];
        // compile code
        if (!is_array($function)) {
            $output = "{$function}({$_params},\$_smarty_tpl)";
        } elseif (is_object($function[ 0 ])) {
            $output =
                "\$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['{$tag}'][0][0]->{$function[1]}({$_params},\$_smarty_tpl)";
        } else {
            $output = "{$function[0]}::{$function[1]}({$_params},\$_smarty_tpl)";
        }
        if (!empty($parameter[ 'modifierlist' ])) {
            $output = $compiler->compileTag('private_modifier', array(),
                                            array('modifierlist' => $parameter[ 'modifierlist' ],
                                                  'value' => $output));
        }
        //Does tag create output
        $compiler->has_output = isset($_attr[ 'assign' ]) ? false : true;
        $output = "<?php " . ($compiler->has_output ? "echo " : '') . "{$output};?>\n";
        return $output;
    }
=======
        $function = $tag_info[0];
        // compile code
        if (!is_array($function)) {
            $output = "<?php echo {$function}({$_params},\$_smarty_tpl);?>\n";
        } elseif (is_object($function[0])) {
            $output = "<?php echo \$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['{$tag}'][0][0]->{$function[1]}({$_params},\$_smarty_tpl);?>\n";
        } else {
            $output = "<?php echo {$function[0]}::{$function[1]}({$_params},\$_smarty_tpl);?>\n";
        }

        return $output;
    }

>>>>>>> old/master
}
