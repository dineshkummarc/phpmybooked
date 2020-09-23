<?php
/**
 * Smarty Internal Plugin Debug
<<<<<<< HEAD
 * Class to collect data for the Smarty Debugging Console
 *
 * @package    Smarty
 * @subpackage Debug
 * @author     Uwe Tews
=======
 *
 * Class to collect data for the Smarty Debugging Consol
 *
 * @package Smarty
 * @subpackage Debug
 * @author Uwe Tews
>>>>>>> old/master
 */

/**
 * Smarty Internal Plugin Debug Class
 *
<<<<<<< HEAD
 * @package    Smarty
=======
 * @package Smarty
>>>>>>> old/master
 * @subpackage Debug
 */
class Smarty_Internal_Debug extends Smarty_Internal_Data
{
    /**
     * template data
     *
     * @var array
     */
<<<<<<< HEAD
    public $template_data = array();
=======
    public static $template_data = array();
>>>>>>> old/master

    /**
     * List of uid's which shall be ignored
     *
     * @var array
     */
<<<<<<< HEAD
    public $ignore_uid = array();

    /**
     * Index of display() and fetch() calls
     *
     * @var int
     */
    public $index = 0;

    /**
     * Counter for window offset
     *
     * @var int
     */
    public $offset = 0;

    /**
     * Start logging template
     *
     * @param \Smarty_Internal_Template $template template
     * @param null                      $mode     true: display   false: fetch  null: subtemplate
     */
    public function start_template(Smarty_Internal_Template $template, $mode = null)
    {
        if (isset($mode)) {
            $this->index ++;
            $this->offset ++;
            $this->template_data[ $this->index ] = null;
        }
        $key = $this->get_key($template);
        $this->template_data[ $this->index ][ $key ][ 'start_template_time' ] = microtime(true);
    }

    /**
     * End logging of cache time
     *
     * @param \Smarty_Internal_Template $template cached template
     */
    public function end_template(Smarty_Internal_Template $template)
    {
        $key = $this->get_key($template);
        $this->template_data[ $this->index ][ $key ][ 'total_time' ] +=
            microtime(true) - $this->template_data[ $this->index ][ $key ][ 'start_template_time' ];
        //$this->template_data[$this->index][$key]['properties'] = $template->properties;
=======
    public static $ignore_uid = array();

    /**
     * Ignore template
     *
     * @param object $template
     */
    public static function ignore($template)
    {
        // calculate Uid if not already done
        if ($template->source->uid == '') {
            $template->source->filepath;
        }
        self::$ignore_uid[$template->source->uid] = true;
>>>>>>> old/master
    }

    /**
     * Start logging of compile time
     *
<<<<<<< HEAD
     * @param \Smarty_Internal_Template $template
     */
    public function start_compile(Smarty_Internal_Template $template)
=======
     * @param object $template
     */
    public static function start_compile($template)
>>>>>>> old/master
    {
        static $_is_stringy = array('string' => true, 'eval' => true);
        if (!empty($template->compiler->trace_uid)) {
            $key = $template->compiler->trace_uid;
<<<<<<< HEAD
            if (!isset($this->template_data[ $this->index ][ $key ])) {
                if (isset($_is_stringy[ $template->source->type ])) {
                    $this->template_data[ $this->index ][ $key ][ 'name' ] =
                        '\'' . substr($template->source->name, 0, 25) . '...\'';
                } else {
                    $this->template_data[ $this->index ][ $key ][ 'name' ] = $template->source->filepath;
                }
                $this->template_data[ $this->index ][ $key ][ 'compile_time' ] = 0;
                $this->template_data[ $this->index ][ $key ][ 'render_time' ] = 0;
                $this->template_data[ $this->index ][ $key ][ 'cache_time' ] = 0;
            }
        } else {
            if (isset($this->ignore_uid[ $template->source->uid ])) {
                return;
            }
            $key = $this->get_key($template);
        }
        $this->template_data[ $this->index ][ $key ][ 'start_time' ] = microtime(true);
=======
            if (!isset(self::$template_data[$key])) {
                if (isset($_is_stringy[$template->source->type])) {
                    self::$template_data[$key]['name'] = '\'' . substr($template->source->name, 0, 25) . '...\'';
                } else {
                    self::$template_data[$key]['name'] = $template->source->filepath;
                }
                self::$template_data[$key]['compile_time'] = 0;
                self::$template_data[$key]['render_time'] = 0;
                self::$template_data[$key]['cache_time'] = 0;
            }
        } else {
            if (isset(self::$ignore_uid[$template->source->uid])) {
                return;
            }
            $key = self::get_key($template);
        }
        self::$template_data[$key]['start_time'] = microtime(true);
>>>>>>> old/master
    }

    /**
     * End logging of compile time
     *
<<<<<<< HEAD
     * @param \Smarty_Internal_Template $template
     */
    public function end_compile(Smarty_Internal_Template $template)
=======
     * @param object $template
     */
    public static function end_compile($template)
>>>>>>> old/master
    {
        if (!empty($template->compiler->trace_uid)) {
            $key = $template->compiler->trace_uid;
        } else {
<<<<<<< HEAD
            if (isset($this->ignore_uid[ $template->source->uid ])) {
                return;
            }

            $key = $this->get_key($template);
        }
        $this->template_data[ $this->index ][ $key ][ 'compile_time' ] +=
            microtime(true) - $this->template_data[ $this->index ][ $key ][ 'start_time' ];
=======
            if (isset(self::$ignore_uid[$template->source->uid])) {
                return;
            }

            $key = self::get_key($template);
        }
        self::$template_data[$key]['compile_time'] += microtime(true) - self::$template_data[$key]['start_time'];
>>>>>>> old/master
    }

    /**
     * Start logging of render time
     *
<<<<<<< HEAD
     * @param \Smarty_Internal_Template $template
     */
    public function start_render(Smarty_Internal_Template $template)
    {
        $key = $this->get_key($template);
        $this->template_data[ $this->index ][ $key ][ 'start_time' ] = microtime(true);
=======
     * @param object $template
     */
    public static function start_render($template)
    {
        $key = self::get_key($template);
        self::$template_data[$key]['start_time'] = microtime(true);
>>>>>>> old/master
    }

    /**
     * End logging of compile time
     *
<<<<<<< HEAD
     * @param \Smarty_Internal_Template $template
     */
    public function end_render(Smarty_Internal_Template $template)
    {
        $key = $this->get_key($template);
        $this->template_data[ $this->index ][ $key ][ 'render_time' ] +=
            microtime(true) - $this->template_data[ $this->index ][ $key ][ 'start_time' ];
=======
     * @param object $template
     */
    public static function end_render($template)
    {
        $key = self::get_key($template);
        self::$template_data[$key]['render_time'] += microtime(true) - self::$template_data[$key]['start_time'];
>>>>>>> old/master
    }

    /**
     * Start logging of cache time
     *
<<<<<<< HEAD
     * @param \Smarty_Internal_Template $template cached template
     */
    public function start_cache(Smarty_Internal_Template $template)
    {
        $key = $this->get_key($template);
        $this->template_data[ $this->index ][ $key ][ 'start_time' ] = microtime(true);
=======
     * @param object $template cached template
     */
    public static function start_cache($template)
    {
        $key = self::get_key($template);
        self::$template_data[$key]['start_time'] = microtime(true);
>>>>>>> old/master
    }

    /**
     * End logging of cache time
     *
<<<<<<< HEAD
     * @param \Smarty_Internal_Template $template cached template
     */
    public function end_cache(Smarty_Internal_Template $template)
    {
        $key = $this->get_key($template);
        $this->template_data[ $this->index ][ $key ][ 'cache_time' ] +=
            microtime(true) - $this->template_data[ $this->index ][ $key ][ 'start_time' ];
    }

    /**
     * Register template object
     *
     * @param \Smarty_Internal_Template $template cached template
     */
    public function register_template(Smarty_Internal_Template $template)
    {
    }

    /**
     * Register data object
     *
     * @param \Smarty_Data $data data object
     */
    public static function register_data(Smarty_Data $data)
    {
    }

    /**
     * Opens a window for the Smarty Debugging Console and display the data
     *
     * @param Smarty_Internal_Template|Smarty $obj object to debug
     * @param bool                            $full
     */
    public function display_debug($obj, $full = false)
    {
        if (!$full) {
            $this->offset ++;
            $savedIndex = $this->index;
            $this->index = 9999;
        }
        if ($obj->_objType == 1) {
            $smarty = $obj;
        } else {
            $smarty = $obj->smarty;
        }
        // create fresh instance of smarty for displaying the debug console
        // to avoid problems if the application did overload the Smarty class
        $debObj = new Smarty();
        // copy the working dirs from application
        $debObj->setCompileDir($smarty->getCompileDir());
        // init properties by hand as user may have edited the original Smarty class
        $debObj->setPluginsDir(is_dir(__DIR__ . '/../plugins') ? __DIR__ . '/../plugins' : $smarty->getPluginsDir());
        $debObj->force_compile = false;
        $debObj->compile_check = true;
        $debObj->left_delimiter = '{';
        $debObj->right_delimiter = '}';
        $debObj->security_policy = null;
        $debObj->debugging = false;
        $debObj->debugging_ctrl = 'NONE';
        $debObj->error_reporting = E_ALL & ~E_NOTICE;
        $debObj->debug_tpl = isset($smarty->debug_tpl) ? $smarty->debug_tpl : 'file:' . __DIR__ . '/../debug.tpl';
        $debObj->registered_plugins = array();
        $debObj->registered_resources = array();
        $debObj->registered_filters = array();
        $debObj->autoload_filters = array();
        $debObj->default_modifiers = array();
        $debObj->escape_html = true;
        $debObj->caching = false;
        $debObj->compile_id = null;
        $debObj->cache_id = null;
        // prepare information of assigned variables
        $ptr = $this->get_debug_vars($obj);
=======
     * @param object $template cached template
     */
    public static function end_cache($template)
    {
        $key = self::get_key($template);
        self::$template_data[$key]['cache_time'] += microtime(true) - self::$template_data[$key]['start_time'];
    }

    /**
     * Opens a window for the Smarty Debugging Consol and display the data
     *
     * @param Smarty_Internal_Template|Smarty $obj object to debug
     */
    public static function display_debug($obj)
    {
        // prepare information of assigned variables
        $ptr = self::get_debug_vars($obj);
        if ($obj instanceof Smarty) {
            $smarty = clone $obj;
        } else {
            $smarty = clone $obj->smarty;
        }
>>>>>>> old/master
        $_assigned_vars = $ptr->tpl_vars;
        ksort($_assigned_vars);
        $_config_vars = $ptr->config_vars;
        ksort($_config_vars);
<<<<<<< HEAD
        $debugging = $smarty->debugging;

        $_template = new Smarty_Internal_Template($debObj->debug_tpl, $debObj);
        if ($obj->_objType == 2) {
            $_template->assign('template_name', $obj->source->type . ':' . $obj->source->name);
        }
        if ($obj->_objType == 1 || $full) {
            $_template->assign('template_data', $this->template_data[ $this->index ]);
=======
        $smarty->registered_filters = array();
        $smarty->autoload_filters = array();
        $smarty->default_modifiers = array();
        $smarty->force_compile = false;
        $smarty->left_delimiter = '{';
        $smarty->right_delimiter = '}';
        $smarty->debugging = false;
        $smarty->debugging_ctrl = 'NONE';
        $smarty->force_compile = false;
        $_template = new Smarty_Internal_Template($smarty->debug_tpl, $smarty);
        $_template->caching = false;
        $_template->disableSecurity();
        $_template->cache_id = null;
        $_template->compile_id = null;
        if ($obj instanceof Smarty_Internal_Template) {
            $_template->assign('template_name', $obj->source->type . ':' . $obj->source->name);
        }
        if ($obj instanceof Smarty) {
            $_template->assign('template_data', self::$template_data);
>>>>>>> old/master
        } else {
            $_template->assign('template_data', null);
        }
        $_template->assign('assigned_vars', $_assigned_vars);
        $_template->assign('config_vars', $_config_vars);
        $_template->assign('execution_time', microtime(true) - $smarty->start_time);
<<<<<<< HEAD
        $_template->assign('display_mode', $debugging == 2 || !$full);
        $_template->assign('offset', $this->offset * 50);
        echo $_template->fetch();
        if (isset($full)) {
            $this->index --;
        }
        if (!$full) {
            $this->index = $savedIndex;
        }
=======
        echo $_template->fetch();
>>>>>>> old/master
    }

    /**
     * Recursively gets variables from all template/data scopes
     *
     * @param  Smarty_Internal_Template|Smarty_Data $obj object to debug
<<<<<<< HEAD
     *
     * @return StdClass
     */
    public function get_debug_vars($obj)
    {
        $config_vars = array();
        foreach ($obj->config_vars as $key => $var) {
            $config_vars[ $key ][ 'value' ] = $var;
            if ($obj->_objType == 2) {
                $config_vars[ $key ][ 'scope' ] = $obj->source->type . ':' . $obj->source->name;
            } elseif ($obj->_objType == 4) {
                $tpl_vars[ $key ][ 'scope' ] = $obj->dataObjectName;
            } else {
                $config_vars[ $key ][ 'scope' ] = 'Smarty object';
            }
        }
        $tpl_vars = array();
        foreach ($obj->tpl_vars as $key => $var) {
            foreach ($var as $varkey => $varvalue) {
                if ($varkey == 'value') {
                    $tpl_vars[ $key ][ $varkey ] = $varvalue;
                } else {
                    if ($varkey == 'nocache') {
                        if ($varvalue == true) {
                            $tpl_vars[ $key ][ $varkey ] = $varvalue;
                        }
                    } else {
                        if ($varkey != 'scope' || $varvalue !== 0) {
                            $tpl_vars[ $key ][ 'attributes' ][ $varkey ] = $varvalue;
                        }
                    }
                }
            }
            if ($obj->_objType == 2) {
                $tpl_vars[ $key ][ 'scope' ] = $obj->source->type . ':' . $obj->source->name;
            } elseif ($obj->_objType == 4) {
                $tpl_vars[ $key ][ 'scope' ] = $obj->dataObjectName;
            } else {
                $tpl_vars[ $key ][ 'scope' ] = 'Smarty object';
=======
     * @return StdClass
     */
    public static function get_debug_vars($obj)
    {
        $config_vars = $obj->config_vars;
        $tpl_vars = array();
        foreach ($obj->tpl_vars as $key => $var) {
            $tpl_vars[$key] = clone $var;
            if ($obj instanceof Smarty_Internal_Template) {
                $tpl_vars[$key]->scope = $obj->source->type . ':' . $obj->source->name;
            } elseif ($obj instanceof Smarty_Data) {
                $tpl_vars[$key]->scope = 'Data object';
            } else {
                $tpl_vars[$key]->scope = 'Smarty root';
>>>>>>> old/master
            }
        }

        if (isset($obj->parent)) {
<<<<<<< HEAD
            $parent = $this->get_debug_vars($obj->parent);
            foreach ($parent->tpl_vars as $name => $pvar) {
                if (isset($tpl_vars[ $name ]) && $tpl_vars[ $name ][ 'value' ] === $pvar[ 'value' ]) {
                    $tpl_vars[ $name ][ 'scope' ] = $pvar[ 'scope' ];
                }
            }
            $tpl_vars = array_merge($parent->tpl_vars, $tpl_vars);

            foreach ($parent->config_vars as $name => $pvar) {
                if (isset($config_vars[ $name ]) && $config_vars[ $name ][ 'value' ] === $pvar[ 'value' ]) {
                    $config_vars[ $name ][ 'scope' ] = $pvar[ 'scope' ];
                }
            }
            $config_vars = array_merge($parent->config_vars, $config_vars);
        } else {
            foreach (Smarty::$global_tpl_vars as $key => $var) {
                if (!array_key_exists($key, $tpl_vars)) {
                    foreach ($var as $varkey => $varvalue) {
                        if ($varkey == 'value') {
                            $tpl_vars[ $key ][ $varkey ] = $varvalue;
                        } else {
                            if ($varkey == 'nocache') {
                                if ($varvalue == true) {
                                    $tpl_vars[ $key ][ $varkey ] = $varvalue;
                                }
                            } else {
                                if ($varkey != 'scope' || $varvalue !== 0) {
                                    $tpl_vars[ $key ][ 'attributes' ][ $varkey ] = $varvalue;
                                }
                            }
                        }
                    }
                    $tpl_vars[ $key ][ 'scope' ] = 'Global';
=======
            $parent = self::get_debug_vars($obj->parent);
            $tpl_vars = array_merge($parent->tpl_vars, $tpl_vars);
            $config_vars = array_merge($parent->config_vars, $config_vars);
        } else {
            foreach (Smarty::$global_tpl_vars as $name => $var) {
                if (!array_key_exists($name, $tpl_vars)) {
                    $clone = clone $var;
                    $clone->scope = 'Global';
                    $tpl_vars[$name] = $clone;
>>>>>>> old/master
                }
            }
        }

<<<<<<< HEAD
        return (object) array('tpl_vars' => $tpl_vars, 'config_vars' => $config_vars);
=======
        return (object)array('tpl_vars' => $tpl_vars, 'config_vars' => $config_vars);
>>>>>>> old/master
    }

    /**
     * Return key into $template_data for template
     *
<<<<<<< HEAD
     * @param \Smarty_Internal_Template $template template object
     *
     * @return string key into $template_data
     */
    private function get_key(Smarty_Internal_Template $template)
=======
     * @param  object $template template object
     * @return string key into $template_data
     */
    private static function get_key($template)
>>>>>>> old/master
    {
        static $_is_stringy = array('string' => true, 'eval' => true);
        // calculate Uid if not already done
        if ($template->source->uid == '') {
            $template->source->filepath;
        }
        $key = $template->source->uid;
<<<<<<< HEAD
        if (isset($this->template_data[ $this->index ][ $key ])) {
            return $key;
        } else {
            if (isset($_is_stringy[ $template->source->type ])) {
                $this->template_data[ $this->index ][ $key ][ 'name' ] =
                    '\'' . substr($template->source->name, 0, 25) . '...\'';
            } else {
                $this->template_data[ $this->index ][ $key ][ 'name' ] = $template->source->filepath;
            }
            $this->template_data[ $this->index ][ $key ][ 'compile_time' ] = 0;
            $this->template_data[ $this->index ][ $key ][ 'render_time' ] = 0;
            $this->template_data[ $this->index ][ $key ][ 'cache_time' ] = 0;
            $this->template_data[ $this->index ][ $key ][ 'total_time' ] = 0;
=======
        if (isset(self::$template_data[$key])) {
            return $key;
        } else {
            if (isset($_is_stringy[$template->source->type])) {
                self::$template_data[$key]['name'] = '\'' . substr($template->source->name, 0, 25) . '...\'';
            } else {
                self::$template_data[$key]['name'] = $template->source->filepath;
            }
            self::$template_data[$key]['compile_time'] = 0;
            self::$template_data[$key]['render_time'] = 0;
            self::$template_data[$key]['cache_time'] = 0;
>>>>>>> old/master

            return $key;
        }
    }

<<<<<<< HEAD
    /**
     * Ignore template
     *
     * @param \Smarty_Internal_Template $template
     */
    public function ignore(Smarty_Internal_Template $template)
    {
        // calculate Uid if not already done
        if ($template->source->uid == '') {
            $template->source->filepath;
        }
        $this->ignore_uid[ $template->source->uid ] = true;
    }

    /**
     * handle 'URL' debugging mode
     *
     * @param Smarty $smarty
     */
    public function debugUrl(Smarty $smarty)
    {
        if (isset($_SERVER[ 'QUERY_STRING' ])) {
            $_query_string = $_SERVER[ 'QUERY_STRING' ];
        } else {
            $_query_string = '';
        }
        if (false !== strpos($_query_string, $smarty->smarty_debug_id)) {
            if (false !== strpos($_query_string, $smarty->smarty_debug_id . '=on')) {
                // enable debugging for this browser session
                setcookie('SMARTY_DEBUG', true);
                $smarty->debugging = true;
            } elseif (false !== strpos($_query_string, $smarty->smarty_debug_id . '=off')) {
                // disable debugging for this browser session
                setcookie('SMARTY_DEBUG', false);
                $smarty->debugging = false;
            } else {
                // enable debugging for this page
                $smarty->debugging = true;
            }
        } else {
            if (isset($_COOKIE[ 'SMARTY_DEBUG' ])) {
                $smarty->debugging = true;
            }
        }
    }
=======
>>>>>>> old/master
}
