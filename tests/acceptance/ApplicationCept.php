<?php
$I = new WebGuy($scenario);
$I->wantTo('test application start');
$I->setCookie("MyCookie", "My cookie content");
$I->amOnPage("/index.php");
$I->see("Hello World..........**********");
$I->see("My cookie content");