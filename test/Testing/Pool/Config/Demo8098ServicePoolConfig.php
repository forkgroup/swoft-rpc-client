<?php
namespace SwoftTest\Rpc\Testing\Pool\Config;

use Swoft\Bean\Annotation\Bean;
use Swoft\Bean\Annotation\Value;
use Swoft\Pool\PoolProperties;

/**
 * Class DemoServicePoolConfig
 * @Bean
 * @package SwoftTest\Rpc\Client\Testing\Pool\Config
 */
class Demo8098ServicePoolConfig extends PoolProperties
{
    protected $name = 'service.demo.8098';

    protected $uri = [
        '127.0.0.1:8098'
    ];

    /**
     * Connection timeout
     *
     * @var int
     */
    protected $timeout = 1;
}
