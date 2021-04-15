<?php
    $con = mysql_connect("148.72.232.171:3306","kindiast_kind","loveyoudad9820102993");
    if(!$con)
        {
            die('Not Connected:' . mysql_error());
        }
  //  mysql_select_db("kindiafi_kind" , $con);

mysql_select_db("kindiast_kind" , $con);
?>