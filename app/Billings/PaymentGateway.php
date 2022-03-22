<?php

  namespace App\Billings;
  use Illuminate\Support\Str;

  class PaymentGateway implements PaymentGatewayContract

  {
      
    private $currency;
    private $discount;

    public function __construct($currency)
    {

       $this->currency = $currency;
       $this->discount = 501;

    }

    public function setDiscount($amount) {
        $this->discount = $amount;
    }

    public function charge($amount)
    {

        return [
            'amount' => $amount - $this->discount,
            'confirmation' => Str::random(),
            'currency' => $this->currency,
            'discount' => $this->discount
        ];
    }

  }




?>
