<?php
namespace Test;

use PHPUnit\Framework\TestCase;

class ArchitectureTest extends TestCase
{
    public function testDirectoryApp()
    {
        $this->assertDirectoryExists(dirname(__DIR__).'/app');
        $this->assertDirectoryExists(dirname(__DIR__).'/app/Frami');
    }
}