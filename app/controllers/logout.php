<?php
	class Logout extends Controller {

    public function index() {	
		$_session = array();
	    session_destroy();
		header('Location: /login');
		die;
    }
	}