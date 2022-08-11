<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // if($this->session->userdata('logged_in') == true){
        //     if($this->session->userdata('role') == 1){
        //         redirect('home');
        //     }else if($this->session->userdata('role') == 2){
        //         redirect('home'); 
        //     }else{
        //         redirect('home/tampilanApoteker');
        //     }
        // }
    }

    public function index()
    {
        if($this->session->userdata('logged_in') != true){
            $this->form_validation->set_rules('username', 'Username', 'trim|required', [
                'required' => 'Username tidak boleh kosong!',
            ]);
            $this->form_validation->set_rules('password', 'Password', 'trim|required', [
                'required' => 'Password tidak boleh kosong!',
            ]);

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('login');
            } else {
                $this->proses_login();
            }
        }else{
            $role = $this->session->userdata('role');
            if($role == 1){
                redirect('home');
            }else if($role == 2){
                redirect('home');
            }else{
                redirect('home/tampilanApoteker');
            }
        }
    }

    public function proses_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'id' => $user['id'],
                    'name' => $user['name'],
                    'username' => $user['username'],
                    'role' => $user['role_id'],
                    'password' => $user['password'],
                    'logged_in' => TRUE
                ];
                $this->session->set_userdata($data);
                if ($user['role_id'] == 1) {
                    redirect('home');
                } else if ($user['role_id'] == 2) {
                    redirect('home');
                } else {
                    redirect('home/tampilanApoteker');
                    die;
                }
            }
            $this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <i class="fa fa-times-circle"></i> Password Salah!
            </div>');
            redirect('auth');
        } else {
            $this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <i class="fa fa-times-circle"></i> Akun Tidak Ditemukan!
            </div>');
            redirect('auth');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[password_confirmation]', [
            'matches' => 'Password not matches'
        ]);
        $this->form_validation->set_rules('password_confirmation', 'Password', 'trim|required|matches[password]', [
            'matches' => 'Password not matches'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('register');
        } else {
            $register = [
                'id' => $this->getUUID(),
                'name' => $this->input->post('name'),
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'aktif' => 1,
                'created_at' => time(),
                'updated_at' => time(),
            ];
            $this->db->insert('user', $register);
            $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
              <i class="fa fa-check-circle"></i> <strong>Account Has Been Created!</strong>
              </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('logged_in');
        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
          <i class="fa fa-check-circle"></i> You Have Been Logged Out!
          </div>');
        redirect('auth');
    }

    public function getUUID()
    {
        $data = $this->db->query("SELECT uuid() as uuid")->result();
        $uuid = $data[0]->uuid;
        return $uuid;
    }
}
