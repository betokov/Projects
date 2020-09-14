<?php
require_once 'vendor/autoload.php';

if($_POST['title'] == 'terras') {



	$to = "amra_sk@mail.ru";
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$name = $_POST['name'];
	$message = $_POST['message'];
	$square =$_POST['square'];
	$price = $_POST['price'];
	$files = $_POST['files'];
	$model = $_POST['model'];
	$size = $_POST['size'];
	$color = $_POST['color'];
	$texture = $_POST['texture'];
	$how = $_POST['how'];
	$forma = $_POST['forma'];
	$aside = $_POST['aside'];
	$bside = $_POST['bside'];

	if(isset($_POST['cside'])) {
		$cside = $_POST['cside'];
	}

	if(isset($_POST['message'])) {
		$message = $_POST['message'];
	}

	if(isset($_POST['dside'])) {
		$dside = $_POST['dside'];
	}

	if(isset($_POST['eside'])) {
		$eside = $_POST['eside'];
	}

	if(isset($_POST['options'])) {
		$options = $_POST['options'];
	}

	if(isset($_POST['stepmodel'])) {
		$stepmodel = $_POST['stepmodel'];
		$stepscol = $_POST['stepscol'];
		$lengthstep = $_POST['lengthstep'];
		$colorstep = $_POST['colorstep'];
	}

    if(!empty($name) && !empty($phone)&& !empty($email)) {
        $sendmessage = "<p><strong>Имя:</strong> ".$name."</p>\r\n";
        $sendmessage .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
        $sendmessage .= "<p><strong>Email:</strong> ".$email."</p>\r\n";
        if($message) {
            $sendmessage .= "<p><strong>Сообщение:</strong> ".$message."</p>\r\n";;
        }
        $sendmessage .= "<p><strong>Цена:</strong> ".$price."</p>\r\n";
        $sendmessage .= "<p><strong>Площадь:</strong> ".$square."</p>\r\n";
        $sendmessage .= "<p><strong>Модель доски</strong> ".$model."</p>\r\n";
        $sendmessage .= "<p><strong>Размер доски </strong> ".$size."</p>\r\n";
        $sendmessage .= "<p><strong>Цвет доски</strong> ".$color."</p>\r\n";
        $sendmessage .= "<p><strong>Текстура доски</strong> ".$texture."</p>\r\n";
        $sendmessage .= "<p><strong>Способ укладки</strong> ".$how."</p>\r\n";
        $sendmessage .= "<p><strong>Форма террасы</strong> ".$forma."</p>\r\n";
        $sendmessage .= "<p><strong>Сторона А</strong> ".$aside."</p>\r\n";
        $sendmessage .= "<p><strong>Сторона Б</strong> ".$bside."</p>\r\n";

        if($cside) {
         $sendmessage .= "<p><strong>Сторона С</strong> ".$cside."</p>\r\n";
     }
     if($dside) {
         $sendmessage .= "<p><strong>Сторона D</strong> ".$dside."</p>\r\n";
     }
     if($eside) {
         $sendmessage .= "<p><strong>Сторона Е</strong> ".$eside."</p>\r\n";
     }

     if($options) {
         $sendmessage .= "<p><strong>Опции</strong> ".$options."</p>\r\n";
     }

     if($stepmodel) {
        $sendmessage .= "<p><strong>Параметры лестницы:</strong></p>\r\n";
        $sendmessage .= "<p><strong>Модель лестницы</strong> ".$stepmodel."</p>\t\r\n";
        $sendmessage .= "<p><strong>Размер лестницы</strong> ".$lengthstep."</p>\t\r\n";
        $sendmessage .= "<p><strong>Цвет лестницы</strong> ".$colorstep."</p>\t\r\n";
    }
}




try {

    $transport = (new Swift_SmtpTransport('smtp.mail.ru', 465, 'ssl'))
    ->setUsername('betokov93@mail.ru')
    ->setPassword('w5]4=^R0')
    ;

// Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

// Create a message
    $message = (new Swift_Message('Калькулятор террас'))

    ->setFrom(['betokov93@mail.ru' => 'Betokov Barasbi'])
    ->setTo(['web_masters_07@mail.ru', 'amra_sk@mail.ru' => 'A name'])
    ->setBody($sendmessage, 'text/html')
    ;


    for ($i=0; $i < count($_FILES['files']['name']); $i++) {
        $message->attach(
            Swift_Attachment::fromPath($_FILES['files']['tmp_name'][$i])->setFilename($_FILES['files']['name'][$i])
        );
    }

// Send the message
    $mailer->send($message);

}
catch (Exception $ex) {
    echo $ex -> getMessage();
}
}

if($_POST['title'] == 'fence') {

	$to = "amra_sk@mail.ru";
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$name = $_POST['name'];
	$square =$_POST['square'];
	$price = $_POST['price'];
	$model = $_POST['model'];
	$size = $_POST['size'];
	$color = $_POST['color'];
	$texture = $_POST['texture'];
	$length = $_POST['length'];
	$width = $_POST['width'];
	$door1 = $_POST['door'];
	$door2 = $_POST['door2'];


	if(isset($_POST['message'])) {
		$message = $_POST['message'];
	}
	if(isset($_POST['options'])) {
		$options = $_POST['options'];
	}

	if(isset($_POST['doorName'])) {
		$doorName = $_POST['doorName'];
		$doorSize = $_POST['doorSize'];
	}



    if(!empty($name) && !empty($phone)&& !empty($email)) {
       if(!empty($name) && !empty($phone)&& !empty($email)) {
        $sendmessage = "<p><strong>Имя:</strong> ".$name."</p>\r\n";
        $sendmessage .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
        $sendmessage .= "<p><strong>Email:</strong> ".$email."</p>\r\n";
        if($message) {
            $sendmessage .= "<p><strong>Сообщение:</strong> ".$message."</p>\r\n";
        }
        $sendmessage .= "<p><strong>Цена:</strong> ".$price."</p>\r\n";
        $sendmessage .= "<p><strong>Модель:</strong> ".$model."</p>\r\n";
        $sendmessage .= "<p><strong>Размер:</strong> ".$size."</p>\r\n";
        $sendmessage .= "<p><strong>Цвет:</strong> ".$color."</p>\r\n";
        $sendmessage .= "<p><strong>Текстура:</strong> ".$texture."</p>\r\n";
        $sendmessage .= "<p><strong>Высота:</strong> ".$length."</p>\r\n";
        $sendmessage .= "<p><strong>Ширина:</strong> ".$width."</p>\r\n";
        $sendmessage .= "<p><strong>Нужны ли ворота:</strong> ".$door1."</p>\r\n";
        $sendmessage .= "<p><strong>Нужна ли калитка:</strong> ".$door2."</p>\r\n";
        if($options) {
            $sendmessage .= "<p><strong>Опции</strong> ".$options."</p>\r\n";
        }
        if($doorName) {
            $sendmessage .= "<p><strong>Ворота: </strong>".$doorName.", ".$doorSize."</p>";
        }
    }
}


try {

    $transport = (new Swift_SmtpTransport('smtp.mail.ru', 465, 'ssl'))
    ->setUsername('betokov93@mail.ru')
    ->setPassword('w5]4=^R0')
    ;

// Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

// Create a message
    $message = (new Swift_Message('Калькулятор заборов'))

    ->setFrom(['betokov93@mail.ru' => 'Betokov Barasbi'])
    ->setTo(['web_masters_07@mail.ru', 'amra_sk@mail.ru' => 'A name'])
    ->setBody($sendmessage, 'text/html')
    ;


    for ($i=0; $i < count($_FILES['files']['name']); $i++) {
        $message->attach(
            Swift_Attachment::fromPath($_FILES['files']['tmp_name'][$i])->setFilename($_FILES['files']['name'][$i])
        );
    }

// Send the message
    $mailer->send($message);
}

catch (Exception $ex) {
    echo $ex -> getMessage();
}
}

