<?php

class NotificationObserver implements InterfaceObserver
{
    public function update($that)
    {
        echo "We already updated a notification to customer with the following content: " . $that->content . '<br />';
    }
}
