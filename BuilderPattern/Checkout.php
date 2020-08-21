<?php

class Checkout
{
    public function proceed(InterfaceCheckout $oCheckout)
    {
        $oCheckout->createGateway();
        $oCheckout->setPlanID();
        $oCheckout->setPrice();
        $oCheckout->proceed();
    }
}
