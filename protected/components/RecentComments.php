<?php

Yii::import('zii.widgets.CPortlet');

/*
 * @var $maxComments int
 * */
class RecentComments extends CPortlet {
	public $title = 'Recent Comments';
	public $maxComments = 10;
	
	protected function renderContent() {
		$this->render('recentComments');
	}
	
	public function getRecentComments() {
		return Comment::model()->findRecentComments($this->maxComments);
	}
}