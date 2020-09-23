<?php
/**
 * Smarty plugin
 *
<<<<<<< HEAD
 * @package    Smarty
=======
 * @package Smarty
>>>>>>> old/master
 * @subpackage PluginsFilter
 */

/**
 * Smarty htmlspecialchars variablefilter plugin
 *
<<<<<<< HEAD
 * @param string $source input string
 *
 * @return string filtered output
 */
function smarty_variablefilter_htmlspecialchars($source)
=======
 * @param string                   $source input string
 * @param Smarty_Internal_Template $smarty Smarty object
 * @return string filtered output
 */
function smarty_variablefilter_htmlspecialchars($source, $smarty)
>>>>>>> old/master
{
    return htmlspecialchars($source, ENT_QUOTES, Smarty::$_CHARSET);
}
