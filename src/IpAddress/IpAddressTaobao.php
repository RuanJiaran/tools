<?php
namespace Rjr\Tools\IpAddress;


class IpAddressTaobao
{
    const API_URL = "http://ip.taobao.com/service/getIpInfo.php?ip=";

    private static $request_url = '';

    private $data = [];

    public function __construct(string $ip)
    {
        self::$request_url = self::API_URL . $ip;

        $result = file_get_contents(self::$request_url);

        if(empty($result))
            throw new \Exception('接口未返回');

        $result = json_decode($result,true);
        if(is_array($result) && $result['code'] == 0){
            $this->data = $result['data'];
        }else{
            throw new \Exception('接口出错');
        }
    }

    public function getData():array
    {
        return $this->data;
    }

    /**
     * 获取国家
     * @return string
     */
    public function getCountry()
    {
        return $this->data['country'];
    }

    /**
     * 获取省
     * @return string
     */
    public function getRegion():string
    {
        return $this->data['region'];
    }

    /**
     * 获取市
     * @return string
     */
    public function getCity():string
    {
        return $this->data['city'];
    }

    /**
     * 获取区
     * @return string
     */
    public function getArea():string
    {
        return $this->data['area'];
    }


    /**
     * 获取
     * @return string
     */
    public function getCounty():string
    {
        return $this->data['country'];
    }


    /**
     * 获取isp
     * @return string
     */
    public function getIsp():string
    {
        return $this->data['isp'];
    }


    /**
     * 获取country_id
     * @return string
     */
    public function getCountryId():string
    {
        return $this->data['country_id'];
    }

    /**
     * 获取area_id
     * @return string
     */
    public function getAreaId():int
    {
        return intval($this->data['area_id']);
    }


    /**
     * 获取region_id
     * @return string
     */
    public function getRegionId():int
    {
        return intval($this->data['region_id']);
    }


    /**
     * 获取city_id
     * @return string
     */
    public function getCityId():int
    {
        return intval($this->data['city_id']);
    }

    /**
     * 获取country_id
     * @return string
     */
    public function getCountyId():int
    {
        return intval($this->data['country_id']);
    }

    /**
     * 获取isp_id
     * @return string
     */
    public function getIspId():int
    {
        return intval($this->data['isp_id']);
    }


}