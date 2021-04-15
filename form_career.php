<form method="post" class="contact-form">
	<div class="row">
		
		<div class="col-md-4">
			
<select id="career_role" name="career_role" class="mb-3 form-text" required="required">
<?php $career_array = array('Artist','Modelling','Art Director','Assistant Director','Camera Man','Casting Director','Dubbing Artist','Choreographer','Director','Dress Designer','Editor','Executive Producer','Fight Master','Hair Dresser','Light Man','Musician','Music Director','Makeup Man','Producer','Singer','Spot Boy','Technician','Writer','Other'); 
?>
<option value="">Select Career</option>
<?php foreach($career_array as $ca){ ?>
<option value="<?php echo $ca; ?>"><?php echo $ca; ?></option>
<?php } ?>
</select>

		</div>
		<div class="col-md-4">
			<input name="username" maxlength= "8" placeholder="user Name" type="text"  id="username" class="mb-3 form-text" required="required"/>
		</div>
		<div class="col-md-4">
			<input name="password" type="password"  id="password" placeholder="Password" class="mb-3 form-text" required="required"/>
		</div>
		<div class="col-md-4">
			<input name="name" type="text"  placeholder="Your Name" id="name" class="mb-3 form-text" required="required"/>
		</div>
		<div class="col-md-4">
			<input name="surname" type="text"  placeholder="Your Surname" id="surname" class="mb-3 form-text" required="required"/>
		</div>
		<div class="col-md-4">
			<input name="email" placeholder="Email" type="text"  id="email" class="mb-3 form-text" required="required"/>
		</div>
		<div class="col-md-4">
<!--			<input name="phno" type="number" maxlength="10" id="phno" class="mb-3 form-text" required="required" placeholder="Mobile No."/>-->
    <input type="text" maxlength= "10" name="phno" id="phno" class="mb-3 form-text" required="required" placeholder="Mobile No."/>&nbsp;<span id="errmsg"></span>
		</div>
		<script>
        $(document).ready(function () {
  //called when key is pressed in textbox
  $("#phno").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Numbers Only").show().fadeOut("slow");
               return false;
    }
   });
});
        </script>
		<div class="col-md-4 reg-dob">
		<label for="dob">Add your Date of Birth</label>
			<input name="date" type="date"  id="date" placeholder="Date of Birth" class="form-text" required/>
		</div>
		
		
		
		
		
		
	</div>
	
	<div class="row">
		<div class="col-md-8">
			<textarea rows="7" class="mb-3" placeholder="Enter your Address" name="address" id="address" required="required"></textarea>
		</div>
		<div class="col-md-4">
			<label class="custom-file mb-3">
			  <input class="mb-3" type="file" name="image" id="photoimg"/>
			</label>
			
				<select id="experience" name="experience" class="mb-3 form-text" required="required">
                        <option value="">Add your Experience</option>
                        <option value="0-1">0-1</option>
                        <option value="1-2">1-2</option>
                        <option value="3-5">3-5</option>
                        <option value="6-10">6-10</option>
                        <option value="Above 10">Above 10</option>
                    </select>
		</div>
    </div>
    
    <div class="row">
		
		<div class="col-md-4" >
			<select id="country" name="country" class="mb-3 form-text" required="required">
                <option value="">Select country</option>
                <option value="India">India</option>
            </select>                
		</div>
		<div class="col-md-4" >
<select id="state" name="state" class="mb-3 form-text" required="required">
<option value="">Select State</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Andra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Orissa">Orissa</option>
<option value="Pondicherry">Pondicherry</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttaranchal">Uttaranchal</option>
<option value="West Bengal">West Bengal</option>
            </select>                
		</div>
		
		<div class="col-md-4">
			
			
			
			
			<select id="cate" name="cate" class="mb-3 form-text" required="required">
<?php 
$category_array_with_Amount = array('Free Registration');  
$category_array = array('General'); 
?>
<option value="">Select Category</option>

<?php 
$i = 0;
foreach($category_array_with_Amount as $ca){ 

?>
<option value="<?php echo $category_array[$i]; ?>"><?php echo $ca; ?></option>
<?php 
$i++;
}  ?>
</select>
			
	<!--		
			
<select id="cate" name="cate" class="mb-3 form-text" required="required">
<?php 

$category_array_with_Amount = array('General [Free]');  
$category_array = array('General [Free]'); 
?>
<option value="">Select Category</option>

<?php 
$i = 0;
foreach($category_array_with_Amount as $ca){ 

?>
<option value="<?php echo $category_array[$i]; ?>"><?php echo $ca; ?></option>
<?php 
$i++;
}  ?>
</select> -->

		</div>	
		
		<div class="col-md-4">
			<input name="radio" type="radio" maxlength="10" id="radio" class="form-text" style="width:12px;" value="Male" checked="checked" /> Male <input name="radio" type="radio" maxlength="100" id="radio" class="form-text" value="Female"  style="width:12px;" /> Female
		</div>
		
		
		
		
<div class="contact-blok" style="width: 523px">
<div class="form-blok btn-group">
<input type="submit" name="btnSubmit" value="Submit"  id="btnSubmit" class="submit-but button" style="margin-right:10px;" /><input name="" type="button" value="Reset" class="submit-but button" onClick="javascript:window.location.href='registration.php';" />
</div>
</div>
<div class="clear"></div>
<br/>
<p class="small"><strong>Note : </strong>Life Time Membership Registration but fees are Non - Refundable </p>

	</div>

</form>