<?php

namespace App\Models;

class YztRepastRoom extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=10, nullable=false)
     */
    protected $id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=10, nullable=false)
     */
    protected $user_id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=10, nullable=false)
     */
    protected $repast_id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=4, nullable=true)
     */
    protected $floor;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=true)
     */
    protected $room_no;

    /**
     *
     * @var string
     * @Column(type="string", length=20, nullable=true)
     */
    protected $room_name;

    /**
     *
     * @var integer
     * @Column(type="integer", length=4, nullable=true)
     */
    protected $active;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $update_at;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $add_at;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Method to set the value of field user_id
     *
     * @param integer $user_id
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Method to set the value of field repast_id
     *
     * @param integer $repast_id
     * @return $this
     */
    public function setRepastId($repast_id)
    {
        $this->repast_id = $repast_id;

        return $this;
    }

    /**
     * Method to set the value of field floor
     *
     * @param integer $floor
     * @return $this
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;

        return $this;
    }

    /**
     * Method to set the value of field room_no
     *
     * @param integer $room_no
     * @return $this
     */
    public function setRoomNo($room_no)
    {
        $this->room_no = $room_no;

        return $this;
    }

    /**
     * Method to set the value of field room_name
     *
     * @param string $room_name
     * @return $this
     */
    public function setRoomName($room_name)
    {
        $this->room_name = $room_name;

        return $this;
    }

    /**
     * Method to set the value of field active
     *
     * @param integer $active
     * @return $this
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Method to set the value of field update_at
     *
     * @param integer $update_at
     * @return $this
     */
    public function setUpdateAt($update_at)
    {
        $this->update_at = $update_at;

        return $this;
    }

    /**
     * Method to set the value of field add_at
     *
     * @param integer $add_at
     * @return $this
     */
    public function setAddAt($add_at)
    {
        $this->add_at = $add_at;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field user_id
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Returns the value of field repast_id
     *
     * @return integer
     */
    public function getRepastId()
    {
        return $this->repast_id;
    }

    /**
     * Returns the value of field floor
     *
     * @return integer
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * Returns the value of field room_no
     *
     * @return integer
     */
    public function getRoomNo()
    {
        return $this->room_no;
    }

    /**
     * Returns the value of field room_name
     *
     * @return string
     */
    public function getRoomName()
    {
        return $this->room_name;
    }

    /**
     * Returns the value of field active
     *
     * @return integer
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Returns the value of field update_at
     *
     * @return integer
     */
    public function getUpdateAt()
    {
        return $this->update_at;
    }

    /**
     * Returns the value of field add_at
     *
     * @return integer
     */
    public function getAddAt()
    {
        return $this->add_at;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("gxc");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'yzt_repast_room';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return YztRepastRoom[]|YztRepastRoom
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return YztRepastRoom
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * Independent Column Mapping.
     * Keys are the real names in the table and the values their names in the application
     *
     * @return array
     */
    public function columnMap()
    {
        return [
            'id' => 'id',
            'user_id' => 'user_id',
            'repast_id' => 'repast_id',
            'floor' => 'floor',
            'room_no' => 'room_no',
            'room_name' => 'room_name',
            'active' => 'active',
            'update_at' => 'update_at',
            'add_at' => 'add_at'
        ];
    }

}
