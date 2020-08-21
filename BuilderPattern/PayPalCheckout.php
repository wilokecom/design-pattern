<?php

/**
 * Class PayPalCheckout
 */
class PayPalCheckout implements InterfaceCheckout
{
    /**
     * @var PayPalGateway;
     */
    private $oGateway;

    public function setPlanID()
    {
        $this->oGateway->setData('planID', new Plan());
    }

    public function setPrice()
    {
        $this->oGateway->setData('price', new Price());
    }

    public function proceed()
    {
        echo get_class($this->oGateway);
    }

    public function createGateway()
    {
        $this->oGateway = new PayPalGateway();
    }

    /**
     * @return Gateway
     */
    public function getGateway(): Gateway
    {
        return $this->oGateway;
    }
}
