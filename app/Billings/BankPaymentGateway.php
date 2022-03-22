<?php

  namespace App\Billings;
  use Illuminate\Support\Str;

  class BankPaymentGateway implements PaymentGatewayContract
  {

    private $currency;
    public $discount;

    public function __construct($currency)
    {

       $this->currency = $currency;
       $this->discount = 500;

    }

    public function setDiscount($amount) {
        $this->discount = $amount;
    }

    public function charge($amount)
    {

        $fees = $amount * 0.3;

        return [
            'amount' => $amount - $this->discount,
            'confirmation' => Str::random(),
            'currency' => $this->currency,
            'discount' => $this->discount,
            'fees' => $fees

        ];
    }

  }




?>
