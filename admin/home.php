<?php include_once('inc_connection.php'); 
$url = "http://holly2bolly.in/admin/";
?>
<div class="container home-cont" >
           <h2>Figures</h2>
            <ul class="figures-ul">
                <li>
                  <a href="<?php echo $url;?>total_inquiry.php">
                   <?php $sql1="SELECT * FROM `career` ";
                      $result1=mysql_query($sql1);
                       $total1= mysql_num_rows($result1); ?>
                        <span>Total Career Inquiry</span>
                        <p class="purple"><?php echo $total1; ?></p>
                        </a>
                </li>
                <li>
                  <a href="<?php echo $url;?>total_paid.php">
                   <?php $sql1="SELECT * FROM `career` where delete_data=0 and paid=1";
                      $result1=mysql_query($sql1);
                       $total1= mysql_num_rows($result1); ?>
                        <span>Total Paid Career Inquiry</span>
                        <p class="purple"><?php echo $total1; ?></p> 
                    </a>
                </li>
                <li>
                   <a href="<?php echo $url;?>total_pending.php">
                    <?php $sql1="SELECT * FROM `career` where delete_data=0 and paid=0";
                      $result1=mysql_query($sql1);
                       $total1= mysql_num_rows($result1); ?>
                        <span>Total Unpaid Career Inquiry</span>
                        <p class="purple"><?php echo $total1; ?></p>
                </a>
                </li>    
       </ul>
    </div>
    <div class="clearfix"></div>
    
   
                     <!-- <div class="stat-col" style="width:30%;" align="center">
					<?php $sql2="SELECT id  FROM `production` where status='1' ";
                      $result2=mysql_query($sql2);
                       $total2= mysql_num_rows($result2); ?>
                        <span>Total Production Inquiry</span>
                        <p class="yellow"><?php echo $total2; ?></p>
                    </div>-->
                   <!-- <div class="stat-col" style="width:30%;" align="center">
					<?php $sql="SELECT id FROM `sindication` where status = '1' ";
							$result=mysql_query($sql);
							$total3= mysql_num_rows($result); ?>
                        <span>Total Sindication Inquiry</span>
                        <p class="green"><?php echo $total3; ?></p>
                    </div> -->