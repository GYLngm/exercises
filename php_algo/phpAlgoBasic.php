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
        printf("%d words found".PHP_EOL,$count);
        foreach($result_set as $value){
            printf(
                "%s > similarity: %d (%d), string lev: %d, meta1: %s, meta2: %s".PHP_EOL,
                $value["word"],
                $value["sim"],
                $value["perc"],
                $value["lev"],
                $value["meta"],
                $value["metaphone"]["meta"],
            );
        }

        fclose($word_list);
    }

    function MakeSoundEx($stringtomakesoundexof)
    {
        $temp_Name = $stringtomakesoundexof;
        $SoundKey1 = "BPFV";
        $SoundKey2 = "CSKGJQXZ";
        $SoundKey3 = "DT";
        $SoundKey4 = "L";
        $SoundKey5 = "MN";
        $SoundKey6 = "R";
        $SoundKey7 = "AEHIOUWY";

            $temp_Name = strtoupper($temp_Name);
        $temp_Last = "";
        $temp_Soundex = substr($temp_Name, 0, 1);

        $n = 1;
        for ($i = 0; $i < strlen($SoundKey1); $i++)
        {
                if ($temp_Soundex == substr($SoundKey1, $i - 1, 1))
            {
                $temp_Last = "1";
                }
        }
        for ($i = 0; $i < strlen($SoundKey2); $i++)
        {
                if ($temp_Soundex == substr($SoundKey2, $i - 1, 1))
            {
                $temp_Last = "2";
                }
        }
        for ($i = 0; $i < strlen($SoundKey3); $i++)
        {
                if ($temp_Soundex == substr($SoundKey3, $i - 1, 1))
            {
                $temp_Last = "3";
                }
        }
        for ($i = 0; $i < strlen($SoundKey4); $i++)
        {
                if ($temp_Soundex == substr($SoundKey4, $i - 1, 1))
            {
                $temp_Last = "4";
                }
        }
        for ($i = 0; $i < strlen($SoundKey5); $i++)
        {
                if ($temp_Soundex == substr($SoundKey5, $i - 1, 1))
            {
                $temp_Last = "5";
                }
        }
        for ($i = 0; $i < strlen($SoundKey6); $i++)
        {
                if ($temp_Soundex == substr($SoundKey6, $i - 1, 1))
            {
                $temp_Last = "6";
                }
        }
        for ($i = 0; $i < strlen($SoundKey6); $i++)
        {
                if ($temp_Soundex == substr($SoundKey6, $i - 1, 1))
            {
                $temp_Last = "";
                }
        }

        for ($n = 1; $n < strlen($temp_Name); $n++)
        {
            if (strlen($temp_Soundex) < 4)
            {
                for ($i = 0; $i < strlen($SoundKey1); $i++)
                {
                    if (substr($temp_Name, $n - 1, 1) == substr($SoundKey1, $i - 1, 1) && $temp_Last != "1")
                    {
                        $temp_Soundex = $temp_Soundex."1";
                        $temp_Last = "1";
                    }
                }
                for ($i = 0; $i < strlen($SoundKey2); $i++)
                {
                    if (substr($temp_Name, $n - 1, 1) == substr($SoundKey2, $i - 1, 1) && $temp_Last != "2")
                    {
                        $temp_Soundex = $temp_Soundex."2";
                        $temp_Last = "2";
                    }
                }
                for ($i = 0; $i < strlen($SoundKey3); $i++)
                {
                    if (substr($temp_Name, $n - 1, 1) == substr($SoundKey3, $i - 1, 1) && $temp_Last != "3")
                    {
                        $temp_Soundex = $temp_Soundex."3";
                        $temp_Last = "3";
                    }
                }
                for ($i = 0; $i < strlen($SoundKey4); $i++)
                {
                    if (substr($temp_Name, $n - 1, 1) == substr($SoundKey4, $i - 1, 1) && $temp_Last != "4")
                    {
                        $temp_Soundex = $temp_Soundex."4";
                        $temp_Last = "4";
                    }
                }
                for ($i = 0; $i < strlen($SoundKey5); $i++)
                {
                    if (substr($temp_Name, $n - 1, 1) == substr($SoundKey5, $i - 1, 1) && $temp_Last != "5")
                    {
                        $temp_Soundex = $temp_Soundex."5";
                        $temp_Last = "5";
                    }
                }
                for ($i = 0; $i < strlen($SoundKey6); $i++)
                {
                    if (substr($temp_Name, $n - 1, 1) == substr($SoundKey6, $i - 1, 1) && $temp_Last != "6")
                    {
                        $temp_Soundex = $temp_Soundex."6";
                        $temp_Last = "6";
                    }
                }
                for ($i = 0; $i < strlen($SoundKey7); $i++)
                {
                    if (substr($temp_Name, $n - 1, 1) == substr($SoundKey7, $i - 1, 1))
                    {
                        $temp_Last = "";
                    }
                }
            }
        }

        while (strlen($temp_Soundex) < 4)
        {
            $temp_Soundex = $temp_Soundex."0";
        }

        return $temp_Soundex;
    }
}