<?php include "header.php" ?>
<div class="container">
	<div class="jumbotron">
		<h1>Learn about BBC News</h1>
		<p>It is the world's oldest national broadcasting organisation and the second largest broadcaster in the world by number of employees, with over 20,000 staff in total, of which 16,672 are in public sector broadcasting.</p>
		<p><a href="http://www.bbc.com" target="_blank" class="btn btn-success btn-lg">Get Learn</a></p>
	</div>

	 <div class="col-lg-12">
      <h1 class="page-header">News</h1>
      <a href="<?php echo base_url() ?>feed" name="btn"  class="pull-right btn btn-primary btn-xs" target="_blank"><i class="fa fa-plus" ></i> RSS Feeds</a>
     </div>
     
	<?php if (isset($show_table)) {
		foreach ($show_table as $value) {
		?>

	 <h2><?php echo $value->title;?></h2>
	  <div class="panel panel-default">
		<div class="panel-heading"><?php echo $value->title;?></div>
		<div class="panel-body">
			<p><?php echo substr($value->text,0,strlen($value->text)/2).".......................";?></p>
			<p><a href="<?php echo base_url() ?>news/article/<?php echo $value->id ?>" target="_blank" class="btn btn-success">Read More &raquo;</a></p>
		</div>
		<div class="panel-footer"><?php echo '[User Name]:'.$value->user_name."- [TimeStamp]:".$value->curr_time;?></div>
	  </div>
	  <?php }}?>
	
	  
	
<?php include "footer.php"?>