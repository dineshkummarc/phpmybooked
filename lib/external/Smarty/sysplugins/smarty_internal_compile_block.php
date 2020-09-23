<?php
<<<<<<< HEAD
/*
 * This file is part of Smarty.
 *
 * (c) 2015 Uwe Tews
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
=======

/**
 * Smarty Internal Plugin Compile Block
 *
 * Compiles the {block}{/block} tags
 *
 * @package Smarty
 * @subpackage Compiler
 * @author Uwe Tews
>>>>>>> old/master
 */

/**
 * Smarty Internal Plugin Compile Block Class
 *
<<<<<<< HEAD
 * @author Uwe Tews <uwe.tews@googlemail.com>
 */
class Smarty_Internal_Compile_Block extends Smarty_Internal_Compile_Shared_Inheritance
{
=======
 * @package Smarty
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Block extends Smarty_Internal_CompileBase
{

    const parent = '____SMARTY_BLOCK_PARENT____';
>>>>>>> old/master
    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $required_attributes = array('name');

    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $shorttag_order = array('name');

    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
<<<<<<< HEAD
    public $option_flags = array('hide', 'nocache');
=======
    public $option_flags = array('hide', 'append', 'prepend', 'nocache');
>>>>>>> old/master

    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
<<<<<<< HEAD
    public $optional_attributes = array('assign');

    /**
     * nesting level of block tags
     *
     * @var int
     */
    public static $blockTagNestingLevel = 0;

    /**
     * Saved compiler object
     *
     * @var Smarty_Internal_TemplateCompilerBase
     */
    public $compiler = null;
=======
    public $optional_attributes = array('internal_file', 'internal_uid', 'internal_line');
    /**
     * nested child block names
     *
     * @var array
     */
    public static $nested_block_names = array();

    /**
     * child block source buffer
     *
     * @var array
     */
    public static $block_data = array();
>>>>>>> old/master

    /**
     * Compiles code for the {block} tag
     *
<<<<<<< HEAD
     * @param  array                                 $args      array with attributes from parser
     * @param  \Smarty_Internal_TemplateCompilerBase $compiler  compiler object
     * @param  array                                 $parameter array with compilation parameter
     *
     * @return bool true
     */
    public function compile($args, Smarty_Internal_TemplateCompilerBase $compiler, $parameter)
    {
        if (!isset($compiler->_cache[ 'blockNesting' ])) {
            $compiler->_cache[ 'blockNesting' ] = 0;
        }
        if ($compiler->_cache[ 'blockNesting' ] == 0) {
            // make sure that inheritance gets initialized in template code
            $this->registerInit($compiler);
            $this->option_flags = array('hide', 'nocache', 'append', 'prepend');
        } else {
            $this->option_flags = array('hide', 'nocache');
        }
        // check and get attributes
        $_attr = $this->getAttributes($compiler, $args);
        $compiler->_cache[ 'blockNesting' ] ++;
        $compiler->_cache[ 'blockName' ][ $compiler->_cache[ 'blockNesting' ] ] = $_attr[ 'name' ];
        $compiler->_cache[ 'blockParams' ][ $compiler->_cache[ 'blockNesting' ] ] = array();
        $this->openTag($compiler, 'block', array($_attr, $compiler->nocache, $compiler->parser->current_buffer,
                                                 $compiler->template->compiled->has_nocache_code,
                                                 $compiler->template->caching));
        // must whole block be nocache ?
        if ($compiler->tag_nocache) {
            $i = 0;
        }
        $compiler->nocache = $compiler->nocache | $compiler->tag_nocache;
        // $compiler->suppressNocacheProcessing = true;
        if ($_attr[ 'nocache' ] === true) {
            //$compiler->trigger_template_error('nocache option not allowed', $compiler->parser->lex->taglineno);
        }
        $compiler->parser->current_buffer = new Smarty_Internal_ParseTree_Template();
        $compiler->template->compiled->has_nocache_code = false;
        $compiler->suppressNocacheProcessing = true;
    }

    /**
     * Compile saved child block source
     *
     * @param \Smarty_Internal_TemplateCompilerBase compiler object
     * @param string                                $_name   optional name of child block
     *
     * @return string   compiled code of child block
     */
    static function compileChildBlock(Smarty_Internal_TemplateCompilerBase $compiler, $_name = null)
    {
        if (!isset($compiler->_cache[ 'blockNesting' ])) {
            $compiler->trigger_template_error(' tag {$smarty.block.child} used outside {block} tags ',
                                              $compiler->parser->lex->taglineno);
        }
        $compiler->has_code = true;
        $compiler->suppressNocacheProcessing = true;
        $compiler->_cache[ 'blockParams' ][ $compiler->_cache[ 'blockNesting' ] ][ 'callsChild' ] = 'true';
        $output = "<?php \n\$_smarty_tpl->inheritance->callChild(\$_smarty_tpl, \$this);\n?>\n";
        return $output;
=======
     * @param array $args     array with attributes from parser
     * @param object $compiler compiler object
     * @return boolean true
     */
    public function compile($args, $compiler)
    {
        // check and get attributes
        $_attr = $this->getAttributes($compiler, $args);
        $_name = trim($_attr['name'], "\"'");

        // check if we process an inheritance child template
        if ($compiler->inheritance_child) {
            array_unshift(self::$nested_block_names, $_name);
            $this->template->block_data[$_name]['source'] = '';
            // build {block} for child block
            self::$block_data[$_name]['source'] =
                "{$compiler->smarty->left_delimiter}private_child_block name={$_attr['name']} file='{$compiler->template->source->filepath}'" .
                " uid='{$compiler->template->source->uid}' line={$compiler->lex->line}";
            if ($_attr['nocache']) {
                self::$block_data[$_name]['source'] .= ' nocache';
            }
            self::$block_data[$_name]['source'] .= $compiler->smarty->right_delimiter;

            $save = array($_attr, $compiler->inheritance);
            $this->openTag($compiler, 'block', $save);
            // set flag for {block} tag
            $compiler->inheritance = true;
            $compiler->lex->yypushstate(Smarty_Internal_Templatelexer::CHILDBLOCK);
            $compiler->has_code = false;
            return;
        }
        // must merge includes
        if ($_attr['nocache'] == true) {
            $compiler->tag_nocache = true;
        }
        $save = array($_attr, $compiler->inheritance, $compiler->parser->current_buffer, $compiler->nocache);
        $this->openTag($compiler, 'block', $save);
        $compiler->inheritance = true;
        $compiler->nocache = $compiler->nocache | $compiler->tag_nocache;

        $compiler->parser->current_buffer = new _smarty_template_buffer($compiler->parser);
        $compiler->has_code = false;

        return true;
    }


    /**
     * Compile saved child block source
     *
     * @param object $compiler  compiler object
     * @param string $_name     optional name of child block
     * @return string   compiled code of child block
     */
    static function compileChildBlock($compiler, $_name = null)
    {
        if ($compiler->inheritance_child) {
            $name1 = Smarty_Internal_Compile_Block::$nested_block_names[0];
            if (isset($compiler->template->block_data[$name1])) {
                //  replace inner block name with generic
                Smarty_Internal_Compile_Block::$block_data[$name1]['source'] .= $compiler->template->block_data[$name1]['source'];
                Smarty_Internal_Compile_Block::$block_data[$name1]['child'] = true;
            }
            $compiler->lex->yypushstate(Smarty_Internal_Templatelexer::CHILDBLOCK);
            $compiler->has_code = false;
            return;
        }
        // if called by {$smarty.block.child} we must search the name of enclosing {block}
        if ($_name == null) {
            $stack_count = count($compiler->_tag_stack);
            while (--$stack_count >= 0) {
                if ($compiler->_tag_stack[$stack_count][0] == 'block') {
                    $_name = trim($compiler->_tag_stack[$stack_count][1][0]['name'], "\"'");
                    break;
                }
            }
        }
        if ($_name == null) {
            $compiler->trigger_template_error(' tag {$smarty.block.child} used outside {block} tags ', $compiler->lex->taglineno);
        }
        // undefined child?
        if (!isset($compiler->template->block_data[$_name]['source'])) {
            $compiler->popTrace();
            return '';
        }
        // flag that child is already compile by {$smarty.block.child} inclusion
        $compiler->template->block_data[$_name]['compiled'] = true;
        $_tpl = new Smarty_Internal_template('string:' . $compiler->template->block_data[$_name]['source'], $compiler->smarty, $compiler->template, $compiler->template->cache_id,
            $compiler->template->compile_id, $compiler->template->caching, $compiler->template->cache_lifetime);
        if ($compiler->smarty->debugging) {
            Smarty_Internal_Debug::ignore($_tpl);
        }
        $_tpl->tpl_vars = $compiler->template->tpl_vars;
        $_tpl->variable_filters = $compiler->template->variable_filters;
        $_tpl->properties['nocache_hash'] = $compiler->template->properties['nocache_hash'];
        $_tpl->allow_relative_path = true;
        $_tpl->compiler->inheritance = true;
        $_tpl->compiler->suppressHeader = true;
        $_tpl->compiler->suppressFilter = true;
        $_tpl->compiler->suppressTemplatePropertyHeader = true;
        $_tpl->compiler->suppressMergedTemplates = true;
        $nocache = $compiler->nocache || $compiler->tag_nocache;
        if (strpos($compiler->template->block_data[$_name]['source'], self::parent) !== false) {
            $_output = str_replace(self::parent, $compiler->parser->current_buffer->to_smarty_php(), $_tpl->compiler->compileTemplate($_tpl, $nocache));
        } elseif ($compiler->template->block_data[$_name]['mode'] == 'prepend') {
            $_output = $_tpl->compiler->compileTemplate($_tpl, $nocache) . $compiler->parser->current_buffer->to_smarty_php();
        } elseif ($compiler->template->block_data[$_name]['mode'] == 'append') {
            $_output = $compiler->parser->current_buffer->to_smarty_php() . $_tpl->compiler->compileTemplate($_tpl, $nocache);
        } elseif (!empty($compiler->template->block_data[$_name])) {
            $_output = $_tpl->compiler->compileTemplate($_tpl, $nocache);
        }
        $compiler->template->properties['file_dependency'] = array_merge($compiler->template->properties['file_dependency'], $_tpl->properties['file_dependency']);
        $compiler->template->properties['function'] = array_merge($compiler->template->properties['function'], $_tpl->properties['function']);
        $compiler->merged_templates = array_merge($compiler->merged_templates, $_tpl->compiler->merged_templates);
        $compiler->template->variable_filters = $_tpl->variable_filters;
        if ($_tpl->has_nocache_code) {
            $compiler->template->has_nocache_code = true;
        }
        foreach ($_tpl->required_plugins as $key => $tmp1) {
            if ($compiler->nocache && $compiler->template->caching) {
                $code = 'nocache';
            } else {
                $code = $key;
            }
            foreach ($tmp1 as $name => $tmp) {
                foreach ($tmp as $type => $data) {
                    $compiler->template->required_plugins[$code][$name][$type] = $data;
                }
            }
        }
        unset($_tpl);
        $compiler->has_code = true;
        return $_output;
>>>>>>> old/master
    }

    /**
     * Compile $smarty.block.parent
     *
<<<<<<< HEAD
     * @param \Smarty_Internal_TemplateCompilerBase $compiler compiler object
     * @param string                                $_name    optional name of child block
     *
     * @return string   compiled code of child block
     */
    static function compileParentBlock(Smarty_Internal_TemplateCompilerBase $compiler, $_name = null)
    {
        if (!isset($compiler->_cache[ 'blockNesting' ])) {
            $compiler->trigger_template_error(' tag {$smarty.block.parent} used outside {block} tags ',
                                              $compiler->parser->lex->taglineno);
        }
        $compiler->suppressNocacheProcessing = true;
        $compiler->has_code = true;
        $output = "<?php \n\$_smarty_tpl->inheritance->callParent(\$_smarty_tpl, \$this);\n?>\n";
        return $output;
    }
}

/**
 * Smarty Internal Plugin Compile BlockClose Class
 *
 */
class Smarty_Internal_Compile_Blockclose extends Smarty_Internal_Compile_Shared_Inheritance
=======
     * @param object $compiler  compiler object
     * @param string $_name     optional name of child block
     * @return string   compiled code of schild block
     */
    static function compileParentBlock($compiler, $_name = null)
    {
        // if called by {$smarty.block.parent} we must search the name of enclosing {block}
        if ($_name == null) {
            $stack_count = count($compiler->_tag_stack);
            while (--$stack_count >= 0) {
                if ($compiler->_tag_stack[$stack_count][0] == 'block') {
                    $_name = trim($compiler->_tag_stack[$stack_count][1][0]['name'], "\"'");
                    break;
                }
            }
        }
        if ($_name == null) {
            $compiler->trigger_template_error(' tag {$smarty.block.parent} used outside {block} tags ', $compiler->lex->taglineno);
        }
        if (empty(Smarty_Internal_Compile_Block::$nested_block_names)) {
            $compiler->trigger_template_error(' illegal {$smarty.block.parent} in parent template ', $compiler->lex->taglineno);
        }
        Smarty_Internal_Compile_Block::$block_data[Smarty_Internal_Compile_Block::$nested_block_names[0]]['source'] .= Smarty_Internal_Compile_Block::parent;
        $compiler->lex->yypushstate(Smarty_Internal_Templatelexer::CHILDBLOCK);
        $compiler->has_code = false;
        return;
    }

    /**
     * Process block source
     *
     * @param string $source    source text
     * @return ''
     */
    static function blockSource($compiler, $source)
    {
        Smarty_Internal_Compile_Block::$block_data[Smarty_Internal_Compile_Block::$nested_block_names[0]]['source'] .= $source;
    }

}


/**
 * Smarty Internal Plugin Compile BlockClose Class
 *
 * @package Smarty
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Blockclose extends Smarty_Internal_CompileBase
>>>>>>> old/master
{
    /**
     * Compiles code for the {/block} tag
     *
<<<<<<< HEAD
     * @param  array                                $args      array with attributes from parser
     * @param \Smarty_Internal_TemplateCompilerBase $compiler  compiler object
     * @param  array                                $parameter array with compilation parameter
     *
     * @return bool true
     */
    public function compile($args, Smarty_Internal_TemplateCompilerBase $compiler, $parameter)
    {
        list($_attr, $_nocache, $_buffer, $_has_nocache_code, $_caching) = $this->closeTag($compiler, array('block'));
        // init block parameter
        $_block = $compiler->_cache[ 'blockParams' ][ $compiler->_cache[ 'blockNesting' ] ];
        unset($compiler->_cache[ 'blockParams' ][ $compiler->_cache[ 'blockNesting' ] ]);
        $_name = $_attr[ 'name' ];
        $_assign = isset($_attr[ 'assign' ]) ? $_attr[ 'assign' ] : null;
        unset($_attr[ 'assign' ], $_attr[ 'name' ]);
        foreach ($_attr as $name => $stat) {
            if ((is_bool($stat) && $stat !== false) || (!is_bool($stat) && $stat != 'false')) {
                $_block[ $name ] = 'true';
            }
        }
        $_className = 'Block_' . preg_replace('![^\w]+!', '_', uniqid(rand(), true));
        // get compiled block code
        $_functionCode = $compiler->parser->current_buffer;
        // setup buffer for template function code
        $compiler->parser->current_buffer = new Smarty_Internal_ParseTree_Template();

        $output = "<?php\n";
        $output .= "/* {block {$_name}} */\n";
        $output .= "class {$_className} extends Smarty_Internal_Block\n";
        $output .= "{\n";
        foreach ($_block as $property => $value) {
            $output .= "public \${$property} = {$value};\n";
        }
        $output .= "public function callBlock(Smarty_Internal_Template \$_smarty_tpl) {\n";
        //$output .= "/*/%%SmartyNocache:{$compiler->template->compiled->nocache_hash}%%*/\n";
        if ($compiler->template->compiled->has_nocache_code) {
            $output .= "\$_smarty_tpl->cached->hashes['{$compiler->template->compiled->nocache_hash}'] = true;\n";
        }
        if (isset($_assign)) {
            $output .= "ob_start();\n";
        }
        $output .= "?>\n";
        $compiler->parser->current_buffer->append_subtree($compiler->parser,
                                                          new Smarty_Internal_ParseTree_Tag($compiler->parser,
                                                                                            $output));
        $compiler->parser->current_buffer->append_subtree($compiler->parser, $_functionCode);
        $output = "<?php\n";
        if (isset($_assign)) {
            $output .= "\$_smarty_tpl->assign({$_assign}, ob_get_clean());\n";
        }
        $output .= "}\n";
        $output .= "}\n";
        $output .= "/* {/block {$_name}} */\n\n";
        $output .= "?>\n";
        $compiler->parser->current_buffer->append_subtree($compiler->parser,
                                                          new Smarty_Internal_ParseTree_Tag($compiler->parser,
                                                                                            $output));
        $compiler->blockOrFunctionCode .= $f = $compiler->parser->current_buffer->to_smarty_php($compiler->parser);
        $compiler->parser->current_buffer = new Smarty_Internal_ParseTree_Template();
        // nocache plugins must be copied
        if (!empty($compiler->template->compiled->required_plugins[ 'nocache' ])) {
            foreach ($compiler->template->compiled->required_plugins[ 'nocache' ] as $plugin => $tmp) {
                foreach ($tmp as $type => $data) {
                    $compiler->parent_compiler->template->compiled->required_plugins[ 'compiled' ][ $plugin ][ $type ] =
                        $data;
                }
            }
        }

        // restore old status
        $compiler->template->compiled->has_nocache_code = $_has_nocache_code;
        $compiler->tag_nocache = $compiler->nocache;
        $compiler->nocache = $_nocache;
        $compiler->parser->current_buffer = $_buffer;
        $output = "<?php \n";
        if ($compiler->_cache[ 'blockNesting' ] == 1) {
            $output .= "\$_smarty_tpl->inheritance->instanceBlock(\$_smarty_tpl, '$_className', $_name);\n";
        } else {
            $output .= "\$_smarty_tpl->inheritance->instanceBlock(\$_smarty_tpl, '$_className', $_name, \$this->tplIndex);\n";
        }
        $output .= "?>\n";
        $compiler->_cache[ 'blockNesting' ] --;
        if ($compiler->_cache[ 'blockNesting' ] == 0) {
            unset($compiler->_cache[ 'blockNesting' ]);
        }
        $compiler->has_code = true;
        $compiler->suppressNocacheProcessing = true;
        return $output;
=======
     * @param array $args     array with attributes from parser
     * @param object $compiler compiler object
     * @return string compiled code
     */
    public function compile($args, $compiler)
    {
        $compiler->has_code = true;
        // check and get attributes
        $_attr = $this->getAttributes($compiler, $args);
        $saved_data = $this->closeTag($compiler, array('block'));
        $_name = trim($saved_data[0]['name'], "\"'");
        // reset flag for {block} tag
        $compiler->inheritance = $saved_data[1];
        // check if we process an inheritance child template
        if ($compiler->inheritance_child) {
            $name1 = Smarty_Internal_Compile_Block::$nested_block_names[0];
            Smarty_Internal_Compile_Block::$block_data[$name1]['source'] .= "{$compiler->smarty->left_delimiter}/private_child_block{$compiler->smarty->right_delimiter}";
            $level = count(Smarty_Internal_Compile_Block::$nested_block_names);
            array_shift(Smarty_Internal_Compile_Block::$nested_block_names);
            if (!empty(Smarty_Internal_Compile_Block::$nested_block_names)) {
                $name2 = Smarty_Internal_Compile_Block::$nested_block_names[0];
                if (isset($compiler->template->block_data[$name1]) || !$saved_data[0]['hide']) {
                    if (isset(Smarty_Internal_Compile_Block::$block_data[$name1]['child']) || !isset($compiler->template->block_data[$name1])) {
                        Smarty_Internal_Compile_Block::$block_data[$name2]['source'] .= Smarty_Internal_Compile_Block::$block_data[$name1]['source'];
                    } else {
                        if ($compiler->template->block_data[$name1]['mode'] == 'append') {
                            Smarty_Internal_Compile_Block::$block_data[$name2]['source'] .= Smarty_Internal_Compile_Block::$block_data[$name1]['source'] . $compiler->template->block_data[$name1]['source'];
                        } elseif ($compiler->template->block_data[$name1]['mode'] == 'prepend') {
                            Smarty_Internal_Compile_Block::$block_data[$name2]['source'] .= $compiler->template->block_data[$name1]['source'] . Smarty_Internal_Compile_Block::$block_data[$name1]['source'];
                        } else {
                            Smarty_Internal_Compile_Block::$block_data[$name2]['source'] .= $compiler->template->block_data[$name1]['source'];
                        }
                    }
                }
                unset(Smarty_Internal_Compile_Block::$block_data[$name1]);
                $compiler->lex->yypushstate(Smarty_Internal_Templatelexer::CHILDBLOCK);
            } else {
                if (isset($compiler->template->block_data[$name1]) || !$saved_data[0]['hide']) {
                    if (isset($compiler->template->block_data[$name1]) && !isset(Smarty_Internal_Compile_Block::$block_data[$name1]['child'])) {
                        if (strpos($compiler->template->block_data[$name1]['source'], Smarty_Internal_Compile_Block::parent) !== false) {
                            $compiler->template->block_data[$name1]['source'] =
                                str_replace(Smarty_Internal_Compile_Block::parent, Smarty_Internal_Compile_Block::$block_data[$name1]['source'], $compiler->template->block_data[$name1]['source']);
                        } elseif ($compiler->template->block_data[$name1]['mode'] == 'prepend') {
                            $compiler->template->block_data[$name1]['source'] .= Smarty_Internal_Compile_Block::$block_data[$name1]['source'];
                        } elseif ($compiler->template->block_data[$name1]['mode'] == 'append') {
                            $compiler->template->block_data[$name1]['source'] = Smarty_Internal_Compile_Block::$block_data[$name1]['source'] . $compiler->template->block_data[$name1]['source'];
                        }
                    } else {
                        $compiler->template->block_data[$name1]['source'] = Smarty_Internal_Compile_Block::$block_data[$name1]['source'];
                    }
                    $compiler->template->block_data[$name1]['mode'] = 'replace';
                    if ($saved_data[0]['append']) {
                        $compiler->template->block_data[$name1]['mode'] = 'append';
                    }
                    if ($saved_data[0]['prepend']) {
                        $compiler->template->block_data[$name1]['mode'] = 'prepend';
                    }
                }
                unset(Smarty_Internal_Compile_Block::$block_data[$name1]);
                $compiler->lex->yypushstate(Smarty_Internal_Templatelexer::CHILDBODY);
            }
            $compiler->has_code = false;
            return;
        }
        if (isset($compiler->template->block_data[$_name]) && !isset($compiler->template->block_data[$_name]['compiled'])) {
            $_output = Smarty_Internal_Compile_Block::compileChildBlock($compiler, $_name);
        } else {
            if ($saved_data[0]['hide'] && !isset($compiler->template->block_data[$_name]['source'])) {
                $_output = '';
            } else {
                $_output = $compiler->parser->current_buffer->to_smarty_php();
            }
        }
        unset($compiler->template->block_data[$_name]['compiled']);
        // reset flags
        $compiler->parser->current_buffer = $saved_data[2];
        if ($compiler->nocache) {
            $compiler->tag_nocache = true;
        }
        $compiler->nocache = $saved_data[3];
        // $_output content has already nocache code processed
        $compiler->suppressNocacheProcessing = true;

        return $_output;
    }
}

/**
 * Smarty Internal Plugin Compile Child Block Class
 *
 * @package Smarty
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Private_Child_Block extends Smarty_Internal_CompileBase
{

    /**
     * Attribute definition: Overwrites base class.
     *
     * @var array
     * @see Smarty_Internal_CompileBase
     */
    public $required_attributes = array('name', 'file', 'uid', 'line');


    /**
     * Compiles code for the {private_child_block} tag
     *
     * @param array $args     array with attributes from parser
     * @param object $compiler compiler object
     * @return boolean true
     */
    public function compile($args, $compiler)
    {
        // check and get attributes
        $_attr = $this->getAttributes($compiler, $args);

        // must merge includes
        if ($_attr['nocache'] == true) {
            $compiler->tag_nocache = true;
        }
        $save = array($_attr, $compiler->nocache);

        // set trace back to child block
        $compiler->pushTrace(trim($_attr['file'], "\"'"), trim($_attr['uid'], "\"'"), $_attr['line'] - $compiler->lex->line);

        $this->openTag($compiler, 'private_child_block', $save);

        $compiler->nocache = $compiler->nocache | $compiler->tag_nocache;
        $compiler->has_code = false;

        return true;
    }
}

/**
 * Smarty Internal Plugin Compile Child Block Close Class
 *
 * @package Smarty
 * @subpackage Compiler
 */
class Smarty_Internal_Compile_Private_Child_Blockclose extends Smarty_Internal_CompileBase
{


    /**
     * Compiles code for the {/private_child_block} tag
     *
     * @param array $args     array with attributes from parser
     * @param object $compiler compiler object
     * @return boolean true
     */
    public function compile($args, $compiler)
    {
        // check and get attributes
        $_attr = $this->getAttributes($compiler, $args);

        $saved_data = $this->closeTag($compiler, array('private_child_block'));

        // end of child block
        $compiler->popTrace();

        $compiler->nocache = $saved_data[1];
        $compiler->has_code = false;

        return true;
>>>>>>> old/master
    }
}
