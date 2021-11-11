<?php
/**
 * TOP API: taobao.tbk.dg.rid.report.get request
 * 
 * @author auto create
 * @since 1.0, 2020.08.14
 */
class TbkDgRidReportGetRequest
{
	/** 
	 * 入参
	 **/
	private $searchOption;
	
	private $apiParas = array();
	
	public function setSearchOption($searchOption)
	{
		$this->searchOption = $searchOption;
		$this->apiParas["search_option"] = $searchOption;
	}

	public function getSearchOption()
	{
		return $this->searchOption;
	}

	public function getApiMethodName()
	{
		return "taobao.tbk.dg.rid.report.get";
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
