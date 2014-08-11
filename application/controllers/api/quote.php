<?php // if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require(APPPATH.'/libraries/REST_Controller.php');

class Quote extends REST_Controller {
    
    function __construct() {
        parent::__construct();
        // Autoloaded Config, Helpers, Models
        $this->load->model('pricing');
    }

    public function index_get() {
        echo date('Y-m-d H:i:s');
    }

    // Used to get a price estimate from Languify
    public function index_post() {
        $data = clean_input( $this->post() );

        if ( isset($data['content']) && isset($data['origin_language']) && isset($data['target_language']) ) {
            $ipaddress = $_SERVER['REMOTE_ADDR'];
            $timestamp = date("Y-m-d H:i:s");
            
            $content = $data['content'];
            $origin_language = strtolower( $data['origin_language'] );
            $target_language = strtolower( $data['target_language'] );

            if ( $this->verify_support($origin_language) && $this->verify_support($target_language) ) {
                echo json_encode(
                    array(
                        'status' => 'success',
                        'message' => 'Price estimate generated successfully',
                        'estimate' => $this->pricing->calculate_estimate($content, $origin_language, $target_language)
                    )
                );
            } else {
                echo json_encode( 
                    array(
                        'status'  => 'fail',
                        'message' => 'Unsupported language has been input'
                    )
                );
            }
        } else {
            echo json_encode( 
                array(
                    'status'  => 'fail',
                    'message' => 'Params are missing'
                )
            );
        }

        return;
    }

    private function verify_support( $language = '' ) {
        $supported_languages = array(
            'en',       // english
            'zh_cn',    // chinese simplified
            'zh_tw',    // chinese traditional
            'ja',       // japanese
            'ko',       // korean
            'es',       // spanish
            'ar',       // arabic
            'fr'        // french
        );

        return in_array( $language, $supported_languages );
    }
}