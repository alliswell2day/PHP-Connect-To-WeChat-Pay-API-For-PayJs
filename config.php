<?php

/*
 * 此文件作为配置文件，请先配置后使用
 */
//===================================================================================

/*
 * $config_mchid是你的微信支付接口的商户号。
 */
$config_mchid = "ZMEKQZ";   //商户号 Your business Number

/*
 * $config_key是你的微信支付接口的密钥。
 */
$config_key = "0hC7YSaoS5zCTDuN";  //密钥 Your private Key

//====================================================================================

/*
 * $quit_payment_url 是一个当用户支付到一半，然后不想支付了，于是就决定退出的页面链接地址。
 * 也就是说，当用户不想支付，然后退出支付之后，就会链接到这里
 * 这个变量可以传递参数，例如：
 *                   $quit_payment_url = "https://www.xxx.com?xxx=xxx"; 
 * 或者直接：
 *                   $quit_payment_url = "https://www.xxx.com"; 
 */
$quit_payment_url = "https://www.xxx.com";


/*
 * $after_payment_url 是一个当用户支付完毕，然后页面跳转的地址。
 * 这个变量可以携带参数
 */
$after_payment_url = "https://www.xxx.com";

//====================================================================================

/*
 * $use_validation_code是决定你是否在别人支付前启用验证码，
 * 如果你想要启用，那么请改成：
 *                                                           $use_validation = true;
 * 如果你不想，那就这样：
 *                                                           $use_validation = false;
 */
$use_validation = false;

//====================================================================================

/*
 * $use_notification_of_pay 是决定你是否使用异步通知。 
 * 如果你想用的话，请改成：
 *                                                    $use_notification_of_pay = true;
 * 如果不想，那就这样：
 *                                                    $use_notification_of_pay = false;
 */
$use_notification_of_pay = false;

//===========================================================================

/*
 * 以下设置，如果你对这个不了解的话，就不要动它。
 */

$create_payment_url = "https://payjs.cn/api/native";  //The API's url for creating payment. 用于创建订单的URL
$check_payment_url = "https://payjs.cn/api/check";  //The API's url for checking the payment. 用于查询订单的URL


$sign_verification_error_msg = "Sign Verification Error, please make sure that your key is correct. <br> 签字错误，建议您检查您的密钥是否正确";
$apt_connect_error_msg = "API Call Error, please ask the the administrater of the API provider. <br> API调用错误，请联系API提供商";
$parameter_error_msg = "Parameter Error <br> 参数传递错误";
