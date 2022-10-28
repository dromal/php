<?php

    require_once '58interface.php';
    class file implements iFile
    {
        private $f;

        public function __construct($filePath)
        {
            $this->f = $filePath;
        }

        public function getPath()
        {
            return $this->f;
        }

        public function getDir()
        {
            $path_parts = pathinfo($this->f);
            return $path_parts['dirname'];
        }

        public function getName()
        {
            $path_parts = pathinfo($this->f);
            return $path_parts['basename'];
        }

        public function getExt()
        {
            $path_parts = pathinfo($this->f);
            return $path_parts['extension'];
        }

        public function getSize()
        {
            return filesize($this->f);
        }

        public function getText()
        {
            return file_get_contents($this->f);
        }

        public function setText($text)
        {
            file_put_contents($this->f, $text);

        }

        public function appendText($text)
        {
            $current = file_get_contents($this->f);
            $current .= $text;
            file_put_contents($this->f, $current);
        }

        public function copy($copyPath)
        {
            copy($this->f, $copyPath);
        }

        public function delete()
        {
            unlink($this->f);
        }

        public function rename($newName)
        {
            rename($this->f, $newName);
        }

        public function replace($newPath)
        {
            copy($this->f, $newPath);
            unlink($this->f);
            $this->f = $newPath;
        }
    }
?>