<?php

    interface PaymentInterface{
        public function payNow();
        public function paymentProcess();
        // we can add more than one function
    }

    // we can add more than one interface

    class Paypal implements PaymentInterface {      // implements PaymentInterface, SecondInterface, ...
        public function login() {
            echo "Logged in! <br/>";
        }
        public function payNow() {
            echo 'paid with PayPal. <br/>';
        }
        public function paymentProcess()
        {
            $this->login();
            $this->payNow();
        }
    }

    class Visa implements PaymentInterface {
        public function payNow() {
            echo 'paid with visa. <br/>';
        }
        public function paymentProcess()
        {
            $this->payNow();
        }
    }

    class Cash implements PaymentInterface {
        
        public function payNow() {
            echo 'paid with cash. <br/>';
        }
        public function paymentProcess()
        {
            $this->payNow();
        }
    }

    class BuyProduct {
        public function pay(PaymentInterface $paymentType) {
            $paymentType->paymentProcess();
        }
    }

    $paymentType = new Paypal();
    $buy = new BuyProduct();
    $buy->pay($paymentType);

?>