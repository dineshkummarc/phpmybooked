<?php
/**
 * Smarty Internal Plugin Resource Eval
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
 * Smarty Internal Plugin Resource Eval
<<<<<<< HEAD
 * Implements the strings as resource for Smarty template
 * {@internal unlike string-resources the compiled state of eval-resources is NOT saved for subsequent access}}
 *
 * @package    Smarty
=======
 *
 * Implements the strings as resource for Smarty template
 *
 * {@internal unlike string-resources the compiled state of eval-resources is NOT saved for subsequent access}}
 *
 * @package Smarty
>>>>>>> old/master
 * @subpackage TemplateResources
 */
class Smarty_Internal_Resource_Eval extends Smarty_Resource_Recompiled
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
        $source->uid = $source->filepath = sha1($source->name);
        $source->timestamp = $source->exists = true;
=======
     * @return void
     */
    public function populate(Smarty_Template_Source $source, Smarty_Internal_Template $_template=null)
    {
        $source->uid = $source->filepath = sha1($source->name);
        $source->timestamp = false;
        $source->exists = true;
>>>>>>> old/master
    }

    /**
     * Load template's source from $resource_name into current template object
     *
     * @uses decode() to decode base64 and urlencoded template_resources
<<<<<<< HEAD
     *
     * @param  Smarty_Template_Source $source source object
     *
=======
     * @param  Smarty_Template_Source $source source object
>>>>>>> old/master
     * @return string                 template source
     */
    public function getContent(Smarty_Template_Source $source)
    {
        return $this->decode($source->name);
    }

    /**
     * decode base64 and urlencode
     *
     * @param  string $string template_resource to decode
<<<<<<< HEAD
     *
=======
>>>>>>> old/master
     * @return string decoded template_resource
     */
    protected function decode($string)
    {
        // decode if specified
        if (($pos = strpos($string, ':')) !== false) {
            if (!strncmp($string, 'base64', 6)) {
                return base64_decode(substr($string, 7));
            } elseif (!strncmp($string, 'urlencode', 9)) {
                return urldecode(substr($string, 10));
            }
        }

        return $string;
    }

    /**
     * modify resource_name according to resource handlers specifications
     *
<<<<<<< HEAD
     * @param  Smarty  $smarty        Smarty instance
     * @param  string  $resource_name resource_name to make unique
     * @param  boolean $isConfig      flag for config resource
     *
     * @return string unique resource name
     */
    public function buildUniqueResourceName(Smarty $smarty, $resource_name, $isConfig = false)
    {
        return get_class($this) . '#' . $this->decode($resource_name);
=======
     * @param  Smarty $smarty        Smarty instance
     * @param  string $resource_name resource_name to make unique
     * @param  boolean $is_config    flag for config resource
     * @return string unique resource name
     */
    protected function buildUniqueResourceName(Smarty $smarty, $resource_name, $is_config = false)
    {
        return get_class($this) . '#' .$this->decode($resource_name);
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
        return '';
    }
=======
     * @return string                 resource's basename
     */
    protected function getBasename(Smarty_Template_Source $source)
    {
        return '';
    }

>>>>>>> old/master
}
