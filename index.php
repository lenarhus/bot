<?php
$connect = mysqli_connect('a0160954.xsph.ru:3306','a0160954_bazis','Ghjcnjq2','a0160954_bazis');
if(!$connect) exit();

$output = json_decode(file_get_contents('php://input'),true);
$id = $output['message']['chat']['id'];
$message = $output['message']['text'];
$token = "332809777:AAHjqELf5LmeTgrqxWIp5BxtsTIi9upLsl4";

function sendMessage($token, $id, $message)
{
    file_get_contents("https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $id . "&text=" . $message);
}

if($message == "/start")
{
    $message = "Выполнили!";
    mysqli_query($connect, "INSERT INTO `users` (`id`, `email`, `pass`, `money`, `data`, `ref`) VALUES (NULL, 'piska', 'pisya', '1515', CURRENT_TIMESTAMP, NULL)");
    sendMessage($token, $id, $message);
}




file_put_contents("logs.txt",$connection);


function KeyboardMenu(){
    $buttons = [['Женя'],['Катя']];
    $keyboard =json_encode($keyboard = ['keyboard' => $buttons,
        'resize_keyboard' => true,
        'one_time_keyboard' => false,
        'selective' => true]);
    $reply_markup = '&reply_markup=' . $keyboard . '';

    return $reply_markup;
}
?>
