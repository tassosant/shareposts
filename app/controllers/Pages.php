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
                'title'=> 'SharePosts',
                //'posts'=> $posts,
                'description' => 'Simple social network built on the TraversyMVC PHP framework'
            ];
            
            

            $this->view('pages/index', $data);
        }

        public function about(){
            $data = [
                'title'=> 'About Us',
                'description' => 'App to share posts with other users'
            ];
            $this->view('pages/about', $data);
        }
    }