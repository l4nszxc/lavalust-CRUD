<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');
class Users_model extends Model
{
    public function add_users(
        $lastname,
        $firstname,
        $email,
        $gender,
        $address
    ) {
        $data = array(
            'LLNH_last_name' => $lastname,
            'LLNH_first_name' => $firstname,
            'LLNH_email' => $email,
            'LLNH_gender' => $gender,
            'LLNH_address' => $address,
        );
        return $this->db->table('LLNH_users')->insert($data);
    }

    public function get_all_users(){
		return $this->db->table('LLNH_users')
                    ->get_all(); 
	}

    public function get_user_by_id($id)
    {
        return $this->db->table('LLNH_users')->where('id', $id)->get(); // Adjust to your primary key name
    }

    public function update_user($Id, $lastname, $firstname, $email, $gender, $address)
    {
        $data = array(
            'LLNH_last_name' => $lastname,
            'LLNH_first_name' => $firstname,
            'LLNH_email' => $email,
            'LLNH_gender' => $gender,
            'LLNH_address' => $address,
        );

        return $this->db->table('LLNH_users')->where('Id', $Id)->update($data); // Adjust to your primary key name
    }

    public function delete_users($Id)
    {
return $this->db->table('LLNH_users')->where("id",$Id)->delete();
    }

}
?>