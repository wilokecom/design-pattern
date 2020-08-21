<?php

interface InterfaceSubject
{
    public function attach(\InterfaceObserver $observer);
    
    public function detach(\InterfaceObserver $observer);
    
    public function notify();
}
