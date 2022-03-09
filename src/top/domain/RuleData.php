<?php

/**
 * 返回数据
 * @author auto create
 */
class RuleData
{
	
	/** 
	 * 优惠券ID
	 **/
	public $coupon_activity_id;
	
	/** 
	 * 当前用户渠道金额，单位元，保留两位小数，当页面类型为代理时需要
	 **/
	public $dl_amount;
	
	/** 
	 * 代理比例，1201表示12.01%，当页面类型为代理时需要
	 **/
	public $dl_rate;
	
	/** 
	 * 当前用户返利金额，单位元，保留两位小数，当页面类型为返利时需要
	 **/
	public $fl_amount;
	
	/** 
	 * 返利比例，4501表示45.01%，当页面类型为返利时需要
	 **/
	public $fl_rate;
	
	/** 
	 * 商品ID
	 **/
	public $item_id;
	
	/** 
	 * 当前用户最高渠道金额，单位元，保留两位小数，当页面类型为代理时需要
	 **/
	public $max_dl_amount;
	
	/** 
	 * 返利最高比例，5120表示51.20%，当页面类型为代理时需要
	 **/
	public $max_dl_rate;
	
	/** 
	 * 媒体设置的当前页面类型：导购版本为guide、渠道管理版本为agent、返利版本为rebate
	 **/
	public $page_type;
	
	/** 
	 * 淘礼金vegas_code（淘礼金创建API(tbk_dg_vegas_tlj_create)I生成的返回字段中的vegas_code值），注意生成的淘礼金pid和打开详情页的pid需要保持一致，不然会导致淘礼金领取失败
	 **/
	public $vegas_code;	
}
?>