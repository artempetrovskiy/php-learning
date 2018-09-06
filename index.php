<?php

require_once __DIR__ . "\bootstrap\autoload.php";

class User
{
    protected $firstName;
    protected $lastName;
    protected $age;

    public static $TYPE = [
        'admin' => 'Administrator',
        'custu' => 'dfgdfgdfg',
    ];

    public function __construct($firstName, $lastName, $age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    protected function getAge()
    {
        return $this->age;
    }

    protected function getFirstName()
    {
        return $this->firstName;
    }

    protected function getLastName()
    {
        return $this->lastName;
    }

    public function getUserInfo(){
        return $this->firstName . ' ' . $this->lastName . ', ' . $this->age;
    }

    public static function userTypes()
    {
        return self::$TYPE;
    }

}

$userTalanov = new User("Oleg", "Talanov", 35);

var_dump($userTalanov->getUserInfo());

$userPetrovskiy = new User("Artem", "Petrovskiy", 35);

var_dump($userPetrovskiy->getUserInfo());


var_dump(User::$TYPE);


class Administrator extends User
{
    //
}

$admin = new Administrator("Oleg", "Dolgov", 30);

var_dump($admin->getUserInfo());

