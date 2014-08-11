<?php // if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require(APPPATH.'/libraries/REST_Controller.php');

class Quote extends REST_Controller {
    
    function __construct() {
        parent::__construct();
        // Autoloaded Config, Helpers, Models
    }

    public function index_get() {
        echo date('Y-m-d H:i:s');
    }

    // Used to get a price estimate from Languify
    public function index_post() {
        $data = clean_input( $this->post() );

        if ( isset($data['message']) ) {
            if ( isset($data['email']) ) {
                $ipaddress = $_SERVER['REMOTE_ADDR'];
                $timestamp = date("Y-m-d H:i:s");
                $message = $data['message'];
                $email = $data['email'];

                if ( filter_var($email, FILTER_VALIDATE_EMAIL) ) {
                    $headers = "From: languify" . "\r\n" .
                               "Content-type: text/html; charset=iso-8859-1" . "\r\n";

                    $emailbody = "<p><strong>Sender:</strong> " . $email . "<br>" .
                                    "<strong>Timestamp:</strong> " . $timestamp . "<br>" .
                                    "<strong>IP address:</strong> " . $ipaddress . "<br>" .
                                    "<strong>Message:</strong></p>" . $message;

                    mail(
                        "masterterrychen@gmail.com, cheongwillie@gmail.com",
                        "New message: " . $email, 
                        $emailbody, 
                        $headers
                    );

                    echo json_encode(
                        array(
                            'status' => 'success',
                            'message' => ''
                        )
                    );
                } else {
                    echo json_encode(
                        array(
                            'status' => 'fail',
                            'message' => ''
                        )
                    );
                }
            } else {
                echo json_encode(
                    array(
                        'status' => 'fail',
                        'message' => ''
                    )
                );
            }
        } else {
            echo json_encode( 
                array(
                    'status'  => 'fail',
                    'message' => ''
                )
            );
        }

        return;
    }
}