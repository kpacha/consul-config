<?php

namespace Kpacha\Config\Consul;

use Kpacha\Config\AbstractServiceManager;

class ServiceManager extends AbstractServiceManager
{

    protected function buildClient($serverUrl)
    {
        return new ConsulClient();
    }

}
