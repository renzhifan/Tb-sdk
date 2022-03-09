<?php
/**
 * TOP API: 488fukk194.brand.wiki.info request
 * 
 * @author auto create
 * @since 1.0, 2021.12.08
 */
class BrandWikiInfoRequest
{
	/** 
	 * 数据
	 **/
	private $data;
	
	/** 
	 * 商品id
	 **/
	private $wikiId;
	
	private $apiParas = array();
	
	public function setData($data)
	{
		$this->data = $data;
		$this->apiParas["data"] = $data;
	}

	public function getData()
	{
		return $this->data;
	}

	public function setWikiId($wikiId)
	{
		$this->wikiId = $wikiId;
		$this->apiParas["wiki_id"] = $wikiId;
	}

	public function getWikiId()
	{
		return $this->wikiId;
	}

	public function getApiMethodName()
	{
		return "488fukk194.brand.wiki.info";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
