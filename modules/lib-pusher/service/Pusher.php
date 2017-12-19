<?php
/**
 * pusher service
 * @package lib-pusher
 * @version 0.0.1
 * @upgrade true
 */

namespace LibPusher\Service;

class Pusher {

    private $_pusher;
    
    public function __construct(){
        $dis = \Phun::$dispatcher;
        
        $this->_pusher = new \Pusher\Pusher(
            $dis->config->pusher['key'],
            $dis->config->pusher['secret'],
            $dis->config->pusher['id'],
            [
                'cluster' => $dis->config->pusher['cluster'],
                'encrypted' => true
            ]
        );
    }
    
    public function __call($method, $args){
        call_user_func_array([$this->_pusher, $method], $args);
    }
}