<?php

// Load controller_base class
Load::FromClasses('controller_base');

Class Controller_Members Extends Controller_Base {

	function index() {
		echo 'Default index of the `members` controllers';
	}

	function view() {
		echo 'You are viewing the members/view request';
	}

}

?>