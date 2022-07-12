<?php
    class Pages extends Controller {
        public function __construct(){
          // $this->postModel = $this->model('Post');;
        }
        
        public function index(){
          //  $posts = $this->postModel->getPosts();
            //$this->view('hello'); //must die bec view.php does not exist
            //$this->view('pages/index', ['title' => 'Welcome']); // array ['title'(key) => 'Welcome' (value)]
            $data = [
                'title'=> 'Welcome'//,
                //'posts'=> $posts
            ];
            
            

            $this->view('pages/index', $data);
        }

        public function about(){
            $data = [
                'title'=> 'About Us'
            ];
            $this->view('pages/about', $data);
        }
    }