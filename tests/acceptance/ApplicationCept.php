<?php
$I = new WebGuy($scenario);
$I->wantTo('test application start');
$I->amOnPage("index.php");
$I->see("Hello World..........");