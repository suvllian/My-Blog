<div class="pagenavi"><?php 	if(function_exists('wp_pagenavi')) { 		wp_pagenavi();	}else{		leonhere_pagenavi(7);?>	<div class="pre-next">		<?php previous_posts_link('上一页') ?>		<?php next_posts_link('下一页') ?>	</div><?php 	}?></div>