<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function index()
    {
        $this->load->view('index');
    }
    public function regform()
    {
        $this->load->view('regform');    
    }
        public function bookingticket()
    {
        $this->load->view('bookingticket');    
    }
    // public function login()
    // {
    //       $this->load->view('login');  
    // }
    public function reg()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("fname","fname",'required');
        $this->form_validation->set_rules("lname","lname",'required');
        $this->form_validation->set_rules("age","age",'required');
        $this->form_validation->set_rules("gender","gender",'required');
        $this->form_validation->set_rules("address","address",'required');
        $this->form_validation->set_rules("phone","phone",'required');
        $this->form_validation->set_rules("email","email",'required');
        $this->form_validation->set_rules("password","password",'required');
        if($this->form_validation->run())
        {
        $this->load->model('mainmodel');
        $pass=$this->input->post("password");
        $encpass=$this->mainmodel->encpaswdz($pass);
        $b=array("fname"=>$this->input->post("fname"),
                 "lname"=>$this->input->post("lname"),
                "age"=>$this->input->post("age"),
                "gender"=>$this->input->post("gender"),
                "address"=>$this->input->post("address"),
                "phone"=>$this->input->post("phone")
               );
         $c=array("email"=>$this->input->post("email"),
                "password"=>$encpass,
                "usertype"=>'1');
        $this->mainmodel->inreg($b,$c);    
        redirect(base_url().'main/regform'); 
        }
}
public function adminhome()
    {
          $this->load->view('adminhome');  
    }
  public function logins()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("email","email",'required');
        $this->form_validation->set_rules("password","password",'required');
            if($this->form_validation->run())
            {
                $this->load->model('mainmodel');
                $email=$this->input->post("email");
                $pass=$this->input->post("password");
               // echo"$pass";exit;
                $rslt=$this->mainmodel->selectpass($email,$pass);
                if($rslt)
                {
                    $id=$this->mainmodel->getuserid($email);
                    $user=$this->mainmodel->getuser($id);
                    $this->load->library(array('session'));
                    $this->session->set_userdata(array('id'=>$user->id,'usertype'=>$user->usertype));
                    if($_SESSION['usertype']=='0')
                    {
                                redirect(base_url().'main/adminhome');
                    }
                    elseif($_SESSION['usertype']=='1')
                    {
                            redirect(base_url().'main/regform');
                   }
                  
                   else
                    {
                        echo "Waiting for Approval";
                    }
                }
                    else
                    {
                        echo "invalid user";
                    }
                }
                else
                {
                    redirect('main/login','refresh');
                }
        }
public function payment()
    {
          $this->load->view('payment');  
    }
   
    public function addflight()
    {
        $this->load->view('addflight');
    }

      public function flyinsrt()
    
    {
       $this->load->library('form_validation');
        $this->form_validation->set_rules("cname","cname",'required');
        $this->form_validation->set_rules("flightid","flightid",'required');
        $this->form_validation->set_rules("flyfrom","flyfrom",'required');
        $this->form_validation->set_rules("flyto","flyto",'required');
        $this->form_validation->set_rules("dtime","dtime",'required');
        $this->form_validation->set_rules("atime","atime",'required');
        $this->form_validation->set_rules("eseat","eseat",'required');
        $this->form_validation->set_rules("bseat","bseat",'required');
        $this->form_validation->set_rules("fseat","fseat",'required');
        $this->form_validation->set_rules("date","date",'required');
        $this->form_validation->set_rules("ecost","ecost",'required');
        $this->form_validation->set_rules("bcost","bcost",'required');
        $this->form_validation->set_rules("fcost","fcost",'required');
        if($this->form_validation->run())
        {
            $this->load->model('mainmodel');
        $a=array("cname"=>$this->input->post("cname"),
                    "flightid"=>$this->input->post("flightid"),
                    "flyfrom"=>$this->input->post("flyfrom"),
                    "flyto"=>$this->input->post("flyto"),
                    "dtime"=>$this->input->post("dtime"),
                    "atime"=>$this->input->post("atime"),
                    "eseat"=>$this->input->post("eseat"),
                    "bseat"=>$this->input->post("bseat"),
                    "fseat"=>$this->input->post("fseat"),
                    "date"=>$this->input->post("date"),
                    "ecost"=>$this->input->post("ecost"),
                    "bcost"=>$this->input->post("bcost"),
                    "fcost"=>$this->input->post("fcost")
                   );
        $this->mainmodel->flyinsrt($a);
        redirect(base_url().'main/adminup');
    }
   


}
public function viewsearch()
{
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->viewsearch();
        $this->load->view('viewsearch',$data);
}
 public function searchform()
    {
          $this->load->view('searchform');  
    }
    public function searchaction()
    {
        $this->load->model('mainmodel');
        $d=date('y-m-d');
        $this->mainmodel->deletedate($d);
        $from=$this->input->post("flyfrom");
        $to=$this->input->post("flyto");
        $date=$this->input->post("date");   
        $data['n']=$this->mainmodel-> viewflight($from,$to,$date);
        $this->load->view('viewsearch',$data);

    }
    public function updateflight()
    {    
     
          $this->load->model('mainmodel');
          $id=$this->session->id;
          $data['n']=$this->mainmodel->view();
          $this->load->view('updateflight',$data);
    }
     public function updatedetails()
    {
         $a=array("cname"=>$this->input->post("cname"),
                    "flightid"=>$this->input->post("flightid"),
                    "flyfrom"=>$this->input->post("flyfrom"),
                    "flyto"=>$this->input->post("flyto"),
                    "dtime"=>$this->input->post("dtime"),
                    "atime"=>$this->input->post("atime"),
                    "eseat"=>$this->input->post("eseat"),
                    "bseat"=>$this->input->post("bseat"),
                    "fseat"=>$this->input->post("fseat"),
                    "date"=>$this->input->post("date"),
                    "ecost"=>$this->input->post("ecost"),
                    "bcost"=>$this->input->post("bcost"),
                    "fcost"=>$this->input->post("fcost")
                   );
                  $this->load->model('mainmodel');
                  $id=$this->uri->segment(3);  
                   $data['user_data']=$this->mainmodel->singledata($id);
                            $this->mainmodel->singleselect();
                            $this->load->view('updateflight',$data);
                            if($this->input->post("update"))
                            { //echo"hi";exit;

                                $this->mainmodel->updatedetails($a,$this->input->post("f_id"));
                                redirect('main/updateflight','refresh');
                            }
    }
    public function deletedetails()
    {
        $this->load->model('mainmodel');
        $id=$this->uri->segment(3);
        $this->mainmodel->deletedetails($id);
        redirect('main/flightview','refresh');
    }
   public function notification()

{
$this->load->model('mainmodel');
$data['n']=$this->mainmodel->flightname();
$this->load->view('notification',$data);
}
public function notify_action()
{
$this->load->library('form_validation');
$this->form_validation->set_rules("noti","notification",'required')
;
if($this->form_validation->run())
{

$this->load->model('mainmodel');

$n=array("notification"=>$this->input->post("noti"),"flight"=>$this->input->post("flight"),"currentdate"=>date('y-m-d'));

$this->mainmodel->notifymodel($n);
redirect('main/notification','refresh');
}
}




}

