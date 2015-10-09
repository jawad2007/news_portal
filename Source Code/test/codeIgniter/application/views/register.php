<?php include "header.php"?>
<div class="container">
<div class="row">
<div class="panel-body">
<div class="col-lg-12">
      <h1 class="page-header">Register User</h1>
      
     </div>
    </div>
</div>
        
                    
                
    <div class="row">
	 <div class="col-md-12 col-md-offset-3">
     
                <?php if(!empty($name_error))
                    { ?>
                <div class="row col-md-offset-1"  >
                 <div class="alert alert-danger pull-left">
                <strong>Danger!</strong> <?php echo $name_error; ?>
                    </div>
                </div>
                    <?php } 
                else if(!empty($email_error))
                    { ?>
                <div class="row col-md-offset-1"  >
                 <div class="alert alert-danger pull-left">
                <strong>Danger!</strong> <?php echo $email_error; ?>
                    </div>
                </div>
                    <?php } 
                     else if(!empty($both_error))
                     {
                      ?>
                <div class="row col-md-offset-1"  >
                 <div class="alert alert-danger pull-left">
                <strong>Danger!</strong> <?php echo $both_error; ?>
                    </div>
                </div>
                    <?php } 
                     else if(!empty($success))
                     {
                      ?>
                <div class="row col-md-offset-1"  >
                 <div class="alert alert-success pull-left">
                <strong>Success!</strong> <?php echo $success; ?>
                    </div>
                </div>
                    <?php } ?>
                
        <form role="form" action="<?php echo base_url() ?>register/register_user" method="post" >
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                <div class="form-group">
                    <label for="InputName">Enter User Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required value="<?php echo $name; ?>">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Enter Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmailFirst" name="InputEmail" placeholder="Enter Email" required "<?php echo $email; ?>">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
        </form>
    </div>
	</div>

<?php include "footer.php"?>