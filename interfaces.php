<?php

// interfaces are blueprints to group together different classes
// classes must have the same methods as the interface to be part of the interface
interface PaymentInterface {
  // the functions must be the same as the classes
  public function payNow();
}

interface LoginInterface {
  public function loginFirst();
}

class Paypal implements PaymentInterface, LoginInterface {
  public function loginFirst() {
  }

  public function payNow() {
  }

  public function paymentProcess() {
    $this->loginFirst();
    $this->payNow();
  }
}

class BankTransfer implements PaymentInterface, LoginInterface {
  public function loginFirst() {
  }

  public function payNow() {
  }

  public function paymentProcess() {
    $this->loginFirst();
    $this->payNow();
  }
}

class Visa implements PaymentInterface {
  public function payNow() {
  }

  public function paymentProcess() {
    $this->payNow();
  }
}

class Cash implements PaymentInterface {
  public function payNow() {
  }

  public function paymentProcess() {
    $this->payNow();
  }
}

class BuyProduct {
  public function pay(PaymentInterface $payType) {
    // i can use the methods within interface inside of this object
    $payType->paymentProcess();
  }

  public function payOnline(LoginInterface $payType) {
    // i can use the methods within interface inside of this object
    $payType->paymentProcess();
  }
}

// $payType = new Paypal();
$payType = new Cash();
$buyProduct = new BuyProduct();
$buyProduct->pay($payType); 
