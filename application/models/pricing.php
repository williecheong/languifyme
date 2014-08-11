<?php

class pricing extends CI_Model{
    
    function calculate_estimate( $content = '', $origin_language = '', $target_language = '' ) {
        $content = trim($content);
        $content = preg_replace('/\s+/', ' ', $content);

        if ( $content == '' || $origin_language == $target_language ) {
            return '0';
        } else {
            $exploded_words = explode(' ', $content);
            $count_words = count($exploded_words);
            return number_format( $count_words*0.05, 2 );
        }
    }

}

?>