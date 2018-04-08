<?php
class ScheduleModel extends CI_Model {
 
  function getDaysFirst(){
  $this->db->select('days.daysname, schedule.daysid'); 
  $this->db->from('schedule');
  $this->db->join('days', 'schedule.daysid = days.daysid');
  $this->db->where('schedule.daysid =', 1);
  $this->db->limit(1);
  $query = $this->db->get();
  return $query->result();
 }

 function getDaysSecond(){
  $this->db->select('days.daysname, schedule.daysid'); 
  $this->db->from('schedule');
  $this->db->join('days', 'schedule.daysid = days.daysid');
  $this->db->where('schedule.daysid =', 2);
  $this->db->limit(1);
  $query = $this->db->get();
  return $query->result();
 }

function getTimeFirst(){
  $this->db->select('time.time, class.classname'); 
  $this->db->from('schedule');
  $this->db->join('time', 'schedule.timeid = time.timeid');
   $this->db->join('class', 'schedule.classid = class.classid ');
  $this->db->where('schedule.daysid =', 1);
  $this->db->order_by("time.timeid", "asc");
   $query = $this->db->get();
  return $query->result();
 }

 function getTimeSecond(){
  $this->db->select('time.time, class.classname'); 
  $this->db->from('schedule');
  $this->db->join('time', 'schedule.timeid = time.timeid');
   $this->db->join('class', 'schedule.classid = class.classid ');
  $this->db->where('schedule.daysid =', 2);
  $this->db->order_by("time.timeid", "asc");
   $query = $this->db->get();
  return $query->result();
 }

 
}
?>