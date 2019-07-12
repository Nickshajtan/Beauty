<?php
/*
 *	File for email form 
 * 
 */
?>
<?php 
//require( __DIR__ . '../wp-load.php'); //If it is home folder
require_once '../../../wp-load.php';
require_once "sms-prosto_ru.php";
    //Variables
        $headers = "Content-type: text/html; charset=utf-8\r\n";
        $sitename = get_bloginfo('name');
		$email =  get_bloginfo('admin_email');
        $admin_phone = get_field('socials','tel_form');
        $key = ''//SMS API key
        $subject = "Новая заявка с сайта " . $sitename;
        $phone = trim($_POST['phone']);
        $number = time();
        $url = $_SERVER['HTTP_REFERER'];
        $course = $_POST['course-name']; 
        $price = '500p';
        $form-type = 'на запись со скидкой';
if( isset( $_POST['phone'] )){
        $message = '
<html>
<head>
    <meta charset="UTF-8">
</head>
<body style="width:94%; height:auto;">
    <table style="width:100%; max-width:600px;height:auto;vertical-align: middle;border-color:#000;border:0px;border-style:solid;border-spacing:unset;padding:0;" summary="форма заявки" rules="none" frame="border" cellpadding="0" cellspacing="0">
        <caption align="justify" style="height: 45px;">
            <h2 style="margin: 5px;font-size: 1.5rem;">Заявка с сайта</h2>
        </caption>
        <thead align="justify" style="background-color:#ddd;border-color:#000;border:1px;border-style:solid;">
            <tr style="height: 30px;">
                <td align="center" style="width:100%;" colspan="4">
                    <h3 style="margin:5px;font-size: 1.1rem;">Заявка ' . $form-type . ' ' . $number . '</h3>
                </td>
            </tr>
        </thead>
        <tbody style="font-size: 1rem;">
            <tr style="height:30px;width:auto;border-bottom: 1px solid black;">
                <td style="border-right: 1px solid #ccc;padding-left:25px;">Тип заявки:</td>
                <td style="border-left: 1px solid #ccc;padding-left:25px;">Запись со скидкой</td>
            </tr>
            <tr style="height:30px;width:auto;border-bottom: 1px solid black;">
                <td style="border-right: 1px solid #ccc;padding-left:25px;">Скидка:</td>
                <td style="border-left: 1px solid #ccc;padding-left:25px;">' . $price  . '</td>
            </tr>
            <tr style="height:30px;width:auto;border-bottom: 1px solid black;">
                <td style="border-right: 1px solid #ccc;padding-left:25px;">
                    Телефон клиента:
                </td>
                <td style="border-left: 1px solid #ccc;padding-left:25px;">'
    . $phone .
                '</td>
            </tr>
            <tr style="height:30px;width:auto;border-bottom: 1px solid black;">
                <td style="border-right: 1px solid #ccc;padding-left:25px;">
                Страница заявки 
                </td>
                <td style="border-left: 1px solid #ccc;padding-left:25px;">
                 '. $url .'
                </td>
            </tr>
            <tr style="height:90px;width:auto;">
               <td colspan="4" align="center">
                        <a href="'. get_bloginfo("url") . '/wp-admin" style="background-image: linear-gradient(55deg, #7414a7 20%, #d72f76 68%);border:none; width: 70%;padding: 16px 15px;-webkit-border-radius: 49px;border-radius: 49px;margin:16px 0;color:#fff;font-size: 1rem;text-decoration:none;font-weight:600;">Перейти к администрированию сайта</a>
               </td>
            </tr>
        </tbody>
    </table>
    <style>
        tr{
            border: black 1px;
        }
        @media screen and (min-width:768px){
            table{
                margin: auto; !important
                max-width:600px;!important
            }
        }
        
    </style>
</body>
</html>';   
}
else{
    $form-type = 'заказ курса';
    $message = '
    <html>
<head>
    <meta charset="UTF-8">
    <title>Форма обратной связи</title>
</head>
<body style="width:94%; height:auto;">
    <table style="width:100%; max-width:600px;height:auto;vertical-align: middle;border-color:#000;border:0px;border-style:solid;border-spacing:unset;padding:0;" summary="форма заявки" rules="none" frame="border" cellpadding="0" cellspacing="0">
        <caption align="justify" style="height: 45px;">
            <h2 style="margin: 5px;font-size: 1.5rem;">Заявка с сайта</h2>
        </caption>
        <thead align="justify" style="background-color:#ddd;border-color:#000;border:1px;border-style:solid;">
            <tr style="height: 30px;">
                <td align="center" style="width:100%;" colspan="4">
                    <h3 style="margin:5px;font-size: 1.1rem;">Заявка ' . $form-type . ' ' . $number . '</h3>
                </td>
            </tr>
        </thead>
        <tbody style="font-size: 1rem;">
            <tr style="height:30px;width:auto;border-bottom: 1px solid black;">
                <td style="border-right: 1px solid #ccc;padding-left:25px;">Тип заявки:</td>
                <td style="border-left: 1px solid #ccc;padding-left:25px;">Заказ курса</td>
            </tr>
            <tr style="height:30px;width:auto;border-bottom: 1px solid black;">
                <td style="border-right: 1px solid #ccc;padding-left:25px;">Курс:</td>
                <td style="border-left: 1px solid #ccc;padding-left:25px;">'. $course .'</td>
            </tr>
            <tr style="height:30px;width:auto;border-bottom: 1px solid black;">
                <td style="border-right: 1px solid #ccc;padding-left:25px;">
                    Страница заявки:
                </td>
                <td style="border-left: 1px solid #ccc;padding-left:25px;">
                    '. $url .'
                </td>
            </tr>
            <tr style="height:90px;width:auto;">
               <td colspan="4" align="center">
                        <a href="'. get_bloginfo("url") . '/wp-admin" style="background-image: linear-gradient(55deg, #7414a7 20%, #d72f76 68%);border:none; width: 70%;padding: 16px 15px;-webkit-border-radius: 49px;border-radius: 49px;margin:16px 0;color:#fff;font-size: 1rem;text-decoration:none;font-weight:600;">Перейти к администрированию сайта</a>
               </td>
            </tr>
        </tbody>
    </table>
    <style>
        tr{
            border: black 1px;
        }
        @media screen and (min-width:768px){
            table{
                margin: auto; !important
                max-width:600px;!important
            }
        }
        
    </style>
</body>
</html>';
}
$result = mail($email,$subject,$message,$headers);
var_dump($result);

//SMS API https://sms-prosto.ru/api/gotovyy-php-skript-dlya-otpravki-sms/
if(isset( $_POST['phone']) ){
    $sms_message = $subject . '\n' . 'Номер клиента:' . $phone;
}
else{
    $subject = 'Новый заказ с сайта' . $sitename;
    $sms_message = $subject . '\n' . 'На курс:' . $course;
}
$sms_result = smsapi_push_msg_nologin_key($key, $admin_phone, $sms_message, array("sender_name"=>"user"));
var_dump($sms_result);