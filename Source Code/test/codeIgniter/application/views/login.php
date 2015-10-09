<?php include "header.php"?>
<div class="container">
<div class="row">
<div class="panel-body">
<div class="col-lg-12">
      <h1 class="page-header">Login</h1>
      
     </div>
    </div>
</div>
        
                    
                
    <div class="row">
	 <div class="col-md-12 col-md-offset-3">
        <?php if(!empty($error))
                    { ?>
                <div class="row col-md-offset-1"  >
                 <div class="alert alert-danger pull-left">
                <strong>Danger!</strong> <?php echo $error; ?>
                    </div>
                </div>
                    <?php } ?>
        
        <form role="form" action="<?php echo base_url() ?>register/login" method="post" >
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                <div class="form-group">
                    <label for="InputUserName">Enter User Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputUserName" id="InputNewPassword" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputPassword">Enter Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" name="InputPassword" id="InputPassword" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
        </form>
    </div>
	</div>

<?php include "footer.php"?>