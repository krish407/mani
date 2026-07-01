<?php
if (!defined('ABSPATH')) exit;

class MSA_IndiaPost {
    public static function save_tracking($order_id,$tracking_number){
        $order = wc_get_order($order_id);
        if(!$order){return false;}
        $order->update_meta_data('_msa_courier','india_post');
        $order->update_meta_data('_msa_tracking_number',sanitize_text_field($tracking_number));
        $order->save();
        return true;
    }
}
