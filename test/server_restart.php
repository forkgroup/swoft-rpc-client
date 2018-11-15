<?php

require_once __DIR__ . '/bootstrap.php';

use SwoftTest\Rpc\Testing\RpcCommand;

$command = bean(RpcCommand::class);

$command->restart();