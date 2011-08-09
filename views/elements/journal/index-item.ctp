<div class="journal post-index-preview">
	<?php echo $this->Blogmill->postEditLink($post); ?>
	<h1>
		<?php echo $this->Blogmill->postLink($post); ?>
	</h1>
	<p>
		<?php echo $this->Blogmill->excerpt($post, 850); ?>
		<?php
			echo $this->Blogmill->postLink($post,
				array('display' => __d('journal','Continue reading this journal entry...', true)),
				array('class' => 'call-to-action-link')
			);
		?>
	</p>
</div>
