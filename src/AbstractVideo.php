<?php
require_once 'InterfaceVideo.php';

abstract class AbstractVideo implements InterfaceVideo {
    protected $name;
    protected $source;
    protected $embedCode;

    public function __construct($name, $source) {
        $this->name = $name;
        $this->source = $source;
    }

    public function getName() : string {
        return $this->name;
    }

    public function getSource() : string {
        return $this->source;
    }
}
?>