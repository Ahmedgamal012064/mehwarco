<?php

class User 
{
	private $_db;
	private $_ignoreCase;

	function __construct($db)
	{
		$this->_db = $db;
		$this->_ignoreCase = false;
	}

	public function setIgnoreCase($sensitive) {
		$this->_ignoreCase = $sensitive;
	}

	public function getIgnoreCase() {
		return $this->_ignoreCase;
	}

	private function get_user_hash($user_email)
	{
		try {
			if ($this->_ignoreCase) {
				$stmt = $this->_db->prepare('SELECT password, user_full_name, user_id FROM users WHERE LOWER(user_email) = LOWER(:user_email)');
			} else {
				$stmt = $this->_db->prepare('SELECT password, user_full_name, user_id FROM users WHERE user_email = :user_email');
			}
			$stmt->execute(array(':user_email' => $user_email));

			return $stmt->fetch();

		} catch(PDOException $e) {
			echo '<p class="bg-danger">'.$e->getMessage().'</p>';
		}
	}

	public function isValidEmail($user_email){
		
		if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
			return false;
		}

		return true;
	}

	public function isValidUsername($username)
	{
		$fixed_user_name = str_replace(array(' ', "'", '-'), '', $username);

		if (strlen($fixed_user_name) < 3) {
			return false;
		}

		if (strlen($fixed_user_name) > 17) {
			return false;
		}

		//Allow names with spaces, dashes, and single quotes and no numbers
		if (! ctype_alpha($fixed_user_name)) {
			return false;
		}

		return true;
	}

	public function login($user_email, $password)
	{
		if (! $this->isValidEmail($user_email)) {
			return false;
		}

		if (strlen($password) < 3) {
			return false;
		}

		$row = $this->get_user_hash($user_email);
		$row_type = gettype($row);

		// $stmt = $this->_db->prepare('INSERT INTO logs VALUES (:rowType)');
		// 	$stmt->execute(array(
		// 		':rowType' => $row_type
		// 	));
		

		if (gettype($row) == 'array' && password_verify($password, $row['password'])) {

			$_SESSION['loggedin'] = true;
			$_SESSION['email'] = $row['user_email'];
			$_SESSION['name'] = $row['user_full_name'];
			$_SESSION['id'] = $row['user_id'];
		    
			return true;
		}
		return false;
	}

	public function logout()
	{
		session_destroy();
	}

	public function is_logged_in()
	{
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			return true;
		}
	}

}
