<?php

interface InterfaceCheckout
{
    public function setPlanID();
    public function setPrice();
    public function proceed();
    public function getGateway(): Gateway;
    public function createGateway();
}
