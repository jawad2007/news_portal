<?php include "header.php"?>

<style>
  <style>
  label.error {
    color: #FB3A3A;
  margin: 4px 0 5px 10px
  }
 
#newpassword input.error {
border:1px solid red;
}
</style>
<script>
  function validate() {
    var pass1 = document.getElementById("InputNewPassword").value;
    var pass2 = document.getElementById("InputConfirmPassword").value;
    var ok = true;
    if (pass1 != pass2) {
        //alert("Passwords Do not match");
        document.getElementById("InputNewPassword").style.borderColor = "#E34234";
        document.getElementById("InputConfirmPassword").style.borderColor = "#E34234";
        ok = false;
    }
   
    return ok;
}
</script>
<div class="container">
<div class="row">
<div class="panel-body">
<div class="col-lg-12">
      <h1 class="page-header">Set Password</h1>
      
     </div>
    </div>
</div>
        
                    
                
    <div class="row">
	 <div class="col-md-12 col-md-offset-3">
     
                <?php if(!empty($success))
                   { ?>
                <div class="row col-md-offset-1"  >
                 <div class="alert alert-success pull-left">
                <strong>Success!</strong> <?php echo $success; ?>
                    </div>
                </div>
                    <?php } ?>
                
        <form role="form" action="<?php echo base_url() ?>register/set_password/<?php echo $username;?>" method="post" id='newpassword' onsubmit="return validate()">
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                <div class="form-group">
                    <label for="InputNewPassword">Enter New Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" name="InputNewPassword" id="InputNewPassword" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputConfirmPassword">Enter Confirm Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" name="InputConfirmPassword" id="InputConfirmPassword" >
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
        </form>
    </div>
	</div>

<?php include "footer.php"?>