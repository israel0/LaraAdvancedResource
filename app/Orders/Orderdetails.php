<?php

   namespace App\Orders;

    use App\Billings\PaymentGatewayContract;

   class Orderdetails

   {
      public $paymentgateway;

      public function __contruct(PaymentGatewayContract $paymentgateway) {
          $this->paymentgateway = $paymentgateway;
      }


      public function all()
      {

         //$this->paymentgateway->setDiscount(5000);

          return [
              'name' => "Akinsola Oluwaseye",
              'address' => "This 5, Obanda Street, Oke Ola"
          ];

      }
   }





?>
