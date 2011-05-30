<?php
	class JournalSettings extends BlogmillSettings {
        public $types;

        public function __construct() {
		    $this->types = array(
    			'Journal' => array(
                    'name' => __d('journal', 'Journal Entry', true),
		    		'fields' => array(
			    		'title' => array(
                            'label' => __d('journal', 'Title', true),
                            'type' => 'text',
                        ),
				    	'content' => array(
                            'label' => __d('journal', 'Content', true),
                            'type' => 'html',
                        ),
    				),  
	    			'form_layout' => array(
		    			'form-main' => array(
                            array(
                                'fields' => array('title', 'content'),
                                'width' => '100%'
                            )
                        ),
			    		'form-sidebar' => array()
				    ),
    				'display' => 'title'
	    		)
		    );
        }
	}
