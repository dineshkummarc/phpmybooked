<?php

/**
 * Smarty Internal Plugin Compile Insert
<<<<<<< HEAD
 * Compiles the {insert} tag
 *
 * @package    Smarty
 * @subpackage Compiler
 * @author     Uwe Tews
=======
 *
 * Compiles the {insert} tag
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
class Smarty_Internal_Compile_Insert extends Smarty_Internal_CompileBase
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
     * Compiles code for the {insert} tag
     *
<<<<<<< HEAD
     * @param  array                                $args     array with attributes from parser
     * @param \Smarty_Internal_TemplateCompilerBase $compiler compiler object
     *
     * @return string compiled code
     * @throws \SmartyCompilerException
     */
    public function compile($args, Smarty_Internal_TemplateCompilerBase $compiler)
    {
        // check and get attributes
        $_attr = $this->getAttributes($compiler, $args);
        //Does tag create output
        $compiler->has_output = isset($_attr[ 'assign' ]) ? false : true;

        $nocacheParam = $compiler->template->caching && ($compiler->tag_nocache || $compiler->nocache);
        if (!$nocacheParam) {
            // do not compile as nocache code
            $compiler->suppressNocacheProcessing = true;
        }
=======
     * @param  array  $args     array with attributes from parser
     * @param  object $compiler compiler object
     * @return string compiled code
     */
    public function compile($args, $compiler)
    {
        // check and get attributes
        $_attr = $this->getAttributes($compiler, $args);
        // never compile as nocache code
        $compiler->suppressNocacheProcessing = true;
>>>>>>> old/master
        $compiler->tag_nocache = true;
        $_smarty_tpl = $compiler->template;
        $_name = null;
        $_script = null;

        $_output = '<?php ';
<<<<<<< HEAD
        // save possible attributes
        eval('$_name = @' . $_attr[ 'name' ] . ';');
        if (isset($_attr[ 'assign' ])) {
            // output will be stored in a smarty variable instead of being displayed
            $_assign = $_attr[ 'assign' ];
            // create variable to make sure that the compiler knows about its nocache status
            $var = trim($_attr[ 'assign' ], "'");
            if (isset($compiler->template->tpl_vars[ $var ])) {
                $compiler->template->tpl_vars[ $var ]->nocache = true;
            } else {
                $compiler->template->tpl_vars[ $var ] = new Smarty_Variable(null, true);
            }
        }
        if (isset($_attr[ 'script' ])) {
=======
        // save posible attributes
        eval('$_name = ' . $_attr['name'] . ';');
        if (isset($_attr['assign'])) {
            // output will be stored in a smarty variable instead of being displayed
            $_assign = $_attr['assign'];
            // create variable to make shure that the compiler knows about its nocache status
            $compiler->template->tpl_vars[trim($_attr['assign'], "'")] = new Smarty_Variable(null, true);
        }
        if (isset($_attr['script'])) {
>>>>>>> old/master
            // script which must be included
            $_function = "smarty_insert_{$_name}";
            $_smarty_tpl = $compiler->template;
            $_filepath = false;
<<<<<<< HEAD
            eval('$_script = @' . $_attr[ 'script' ] . ';');
=======
            eval('$_script = ' . $_attr['script'] . ';');
>>>>>>> old/master
            if (!isset($compiler->smarty->security_policy) && file_exists($_script)) {
                $_filepath = $_script;
            } else {
                if (isset($compiler->smarty->security_policy)) {
                    $_dir = $compiler->smarty->security_policy->trusted_dir;
                } else {
<<<<<<< HEAD
                    $_dir = $compiler->smarty instanceof SmartyBC ? $compiler->smarty->trusted_dir : null;
=======
                    $_dir = $compiler->smarty->trusted_dir;
>>>>>>> old/master
                }
                if (!empty($_dir)) {
                    foreach ((array) $_dir as $_script_dir) {
                        $_script_dir = rtrim($_script_dir, '/\\') . DS;
                        if (file_exists($_script_dir . $_script)) {
                            $_filepath = $_script_dir . $_script;
                            break;
                        }
                    }
                }
            }
            if ($_filepath == false) {
<<<<<<< HEAD
                $compiler->trigger_template_error("{insert} missing script file '{$_script}'", null, true);
=======
                $compiler->trigger_template_error("{insert} missing script file '{$_script}'", $compiler->lex->taglineno);
>>>>>>> old/master
            }
            // code for script file loading
            $_output .= "require_once '{$_filepath}' ;";
            require_once $_filepath;
            if (!is_callable($_function)) {
<<<<<<< HEAD
                $compiler->trigger_template_error(" {insert} function '{$_function}' is not callable in script file '{$_script}'",
                                                  null, true);
=======
                $compiler->trigger_template_error(" {insert} function '{$_function}' is not callable in script file '{$_script}'", $compiler->lex->taglineno);
>>>>>>> old/master
            }
        } else {
            $_filepath = 'null';
            $_function = "insert_{$_name}";
            // function in PHP script ?
            if (!is_callable($_function)) {
                // try plugin
                if (!$_function = $compiler->getPlugin($_name, 'insert')) {
<<<<<<< HEAD
                    $compiler->trigger_template_error("{insert} no function or plugin found for '{$_name}'", null,
                                                      true);
=======
                    $compiler->trigger_template_error("{insert} no function or plugin found for '{$_name}'", $compiler->lex->taglineno);
>>>>>>> old/master
                }
            }
        }
        // delete {insert} standard attributes
<<<<<<< HEAD
        unset($_attr[ 'name' ], $_attr[ 'assign' ], $_attr[ 'script' ], $_attr[ 'nocache' ]);
=======
        unset($_attr['name'], $_attr['assign'], $_attr['script'], $_attr['nocache']);
>>>>>>> old/master
        // convert attributes into parameter array string
        $_paramsArray = array();
        foreach ($_attr as $_key => $_value) {
            $_paramsArray[] = "'$_key' => $_value";
        }
        $_params = 'array(' . implode(", ", $_paramsArray) . ')';
        // call insert
        if (isset($_assign)) {
<<<<<<< HEAD
            if ($_smarty_tpl->caching && !$nocacheParam) {
=======
            if ($_smarty_tpl->caching) {
>>>>>>> old/master
                $_output .= "echo Smarty_Internal_Nocache_Insert::compile ('{$_function}',{$_params}, \$_smarty_tpl, '{$_filepath}',{$_assign});?>";
            } else {
                $_output .= "\$_smarty_tpl->assign({$_assign} , {$_function} ({$_params},\$_smarty_tpl), true);?>";
            }
        } else {
<<<<<<< HEAD
            if ($_smarty_tpl->caching && !$nocacheParam) {
=======
            $compiler->has_output = true;
            if ($_smarty_tpl->caching) {
>>>>>>> old/master
                $_output .= "echo Smarty_Internal_Nocache_Insert::compile ('{$_function}',{$_params}, \$_smarty_tpl, '{$_filepath}');?>";
            } else {
                $_output .= "echo {$_function}({$_params},\$_smarty_tpl);?>";
            }
        }

        return $_output;
    }
<<<<<<< HEAD
=======

>>>>>>> old/master
}
