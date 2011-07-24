<?php echo $this->Blogmill->postEditLink($post, null, array('class' => 'journal')); ?>
<h1><?php echo $this->Blogmill->postLink($post); ?></h1>
<div id="post-content" class="journal">
	<?php
		echo $this->Blogmill->field($post, 'content');
	?>
</div>
