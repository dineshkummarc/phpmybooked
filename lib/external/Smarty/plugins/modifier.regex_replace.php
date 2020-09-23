<?php
/**
 * Smarty plugin
 *
<<<<<<< HEAD
 * @package    Smarty
=======
 * @package Smarty
>>>>>>> old/master
 * @subpackage PluginsModifier
 */

/**
 * Smarty regex_replace modifier plugin
<<<<<<< HEAD
=======
 *
>>>>>>> old/master
 * Type:     modifier<br>
 * Name:     regex_replace<br>
 * Purpose:  regular expression search/replace
 *
<<<<<<< HEAD
 * @link    http://smarty.php.net/manual/en/language.modifier.regex.replace.php
 *          regex_replace (Smarty online manual)
 * @author  Monte Ohrt <monte at ohrt dot com>
 *
 * @param string       $string  input string
 * @param string|array $search  regular expression(s) to search for
 * @param string|array $replace string(s) that should be replaced
 * @param int          $limit   the maximum number of replacements
 *
 * @return string
 */
function smarty_modifier_regex_replace($string, $search, $replace, $limit = - 1)
{
    if (is_array($search)) {
        foreach ($search as $idx => $s) {
            $search[ $idx ] = _smarty_regex_replace_check($s);
=======
 * @link http://smarty.php.net/manual/en/language.modifier.regex.replace.php
 *          regex_replace (Smarty online manual)
 * @author Monte Ohrt <monte at ohrt dot com>
 * @param string       $string   input string
 * @param string|array $search   regular expression(s) to search for
 * @param string|array $replace  string(s) that should be replaced
 * @return string
 */
function smarty_modifier_regex_replace($string, $search, $replace)
{
    if (is_array($search)) {
        foreach ($search as $idx => $s) {
            $search[$idx] = _smarty_regex_replace_check($s);
>>>>>>> old/master
        }
    } else {
        $search = _smarty_regex_replace_check($search);
    }

<<<<<<< HEAD
    return preg_replace($search, $replace, $string, $limit);
=======
    return preg_replace($search, $replace, $string);
>>>>>>> old/master
}

/**
 * @param  string $search string(s) that should be replaced
<<<<<<< HEAD
 *
=======
>>>>>>> old/master
 * @return string
 * @ignore
 */
function _smarty_regex_replace_check($search)
{
    // null-byte injection detection
    // anything behind the first null-byte is ignored
<<<<<<< HEAD
    if (($pos = strpos($search, "\0")) !== false) {
        $search = substr($search, 0, $pos);
    }
    // remove eval-modifier from $search
    if (preg_match('!([a-zA-Z\s]+)$!s', $search, $match) && (strpos($match[ 1 ], 'e') !== false)) {
        $search = substr($search, 0, - strlen($match[ 1 ])) . preg_replace('![e\s]+!', '', $match[ 1 ]);
=======
    if (($pos = strpos($search,"\0")) !== false) {
        $search = substr($search,0,$pos);
    }
    // remove eval-modifier from $search
    if (preg_match('!([a-zA-Z\s]+)$!s', $search, $match) && (strpos($match[1], 'e') !== false)) {
        $search = substr($search, 0, -strlen($match[1])) . preg_replace('![e\s]+!', '', $match[1]);
>>>>>>> old/master
    }

    return $search;
}
