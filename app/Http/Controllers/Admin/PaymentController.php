<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{   
    public function request()    
    {

        $gateway = new Braintree\Gateway([
            'environment' => config('services.braintree.environment'), 
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey')
            ]);


        $data = [
            
            'token' => $gateway->ClientToken()->generate()

        ];

        return view( 'user.payment.request', $data );
    }
}
