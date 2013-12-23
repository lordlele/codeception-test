<?php
$I = new WebGuy($scenario);
$I->wantTo('test application start');
$I->setCookie("MyCookie", "My Cookie content");
$I->amOnPage("/index.php");
$I->see("Hello World..........");
$I->see("My Cookie content");
