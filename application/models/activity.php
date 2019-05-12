<?php
class Activity extends CI_Model
{
    public function create($nameActivity, $details, $start_date, $final_date, $start_time, $final_time, $year, $term, $responsible)
    {
        $data = array(
            'activityID' => null,
            'activityName' => $nameActivity,
            'details' => $details,
            'startDate' => $start_date,
            'finalDate' => $final_date,
            'startTime' => $start_time,
            'finalTime' => $final_time,
            'year' => $year,
            'term' => $term,
            'responsible' => $responsible,
            'status' => 1,
        
        );
        $this->db->insert('activity', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function update($nameActivity, $details, $start_date, $final_date, $start_time, $final_time, $year, $term, $responsible)
    {
        $data = array(
            'activityID' => null,
            'activityName' => $nameActivity,
            'details' => $details,
            'startDate' => $start_date,
            'finalDate' => $final_date,
            'startTime' => $start_time,
            'finalTime' => $final_time,
            'year' => $year,
            'term' => $term,
            'responsible' => $responsible,
            'status' => 1,
        
        );
        $this->db->update('activity', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function cancel($status)
    {
        $data = array(
            'status' => 0,
        
        );
        $this->db->cancel('activity', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    
}