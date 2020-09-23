<?php

/**
 * Smarty Internal Plugin Compile extend
<<<<<<< HEAD
 * Compiles the {extends} tag
 *
 * @package    Smarty
 * @subpackage Compiler
 * @author     Uwe Tews
=======
 *
 * Compiles the {extends} tag
 *
 * @package Smarty
 * @subpackage Compiler
 * @author Uwe Tews
>>>>>>> old/master
 */

/**
 * Smarty Internal Plugin Compile extend Class
 *
<<<<<<< HEAD
 * @package    Smarty
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Extends extends Smarty_Internal_Compile_Shared_Inheritance
=======
 * @package Smarty
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Extends extends Smarty_Internal_CompileBase
>>>>>>> old/master
{
    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $required_attributes = array('file');
<<<<<<< HEAD

    /**
     * Array of names of optional attribute required by tag
     * use array('_any') if there is no restriction of attributes names
     *
     * @var array
     */
    public $optional_attributes = array('extends_resource');

=======
>>>>>>> old/master
    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $shorttag_order = array('file');

    /**
<<<<<<< HEAD
     * Compiles code for the {extends} tag extends: resource
     *
     * @param array                                 $args     array with attributes from parser
     * @param \Smarty_Internal_TemplateCompilerBase $compiler compiler object
     *
     * @return string compiled code
     * @throws \SmartyCompilerException
     * @throws \SmartyException
     */
    public function compile($args, Smarty_Internal_TemplateCompilerBase $compiler)
    {
        // check and get attributes
        $_attr = $this->getAttributes($compiler, $args);
        if ($_attr[ 'nocache' ] === true) {
            $compiler->trigger_template_error('nocache option not allowed', $compiler->parser->lex->line - 1);
        }
        if (strpos($_attr[ 'file' ], '$_tmp') !== false) {
            $compiler->trigger_template_error('illegal value for file attribute', $compiler->parser->lex->line - 1);
        }
        // add code to initialize inheritance
        $this->registerInit($compiler, true);
        $file = trim($_attr[ 'file' ], '\'"');
        if (strlen($file) > 8 && substr($file, 0, 8) == 'extends:') {
            // generate code for each template
            $files = array_reverse(explode('|', substr($file, 8)));
            $i = 0;
            foreach ($files as $file) {
                if ($file[ 0 ] == '"') {
                    $file = trim($file, '".');
                } else {
                    $file = "'{$file}'";
                }
                $i ++;
                if ($i == count($files) && isset($_attr[ 'extends_resource' ])) {
                    $this->compileEndChild($compiler);
                }
                $this->compileInclude($compiler, $file);
            }
            if (!isset($_attr[ 'extends_resource' ])) {
                $this->compileEndChild($compiler);
            }
        } else {
            $this->compileEndChild($compiler);
            $this->compileInclude($compiler, $_attr[ 'file' ]);
        }
        $compiler->has_code = false;
        return '';
    }

    /**
     * Add code for inheritance endChild() method to end of template
     *
     * @param \Smarty_Internal_TemplateCompilerBase $compiler
     */
    private function compileEndChild(Smarty_Internal_TemplateCompilerBase $compiler)
    {
        $compiler->parser->template_postfix[] = new Smarty_Internal_ParseTree_Tag($compiler->parser,
                                                                                  "<?php \$_smarty_tpl->inheritance->endChild();\n?>\n");
    }

    /**
     * Add code for including subtemplate to end of template
     *
     * @param \Smarty_Internal_TemplateCompilerBase $compiler
     * @param  string                               $file subtemplate name
     */
    private function compileInclude(Smarty_Internal_TemplateCompilerBase $compiler, $file)
    {
        $compiler->parser->template_postfix[] = new Smarty_Internal_ParseTree_Tag($compiler->parser,
                                                                                  $compiler->compileTag('include',
                                                                                                        array($file,
                                                                                                              array('scope' => 'parent'))));
    }

    /**
     * Create source code for {extends} from source components array
     *
     * @param []\Smarty_Internal_Template_Source $components
     *
     * @return string
     */
    public static function extendsSourceArrayCode($components)
    {
        $resources = array();
        foreach ($components as $source) {
            $resources[] = $source->resource;
        }
        return '{extends file=\'extends:' . join('|', $resources) . '\' extends_resource=true}';
    }
=======
     * Compiles code for the {extends} tag
     *
     * @param array $args     array with attributes from parser
     * @param object $compiler compiler object
     * @return string compiled code
     */
    public function compile($args, $compiler)
    {
        // check and get attributes
        $_attr = $this->getAttributes($compiler, $args);
        if ($_attr['nocache'] === true) {
            $compiler->trigger_template_error('nocache option not allowed', $compiler->lex->taglineno);
        }
        if (strpos($_attr['file'], '$_tmp') !== false) {
            $compiler->trigger_template_error('illegal value for file attribute', $compiler->lex->taglineno);
        }

        $name = $_attr['file'];
        $_smarty_tpl = $compiler->template;
        eval("\$tpl_name = $name;");
        // create template object
        $_template = new $compiler->smarty->template_class($tpl_name, $compiler->smarty, $compiler->template);
        // check for recursion
        $uid = $_template->source->uid;
        if (isset($compiler->extends_uid[$uid])) {
            $compiler->trigger_template_error("illegal recursive call of \"$include_file\"", $this->lex->line - 1);
        }
        $compiler->extends_uid[$uid] = true;
        if (empty($_template->source->components)) {
            array_unshift($compiler->sources, $_template->source);
        } else {
            foreach ($_template->source->components as $source) {
                array_unshift($compiler->sources, $source);
                $uid = $source->uid;
                if (isset($compiler->extends_uid[$uid])) {
                    $compiler->trigger_template_error("illegal recursive call of \"{$sorce->filepath}\"", $this->lex->line - 1);
                }
                $compiler->extends_uid[$uid] = true;
            }
        }
        unset ($_template);
        $compiler->inheritance_child = true;
        $compiler->lex->yypushstate(Smarty_Internal_Templatelexer::CHILDBODY);
        return '';
    }
>>>>>>> old/master
}
