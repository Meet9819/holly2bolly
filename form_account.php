<?php 
error_reporting(0);
include 'inc_connection.php';
if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
	$career_id = $_SESSION['id'];
	$query = mysql_query("select * from career where id='".$career_id."'");
	if(mysql_num_rows($query) > 0){
		$result = mysql_fetch_array($query);
	}
}
?>
<?php 
if(strtoupper($result['cate'])=='SILVER'){
	$price = '24999';
}
if(strtoupper($result['cate'])=='GOLD'){
	$price = '49999';
}
if(strtoupper($result['cate'])=='PLATINUM'){
	$price = '99999';
}


?>
<div class="" style="text-align:left;"><h4 style="color:#a20502;"><?php echo strtoupper($result['cate']); ?>&nbsp;Category</h4></div>

<style>
	.paidclass{
		padding: 4px 10px;
		background: green;
		color: #fff;
		font-size: 13px;
	}
	.unpaidclass{
		padding: 4px 10px;
		background: red;
		color: #fff;
		font-size: 13px;
	}
    
    a.up-btn {
        padding: 10px 15px;
        display: block;
        background: #333333;
        color: #ffffff;
        text-transform: uppercase;
        font-size: 14px;
}
</style>
<center>
<?php
	if($result['paid']=='1'){ ?>
		<span class="paidclass">PAID</span>
	<?php }else{ ?>
		<span class="unpaidclass">UNPAID</span>
	<?php }
?>
<center>
<br/>
<div class="contSec" style="background: none;">
<script type="text/javascript">
function showpasswordfield(){
	document.getElementById("pass_div").style.display="block";
	document.getElementById("conpass_div").style.display="block";

}
</script>

        <div class="row">
		<div class="col-md-4">
    <input name="cate" type="text"  id="cate" value="<?php echo isset($result['cate'])?$result['cate']:''?>" class="mb-3 form-text" readonly="readonly"/>
    </div>
		<div class="col-md-4">

    <select id="career_role" name="career_role" class="form-text" required="required">
<?php $career_array = array('Artist','Art Director','Assistant Director','Camera Man','Casting Director','Dubbing Artist','Choreographer','Director','Dress Designer','Editor','Executive Producer','Fight Master','Hair Dresser','Light Man','Musician','Music Director','Makeup Man','Producer','Singer','Spot Boy','Technician','Writer','Other'); 
?>
     
     
     
      <option value="">Select Career</option>
      <?php foreach($career_array as $ca){ 
      if($ca == $result['role']) { ?>
        <option value="<?php echo $ca; ?>" selected="selected"><?php echo $ca; ?></option>
      <?php } else { ?>
        <option value="<?php echo $ca; ?>"><?php echo $ca; ?></option>
      <?php } } ?>
  </select>

		</div>
		<div class="col-md-4">
			<input name="username" maxlength= "8" placeholder="user Name" type="text"  id="username" class="mb-3 form-text" value="<?php echo isset($result['username'])?$result['username']:''?>" required="required" readonly="readonly"/>
			<input type="hidden" id="career_update_id" name="career_update_id" value="<?php echo $career_id;?>">
		</div>
		<div class="col-md-4">
			<p>Click Here <a href="javascript:void(0)" onclick="showpasswordfield()">Change Password</a></p>
		</div>
		
		<div class="col-md-4" id="pass_div" style="display:none">
            <input name="password" type="password"  id="password" class="mb-3 form-text" placeholder="Password" />
        </div>
        <div class="form-blok col-md-4" id="conpass_div" style="display:none;">
              <input name="confirm_password" type="password"  id="confirm_password" class="mb-3 form-text" placeholder="Confirm Password" />
        </div>
        <div class="col-md-4">
			<input name="name" type="text"  placeholder="Your Name" id="name" class="mb-3 form-text" value="<?php echo isset($result['name'])?$result['name']:''?>" readonly="readonly" required="required"/>
		</div>
        <div class="col-md-4">
			<input name="surname" type="text"  placeholder="Your Name" id="surname" class="mb-3 form-text" value="<?php echo isset($result['surname'])?$result['surname']:''?>" readonly="readonly" required="required"/>
		</div>
		<div class="col-md-4">
			<input name="email" placeholder="Email" type="text"  id="email" class="mb-3 form-text" required="required" value="<?php echo isset($result['email'])?$result['email']:''?>" required="required"/>
		</div>
		<div class="col-md-4">
    <input type="text" maxlength= "10" name="phno" id="phno" class="mb-3 form-text" required="required" placeholder="Mobile No." value="<?php echo isset($result['phn_no'])?$result['phn_no']:''?>"/>&nbsp;<span id="errmsg"></span>
		</div>
		<script>
        $(document).ready(function () {
            $("#phno").keypress(function (e) {
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        $("#errmsg").html("Numbers Only").show().fadeOut("slow");
               return false;
    }
   });
});
        </script>
		</div>
		
		<div class="col-md-4 reg-dob">
		<label for="dob">Add your Date of Birth</label>
			<input name="date" type="date"  id="date" placeholder="Date of Birth" class="form-text mb-3" value="<?php echo isset($result['dob'])?$result['dob']:''?>" required/>
		</div>
		<div class="col-md-4">
			<input name="radio" type="radio" maxlength="100" id="radio" class="form-text mb-3" style="width:12px;" value="Male" checked="checked" /> Male <input name="radio" type="radio" maxlength="100" id="radio" class="form-text" value="Female"  style="width:12px;" /> Female
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<textarea rows="7" class="mb-3" name="address" id="address" placeholder="Enter your Address"  required="required"><?php echo isset($result['address'])?$result['address']:''?></textarea>
		</div>
		<div class="col-md-4">
			<label class="custom-file mb-3">
          <img src="<?php echo $result['file']?>" height="100" width="100"><br/>
			  <input class="mb-3" type="file" name="image" id="photoimg"/>
			</label>
			
			<select id="experience" name="experience" class="mb-3 form-text" required="required">
              <?php 
              $array_exp = array('Add your Experience','0-1','1-2','3-5','6-10','Above 10');
              foreach($array_exp as $ae){
                if($ae == $result['experience']){
                  echo '<option value="'.$ae.'" selected="selected">'.$ae.'</option>';
                }else{
                  echo '<option value="'.$ae.'">'.$ae.'</option>';
                }
              }
              ?>?>
            </select>
		</div>
		
    <div class="col-md-8">
	<select id="country" name="country" class="mb-3 form-text" required="required">
              <?php 
              $array_exp1 = array('Select country','India');
              foreach($array_exp1 as $coun){
                if($coun == $result['country']){
                  echo '<option value="'.$coun.'" selected="selected">'.$coun.'</option>';
                }else{
                  echo '<option value="'.$coun.'">'.$coun.'</option>';
                }
              }
              ?>?>
            </select>
	</div>	

    <div class="col-md-4">
	<select id="state" name="state" class="mb-3 form-text" required="required">
              <?php 
              $array_exp2 = array('Andaman and Nicobar Islands','Andhra Pradesh','Arunachal Pradesh','Assam',
'Bihar','Chandigarh','Chhattisgarh','Dadra and Nagar Haveli','Daman and Diu','Delhi','Goa','Gujarat','Haryana','Himachal Pradesh','Jammu and Kashmir','Jharkhand','Karnataka','Kerala','Lakshadweep','Madhya Pradesh','Maharashtra','Manipur','Meghalaya','Mizoram','Nagaland','Orissa','Pondicherry','Punjab','Rajasthan','Sikkim','Tamil Nadu','Tripura','Uttar Pradesh','Uttaranchal','West Bengal');
              foreach($array_exp2 as $stat){
                if($stat == $result['state']){
                  echo '<option value="'.$stat.'" selected="selected">'.$stat.'</option>';
                }else{
                  echo '<option value="'.$stat.'">'.$stat.'</option>';
                }
              }
              ?>?>
            </select>
	</div>				
		
		<div class="clearfix"></div>
		<?php 
		if(!empty($result['upgrade_to'])){
		?>
		<div class="form-blok col-md-6">
<strong>Upgraded to :</strong> <span class="mandatory">*</span><input name="upgrade_to" type="text"  id="upgrade_to" class="form-text mb-3" readonly="readonly" value="<?php echo isset($result['upgrade_to'])?$result['upgrade_to']:''?>" required="required"/></div>
			
		<div class="form-blok col-md-6">
<strong>Remaining Amount :</strong> <span class="mandatory">*</span><input name="remaining_amount" type="text"  id="remaining_amount" readonly="readonly" class="form-text mb-3" value="<?php echo isset($result['remaining_amount'])?$result['remaining_amount']:''?>" required="required"/></div>
		<?php } ?>
		<div class="clearfix"></div>
		
		<div class="contact-blok">
                                <div class="form-blok btn-group">
                                    <input type="submit" name="btnSubmit" value="Submit"  id="btnSubmit" class="submit-but button" style="margin-right:10px;" /><input name="" type="button" value="Reset" class="submit-but button" onClick="javascript:window.location.href='registration.php';" />
                                </div>
                            </div>
							<div class="clearfix">
							</div>
<!--
		<div class="col-md-4">
			<input type="submit" value="SEND US NOW" class="button" />
		</div>
-->
<br/>
<p class="small"><strong>Note : </strong>Life Time Membership Registration but fees are Non - Refundable </p>
	</div>