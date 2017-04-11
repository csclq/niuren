<?php

namespace App\Models;

class Userbases extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id;

    /**
     *
     * @var string
     * @Column(type="string", length=10, nullable=true)
     */
    public $userbasestatus;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $uuid;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $nickname;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $realname;

    /**
     *
     * @var string
     * @Column(type="string", length=10, nullable=true)
     */
    public $gender;

    /**
     *
     * @var string
     * @Column(type="string", length=20, nullable=true)
     */
    public $idcard;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $idcardfront;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    public $idcardback;

    /**
     *
     * @var string
     * @Column(type="string", length=11, nullable=true)
     */
    public $mobilephone;

    /**
     *
     * @var string
     * @Column(type="string", length=20, nullable=true)
     */
    public $usercard;

    /**
     *
     * @var string
     * @Column(type="string", length=20, nullable=true)
     */
    public $suggestorusercard;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $created;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $modified;

    /**
     *
     * @var string
     * @Column(type="string", length=10, nullable=true)
     */
    public $jifen;

    /**
     *
     * @var string
     * @Column(type="string", length=2, nullable=true)
     */
    public $role;

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
        return 'userbases';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Userbases[]|Userbases
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Userbases
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
            'userbasestatus' => 'userbasestatus',
            'uuid' => 'uuid',
            'nickname' => 'nickname',
            'realname' => 'realname',
            'gender' => 'gender',
            'idcard' => 'idcard',
            'idcardfront' => 'idcardfront',
            'idcardback' => 'idcardback',
            'mobilephone' => 'mobilephone',
            'usercard' => 'usercard',
            'suggestorusercard' => 'suggestorusercard',
            'created' => 'created',
            'modified' => 'modified',
            'jifen' => 'jifen',
            'role' => 'role'
        ];
    }

}
