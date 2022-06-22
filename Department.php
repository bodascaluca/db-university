<?php 
class Department {
    public $id;
    public $name;
    public $adress;
    public $phone;
    public $email;
    public $website;
    public $head_of_department;

    public function __construct($_id, $_name){
        $this->id = $_id;
        $this->name = $_name;
    }

    public function setContactData($_address, $_phone, $_email, $_website){
        $this->address =$_address;
        $this->address =$_phone;
        $this->address =$_email;
        $this->address =$_website;
    }

    public function getContactAsArray(){
        return [
            "indirirzzo" => $this->address,
            "teledono" => $this->phone,
            "email" => $this->email,
            "website" => $this->website
        ];
    }





}
?>