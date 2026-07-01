<?php
if (!defined('ABSPATH')) exit;

class MSA_Order_Hooks {
    public static function init(){
        add_action('woocommerce_order_status_processing',[__CLASS__,'create_shipment']);
    }

    public static function create_shipment($order_id){
        $order = wc_get_order($order_id);
        if(!$order){ return; }

        $weight = 0;
        foreach($order->get_items() as $item){
            $product = $item->get_product();
            if($product){
                $weight += ((float)$product->get_weight())*1000*$item->get_quantity();
            }
        }

        $courier = MSA_Routing::get_courier($weight);
        $order->update_meta_data('_msa_courier',$courier);
        $order->save();
    }
}
