<?php
require "../Models/UserModel.php";
class Controller {

    /**
     * $usermodel
     */
    public $usermodel;

    public $firstname;
    public $lastname;
    public $email;
    public $password;
    public $confirm_password;

    public function __construct($firstname, $lastname, $email, $password, $confirm_password) {
        $this->firstname = $this->sanitaze(ucwords($firstname));
        $this->lastname = $this->sanitaze(strtoupper($lastname));
        $this->email = $email;
        $this->password = $password;
        $this->confirm_password = $confirm_password;
        $this->usermodel = new UserModel();
    }
    
    /**
     * sanitaze()
     */
    public function sanitaze($data) {
        $reg = preg_replace("/\s+/", " ", $data);

        $reg = preg_replace("/^\s*/", "", $reg);
        $data = $reg;
        return $data;
    }

    /**
     * verifyControl()
     */
    public function verifyControl() {
      $res = $this->usermodel->verify($this->email);
      $count = count($res);
       if($count>0) {
        header("Location:../../public/sign_up.php?msg=user_existant&firstname=$this->firstname&lastname=$this->lastname");
        exit();
        } 
        else {
            $this->emptyInputs();
            $this->verifyPassword();
            $this->verifyEmail();
               $insert = $this->usermodel->insertUser($this->lastname, $this->firstname, $this->email, $this->password);
               header("Location:../../public/login.php");
               exit();
        }
    }

    public function emptyInputs() {

        if(empty($this->firstname) || empty($this->lastname) || empty($this->email) || empty($this->password) || empty($this->confirm_password)){
            header("Location:../../public/sign_up.php?msg=emptyinput&firstname=$this->firstname&lastname=$this->lastname&email=$this->email");
            exit();
        } 
            else{
            return false;
        }

    }

    /**
     * verifyPassword()
     */
    public function verifyPassword() {

        if ($this->password !== $this->confirm_password) {
            header("Location:../../public/sign_up.php?msg=passwordNotMatch&firstname=$this->firstname&lastname=$this->lastname&username=$this->username&email=$this->email");
            exit();
       } 
       return false;

    }

    /**
     * verifyEmail()
     */
    public function verifyEmail() {

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            header("Location:../../public/sign_up.php?msg=users_not_good&firstname=$this->firstname&lastname=$this->lastname");
            exit();
        }
        return false;
        
    }

}