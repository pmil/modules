<?php
class MyModComments extends Module {
	public function __construct() {
		$this->name = 'mymodcomments';
		$this->tab = 'front_office_features';
		$this->version = '0.1';
		$this->author = 'Paulius Milasauskas';
		$this->displayName = 'My Module of product comments';
		$this->description = '';
		parent::__construct();
	}
}
?>