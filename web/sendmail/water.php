<?php

require 'lib/mailer/class.phpmailer.php';
$config = require_once 'config.php';

$errorsCounter = 0;
$result = array();

if (isset($_POST)) {

    $labels = ['hotwater'=>'Горячая вода','coldwater'=>'Холодная вода','name'=>'Фамилия','appart'=>'Квартира','email'=>'E-mail'];

    try {
        if(!$_POST['seccheck2']) {
            if ($_POST['name']) {
                $mail = new PHPMailer();
                $mail->IsSMTP();
                $mail->Host       = $config['host'];
                $mail->Port       = $config['port'];
                $mail->SMTPSecure = $config['secure'];
                $mail->SMTPAuth   = true;
                $mail->Username   = $config['username'];
                $mail->Password   = $config['password'];
                $mail->SetFrom($config['username'], '');
                $mail->AddAddress($config['username'], '');
                // $mail->AddAddress('a.vafin85@gmail.com', '');
                $mail->AddBCC('test@d-idei.ru', '');
                $mail->IsHTML();
                $mail->Subject = 'Показания воды';
                $str = '';

                foreach ($_POST as $k=>$v) {
                    if(isset($labels[$k])) {
                        $str .= "<p><strong>".$labels[$k].": </strong>".$v."</p>";
                    }
                }

                $mail->Body = $str;
                if ($mail->Send())
                    echo 200;
                else var_dump($mail->ErrorInfo);

            } else {
                echo 500;
            }
        } else {
            echo 501;
        }
    } catch (phpmailerException $e) {
        echo $e->errorMessage(); //Pretty error messages from PHPMailer
    } catch (Exception $e) {
        echo $e->getMessage(); //Boring error messages from anything else!
    }
}