<?php
/**
 * Smarty Internal Plugin Compile Setfilter
<<<<<<< HEAD
 * Compiles code for setfilter tag
 *
 * @package    Smarty
 * @subpackage Compiler
 * @author     Uwe Tews
=======
 *
 * Compiles code for setfilter tag
 *
 * @package Smarty
 * @subpackage Compiler
 * @author Uwe Tews
>>>>>>> old/master
 */

/**
 * Smarty Internal Plugin Compile Setfilter Class
 *
<<<<<<< HEAD
 * @package    Smarty
=======
 * @package Smarty
>>>>>>> old/master
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Setfilter extends Smarty_Internal_CompileBase
{
    /**
     * Compiles code for setfilter tag
     *
<<<<<<< HEAD
     * @param  array                                $args      array with attributes from parser
     * @param \Smarty_Internal_TemplateCompilerBase $compiler  compiler object
     * @param  array                                $parameter array with compilation parameter
     *
     * @return string compiled code
     */
    public function compile($args, Smarty_Internal_TemplateCompilerBase $compiler, $parameter)
    {
        $compiler->variable_filter_stack[] = $compiler->variable_filters;
        $compiler->variable_filters = $parameter[ 'modifier_list' ];
=======
     * @param  array  $args      array with attributes from parser
     * @param  object $compiler  compiler object
     * @param  array  $parameter array with compilation parameter
     * @return string compiled code
     */
    public function compile($args, $compiler, $parameter)
    {
        $compiler->variable_filter_stack[] = $compiler->template->variable_filters;
        $compiler->template->variable_filters = $parameter['modifier_list'];
>>>>>>> old/master
        // this tag does not return compiled code
        $compiler->has_code = false;

        return true;
    }
<<<<<<< HEAD
=======

>>>>>>> old/master
}

/**
 * Smarty Internal Plugin Compile Setfilterclose Class
 *
<<<<<<< HEAD
 * @package    Smarty
=======
 * @package Smarty
>>>>>>> old/master
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Setfilterclose extends Smarty_Internal_CompileBase
{
    /**
     * Compiles code for the {/setfilter} tag
<<<<<<< HEAD
     * This tag does not generate compiled output. It resets variable filter.
     *
     * @param  array                                $args     array with attributes from parser
     * @param \Smarty_Internal_TemplateCompilerBase $compiler compiler object
     *
     * @return string compiled code
     */
    public function compile($args, Smarty_Internal_TemplateCompilerBase $compiler)
=======
     *
     * This tag does not generate compiled output. It resets variable filter.
     *
     * @param  array  $args     array with attributes from parser
     * @param  object $compiler compiler object
     * @return string compiled code
     */
    public function compile($args, $compiler)
>>>>>>> old/master
    {
        $_attr = $this->getAttributes($compiler, $args);
        // reset variable filter to previous state
        if (count($compiler->variable_filter_stack)) {
<<<<<<< HEAD
            $compiler->variable_filters = array_pop($compiler->variable_filter_stack);
        } else {
            $compiler->variable_filters = array();
=======
            $compiler->template->variable_filters = array_pop($compiler->variable_filter_stack);
        } else {
            $compiler->template->variable_filters = array();
>>>>>>> old/master
        }
        // this tag does not return compiled code
        $compiler->has_code = false;

        return true;
    }
<<<<<<< HEAD
=======

>>>>>>> old/master
}
