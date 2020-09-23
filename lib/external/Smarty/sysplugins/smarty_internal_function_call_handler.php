<?php
/**
 * Smarty Internal Plugin Function Call Handler
 *
<<<<<<< HEAD
 * @package    Smarty
 * @subpackage PluginsInternal
 * @author     Uwe Tews
 */

/**
 * This class does handles template functions defined with the {function} tag missing in cache file.
 * It can happen when the template function was called with the nocache option or within a nocache section.
 * The template function will be loaded from it's compiled template file, executed and added to the cache file
 * for later use.
 *
 * @package    Smarty
=======
 * @package Smarty
 * @subpackage PluginsInternal
 * @author Uwe Tews
 */

/**
 * This class does call function defined with the {function} tag
 *
 * @package Smarty
>>>>>>> old/master
 * @subpackage PluginsInternal
 */
class Smarty_Internal_Function_Call_Handler
{
    /**
     * This function handles calls to template functions defined by {function}
     * It does create a PHP function at the first call
     *
     * @param string                   $_name     template function name
<<<<<<< HEAD
     * @param Smarty_Internal_Template $_smarty_tpl
     * @param string                   $_function PHP function name
     * @param array                    $_params   Smarty variables passed as call parameter
     * @param bool                     $_nocache  nocache flag
     *
     * @return bool
     */
    public static function call($_name, Smarty_Internal_Template $_smarty_tpl, $_function, $_params, $_nocache)
    {
        $funcParam = $_smarty_tpl->properties['tpl_function'][$_name];
        if (is_file($funcParam['compiled_filepath'])) {
            // read compiled file
            $code = file_get_contents($funcParam['compiled_filepath']);
            // grab template function
            if (preg_match("/\/\* {$_function} \*\/([\S\s]*?)\/\*\/ {$_function} \*\//", $code, $match)) {
                // grab source info from file dependency
                preg_match("/\s*'{$funcParam['uid']}'([\S\s]*?)\),/", $code, $match1);
                unset($code);
                $output = '';
                // make PHP function known
                eval($match[0]);
                if (function_exists($_function)) {
                    // search cache file template
                    $tplPtr = $_smarty_tpl;
                    while (!isset($tplPtr->cached) && isset($tplPtr->parent)) {
                        $tplPtr = $tplPtr->parent;
                    }
                    // add template function code to cache file
                    if (isset($tplPtr->cached)) {
                        $cache = $tplPtr->cached;
                        $content = $cache->read($tplPtr);
                        if ($content) {
                            // check if we must update file dependency
                            if (!preg_match("/'{$funcParam['uid']}'([\S\s]*?)'nocache_hash'/", $content, $match2)) {
                                $content = preg_replace("/('file_dependency'([\S\s]*?)\()/", "\\1{$match1[0]}", $content);
                            }
                            $cache->write($tplPtr, $content . "<?php " . $match[0] . "?>\n");
                        }
                    }
                    return true;
                }
            }
        }
        return false;
    }
=======
     * @param Smarty_Internal_Template $_template template object
     * @param array                    $_params   Smarty variables passed as call parameter
     * @param string                   $_hash     nocache hash value
     * @param bool                     $_nocache  nocache flag
     */
    public static function call($_name, Smarty_Internal_Template $_template, $_params, $_hash, $_nocache)
    {
        if ($_nocache) {
            $_function = "smarty_template_function_{$_name}_nocache";
        } else {
            $_function = "smarty_template_function_{$_hash}_{$_name}";
        }
        if (!is_callable($_function)) {
            $_code = "function {$_function}(\$_smarty_tpl,\$params) {
    \$saved_tpl_vars = \$_smarty_tpl->tpl_vars;
    foreach (\$_smarty_tpl->smarty->template_functions['{$_name}']['parameter'] as \$key => \$value) {\$_smarty_tpl->tpl_vars[\$key] = new Smarty_variable(\$value);};
    foreach (\$params as \$key => \$value) {\$_smarty_tpl->tpl_vars[\$key] = new Smarty_variable(\$value);}?>";
            if ($_nocache) {
                $_code .= preg_replace(array("!<\?php echo \\'/\*%%SmartyNocache:{$_template->smarty->template_functions[$_name]['nocache_hash']}%%\*/|/\*/%%SmartyNocache:{$_template->smarty->template_functions[$_name]['nocache_hash']}%%\*/\\';\?>!",
                        "!\\\'!"), array('', "'"), $_template->smarty->template_functions[$_name]['compiled']);
                $_template->smarty->template_functions[$_name]['called_nocache'] = true;
            } else {
                $_code .= preg_replace("/{$_template->smarty->template_functions[$_name]['nocache_hash']}/", $_template->properties['nocache_hash'], $_template->smarty->template_functions[$_name]['compiled']);
            }
            $_code .= "<?php \$_smarty_tpl->tpl_vars = \$saved_tpl_vars;}";
            eval($_code);
        }
        $_function($_template, $_params);
    }

>>>>>>> old/master
}
