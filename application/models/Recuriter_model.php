<?php

class Recuriter_model extends CI_Model
{

  public function register($post_image, $resume)
  {
    $data = array(
      'first_name' => $this->input->post('first_name'),
      'last_name' =>  $this->input->post('last_name'),
      'email' =>  $this->input->post('email'),
      'phone_number' =>  $this->input->post('contact_number'),
      'gender' =>  $this->input->post('gender'),
      'residental_address' =>  $this->input->post('resident_address'),
      'nationality' =>  $this->input->post('nation'),
      'dob' =>  $this->input->post('dob'),
      'experience' =>  $this->input->post('experience'),
      'role' =>  $this->input->post('designation'),
      'username' =>  $this->input->post('user_name'),
      'password' =>  md5($this->input->post('password')),
      'picture' => $post_image,
      'cv' => $resume
    );
    $this->db->insert('recuriter', $data);
  }

  public function talentRegistration($data)
  {
    $this->db->insert('talent', $data);
  }

  //Recuriter Login
  public function login($username, $password)
  {
    //validate the user
    $this->db->where('username', $username);
    $this->db->where('password', $password);
    $this->db->where('status', 1);

    $result = $this->db->get('recuriter');

    if ($result->num_rows() == 1) {
      return $result->row(0)->id;
    } else {
      return false;
    }
  }

  // user login
  public function userlogin($username, $password)
  {
    //validate the user
    $this->db->where('user_name', $username);
    $this->db->where('password', $password);

    $result = $this->db->get('talent');

    if ($result->num_rows() == 1) {
      return $result->row(0)->id;
    } else {
      return false;
    }
  }

  public function insertJob($data)
  {
    $this->db->insert('advertisment', $data);
  }

  public function fetch_data($limit, $start)
  {
    $keyword = $this->input->get('job_title');
    $keyword1 = $this->input->get('location');
    $this->db->like(array('job_title' => $keyword));
    $this->db->like(array('job_responsibility' => $keyword1));
    $this->db->limit($limit, $start);
    $this->db->order_by('id DESC');
    $query = $this->db->get('advertisment');
    return $query->result_array();
  }
  
  public function search_data()
  {
    $keyword = $this->input->get('title');
    $keyword3 = $this->input->get('location');
    $keyword1 = $this->input->get('sdate');
    $keyword2 = $this->input->get('edate');
    $this->db->like(array('job_title' => $keyword));
    $this->db->like(array('application_deadline' => $keyword1, 'application_deadline' => $keyword2, 'location' => $keyword3));
    $this->db->order_by('id DESC');
    $query = $this->db->get('advertisment');
    return $query->result_array();
  }

  // public function searchJob()
  // {
  //   $keyword1 = $this->input->get('title');
  //   $startdate = $this->input->get('sdate');
  //   $enddate = $this->input->get('edate');
  //   $this->db->where('job_title',$keyword1);
  //   $this->db->where('application_deadline BETWEEN' . $startdate . '' AND '' . $enddate );
  //   $query = $this->db->get('advertisment');
  //   return $query->result_array();
  // }

  public function get_all_jobs()
  {
    $this->db->order_by('id DESC');
    $query = $this->db->get('advertisment');
    return $query->result_array();
  }
  
  // Method for showing list of jobs applied by a specific user
  public function all_jobs($id)
  {
    $this->db->where('id', $id);
    $this->db->order_by('id DESC');
    $query = $this->db->get('advertisment');
    return $query->result_array();
  }

  public function fetch_all_jobs()
  {
    $this->db->order_by('id DESC');
    $query = $this->db->get('advertisment');
    return $query->result_array();
  }

  // get the advertisment from database where id = id (in database) --- model to get row for edit
  public function get_job($id)
  {
    $this->db->where('id', $id);
    $query = $this->db->get('advertisment');
    return $query->row_array();
  }

  public function get_talent($id)
  {
    $this->db->where('id', $id);
    $query = $this->db->get('talent');
    return $query->row_array();
  }

  // get specific admin user who can edit his information
  public function get_recuriter($id)
  {
    $this->db->where('id', $id);
    $query = $this->db->get('recuriter');
    return $query->row_array();
  }

  // get all admin users to update his status to approved or not approved 
  public function all_recuriter()
  {
    $query = $this->db->get('recuriter');
    return $query->result_array();
  }

  public function job_Details($id)
  {
    $this->db->where('id', $id);
    $query = $this->db->get('advertisment');
    return $query->row_array();
  }

  public function update_post()
  {
    $data = array(
      'job_title' => $this->input->post('job_title'),
      'job_details' => $this->input->post('description'),
      'application_deadline' => $this->input->post('application_deadline'),
      'job_responsibility' => $this->input->post('job_description'),
      'skill_required' => $this->input->post('skills_required'),
      'posting_date' => $this->input->post('posting_date'),
    );
    $this->db->where('id', $this->input->post('id'));
    return $this->db->update('advertisment', $data);
  }

  public function update_t()
  {
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
      'experience' => $this->input->post('experience')
    );
    $this->db->where('id', $this->input->post('id'));
    return $this->db->update('talent', $data);
  }

  public function update_R()
  {
    $data = array(
      'first_name' => $this->input->post('first_name'),
      'last_name' =>  $this->input->post('last_name'),
      'email' =>  $this->input->post('email'),
      'phone_number' =>  $this->input->post('contact_number'),
      'gender' =>  $this->input->post('gender'),
      'residental_address' =>  $this->input->post('resident_address'),
      'nationality' =>  $this->input->post('nation'),
      'dob' =>  $this->input->post('dob'),
      'experience' =>  $this->input->post('experience'),
      'role' =>  $this->input->post('designation'),
      'username' =>  $this->input->post('user_name'),
      'password' =>  md5($this->input->post('password'))
    );
    $this->db->where('id', $this->input->post('id'));
    return $this->db->update('recuriter', $data);
  }

  public function adminApproved()
  {
    $data = array(
      'first_name' => $this->input->post('first_name'),
      'last_name' =>  $this->input->post('last_name'),
      'status' => $this->input->post('status')
    );
    $this->db->where('id', $this->input->post('id'));
    return $this->db->update('recuriter', $data);
  }

  // delete admin (user) if Administrator do not want to approve it or want to delete account
  public function delete_admin($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('recuriter');
    return true;
  }

  public function delete_post($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('advertisment');
    return true;
  }

  //function to return the total number of rows of advertisment table
  public function TotalRows()
  {
    return $this->db->count_all('advertisment');
  }

  // get all the record from talent table to display on Dashboard
  public function showInfo($id)
  {
    $this->db->where('id',$id);
    $this->db->order_by('id DESC');
    $query = $this->db->get('talent');
    return $query->row_array();
  }

  public function show_admin_info()
  {
    $this->db->order_by('id DESC');
    $query = $this->db->get('recuriter');
    return $query->row_array();
  }

  //fetch all talent profile from database
  public function show_talents()
  {
    $query = $this->db->get('talent');
    return $query->result_array();
  }

  public function getRows($id)
  {
    $this->db->where('user_id',$id);
    $query = $this->db->get('gallery');
    return $query->result_array();
    
    // $this->db->where('user_id',$id);
    // $this->db->select('id,image_name,created_at');
    // $this->db->from('gallery');
    // if ($id) {
    //   $this->db->where('id', $id);
    //   $query = $this->db->get();
    //   $result = $query->row_array();
    // } else {
    //   $this->db->order_by('created_at', 'desc');
    //   $query = $this->db->get();
    //   $result = $query->result_array();
    // }
    // return !empty($result) ? $result : false;
  }

  public function insert($data = array())
  {
    $insert = $this->db->insert_batch('gallery', $data);
    return $insert ? true : false;
  }


  // list of applied jobs for a specific user
  public function applied_jobs_list($userid)
  {
    $this->db->where('talent_id', $userid);
    $this->db->order_by('applied_jobs.id','DESC');
    $this->db->join('advertisment','advertisment.id = applied_jobs.advertisment_id');
    $query = $this->db->get('applied_jobs');
    return $query->result_array();
  }

  //list of all jobs for which users have applied

  public function list_of_applied_jobs()
  {
    // $this->db->where('talent_id', $userid);
    // $this->db->select('talent.first_name');
    $this->db->order_by('applied_jobs.id','DESC');
    $this->db->join('advertisment','advertisment.id = applied_jobs.advertisment_id');
    $this->db->join('talent','talent.id = applied_jobs.talent_id');
    $query = $this->db->get('applied_jobs');
    return $query->result_array();
  }

} // Recuriter Model Class Ends Here ....
