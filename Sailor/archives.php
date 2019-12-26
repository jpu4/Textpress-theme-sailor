
<h1>Archives</h1>
<div class="archives">
<p>
<ul>
<?php
  if($archives){
  	$years = array();
    foreach($archives as $archive){
      // if ($archive->getStatus()=="published"){ // for use if your version of textpress supports post status
    ?>
      <li>
        <span class="archives-date"><?php echo $archive->getDate($global['date.format']); ?></span> 
        <a href="<?php echo $archive->getUrl(); ?>"><?php echo $archive->getTitle(); ?></a>
      </li>
  <?php 
  	//}
  }
  } ?>
</ul>
</p>
</div>
