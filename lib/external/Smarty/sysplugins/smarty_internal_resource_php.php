<?php

/**
 * Smarty Internal Plugin Resource PHP
<<<<<<< HEAD
 * Implements the file system as resource for PHP templates
 *
 * @package    Smarty
 * @subpackage TemplateResources
 * @author     Uwe Tews
 * @author     Rodney Rehm
 */
class Smarty_Internal_Resource_Php extends Smarty_Internal_Resource_File
{
    /**
     * Flag that it's an uncompiled resource
     *
     * @var bool
     */
    public $uncompiled = true;

    /**
     * container for short_open_tag directive's value before executing PHP templates
     *
     * @var string
     */
    protected $short_open_tag;

    /**
     * Resource does implement populateCompiledFilepath() method
     *
     * @var bool
     */
    public $hasCompiledHandler = true;

    /**
     * Create a new PHP Resource
     */
    public function __construct()
    {
        $this->short_open_tag = ini_get('short_open_tag');
=======
 *
 * Implements the file system as resource for PHP templates
 *
 * @package Smarty
 * @subpackage TemplateResources
 * @author Uwe Tews
 * @author Rodney Rehm
 */
class Smarty_Internal_Resource_PHP extends Smarty_Resource_Uncompiled
{
    /**
     * container for short_open_tag directive's value before executing PHP templates
     * @var string
     */
    protected $short_open_tag;

    /**
     * Create a new PHP Resource
     *
     */
    public function __construct()
    {
        $this->short_open_tag = ini_get( 'short_open_tag' );
    }

    /**
     * populate Source Object with meta data from Resource
     *
     * @param  Smarty_Template_Source   $source    source object
     * @param  Smarty_Internal_Template $_template template object
     * @return void
     */
    public function populate(Smarty_Template_Source $source, Smarty_Internal_Template $_template=null)
    {
        $source->filepath = $this->buildFilepath($source, $_template);

        if ($source->filepath !== false) {
            if (is_object($source->smarty->security_policy)) {
                $source->smarty->security_policy->isTrustedResourceDir($source->filepath);
            }

            $source->uid = sha1($source->filepath);
            if ($source->smarty->compile_check) {
                $source->timestamp = @filemtime($source->filepath);
                $source->exists = !!$source->timestamp;
            }
        }
    }

    /**
     * populate Source Object with timestamp and exists from Resource
     *
     * @param  Smarty_Template_Source $source source object
     * @return void
     */
    public function populateTimestamp(Smarty_Template_Source $source)
    {
        $source->timestamp = @filemtime($source->filepath);
        $source->exists = !!$source->timestamp;
>>>>>>> old/master
    }

    /**
     * Load template's source from file into current template object
     *
     * @param  Smarty_Template_Source $source source object
<<<<<<< HEAD
     *
=======
>>>>>>> old/master
     * @return string                 template source
     * @throws SmartyException        if source cannot be loaded
     */
    public function getContent(Smarty_Template_Source $source)
    {
<<<<<<< HEAD
        if ($source->exists) {
=======
        if ($source->timestamp) {
>>>>>>> old/master
            return '';
        }
        throw new SmartyException("Unable to read template {$source->type} '{$source->name}'");
    }

    /**
     * Render and output the template (without using the compiler)
     *
     * @param  Smarty_Template_Source   $source    source object
     * @param  Smarty_Internal_Template $_template template object
<<<<<<< HEAD
     *
=======
>>>>>>> old/master
     * @return void
     * @throws SmartyException          if template cannot be loaded or allow_php_templates is disabled
     */
    public function renderUncompiled(Smarty_Template_Source $source, Smarty_Internal_Template $_template)
    {
<<<<<<< HEAD
=======
        $_smarty_template = $_template;

>>>>>>> old/master
        if (!$source->smarty->allow_php_templates) {
            throw new SmartyException("PHP templates are disabled");
        }
        if (!$source->exists) {
<<<<<<< HEAD
            $parentIsTpl = isset($this->parent) && $this->parent->_objType == 2;
            throw new SmartyException("Unable to load template {$source->type} '{$source->name}'" .
                                      ($parentIsTpl ? " in '{$this->parent->template_resource}'" : ''));
=======
            if ($_template->parent instanceof Smarty_Internal_Template) {
                $parent_resource = " in '{$_template->parent->template_resource}'";
            } else {
                $parent_resource = '';
            }
            throw new SmartyException("Unable to load template {$source->type} '{$source->name}'{$parent_resource}");
>>>>>>> old/master
        }

        // prepare variables
        extract($_template->getTemplateVars());

        // include PHP template with short open tags enabled
<<<<<<< HEAD
        ini_set('short_open_tag', '1');
        /** @var Smarty_Internal_Template $_smarty_template
         * used in included file
         */
        $_smarty_template = $_template;
        include($source->filepath);
        ini_set('short_open_tag', $this->short_open_tag);
    }

    /**
     * populate compiled object with compiled filepath
     *
     * @param Smarty_Template_Compiled $compiled  compiled object
     * @param Smarty_Internal_Template $_template template object (is ignored)
     */
    public function populateCompiledFilepath(Smarty_Template_Compiled $compiled, Smarty_Internal_Template $_template)
    {
        $compiled->filepath = $_template->source->filepath;
        $compiled->timestamp = $_template->source->timestamp;
        $compiled->exists = $_template->source->exists;
        $compiled->file_dependency[ $_template->source->uid ] =
            array($compiled->filepath, $compiled->timestamp,
                  $_template->source->type,);
=======
        ini_set( 'short_open_tag', '1' );
        include($source->filepath);
        ini_set( 'short_open_tag', $this->short_open_tag );
>>>>>>> old/master
    }
}
