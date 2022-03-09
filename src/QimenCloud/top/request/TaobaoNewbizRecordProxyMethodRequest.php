<?php
/**
 * TOP API: qimen.taobao.newbiz.record.proxy.method request
 * 
 * @author auto create
 * @since 1.0, 2021.12.10
 */
class TaobaoNewbizRecordProxyMethodRequest
{
	/** 
	 * {}
	 **/
	private $parameter;
	
	private $apiParas = array();
	
	public function setParameter($parameter)
	{
		$this->parameter = $parameter;
		$this->apiParas["parameter"] = $parameter;
	}

	public function getParameter()
	{
		return $this->parameter;
	}

	public function getApiMethodName()
	{
		return "qimen.taobao.newbiz.record.proxy.method";
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
