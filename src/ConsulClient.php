<?php

namespace Kpacha\Config\Consul;

use SensioLabs\Consul\ServiceFactory;

class ConsulClient
{
    private $catalog;
    
    public function __construct()
    {
        $sf = new ServiceFactory();
        $this->catalog = $sf->get('catalog');
    }

    public function getAll($service)
    {
        return $this->catalog->service($service)->json();
    }
}
