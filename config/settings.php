<?php
	class JournalSettings extends BlogmillSettings {
		var $types = array(
			'Journal' => array(
				'fields' => array(
					'title' => 'text',
					'content' => 'html',
				),
				'form_layout' => array(
					'form-main' => array('title', 'content'),
					'form-sidebar' => array()
				),
				'display' => 'title'
			)
		);
		
	}