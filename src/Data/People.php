<?php

namespace Iqbal\Data;

class People
{
     function __construct(private string $name)
     {
     }

     public function sayHello(string $name): string
     {
          return "Hello $name,my name is $this->name" . PHP_EOL;
     }
}
