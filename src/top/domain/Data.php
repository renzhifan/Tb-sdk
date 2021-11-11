<?php

/**
 * 真正的业务数据结构
 * @author auto create
 */
class Data
{
	
	/** 
	 * 自购订单金额
	 **/
	public $individual_alipay_amt;
	
	/** 
	 * 自购订单笔数
	 **/
	public $individual_alipay_num;
	
	/** 
	 * 自购订单购买用户数(选定时间内去重)
	 **/
	public $individual_uv;
	
	/** 
	 * 非自购订单金额
	 **/
	public $promo_alipay_amt;
	
	/** 
	 * 非自购订单笔数
	 **/
	public $promo_alipay_num;
	
	/** 
	 * 非自购订单购买用户数(选定时间内去重)
	 **/
	public $promo_uv;
	
	/** 
	 * 购买订单金额
	 **/
	public $purchase_alipay_amt;
	
	/** 
	 * 购买订单笔数
	 **/
	public $purchase_alipay_num;
	
	/** 
	 * 购买用户数(选定时间内去重)
	 **/
	public $purchase_uv;	
}
?>