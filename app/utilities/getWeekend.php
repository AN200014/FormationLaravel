<?php

namespace App\utilities;



class GetWeekend
{
   public function GetWeekend(){
   if (date("N") ==6)
    echo "C'est le wekeend" ;

else
echo"Cest pas le wekeend" ;


    }


    public function getMessageBienvenu()
    {
          echo "Yeddcigua ci daraji";
    }
}

?>
