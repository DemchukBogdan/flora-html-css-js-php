<?php

/* https://api.telegram.org/bot1475864264:AAH9a0xFMBhQOIrlHTHtaGrgJPIqtjzs7T8/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$select = $_POST['user_select'];
$token = "1443891538:AAEcrOe2jL8Ad0udV004-1GScONvjuRHr50";
$chat_id = "-1001418617640";
if($select == 1){
  $city = "Київ";
};
if($select == 2){
  $city = "Житомир";
};
if($select == 3){
  $city = "Вінниця";
};
if($select == 4){
  $city = "Чернігів";
};
if($select == 5){
  $city = "Шепетівка";
};
if($select == 6){
  $city = "Новоград-Волинський";
};
if($select == 7){
  $city = "Коростень";
};
if($select == 8){
  $city = "Бровари";
};
if($select == 9){
  $city = "Бердичів";
};

$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Місто ' => $city
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

if($select == 1){

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
};

if($select == 2){

  $token = "1465185551:AAFAjgvqyCH-ApDbriK7UXM6EMTg1_MqOts";
  $chat_id = "-1001169698851";


  $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
  
  if ($sendToTelegram) {
    header('Location: thank-you.html');
  } else {
    echo "Error";
  }
  };

  if($select == 3){

    $token = "1414843155:AAGtaDkQpcLn9G0-91IOxR7KU2-SzgNaIkU";
    $chat_id = "-1001347196286";
  
  
    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
    
    if ($sendToTelegram) {
      header('Location: thank-you.html');
    } else {
      echo "Error";
    }
    };

    if($select == 4){

      $token = "1465313539:AAHohqIQ4x2xion3Fx4J--CMC3jPhR64-_A";
      $chat_id = "-1001188545863";
    
    
      $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
      
      if ($sendToTelegram) {
        header('Location: thank-you.html');
      } else {
        echo "Error";
      }
      };

      if($select == 5){

        $token = "1497145185:AAH07Ae8V89anPAnQpie17NCHmx-MFqNLi4";
        $chat_id = "-1001361586438";
      
      
        $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
        
        if ($sendToTelegram) {
          header('Location: thank-you.html');
        } else {
          echo "Error";
        }
        };

        if($select == 6){

          $token = "1495676637:AAF7K6o6hxuknbXHwzyd9ExK6z3gtJNnHLw";
          $chat_id = "-1001200702519";
        
        
          $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
          
          if ($sendToTelegram) {
            header('Location: thank-you.html');
          } else {
            echo "Error";
          }
          };

          if($select == 7){

            $token = "1455626866:AAF4g1cYM36YhQrGNC3lZ-9QOpKocKM5PGs";
            $chat_id = "-1001471093729";
          
          
            $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
            
            if ($sendToTelegram) {
              header('Location: thank-you.html');
            } else {
              echo "Error";
            }
            };


            if($select == 8){

              $token = "1475864264:AAH9a0xFMBhQOIrlHTHtaGrgJPIqtjzs7T8";
              $chat_id = "-405730499";
            
            
              $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
              
              if ($sendToTelegram) {
                header('Location: thank-you.html');
              } else {
                echo "Error";
              }
              };


              if($select == 9){

                $token = "1424809892:AAF4pWT1cKtEAhsFz_RAn3Xuth2hl2r5cHs";
                $chat_id = "-411137844";
              
              
                $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
                
                if ($sendToTelegram) {
                  header('Location: thank-you.html');
                } else {
                  echo "Error";
                }
                }
                else {
                  header('Location: index.html');
                }
?>