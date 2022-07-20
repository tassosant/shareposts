<?php 
    class Users extends Controller{
        public function __construct(){

        }

        public function register(){
            //Loads register form
            //Also handles when submitting the register form

            //Check for POST
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // Process form
            }
            else{
                // Load form
                //Init data (we want to hold the info even the form isn't completed because if sth happens we do not want to refill the whole form)
                $data = [
                    'name' => '',
                    'email' => '',
                    'password' => '',
                    'confirm_password' => '',
                    'name_err' => '',
                    'email_err' => '',
                    'password_err' => '',
                    'confirm_password_err' => '',
                ];

                //Load view
                $this->view('users/register', $data);
            }
        }
        public function login(){
            //Loads login form
            //Also handles when submitting the register form

            //Check for POST
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // Process form
            }
            else{
                // Load form
                //Init data (we want to hold the info even the form isn't completed because if sth happens we do not want to refill the whole form)
                $data = [
                    'email' => '',
                    'password' => '',
                    'email_err' => '',
                    'password_err' => '',
                    
                ];

                //Load view
                $this->view('users/login', $data);
            }
        }
    }