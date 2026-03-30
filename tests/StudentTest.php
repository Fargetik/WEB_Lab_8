<?php

require_once __DIR__ . '/../www/Student.php';

use PHPUnit\Framework\TestCase;

class StudentTest extends TestCase
{
   public function testAdd()
   {
       $student = new Student(null);

       $result = $student->add("Ivan", 14, "Roman", True, "mouth_6");

       $this->assertEquals("Добавил пользователя", $result);
   }
}