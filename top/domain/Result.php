<?php

/**
 * 返回结果封装对象
 * @author auto create
 */
class Result
{
	
	/** 
	 * 业务错误码 101, 102,103
	 **/
	public $biz_error_code;
	
	/** 
	 * 业务错误描述
	 **/
	public $biz_error_desc;
	
	/** 
	 * 真正的业务数据结构
	 **/
	public $data;
	
	/** 
	 * 接口返回值信息
	 **/
	public $result_code;
	
	/** 
	 * 返回信息
	 **/
	public $result_msg;
	
	/** 
	 * 是否成功
	 **/
	public $success;	
}
?>