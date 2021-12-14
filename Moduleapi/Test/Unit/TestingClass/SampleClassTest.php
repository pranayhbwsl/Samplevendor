<?php
 
namespace Samplevendor\Moduleapi\Test\Unit;
 
use Samplevendor\Moduleapi\TestingClass\SampleClass;
 
class SampleClassTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var Mageplaza\Testing\TestingClass\SampleClass
     */
    protected $sampleClass;
 
    /**
     * @var string
     */
    protected $expectedMessage;
 
    public function setUp(): void
    {
        $objectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);
        $this->sampleClass = $objectManager->getObject('Samplevendor\Moduleapi\TestingClass\SampleClass');
        $this->expectedMessage = 'Hello, this is sample test';
    }
 
    public function testGetMessage()
    {
        $this->assertEquals($this->expectedMessage, $this->sampleClass->getMessage());
    }
 
}