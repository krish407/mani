<?php
if (!defined('ABSPATH')) exit;

class MSA_Shadowfax {
    private $api_key;
    public function __construct($api_key=''){
        $this->api_key=$api_key;
    }

    public function create_shipment(array $payload){
        return [
            'success'=>false,
            'message'=>'Shadowfax API integration placeholder.',
            'payload'=>$payload,
        ];
    }
}
