<?php

abstract class Gateway
{
    private $aData = [];

    public function setData($key, $val)
    {
        $this->aData[$key] = $val;
    }
}
