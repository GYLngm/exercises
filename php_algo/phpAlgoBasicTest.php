<?php

require_once("vendor/autoload.php");
require_once("phpAlgoBasic.php");

use PHPUnit\Framework\TestCase as TestCase;

class phpAlgoBasicTest extends TestCase
{

    public function testComparingBubbleAndQuickSort() : void 
    {
        $output_bubble = [];
        $output_quick = [];
        $arr_size = 100;

        $input = [];
        for($i=0;$i<$arr_size;$i++)
        {
            $input[] = random_int(0,100);
        }
        $phpalgo = new phpAlgoBasic();
        $start = microtime(TRUE);
        $output_bubble = $phpalgo->bubbleSort($input);
        $end_bubble = microtime(TRUE) - $start;

        $start = microtime(TRUE);
        $output_quick = $phpalgo->quickSort($input);
        $end_quick = microtime(TRUE) - $start;
        
        //$this->assertEquals(count($output_bubble),count($output_quick));
        echo count($output_bubble)." in bubble sort, ".count($output_quick)."in quick sort\r\n";

        $this->assertEquals(json_encode($output_bubble),json_encode($output_quick));
        $this->assertLessThan($end_bubble,$end_quick);

    }

    public function testComparingBubbleAndQuickSortCounts() : void
    {
        $count = 100;
        $arr_size = 100;
        $avarege_time_bubble = 0.00;
        $avarege_time_quick = 0.00;
        $phpalgo = new phpAlgoBasic();
        $group = [];
        do{
            $output_bubble = [];
            $output_quick = [];

            $input = [];
            for($i=0;$i<$arr_size;$i++)
            {
                $input[] = random_int(0,100);
            }
            
            $start = microtime(TRUE);
            $output_bubble = $phpalgo->bubbleSort($input);
            $end_bubble = microtime(TRUE) - $start;
            $avarege_time_bubble += $end_bubble;

            $start = microtime(TRUE);
            $output_quick = $phpalgo->quickSort($input);
            $end_quick = microtime(TRUE) - $start;
            $avarege_time_quick += $end_quick;

            $group[] = ($end_bubble < $end_quick)?0:1;
            $count--;

        } while($count >= 1);

        echo PHP_EOL;
        $avarege_time_bubble /= sizeof($group);
        $avarege_time_quick /= sizeof($group);

        echo "Bubble Sort: ".$avarege_time_bubble."s \r\n";
        echo "Quick Sort:  ".$avarege_time_quick."s \r\n";
        echo array_sum($group)/sizeof($group);
    }

    public function testjeuxDeRime()
    {
        $phpalgo = new phpAlgoBasic();
        $handle = fopen("php://stdin","r");

        $phpalgo->jeuxDeRime(fgets($handle));
    }

    public function testMakeSoundEx()
    {
        $phpalgo = new phpAlgoBasic();
        $handle = fopen("php://stdin","r");

        $res = $phpalgo->MakeSoundEx(fgets($handle));
        echo PHP_EOL."SOUND DEX: $res".PHP_EOL;
    }

    public function testmMgicStone(){
        $phpalgo = new phpAlgoBasic();
        

        $actual = $phpalgo->MagicStone([1,5,1]);
        print_r($actual);
        $expect = 2;

        $this->assertEquals($expect,$actual);

    }

    public function testinsertSortDesc()
    {
        $phpalgo = new phpAlgoBasic();
        $actual = [];
        for($i=0;$i<1000;$i++){
            $actual[] = random_int(0,100);
        }
        $expected = $actual;
        $phpalgo->insertSortingDesc($actual);
        rsort($expected);

        $this->assertEquals(json_encode($actual),json_encode($expected));
    }

    public function testmergeSort()
    {
        $phpalgo = new phpAlgoBasic();
        $actual = [];
        for($i=0;$i<10;$i++){
            $actual[] = random_int(0,100);
        }
        $expected = $actual;
        //print_r($actual);

        $actual = $phpalgo->mergeSort($actual, 0, count($actual));
        sort($expected);

        $this->assertEquals(json_encode($actual),json_encode($expected));
    }


    public function testBracketBalence(){
        $strs = [
            "{{{{{{{{[]}}}[]}}}}}",
            "{{{}{}{}]]}}}}}",
            "{][}",

        ];

        $res = [];

        $phpalgo = new phpAlgoBasic();
        foreach($strs as $str) {
            $res[] = $phpalgo->BracketBalence($str);
        }
        print_r($res);
        $this->assertTrue(true);
    }

    public function testMultipleInsertSort(){
        $stack = 0;
        for($x = 0; $x < 10; $x++)
        {
            $this->testinsertSortDesc();
        }
    }



}