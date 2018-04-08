<?php
class RegisterModel extends CI_Model {


   public function form_insert($data)
    {      
     
        $clientdata =array('name'=> $data['name'],
                            'address' => $data['address'],
                            'phone'=> $data['phone'],
                            'email' => $data['email'],
                            'password' => $data['password']);


        $this->db->select("classid");     
        $this->db->from('class');
        $this->db->where('classname',$data['class']);
        $classrow = $this->db->get()->result();
        $classid = $classrow[0]->classid;
        

         $this->db->select("daysid");     
        $this->db->from('days');
        $this->db->where('daysname',$data['daysname']);
        $daysrow = $this->db->get()->result();
        $daysid = $daysrow[0]->daysid;
        

        $this->db->select("timeid");     
        $this->db->from('time');
        $this->db->where('time',$data['time']);
        $timerow = $this->db->get()->result();
        $timeid = $timerow[0]->timeid;

         $this->db->select("*");     
        $this->db->from('schedule');
        $this->db->order_by("timeid", "asc");
        $query = $this->db->get();
      

       
        foreach($query->result() as $row)
                {
                  $flag=0;
                 
                 
                    if(($row->daysid == $daysid) && ($row->classid == $classid) && ($row->timeid == $timeid))
                    {
                          $flag=1;
                          $this->db->insert('client', $clientdata);
                          $insert_id = $this->db->insert_id();

                          $schdata =array('clientid' => $insert_id,
                                    'timeid' => $timeid,
                                    'classid' => $classid,
                                    'daysid' => $daysid);
                          $this->db->insert('client-schedule', $schdata);
                          $successmsg = "Successfully Registered!"; 
                          $data['message'] = 'Registered Successfully....';
                          echo "<script type='text/javascript'>alert(' ".$successmsg."');</script>";
                          break; 
                    } 
                   }    
                        if($flag==0)
                    {

                        $this->db->select('*');     
                        $this->db->from('schedule');
                        $this->db->join('time','schedule.timeid = time.timeid');
                        $this->db->join('days','schedule.daysid = days.daysid');
                        $this->db->where('schedule.classid',$classid);
                        $sqltimedays = $this->db->get()->result();
                        $rowcount = count($sqltimedays);

                        $alertMsgstring = "Available schedule for"." ".$data['class']." is:\\n";
                        foreach($sqltimedays as $row)
                        {
                            $daysname = (string)($row->daysname);
                            $time = (string)($row->time);

                            $alertMsgstring = $alertMsgstring.$daysname." ".$time."\\n";
                        }
                        echo "<script type='text/javascript'> alert('$alertMsgstring'); </script>";
                        
                    }
                 
    }
}
?>