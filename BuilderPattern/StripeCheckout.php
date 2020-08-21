<?php

/**
 * Class StripeCheckout
 */
class StripeCheckout implements InterfaceCheckout
{
    /**
     * @var StripeGateway;
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
        $this->oGateway = new StripeGateway();
    }

    /**
     * @return Gateway
     */
    public function getGateway(): Gateway
    {
        return $this->oGateway;
    }
}
