<?php

class Stereobox {
    private static $_instance;

    private $_codeFiles;

    /**
     * @return Stereobox
     */
    public static function getInstance() {
        if (! self::$_instance) {
            self::$_instance = new Stereobox();
        }
    
        return self::$_instance;
    }

    private function __construct() {
        $this->_initCodeFiles();
    }

    private function _initCodeFiles() {
        $files  = scandir(STEREOBOX_CODE_DIR);
        $retarr = array();

        foreach ($files as $key => $file) {
            $path = STEREOBOX_CODE_DIR . DS . $file;

            if (is_dir($path)) {
                unset($files[$key]);
                continue;
            }

            $filename  = pathinfo($path, PATHINFO_FILENAME);
            $extension = pathinfo($path, PATHINFO_EXTENSION);

            if ($extension != EXECUTABLE_EXTENSION) {
                unset($files[$key]);
                continue;
            }

            $retarr[] = $filename;
        }

        $this->_codeFiles = $retarr;
    }

    public function getCodeFiles() {
        return $this->_codeFiles;
    }

    public function getCodeFileFromRequest() {
        $file = StereoHttpRequest::getInstance()->get('file');
        $path = STEREOBOX_CODE_DIR . DS . $file . '.' . EXECUTABLE_EXTENSION;

        if ($file && file_exists($path)) {
            return $path;
        }

        return null;
    }

    public function readInputFile($file) {
        $contents = file_get_contents(STEREOBOX_INPUT_DIR . DS . $file);

        return $contents;
    }
}

?>