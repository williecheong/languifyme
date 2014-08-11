<?php // if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require(APPPATH.'/libraries/REST_Controller.php');

class Contact extends REST_Controller {
    
    function __construct() {
        parent::__construct();
        // Autoloaded Config, Helpers, Models
    }

    public function index_get() {
        echo date('Y-m-d H:i:s');
    }

    // Used to create a new group in the DB
    public function index_post() {
        if ( isset($data['message']) ){
            $email = '';
            if ( isset($data['email']) ) {
                $email = $data['email'];
            
                echo json_encode(
                    array(
                        'status' => 'success',
                        'message' => 'Email message successfully sent'
                    )
                );
            } else {
                echo json_encode(
                    array(
                        'status' => 'fail',
                        'message' => 'Sender email address not specified'
                    )
                );
            }
        } else {
            echo json_encode( 
                array(
                    'status'  => 'fail',
                    'message' => 'Message is missing from email'
                )
            );
        }

        return;
    }
}