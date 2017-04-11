<?php

namespace App\Models;

class YztRepastReserve extends \Phalcon\Mvc\Model
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
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $merchant_id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=10, nullable=false)
     */
    protected $room_id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=3, nullable=true)
     */
    protected $deserve_at;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $deserve_time;

    /**
     *
     * @var string
     * @Column(type="string", length=32, nullable=true)
     */
    protected $pay_sn;

    /**
     *
     * @var integer
     * @Column(type="integer", length=6, nullable=true)
     */
    protected $deserve_money;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $add_at;

    /**
     *
     * @var integer
     * @Column(type="integer", length=2, nullable=true)
     */
    protected $active;

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
     * Method to set the value of field merchant_id
     *
     * @param integer $merchant_id
     * @return $this
     */
    public function setMerchantId($merchant_id)
    {
        $this->merchant_id = $merchant_id;

        return $this;
    }

    /**
     * Method to set the value of field room_id
     *
     * @param integer $room_id
     * @return $this
     */
    public function setRoomId($room_id)
    {
        $this->room_id = $room_id;

        return $this;
    }

    /**
     * Method to set the value of field deserve_at
     *
     * @param integer $deserve_at
     * @return $this
     */
    public function setDeserveAt($deserve_at)
    {
        $this->deserve_at = $deserve_at;

        return $this;
    }

    /**
     * Method to set the value of field deserve_time
     *
     * @param integer $deserve_time
     * @return $this
     */
    public function setDeserveTime($deserve_time)
    {
        $this->deserve_time = $deserve_time;

        return $this;
    }

    /**
     * Method to set the value of field pay_sn
     *
     * @param string $pay_sn
     * @return $this
     */
    public function setPaySn($pay_sn)
    {
        $this->pay_sn = $pay_sn;

        return $this;
    }

    /**
     * Method to set the value of field deserve_money
     *
     * @param integer $deserve_money
     * @return $this
     */
    public function setDeserveMoney($deserve_money)
    {
        $this->deserve_money = $deserve_money;

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
     * Returns the value of field merchant_id
     *
     * @return integer
     */
    public function getMerchantId()
    {
        return $this->merchant_id;
    }

    /**
     * Returns the value of field room_id
     *
     * @return integer
     */
    public function getRoomId()
    {
        return $this->room_id;
    }

    /**
     * Returns the value of field deserve_at
     *
     * @return integer
     */
    public function getDeserveAt()
    {
        return $this->deserve_at;
    }

    /**
     * Returns the value of field deserve_time
     *
     * @return integer
     */
    public function getDeserveTime()
    {
        return $this->deserve_time;
    }

    /**
     * Returns the value of field pay_sn
     *
     * @return string
     */
    public function getPaySn()
    {
        return $this->pay_sn;
    }

    /**
     * Returns the value of field deserve_money
     *
     * @return integer
     */
    public function getDeserveMoney()
    {
        return $this->deserve_money;
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
     * Returns the value of field active
     *
     * @return integer
     */
    public function getActive()
    {
        return $this->active;
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
        return 'yzt_repast_reserve';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return YztRepastReserve[]|YztRepastReserve
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return YztRepastReserve
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
            'merchant_id' => 'merchant_id',
            'room_id' => 'room_id',
            'deserve_at' => 'deserve_at',
            'deserve_time' => 'deserve_time',
            'pay_sn' => 'pay_sn',
            'deserve_money' => 'deserve_money',
            'add_at' => 'add_at',
            'active' => 'active'
        ];
    }

}
