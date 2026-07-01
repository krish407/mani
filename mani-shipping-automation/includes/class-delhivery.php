<?php
if (!defined('ABSPATH')) exit;

class MSA_Delhivery {
    private $token;
    public function __construct($token=''){
        $this->token=$token;
    }

    public function create_shipment(array $payload){
        // Placeholder for Delhivery API integration.
        return [
            'success'=>false,
            'message'=>'Delhivery API integration not implemented yet.',
            'payload'=>$payload,
        ];
    }
}
