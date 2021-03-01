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
    /*view index*/
    public function index()
    {
        $this->load->view('index1');
    }
     public function userhome()
    {
        if($_SESSION['usertype']=='1' && $_SESSION['logged_in']==true)
        {
        $this->load->view('userhome');
    } 
        else
        {
            redirect('main/index','refresh');
        }
    }
    /*
    /* view registration form*/
    public function regform()
    {
        $this->load->view('regform');    
    }
    /*
    /* insertion of users*/
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
        redirect(base_url().'main/index'); 
        }
}
/*
/*login action*/
public function loginsearch()
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
                    $this->session->set_userdata(array('id'=>$user->id,'usertype'=>$user->usertype,'logged_in'=>(bool)true));
                    if($_SESSION['usertype']=='1' && $_SESSION['logged_in']==true)
                    {
                                redirect(base_url().'main/userhome');
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
                    $this->session->set_userdata(array('id'=>$user->id,'usertype'=>$user->usertype,'logged_in'=>(bool)true));
                    if($_SESSION['usertype']=='0' && $_SESSION['logged_in']==true)
                    {
                                redirect(base_url().'main/adminhome');
                    }
                    elseif($_SESSION['usertype']=='1' && $_SESSION['logged_in']==true)
                    {
                            redirect(base_url().'main/userindex');
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
        /*
        /* adminhome view*/
        public function adminhome()
    {
        if($_SESSION['usertype']=='0' && $_SESSION['logged_in']==true)
        {
          $this->load->view('adminhome');  
        }
        else
        {
            redirect('main/index','refresh');
        }
    }
      public function userindex()
    {    
        if($_SESSION['usertype']=='1' && $_SESSION['logged_in']==true)
        {
          $this->load->view('userindex');  
        }
        else
        {
            redirect('main/index','refresh');
        }
    }
    /*
    /* flight adding form*/
     public function addflight()
    {
        if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
        $this->load->view('addflight');
        }
        else
        {
             redirect(base_url().'main/index');
        }
    }
/*
/*flight details insertion*/
  public function flyinsrt()
    
    {
        if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
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
        redirect(base_url().'main/adminhome');
    }
   
   }
   else
   {
        redirect(base_url().'main/index');
   }

}
/*
/*search form*/
public function searchform()
    {
          $this->load->view('searchform');  
    }
    /*

    /*searching action*/
     public function searchaction()
    {
            $this->load->model('mainmodel');
            $d=date('y-m-d');
            $this->mainmodel->deletedate($d);
            $this->load->model('mainmodel');
            $from=$this->input->post('from');
            $to=$this->input->post('to');
            $date=$this->input->post('date');
            $data['n']=$this->mainmodel->viewflight($from,$to,$date);
            $this->load->view('viewsearch',$data);

    }
    /*
    /*view searching details*/
    public function viewsearch()
{
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->viewsearch();
        $this->load->view('viewsearch',$data);
}
 
   /*
   /*update flight details*/
   public function updateflight()
    {    
        if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
          $this->load->model('mainmodel');
          $id=$this->session->id;
          $data['n']=$this->mainmodel->view();
          $this->load->view('updateflight',$data);
      }
      else
      {
        redirect('main/index','refresh');
      }
    }
     public function updatedetails()
    {    
         if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
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
                        else
                        {
                            redirect('main/index1','refresh');
                        }

    }


/*delete flight details*/

    public function deletedetails()
    {  
         if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
        $this->load->model('mainmodel');
        $id=$this->uri->segment(3);
        $this->mainmodel->deletedetails($id);
        redirect('main/flightview','refresh');
    }
    else
    {
        redirect('main/index','refresh');
    }

    }
/*adding airports*/
public function airport()
{
     if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
   $this->load->view('addairport');
   }
   else{
          redirect('main/index','refresh');
   } 
}
public function insrtair()
{
     if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("aname","aname",'required');
        $this->form_validation->set_rules("abname","abbrevation",'required');
        $this->form_validation->set_rules("city","city",'required');
        $this->form_validation->set_rules("state","state",'required');
        $this->form_validation->set_rules("pincode","pincode",'required');
       $this->form_validation->set_rules("timezone","timezone",'required');
        if($this->form_validation->run())
        {
            $this->load->model('mainmodel');
        $a=array("aname"=>$this->input->post("aname"),
                    "abbrevation"=>$this->input->post("abname"),
                    "city"=>$this->input->post("city"),
                    "state"=>$this->input->post("state"),
                    "pincode"=>$this->input->post("pincode"),
                    "timezone"=>$this->input->post("timezone")
                   );
        $this->mainmodel->insrtair($a);
        redirect(base_url().'main/adminhome');
    }
   }
 else{
          redirect('main/index','refresh');
   } 

}  

/*
/*Notification*/
public function notification()

{
if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
$this->load->model('mainmodel');
$data['n']=$this->mainmodel->flightname();
$this->load->view('notification',$data);
}
else
{
    redirect('main/index','refresh');
}
}
public function notify_action()
{
    if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
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
else
{
    redirect('main/index','refresh');
}
}

public function viewnotification()
{
 if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
$this->load->model('mainmodel');
$data['n']=$this->mainmodel->admin_notify();
$this->load->view('viewnotification',$data);

}
else
{
     redirect('main/index','refresh');
}
}
public function deletenotification()
{
    if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
$id=$this->uri->segment(3);
$this->load->model('mainmodel');
$this->mainmodel->admin_delete($id);
redirect('main/viewnotification','refresh');
}
else
{
    redirect('main/index','refresh');
}
}
public function adminupdate()
{
   if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
    $a=array("notification"=>$this->input->post("notification"));
   $this->load->model('mainmodel');
    $id=$this->uri->segment(3);

       $data['user_data']=$this->mainmodel->singldatas($id);
       $this->mainmodel->singlselects();
       $this->load->view('updatenotification',$data);
      if($this->input->post("update"))
{
$this->mainmodel->updatenotification($a,$this->input->post("n_id"));
redirect('main/viewnotification','refresh');
}
}
else
{
    redirect('main/index','refresh');
}
}
 public function ndelete()
 {
    if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
  $this->load->model('mainmodel');
  $date=date('y-m-d');
  $this->mainmodel->notidelete($date);
}
else
{
    redirect('main/index','refresh');
}
 }


     public function bookingticket()
    {   
        if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
        $id=$this->session->id;
        $flid=$_SESSION['flid'];
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->bview($flid);
        $this->load->view('bookingticket',$data);    
    }
    else
    {
      redirect('main/index','refresh');   
    }
}
 public function bookinsrt()
    
    {
        if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
       $this->load->library('form_validation');
        $this->form_validation->set_rules("seating","seating",'required');
        $this->form_validation->set_rules("usertype","usertype",'required');
        $this->form_validation->set_rules("name","name",'required');
        $this->form_validation->set_rules("phone","phone",'required');
        $this->form_validation->set_rules("email","email",'required');
        if($this->form_validation->run())
        {    
            $fid=$this->input->post("f_id");
            $uid=$this->session->id;
            $this->load->helper('string');
             $bid=random_string('alnum',15);
            $this->load->model('mainmodel');

         
        //     $b=array("ecost"=>$cost);
        //     $this->mainmodel->updatefirst($fid,$b);
         
        // }
     
        
        $class=$this->input->post("seating");
        $usertype=$this->input->post("usertype");
        // echo "$usertype";exit();
          if($class=="economy")
        {
            $z=$this->mainmodel->eseatcount($fid);
            //echo "$a";exit;
            if($z>0)
            {
            $sno=$z-1;
            $b=array("eseat"=>$sno);
            $this->mainmodel->updatefirst($fid,$b);
             if($usertype=="seniour")
            {
             $z=$this->mainmodel->ecost($fid);
             //echo "$z";exit;
            $cost=$z-500;
            $a=array("seating"=>$this->input->post("seating"),
                "utype"=>$this->input->post("usertype"),
                "name"=>$this->input->post("name"),
                "phone"=>$this->input->post("phone"),
                "email"=>$this->input->post("email"),
                "bookingid"=>$bid,
                "fli_id"=>$fid,
                "amount"=>$cost,
                "uid"=>$uid
                   );
            $this->mainmodel->bookinsrt($a);
            
           }
           elseif($usertype=="infant")
           {
               $z=$this->mainmodel->ecost($fid);
             //echo "$a";exit;
               $cost=$z-1000;
               $a=array("seating"=>$this->input->post("seating"),
                "utype"=>$this->input->post("usertype"),
                "name"=>$this->input->post("name"),
                "phone"=>$this->input->post("phone"),
                "email"=>$this->input->post("email"),
                "bookingid"=>$bid,
                "fli_id"=>$fid,
                "amount"=>$cost,
                "uid"=>$uid
                   );
            $this->mainmodel->bookinsrt($a);
              
            }
               elseif($usertype=="adult")
               {
                   $z=$this->mainmodel->ecost($fid);
             //echo "$a";exit;
                  $cost=$z;
                  
               $a=array("seating"=>$this->input->post("seating"),
                "utype"=>$this->input->post("usertype"),
                "name"=>$this->input->post("name"),
                "phone"=>$this->input->post("phone"),
                "email"=>$this->input->post("email"),
                "bookingid"=>$bid,
                "fli_id"=>$fid,
                "amount"=>$cost,
                "uid"=>$uid
                   );
            $this->mainmodel->bookinsrt($a);
        }
           }
           else
           {
            echo "economic class full" ; exit;
           }
           
        }
         elseif($class=="business")
        {
            $z=$this->mainmodel->bseatcount($fid);
            
            //echo "$a";exit;
            if($z>0)
            {
            $sno=$z-1;
            $b=array("bseat"=>$sno);
            $this->mainmodel->updatefirst($fid,$b);
            if($usertype=="seniour")
            {
             $z=$this->mainmodel->bcost($fid);
             //echo "$a";exit;
            $cost=$z-400;
            $a=array("seating"=>$this->input->post("seating"),
                "utype"=>$this->input->post("usertype"),
                "name"=>$this->input->post("name"),
                "phone"=>$this->input->post("phone"),
                "email"=>$this->input->post("email"),
                "bookingid"=>$bid,
                "fli_id"=>$fid,
                "amount"=>$cost,
                "uid"=>$uid
                   );
            $this->mainmodel->bookinsrt($a);
            
           }
           elseif($usertype=="infant")
           {
               $z=$this->mainmodel->bcost($fid);
             //echo "$a";exit;
               $cost=$z-800;
               $a=array("seating"=>$this->input->post("seating"),
                "utype"=>$this->input->post("usertype"),
                "name"=>$this->input->post("name"),
                "phone"=>$this->input->post("phone"),
                "email"=>$this->input->post("email"),
                "bookingid"=>$bid,
                "fli_id"=>$fid,
                "amount"=>$cost,
                "uid"=>$uid
                   );
            $this->mainmodel->bookinsrt($a);
               
           }
           elseif($usertype=="adult")
               {
                 $z=$this->mainmodel->bcost($fid);
             //echo "$a";exit;
               $cost=$z;
                
               $a=array("seating"=>$this->input->post("seating"),
                "utype"=>$this->input->post("usertype"),
                "name"=>$this->input->post("name"),
                "phone"=>$this->input->post("phone"),
                "email"=>$this->input->post("email"),
                "bookingid"=>$bid,
                "fli_id"=>$fid,
                "amount"=>$cost,
                "uid"=>$uid
                   );
            $this->mainmodel->bookinsrt($a);
        }
         }
         else
         {
            echo "business class full";exit;
         }
        }

        else
        {
            $z=$this->mainmodel->fseatcount($fid);
            //echo "$a";exit;
            if($z>0)
            {
            $sno=$z-1;
            $b=array("fseat"=>$sno);
            $this->mainmodel->updatefirst($fid,$b);
            if($usertype=="seniour")
            {
             $z=$this->mainmodel->fcost($fid);
             //echo "$a";exit;
            $cost=$z-200;
            $a=array("seating"=>$this->input->post("seating"),
                "utype"=>$this->input->post("usertype"),
                "name"=>$this->input->post("name"),
                "phone"=>$this->input->post("phone"),
                "email"=>$this->input->post("email"),
                "bookingid"=>$bid,
                "fli_id"=>$fid,
                "amount"=>$cost,
                "uid"=>$uid
                   );
            $this->mainmodel->bookinsrt($a);
            
           }
           elseif($usertype=="infant")
           {
               $z=$this->mainmodel->fcost($fid);
             //echo "$z";exit;
               $cost=$z-500;
               $a=array("seating"=>$this->input->post("seating"),
                "utype"=>$this->input->post("usertype"),
                "name"=>$this->input->post("name"),
                "phone"=>$this->input->post("phone"),
                "email"=>$this->input->post("email"),
                "bookingid"=>$bid,
                "fli_id"=>$fid,
                "amount"=>$cost,
                "uid"=>$uid
                   );
            $this->mainmodel->bookinsrt($a);
               
           }
            elseif($usertype=="adult")
               {  $z=$this->mainmodel->fcost($fid);
             //echo "$a";exit;
               $cost=$z;
               $a=array("seating"=>$this->input->post("seating"),
                "utype"=>$this->input->post("usertype"),
                "name"=>$this->input->post("name"),
                "phone"=>$this->input->post("phone"),
                "email"=>$this->input->post("email"),
                "bookingid"=>$bid,
                "fli_id"=>$fid,
                "amount"=>$cost,
                "uid"=>$uid
                   );
            $this->mainmodel->bookinsrt($a);
        }

           }
           else
           {
             echo "first class seat full";exit;
           }
        } 
        
        }     

        redirect(base_url().'main/confirmation');
    }
   
   
   else
   {
        redirect(base_url().'main/index1');
   }

}
  public function ebook()
    {
        $this->load->view('ebooking');
    }
    public function ebookref()
    {
        $this->load->view('ebookref');
    }
   
    public function log()
    {
        $this->load->view('login');
    }

 // public function bookupdate()
 //   {      $id=$this->session->id;
 //          $this->load->model('mainmodel');
 //          $data['n']=$this->mainmodel->view();
 //          $this->load->view('bookingticket',$data);
 //   }

public function search()
    {
        $this->load->view('searching');
    }

    public function idsave()
    {
        $id=$this->uri->segment(3);
        $this->load->library('session');
        $newdata=array(
            'flid'=>$id
        );
        $this->session->set_userdata($newdata);
        $a=$_SESSION['flid'];


        redirect(base_url().'main/log');


        // $this->load->view('searching');
    }

     public function confirmation()
    {   
        if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
        $uid=$this->session->id;
        // $flid=$_SESSION['f_id'];
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->confirmation($uid);
        $this->load->view('confirmation',$data);
           
    }
    else
    {
        redirect('main/index','refresh');
    }
}
     public function reguserview()
    {
        if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->reguserview();
        $this->load->view('reguserview',$data);
    }
    else
    {
       
       redirect('main/index','refresh'); 
    }
}
    public function viewbooking()
    {
        if($_SESSION['logged_in']==true && $_SESSION['usertype']=='0')
        {
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->viewbooking();
        $this->load->view('viewbooking',$data);
    }
    else
    {
       redirect('main/index','refresh');    
    }
}
    public function logout()
    {
        $data=new stdClass();
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']===true)
        {
            foreach ($_SESSION as $key => $value) 
            {
               unset($_SESSION[$key]);
            }
            $this->session->set_flashdata('logout_notification','logged_out');
            redirect('main/index','refresh');
        }
        else{
            redirect('/');
        }
    }
 public function singleview()
    {
        if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
        $uid=$this->session->id;
        // echo "$uid";exit;
        // $flid=$_SESSION['f_id'];
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->singleview($uid);
        $this->load->view('singleview',$data);
    }
    else
    {
       redirect('main/index','refresh');    
    }
    }
    public function ticket()
    {
    if($_SESSION['logged_in']==true && $_SESSION['usertype']=='1')
        {
        $uid=$this->session->id;
        // $flid=$_SESSION['f_id'];
        $this->load->model('mainmodel');
        $data['n']=$this->mainmodel->ticket($uid);
        $this->load->view('ticket',$data);
    }
    else
    {
        redirect('main/index','refresh');
    }
}

}

