<article class="post">
  <div class="post-image">
    <div class="post-heading">
      <h3><?php echo $article->getTitle(); ?></h3>
    </div>
    <img src="/images/<?php echo $article->getFeatureImage();?>" alt="" class="img-responsive" />
  </div>


  <section class="content">
    <?php echo $article->getContent(); ?>

  </section>
  <div class="bottom-article">
    <ul class="meta-post">
      <li><i class="fa fa-calendar"></i><a href="#"> <?php  echo $article->getDate($global['date.format']);  ?></a></li>
      <li><i class="fa fa-user"></i><a href="/about"> <?php  echo $article->getAuthor()
                        ? $article->getAuthor()
                        : $global['author.name'] ;  ?></a></li>
      <li><i class="fa fa-comments"></i><a href="#disqus_thread">Comments</a></li>
      <li><i class="fa fa-tags"></i><?php
        foreach ($article->getTags() as $slug => $tag) {
          echo '<span class="tag"><a href="/tag/' , $slug ,'">' , $tag->name , "</a></span>";
        }
        ?></li>
    </ul>
  </div>
  <section class="comments">
    <?php if($global['disqus.username']){?>
    <div id="disqus_thread"></div>
    <script type="text/javascript" src="http://disqus.com/forums/<?php echo $global['disqus.username']; ?>/embed.js">
    </script>
    <noscript><a href="http://<?php echo $global['disqus.username']; ?>.disqus.com/?url=ref">View the discussion
        thread.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">blog comments powered by <span class="logo-disqus">Disqus</span></a>
    <?php }?>
  </section>
</article>