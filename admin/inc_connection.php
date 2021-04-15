<?php
   $con = mysql_connect("148.72.232.171:3306","kindiast_kind","loveyoudad9820102993");
    if(!$con)
        {
            die('Not Connected:' . mysql_error());
        }
    mysql_select_db("kindiast_kind" , $con);


/*$con = mysqli_connect("148.72.232.171:3306","kindiast_kind","loveyoudad9820102993","kindiast_kind");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }*/


function getcount($role,$category){
	$resultcount = mysql_query("select count(*) as rescount from career where role='".$role."' and cate = '".$category."' and delete_data=0"); 
	$row1 = mysql_fetch_array($resultcount);
	return $row1['rescount'];
}

function getcount_cat($category){
	$resultcount = mysql_query("select count(*) as rescount from career where cate = '".$category."' and delete_data=0"); 
	$row1 = mysql_fetch_array($resultcount);
	return $row1['rescount'];
}



?>