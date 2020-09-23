<?php
/**
 * Smarty Internal Plugin Resource Registered
 *
<<<<<<< HEAD
 * @package    Smarty
 * @subpackage TemplateResources
 * @author     Uwe Tews
 * @author     Rodney Rehm
=======
 * @package Smarty
 * @subpackage TemplateResources
 * @author Uwe Tews
 * @author Rodney Rehm
>>>>>>> old/master
 */

/**
 * Smarty Internal Plugin Resource Registered
<<<<<<< HEAD
 * Implements the registered resource for Smarty template
 *
 * @package    Smarty
=======
 *
 * Implements the registered resource for Smarty template
 *
 * @package Smarty
>>>>>>> old/master
 * @subpackage TemplateResources
 * @deprecated
 */
class Smarty_Internal_Resource_Registered extends Smarty_Resource
{
    /**
     * populate Source Object with meta data from Resource
     *
     * @param  Smarty_Template_Source   $source    source object
     * @param  Smarty_Internal_Template $_template template object
<<<<<<< HEAD
     *
     * @return void
     */
    public function populate(Smarty_Template_Source $source, Smarty_Internal_Template $_template = null)
    {
        $source->filepath = $source->type . ':' . $source->name;
        $source->uid = sha1($source->filepath . $source->smarty->_joined_template_dir);
        $source->timestamp = $this->getTemplateTimestamp($source);
        $source->exists = !!$source->timestamp;
=======
     * @return void
     */
    public function populate(Smarty_Template_Source $source, Smarty_Internal_Template $_template=null)
    {
        $source->filepath = $source->type . ':' . $source->name;
        $source->uid = sha1($source->filepath);
        if ($source->smarty->compile_check) {
            $source->timestamp = $this->getTemplateTimestamp($source);
            $source->exists = !!$source->timestamp;
        }
>>>>>>> old/master
    }

    /**
     * populate Source Object with timestamp and exists from Resource
     *
     * @param  Smarty_Template_Source $source source object
<<<<<<< HEAD
     *
=======
>>>>>>> old/master
     * @return void
     */
    public function populateTimestamp(Smarty_Template_Source $source)
    {
        $source->timestamp = $this->getTemplateTimestamp($source);
        $source->exists = !!$source->timestamp;
    }

    /**
     * Get timestamp (epoch) the template source was modified
     *
     * @param  Smarty_Template_Source $source source object
<<<<<<< HEAD
     *
=======
>>>>>>> old/master
     * @return integer|boolean        timestamp (epoch) the template was modified, false if resources has no timestamp
     */
    public function getTemplateTimestamp(Smarty_Template_Source $source)
    {
        // return timestamp
        $time_stamp = false;
<<<<<<< HEAD
        call_user_func_array($source->smarty->registered_resources[ $source->type ][ 0 ][ 1 ],
                             array($source->name, &$time_stamp, $source->smarty));
=======
        call_user_func_array($source->smarty->registered_resources[$source->type][0][1], array($source->name, &$time_stamp, $source->smarty));
>>>>>>> old/master

        return is_numeric($time_stamp) ? (int) $time_stamp : $time_stamp;
    }

    /**
     * Load template's source by invoking the registered callback into current template object
     *
     * @param  Smarty_Template_Source $source source object
<<<<<<< HEAD
     *
=======
>>>>>>> old/master
     * @return string                 template source
     * @throws SmartyException        if source cannot be loaded
     */
    public function getContent(Smarty_Template_Source $source)
    {
        // return template string
<<<<<<< HEAD
        $content = null;
        $t = call_user_func_array($source->smarty->registered_resources[ $source->type ][ 0 ][ 0 ],
                                  array($source->name, &$content, $source->smarty));
=======
        $t = call_user_func_array($source->smarty->registered_resources[$source->type][0][0], array($source->name, &$source->content, $source->smarty));
>>>>>>> old/master
        if (is_bool($t) && !$t) {
            throw new SmartyException("Unable to read template {$source->type} '{$source->name}'");
        }

<<<<<<< HEAD
        return $content;
=======
        return $source->content;
>>>>>>> old/master
    }

    /**
     * Determine basename for compiled filename
     *
     * @param  Smarty_Template_Source $source source object
<<<<<<< HEAD
     *
     * @return string                 resource's basename
     */
    public function getBasename(Smarty_Template_Source $source)
    {
        return basename($source->name);
    }
=======
     * @return string                 resource's basename
     */
    protected function getBasename(Smarty_Template_Source $source)
    {
        return basename($source->name);
    }

>>>>>>> old/master
}
