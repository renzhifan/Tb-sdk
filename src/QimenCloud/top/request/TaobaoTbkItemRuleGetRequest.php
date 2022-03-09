<?php
/**
 * TOP API: qimen.taobao.tbk.item.rule.get request
 * 
 * @author auto create
 * @since 1.0, 2020.07.20
 */
class TaobaoTbkItemRuleGetRequest
{
	/** 
	 * 媒体上下文用户参数（便于媒体决策版本和入参）
	 **/
	private $isvUserId;
	
	/** 
	 * 商品ID，多个用,隔开
	 **/
	private $itemIds;
	
	/** 
	 * 商品信息列表，列表商品顺序和itemIds一致
	 **/
	private $itemsData;
	
	private $apiParas = array();
	
	public function setIsvUserId($isvUserId)
	{
		$this->isvUserId = $isvUserId;
		$this->apiParas["isvUserId"] = $isvUserId;
	}

	public function getIsvUserId()
	{
		return $this->isvUserId;
	}

	public function setItemIds($itemIds)
	{
		$this->itemIds = $itemIds;
		$this->apiParas["itemIds"] = $itemIds;
	}

	public function getItemIds()
	{
		return $this->itemIds;
	}

	public function setItemsData($itemsData)
	{
		$this->itemsData = $itemsData;
		$this->apiParas["itemsData"] = $itemsData;
	}

	public function getItemsData()
	{
		return $this->itemsData;
	}

	public function getApiMethodName()
	{
		return "qimen.taobao.tbk.item.rule.get";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->itemIds,"itemIds");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
