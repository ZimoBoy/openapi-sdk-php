<?php

/**
 * Class GetGoodsDetails 单品详情
 * Integer id required 大淘客商品id，请求时id或goodsId必填其中一个，若均填写，将优先查找当前单品id
 * String goodsId 淘宝商品id，id或goodsId必填其中一个，若均填写，将优先查找当前单品id
 */
class GetGoodsDetails extends DtkClient
{
    protected $id;
    protected $goodsId;

    protected $methodType = 'GET';
    protected $requestParams = [];

    const METHOD = "/api/goods/get-goods-details";

    /**
     * @return string
     */
    public function getMethod()
    {
        return self::METHOD;
    }

    /**
     * 可用参数
     * @return string[]
     */
    public function getParamsField()
    {
        return ['id','goodsId'];
    }

    /**
     * @return array
     */
    public function check()
    {
        if (!$this->id) {
            return ['id不能为空！', false];
        }
        return ['', true];
    }
}
