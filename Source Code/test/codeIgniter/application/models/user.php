<?php 
class User extends CI_Model
{
	function create_user($data)
	{
		$this->db->insert('tbl_users', $data);
		
	}

	function login($username, $password, $type)
	{
		$where = array(
			'username'	=>	$username,
			'password'	=>	sha1($password), //$password,
			'user_type' => 	$type
		);

		$this->db->select()->from('ci_users')->where($where);
		$query = $this->db->get();
		return $query->first_row('array');
	}

	function isUserNameExist($name)
	{
		$this->db->select()->from('tbl_users')->where('user_name', $name);
		$query = $this->db->get();
		return $query->num_rows();
	}

	function isEmailExist($email)
	{
		$this->db->select()->from('tbl_users')->where('user_email', $email);
		$query = $this->db->get();
		return $query->num_rows();

	}

	function update_user($user_name, $data)
	{
		$this->db->where('user_name', $user_name);
		$this->db->update('tbl_users', $data);
	}

	function get_password($user_name)
	{
		$this->db->select()->from('tbl_users')->where(array('user_name'=>$user_name));
		$query = $this->db->get();
		return $query->first_row('array');
	}
}
 ?>