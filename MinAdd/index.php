<?php 

function minAddToMakeValid($s){

    $balance=0;
    $moves=0;

    for($i=0;$i<strlen($s);$i++){

        if($s[$i]=='('){
            $balance++;
        }else{

            if($balance>0){
                $balance--;
            }else{
                $moves++;
            }
        }
    }

    return $moves+$balance;
}