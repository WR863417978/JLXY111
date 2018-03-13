<?php 
$orderinfo=pdo_fetch("select * from hx_order where orderid=$orderid");
$transaction_id=$orderinfo['transno'];
//退款
//$total_fee=$orderinfo['paymoney'];
//$refund_fee=$orderinfo['paymoney'];
$total_fee=1;
$refund_fee=1;
$input = new WxPayRefund();
$input->SetTransaction_id($transaction_id);
$input->SetOut_trade_no($out_trade_no);
$input->SetTotal_fee($total_fee);
$input->SetRefund_fee($refund_fee);
$input->SetOut_refund_no(WxPayConfig::MCHID.date("YmdHis"));
$input->SetOp_user_id(WxPayConfig::MCHID);
$info=WxPayApi::refund($input);
if($info['return_code']=='SUCCESS'){
//退款申请成功
//业务逻辑
}else{
//失败
}