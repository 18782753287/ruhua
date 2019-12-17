<?php

namespace app\validate;


use bases\BaseValidate;

class ProductValidate extends BaseValidate
{
    protected $rule = [
        'goods_name' => 'require|isNotEmpty',
        'category_id' => 'require|isPositiveInteger',  //分类id
        'description' => 'max:200', //描述
      //  'content' => 'max:200', //详情
        //'people' => 'require|isNotEmpty', //拼团人数
//        'shipping_fee' => 'require',  //运费
        //'max_buy' => 'isPositiveInteger',  //限买
        'sales' => 'max:200',  //销量
        'img_id' => 'min:0',  //图片ID
        'market_price' => 'require|isNotEmpty', //市场价格
        'price' => 'require', //单价
//        'cots_price' => 'require', //成本价
        'style' => 'max:5',  //商品类型
//        'only_price' => 'require', //vip价格
        'stock' => 'require',  //库存
        'content' => 'min:0',  //商品详情
        'banner_imgs'=> 'min:0',  //商品详情图
        'delivery_id'=>'require', //物流快递模板ID

    ];
}
