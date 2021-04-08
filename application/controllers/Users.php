<?php

    class Users extends CI_Controller{

        public function User()
        {
            $this->load->helper('array');
            $arr = ['Key 1'=>'Value 1','Key 2'=>'Value 2'];
            echo element('Key1',$arr,'Value Not Found');
            // show();

            //Library
            $this->load->library("Test");
            echo "<br>";
            $this->test->dbdetails();

            $this->load->model('User_model');
            $userData['users'] = $this->User_model->getUserData();
            // print_r($userData); // print_r() is used for the debuging..
            $this->load->view('Users/userlist',$userData);   
        }

    }

?>