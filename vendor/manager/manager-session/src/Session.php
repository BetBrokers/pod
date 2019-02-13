<?php
namespace Manager\Session;

use Zend\Authentication\Storage\Session as ZendSession;
use Zend\Session\Container as ZendContainer;
use Zend\Session\SessionManager as ZendSessionManager;

class Session
{
    /*
     * @return new ZendSessionManager
     */
    public function sessionManager()
    {
        return new ZendSessionManager();
    }
    
    
    /**
     * 
     * @param string $storageValue
     * @return \Zend\Authentication\Storage\Session
     */
    public function session($storageValue = NULL)
    {
        $session = new ZendSession($storageValue);
        return $session;
    }
    
    /**
     * 
     * @return \Zend\Session\Container
     */
    public function container()
    {
        $session = new ZendContainer();
        return $session;
    }
    
}

