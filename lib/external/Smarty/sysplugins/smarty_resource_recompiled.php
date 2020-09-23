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
 * Base implementation for resource plugins that don't compile cache
 *
 * @package    Smarty
=======
 *
 * Base implementation for resource plugins that don't compile cache
 *
 * @package Smarty
>>>>>>> old/master
 * @subpackage TemplateResources
 */
abstract class Smarty_Resource_Recompiled extends Smarty_Resource
{
    /**
<<<<<<< HEAD
     * Flag that it's an recompiled resource
     *
     * @var bool
     */
    public $recompiled = true;

    /**
     * Resource does implement populateCompiledFilepath() method
     *
     * @var bool
     */
    public $hasCompiledHandler = true;

    /**
     * compile template from source
     *
     * @param Smarty_Internal_Template $_smarty_tpl do not change variable name, is used by compiled template
     *
     * @throws Exception
     */
    public function process(Smarty_Internal_Template $_smarty_tpl)
    {
        $compiled = &$_smarty_tpl->compiled;
        $compiled->file_dependency = array();
        $compiled->includes = array();
        $compiled->nocache_hash = null;
        $compiled->unifunc = null;
        $level = ob_get_level();
        ob_start();
        $_smarty_tpl->loadCompiler();
        // call compiler
        try {
            eval("?>" . $_smarty_tpl->compiler->compileTemplate($_smarty_tpl));
        }
        catch (Exception $e) {
            unset($_smarty_tpl->compiler);
            while (ob_get_level() > $level) {
                ob_end_clean();
            }
            throw $e;
        }
        // release compiler object to free memory
        unset($_smarty_tpl->compiler);
        ob_get_clean();
        $compiled->timestamp = time();
        $compiled->exists = true;
    }

    /**
=======
>>>>>>> old/master
     * populate Compiled Object with compiled filepath
     *
     * @param  Smarty_Template_Compiled $compiled  compiled object
     * @param  Smarty_Internal_Template $_template template object
<<<<<<< HEAD
     *
=======
>>>>>>> old/master
     * @return void
     */
    public function populateCompiledFilepath(Smarty_Template_Compiled $compiled, Smarty_Internal_Template $_template)
    {
        $compiled->filepath = false;
        $compiled->timestamp = false;
        $compiled->exists = false;
    }

<<<<<<< HEAD
    /*
       * Disable timestamp checks for recompiled resource.
       *
       * @return bool
       */
    public function checkTimestamps()
    {
        return false;
    }
=======
>>>>>>> old/master
}
