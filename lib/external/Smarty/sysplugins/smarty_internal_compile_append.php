<?php
/**
 * Smarty Internal Plugin Compile Append
<<<<<<< HEAD
 * Compiles the {append} tag
 *
 * @package    Smarty
 * @subpackage Compiler
 * @author     Uwe Tews
=======
 *
 * Compiles the {append} tag
 *
 * @package Smarty
 * @subpackage Compiler
 * @author Uwe Tews
>>>>>>> old/master
 */

/**
 * Smarty Internal Plugin Compile Append Class
 *
<<<<<<< HEAD
 * @package    Smarty
=======
 * @package Smarty
>>>>>>> old/master
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Append extends Smarty_Internal_Compile_Assign
{
    /**
     * Compiles code for the {append} tag
     *
<<<<<<< HEAD
     * @param  array                                $args      array with attributes from parser
     * @param \Smarty_Internal_TemplateCompilerBase $compiler  compiler object
     * @param  array                                $parameter array with compilation parameter
     *
     * @return string compiled code
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
        // the following must be assigned at runtime because it will be overwritten in parent class
        $this->required_attributes = array('var', 'value');
        $this->shorttag_order = array('var', 'value');
        $this->optional_attributes = array('scope', 'index');
<<<<<<< HEAD
        $this->mapCache = array();
        // check and get attributes
        $_attr = $this->getAttributes($compiler, $args);
        // map to compile assign attributes
        if (isset($_attr[ 'index' ])) {
            $_params[ 'smarty_internal_index' ] = '[' . $_attr[ 'index' ] . ']';
            unset($_attr[ 'index' ]);
        } else {
            $_params[ 'smarty_internal_index' ] = '[]';
=======
        // check and get attributes
        $_attr = $this->getAttributes($compiler, $args);
        // map to compile assign attributes
        if (isset($_attr['index'])) {
            $_params['smarty_internal_index'] = '[' . $_attr['index'] . ']';
            unset($_attr['index']);
        } else {
            $_params['smarty_internal_index'] = '[]';
>>>>>>> old/master
        }
        $_new_attr = array();
        foreach ($_attr as $key => $value) {
            $_new_attr[] = array($key => $value);
        }
        // call compile assign
        return parent::compile($_new_attr, $compiler, $_params);
    }
<<<<<<< HEAD
=======

>>>>>>> old/master
}
