<?php
/**
 * Created by PhpStorm.
 * User: 30460
 * Date: 2019/5/22
 * Time: 10:23
 */
namespace AliOss;
class OssStorage
{
    private $key;
    private $secret;
    private $endpoint;
    private $bucket;
    public function __construct($key, $secret, $endpoint, $bucket)
    {
        $this->key=$key;
        $this->secret=$secret;
        $this->endpoint=$endpoint;
        $this->bucket=$bucket;
    }
    /**
     * 上传图片
     * @param string $object 要保存的文件路径、名称
     * @param string $filename 本地文件、路径名称
     * @return mixed
     */
    public function upload($object,$filename){
        $oss = new \OssClient($this->key,$this->secret,$this->endpoint);
        $info=$oss->uploadFile($this->bucket,$object,$filename);
        return $info;
    }

}