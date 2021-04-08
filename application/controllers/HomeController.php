<?php

class HomeController extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->library('pagination');
  }

  public function Home()
  {
    $data['title'] = "British Film - Home";
    $this->load->view('templates/header', $data);
    $this->load->view('pages/home');
    $this->load->view('templates/footer');
  }

  public function services()
  {
    $data['jobs'] = $this->Recuriter_model->fetch_all_jobs();
    $data['title'] = "British Film - Services";
    $this->load->view('templates/header', $data);
    $this->load->view('pages/services', $data);
    $this->load->view('templates/footer');
  }

  public function apply()
  {
    $data['title'] = "British Film - Apply as Recuriter";
    $this->load->view('templates/header', $data);
    $this->load->view('pages/apply');
    $this->load->view('templates/footer');
  }

  public function model()
  {
    $data['title'] = "British Film - Our Model";
    $this->load->view('templates/header', $data);
    $this->load->view('pages/model');
    $this->load->view('templates/footer');
  }
  public function modelDetail()
  {
    $data['title'] = "British Film - Model Details";
    $this->load->view('templates/header', $data);
    $this->load->view('pages/modelDetails');
    $this->load->view('templates/footer');
  }

  public function aboutUs()
  {
    $data['title'] = "British Film - About us";
    $this->load->view('templates/header', $data);
    $this->load->view('pages/about');
    $this->load->view('templates/footer');
  }

  public function contactUs()
  {
    $data['title'] = "British Film - Contact Us";
    $this->load->view('templates/header', $data);
    $this->load->view('pages/contactus');
    $this->load->view('templates/footer');
  }

  // public function registration()
  // {
  //   $data['title'] = "British Film - Registration";
  //   $this->load->view('templates/header', $data);
  //   $this->load->view('pages/registration');
  //   $this->load->view('templates/footer');
  // }

  public function saveRecuriter()
  {

    $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'matches[password]');

    $config['upload_path'] = './assets/img/modelpic';
    $config['allowed_types'] = 'gif|jpg|png|pdf';
    $config['max_size'] = '3072';
    $config['max_width'] = '1500';
    $config['max_height'] = '1500';

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('pic')) {
      print_r($this->upload->display_errors());
      $post_image = 'Image Not Found';
    } else {
      $post_image = $_FILES['pic']['name'];
    }

    $config['upload_path'] = './assets/img/modelpic';
    $config['allowed_types'] = 'gif|jpg|png|pdf';
    $config['max_size'] = '3072';
    $config['max_width'] = '1500';
    $config['max_height'] = '1500';

    // $this->load->library('upload',$config);

    if (!$this->upload->do_upload('cv')) {
      print_r($this->upload->display_errors());
      $resume_file = 'Image Not Found';
    } else {
      $resume_file = $_FILES['cv']['name'];
    }

    $this->load->model('Recuriter_model');
    $this->Recuriter_model->register($post_image, $resume_file);
    redirect('apply');
  }

  //admin Login
  public function login()
  {
    $data['title'] = 'British Film - Sign in';

    $this->form_validation->set_rules('user_name', 'user_name', 'required');
    $this->form_validation->set_rules('password', 'password', 'required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('pages/login');
      $this->load->view('templates/footer');
    } else {
      //get the name
      $username = $this->input->post('user_name');
      //get password
      $password = md5($this->input->post('password'));
      //login user
      $user_id = $this->Recuriter_model->login($username, $password);

      if ($user_id) {
        // create session
        if ($user_id) {
          $user_data = array(
            'user_id' => $user_id,
            'username' => $this->input->post('user_name'),
            'logged_in' => TRUE
          );
          $this->session->set_userdata($user_data);
        }
        //set message
        $this->session->set_flashdata('loggedin', 'You are Login...!');
        redirect('AdminDashboard');
      } else {
        //set message
        $this->session->set_flashdata('login_failed', 'Invalid Username or password');
        redirect('login');
      }
    }
  }

  //user login
  public function userlogin()
  {
    $data['title'] = 'British Film - User Login';

    $this->form_validation->set_rules('user_name', 'user_name', 'required');
    $this->form_validation->set_rules('password', 'password', 'required');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('pages/userlogin');
      $this->load->view('templates/footer');
    } else {
      //get the name
      $username = $this->input->post('user_name');
      //get password
      $password = md5($this->input->post('password'));
      //login user
      $user_id = $this->Recuriter_model->userlogin($username, $password);

      if ($user_id) {
        // create session
        if ($user_id) {
          $user_data = array(
            'user_id' => $user_id,
            'username' => $username,
            'userlogged_in' => TRUE
          );
          $this->session->set_userdata($user_data);
        }
        //set message
        $this->session->set_flashdata('user_loggedin', 'You are Login...!');
        redirect('Dashboard');
      } else {
        //set message
        $this->session->set_flashdata('login_failed', 'Invalid Username or password');
        redirect('userlogin');
      }
    }
  }

  public function adminLogout()
  {
    //unset user data
    // $this->session->unset_userdata('logged_in');
    // $this->session->unset_userdata('user_id');
    // $this->session->unset_userdata('username');
    $this->session->sess_destroy();
    //set message for logout
    $this->session->set_flashdata('user_logout', 'You are logout..!');
    redirect('Home');
  }

  public function postJob()
  {
    if (!$this->session->userdata('logged_in')) {
      redirect('login');
    } else {
      $data['title'] = 'British Film - Post Job';
      $this->load->view('templates/header', $data);
      $this->load->view('admin/postJob');
      $this->load->view('templates/footer');
    }
  }
  public function insertJob()
  {
    $data = array(
      'job_title' => $this->input->post('job_title'),
      'location' => $this->input->post('location'),
      'job_details' => $this->input->post('description'),
      'application_deadline' => $this->input->post('application_deadline'),
      'job_responsibility' => $this->input->post('job_description'),
      'skill_required' => $this->input->post('skills_required'),
      'posting_date' => $this->input->post('posting_date'),
    );
    $this->Recuriter_model->insertJob($data);
    // set message on successful inserting data
    $this->session->set_flashdata('Inserted', 'Your Job Post has been published Successfuly.');
    redirect('AdminDashboard');
  }

  public function viewJobs()
  {

    if (!$this->session->userdata('logged_in')) {
      redirect('login');
    } else {
      $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
      $config['base_url'] = base_url() . 'jobList';
      $config['total_rows'] = $this->Recuriter_model->TotalRows();
      $config['per_page'] = 10;
      $config['uri_segment'] = 2;

      /////////////////////////////////////
      $config['num_links'] = 2;
      $config['use_page_numbers'] = TRUE;
      $config['reuse_query_string'] = TRUE;

      $config['full_tag_open'] = '<div class="del">';
      $config['full_tag_close'] = '</div>';

      $config['first_link'] = 'First';
      $config['first_tag_open'] = '<button class="del">';
      $config['first_tag_close'] = '</button>';

      $config['last_link'] = 'Last';
      $config['last_tag_open'] = '<button class="del">';
      $config['last_tag_close'] = '</button>';

      $config['next_link'] = 'Last Page';
      $config['next_tag_open'] = '<button class="del">';
      $config['next_tag_close'] = '</button>';

      $config['prev_link'] = 'Prev Page';
      $config['prev_tag_open'] = '<button class="del">';
      $config['prev_tag_close'] = '</button>';

      $config['cur_tag_open'] = '<button class="del">';
      $config['cur_tag_close'] = '</button>';

      $config['num_tag_open'] = '<button class="del">';
      $config['num_tag_close'] = '</button>';

      /////////////////////////////////////

      $this->pagination->initialize($config);

      $data['title'] = 'British Film - Jobs List';
      $dat['jobs'] = $this->Recuriter_model->fetch_data($config["per_page"], $page);
      $dat['links'] = $this->pagination->create_links();

      $this->load->view('templates/header', $data);
      $this->load->view('admin/viewJobs', $dat);
      $this->load->view('templates/footer');
    }
  }

  public function searching()
  {
    $data['jobs'] = $this->Recuriter_model->search_data();
    // echo '<pre>';
    // print_r($data['jobs']);
    // echo '<pre>';exit;
    $data['title'] = "British Film - Services";
    $this->load->view('templates/header', $data);
    $this->load->view('pages/services', $data);
    $this->load->view('templates/footer');
  }

  public function Talent_filter()
  {
      $data['jobs'] = $this->Recuriter_model->talent_filter();
      echo "<pre>";
      print_r($data['jobs']);
      echo "<pre>";exit;
      $this->load->view('templates/header', $data);
      $this->load->view('admin/AdminDashboard');
      $this->load->view('templates/footer');
  }

  public function editJob($id)
  {
    if (!$this->session->userdata('logged_in')) {
      redirect('login');
    } else {
      $data['title'] = "British Film - Edit Job";
      $data['jobs'] = $this->Recuriter_model->get_job($id);
      $this->load->view('templates/header', $data);
      $this->load->view('admin/editJob', $data);
      $this->load->view('templates/footer');
    }
  }


  public function editTalent($id)
  {
    $data['title'] = 'Edit Your Contact Details';
    // print_r($id);exit;
    $data['talent'] = $this->Recuriter_model->get_talent($id);
    // print_r($data['talent']);exit;
    $this->load->view('templates/header', $data);
    $this->load->view('pages/editTalentInfo', $data);
    $this->load->view('templates/footer');
  }

  public function editRecuriter($id)
  {
    $data['title'] = 'Edit Your Contact Details';
    // print_r($id);exit;
    $data['recuriter'] = $this->Recuriter_model->get_recuriter($id);
    // print_r($data['talent']);exit;
    $this->load->view('templates/header', $data);
    $this->load->view('pages/editRecuriter', $data);
    $this->load->view('templates/footer');
  }

  public function update1()
  {
    $this->Recuriter_model->update_t();
    $this->session->set_flashdata('talent_updated', 'You have successfuly Updated the Job Post.');
    redirect('Dashboard');
  }

  public function updateRecuriter()
  {
    $this->Recuriter_model->update_R();
    $this->session->set_flashdata('recuriter_updated', 'You have successfuly Updated the Job Post.');
    redirect('AdminDashboard');
  }

  public function update()
  {

    $this->Recuriter_model->update_post();
    $this->session->set_flashdata('talent_updated', 'You have successfuly Updated the Job Post.');
    redirect('AdminDashboard');
  }

  public function delete($id)
  {
    $this->Recuriter_model->delete_post($id);
    redirect('AdminDashboard');
  }

  public function deleteAdmin($id)
  {
    $this->Recuriter_model->delete_admin($id);
    redirect('AdminDashboard');
  }

  public function talentRegistration()
  {
    $data['title'] = 'Talent Registration';

    $this->load->view('templates/header', $data);
    $this->load->view('pages/talentRegistration');
    $this->load->view('templates/footer');
  }

  public function talentRegistrationData()
  {
    $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'matches[password]');

    $data['upload_path'] = './assets/img/TalentCVandPic';
    $data['allowed_types'] = 'gif|jpg|png|pdf';
    $data['max_size'] = '3072';
    $data['max_width'] = '1500';
    $data['max_height'] = '1500';

    $this->load->library('upload', $data);

    if (!$this->upload->do_upload('pic')) {
      print_r($this->upload->display_errors());
      $post_image = 'Image Not Found';
    } else {
      $post_image = $_FILES['pic']['name'];
    }

    $data['upload_path'] = './assets/img/TalentCVandPic';
    $data['allowed_types'] = 'gif|jpg|png|pdf';
    $data['max_size'] = '3072';
    $data['max_width'] = '1500';
    $data['max_height'] = '1500';

    // $this->load->library('upload',$config);

    if (!$this->upload->do_upload('cv')) {
      print_r($this->upload->display_errors());
      $resume_file = 'Image Not Found';
    } else {
      $resume_file = $_FILES['cv']['name'];
    }

    $data = array(
      'first_name' => $this->input->post('first_name'),
      'last_name' => $this->input->post('last_name'),
      'gender' => $this->input->post('gender'),
      'Sexuality' => $this->input->post('sexuality'),
      'email_address' => $this->input->post('email'),
      'phone_number' => $this->input->post('phone_number'),
      'residental_address' => $this->input->post('residental_address'),
      'nationality' => $this->input->post('country'),
      'dob' => $this->input->post('dob'),
      'height' => $this->input->post('height'),
      'weight' => $this->input->post('weight'),
      'skin_color' => $this->input->post('skin_color'),
      'eye_color' => $this->input->post('eye_color'),
      'hair_color' => $this->input->post('hair_color'),
      'hair_type' => $this->input->post('hair_type'),
      'preferred_role' => $this->input->post('preferred_role'),
      'experience' => $this->input->post('experience'),
      'role' => $this->input->post('role'),
      'language' => $this->input->post('languages'),
      'consent_for_nudity' => $this->input->post('consent_nudity'),
      'alternative_number' => $this->input->post('alternative_number'),
      'fb_link' => $this->input->post('fb_link'),
      'twitter_link' => $this->input->post('twitter_link'),
      'insta_link' => $this->input->post('insta_link'),
      'user_name' => $this->input->post('user_name'),
      'password' => md5($this->input->post('password')),
      'picture' => $post_image,
      'cv' => $resume_file
    );
    // echo '<pre>';
    // print_r($data); exit;
    // echo '<pre>';
    $this->load->model('Recuriter_model');
    $this->Recuriter_model->talentRegistration($data);
    redirect('Dashboard');
  }

  public function talentDashboard()
  {
    if (!$this->session->userdata('userlogged_in')) {
      redirect('userlogin');
    } else {
      $userid = $this->session->userdata('user_id');
      $data['title'] = 'Dashboard';
      $data['info'] = $this->Recuriter_model->showInfo($userid);
      $data['gallery'] = $this->Recuriter_model->getRows($userid);
      // echo '<pre>';
      // print_r($data['gallery']);
      // echo '<pre>';exit;
      $data['lists'] = $this->Recuriter_model->applied_jobs_list($userid);
  
      // $this->load->view('templates/header', $data);
      $this->load->view('pages/TalentDashboard',$data);
      // $this->load->view('templates/footer');
    }
  }

  public function jobDetails($id)
  {
    // print_r('something');exit;
    $data['title'] = 'Job Details';
    $data['jobs'] = $this->Recuriter_model->job_Details($id);
    // print_r($data['jobs']); exit;
    $this->load->view('templates/header', $data);
    $this->load->view('pages/jobDetails', $data);
    $this->load->view('templates/footer');
  }

  public function apply_job()
  {

    $applicant_id = $this->session->userdata('user_id');
    $data['jobs'] = $this->Recuriter_model->get_talent($applicant_id);
    $users = $data['jobs'];
    if (!$this->session->userdata('userlogged_in')) {
      redirect('userlogin');
    } else {
      $to = $users['email_address'];
      $subject = "Stage 2 - Job Application Process";

      $message = '<HTML>
      <BODY style="font-size: 10pt; font-family: Verdana, sans-serif;">
      Dear Applicant, <br><br>As per our conversation, please see below for the link to complete the DBS form, where <br> 
      necessary providing the relevant documentation.<br><br><br>
      Any questions, please do not hesitate to contact us.<br><br><br>
       Congratulations for passing onto the next stage of the recruitment process!! <br><br><br>
       Complete the questions <a href="' . base_url() . '/remaining-application/?details=' . md5($this->input->post('applicant_id')) . '">here</a> <br>
      <br><br><br>
       Kind Regards <br>
       Rocket Jobs
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
            <table>
            <tbody>
            <tr>
              <td style="font-size: 10pt; font-family: Verdana, sans-serif; border-right: 1px solid; border-right-color: #808080; width:180px; padding-right: 10px; vertical-align: top;" valign="top">
                <img src="' . base_url('assets/img/logo/emailLogo.png') . '" alt="photograph" width="116" border="0" style="border:0; height:auto; width:116px"/>
                <p style="margin-top:30px; margin-bottom:0; line-height:16px">
                <strong><span style="font-size: 12pt; font-family: Verdana, sans-serif; color:#262626;">RocketJobs <br></span></strong>
                <span style="font-family: Verdana, sans-serif; font-size:9pt; color:#808080;">HR/Admin Department</span>
                </p>
                <p style="margin-top:30px; margin-bottom:0; line-height:16px">    
              </td>

              <td style="font-size: 10pt; color:#444444; font-family: Verdana, sans-serif; padding-bottom: 10px; padding-left: 20px; vertical-align: top; line-height:14px" valign="top">
                <span style="color: #808080;"><strong>M</strong></span><span style="font-size: 9pt; font-family: Verdana, sans-serif; color:#808080;"> 02080883260<br></span>
                <span style="color: #808080;"><strong>E</strong></span><span style="font-size: 9pt; font-family: Verdana, sans-serif; color:#808080;"> info@rocketjob.com <br></span>
                <span  style="font-size: 10pt; font-family: Verdana, sans-serif; color: #808080;">Ground Floor, The Bower, Stockley Park, <br> 4 Roundwood Ave, London UB11 1AF</span> <br>
                <a href="https://rocketjobs.co.uk/" target="_blank" rel="noopener" style="text-decoration:none;"><strong style="font-size: 9pt; font-family: Verdana, sans-serif; color: #262626;">RocketJobs</strong></a>
              </td>
            </tr>
          </tbody>
        
        </table>
    
        <tr>
          <td>
            <p style="width:550px; font-size:9px; line-height:11px; COLOR: #808080; FONT-FAMILY: Verdana, sans-serif; text-align:justify">The content of this email is confidential and intended for the recipient specified in message only. It is strictly forbidden to share any part of this message with any third party, without a written consent of the sender. If you received this message by mistake, please reply to this message and follow with its deletion, so that we can ensure such a mistake does not occur in the future.</p>
          </td>
        </tr>
        <tr>
        </body>
      </html>';

      // Always set content-type when sending HTML email
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

      // More headers
      $headers .= 'From: British-Film<sullaimaan@gmail.com>' . "\r\n";
      // $headers .= 'Cc: myboss@example.com' . "\r\n";

      mail($to, $subject, $message, $headers);
      redirect('services');
    }
  }

  public function AdminDashboard()
  {
    if (!$this->session->userdata('logged_in')) {
      redirect('login');
    } else {
      $data['title'] = 'Admin - Dashboard';
      $data['info'] = $this->Recuriter_model->show_admin_info(); // fetch admin/recuriter info
      $data['jobs'] = $this->Recuriter_model->get_all_jobs(); // fetch all jobs from database
      $data['talents'] = $this->Recuriter_model->show_talents();
      $data['applied_jobs'] = $this->Recuriter_model->list_of_applied_jobs();
      $data['approve'] = $this->Recuriter_model->all_recuriter();
      // echo '<pre>';
      // print_r($data['approve']);
      // echo '<pre>';
      // exit;
      // $this->load->view('templates/header', $data);
      $this->load->view('admin/AdminDashboard', $data);
      // $this->load->view('templates/footer');
    }
  }

  public function approveAdmin($id)
  {
    if (!$this->session->userdata('logged_in')) {
      redirect('login');
    } else 
    {
      $data['title'] = 'Approve Admin - British Film Hub';
      // print_r($id);exit;
      $data['recuriter'] = $this->Recuriter_model->get_recuriter($id);
      // print_r($data['talent']);exit;
      $this->load->view('templates/header', $data);
      $this->load->view('admin/approveAdmin', $data);
      $this->load->view('templates/footer');
    }
  }

  public function updateRecuriterApprove()
  {
    $this->Recuriter_model->adminApproved();
    $this->session->set_flashdata('recuriter_updated', 'You have successfuly Updated the Job Post.');
    redirect('AdminDashboard');
  }

  public function TalentInfo($id)
  {
    if (!$this->session->userdata('logged_in')) {
      redirect('login');
    } 
    else 
    {
      $data['talents'] = $this->Recuriter_model->get_talent($id);
      // echo "<pre>";
      // print_r($data['talents']);
      // echo "<pre>"; exit;
      $data['title'] = "Talent Information";
      $this->load->view('templates/header', $data);
      $this->load->view('admin/Talentinfo', $data);
      // $this->load->view('templates/footer');
    }
  }

  //Admin - Send Email to talent/customer
  public function send_email()
  {

    $applicant_id = $this->session->userdata('user_id');
    $data['jobs'] = $this->Recuriter_model->get_talent($applicant_id);
    $users = $data['jobs'];
    if (!$this->session->userdata('logged_in')) {
      redirect('login');
    } else {
      $to = $users['email_address'];
      $subject = "Call for Interview";

      $message = '<HTML>
      <BODY style="font-size: 10pt; font-family: Verdana, sans-serif;">
      Dear Applicant, <br><br>As per our conversation, you are invited for the interview.<br>
      If you have any questions, please do not hesitate to contact us.<br><br><br>
      Kind Regards <br>
      British Film Hub
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <table>
      <tbody>
      </tbody>
        
      </table>
      <tr>
      <td>
      <p style="width:550px; font-size:9px; line-height:11px; COLOR: #808080; FONT-FAMILY: Verdana, sans-serif; text-align:justify">The content of this email is confidential and intended for the recipient specified in message only. It is strictly forbidden to share any part of this message with any third party, without a written consent of the sender. If you received this message by mistake, please reply to this message and follow with its deletion, so that we can ensure such a mistake does not occur in the future.</p>
      </td>
      </tr>
      <tr>
      </body>
      </html>';

      // Always set content-type when sending HTML email
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

      // More headers
      $headers .= 'From: British-Film<sullaimaan@gmail.com>' . "\r\n";
      // $headers .= 'Cc: myboss@example.com' . "\r\n";

      mail($to, $subject, $message, $headers);

      //change the status from 0 (email not sent) to 1 (email sent)
      $users['status'] = 1;
      redirect('AdminDashboard');
    }
  }
  public function sendEmail()
  {

    $applicant_id = $this->session->userdata('user_id');
    $data['jobs'] = $this->Recuriter_model->get_talent($applicant_id);
    $users = $data['jobs'];
    if (!$this->session->userdata('logged_in')) {
      redirect('login');
    } else {
      $to = $users['email_address'];
      $subject = "Call for Interview";

      $message = '<HTML>
      <BODY style="font-size: 10pt; font-family: Verdana, sans-serif;">
      Dear Applicant, <br><br>As per our conversation, you are invited for the interview.<br>
      If you have any questions, please do not hesitate to contact us.<br><br><br>
      Kind Regards <br>
      British Film Hub
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <table>
      <tbody>
      </tbody>
        
      </table>
      <tr>
      <td>
      <p style="width:550px; font-size:9px; line-height:11px; COLOR: #808080; FONT-FAMILY: Verdana, sans-serif; text-align:justify">The content of this email is confidential and intended for the recipient specified in message only. It is strictly forbidden to share any part of this message with any third party, without a written consent of the sender. If you received this message by mistake, please reply to this message and follow with its deletion, so that we can ensure such a mistake does not occur in the future.</p>
      </td>
      </tr>
      <tr>
      </body>
      </html>';

      // Always set content-type when sending HTML email
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

      // More headers
      $headers .= 'From: British-Film<sullaimaan@gmail.com>' . "\r\n";
      // $headers .= 'Cc: myboss@example.com' . "\r\n";

      mail($to, $subject, $message, $headers);
      //change the status from 0 (email not sent) to 1 (email sent)
      redirect('AdminDashboard');
    }
  }

  // user uploading multiple images to his/her gallery

  public function uploadImage()
  {
    $data = array();
    if ($this->input->post('submitForm') && !empty($_FILES['upload_Files']['name'])) {
      $filesCount = count($_FILES['upload_Files']['name']);
      for ($i = 0; $i < $filesCount; $i++) {
        $_FILES['upload_File']['name'] = $_FILES['upload_Files']['name'][$i];
        $_FILES['upload_File']['type'] = $_FILES['upload_Files']['type'][$i];
        $_FILES['upload_File']['tmp_name'] = $_FILES['upload_Files']['tmp_name'][$i];
        $_FILES['upload_File']['error'] = $_FILES['upload_Files']['error'][$i];
        $_FILES['upload_File']['size'] = $_FILES['upload_Files']['size'][$i];
        $uploadPath = './assets/img/TalentGallery';
        $config['upload_path'] = $uploadPath;
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('upload_File')) {
          $fileData = $this->upload->data();
          $uploadData[$i]['image_name'] = $fileData['file_name'];
          $uploadData[$i]['created_at'] = date("Y-m-d H:i:s");
          $uploadData[$i]['user_id'] = $this->session->userdata('user_id');
        }
      }
      if (!empty($uploadData)) {
        //Insert file information into the database
        $insert = $this->Recuriter_model->insert($uploadData);
        $statusMsg = $insert ? 'Files uploaded successfully.' : 'Some problem occurred, please try again.';
        $this->session->set_flashdata('statusMsg', $statusMsg);
      }
    }
    redirect('Dashboard');
  }

}
