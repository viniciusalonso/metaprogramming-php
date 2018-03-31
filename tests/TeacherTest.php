<?php
use PHPUnit\Framework\TestCase;

use Metaprogramming\Teacher;
use Metaprogramming\Student;

class TeacherTest extends TestCase
{
    public function testTeachToWrite_shouldAddAMethodWriteToStudent()
    {
        $teacher = new Teacher();
        $student = new Student();

        $teacher->teachToWrite($student);

        $this->assertEquals("Now I'm able to write!", $student->write());
    }
}