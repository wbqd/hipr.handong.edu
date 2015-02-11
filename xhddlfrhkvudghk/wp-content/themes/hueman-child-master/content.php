<article id="post-<?php the_ID(); ?>" <?php post_class('group'); ?>>	
	<div class="post-inner post-hover">
		
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php if ( has_post_thumbnail() ): ?>
					<?php the_post_thumbnail('thumb-medium'); ?>
				<?php elseif ( ot_get_option('placeholder') != 'off' ): ?>
					<img src="<?php echo get_template_directory_uri(); ?>/img/thumb-medium.png" alt="<?php the_title(); ?>" />
				<?php endif; ?>
				<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fa fa-play"></i></span>'; ?>
				<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fa fa-volume-up"></i></span>'; ?>
				<?php if ( is_sticky() ) echo'<span class="thumb-icon"><i class="fa fa-star"></i></span>'; ?>
			</a>
			<?php if ( comments_open() && ( ot_get_option( 'comment-count' ) != 'off' ) ): ?>
				<a class="post-comments" href="<?php comments_link(); ?>"><span><i class="fa fa-comments-o"></i><?php comments_number( '0', '1', '%' ); ?></span></a>
			<?php endif; ?>
		</div><!--/.post-thumbnail-->
		
		<div class="post-meta group">
			<p class="post-category"><?php the_category(' / '); ?></p>
			<p class="post-date"><?php the_time('j M, Y'); ?></p>
		</div><!--/.post-meta-->
		
		<h2 class="post-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2><!--/.post-title-->
		
		<?php if (ot_get_option('excerpt-length') != '0'): ?>
			<?php $CFSlocale = get_locale(); ?>
			<?php if ( 'ko_KR' == $CFSlocale ): ?>
				<?php if (($CFStitle = CFS()->get('title')) != ''): ?>
					<p>제목: <?php echo $CFStitle; ?></p>
				<?php endif; ?>
				<?php if (($CFSauthor = CFS()->get('author')) != ''): ?>
					<p>저자: <?php echo $CFSauthor; ?></p>
				<?php endif; ?>
				<?php if (($CFSdate = CFS()->get('date')) != ''): ?>
					<p>출간일: <?php echo date('F j, Y', strtotime($CFSdate)); ?></p>
				<?php endif; ?>
				<?php if (($CFSlink = CFS()->get('link')) != ''): ?>
					<p><a href="<?php $CFSlink; ?>">다운로드</a></p>
				<?php endif; ?>
			<?php elseif ( 'en_US' == $CFSlocale ): ?>
				<?php if (($CFStitle = CFS()->get('title')) != ''): ?>
					<p>Title: <?php echo $CFStitle; ?></p>
				<?php endif; ?>
				<?php if (($CFSauthor = CFS()->get('author')) != ''): ?>
					<p>Author: <?php echo $CFSauthor; ?></p>
				<?php endif; ?>
				<?php if (($CFSdate = CFS()->get('date')) != ''): ?>
					<p>Date: <?php echo date('F j, Y', strtotime($CFSdate)); ?></p>
				<?php endif; ?>
				<?php if (($CFSlink = CFS()->get('link')) != ''): ?>
					<p><a href="<?php $CFSlink; ?>">Download</a></p>
				<?php endif; ?>
			<?php endif; ?>
		<div class="entry excerpt">				
			<?php the_excerpt(); ?>
		</div><!--/.entry-->
		<?php endif; ?>
		
	</div><!--/.post-inner-->	
</article><!--/.post-->	