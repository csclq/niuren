<?php

namespace App\Models;

class YztMerchantRepast extends \Phalcon\Mvc\Model
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
    protected $merchant_id;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $content;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    protected $describe;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $picture;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=true)
     */
    protected $is_new;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=true)
     */
    protected $is_recommend;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=true)
     */
    protected $is_hot;

    /**
     *
     * @var integer
     * @Column(type="integer", length=4, nullable=true)
     */
    protected $floors;

    /**
     *
     * @var integer
     * @Column(type="integer", length=4, nullable=true)
     */
    protected $rooms;

    /**
     *
     * @var integer
     * @Column(type="integer", length=4, nullable=true)
     */
    protected $free_room;

    /**
     *
     * @var integer
     * @Column(type="integer", length=10, nullable=true)
     */
    protected $integral;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $add_at;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $update_at;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=true)
     */
    protected $active;

    /**
     *
     * @var integer
     * @Column(type="integer", length=10, nullable=true)
     */
    protected $number;

    /**
     *
     * @var integer
     * @Column(type="integer", length=10, nullable=true)
     */
    protected $send;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    protected $remark;

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
     * Method to set the value of field content
     *
     * @param string $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Method to set the value of field describe
     *
     * @param string $describe
     * @return $this
     */
    public function setDescribe($describe)
    {
        $this->describe = $describe;

        return $this;
    }

    /**
     * Method to set the value of field picture
     *
     * @param string $picture
     * @return $this
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Method to set the value of field is_new
     *
     * @param integer $is_new
     * @return $this
     */
    public function setIsNew($is_new)
    {
        $this->is_new = $is_new;

        return $this;
    }

    /**
     * Method to set the value of field is_recommend
     *
     * @param integer $is_recommend
     * @return $this
     */
    public function setIsRecommend($is_recommend)
    {
        $this->is_recommend = $is_recommend;

        return $this;
    }

    /**
     * Method to set the value of field is_hot
     *
     * @param integer $is_hot
     * @return $this
     */
    public function setIsHot($is_hot)
    {
        $this->is_hot = $is_hot;

        return $this;
    }

    /**
     * Method to set the value of field floors
     *
     * @param integer $floors
     * @return $this
     */
    public function setFloors($floors)
    {
        $this->floors = $floors;

        return $this;
    }

    /**
     * Method to set the value of field rooms
     *
     * @param integer $rooms
     * @return $this
     */
    public function setRooms($rooms)
    {
        $this->rooms = $rooms;

        return $this;
    }

    /**
     * Method to set the value of field free_room
     *
     * @param integer $free_room
     * @return $this
     */
    public function setFreeRoom($free_room)
    {
        $this->free_room = $free_room;

        return $this;
    }

    /**
     * Method to set the value of field integral
     *
     * @param integer $integral
     * @return $this
     */
    public function setIntegral($integral)
    {
        $this->integral = $integral;

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
     * Method to set the value of field number
     *
     * @param integer $number
     * @return $this
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Method to set the value of field send
     *
     * @param integer $send
     * @return $this
     */
    public function setSend($send)
    {
        $this->send = $send;

        return $this;
    }

    /**
     * Method to set the value of field remark
     *
     * @param string $remark
     * @return $this
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;

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
     * Returns the value of field merchant_id
     *
     * @return integer
     */
    public function getMerchantId()
    {
        return $this->merchant_id;
    }

    /**
     * Returns the value of field content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Returns the value of field describe
     *
     * @return string
     */
    public function getDescribe()
    {
        return $this->describe;
    }

    /**
     * Returns the value of field picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Returns the value of field is_new
     *
     * @return integer
     */
    public function getIsNew()
    {
        return $this->is_new;
    }

    /**
     * Returns the value of field is_recommend
     *
     * @return integer
     */
    public function getIsRecommend()
    {
        return $this->is_recommend;
    }

    /**
     * Returns the value of field is_hot
     *
     * @return integer
     */
    public function getIsHot()
    {
        return $this->is_hot;
    }

    /**
     * Returns the value of field floors
     *
     * @return integer
     */
    public function getFloors()
    {
        return $this->floors;
    }

    /**
     * Returns the value of field rooms
     *
     * @return integer
     */
    public function getRooms()
    {
        return $this->rooms;
    }

    /**
     * Returns the value of field free_room
     *
     * @return integer
     */
    public function getFreeRoom()
    {
        return $this->free_room;
    }

    /**
     * Returns the value of field integral
     *
     * @return integer
     */
    public function getIntegral()
    {
        return $this->integral;
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
     * Returns the value of field update_at
     *
     * @return integer
     */
    public function getUpdateAt()
    {
        return $this->update_at;
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
     * Returns the value of field number
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Returns the value of field send
     *
     * @return integer
     */
    public function getSend()
    {
        return $this->send;
    }

    /**
     * Returns the value of field remark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("gxc");
        $this->hasMany('id', 'App\Models\YztGxcRepast', 'repast_id', ['alias' => 'YztGxcRepast']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'yzt_merchant_repast';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return YztMerchantRepast[]|YztMerchantRepast
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return YztMerchantRepast
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
            'merchant_id' => 'merchant_id',
            'content' => 'content',
            'describe' => 'describe',
            'picture' => 'picture',
            'is_new' => 'is_new',
            'is_recommend' => 'is_recommend',
            'is_hot' => 'is_hot',
            'floors' => 'floors',
            'rooms' => 'rooms',
            'free_room' => 'free_room',
            'integral' => 'integral',
            'add_at' => 'add_at',
            'update_at' => 'update_at',
            'active' => 'active',
            'number' => 'number',
            'send' => 'send',
            'remark' => 'remark'
        ];
    }

}
