<?php
//13-masaqla Roman to Integer
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function check($s0, $s1) : bool
    {
        if ($s0==='I' && ($s1 ==='V' || $s1 === 'X'))   return true;
        if ($s0==='X' && ($s1 ==='L' || $s1 === 'C'))
            return true;
        if ($s0==='C' && ($s1 ==='D' || $s1 === 'M'))
            return true;
        return false;
    }

    function sum($z) : int
    {
        switch($z)
        {
            case "I": return 1;
            case "V": return 5;
            case 'X': return 10;
            case 'L': return 50;
            case 'C': return 100;
            case 'D': return 500;
            case 'M': return 1000;
        }
        return 0;
    }

    function sum1($z) : int
    {
        switch($z)
        {
            case "V": return 4;
            case 'X': return 9;
            case 'L': return 40;
            case 'C': return 90;
            case 'D': return 400;
            case 'M': return 900;
        }
        return 0;
    }

    function romanToInt($s)
    {


        $summ = 0;
        $i = 0;
        while ($i < strlen($s))
        {
            if ($i < strlen($s) - 1 && $this->check($s[$i], $s[$i+1]) == 1)
            {
                $summ += $this->sum1($s[$i+1]);
                $i ++;
            }
            else $summ +=$this->sum($s[$i]);
            $i ++;
        }
        return $summ;
    }
}
?>