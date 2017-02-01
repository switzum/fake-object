<?php
use Switzum\FakeObject\Fake;
use Switzum\FakeObject\Fixtures\User;

require 'vendor/autoload.php';

dd(Fake::this(User::class));
