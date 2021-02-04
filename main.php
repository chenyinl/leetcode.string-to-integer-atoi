<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function myAtoi($s) {
        $this->r=0;
        $this->sign=1;
        $this->stop=0;
        $i=0;
        while ($s[$i]==' '){
                $i++;
        }
        if($s[$i]=='+' || $s[$i]=='-'){
            if($s[$i]=='-') $this->sign*=-1;
            $i++;
        }

        while ($s[$i]=='0'){
                $i++;
        }
        for($i; $i<strlen($s) && $this->stop==0; $i++){
            if(is_numeric($s[$i])){
                // $this->incNum($s[$i]);
                $this->r = $this->r*10 + $s[$i];
            }else{
                $this->stop=1;
            }
            
        }
        
        $r= $this->sign * $this->r;
        if($r<-2147483648) $r=-2147483648;
        if($r>2147483647) $r=2147483647;
        return $r;
        
    }

}
