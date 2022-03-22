<?php

namespace App\Http\Controllers;

 
use App\Billings\PaymentGatewayContract;
use Illuminate\Http\Request;
use App\Orders\Orderdetails;


class PayOrderController extends Controller
{
    public function store (Orderdetails $orderdetails, PaymentGatewayContract $paymentgateway) {

        $order = $orderdetails->all();
        $amount = 5200;

        return dd($paymentgateway->charge($amount));

    }
}
