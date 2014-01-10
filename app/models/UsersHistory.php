<?php




class UsersHistory extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;
     
    /**
     *
     * @var integer
     */
    public $id_users;
     
    /**
     *
     * @var integer
     */
    public $id_action;
     
    /**
     *
     * @var string
     */
    public $date;
     
    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'id_users' => 'id_users', 
            'id_action' => 'id_action', 
            'date' => 'date'
        );
    }

}
