<div class="articles-related immersion-hide">
  <div class="articles-related-content">
    <div class="articles-related-head">
      <h3 class="articles-related-title">相关推荐</h3>
    </div>
    <div class="articles-related-body">
      <?php $this->related(10, null)->to($relatedPosts);?>
      <?php if ($relatedPosts->have()): ?>
        <div class="articles-related-list">
        <?php while ($relatedPosts->next()): ?>
          <div class="articles-related-list-item" data-link="<?php $relatedPosts->permalink()?>" itemscope itemtype="http://schema.org/BlogPosting">
            <a class="articles-related-list-hidden-a" href="<?php $relatedPosts->permalink();?>" itemprop="url"><?php $relatedPosts->title()?></a>
            <div class="articles-related-list-item-head">
              <a class="articles-related-list-item-author" href="<?php $relatedPosts->author->permalink();?>" target="_self" title="<?php $relatedPosts->author();?>"><?php $relatedPosts->author();?></a>
              <time class="articles-related-list-item-time" datetime="<?php $relatedPosts->date('c');?>" itemprop="datePublished"><?php timeFormatting($relatedPosts->created);?></time>
              <span class="articles-related-list-item-tag">
                <?php $this->category('<span class="articles-related-list-item-separator">·</span>');?>
              </span>
            </div>
            <div class="articles-related-list-item-body">
              <h4 class="articles-related-list-item-title" itemprop="name headline"><?php $relatedPosts->title()?></h4>
            </div>
            <div class="articles-related-list-item-footer" itemprop="interactionCount">
              <span class="articles-related-list-item-footer-item">
                <i class="jj-icon jj-icon-eye articles-related-list-item-footer-item-icon"></i>
                <span><?php articleViews($relatedPosts);?></span>
              </span>
              <span class="articles-related-list-item-footer-item">
                <i class="jj-icon jj-icon-like articles-related-list-item-footer-item-icon"></i>
                <span><?php echo getLikeCount($relatedPosts); ?></span>
              </span>
              <a class="articles-related-list-item-footer-item comments" href="<?php $relatedPosts->permalink()?>#comments" target="_self" title="文章评论">
                <i class="jj-icon jj-icon-message articles-related-list-item-footer-item-icon"></i>
                <span><?php $relatedPosts->commentsNum(_t('0'), _t('1'), _t('%d '));?></span>
              </a>
            </div>
          </div>
        <?php endwhile;?>
        </div>
      <?php else: ?>
        <div class="articles-related-empty">暂无相关推荐</div>
      <?php endif;?>
    </div>
  </div>
</div>