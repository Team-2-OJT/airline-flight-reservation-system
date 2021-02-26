<?php
class mainmodel extends CI_model
{
public function encpaswdz($pass)
{
	return password_hash($pass, PASSWORD_BCRYPT);
}	
public function inreg($b,$c)
{
	    $this->db->insert("login",$c);
		$loginid=$this->db->insert_id();
		$b['loginid']=$loginid;
	    $this->db->insert("register",$b);
}
public function verifypass($pass,$qry)
	   {
         return  password_verify($pass,$qry);
          
        }
  public function getuserid($email)
	{
		$this->db->select('id');
		$this->db->from("login");
		$this->db->where("email",$email);
		return $this->db->get()->row('id');
	}
        public function selectpass($email,$pass)
	{
		$this->db->select('password');
		$this->db->from("login");
		$this->db->where("email",$email);
		$qry=$this->db->get()->row('password');
		//echo"$qry";exit;
		return $this->verifypass($pass,$qry);
	}
	
	public function getuser($id)
	{
		$this->db->select('*');
		$this->db->from("login");
		$this->db->where("id",$id);
		return $this->db->get()->row();
	}
   public function flyinsrt($a)
{
    $this->db->insert("flight",$a);

}

public function view()
{
$this->db->select('*');
$qry=$this->db->get("flight");
return $qry;
}
public function singledata($id)
{
$this->db->select('*');
$this->db->where("f_id",$id);
$qry=$this->db->get("flight");
return $qry;
}
public function singleselect()
{
$qry=$this->db->get("flight");
return $qry;
}
public function updatedetails($a,$id)
{
$this->db->select('*');
$qry=$this->db->where("f_id",$id);
$qry=$this->db->update("flight",$a);
return $qry;
}
public function deletedetails($id)
{
$this->db->where('f_id',$id);
$this->db->delete("flight");
}
public function viewsearch()
{
	$this->db->select('*');
	$qry=$this->db->get("flight");
    return $qry;
}
public function viewflight($from,$to,$date)
{
$this->db->select('*');
$this->db->where("flyfrom",$from);
$this->db->where("flyto",$to);
$this->db->where("date",$date);
$qry=$this->db->get("flight");
return $qry;
}
public function deletedate($d)
{
$this->db->where('date<',$d);
$this->db->delete("flight");
}
public function flightname()
{
$this->db->select('*');
$qry=$this->db->get("flight");
return $qry;

}
public function notifymodel($n)
{
$this->db->insert("notification",$n);

}
}
?>