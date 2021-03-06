<h1>Category</h1>
<?php
if( count($articles) < 1 ){
  echo "<h3>No articles found!</h3>";
}
else{
  foreach($articles as $article){
      // if ($archive->getStatus()=="published"){ // for use if your version of textpress supports post status
?>
<article class="post">
  <header>
    <h3><a href="<?php echo $article->getUrl(); ?>"><?php echo $article->getTitle(); ?></a></h3>
    <div class="postmeta">
      <span class="date"><?php  echo date($global['date.format'],strtotime($article->getDate()));  ?></span> / 
      <span class="author-by"> By </span>
      <span class="author"><?php  echo ($author = $article->getAuthor())
                        ? $author
                        : $global['author.name'] ;  ?></span>
      <div class="clear"></div>
    </div>
  </header>

  <section class="content">
    <?php echo $article->getSummary(250); ?>...
  </section>
  <div class="more">
    <a href="<?php echo $article->getUrl(); ?>">Read on &raquo;</a>
  </div>
</article>
<?php
  //}
  }
}
?>