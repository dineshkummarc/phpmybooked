<?php
/**
 * Smarty Resource Plugin
 *
<<<<<<< HEAD
 * @package    Smarty
 * @subpackage TemplateResources
 * @author     Rodney Rehm
=======
 * @package Smarty
 * @subpackage TemplateResources
 * @author Rodney Rehm
>>>>>>> old/master
 */

/**
 * Smarty Resource Plugin
<<<<<<< HEAD
 * Base implementation for resource plugins that don't use the compiler
 *
 * @package    Smarty
=======
 *
 * Base implementation for resource plugins that don't use the compiler
 *
 * @package Smarty
>>>>>>> old/master
 * @subpackage TemplateResources
 */
abstract class Smarty_Resource_Uncompiled extends Smarty_Resource
{
    /**
<<<<<<< HEAD
     * Flag that it's an uncompiled resource
     *
     * @var bool
     */
    public $uncompiled = true;

    /**
     * Resource does implement populateCompiledFilepath() method
     *
     * @var bool
     */
    public $hasCompiledHandler = true;
    
    /**
     * populate compiled object with compiled filepath
     *
     * @param Smarty_Template_Compiled $compiled  compiled object
     * @param Smarty_Internal_Template $_template template object
     */
    public function populateCompiledFilepath(Smarty_Template_Compiled $compiled, Smarty_Internal_Template $_template)
    {
        $compiled->filepath = $_template->source->filepath;
        $compiled->timestamp = $_template->source->timestamp;
        $compiled->exists = $_template->source->exists;
        if ($_template->smarty->merge_compiled_includes || $_template->source->handler->checkTimestamps()) {
            $compiled->file_dependency[ $_template->source->uid ] =
                array($compiled->filepath, $compiled->timestamp, $_template->source->type,);
        }
    }
=======
     * Render and output the template (without using the compiler)
     *
     * @param  Smarty_Template_Source   $source    source object
     * @param  Smarty_Internal_Template $_template template object
     * @throws SmartyException          on failure
     */
    abstract public function renderUncompiled(Smarty_Template_Source $source, Smarty_Internal_Template $_template);

    /**
     * populate compiled object with compiled filepath
     *
     * @param Smarty_Template_Compiled $compiled  compiled object
     * @param Smarty_Internal_Template $_template template object (is ignored)
     */
    public function populateCompiledFilepath(Smarty_Template_Compiled $compiled, Smarty_Internal_Template $_template)
    {
        $compiled->filepath = false;
        $compiled->timestamp = false;
        $compiled->exists = false;
    }

>>>>>>> old/master
}
