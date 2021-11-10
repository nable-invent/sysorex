<?php 
defined("BASEPATH") or exit("No Direct Access Allowed");
class Contactus extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model("Contactusmodel","contact");
        date_default_timezone_set('Asia/kolkata');
        $this->load->library('user_agent');
    }
    public function addMessage(){
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET,POST,PUT,PATCH,DELETE');
        header("Access-Control-Allow-Headers: X-Requested-With");
        
        $msg['response'] = false;
        $input['contact_name'] = $this->input->post("name");
        $input['contact_email'] = $this->input->post("email");
        $input['contact_phone'] = $this->input->post("phone");
        $input['contact_subject'] = $this->input->post("subject");
        $input['contact_message'] = $this->input->post("message");
        $input['contact_date'] = date("d/m/Y h:i A");
        // $msg['response'] = $this->contact->addMessage($input);
        // $this->sendEmail($input['contact_name'],$input['contact_email'],$input['contact_phone'],$input['contact_subject'],$input['contact_message']);
        $_SESSION['response'] = 'Message Sent Successfully';
        $this->session->mark_as_flash('response');
        redirect($this->agent->referrer());
    }
    public function sendEmail($name,$email,$phone,$subject,$msg){
        $companyEmail = "info@sysorexedge.com";
        $serverEmail = "info@sysorexworld.com" ;
        $messageTCompany = '
            <!Doctype html>
            <html>
                <body>
                    <div>
                        <p>Name:-'.$name.' </p>
                        <p>Email:-'.$email.' </p>
                        <p>Phone No.:-'.$phone.' </p>
                        <p>Message:-'.$msg.' </p>
                    </div>
                </body>
            </html>
        ';
        $messageToUser = '
            <!Doctype html>
            <html>
                <body>
                    <div>
                        <p>Thank You MR/MS/MRS '.$name.' </p>
                        <p>Thank you for contacting us. </p>
                        <p>Regards <a>www.sysorexworld.com</a></p>
                    </div>
                </body>
            </html>
        ';
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <info@sysorexworld.com>' . "\r\n";
        mail($companyEmail,$subject,$messageTCompany,$headers);
        mail($email,$subject,$messageToUser,$headers);
    
    }
}