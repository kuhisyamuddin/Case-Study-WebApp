<?php

class Payment
{
    private $emp_id;
    private $emp_name, $emp_address, $emp_phone, $emp_pos;
    private $work_date;
    private $entry_time; 
    private $end_time;
    private $work_hrs;
    private $gaji_sehari;
    private $array_gaji;
    private $day;
    private $salary;
    private $gross;
    private $net;
   
    public function __construct($emp_id,$work_date)
    {
        $this->emp_id = $emp_id;
        $this->work_date = $work_date;
    }

    public function setID($emp_id)
    {
        $this->emp_id = $emp_id;
    }

    public function getID()
    {
        return $this->emp_id;
    }

    public function setName($emp_nae)
    {
        $this->emp_name = $emp_nae;
    }

    public function setAddr($emp_address)
    {
        $this->emp_address = $emp_address;
    }

    public function setPhone($emp_phone)
    {
        $this->emp_phone = $emp_phone;
    }

    public function setPos($emp_pos)
    {
        $this->emp_pos = $emp_pos;
    }

    public function setWorkDate($work_date)
    {
        $this->work_date = $work_date;
    }


    public function setEntrTime($entry_time)
    {
        $this->entry_time = $entry_time;
    }
    
    public function getName()
    {
        return $this->emp_name;
    }

    public function getAddr()
    {
        return $this->emp_address;
    }

    public function getPos()
    {
        return $this->emp_pos;
    }

    public function getPhone()
    {
        return $this->emp_phone;
    }

    public function getWorkDate()
    {
        return $this->work_date;
    }

    public function getEntrTime()
    {
        return $this->entry_time;
    }

    public function setEndTime($end_time)
    {
        $this->end_time = $end_time;
    }
    
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function getHoursWork()
    {
        $masabaru = strtotime($this->end_time);
        $masalama = strtotime($this->entry_time);
        $this->work_hrs = abs(round(($masabaru-$masalama)/60/60));
        return $this->work_hrs;
    }

    public function getPayPerDay()
    {
        
        $kira = $this->work_hrs;
        $this->gaji_sehari = $kira*6;
        return $this->gaji_sehari;
    }
   

    public function getDay()
    {
        $day = date("d",strtotime($this->work_date));

        if($day[0]==0)
        {
            $day = $day[1];
        }
        
        $this->day = $day;
        return $this->day;
    }
   
    public function netSalary()
    {
        $net = $this->gaji_sehari;
        $net = $net*0.89;
        $this->net=$net;
        return $this->net;
    }

    public function salpermon($value)
    {
        $this->gross = $salary;
        $salary += $value;
        $salary =$this->gross;
        return $this->gross;
    }
}
?>