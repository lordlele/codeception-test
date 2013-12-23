<?php

require "c3.php";

require_once "MyClass.php";
$class = new MyClass();
$class->startApplication();

print_r($_COOKIE);
