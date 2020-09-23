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
 * @ignore
 */
<<<<<<< HEAD
require_once(SMARTY_PLUGINS_DIR . 'shared.literal_compiler_param.php');

/**
 * Smarty escape modifier plugin
=======
require_once( SMARTY_PLUGINS_DIR .'shared.literal_compiler_param.php' );

/**
 * Smarty escape modifier plugin
 *
>>>>>>> old/master
 * Type:     modifier<br>
 * Name:     escape<br>
 * Purpose:  escape string for output
 *
<<<<<<< HEAD
 * @link   http://www.smarty.net/docsv2/en/language.modifier.escape count_characters (Smarty online manual)
 * @author Rodney Rehm
 *
 * @param array $params parameters
 * @param       $compiler
 *
=======
 * @link http://www.smarty.net/docsv2/en/language.modifier.escape count_characters (Smarty online manual)
 * @author Rodney Rehm
 * @param array $params parameters
>>>>>>> old/master
 * @return string with compiled code
 */
function smarty_modifiercompiler_escape($params, $compiler)
{
    static $_double_encode = null;
    if ($_double_encode === null) {
        $_double_encode = version_compare(PHP_VERSION, '5.2.3', '>=');
    }

    try {
        $esc_type = smarty_literal_compiler_param($params, 1, 'html');
        $char_set = smarty_literal_compiler_param($params, 2, Smarty::$_CHARSET);
        $double_encode = smarty_literal_compiler_param($params, 3, true);

        if (!$char_set) {
            $char_set = Smarty::$_CHARSET;
        }

        switch ($esc_type) {
            case 'html':
                if ($_double_encode) {
<<<<<<< HEAD
                    return 'htmlspecialchars(' . $params[ 0 ] . ', ENT_QUOTES, ' . var_export($char_set, true) . ', ' .
                           var_export($double_encode, true) . ')';
                } elseif ($double_encode) {
                    return 'htmlspecialchars(' . $params[ 0 ] . ', ENT_QUOTES, ' . var_export($char_set, true) . ')';
=======
                    return 'htmlspecialchars('
                        . $params[0] .', ENT_QUOTES, '
                        . var_export($char_set, true) . ', '
                        . var_export($double_encode, true) . ')';
                } elseif ($double_encode) {
                    return 'htmlspecialchars('
                        . $params[0] .', ENT_QUOTES, '
                        . var_export($char_set, true) . ')';
>>>>>>> old/master
                } else {
                    // fall back to modifier.escape.php
                }

            case 'htmlall':
                if (Smarty::$_MBSTRING) {
                    if ($_double_encode) {
                        // php >=5.2.3 - go native
<<<<<<< HEAD
                        return 'mb_convert_encoding(htmlspecialchars(' . $params[ 0 ] . ', ENT_QUOTES, ' .
                               var_export($char_set, true) . ', ' . var_export($double_encode, true) .
                               '), "HTML-ENTITIES", ' . var_export($char_set, true) . ')';
                    } elseif ($double_encode) {
                        // php <5.2.3 - only handle double encoding
                        return 'mb_convert_encoding(htmlspecialchars(' . $params[ 0 ] . ', ENT_QUOTES, ' .
                               var_export($char_set, true) . '), "HTML-ENTITIES", ' . var_export($char_set, true) . ')';
=======
                        return 'mb_convert_encoding(htmlspecialchars('
                            . $params[0] .', ENT_QUOTES, '
                            . var_export($char_set, true) . ', '
                            . var_export($double_encode, true)
                            . '), "HTML-ENTITIES", '
                            . var_export($char_set, true) . ')';
                    } elseif ($double_encode) {
                        // php <5.2.3 - only handle double encoding
                        return 'mb_convert_encoding(htmlspecialchars('
                            . $params[0] .', ENT_QUOTES, '
                            . var_export($char_set, true)
                            . '), "HTML-ENTITIES", '
                            . var_export($char_set, true) . ')';
>>>>>>> old/master
                    } else {
                        // fall back to modifier.escape.php
                    }
                }

                // no MBString fallback
                if ($_double_encode) {
                    // php >=5.2.3 - go native
<<<<<<< HEAD
                    return 'htmlentities(' . $params[ 0 ] . ', ENT_QUOTES, ' . var_export($char_set, true) . ', ' .
                           var_export($double_encode, true) . ')';
                } elseif ($double_encode) {
                    // php <5.2.3 - only handle double encoding
                    return 'htmlentities(' . $params[ 0 ] . ', ENT_QUOTES, ' . var_export($char_set, true) . ')';
=======
                    return 'htmlentities('
                        . $params[0] .', ENT_QUOTES, '
                        . var_export($char_set, true) . ', '
                        . var_export($double_encode, true) . ')';
                } elseif ($double_encode) {
                    // php <5.2.3 - only handle double encoding
                    return 'htmlentities('
                        . $params[0] .', ENT_QUOTES, '
                        . var_export($char_set, true) . ')';
>>>>>>> old/master
                } else {
                    // fall back to modifier.escape.php
                }

            case 'url':
<<<<<<< HEAD
                return 'rawurlencode(' . $params[ 0 ] . ')';

            case 'urlpathinfo':
                return 'str_replace("%2F", "/", rawurlencode(' . $params[ 0 ] . '))';

            case 'quotes':
                // escape unescaped single quotes
                return 'preg_replace("%(?<!\\\\\\\\)\'%", "\\\'",' . $params[ 0 ] . ')';

            case 'javascript':
                // escape quotes and backslashes, newlines, etc.
                return 'strtr(' . $params[ 0 ] .
                       ', array("\\\\" => "\\\\\\\\", "\'" => "\\\\\'", "\"" => "\\\\\"", "\\r" => "\\\\r", "\\n" => "\\\n", "</" => "<\/" ))';
        }
    }
    catch (SmartyException $e) {
=======
                return 'rawurlencode(' . $params[0] . ')';

            case 'urlpathinfo':
                return 'str_replace("%2F", "/", rawurlencode(' . $params[0] . '))';

            case 'quotes':
                // escape unescaped single quotes
                return 'preg_replace("%(?<!\\\\\\\\)\'%", "\\\'",' . $params[0] . ')';

            case 'javascript':
                // escape quotes and backslashes, newlines, etc.
                return 'strtr(' . $params[0] . ', array("\\\\" => "\\\\\\\\", "\'" => "\\\\\'", "\"" => "\\\\\"", "\\r" => "\\\\r", "\\n" => "\\\n", "</" => "<\/" ))';

        }
    } catch (SmartyException $e) {
>>>>>>> old/master
        // pass through to regular plugin fallback
    }

    // could not optimize |escape call, so fallback to regular plugin
    if ($compiler->template->caching && ($compiler->tag_nocache | $compiler->nocache)) {
<<<<<<< HEAD
        $compiler->parent_compiler->template->compiled->required_plugins[ 'nocache' ][ 'escape' ][ 'modifier' ][ 'file' ] =
            SMARTY_PLUGINS_DIR . 'modifier.escape.php';
        $compiler->parent_compiler->template->compiled->required_plugins[ 'nocache' ][ 'escape' ][ 'modifier' ][ 'function' ] =
            'smarty_modifier_escape';
    } else {
        $compiler->parent_compiler->template->compiled->required_plugins[ 'compiled' ][ 'escape' ][ 'modifier' ][ 'file' ] =
            SMARTY_PLUGINS_DIR . 'modifier.escape.php';
        $compiler->parent_compiler->template->compiled->required_plugins[ 'compiled' ][ 'escape' ][ 'modifier' ][ 'function' ] =
            'smarty_modifier_escape';
    }

    return 'smarty_modifier_escape(' . join(', ', $params) . ')';
=======
        $compiler->template->required_plugins['nocache']['escape']['modifier']['file'] = SMARTY_PLUGINS_DIR .'modifier.escape.php';
        $compiler->template->required_plugins['nocache']['escape']['modifier']['function'] = 'smarty_modifier_escape';
    } else {
        $compiler->template->required_plugins['compiled']['escape']['modifier']['file'] = SMARTY_PLUGINS_DIR .'modifier.escape.php';
        $compiler->template->required_plugins['compiled']['escape']['modifier']['function'] = 'smarty_modifier_escape';
    }

    return 'smarty_modifier_escape(' . join( ', ', $params ) . ')';
>>>>>>> old/master
}
