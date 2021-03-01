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
public function bview($fid)
{
$this->db->select('*');
$this->db->where("f_id",$fid);
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
$this->db->like("flyfrom",$from);
$this->db->like("flyto",$to);
$this->db->like("date",$date);
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
public function insrtair($a)
{
    $this->db->insert("airport",$a);
 
}
public function bookinsrt($a)
{

	    $this->db->insert("booking",$a);

}
public function bsingledata($id)
{
$this->db->select('*');
$this->db->where("f_id",$id);
$qry=$this->db->get("flight");
return $qry;
}
public function eseatcount($fid)
{
	$this->db->select('eseat');
	$qry=$this->db->from("flight");
	$qry=$this->db->where("f_id",$fid);
	$qry=$this->db->get()->row('eseat');
    return $qry;
}
public function bseatcount($fid)
{
	$this->db->select('bseat');
	$qry=$this->db->from("flight");
	$qry=$this->db->where("f_id",$fid);
	$qry=$this->db->get()->row('bseat');
    return $qry;
}
public function fseatcount($fid)
{
	$this->db->select('fseat');
	$qry=$this->db->from("flight");
	$qry=$this->db->where("f_id",$fid);
	$qry=$this->db->get()->row('fseat');
    return $qry;
}
public function ecost($fid)
{
	$this->db->select('ecost');
	$qry=$this->db->from("flight");
	$qry=$this->db->where("f_id",$fid);
	$qry=$this->db->get()->row('ecost');
    return $qry;
}
public function bcost($fid)
{
	$this->db->select('bcost');
	$qry=$this->db->from("flight");
	$qry=$this->db->where("f_id",$fid);
	$qry=$this->db->get()->row('bcost');
    return $qry;
}
public function fcost($fid)
{
	$this->db->select('fcost');
	$qry=$this->db->from("flight");
	$qry=$this->db->where("f_id",$fid);
	$qry=$this->db->get()->row('fcost');
    return $qry;
}
public function updatefirst($fid,$b)
{
	
//$this->db->set('eseat','eseat-1',FALSE);
$qry=$this->db->where('f_id',$fid);
$qry=$this->db->update("flight",$b);
return $qry;
}
public function confirmation($uid)
	{
		$this->db->select('*');
		$this->db->join('booking','booking.fli_id=flight.f_id','inner');
		$this->db->where("uid",$uid);
		$qry=$this->db->get("flight");
        return $qry;
	}
	public function admin_notify()
{
$this->db->select('*');
$this->db->join('flight','flight.f_id=notification.flight','inner');
$qry=$this->db->get("notification");
return $qry;

}
public function admin_delete($id)
{
$this->db->where("n_id",$id);
$this->db->delete("notification");

}
public function singldatas($id)
{
$this->db->select('*');
$this->db->where("n_id",$id);
$qry=$this->db->get("notification");
return $qry;

}
public function singlselects()
{
$qry=$this->db->get("notification");
return $qry;
}

public function updatenotification($a,$id)
{
$this->db->select('*');
$qry=$this->db->where("n_id",$id);
$qry=$this->db->update("notification",$a);
return $qry;
}
public function notidelete($date)
{
$this->db->where('cdate<',$date);
$this->db->delete("notification");

}

public function reguserview()
{
	$this->db->select('*');
	$this->db->join('login','login.id=register.loginid','inner');
	$qry=$this->db->get("register");
	return $qry;
}
public function viewbooking()
{
	$this->db->select('*');
	$this->db->join('flight','flight.f_id=booking.fli_id','inner');
	$qry=$this->db->get("booking");
	return $qry;
}

public function singleview($uid)
{
$this->db->select('*');
$this->db->join('flight','flight.f_id=booking.fli_id','inner');
$this->db->where("uid",$uid);
$qry=$this->db->get("booking");
return $qry;
}
public function ticket($uid)
	{
		$this->db->select('*');
		$this->db->join('booking','booking.fli_id=flight.f_id','inner');
		$this->db->where("uid",$uid);
		$qry=$this->db->get("flight");
        return $qry;
	}
}
?>