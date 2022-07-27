<?php
    class Posts extends Controller {
        public function __construct(){
            if(!isLoggedIn()){
                redirect('users/login');
            }

            $this->postModel = $this->model('Post');
        }

        public function index(){
            // Get Posts
            $posts = $this->postModel->getPosts();

            $data = [
                'posts' => $posts
            ];
            $this->view('posts/index', $data);
        }

        public function add(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);
                $data = [
                    'title' => trim($_POST['title']),
                    'body' => trim($_POST['body']),
                    'user_id' => $_SESSION['user_id'],
                    'title_err' => '',
                    'body_err' => ''
                ];
                // Validate title
                if(empty($data['title'])){
                    $data['title_err'] = 'Please enter title';
                }
                if(empty($data['body'])){
                    $data['body_err'] = 'Please enter body text';
                }
                //Make sure no errors
                if(empty($data['title_err']) && empty($data['body_err'])){
                    // Validated
                    if($this->postModel->addPost($data)){
                        flash('post_message', 'Post added');
                        redirect('posts');
                    }else{
                        die('Sth went wrong');
                    }

                }else{
                    // Load view with errors
                    $this->view('posts/add', $data);
                }
            }else{

            
            
                $posts = $this->postModel->getPosts();
                $data = [
                    'title' => '',
                    'body' => '',
                    
                ];
                

                
                
                $this->view('posts/add', $data);
            }
        }
    }