<?php
/**
 * Smarty shared plugin
 *
<<<<<<< HEAD
 * @package    Smarty
=======
 * @package Smarty
>>>>>>> old/master
 * @subpackage PluginsShared
 */
if (!function_exists('smarty_mb_str_replace')) {

    /**
     * Multibyte string replace
     *
     * @param  string $search  the string to be searched
     * @param  string $replace the replacement string
     * @param  string $subject the source string
     * @param  int    &$count  number of matches found
<<<<<<< HEAD
     *
     * @return string replaced string
     * @author Rodney Rehm
     */
    function smarty_mb_str_replace($search, $replace, $subject, &$count = 0)
=======
     * @return string replaced string
     * @author Rodney Rehm
     */
    function smarty_mb_str_replace($search, $replace, $subject, &$count=0)
>>>>>>> old/master
    {
        if (!is_array($search) && is_array($replace)) {
            return false;
        }
        if (is_array($subject)) {
            // call mb_replace for each single string in $subject
            foreach ($subject as &$string) {
<<<<<<< HEAD
                $string = smarty_mb_str_replace($search, $replace, $string, $c);
=======
                $string = &smarty_mb_str_replace($search, $replace, $string, $c);
>>>>>>> old/master
                $count += $c;
            }
        } elseif (is_array($search)) {
            if (!is_array($replace)) {
                foreach ($search as &$string) {
                    $subject = smarty_mb_str_replace($string, $replace, $subject, $c);
                    $count += $c;
                }
            } else {
                $n = max(count($search), count($replace));
<<<<<<< HEAD
                while ($n --) {
=======
                while ($n--) {
>>>>>>> old/master
                    $subject = smarty_mb_str_replace(current($search), current($replace), $subject, $c);
                    $count += $c;
                    next($search);
                    next($replace);
                }
            }
        } else {
<<<<<<< HEAD
            $parts = mb_split(preg_quote($search), $subject);
            $count = count($parts) - 1;
            $subject = implode($replace, $parts);
=======
			$subject = str_replace($search, $replace, $subject, $c);
			$count += $c;
//            $parts = mb_split(preg_quote($search), $subject);
//            $count = count($parts) - 1;
//            $subject = implode($replace, $parts);
>>>>>>> old/master
        }

        return $subject;
    }
<<<<<<< HEAD
=======

>>>>>>> old/master
}
