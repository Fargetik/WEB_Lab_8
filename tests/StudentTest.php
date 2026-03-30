<?php

require_once __DIR__ . '/../www/Student.php';

use PHPUnit\Framework\TestCase;

class StudentTest extends TestCase
{

    protected function setUp(): void
    {
    $this->pdoMock = $this->createMock(PDO::class);
    $this->student = new Student($this->pdoMock);
    }

    public function testAdd()
    {

        // $this->pdoMock = $this->createMock(PDO::class);
        $mockStmt = $this->createMock(PDOStatement::class);
        
        $mockStmt->expects($this->once())
                 ->method('execute')
                 ->willReturn(true);
        
        $this->pdoMock->expects($this->once())
               ->method('prepare')
               ->willReturn($mockStmt);
        
        $this->student = new Student($this->pdoMock);
        $result = $this->student->add($_ENV["DB_NAME"], $_ENV["DB_NUMBER"],$_ENV["DB_GENRE"],$_ENV["DB_BOOLCHECK"],$_ENV["DB_TIME"],);
        
    }
}