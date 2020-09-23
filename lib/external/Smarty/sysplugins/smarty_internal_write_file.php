<?php
/**
 * Smarty write file plugin
 *
<<<<<<< HEAD
 * @package    Smarty
 * @subpackage PluginsInternal
 * @author     Monte Ohrt
=======
 * @package Smarty
 * @subpackage PluginsInternal
 * @author Monte Ohrt
>>>>>>> old/master
 */

/**
 * Smarty Internal Write File Class
 *
<<<<<<< HEAD
 * @package    Smarty
=======
 * @package Smarty
>>>>>>> old/master
 * @subpackage PluginsInternal
 */
class Smarty_Internal_Write_File
{
    /**
     * Writes file in a safe way to disk
     *
<<<<<<< HEAD
     * @param  string $_filepath complete filepath
     * @param  string $_contents file content
     * @param  Smarty $smarty    smarty instance
     *
     * @throws SmartyException
     * @return boolean true
     */
    public function writeFile($_filepath, $_contents, Smarty $smarty)
=======
     * @param  string  $_filepath complete filepath
     * @param  string  $_contents file content
     * @param  Smarty  $smarty    smarty instance
     * @return boolean true
     */
    public static function writeFile($_filepath, $_contents, Smarty $smarty)
>>>>>>> old/master
    {
        $_error_reporting = error_reporting();
        error_reporting($_error_reporting & ~E_NOTICE & ~E_WARNING);
        if ($smarty->_file_perms !== null) {
            $old_umask = umask(0);
        }

        $_dirpath = dirname($_filepath);
        // if subdirs, create dir structure
        if ($_dirpath !== '.' && !file_exists($_dirpath)) {
            mkdir($_dirpath, $smarty->_dir_perms === null ? 0777 : $smarty->_dir_perms, true);
        }

        // write to tmp file, then move to overt file lock race condition
<<<<<<< HEAD
        $_tmp_file = $_dirpath . DS . str_replace(array('.', ','), '_', uniqid('wrt', true));
        if (!file_put_contents($_tmp_file, $_contents)) {
            error_reporting($_error_reporting);
            throw new SmartyException("unable to write file {$_tmp_file}");
       }
=======
        $_tmp_file = $_dirpath . DS . uniqid('wrt', true);
        if (!file_put_contents($_tmp_file, $_contents)) {
            error_reporting($_error_reporting);
            throw new SmartyException("unable to write file {$_tmp_file}");

            return false;
        }
>>>>>>> old/master

        /*
         * Windows' rename() fails if the destination exists,
         * Linux' rename() properly handles the overwrite.
         * Simply unlink()ing a file might cause other processes
         * currently reading that file to fail, but linux' rename()
         * seems to be smart enough to handle that for us.
         */
        if (Smarty::$_IS_WINDOWS) {
            // remove original file
<<<<<<< HEAD
            if (is_file($_filepath)) {
                @unlink($_filepath);
            }
=======
            @unlink($_filepath);
>>>>>>> old/master
            // rename tmp file
            $success = @rename($_tmp_file, $_filepath);
        } else {
            // rename tmp file
            $success = @rename($_tmp_file, $_filepath);
            if (!$success) {
                // remove original file
<<<<<<< HEAD
                if (is_file($_filepath)) {
                    @unlink($_filepath);
                }
=======
                @unlink($_filepath);
>>>>>>> old/master
                // rename tmp file
                $success = @rename($_tmp_file, $_filepath);
            }
        }
<<<<<<< HEAD
        if (!$success) {
            error_reporting($_error_reporting);
            throw new SmartyException("unable to write file {$_filepath}");
        }
=======

        if (!$success) {
            error_reporting($_error_reporting);
            throw new SmartyException("unable to write file {$_filepath}");

            return false;
        }

>>>>>>> old/master
        if ($smarty->_file_perms !== null) {
            // set file permissions
            chmod($_filepath, $smarty->_file_perms);
            umask($old_umask);
        }
        error_reporting($_error_reporting);

        return true;
    }
<<<<<<< HEAD
=======

>>>>>>> old/master
}
