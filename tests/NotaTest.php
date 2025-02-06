<?php
use PHPUnit\Framework\TestCase;
require_once './src/index.php';

class NotaTest extends TestCase {

    public function testPrimeraDivisio() {
        $this->assertEquals("Primera divisió", nota(60));
        $this->assertEquals("Primera divisió", nota(77));
    }

    public function testSegonaDivisio() {
        $this->assertEquals("Segona divisió", nota(59));
        $this->assertEquals("Segona divisió", nota(45));
    }

    public function testTerceraDivisio() {
        $this->assertEquals("Tercera divisió", nota(44));
        $this->assertEquals("Tercera divisió", nota(33));
    }

    public function testReprovat() {
        $this->assertEquals("Reprovat", nota(32));
        $this->assertEquals("Reprovat", nota(0));
    }
}
?>