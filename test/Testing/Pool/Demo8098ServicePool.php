<?php
namespace SwoftTest\Rpc\Testing\Pool;

use Swoft\Bean\Annotation\Inject;
use Swoft\Bean\Annotation\Pool;
use Swoft\Rpc\Client\Pool\ServicePool as SwoftServicePool;
use SwoftTest\Rpc\Testing\Pool\Config\Demo8098ServicePoolConfig;
use SwoftTest\Rpc\Testing\Pool\Config\DemoServicePoolConfig;

/**
 * Class DemoServicePool
 * @Pool(name="service.demo.8098")
 * @package SwoftTest\Rpc\Testing\Pool
 */
class Demo8098ServicePool extends SwoftServicePool
{
    /**
     * @Inject
     * @var Demo8098ServicePoolConfig
     */
    protected $poolConfig;
}
