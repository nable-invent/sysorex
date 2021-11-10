<?php 
defined("BASEPATH") or exit("No Direct Access Allowed");

class Web extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('user_agent');
        date_default_timezone_set("Asia/Kolkata");
    }
    public function index(){
        $this->load->view("includes/header");
        $this->load->view("index");
        $this->load->view("includes/footer");
     }
     public function about_us(){
        $this->load->view("includes/header");
        $this->load->view("newabout");
        $this->load->view("includes/footer");
     }
     public function events(){
        $this->load->view("includes/header");
        $this->load->view("events");
        $this->load->view("includes/footer");
     }
     public function event_details(){
        $this->load->view("includes/header");
        $this->load->view("event_details");
        $this->load->view("includes/footer");
     }
     public function contactus(){
        $this->load->view("includes/header");
        $this->load->view("contactus");
        $this->load->view("includes/footer");
     }
     public function registration(){
        $this->load->view("includes/header");
        $this->load->view("workshop_registration");
        $this->load->view("includes/footer");
     }
     public function onpremisesRegistration(){
        $this->load->view("includes/header");
        $this->load->view("onpremises-registration");
        $this->load->view("includes/footer");
     }
     public function teamextension(){
        $this->load->view("includes/header");
        $this->load->view("team_ext");
        $this->load->view("includes/footer");
     }
     public function softwaredevelopment(){
         $this->load->view("includes/header");
        $this->load->view("software");
        $this->load->view("includes/footer");
     }
     public function industry(){
         $this->load->view("includes/header");
        $this->load->view("industries");
        $this->load->view("includes/footer");
     }
     public function bpt(){
        $this->load->view("includes/header");
        $this->load->view("BPT");
        $this->load->view("includes/footer");
     }
     public function appDeveloper(){
        $this->load->view("includes/header");
        $this->load->view("AppDev");
        $this->load->view("includes/footer");
     }
     public function productengineering(){
        $this->load->view("includes/header");
        $this->load->view("PE");
        $this->load->view("includes/footer");
     }
     public function devops(){
        $this->load->view("includes/header");
        $this->load->view("Devops");
        $this->load->view("includes/footer");
     }
     public function bpo(){
        $this->load->view("includes/header");
        $this->load->view("BPO");
        $this->load->view("includes/footer");
     }
     public function policy(){
        $this->load->view("includes/header");
        $this->load->view("privacy-policy");
        $this->load->view("includes/footer");
     }
      public function terms(){
        $this->load->view("includes/header");
        $this->load->view("terms");
        $this->load->view("includes/footer");
     } public function refund(){
        $this->load->view("includes/header");
        $this->load->view("refund");
        $this->load->view("includes/footer");
     }
     public function trainingregistration($id){
         $data['id'] = $id;
        $this->load->view("includes/header");
        $this->load->view("registration",$data);
        $this->load->view("includes/footer");
     }
     public function training_details(){
         $this->db->order_by("course_id","asc");
        $data['course'] = $this->db->get('tbl_course');
        $this->load->view("includes/header");
        $this->load->view("subjava",$data);
        $this->load->view("includes/footer");
         
     }
     public function getInvoice($id){
         $this->db->from('tbl_order as to');
         $this->db->join('tbl_course as tc',"to.order_courseid = tc.course_id","left");
         $this->db->where(array('to.order_uniqueid'=>$id));
         
         $data['invoice'] = $this->db->get();
        //  echo json_encode($data['invoice']->result());
        //  return ;
         $this->load->view("invoice",$data);
     }
     public function coursedetails($id=1){
        $course = $this->db->get_where('tbl_offlinecourse',array("course_id"=>$id));
        $data = array();
        $data['name'] = "";
        $data['description'] = "";
        $data['duration'] = "";
        $data['level'] = "";
        $data['language'] = "";
        $data['location'] = "";
        foreach($course->result() as $row){
            $data['name'] = $row->course_name;
            $data['description'] = $row->course_description;
            $data['duration'] = $row->course_duration;
            $data['level'] = $row->course_level;
            $data['language'] = $row->course_language;
            $data['location'] = $row->course_location;
        }
        $this->load->view("includes/header");
        $this->load->view("coursedetails",$data);
        $this->load->view("includes/footer");
         
     }
     public function registerData(){
      
            $input['course_course'] = $this->input->post('cid') ;
            $input['course_email'] = $this->input->post('email') ;
            $input['course_name'] = $this->input->post('name');
            $input['course_mobile'] = $this->input->post('contact') ;
            $input['course_department'] = $this->input->post('department') ;
            $input['course_college'] = $this->input->post('college') ;
            $input['course_yop'] = $this->input->post('yop') ;
            $input['course_skills'] = $this->input->post('skills');
            $input['course_creation'] = date("d/m/Y H:s") ;
         $course = "";
            $to = "ak.chourasia.007@gmail.com,  info@sysorexedge.com";
           
            //receiver mail
            $subject = "Offline registration";
           
            // subject of mail
            $message = "
            <html>
            <head>
            <title>Offline Training</title>
            </head>
            <body>
            <p>Registration data</p>
            <table>
            <tr>
            <th>Course</th>
            <th>Fullname</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Department</th>
            <th>College</th>
            <th>YOP</th>
            <th>Skills</th>
            <th>Creation</th>
            </tr>
            <tr>
            
            <td>".$input['course_course']."</td>
            <td>".$input['course_name']."</td>
            <td>". $input['course_email']."</td>
            <td>".$input['course_mobile']."</td>
            <td>".$input['course_department']."</td>
            <td>". $input['course_college']."</td>
             <td>". $input['course_yop']."</td>
            <td>".$input['course_skills']."</td>
            <td>".$input['course_creation']."</td>
            </tr>
            </table>
            </body>
            </html>
            ";
            // body html as well as html
            
            
            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";//line required if html content is present
            
            // More headers
            $headers .= 'From: <info@sysorexworld.com>' . "\r\n"; //server email or sender mail
            // $headers .= 'Cc: myboss@example.com' . "\r\n";
            //cc of mail
            
            //php mail function


            if($this->db->insert("tbl_coursereg",$input)){
                $_SESSION['response'] = "Registration success";
                $this->session->mark_as_flash('response');
                mail($to,$subject,$message,$headers);
                
            }else{
                $_SESSION['response'] = "Registration failed please try again .";
                $this->session->mark_as_flash('response');
                
            }
           
            redirect($this->agent->referrer());
        
     }
     public function courses(){
        //  $this->db->order_by("course_id","asc");
        // $data['course'] = $this->db->get('tbl_course');
        $this->load->view("includes/header");
        $this->load->view("courses");
        $this->load->view("includes/footer");
         
     }
     public function getRegistrationData(){
         $data['reg'] = $this->db->get("tbl_coursereg");
         $this->load->view("getregistration",$data);
     }
     public function softwareTrainer(){
         $this->load->view("includes/header");
        $this->load->view("trainer");
        $this->load->view("includes/footer");
         
     } 
     public function uploadData(){
        $config['upload_path']          = './assets/resume/';
        $config['max_size']             = 10000;
       $config['allowed_types']        = 'gif|jpg|png|pdf|docx|doc';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('resume'))
        {
                 $_SESSION['response'] = "Registration failed please try again.";
                $this->session->mark_as_flash('response');
                 $error = array('error' => $this->upload->display_errors());
echo json_encode($error);
                // redirect($this->agent->referrer());
                
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            echo json_encode($data);
            // die();
            $input['st_name'] = $this->input->post('name') ;
            $input['st_email'] = $this->input->post('email') ;
            $input['st_mobile'] = $this->input->post('contact');
            $input['st_course'] = $this->input->post('cid') ;
            $input['st_xpercentage'] = $this->input->post('percentagex') ;
            $input['st_xiipercentage'] = $this->input->post('percentagexii') ;
            $input['st_graduation'] = $this->input->post('course') ;
            $input['st_college'] = $this->input->post('college');
            $input['st_yop'] = $this->input->post('gyop') ;
            $input['st_gpercent'] = $this->input->post('percentageg') ;
            $input['st_stream'] = $this->input->post('stream');
            $input['st_resume'] = $data['upload_data']['file_name'];
            $input['st_state'] = $this->input->post('state');
            $input['st_creation'] = date("d/m/Y H:s") ;
         $course = "";
            $to = "ak.chourasia.007@gmail.com, info@sysorexedge.com ";
           
            $subject = "Visiting Software Trainer";
           
            $message = "
                 We have 1 new registration please follow Following link 
                <a href='https://sysorexworld.com/web/softwareTrainer'>Click me</a>
            ";
           
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
            // More headers
            $headers .= 'From: <info@sysorexworld.com>' . "\r\n";
           


            if($this->db->insert("tbl_streg",$input)){
                $_SESSION['response'] = "Registration success";
                $this->session->mark_as_flash('response');
                mail($to,$subject,$message,$headers);
                
            }else{
                $_SESSION['response'] = "Registration failed please try again.";
                $this->session->mark_as_flash('response');
                
            }
           
            redirect($this->agent->referrer());
        }
     }
}