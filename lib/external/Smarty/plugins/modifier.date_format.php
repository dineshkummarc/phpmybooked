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
 * Smarty date_format modifier plugin
<<<<<<< HEAD
=======
 *
>>>>>>> old/master
 * Type:     modifier<br>
 * Name:     date_format<br>
 * Purpose:  format datestamps via strftime<br>
 * Input:<br>
 *          - string: input date string
 *          - format: strftime format for output
 *          - default_date: default date if $string is empty
 *
<<<<<<< HEAD
 * @link   http://www.smarty.net/manual/en/language.modifier.date.format.php date_format (Smarty online manual)
 * @author Monte Ohrt <monte at ohrt dot com>
 *
=======
 * @link http://www.smarty.net/manual/en/language.modifier.date.format.php date_format (Smarty online manual)
 * @author Monte Ohrt <monte at ohrt dot com>
>>>>>>> old/master
 * @param string $string       input date string
 * @param string $format       strftime format for output
 * @param string $default_date default date if $string is empty
 * @param string $formatter    either 'strftime' or 'auto'
<<<<<<< HEAD
 *
 * @return string |void
 * @uses   smarty_make_timestamp()
 */
function smarty_modifier_date_format($string, $format = null, $default_date = '', $formatter = 'auto')
=======
 * @return string |void
 * @uses smarty_make_timestamp()
 */
function smarty_modifier_date_format($string, $format=null, $default_date='', $formatter='auto')
>>>>>>> old/master
{
    if ($format === null) {
        $format = Smarty::$_DATE_FORMAT;
    }
    /**
<<<<<<< HEAD
     * require_once the {@link shared.make_timestamp.php} plugin
     */
=======
    * Include the {@link shared.make_timestamp.php} plugin
    */
>>>>>>> old/master
    require_once(SMARTY_PLUGINS_DIR . 'shared.make_timestamp.php');
    if ($string != '' && $string != '0000-00-00' && $string != '0000-00-00 00:00:00') {
        $timestamp = smarty_make_timestamp($string);
    } elseif ($default_date != '') {
        $timestamp = smarty_make_timestamp($default_date);
    } else {
        return;
    }
<<<<<<< HEAD
    if ($formatter == 'strftime' || ($formatter == 'auto' && strpos($format, '%') !== false)) {
=======
    if ($formatter=='strftime'||($formatter=='auto'&&strpos($format,'%')!==false)) {
>>>>>>> old/master
        if (DS == '\\') {
            $_win_from = array('%D', '%h', '%n', '%r', '%R', '%t', '%T');
            $_win_to = array('%m/%d/%y', '%b', "\n", '%I:%M:%S %p', '%H:%M', "\t", '%H:%M:%S');
            if (strpos($format, '%e') !== false) {
                $_win_from[] = '%e';
                $_win_to[] = sprintf('%\' 2d', date('j', $timestamp));
            }
            if (strpos($format, '%l') !== false) {
                $_win_from[] = '%l';
                $_win_to[] = sprintf('%\' 2d', date('h', $timestamp));
            }
            $format = str_replace($_win_from, $_win_to, $format);
        }

        return strftime($format, $timestamp);
    } else {
        return date($format, $timestamp);
    }
}
