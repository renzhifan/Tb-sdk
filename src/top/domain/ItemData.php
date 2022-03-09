<?php

/**
 * 商品信息列表，列表商品顺序和itemIds一致
 * @author auto create
 */
class ItemData
{
	
	/** 
	 * 商品最高佣金率（不包含定向计划），4501表示45.01%
	 **/
	public $item_commission;
	
	/** 
	 * 商品最优券面额，单位元，保留两位小数
	 **/
	public $item_coupon_amount;
	
	/** 
	 * 商品在线价，单位元，保留两位小数
	 **/
	public $item_price;	
}
?>