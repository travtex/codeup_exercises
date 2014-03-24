<?php

	class Hello {
		public static $defaultMessage = "Hello, World!";

		public $thing = true;

		public static function doSomething() {
			if ($this->thing) {
				echo "No problem." . PHP_EOL;
			} else {
				echo "Problem." . PHP_EOL;
			}
		}

		public function sayHello($to = null) {
			if (!empty($to)) {
				echo "Hello, $to!" . PHP_EOL;
			} else {
				echo self::$defaultMessage . PHP_EOL;
			}
		}

	}

	// echo Hello::$defaultMessage . PHP_EOL;

	$h1 = new Hello();
	$h2 = new Hello();

	// $h1->defaultMessage = "Hello, Class!";

	Hello::$defaultMessage = "Hello from static attribute.";

	$h1->sayHello("Codeup");
	$h1->sayHello();

	$h2->sayHello("Codeup2");
	$h2->sayHello();

?>