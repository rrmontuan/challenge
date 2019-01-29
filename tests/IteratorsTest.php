<?php
/**
 * @author Ricardo R. Montuan <ricardo.montuan@hotmail.com>
 *
 */
use PHPUnit\Framework\TestCase;
use rrmontuan\challenge\MultiplesIterator;

class IteratorsTest extends TestCase
{
    public function testWithoutMultiplesIterator(){
        
        $arrayIterator = new ArrayIterator(range(1, 15));
        $arrayIterator = new MultiplesIterator($arrayIterator, []);
        
        $values = [];
        
        foreach($arrayIterator as $value){
            array_push($values, $value);
        }
        
        $expected = [
            1,
            2,
            3,
            4,
            5,
            6,
            7,
            8,
            9,
            10,
            11,
            12,
            13,
            14,
            15
        ];
        
        $this->assertEquals($expected, $values);
        
    }
    
    public function testThreeMultiplesIterator(){
        
        $message = 'StarCorp';
        $arrayIterator = new ArrayIterator(range(1, 15));
        $arrayIterator = new MultiplesIterator($arrayIterator, [3], $message);
        
        $values = [];
        
        foreach($arrayIterator as $value){
            array_push($values, $value);    
        }
        
        $expected = [
            1,
            2,
            $message,
            4,
            5,
            $message,
            7,
            8,
            $message,
            10,
            11,
            $message,
            13,
            14,
            $message
        ];
        
        $this->assertEquals($expected, $values);
        
    }
    
    public function testFiveMultiplesIterator(){
        
        $message = 'IT';
        $arrayIterator = new ArrayIterator(range(1, 15));
        $arrayIterator = new MultiplesIterator($arrayIterator, [5], $message);
        
        $values = [];
        
        foreach($arrayIterator as $value){
            array_push($values, $value);
        }
        
        $expected = [
            1,
            2,
            3,
            4,
            $message,
            6,
            7,
            8,
            9,
            $message,
            11,
            12,
            13,
            14,
            $message
        ];
        
        $this->assertEquals($expected, $values);
        
    }
    
    public function testThreeAndFiveMultiplesIterator(){
        
        $message = 'StarCorpianos';
        $arrayIterator = new ArrayIterator(range(1, 15));
        $arrayIterator = new MultiplesIterator($arrayIterator, [3, 5], $message);
        
        $values = [];
        
        foreach($arrayIterator as $value){
            array_push($values, $value);
        }
        
        $expected = [
            1,
            2,
            3,
            4,
            5,
            6,
            7,
            8,
            9,
            10,
            11,
            12,
            13,
            14,
            $message
        ];
        
        $this->assertEquals($expected, $values);
        
    }
}