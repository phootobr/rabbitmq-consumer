<?php

namespace App;

use Exception;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class Publisher
{
    /**
     * @param string $exchange
     * @param string $data
     * @param string $routingKey
     * @throws Exception
     */
    public static function send(string $exchange, string $data, string $routingKey)
    {
        $connection = new AMQPStreamConnection(
            getenv('QUEUE_HOST'),
            getenv('QUEUE_PORT'),
            getenv('QUEUE_USER'),
            getenv('QUEUE_PASS')
        );

        $channel = $connection->channel();
        $msg = new AMQPMessage($data);

        $channel->basic_publish($msg, $exchange, $routingKey);
        $connection->close();
    }
}
