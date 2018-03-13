<?php 

$pdo = new PDO('mysql:host=localhost;dbname=juli','root' ,'' );
$sql = "select * from kehu where khid = '5632691176'";
$pdo->query('set names utf8');
$a = $pdo->query($sql);
$data = $a->fetch(PDO::FETCH_ASSOC);
Array
(
    [khid] => 5632691176
    [wxOpenid] => ouj2Kw8osai92LbLPXKjr8iUh5Ug
    [wxSex] => 男
    [wxNickName] => W r
    [wxAddress] => 中国黑龙江齐齐哈尔
    [wxIco] => http://wx.qlogo.cn/mmopen/vi_32/Q0j4TwGTfTIp310LZt8eA9k8OxnWrriaGliaWTLfic4iaibTnBGevUX35FPmOvB25yENTvss95hKakKyicXdRF9FaxiaA/132
    [wxFollow] => 未关注
    [type] => 
    [name] => 
    [tel] => 
    [email] => 
    [password] => 
    [shareId] => 
    [shopImg] => 
    [shopName] => 
    [IdCard] => 
    [bankName] => 
    [bankNum] => 
    [bankUserName] => 
    [regionId] => 0
    [addressMx] => 
    [zipCode] => 0
    [address] => 
    [updateTime] => 2018-02-05 17:53:46
    [time] => 2018-02-05 17:53:46
)

print_r($data);die;