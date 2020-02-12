<?php

class phpAlgoBasic 
{
    public function quickSort(array $input) : array
    {
        if(!isset($input[1]) || count($input) < 2)
            return $input;
        
        $mid = $input[0];
        $left = array();
        $right = array();
        
        for($i=1;$i<count($input);$i++)
        {
            if($input[$i] <= $mid){
                $left[] = $input[$i];
            } elseif($input[$i] > $mid) {
                $right[] = $input[$i];
            }
        }

        $left = $this->quickSort($left);
        $left[] = $mid;
        $right = $this->quickSort($right);

        return array_merge($left,$right);
    }

    public function bubbleSort(array $input) : array
    {
        $swap = true;
        $n = sizeof($input);
        while($swap)
        {
            $swap = false;
            for($k=0;$k<$n-1;$k++)
            {
                if($input[$k] > $input[$k+1]){
                    list($input[$k+1],$input[$k]) = array($input[$k],$input[$k+1]);
                    $swap = true;
                }
            }
        }

        return $input;
    }

    public function jeuxDeRime($input)
    {
        $word_list = fopen("liste.de.mots.francais.frgut.txt","r");

        $margin = 50;
        $result_set = [];
        $count = 0;
        if($word_list)
        {
            while(($buffer = fgets($word_list,4096)) != FALSE){
                // similar_text()
                $sim = similar_text($input,$buffer,$perc);

                //levenshtein()
                $lev = levenshtein($input,$buffer);
                /*
                if($lev <= 3 && $perc > $margin){
                    echo "$buffer> similarity: $sim ($perc %), string lev: $lev ".PHP_EOL;
                    echo "sounddex $input: $soundDex1, sounddex $buffer: $soundDex2";
                    echo PHP_EOL;
                }*/
                /*
                //soundex()
                $soundDex1 = soundex($input);
                $soundDex2 = soundex($buffer);

                if($soundDex1 == $soundDex2)
                    echo "$buffer> similarity: $sim ($perc %), string lev: $lev ".PHP_EOL;
                */
                //metaphone()
                $meta1 = metaphone($input,5);
                $meta2 = metaphone($buffer,5);
                $sim_mate = similar_text($meta1,$meta2,$perc_meta);
                $lev_meta = levenshtein($meta1,$meta2);

                if($lev_meta <= 1 && $sim_mate >= 1 && $perc_meta > $margin){
                    array_push($result_set, [
                        "compare" => $input,
                        "word" => $buffer,
                        "sim" => $sim,
                        "perc" => $perc,
                        "meta" => $meta1,
                        "lev" => $lev,
                        "metaphone" =>[
                            "meta"=> $meta2,
                            "lev" => $lev_meta,
                            "sim" => $sim_mate,
                            "perc" => $perc_meta
                        ]
                    ]);
                    $count++;   
                }
            }
        }

        foreach($result_set as $value){

            printf(
                "%s > similarity: %d (%d), string lev: %d, meta1: %s, meta2: %s".PHP_EOL,
                $value["word"],
                $value["sim"],
                $value["perc"],
                $value["lev"],
                $value["meta"],
                $value["metaphone"]["meta"]
            );
        }
        printf("%d words found".PHP_EOL,$count);
        
        fclose($word_list);
    }

    /**
     * Magic stone: 
     *  Find the minimum number of stones
     * Time complecity: O(n)
     * @param array $input
     * @return integer 
     */
    public function MagicStone(array $input) : int
    {
        $stack = [];
        sort($input);

        for($i=0;$i<count($input);$i++){
            if(empty($stack)) $stack[] = $input[$i];

            if($stack[count($input)-1] == $input[$i]){
                $stack[count($input)-1]++;
            } else {
                $stack[] = $input[$i];
            }
        }

        return count($stack);
    }

    /**
     * Insertion sorting Desc
     * Time complicity: O(nlgn)
     * @param array &$input
     */
    public function insertSortDesc(array &$input)
    {
        for($j=1;$j<count($input);$j++)
        {
            $key = $input[$j];
            // insert key to sorted array
            //print_r($input);
            $i = $j-1;
            while( $i >= 0 && $input[$i] < $key)
            {
                $input[$i+1] = $input[$i];
                $i = $i - 1;  
            }
            $input[$i+1] = $key;
        }
    }

    public function mergeSort(array $input, int $p=0, int $r=0) : array
    {
        
        if($r == $p) return $input;

        $r = ($r < 1)?count($input):$r;
        $sorted_arr = [];

        if($p < $r){
            $q = ($p+$r)/2;
            //Left
            $this->mergeSort($input, $p, $q);
            //Right
            $this->mergeSort($input, $q+1, $r);

            //Merge
            $left = array_slice($input, $p, $r - $q);
            $right = array_slice($input, $q+1, $r);
            print_r($left);
            print_r($right);

            echo "end".PHP_EOL;
            for($i=0,$j=0,$k=$p;$k<$r;$k++)
            {
                if(!isset($right[$j]) && !isset($left[$i])){
                    break;
                } 

                if(!isset($right[$j])){
                    $sorted_arr[] = $left[$i];
                } else if(!isset($left[$i])) {
                    $sorted_arr[] = $right[$j];
                } else if($left[$i] < $right[$j]){
                    $sorted_arr[] = $left[$i];
                    $i++;
                } else if($left[$i] > $right[$j]){
                    $sorted_arr[] = $right[$j];
                    $j++;
                } 
            }
        }

        return $sorted_arr;
    }

}