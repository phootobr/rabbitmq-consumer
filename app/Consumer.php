<?php

namespace App;

use ErrorException;
use PhpAmqpLib\Connection\AMQPStreamConnection;

class Consumer
{
    /**
     * @param string $queue
     * @throws ErrorException
     */
    public function init(string $queue)
    {
        $connection = new AMQPStreamConnection(
            getenv('QUEUE_HOST'),
            getenv('QUEUE_PORT'),
            getenv('QUEUE_USER'),
            getenv('QUEUE_PASS')
        );

        $channel = $connection->channel();
        $channel->basic_consume(
            $queue,
            '',
            false,
            true,
            false,
            false,
            [new Job(), 'exec']
        );

        while (count($channel->callbacks)) {
            $channel->wait();
        }
    }
}
