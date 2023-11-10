<?php

//$entityManager = require_once join(DIRECTORY_SEPARATOR, [__DIR__, 'doctrine2-config.php']);
require_once("C:/xampp/htdocs/Mvc/Step4/config/doctrine2-config.php");

use Doctrine\ORM\Tools\Console\ConsoleRunner;

return ConsoleRunner::createHelperSet($entityManager);
