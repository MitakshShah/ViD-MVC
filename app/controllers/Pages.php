<?php 

class Pages extends Controller {
    
    public function __construct() {
        
    }

    public function index() {
        $data = [
            'title' => 'welcome'
        ];
        $this->view('pages/index', $data);
    }

    public function test() {
        $data = [
            'title' => 'Test'
        ];
        $this->view('pages/test', $data);
    }
}