<?php
/**
 * Smarty plugin
 *
<<<<<<< HEAD
 * @package    Smarty
=======
 * @package Smarty
>>>>>>> old/master
 * @subpackage PluginsModifierCompiler
 */

/**
 * Smarty strip_tags modifier plugin
<<<<<<< HEAD
=======
 *
>>>>>>> old/master
 * Type:     modifier<br>
 * Name:     strip_tags<br>
 * Purpose:  strip html tags from text
 *
<<<<<<< HEAD
 * @link   http://www.smarty.net/docs/en/language.modifier.strip.tags.tpl strip_tags (Smarty online manual)
 * @author Uwe Tews
 *
 * @param array $params parameters
 *
 * @return string with compiled code
 */
function smarty_modifiercompiler_strip_tags($params)
{
    if (!isset($params[ 1 ]) || $params[ 1 ] === true || trim($params[ 1 ], '"') == 'true') {
        return "preg_replace('!<[^>]*?>!', ' ', {$params[0]})";
    } else {
        return 'strip_tags(' . $params[ 0 ] . ')';
=======
 * @link http://www.smarty.net/manual/en/language.modifier.strip.tags.php strip_tags (Smarty online manual)
 * @author Uwe Tews
 * @param array $params parameters
 * @return string with compiled code
 */
function smarty_modifiercompiler_strip_tags($params, $compiler)
{
 if (!isset($params[1]) || $params[1] === true ||  trim($params[1],'"') == 'true') {
         return "preg_replace('!<[^>]*?>!', ' ', {$params[0]})";
    } else {
        return 'strip_tags(' . $params[0] . ')';
>>>>>>> old/master
    }
}
