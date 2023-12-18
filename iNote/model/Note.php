<?php
namespace Model;

class Note {
    public $id;
    public $title;
    public $content;
    public $type_id;
    public $name;

    public function __construct($title, $content, $type_id) {
        $this->title = $title;
        $this->content = $content;
        $this->type_id = $type_id;
    }
}