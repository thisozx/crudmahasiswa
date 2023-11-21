<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Profile
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

 class Profile extends CI_Controller
 {
     public function __construct()
     {
         parent::__construct();
         $this->load->model('User_model','userrole');
     }
     public function index()
     {
         $data['judul'] = "Halaman Profile";
         $data['user'] = $this->userrole->getBy();
         $this->load->view("layout/header_user", $data);
         $this->load->view("profile/vw_profile", $data);
         $this->load->view("layout/footer", $data);
     }
 }


/* End of file Profile.php */
/* Location: ./application/controllers/Profile.php */