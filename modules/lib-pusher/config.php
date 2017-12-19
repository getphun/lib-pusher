<?php
/**
 * lib-pusher config file
 * @package lib-pusher
 * @version 0.0.1
 * @upgrade true
 */

return [
    '__name' => 'lib-pusher',
    '__version' => '0.0.1',
    '__git' => 'https://github.com/getphun/lib-pusher',
    '__files' => [
        'modules/lib-pusher' => [ 'install', 'remove', 'update' ]
    ],
    '__dependencies' => [],
    '_services' => [
        'pusher' => 'LibPusher\\Service\\Pusher'
    ],
    '_autoload' => [
        'classes' => [
            'LibPusher\\Service\\Pusher'    => 'modules/lib-pusher/service/Pusher.php',
            'Pusher\\Pusher'                => 'modules/lib-pusher/third-party/Pusher.php',
            'Pusher\\PusherException'       => 'modules/lib-pusher/third-party/PusherException.php',
            'Pusher\\PusherInstance'        => 'modules/lib-pusher/third-party/PusherInstance.php'
        ],
        'files' => []
    ]
];