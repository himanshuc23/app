<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    /**
     * This function will call parent constructor
     * User constructor.
     * @author : Himanshu Charegaonkar
     * @access : public
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Function fnLogin
     * This function will call administrator login for the application
     * @author Himanshu Charegaonkar
     * @access public
     */
    public function fnLogin()
    {
        # Load the required Model.
        $this->load->model('misc');

        # set form fields rules.
        $this->form_validation->set_rules('username', 'Your username', 'trim|required');
        $this->form_validation->set_rules('password', 'Your Password', 'required|max_length[100]');

        # Check whether the validation turns true.
        if ($this->form_validation->run() == TRUE) {
            $strUserName = trim($this->input->post('username'));
            $strPassword = trim($this->input->post('password'));
            $arrInfo = $this->misc->fnCheckLoginCredentials($strUserName, md5($strPassword), 'tbl_user_master');
            if (empty($arrInfo)) {
                $this->session->set_flashdata('error', "Given Login details not found");
                redirect(base_url().'user/fnLogin');
            }

            # Set the remember me functionality by setting  up a cookie.
            if ($this->input->post('remember') != "") {
                setcookie("username", $strUserName, time()+7200);
                setcookie("password", $strPassword, time()+7200);
            } else {
                setcookie("username", "", time()-1000);
                setcookie("password", "", time()-1000);
            }

            # Set a session.
            $this->load->library('encrypt');
            $this->session->set_userdata(array('id' => $this->encrypt->encode($arrInfo[0]['id']), 'username' => $this->encrypt->encode($arrInfo[0]['username']),
                ));
            $strRedirectPath = base_url().'user/dashboard';
            redirect($strRedirectPath);
            /*$this->session->set_flashdata('success', "Given Login details not found");
            redirect(base_url().'user/login');*/
        } else {
            $strValidationErrors = validation_errors();
            if ($strValidationErrors != "" ) {
                $this->session->set_flashdata('error', $strValidationErrors);
                $strRedirectPath = base_url().'user/fnLogin';
                redirect($strRedirectPath);
            } else {
                $this->load->view('admin/user/login');

            }
        }
    }

    /**
     * function dashboard
     * Function to navigate the dashboard after successful login.
     * @author Himanshu Charegaonkar
     * @access public
     * @return mixed
     */
    public function dashboard()
    {
        # Check whether the session is set or not.
        $this->load->model('misc');
        $this->misc->fnCheckLoginStatus();

        $arrPatientDetails = $this->misc->fnGetDetails('tbl_user_master');
        $arrData['arrPatientDetails'] = $arrPatientDetails;
        $arrData['tag'] = 'dashboard';
        $arrData['middle'] = 'admin/user/table-user-listing';
        $this->load->view('admin/templates/template', $arrData);
    }

}
