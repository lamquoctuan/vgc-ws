<?php
class Autoloader {
    protected $topDir = null;
    public function Autoloader() {
        $this->topDir = TEMP_DIR . '/inc';
    }

    protected function loadFilesFromDir($dir = null, $ext='php') {
        $files_array = $this->fetchFilenames($dir, $ext);
        if (count($files_array) > 0) {
            foreach ( $files_array as $filename ) {
                require_once $filename;
            }
        }

        $subDirs = $this->fetchSubdirs($dir);
        if (count($subDirs) > 0) {
            foreach ($subDirs as $subDir) {
                $this->loadFilesFromDir($subDir);
            }
        }
    }

    protected function fetchFilenames($dir, $ext='php') {
        return glob ( $dir . "/*.$ext" );
    }

    public function autoload() {
        $this->loadFilesFromDir($this->topDir);
        $subDirs = $this->fetchSubdirs();
        if (count($subDirs) > 0) {
            foreach ($subDirs as $subDir) {
                $this->loadFilesFromDir($subDir);
            }
        }
    }

    protected function fetchSubdirs($parent = null) {
        if (is_null($parent)) {
            $parent = $this->topDir;
        }
        return glob ( $parent . "/*", GLOB_ONLYDIR );
    }
}
?>