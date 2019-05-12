<?php
class Activity extends CI_Model
{
    public function create($nameActivity, $details, $school_year, $start_date, $final_date, $start_time, $final_time, $year, $term)
    {
        $data = array(
            'id_activity' => null,
            'nameActivity' => $nameActivity,
            'details' => $details,
            'school_year' => $school_year,
            'start_date' => $start_date,
            'final_date' => $final_date,
            'start_time' => $start_time,
            'final_time' => $final_time,
            'year' => $year,
            'term' => $term,
            'status' => 1,
        
        );
        $this->db->insert('activity', $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function update($nameActivity, $details, $school_year, $start_date, $final_date, $start_time, $final_time, $year, $term)
    {
        $data = array(
            'id_activity' => null,
            'nameActivity' => $nameActivity,
            'details' => $details,
            'school_year' => $school_year,
            'start_date' => $start_date,
            'final_date' => $final_date,
            'start_time' => $start_time,
            'final_time' => $final_time,
            'year' => $year,
            'term' => $term,
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