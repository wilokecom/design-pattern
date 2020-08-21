<?php

class EmailObserver implements InterfaceObserver
{
    public function update($that)
    {
        echo "I already sent an email to customer with the following content: ".$that->content . '<br />';
    }
}
