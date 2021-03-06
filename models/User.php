<?php

class User {
    private $id;
    private $name;
    private $surname;
    private $email;
    private $password;
    private $role;

    public function __construct($id, $username, $surname,  $email, $password, $role){
        $this->id = $id;
        $this->name = $username;
        $this->surname = $surname;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }

    public function getId() {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name) : void {
        $this->name = $name;
    }


    public function getSurname(): string {
        return $this->surname;
    }

    public function setSurname(string $surname) : void {
        $this->surname = $surname;
    }


    public function getRole() : string {
        return $this->role;
    }

    public function setRole($role) : void {
        $this->role = $role;
    }

    public function getPassword() : string {
        return $this->password;
    }

    public function setPassword($password) : void {
        $this->password = $password;
    }

    public function getEmail() : string {
        return $this->email;
    }

    public function setEmail($email) : void {
        $this->email = $email;
    }
}

?>
