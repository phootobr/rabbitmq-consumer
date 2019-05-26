<?php

namespace App;

use PhpAmqpLib\Message\AMQPMessage;

class Job
{
    /**
     * @param AMQPMessage $msg
     */
    public function exec(AMQPMessage $msg)
    {
        // TODO: Implement exec() method.
    }
}
