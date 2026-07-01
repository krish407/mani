<?php
if (!defined('ABSPATH')) exit;

class MSA_Routing {
    public static function get_courier($weight_grams){
        $weight=(float)$weight_grams;
        if($weight<=600){
            return 'delhivery';
        }
        return 'shadowfax';
    }
}
