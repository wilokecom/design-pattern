<?php

class PostSubject implements InterfaceSubject
{
    private $aStorage = [];
    public $content;
    
    public function attach(InterfaceObserver $observer)
    {
        $this->aStorage[] = $observer;
        return $this;
    }
    
    public function detach(InterfaceObserver $observer)
    {
        $key = array_search($observer, $this->aStorage, true);
        if ($key) {
            unset($this->aStorage[$key]);
        }
        
        return $this;
    }
    
    public function setContent($content)
    {
        $this->content = $content;
    }
    
    public function notify()
    {
        foreach ($this->aStorage as $observer) {
            $observer->update($this);
        }
    }
}
