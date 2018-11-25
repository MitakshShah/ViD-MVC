<?php 

class Pages extends Controller {
    
    public function __construct() {
        $this->postModel = $this->model('Post');
    }

    public function index() {
        $posts = $this->postModel->getPosts();
        $data = [
            'title' => 'welcome',
            'posts' => $posts
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