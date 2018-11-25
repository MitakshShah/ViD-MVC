<?php

class Post {
    private $db;

    public function __construct() {
        $this->db = new Db;
    }

    public function getPosts(){
        $this->db->query("SELECT * from posts");

        $results = $this->db->getList();
        return $results;
    }
}