<?php
//raise an error and supress it

    echo "before: " . $php_errormsg . PHP_EOL;

    @$value = 1/0; //this line is error and will not proceed

    echo "AFTER: " . $php_errormsg . PHP_EOL;

