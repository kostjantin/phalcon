<?php


use Phalcon\Mvc\Model\Validator\Email as Email;

class Users extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;
     
    /**
     *
     * @var string
     */
    public $email;
     
    /**
     *
     * @var string
     */
    public $password;
     
    /**
     *
     * @var string
     */
    public $first_name;
     
    /**
     *
     * @var string
     */
    public $last_name;
     
    /**
     *
     * @var string
     */
    public $sex;
     
    /**
     *
     * @var string
     */
    public $comment;
     
    /**
     *
     * @var string
     */
    public $create_date;
     
    /**
     * Validations and business logic
     */
    public function validation()
    {

        $this->validate(
            new Email(
                array(
                    "field"    => "email",
                    "required" => true,
                )
            )
        );
        if ($this->validationHasFailed() == true) {
            return false;
        }
    }

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'email' => 'email', 
            'password' => 'password', 
            'first_name' => 'first_name', 
            'last_name' => 'last_name', 
            'sex' => 'sex', 
            'comment' => 'comment', 
            'create_date' => 'create_date'
        );
    }

}
