<?php include "userheader.php" ?>
<div class="container">
	<div class="jumbotron">
		<h1>Learn about BBC News</h1>
		<p>It is the world's oldest national broadcasting organisation and the second largest broadcaster in the world by number of employees, with over 20,000 staff in total, of which 16,672 are in public sector broadcasting.</p>
		<p><a href="http://www.bbc.com" target="_blank" class="btn btn-success btn-lg">Get Learn</a></p>
	</div>
	
	 <div class="col-lg-12">
	 	<a href="<?php echo base_url() ?>register/new_post/<?php echo $user_name; ?>" name="btn"  class="pull-right btn btn-primary btn-xs"><i class="fa fa-plus"></i> New Post</a>
      <h1 class="page-header">News</h1>

     </div>
     
	<?php if (isset($articles)) { 

		if($articles=='Database is empty !')
		 { ?>
                <div class="row col-md-offset-1"  >
                 <div class="alert alert-danger pull-left">
                <strong>Danger!</strong> <?php echo $articles; ?>
                    </div>
                </div>
                    <?php }

		else{
		foreach ($articles as $article) {
		?>

	 <h2><?php echo $article->title;?></h2>
	  <div class="panel panel-default">
		<div class="panel-heading"><?php echo $article->title;?></div>
		<div class="panel-body">
			<div class="panel-body">
			<div class="col-sm-6">
            <div class="pic pull-right">
            	 <img src="<?php if($article->photo!='') {echo base_url()."images/".$article->photo;} ?>" alt="" <?php if($article->photo!='') { echo 'class="std_img"'; }?> />
            </div>
         </div>
        </div>
			<p><?php echo $article->text;?></p>
		</div>
		<div class="panel-footer"><?php echo '[User Name]:'.$article->user_name."- [TimeStamp]:".$article->curr_time;?>
			<div class="pic pull-right">
				<a href="<?php echo base_url() ?>register/delete_user_post/<?php echo $article->id;?>/<?php echo $article->user_name;?>" >Delete</a>
			</div>
		</div>
	  </div>
	  <?php }}}?>
	
	  
	
<?php include "footer.php"?>