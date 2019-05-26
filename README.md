# Phooto Consumer RabbitMQ

[![Latest Stable Version](https://poser.pugx.org/phootobr/rabbitmq-consumer/v/stable)](https://packagist.org/packages/phootobr/rabbitmq-consumer)
[![Total Downloads](https://poser.pugx.org/phootobr/rabbitmq-consumer/downloads)](https://packagist.org/packages/phootobr/rabbitmq-consumer)
[![License](https://poser.pugx.org/phootobr/rabbitmq-consumer/license)](https://packagist.org/packages/phootobr/rabbitmq-consumer)
[![composer.lock](https://poser.pugx.org/phootobr/rabbitmq-consumer/composerlock)](https://packagist.org/packages/phootobr/rabbitmq-consumer)

This project is a consumer implementation for RabbitMQ from Phooto

## Installation

`composer create-project phootobr/rabbitmq-consumer`

## How to use

1. After install add the `.env` file with the connection settings
2. Add the code you want to execute upon receiving a RabbitMQ message in the `app/Job.php` file
3. In the `start.php` file change the queue you want to listen on line 16: `$consumer->init('YOUR_QUEUE');`
4. Run the script on the command line with PHP: `php start.php`
5. (optional) Configure the [supervisord](http://supervisord.org/) to keep your script running in the background using the `app-consumer-supervisor.conf` file as an example

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
