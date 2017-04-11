<?php

namespace App\Models;

class YztGxcRepast extends \Phalcon\Mvc\Model
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
     * @Column(type="integer", length=10, nullable=true)
     */
    protected $repast_id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=10, nullable=true)
     */
    protected $user_id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=6, nullable=false)
     */
    protected $cate_id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=6, nullable=false)
     */
    protected $cate_secid;

    /**
     *
     * @var string
     * @Column(type="string", length=60, nullable=false)
     */
    protected $name;

    /**
     *
     * @var double
     * @Column(type="double", length=8, nullable=true)
     */
    protected $price;

    /**
     *
     * @var double
     * @Column(type="double", length=8, nullable=true)
     */
    protected $memb_price;

    /**
     *
     * @var double
     * @Column(type="double", length=8, nullable=true)
     */
    protected $shop_price;

    /**
     *
     * @var double
     * @Column(type="double", length=8, nullable=true)
     */
    protected $privilege_price;

    /**
     *
     * @var integer
     * @Column(type="integer", length=3, nullable=true)
     */
    protected $discount;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    protected $keyword;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    protected $img;

    /**
     *
     * @var integer
     * @Column(type="integer", length=4, nullable=true)
     */
    protected $sort;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=true)
     */
    protected $is_hot;

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
    protected $is_new;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    protected $label;

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
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    protected $describe;

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
     * Method to set the value of field cate_id
     *
     * @param integer $cate_id
     * @return $this
     */
    public function setCateId($cate_id)
    {
        $this->cate_id = $cate_id;

        return $this;
    }

    /**
     * Method to set the value of field cate_secid
     *
     * @param integer $cate_secid
     * @return $this
     */
    public function setCateSecid($cate_secid)
    {
        $this->cate_secid = $cate_secid;

        return $this;
    }

    /**
     * Method to set the value of field name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Method to set the value of field price
     *
     * @param double $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Method to set the value of field memb_price
     *
     * @param double $memb_price
     * @return $this
     */
    public function setMembPrice($memb_price)
    {
        $this->memb_price = $memb_price;

        return $this;
    }

    /**
     * Method to set the value of field shop_price
     *
     * @param double $shop_price
     * @return $this
     */
    public function setShopPrice($shop_price)
    {
        $this->shop_price = $shop_price;

        return $this;
    }

    /**
     * Method to set the value of field privilege_price
     *
     * @param double $privilege_price
     * @return $this
     */
    public function setPrivilegePrice($privilege_price)
    {
        $this->privilege_price = $privilege_price;

        return $this;
    }

    /**
     * Method to set the value of field discount
     *
     * @param integer $discount
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Method to set the value of field keyword
     *
     * @param string $keyword
     * @return $this
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;

        return $this;
    }

    /**
     * Method to set the value of field img
     *
     * @param string $img
     * @return $this
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Method to set the value of field sort
     *
     * @param integer $sort
     * @return $this
     */
    public function setSort($sort)
    {
        $this->sort = $sort;

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
     * Method to set the value of field label
     *
     * @param string $label
     * @return $this
     */
    public function setLabel($label)
    {
        $this->label = $label;

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
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
     * Returns the value of field user_id
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Returns the value of field cate_id
     *
     * @return integer
     */
    public function getCateId()
    {
        return $this->cate_id;
    }

    /**
     * Returns the value of field cate_secid
     *
     * @return integer
     */
    public function getCateSecid()
    {
        return $this->cate_secid;
    }

    /**
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the value of field price
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Returns the value of field memb_price
     *
     * @return double
     */
    public function getMembPrice()
    {
        return $this->memb_price;
    }

    /**
     * Returns the value of field shop_price
     *
     * @return double
     */
    public function getShopPrice()
    {
        return $this->shop_price;
    }

    /**
     * Returns the value of field privilege_price
     *
     * @return double
     */
    public function getPrivilegePrice()
    {
        return $this->privilege_price;
    }

    /**
     * Returns the value of field discount
     *
     * @return integer
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Returns the value of field keyword
     *
     * @return string
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * Returns the value of field img
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Returns the value of field sort
     *
     * @return integer
     */
    public function getSort()
    {
        return $this->sort;
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
     * Returns the value of field is_recommend
     *
     * @return integer
     */
    public function getIsRecommend()
    {
        return $this->is_recommend;
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
     * Returns the value of field label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
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
     * Returns the value of field describe
     *
     * @return string
     */
    public function getDescribe()
    {
        return $this->describe;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("gxc");
        $this->belongsTo('repast_id', 'App\Models\\YztMerchantRepast', 'id', ['alias' => 'YztMerchantRepast']);
        $this->belongsTo('user_id', 'App\Models\\YztGxcUser', 'id', ['alias' => 'YztGxcUser']);
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'yzt_gxc_repast';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return YztGxcRepast[]|YztGxcRepast
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return YztGxcRepast
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
            'repast_id' => 'repast_id',
            'user_id' => 'user_id',
            'cate_id' => 'cate_id',
            'cate_secid' => 'cate_secid',
            'name' => 'name',
            'price' => 'price',
            'memb_price' => 'memb_price',
            'shop_price' => 'shop_price',
            'privilege_price' => 'privilege_price',
            'discount' => 'discount',
            'keyword' => 'keyword',
            'img' => 'img',
            'sort' => 'sort',
            'is_hot' => 'is_hot',
            'is_recommend' => 'is_recommend',
            'is_new' => 'is_new',
            'label' => 'label',
            'add_at' => 'add_at',
            'update_at' => 'update_at',
            'active' => 'active',
            'describe' => 'describe'
        ];
    }

}
