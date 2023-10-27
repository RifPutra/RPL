<?php 
class Auth extends CI_Model 
{

	public function __construct()
	{
        parent::__construct();
	}

	function register($nama,$telepon,$email,$alamat,$password)
	{
		$data_user = array(
			'nama'=>$nama,
            'telepon'=>$telepon,
            'email'=>$email,
            'alamat'=>$alamat,
			'password'=>password_hash($password,PASSWORD_DEFAULT),
		);
		$this->db->insert('user',$data_user);
	}

	function login_user($telepon,$password)
	{
        $query = $this->db->get_where('user',array('telepon'=>$telepon));
        if($query->num_rows() > 0)
        {
            $data_user = $query->row();
            if (password_verify($password, $data_user->password)) {
                $this->session->set_userdata('telepon',$telepon);
				$this->session->set_userdata('nama',$data_user->nama);
				$this->session->set_userdata('is_login',TRUE);
                return TRUE;
            } else {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
	}
	
    function cek_login()
    {
        if(empty($this->session->userdata('is_login')))
        {
			redirect('login');
		}
    }
}
