<?php
class Activity extends CI_Model
{
    public function create($id_activity, $nameActivity, $day, $time, $year, $term, $responsible)
    {
        $data = array(
            'activityID' => $id_activity,
            'activityName' => $nameActivity,
            'day' => $day,
            'time' => $time,
            'year' => $year,
            'term' => $term,
            'responsible' => $responsible,
            'status' => 1,
        
        );
        $this->db->insert('activity', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
}