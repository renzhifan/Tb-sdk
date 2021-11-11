<?php

/**
 * 前N件佣金信息-当入参get_topn_rate=1，前N件佣金生效且最高，透出该组字段
 * @author auto create
 */
class StepRateDto
{
	
	/** 
	 * 前N件佣金结束时间，当前N件佣金  失效，本字段置空
	 **/
	public $topn_end_time;
	
	/** 
	 * 前N件剩余库存，当前N件佣金失效，本字段置空
	 **/
	public $topn_quantity;
	
	/** 
	 * 前N件佣金开始时间，当前N件佣金失效，本字段置空
	 **/
	public $topn_start_time;
	
	/** 
	 * 前N件初始总库存，当前N件佣金失效，本字段置空（失效：任务完成、时间结束、商品下架）
	 **/
	public $topn_total_count;	
}
?>