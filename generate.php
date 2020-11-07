<?php

namespace Elminson\passwordGenerator;

require __DIR__ . '/vendor/autoload.php';

$gen = new passwordGenerator();
echo $gen->useUpperCase()
		 ->useSymbols()
		 ->generate()
		 ->getPassword();
