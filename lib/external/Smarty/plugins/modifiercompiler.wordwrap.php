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
 * Smarty wordwrap modifier plugin
<<<<<<< HEAD
=======
 *
>>>>>>> old/master
 * Type:     modifier<br>
 * Name:     wordwrap<br>
 * Purpose:  wrap a string of text at a given length
 *
<<<<<<< HEAD
 * @link   http://smarty.php.net/manual/en/language.modifier.wordwrap.php wordwrap (Smarty online manual)
 * @author Uwe Tews
 *
 * @param array $params parameters
 * @param       $compiler
 *
=======
 * @link http://smarty.php.net/manual/en/language.modifier.wordwrap.php wordwrap (Smarty online manual)
 * @author Uwe Tews
 * @param array $params parameters
>>>>>>> old/master
 * @return string with compiled code
 */
function smarty_modifiercompiler_wordwrap($params, $compiler)
{
<<<<<<< HEAD
    if (!isset($params[ 1 ])) {
        $params[ 1 ] = 80;
    }
    if (!isset($params[ 2 ])) {
        $params[ 2 ] = '"\n"';
    }
    if (!isset($params[ 3 ])) {
        $params[ 3 ] = 'false';
    }
    $function = 'wordwrap';
    if (Smarty::$_MBSTRING) {
        if ($compiler->template->caching && ($compiler->tag_nocache | $compiler->nocache)) {
            $compiler->parent_compiler->template->compiled->required_plugins[ 'nocache' ][ 'wordwrap' ][ 'modifier' ][ 'file' ] =
                SMARTY_PLUGINS_DIR . 'shared.mb_wordwrap.php';
            $compiler->template->required_plugins[ 'nocache' ][ 'wordwrap' ][ 'modifier' ][ 'function' ] =
                'smarty_mb_wordwrap';
        } else {
            $compiler->parent_compiler->template->compiled->required_plugins[ 'compiled' ][ 'wordwrap' ][ 'modifier' ][ 'file' ] =
                SMARTY_PLUGINS_DIR . 'shared.mb_wordwrap.php';
            $compiler->parent_compiler->template->compiled->required_plugins[ 'compiled' ][ 'wordwrap' ][ 'modifier' ][ 'function' ] =
                'smarty_mb_wordwrap';
=======
    if (!isset($params[1])) {
        $params[1] = 80;
    }
    if (!isset($params[2])) {
        $params[2] = '"\n"';
    }
    if (!isset($params[3])) {
        $params[3] = 'false';
    }
    $function = 'wordwrap';
    if (Smarty::$_MBSTRING) {
    if ($compiler->template->caching && ($compiler->tag_nocache | $compiler->nocache)) {
            $compiler->template->required_plugins['nocache']['wordwrap']['modifier']['file'] = SMARTY_PLUGINS_DIR .'shared.mb_wordwrap.php';
            $compiler->template->required_plugins['nocache']['wordwrap']['modifier']['function'] = 'smarty_mb_wordwrap';
        } else {
            $compiler->template->required_plugins['compiled']['wordwrap']['modifier']['file'] = SMARTY_PLUGINS_DIR .'shared.mb_wordwrap.php';
            $compiler->template->required_plugins['compiled']['wordwrap']['modifier']['function'] = 'smarty_mb_wordwrap';
>>>>>>> old/master
        }
        $function = 'smarty_mb_wordwrap';
    }

<<<<<<< HEAD
    return $function . '(' . $params[ 0 ] . ',' . $params[ 1 ] . ',' . $params[ 2 ] . ',' . $params[ 3 ] . ')';
=======
    return $function . '(' . $params[0] . ',' . $params[1] . ',' . $params[2] . ',' . $params[3] . ')';
>>>>>>> old/master
}
