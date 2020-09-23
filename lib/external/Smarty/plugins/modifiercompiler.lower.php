<?php
/**
 * Smarty plugin
<<<<<<< HEAD
 *
 * @package    Smarty
=======
 * @package Smarty
>>>>>>> old/master
 * @subpackage PluginsModifierCompiler
 */

/**
 * Smarty lower modifier plugin
<<<<<<< HEAD
=======
 *
>>>>>>> old/master
 * Type:     modifier<br>
 * Name:     lower<br>
 * Purpose:  convert string to lowercase
 *
<<<<<<< HEAD
 * @link   http://www.smarty.net/manual/en/language.modifier.lower.php lower (Smarty online manual)
 * @author Monte Ohrt <monte at ohrt dot com>
 * @author Uwe Tews
 *
 * @param array $params parameters
 *
 * @return string with compiled code
 */

function smarty_modifiercompiler_lower($params)
{
    if (Smarty::$_MBSTRING) {
        return 'mb_strtolower(' . $params[ 0 ] . ', \'' . addslashes(Smarty::$_CHARSET) . '\')';
    }
    // no MBString fallback
    return 'strtolower(' . $params[ 0 ] . ')';
=======
 * @link http://www.smarty.net/manual/en/language.modifier.lower.php lower (Smarty online manual)
 * @author Monte Ohrt <monte at ohrt dot com>
 * @author Uwe Tews
 * @param array $params parameters
 * @return string with compiled code
 */

function smarty_modifiercompiler_lower($params, $compiler)
{
    if (Smarty::$_MBSTRING) {
        return 'mb_strtolower(' . $params[0] . ', \'' . addslashes(Smarty::$_CHARSET) . '\')' ;
    }
    // no MBString fallback
    return 'strtolower(' . $params[0] . ')';
>>>>>>> old/master
}
