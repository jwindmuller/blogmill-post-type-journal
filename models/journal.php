<?php
class Journal extends JournalAppModel {
	var $useTable = false;
	
	var $validate = array(
		'title' => array(
			'required' => array(
				'rule' => array('notEmpty')
			),
			'maxLength' => array(
				'rule' => array('maxLength', 255)
			)
		),
		'content' => array(
			'required' => array(
				'rule' => array('notEmpty')
			)
		),
	);
	
	/**
	 * Initialize Validation
	 *
	 * @return void
	 * @author Joaquin Windmuller
	 */
	protected function __initializeValidation() {
		$this->defineErrorMessage('title.required', __d('journal','The title is required', true));
		$this->defineErrorMessage('title.maxLength', __d('journal','Maximum length is 255 character', true));
		$this->defineErrorMessage('content.required', __d('journal','Write the content!', true));
	}
}
