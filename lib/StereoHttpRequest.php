<?php

class StereoHttpRequest {
    private static $_instance;

    private $_uri;
    private $_parameters;

    /**
     * @return StereoHttpRequest
     */
    public static function getInstance() {
        if (! self::$_instance) {
            self::$_instance = new StereoHttpRequest();
        }

        return self::$_instance;
    }

    private function __construct() {
        $this->_uri = null;
        $this->_parameters = array();

        $this->_setUriFromRequest();
        $this->_parseParameters();
    }

    public function getParameters() {
        return $this->_parameters;
    }

    public function get($key, $default = null) {
        return (isset($this->_parameters[$key])) ? $this->_parameters[$key] : $default;
    }

    private function _setUriFromRequest() {
        $this->_uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
    }

    private function _parseParameters() {
        $query = parse_url($this->_uri, PHP_URL_QUERY);
        parse_str($query, $this->_parameters);
    }
}
