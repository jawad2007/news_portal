<?php include "header.php" ?>
<div class="container">
	<div class="jumbotron">
		<h1>Learn about BBC News</h1>
		<p>It is the world's oldest national broadcasting organisation and the second largest broadcaster in the world by number of employees, with over 20,000 staff in total, of which 16,672 are in public sector broadcasting.</p>
		<p><a href="http://www.bbc.com" target="_blank" class="btn btn-success btn-lg">Get Learn</a></p>
	</div>
	<div class="col-lg-12">
      <h1 class="page-header">News</h1>
      <a href="<?php echo base_url() ?>pdfexample/loadPdf/<?php echo $article['id']; ?>"  name="btn"  target="_blank" class="pull-right btn btn-primary btn-xs"><i class="fa fa-plus"></i> News As PDF</a>
     </div>
	<?php if (isset($article)) {
		?>

	 <h2><?php echo $article["title"];?></h2>
	  <div class="panel panel-default">
		<div class="panel-heading"><?php echo $article["title"];?></div>
		<div class="panel-body">
		<div class="panel-body">
			<div class="col-sm-6">
            <div class="pic pull-right">
            	 <img src="<?php if($article["photo"]!='') {echo "../../images/".$article["photo"];} ?>" alt="" <?php if($article["photo"]!='') { echo 'class="std_img"'; }?> />
            </div>
         </div>
        </div>
			<p><?php echo $article["text"];?></p>
			
		</div>
		<div class="panel-footer"><?php echo '[User Name]:'.$article["user_name"]."- [TimeStamp]:".$article["curr_time"];?></div>
	  </div>
	   <div class="row form-group">
		  <div class="col-sm-12">
			<!--<input type="hidden" name="br_id" value="<?php echo $br_id; ?>" /> -->
			<input type="Button" value="Back" name="buttons" class="btn btn-danger" onclick="javascript:window.location.href='<?php echo base_url() ?>'">
			
			</div>
	    </div>
	  <?php }?>
	
	  
	
<?php include "footer.php"?>