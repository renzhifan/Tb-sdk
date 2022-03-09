<?php
/**
 * TOP API: 488fukk194.hhz.user.data request
 * 
 * @author auto create
 * @since 1.0, 2021.12.08
 */
class HhzUserDataRequest
{
	/** 
	 * 用户id
	 **/
	private $id;
	
	private $apiParas = array();
	
	public function setId($id)
	{
		$this->id = $id;
		$this->apiParas["id"] = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getApiMethodName()
	{
		return "488fukk194.hhz.user.data";
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
