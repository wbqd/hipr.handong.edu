<?php get_header(); ?>

<section class="content">
	
	<?php get_template_part('inc/page-title'); ?>
	
	<div class="pad group">
		
		<?php while ( have_posts() ): the_post(); ?>
			<article <?php post_class(); ?>>	
				<div class="post-inner group">
					
					<h1 class="post-title"><?php the_title(); ?></h1>
					<p class="post-byline"><?php _e('by','hueman'); ?> <?php the_author_posts_link(); ?> &middot; <?php the_time(get_option('date_format')); ?></p>
					
					<?php if( get_post_format() ) { get_template_part('inc/post-formats'); } ?>
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

					<div class="clear"></div>
					
					<div class="entry">	
						<div class="entry-inner">
							<?php the_content(); ?>
							<?php wp_link_pages(array('before'=>'<div class="post-pages">'.__('Pages:','hueman'),'after'=>'</div>')); ?>
						</div>
						<div class="clear"></div>				
					</div><!--/.entry-->
					
				</div><!--/.post-inner-->	
			</article><!--/.post-->				
		<?php endwhile; ?>
		
		<div class="clear"></div>
		
		<?php the_tags('<p class="post-tags"><span>'.__('Tags:','hueman').'</span> ','','</p>'); ?>
		
		<?php if ( ( ot_get_option( 'author-bio' ) != 'off' ) && get_the_author_meta( 'description' ) ): ?>
			<div class="author-bio">
				<div class="bio-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'128'); ?></div>
				<p class="bio-name"><?php the_author_meta('display_name'); ?></p>
				<p class="bio-desc"><?php the_author_meta('description'); ?></p>
				<div class="clear"></div>
			</div>
		<?php endif; ?>
		
		<?php if ( ot_get_option( 'post-nav' ) == 'content') { get_template_part('inc/post-nav'); } ?>
		
		<?php if ( ot_get_option( 'related-posts' ) != '1' ) { get_template_part('inc/related-posts'); } ?>
		
		<?php comments_template('/comments.php',true); ?>
		
	</div><!--/.pad-->
	
</section><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>