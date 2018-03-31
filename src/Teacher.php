<?php

namespace Metaprogramming;

class Teacher
{
    public function teachToWrite(Student $student) : void
    {
       $closure = function() {
           return "Now I'm able to write!";
       };

       $student->addMethod('write', $closure);
    }
}