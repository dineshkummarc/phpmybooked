<?php
/**
 * Smarty plugin
 *
<<<<<<< HEAD
 * @package    Smarty
=======
 * @package Smarty
>>>>>>> old/master
 * @subpackage Debug
 */

/**
 * Smarty debug_print_var modifier plugin
<<<<<<< HEAD
=======
 *
>>>>>>> old/master
 * Type:     modifier<br>
 * Name:     debug_print_var<br>
 * Purpose:  formats variable contents for display in the console
 *
 * @author Monte Ohrt <monte at ohrt dot com>
<<<<<<< HEAD
 *
 * @param array|object $var     variable to be formatted
 * @param int          $max     maximum recursion depth if $var is an array or object
 * @param int          $length  maximum string length if $var is a string
 * @param int          $depth   actual recursion depth
 * @param array        $objects processed objects in actual depth to prevent recursive object processing
 *
 * @return string
 */
function smarty_modifier_debug_print_var($var, $max = 10, $length = 40, $depth = 0, $objects = array())
{
    $_replace = array("\n" => '\n', "\r" => '\r', "\t" => '\t');
    switch (gettype($var)) {
        case 'array' :
            $results = '<b>Array (' . count($var) . ')</b>';
            if ($depth == $max) {
                break;
            }
            foreach ($var as $curr_key => $curr_val) {
                $results .= '<br>' . str_repeat('&nbsp;', $depth * 2) . '<b>' . strtr($curr_key, $_replace) .
                            '</b> =&gt; ' .
                            smarty_modifier_debug_print_var($curr_val, $max, $length, ++ $depth, $objects);
                $depth --;
=======
 * @param array|object $var     variable to be formatted
 * @param integer      $depth   maximum recursion depth if $var is an array
 * @param integer      $length  maximum string length if $var is a string
 * @return string
 */
function smarty_modifier_debug_print_var ($var, $depth = 0, $length = 40)
{
    $_replace = array("\n" => '<i>\n</i>',
        "\r" => '<i>\r</i>',
        "\t" => '<i>\t</i>'
        );

    switch (gettype($var)) {
        case 'array' :
            $results = '<b>Array (' . count($var) . ')</b>';
            foreach ($var as $curr_key => $curr_val) {
                $results .= '<br>' . str_repeat('&nbsp;', $depth * 2)
                 . '<b>' . strtr($curr_key, $_replace) . '</b> =&gt; '
                 . smarty_modifier_debug_print_var($curr_val, ++$depth, $length);
                $depth--;
>>>>>>> old/master
            }
            break;

        case 'object' :
            $object_vars = get_object_vars($var);
            $results = '<b>' . get_class($var) . ' Object (' . count($object_vars) . ')</b>';
<<<<<<< HEAD
            if (in_array($var, $objects)) {
                $results .= ' called recursive';
                break;
            }
            if ($depth == $max) {
                break;
            }
            $objects[] = $var;
            foreach ($object_vars as $curr_key => $curr_val) {
                $results .= '<br>' . str_repeat('&nbsp;', $depth * 2) . '<b> -&gt;' . strtr($curr_key, $_replace) .
                            '</b> = ' . smarty_modifier_debug_print_var($curr_val, $max, $length, ++ $depth, $objects);
                $depth --;
=======
            foreach ($object_vars as $curr_key => $curr_val) {
                $results .= '<br>' . str_repeat('&nbsp;', $depth * 2)
                 . '<b> -&gt;' . strtr($curr_key, $_replace) . '</b> = '
                 . smarty_modifier_debug_print_var($curr_val, ++$depth, $length);
                $depth--;
>>>>>>> old/master
            }
            break;

        case 'boolean' :
        case 'NULL' :
        case 'resource' :
            if (true === $var) {
                $results = 'true';
            } elseif (false === $var) {
                $results = 'false';
            } elseif (null === $var) {
                $results = 'null';
            } else {
                $results = htmlspecialchars((string) $var);
            }
            $results = '<i>' . $results . '</i>';
            break;

        case 'integer' :
        case 'float' :
            $results = htmlspecialchars((string) $var);
            break;

        case 'string' :
            $results = strtr($var, $_replace);
            if (Smarty::$_MBSTRING) {
                if (mb_strlen($var, Smarty::$_CHARSET) > $length) {
                    $results = mb_substr($var, 0, $length - 3, Smarty::$_CHARSET) . '...';
                }
            } else {
<<<<<<< HEAD
                if (isset($var[ $length ])) {
=======
                if (isset($var[$length])) {
>>>>>>> old/master
                    $results = substr($var, 0, $length - 3) . '...';
                }
            }

<<<<<<< HEAD
            $results = htmlspecialchars('"' . $results . '"', ENT_QUOTES, Smarty::$_CHARSET);
=======
            $results = htmlspecialchars('"' . $results . '"');
>>>>>>> old/master
            break;

        case 'unknown type' :
        default :
            $results = strtr((string) $var, $_replace);
            if (Smarty::$_MBSTRING) {
                if (mb_strlen($results, Smarty::$_CHARSET) > $length) {
                    $results = mb_substr($results, 0, $length - 3, Smarty::$_CHARSET) . '...';
                }
            } else {
                if (strlen($results) > $length) {
                    $results = substr($results, 0, $length - 3) . '...';
                }
            }

<<<<<<< HEAD
            $results = htmlspecialchars($results, ENT_QUOTES, Smarty::$_CHARSET);
=======
            $results = htmlspecialchars($results);
>>>>>>> old/master
    }

    return $results;
}
