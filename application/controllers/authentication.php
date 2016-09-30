<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {

   function __construct( )
   {
       parent::__construct();

       $this->load->helper('string');
//       $this->load->model('user_model');

   }

    public function getLogin() {


        print $this->user_model->test();

        $this->user_model->insert_entry();
//
//        if($this->user_model->insert_entry()){
//            print "successfully inserted";
//        } else {
//            print "failed to insert new user";
//        }

        $data = array(
            'title' => 'My Title Amazing' .  strTest(),
            'heading' => 'My Heading',
            'message' => 'My Message'
        );

        $this->load->view('login', $data);
    }


    public function postLogin() {
        print "post login";
    }

    public function getRegister() {
        print "get register";
    }

    public function postRegister() {
        print "post register";
    }
}
