<?php

use PHPUnit\Framework\TestCase;
use Metaprogramming\Student;

class StudentTest extends TestCase
{
	/**
     * @expectedException Error
     * @expectedMessage Call to undefined method Student::write()
     */
    public function testWrite_shouldBeUndefinedWhenAStudentIsUnitialized()
    {
        $student = new Student();
        $student->write();
    }
}