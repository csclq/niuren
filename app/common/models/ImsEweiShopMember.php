<?php

namespace App\Models;

class ImsEweiShopMember extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $uniacid;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $uid;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $groupid;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $level;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $agentid;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    protected $openid;

    /**
     *
     * @var string
     * @Column(type="string", length=20, nullable=true)
     */
    protected $realname;

    /**
     *
     * @var string
     * @Column(type="string", length=11, nullable=true)
     */
    protected $mobile;

    /**
     *
     * @var string
     * @Column(type="string", length=32, nullable=true)
     */
    protected $pwd;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    protected $weixin;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $content;

    /**
     *
     * @var integer
     * @Column(type="integer", length=10, nullable=true)
     */
    protected $createtime;

    /**
     *
     * @var integer
     * @Column(type="integer", length=10, nullable=true)
     */
    protected $agenttime;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=true)
     */
    protected $status;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=true)
     */
    protected $isagent;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $clickcount;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $agentlevel;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $noticeset;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    protected $nickname;

    /**
     *
     * @var double
     * @Column(type="double", length=10, nullable=true)
     */
    protected $credit1;

    /**
     *
     * @var double
     * @Column(type="double", length=10, nullable=true)
     */
    protected $credit2;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    protected $birthyear;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    protected $birthmonth;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    protected $birthday;

    /**
     *
     * @var integer
     * @Column(type="integer", length=3, nullable=true)
     */
    protected $gender;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    protected $avatar;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    protected $province;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    protected $city;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    protected $area;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $childtime;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $agentnotupgrade;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $inviter;

    /**
     *
     * @var integer
     * @Column(type="integer", length=3, nullable=true)
     */
    protected $agentselectgoods;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $agentblack;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=true)
     */
    protected $username;

    /**
     *
     * @var integer
     * @Column(type="integer", length=3, nullable=true)
     */
    protected $fixagentid;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $diymemberid;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $diymemberdataid;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $diymemberdata;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $diycommissionid;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $diycommissiondataid;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $diycommissiondata;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $isblack;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $diymemberfields;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $diycommissionfields;

    /**
     *
     * @var double
     * @Column(type="double", length=10, nullable=true)
     */
    protected $commission_total;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $endtime2;

    /**
     *
     * @var integer
     * @Column(type="integer", length=3, nullable=true)
     */
    protected $ispartner;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $partnertime;

    /**
     *
     * @var integer
     * @Column(type="integer", length=3, nullable=true)
     */
    protected $partnerstatus;

    /**
     *
     * @var integer
     * @Column(type="integer", length=3, nullable=true)
     */
    protected $partnerblack;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $partnerlevel;

    /**
     *
     * @var integer
     * @Column(type="integer", length=3, nullable=true)
     */
    protected $partnernotupgrade;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $diyglobonusid;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $diyglobonusdata;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $diyglobonusfields;

    /**
     *
     * @var integer
     * @Column(type="integer", length=3, nullable=true)
     */
    protected $isaagent;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $aagentlevel;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $aagenttime;

    /**
     *
     * @var integer
     * @Column(type="integer", length=3, nullable=true)
     */
    protected $aagentstatus;

    /**
     *
     * @var integer
     * @Column(type="integer", length=3, nullable=true)
     */
    protected $aagentblack;

    /**
     *
     * @var integer
     * @Column(type="integer", length=3, nullable=true)
     */
    protected $aagentnotupgrade;

    /**
     *
     * @var integer
     * @Column(type="integer", length=3, nullable=true)
     */
    protected $aagenttype;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $aagentprovinces;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $aagentcitys;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $aagentareas;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $diyaagentid;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $diyaagentdata;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $diyaagentfields;

    /**
     *
     * @var string
     * @Column(type="string", length=32, nullable=true)
     */
    protected $salt;

    /**
     *
     * @var integer
     * @Column(type="integer", length=3, nullable=true)
     */
    protected $mobileverify;

    /**
     *
     * @var integer
     * @Column(type="integer", length=3, nullable=true)
     */
    protected $mobileuser;

    /**
     *
     * @var string
     * @Column(type="string", length=11, nullable=true)
     */
    protected $carrier_mobile;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=true)
     */
    protected $isauthor;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $authortime;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=true)
     */
    protected $authorstatus;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=true)
     */
    protected $authorblack;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $authorlevel;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=true)
     */
    protected $authornotupgrade;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $diyauthorid;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $diyauthordata;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    protected $diyauthorfields;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $authorid;

    /**
     *
     * @var string
     * @Column(type="string", length=20, nullable=true)
     */
    protected $comefrom;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    protected $openid_qq;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    protected $openid_wx;

    /**
     *
     * @var integer
     * @Column(type="integer", length=3, nullable=true)
     */
    protected $diymaxcredit;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    protected $maxcredit;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $diycrowdid;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $diycrowdfields;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $diycrowddata;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=false)
     */
    protected $iscrowd;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=false)
     */
    protected $crowdstatus;

    /**
     *
     * @var integer
     * @Column(type="integer", length=10, nullable=false)
     */
    protected $crowdtime;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=false)
     */
    protected $crowdblack;

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
     * Method to set the value of field uniacid
     *
     * @param integer $uniacid
     * @return $this
     */
    public function setUniacid($uniacid)
    {
        $this->uniacid = $uniacid;

        return $this;
    }

    /**
     * Method to set the value of field uid
     *
     * @param integer $uid
     * @return $this
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Method to set the value of field groupid
     *
     * @param integer $groupid
     * @return $this
     */
    public function setGroupid($groupid)
    {
        $this->groupid = $groupid;

        return $this;
    }

    /**
     * Method to set the value of field level
     *
     * @param integer $level
     * @return $this
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Method to set the value of field agentid
     *
     * @param integer $agentid
     * @return $this
     */
    public function setAgentid($agentid)
    {
        $this->agentid = $agentid;

        return $this;
    }

    /**
     * Method to set the value of field openid
     *
     * @param string $openid
     * @return $this
     */
    public function setOpenid($openid)
    {
        $this->openid = $openid;

        return $this;
    }

    /**
     * Method to set the value of field realname
     *
     * @param string $realname
     * @return $this
     */
    public function setRealname($realname)
    {
        $this->realname = $realname;

        return $this;
    }

    /**
     * Method to set the value of field mobile
     *
     * @param string $mobile
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Method to set the value of field pwd
     *
     * @param string $pwd
     * @return $this
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;

        return $this;
    }

    /**
     * Method to set the value of field weixin
     *
     * @param string $weixin
     * @return $this
     */
    public function setWeixin($weixin)
    {
        $this->weixin = $weixin;

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
     * Method to set the value of field createtime
     *
     * @param integer $createtime
     * @return $this
     */
    public function setCreatetime($createtime)
    {
        $this->createtime = $createtime;

        return $this;
    }

    /**
     * Method to set the value of field agenttime
     *
     * @param integer $agenttime
     * @return $this
     */
    public function setAgenttime($agenttime)
    {
        $this->agenttime = $agenttime;

        return $this;
    }

    /**
     * Method to set the value of field status
     *
     * @param integer $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Method to set the value of field isagent
     *
     * @param integer $isagent
     * @return $this
     */
    public function setIsagent($isagent)
    {
        $this->isagent = $isagent;

        return $this;
    }

    /**
     * Method to set the value of field clickcount
     *
     * @param integer $clickcount
     * @return $this
     */
    public function setClickcount($clickcount)
    {
        $this->clickcount = $clickcount;

        return $this;
    }

    /**
     * Method to set the value of field agentlevel
     *
     * @param integer $agentlevel
     * @return $this
     */
    public function setAgentlevel($agentlevel)
    {
        $this->agentlevel = $agentlevel;

        return $this;
    }

    /**
     * Method to set the value of field noticeset
     *
     * @param string $noticeset
     * @return $this
     */
    public function setNoticeset($noticeset)
    {
        $this->noticeset = $noticeset;

        return $this;
    }

    /**
     * Method to set the value of field nickname
     *
     * @param string $nickname
     * @return $this
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Method to set the value of field credit1
     *
     * @param double $credit1
     * @return $this
     */
    public function setCredit1($credit1)
    {
        $this->credit1 = $credit1;

        return $this;
    }

    /**
     * Method to set the value of field credit2
     *
     * @param double $credit2
     * @return $this
     */
    public function setCredit2($credit2)
    {
        $this->credit2 = $credit2;

        return $this;
    }

    /**
     * Method to set the value of field birthyear
     *
     * @param string $birthyear
     * @return $this
     */
    public function setBirthyear($birthyear)
    {
        $this->birthyear = $birthyear;

        return $this;
    }

    /**
     * Method to set the value of field birthmonth
     *
     * @param string $birthmonth
     * @return $this
     */
    public function setBirthmonth($birthmonth)
    {
        $this->birthmonth = $birthmonth;

        return $this;
    }

    /**
     * Method to set the value of field birthday
     *
     * @param string $birthday
     * @return $this
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Method to set the value of field gender
     *
     * @param integer $gender
     * @return $this
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Method to set the value of field avatar
     *
     * @param string $avatar
     * @return $this
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Method to set the value of field province
     *
     * @param string $province
     * @return $this
     */
    public function setProvince($province)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Method to set the value of field city
     *
     * @param string $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Method to set the value of field area
     *
     * @param string $area
     * @return $this
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Method to set the value of field childtime
     *
     * @param integer $childtime
     * @return $this
     */
    public function setChildtime($childtime)
    {
        $this->childtime = $childtime;

        return $this;
    }

    /**
     * Method to set the value of field agentnotupgrade
     *
     * @param integer $agentnotupgrade
     * @return $this
     */
    public function setAgentnotupgrade($agentnotupgrade)
    {
        $this->agentnotupgrade = $agentnotupgrade;

        return $this;
    }

    /**
     * Method to set the value of field inviter
     *
     * @param integer $inviter
     * @return $this
     */
    public function setInviter($inviter)
    {
        $this->inviter = $inviter;

        return $this;
    }

    /**
     * Method to set the value of field agentselectgoods
     *
     * @param integer $agentselectgoods
     * @return $this
     */
    public function setAgentselectgoods($agentselectgoods)
    {
        $this->agentselectgoods = $agentselectgoods;

        return $this;
    }

    /**
     * Method to set the value of field agentblack
     *
     * @param integer $agentblack
     * @return $this
     */
    public function setAgentblack($agentblack)
    {
        $this->agentblack = $agentblack;

        return $this;
    }

    /**
     * Method to set the value of field username
     *
     * @param string $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Method to set the value of field fixagentid
     *
     * @param integer $fixagentid
     * @return $this
     */
    public function setFixagentid($fixagentid)
    {
        $this->fixagentid = $fixagentid;

        return $this;
    }

    /**
     * Method to set the value of field diymemberid
     *
     * @param integer $diymemberid
     * @return $this
     */
    public function setDiymemberid($diymemberid)
    {
        $this->diymemberid = $diymemberid;

        return $this;
    }

    /**
     * Method to set the value of field diymemberdataid
     *
     * @param integer $diymemberdataid
     * @return $this
     */
    public function setDiymemberdataid($diymemberdataid)
    {
        $this->diymemberdataid = $diymemberdataid;

        return $this;
    }

    /**
     * Method to set the value of field diymemberdata
     *
     * @param string $diymemberdata
     * @return $this
     */
    public function setDiymemberdata($diymemberdata)
    {
        $this->diymemberdata = $diymemberdata;

        return $this;
    }

    /**
     * Method to set the value of field diycommissionid
     *
     * @param integer $diycommissionid
     * @return $this
     */
    public function setDiycommissionid($diycommissionid)
    {
        $this->diycommissionid = $diycommissionid;

        return $this;
    }

    /**
     * Method to set the value of field diycommissiondataid
     *
     * @param integer $diycommissiondataid
     * @return $this
     */
    public function setDiycommissiondataid($diycommissiondataid)
    {
        $this->diycommissiondataid = $diycommissiondataid;

        return $this;
    }

    /**
     * Method to set the value of field diycommissiondata
     *
     * @param string $diycommissiondata
     * @return $this
     */
    public function setDiycommissiondata($diycommissiondata)
    {
        $this->diycommissiondata = $diycommissiondata;

        return $this;
    }

    /**
     * Method to set the value of field isblack
     *
     * @param integer $isblack
     * @return $this
     */
    public function setIsblack($isblack)
    {
        $this->isblack = $isblack;

        return $this;
    }

    /**
     * Method to set the value of field diymemberfields
     *
     * @param string $diymemberfields
     * @return $this
     */
    public function setDiymemberfields($diymemberfields)
    {
        $this->diymemberfields = $diymemberfields;

        return $this;
    }

    /**
     * Method to set the value of field diycommissionfields
     *
     * @param string $diycommissionfields
     * @return $this
     */
    public function setDiycommissionfields($diycommissionfields)
    {
        $this->diycommissionfields = $diycommissionfields;

        return $this;
    }

    /**
     * Method to set the value of field commission_total
     *
     * @param double $commission_total
     * @return $this
     */
    public function setCommissionTotal($commission_total)
    {
        $this->commission_total = $commission_total;

        return $this;
    }

    /**
     * Method to set the value of field endtime2
     *
     * @param integer $endtime2
     * @return $this
     */
    public function setEndtime2($endtime2)
    {
        $this->endtime2 = $endtime2;

        return $this;
    }

    /**
     * Method to set the value of field ispartner
     *
     * @param integer $ispartner
     * @return $this
     */
    public function setIspartner($ispartner)
    {
        $this->ispartner = $ispartner;

        return $this;
    }

    /**
     * Method to set the value of field partnertime
     *
     * @param integer $partnertime
     * @return $this
     */
    public function setPartnertime($partnertime)
    {
        $this->partnertime = $partnertime;

        return $this;
    }

    /**
     * Method to set the value of field partnerstatus
     *
     * @param integer $partnerstatus
     * @return $this
     */
    public function setPartnerstatus($partnerstatus)
    {
        $this->partnerstatus = $partnerstatus;

        return $this;
    }

    /**
     * Method to set the value of field partnerblack
     *
     * @param integer $partnerblack
     * @return $this
     */
    public function setPartnerblack($partnerblack)
    {
        $this->partnerblack = $partnerblack;

        return $this;
    }

    /**
     * Method to set the value of field partnerlevel
     *
     * @param integer $partnerlevel
     * @return $this
     */
    public function setPartnerlevel($partnerlevel)
    {
        $this->partnerlevel = $partnerlevel;

        return $this;
    }

    /**
     * Method to set the value of field partnernotupgrade
     *
     * @param integer $partnernotupgrade
     * @return $this
     */
    public function setPartnernotupgrade($partnernotupgrade)
    {
        $this->partnernotupgrade = $partnernotupgrade;

        return $this;
    }

    /**
     * Method to set the value of field diyglobonusid
     *
     * @param integer $diyglobonusid
     * @return $this
     */
    public function setDiyglobonusid($diyglobonusid)
    {
        $this->diyglobonusid = $diyglobonusid;

        return $this;
    }

    /**
     * Method to set the value of field diyglobonusdata
     *
     * @param string $diyglobonusdata
     * @return $this
     */
    public function setDiyglobonusdata($diyglobonusdata)
    {
        $this->diyglobonusdata = $diyglobonusdata;

        return $this;
    }

    /**
     * Method to set the value of field diyglobonusfields
     *
     * @param string $diyglobonusfields
     * @return $this
     */
    public function setDiyglobonusfields($diyglobonusfields)
    {
        $this->diyglobonusfields = $diyglobonusfields;

        return $this;
    }

    /**
     * Method to set the value of field isaagent
     *
     * @param integer $isaagent
     * @return $this
     */
    public function setIsaagent($isaagent)
    {
        $this->isaagent = $isaagent;

        return $this;
    }

    /**
     * Method to set the value of field aagentlevel
     *
     * @param integer $aagentlevel
     * @return $this
     */
    public function setAagentlevel($aagentlevel)
    {
        $this->aagentlevel = $aagentlevel;

        return $this;
    }

    /**
     * Method to set the value of field aagenttime
     *
     * @param integer $aagenttime
     * @return $this
     */
    public function setAagenttime($aagenttime)
    {
        $this->aagenttime = $aagenttime;

        return $this;
    }

    /**
     * Method to set the value of field aagentstatus
     *
     * @param integer $aagentstatus
     * @return $this
     */
    public function setAagentstatus($aagentstatus)
    {
        $this->aagentstatus = $aagentstatus;

        return $this;
    }

    /**
     * Method to set the value of field aagentblack
     *
     * @param integer $aagentblack
     * @return $this
     */
    public function setAagentblack($aagentblack)
    {
        $this->aagentblack = $aagentblack;

        return $this;
    }

    /**
     * Method to set the value of field aagentnotupgrade
     *
     * @param integer $aagentnotupgrade
     * @return $this
     */
    public function setAagentnotupgrade($aagentnotupgrade)
    {
        $this->aagentnotupgrade = $aagentnotupgrade;

        return $this;
    }

    /**
     * Method to set the value of field aagenttype
     *
     * @param integer $aagenttype
     * @return $this
     */
    public function setAagenttype($aagenttype)
    {
        $this->aagenttype = $aagenttype;

        return $this;
    }

    /**
     * Method to set the value of field aagentprovinces
     *
     * @param string $aagentprovinces
     * @return $this
     */
    public function setAagentprovinces($aagentprovinces)
    {
        $this->aagentprovinces = $aagentprovinces;

        return $this;
    }

    /**
     * Method to set the value of field aagentcitys
     *
     * @param string $aagentcitys
     * @return $this
     */
    public function setAagentcitys($aagentcitys)
    {
        $this->aagentcitys = $aagentcitys;

        return $this;
    }

    /**
     * Method to set the value of field aagentareas
     *
     * @param string $aagentareas
     * @return $this
     */
    public function setAagentareas($aagentareas)
    {
        $this->aagentareas = $aagentareas;

        return $this;
    }

    /**
     * Method to set the value of field diyaagentid
     *
     * @param integer $diyaagentid
     * @return $this
     */
    public function setDiyaagentid($diyaagentid)
    {
        $this->diyaagentid = $diyaagentid;

        return $this;
    }

    /**
     * Method to set the value of field diyaagentdata
     *
     * @param string $diyaagentdata
     * @return $this
     */
    public function setDiyaagentdata($diyaagentdata)
    {
        $this->diyaagentdata = $diyaagentdata;

        return $this;
    }

    /**
     * Method to set the value of field diyaagentfields
     *
     * @param string $diyaagentfields
     * @return $this
     */
    public function setDiyaagentfields($diyaagentfields)
    {
        $this->diyaagentfields = $diyaagentfields;

        return $this;
    }

    /**
     * Method to set the value of field salt
     *
     * @param string $salt
     * @return $this
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Method to set the value of field mobileverify
     *
     * @param integer $mobileverify
     * @return $this
     */
    public function setMobileverify($mobileverify)
    {
        $this->mobileverify = $mobileverify;

        return $this;
    }

    /**
     * Method to set the value of field mobileuser
     *
     * @param integer $mobileuser
     * @return $this
     */
    public function setMobileuser($mobileuser)
    {
        $this->mobileuser = $mobileuser;

        return $this;
    }

    /**
     * Method to set the value of field carrier_mobile
     *
     * @param string $carrier_mobile
     * @return $this
     */
    public function setCarrierMobile($carrier_mobile)
    {
        $this->carrier_mobile = $carrier_mobile;

        return $this;
    }

    /**
     * Method to set the value of field isauthor
     *
     * @param integer $isauthor
     * @return $this
     */
    public function setIsauthor($isauthor)
    {
        $this->isauthor = $isauthor;

        return $this;
    }

    /**
     * Method to set the value of field authortime
     *
     * @param integer $authortime
     * @return $this
     */
    public function setAuthortime($authortime)
    {
        $this->authortime = $authortime;

        return $this;
    }

    /**
     * Method to set the value of field authorstatus
     *
     * @param integer $authorstatus
     * @return $this
     */
    public function setAuthorstatus($authorstatus)
    {
        $this->authorstatus = $authorstatus;

        return $this;
    }

    /**
     * Method to set the value of field authorblack
     *
     * @param integer $authorblack
     * @return $this
     */
    public function setAuthorblack($authorblack)
    {
        $this->authorblack = $authorblack;

        return $this;
    }

    /**
     * Method to set the value of field authorlevel
     *
     * @param integer $authorlevel
     * @return $this
     */
    public function setAuthorlevel($authorlevel)
    {
        $this->authorlevel = $authorlevel;

        return $this;
    }

    /**
     * Method to set the value of field authornotupgrade
     *
     * @param integer $authornotupgrade
     * @return $this
     */
    public function setAuthornotupgrade($authornotupgrade)
    {
        $this->authornotupgrade = $authornotupgrade;

        return $this;
    }

    /**
     * Method to set the value of field diyauthorid
     *
     * @param integer $diyauthorid
     * @return $this
     */
    public function setDiyauthorid($diyauthorid)
    {
        $this->diyauthorid = $diyauthorid;

        return $this;
    }

    /**
     * Method to set the value of field diyauthordata
     *
     * @param string $diyauthordata
     * @return $this
     */
    public function setDiyauthordata($diyauthordata)
    {
        $this->diyauthordata = $diyauthordata;

        return $this;
    }

    /**
     * Method to set the value of field diyauthorfields
     *
     * @param string $diyauthorfields
     * @return $this
     */
    public function setDiyauthorfields($diyauthorfields)
    {
        $this->diyauthorfields = $diyauthorfields;

        return $this;
    }

    /**
     * Method to set the value of field authorid
     *
     * @param integer $authorid
     * @return $this
     */
    public function setAuthorid($authorid)
    {
        $this->authorid = $authorid;

        return $this;
    }

    /**
     * Method to set the value of field comefrom
     *
     * @param string $comefrom
     * @return $this
     */
    public function setComefrom($comefrom)
    {
        $this->comefrom = $comefrom;

        return $this;
    }

    /**
     * Method to set the value of field openid_qq
     *
     * @param string $openid_qq
     * @return $this
     */
    public function setOpenidQq($openid_qq)
    {
        $this->openid_qq = $openid_qq;

        return $this;
    }

    /**
     * Method to set the value of field openid_wx
     *
     * @param string $openid_wx
     * @return $this
     */
    public function setOpenidWx($openid_wx)
    {
        $this->openid_wx = $openid_wx;

        return $this;
    }

    /**
     * Method to set the value of field diymaxcredit
     *
     * @param integer $diymaxcredit
     * @return $this
     */
    public function setDiymaxcredit($diymaxcredit)
    {
        $this->diymaxcredit = $diymaxcredit;

        return $this;
    }

    /**
     * Method to set the value of field maxcredit
     *
     * @param integer $maxcredit
     * @return $this
     */
    public function setMaxcredit($maxcredit)
    {
        $this->maxcredit = $maxcredit;

        return $this;
    }

    /**
     * Method to set the value of field diycrowdid
     *
     * @param integer $diycrowdid
     * @return $this
     */
    public function setDiycrowdid($diycrowdid)
    {
        $this->diycrowdid = $diycrowdid;

        return $this;
    }

    /**
     * Method to set the value of field diycrowdfields
     *
     * @param string $diycrowdfields
     * @return $this
     */
    public function setDiycrowdfields($diycrowdfields)
    {
        $this->diycrowdfields = $diycrowdfields;

        return $this;
    }

    /**
     * Method to set the value of field diycrowddata
     *
     * @param string $diycrowddata
     * @return $this
     */
    public function setDiycrowddata($diycrowddata)
    {
        $this->diycrowddata = $diycrowddata;

        return $this;
    }

    /**
     * Method to set the value of field iscrowd
     *
     * @param integer $iscrowd
     * @return $this
     */
    public function setIscrowd($iscrowd)
    {
        $this->iscrowd = $iscrowd;

        return $this;
    }

    /**
     * Method to set the value of field crowdstatus
     *
     * @param integer $crowdstatus
     * @return $this
     */
    public function setCrowdstatus($crowdstatus)
    {
        $this->crowdstatus = $crowdstatus;

        return $this;
    }

    /**
     * Method to set the value of field crowdtime
     *
     * @param integer $crowdtime
     * @return $this
     */
    public function setCrowdtime($crowdtime)
    {
        $this->crowdtime = $crowdtime;

        return $this;
    }

    /**
     * Method to set the value of field crowdblack
     *
     * @param integer $crowdblack
     * @return $this
     */
    public function setCrowdblack($crowdblack)
    {
        $this->crowdblack = $crowdblack;

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
     * Returns the value of field uniacid
     *
     * @return integer
     */
    public function getUniacid()
    {
        return $this->uniacid;
    }

    /**
     * Returns the value of field uid
     *
     * @return integer
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Returns the value of field groupid
     *
     * @return integer
     */
    public function getGroupid()
    {
        return $this->groupid;
    }

    /**
     * Returns the value of field level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Returns the value of field agentid
     *
     * @return integer
     */
    public function getAgentid()
    {
        return $this->agentid;
    }

    /**
     * Returns the value of field openid
     *
     * @return string
     */
    public function getOpenid()
    {
        return $this->openid;
    }

    /**
     * Returns the value of field realname
     *
     * @return string
     */
    public function getRealname()
    {
        return $this->realname;
    }

    /**
     * Returns the value of field mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Returns the value of field pwd
     *
     * @return string
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * Returns the value of field weixin
     *
     * @return string
     */
    public function getWeixin()
    {
        return $this->weixin;
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
     * Returns the value of field createtime
     *
     * @return integer
     */
    public function getCreatetime()
    {
        return $this->createtime;
    }

    /**
     * Returns the value of field agenttime
     *
     * @return integer
     */
    public function getAgenttime()
    {
        return $this->agenttime;
    }

    /**
     * Returns the value of field status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Returns the value of field isagent
     *
     * @return integer
     */
    public function getIsagent()
    {
        return $this->isagent;
    }

    /**
     * Returns the value of field clickcount
     *
     * @return integer
     */
    public function getClickcount()
    {
        return $this->clickcount;
    }

    /**
     * Returns the value of field agentlevel
     *
     * @return integer
     */
    public function getAgentlevel()
    {
        return $this->agentlevel;
    }

    /**
     * Returns the value of field noticeset
     *
     * @return string
     */
    public function getNoticeset()
    {
        return $this->noticeset;
    }

    /**
     * Returns the value of field nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Returns the value of field credit1
     *
     * @return double
     */
    public function getCredit1()
    {
        return $this->credit1;
    }

    /**
     * Returns the value of field credit2
     *
     * @return double
     */
    public function getCredit2()
    {
        return $this->credit2;
    }

    /**
     * Returns the value of field birthyear
     *
     * @return string
     */
    public function getBirthyear()
    {
        return $this->birthyear;
    }

    /**
     * Returns the value of field birthmonth
     *
     * @return string
     */
    public function getBirthmonth()
    {
        return $this->birthmonth;
    }

    /**
     * Returns the value of field birthday
     *
     * @return string
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Returns the value of field gender
     *
     * @return integer
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Returns the value of field avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Returns the value of field province
     *
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Returns the value of field city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Returns the value of field area
     *
     * @return string
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Returns the value of field childtime
     *
     * @return integer
     */
    public function getChildtime()
    {
        return $this->childtime;
    }

    /**
     * Returns the value of field agentnotupgrade
     *
     * @return integer
     */
    public function getAgentnotupgrade()
    {
        return $this->agentnotupgrade;
    }

    /**
     * Returns the value of field inviter
     *
     * @return integer
     */
    public function getInviter()
    {
        return $this->inviter;
    }

    /**
     * Returns the value of field agentselectgoods
     *
     * @return integer
     */
    public function getAgentselectgoods()
    {
        return $this->agentselectgoods;
    }

    /**
     * Returns the value of field agentblack
     *
     * @return integer
     */
    public function getAgentblack()
    {
        return $this->agentblack;
    }

    /**
     * Returns the value of field username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Returns the value of field fixagentid
     *
     * @return integer
     */
    public function getFixagentid()
    {
        return $this->fixagentid;
    }

    /**
     * Returns the value of field diymemberid
     *
     * @return integer
     */
    public function getDiymemberid()
    {
        return $this->diymemberid;
    }

    /**
     * Returns the value of field diymemberdataid
     *
     * @return integer
     */
    public function getDiymemberdataid()
    {
        return $this->diymemberdataid;
    }

    /**
     * Returns the value of field diymemberdata
     *
     * @return string
     */
    public function getDiymemberdata()
    {
        return $this->diymemberdata;
    }

    /**
     * Returns the value of field diycommissionid
     *
     * @return integer
     */
    public function getDiycommissionid()
    {
        return $this->diycommissionid;
    }

    /**
     * Returns the value of field diycommissiondataid
     *
     * @return integer
     */
    public function getDiycommissiondataid()
    {
        return $this->diycommissiondataid;
    }

    /**
     * Returns the value of field diycommissiondata
     *
     * @return string
     */
    public function getDiycommissiondata()
    {
        return $this->diycommissiondata;
    }

    /**
     * Returns the value of field isblack
     *
     * @return integer
     */
    public function getIsblack()
    {
        return $this->isblack;
    }

    /**
     * Returns the value of field diymemberfields
     *
     * @return string
     */
    public function getDiymemberfields()
    {
        return $this->diymemberfields;
    }

    /**
     * Returns the value of field diycommissionfields
     *
     * @return string
     */
    public function getDiycommissionfields()
    {
        return $this->diycommissionfields;
    }

    /**
     * Returns the value of field commission_total
     *
     * @return double
     */
    public function getCommissionTotal()
    {
        return $this->commission_total;
    }

    /**
     * Returns the value of field endtime2
     *
     * @return integer
     */
    public function getEndtime2()
    {
        return $this->endtime2;
    }

    /**
     * Returns the value of field ispartner
     *
     * @return integer
     */
    public function getIspartner()
    {
        return $this->ispartner;
    }

    /**
     * Returns the value of field partnertime
     *
     * @return integer
     */
    public function getPartnertime()
    {
        return $this->partnertime;
    }

    /**
     * Returns the value of field partnerstatus
     *
     * @return integer
     */
    public function getPartnerstatus()
    {
        return $this->partnerstatus;
    }

    /**
     * Returns the value of field partnerblack
     *
     * @return integer
     */
    public function getPartnerblack()
    {
        return $this->partnerblack;
    }

    /**
     * Returns the value of field partnerlevel
     *
     * @return integer
     */
    public function getPartnerlevel()
    {
        return $this->partnerlevel;
    }

    /**
     * Returns the value of field partnernotupgrade
     *
     * @return integer
     */
    public function getPartnernotupgrade()
    {
        return $this->partnernotupgrade;
    }

    /**
     * Returns the value of field diyglobonusid
     *
     * @return integer
     */
    public function getDiyglobonusid()
    {
        return $this->diyglobonusid;
    }

    /**
     * Returns the value of field diyglobonusdata
     *
     * @return string
     */
    public function getDiyglobonusdata()
    {
        return $this->diyglobonusdata;
    }

    /**
     * Returns the value of field diyglobonusfields
     *
     * @return string
     */
    public function getDiyglobonusfields()
    {
        return $this->diyglobonusfields;
    }

    /**
     * Returns the value of field isaagent
     *
     * @return integer
     */
    public function getIsaagent()
    {
        return $this->isaagent;
    }

    /**
     * Returns the value of field aagentlevel
     *
     * @return integer
     */
    public function getAagentlevel()
    {
        return $this->aagentlevel;
    }

    /**
     * Returns the value of field aagenttime
     *
     * @return integer
     */
    public function getAagenttime()
    {
        return $this->aagenttime;
    }

    /**
     * Returns the value of field aagentstatus
     *
     * @return integer
     */
    public function getAagentstatus()
    {
        return $this->aagentstatus;
    }

    /**
     * Returns the value of field aagentblack
     *
     * @return integer
     */
    public function getAagentblack()
    {
        return $this->aagentblack;
    }

    /**
     * Returns the value of field aagentnotupgrade
     *
     * @return integer
     */
    public function getAagentnotupgrade()
    {
        return $this->aagentnotupgrade;
    }

    /**
     * Returns the value of field aagenttype
     *
     * @return integer
     */
    public function getAagenttype()
    {
        return $this->aagenttype;
    }

    /**
     * Returns the value of field aagentprovinces
     *
     * @return string
     */
    public function getAagentprovinces()
    {
        return $this->aagentprovinces;
    }

    /**
     * Returns the value of field aagentcitys
     *
     * @return string
     */
    public function getAagentcitys()
    {
        return $this->aagentcitys;
    }

    /**
     * Returns the value of field aagentareas
     *
     * @return string
     */
    public function getAagentareas()
    {
        return $this->aagentareas;
    }

    /**
     * Returns the value of field diyaagentid
     *
     * @return integer
     */
    public function getDiyaagentid()
    {
        return $this->diyaagentid;
    }

    /**
     * Returns the value of field diyaagentdata
     *
     * @return string
     */
    public function getDiyaagentdata()
    {
        return $this->diyaagentdata;
    }

    /**
     * Returns the value of field diyaagentfields
     *
     * @return string
     */
    public function getDiyaagentfields()
    {
        return $this->diyaagentfields;
    }

    /**
     * Returns the value of field salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Returns the value of field mobileverify
     *
     * @return integer
     */
    public function getMobileverify()
    {
        return $this->mobileverify;
    }

    /**
     * Returns the value of field mobileuser
     *
     * @return integer
     */
    public function getMobileuser()
    {
        return $this->mobileuser;
    }

    /**
     * Returns the value of field carrier_mobile
     *
     * @return string
     */
    public function getCarrierMobile()
    {
        return $this->carrier_mobile;
    }

    /**
     * Returns the value of field isauthor
     *
     * @return integer
     */
    public function getIsauthor()
    {
        return $this->isauthor;
    }

    /**
     * Returns the value of field authortime
     *
     * @return integer
     */
    public function getAuthortime()
    {
        return $this->authortime;
    }

    /**
     * Returns the value of field authorstatus
     *
     * @return integer
     */
    public function getAuthorstatus()
    {
        return $this->authorstatus;
    }

    /**
     * Returns the value of field authorblack
     *
     * @return integer
     */
    public function getAuthorblack()
    {
        return $this->authorblack;
    }

    /**
     * Returns the value of field authorlevel
     *
     * @return integer
     */
    public function getAuthorlevel()
    {
        return $this->authorlevel;
    }

    /**
     * Returns the value of field authornotupgrade
     *
     * @return integer
     */
    public function getAuthornotupgrade()
    {
        return $this->authornotupgrade;
    }

    /**
     * Returns the value of field diyauthorid
     *
     * @return integer
     */
    public function getDiyauthorid()
    {
        return $this->diyauthorid;
    }

    /**
     * Returns the value of field diyauthordata
     *
     * @return string
     */
    public function getDiyauthordata()
    {
        return $this->diyauthordata;
    }

    /**
     * Returns the value of field diyauthorfields
     *
     * @return string
     */
    public function getDiyauthorfields()
    {
        return $this->diyauthorfields;
    }

    /**
     * Returns the value of field authorid
     *
     * @return integer
     */
    public function getAuthorid()
    {
        return $this->authorid;
    }

    /**
     * Returns the value of field comefrom
     *
     * @return string
     */
    public function getComefrom()
    {
        return $this->comefrom;
    }

    /**
     * Returns the value of field openid_qq
     *
     * @return string
     */
    public function getOpenidQq()
    {
        return $this->openid_qq;
    }

    /**
     * Returns the value of field openid_wx
     *
     * @return string
     */
    public function getOpenidWx()
    {
        return $this->openid_wx;
    }

    /**
     * Returns the value of field diymaxcredit
     *
     * @return integer
     */
    public function getDiymaxcredit()
    {
        return $this->diymaxcredit;
    }

    /**
     * Returns the value of field maxcredit
     *
     * @return integer
     */
    public function getMaxcredit()
    {
        return $this->maxcredit;
    }

    /**
     * Returns the value of field diycrowdid
     *
     * @return integer
     */
    public function getDiycrowdid()
    {
        return $this->diycrowdid;
    }

    /**
     * Returns the value of field diycrowdfields
     *
     * @return string
     */
    public function getDiycrowdfields()
    {
        return $this->diycrowdfields;
    }

    /**
     * Returns the value of field diycrowddata
     *
     * @return string
     */
    public function getDiycrowddata()
    {
        return $this->diycrowddata;
    }

    /**
     * Returns the value of field iscrowd
     *
     * @return integer
     */
    public function getIscrowd()
    {
        return $this->iscrowd;
    }

    /**
     * Returns the value of field crowdstatus
     *
     * @return integer
     */
    public function getCrowdstatus()
    {
        return $this->crowdstatus;
    }

    /**
     * Returns the value of field crowdtime
     *
     * @return integer
     */
    public function getCrowdtime()
    {
        return $this->crowdtime;
    }

    /**
     * Returns the value of field crowdblack
     *
     * @return integer
     */
    public function getCrowdblack()
    {
        return $this->crowdblack;
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
        return 'ims_ewei_shop_member';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ImsEweiShopMember[]|ImsEweiShopMember
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ImsEweiShopMember
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
            'uniacid' => 'uniacid',
            'uid' => 'uid',
            'groupid' => 'groupid',
            'level' => 'level',
            'agentid' => 'agentid',
            'openid' => 'openid',
            'realname' => 'realname',
            'mobile' => 'mobile',
            'pwd' => 'pwd',
            'weixin' => 'weixin',
            'content' => 'content',
            'createtime' => 'createtime',
            'agenttime' => 'agenttime',
            'status' => 'status',
            'isagent' => 'isagent',
            'clickcount' => 'clickcount',
            'agentlevel' => 'agentlevel',
            'noticeset' => 'noticeset',
            'nickname' => 'nickname',
            'credit1' => 'credit1',
            'credit2' => 'credit2',
            'birthyear' => 'birthyear',
            'birthmonth' => 'birthmonth',
            'birthday' => 'birthday',
            'gender' => 'gender',
            'avatar' => 'avatar',
            'province' => 'province',
            'city' => 'city',
            'area' => 'area',
            'childtime' => 'childtime',
            'agentnotupgrade' => 'agentnotupgrade',
            'inviter' => 'inviter',
            'agentselectgoods' => 'agentselectgoods',
            'agentblack' => 'agentblack',
            'username' => 'username',
            'fixagentid' => 'fixagentid',
            'diymemberid' => 'diymemberid',
            'diymemberdataid' => 'diymemberdataid',
            'diymemberdata' => 'diymemberdata',
            'diycommissionid' => 'diycommissionid',
            'diycommissiondataid' => 'diycommissiondataid',
            'diycommissiondata' => 'diycommissiondata',
            'isblack' => 'isblack',
            'diymemberfields' => 'diymemberfields',
            'diycommissionfields' => 'diycommissionfields',
            'commission_total' => 'commission_total',
            'endtime2' => 'endtime2',
            'ispartner' => 'ispartner',
            'partnertime' => 'partnertime',
            'partnerstatus' => 'partnerstatus',
            'partnerblack' => 'partnerblack',
            'partnerlevel' => 'partnerlevel',
            'partnernotupgrade' => 'partnernotupgrade',
            'diyglobonusid' => 'diyglobonusid',
            'diyglobonusdata' => 'diyglobonusdata',
            'diyglobonusfields' => 'diyglobonusfields',
            'isaagent' => 'isaagent',
            'aagentlevel' => 'aagentlevel',
            'aagenttime' => 'aagenttime',
            'aagentstatus' => 'aagentstatus',
            'aagentblack' => 'aagentblack',
            'aagentnotupgrade' => 'aagentnotupgrade',
            'aagenttype' => 'aagenttype',
            'aagentprovinces' => 'aagentprovinces',
            'aagentcitys' => 'aagentcitys',
            'aagentareas' => 'aagentareas',
            'diyaagentid' => 'diyaagentid',
            'diyaagentdata' => 'diyaagentdata',
            'diyaagentfields' => 'diyaagentfields',
            'salt' => 'salt',
            'mobileverify' => 'mobileverify',
            'mobileuser' => 'mobileuser',
            'carrier_mobile' => 'carrier_mobile',
            'isauthor' => 'isauthor',
            'authortime' => 'authortime',
            'authorstatus' => 'authorstatus',
            'authorblack' => 'authorblack',
            'authorlevel' => 'authorlevel',
            'authornotupgrade' => 'authornotupgrade',
            'diyauthorid' => 'diyauthorid',
            'diyauthordata' => 'diyauthordata',
            'diyauthorfields' => 'diyauthorfields',
            'authorid' => 'authorid',
            'comefrom' => 'comefrom',
            'openid_qq' => 'openid_qq',
            'openid_wx' => 'openid_wx',
            'diymaxcredit' => 'diymaxcredit',
            'maxcredit' => 'maxcredit',
            'diycrowdid' => 'diycrowdid',
            'diycrowdfields' => 'diycrowdfields',
            'diycrowddata' => 'diycrowddata',
            'iscrowd' => 'iscrowd',
            'crowdstatus' => 'crowdstatus',
            'crowdtime' => 'crowdtime',
            'crowdblack' => 'crowdblack'
        ];
    }

}
