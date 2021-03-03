<?php
ob_start();
$API_KEY = "1525467852:AAFV-04gfek_YmE4j6KQaCIlh0oUdbl7vA4"; 
define('API_KEY',$API_KEY);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$ARMOF = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$ARMOF";
$marcus8 = file_get_contents($url); 
return json_decode($marcus8);}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$ch1 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@php88&user_id=$from_id");
$ch2 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@mroan1235&user_id=$from_id");
$check_token = file_get_contents("https://api.telegram.org/bot$text/getWebhookInfo");
$check = json_decode($check_token);
$get_file = file_get_contents('mroan.php');
$get_done = file_get_contents('make/ex.txt');
$name = $message->from->first_name;
$ch = "otlop12" ; //معرف قناتك دون @
$admin = "1593178008" ; //ايديك



if($text ==  'افلام' or $text == 'الافلام'){
    bot( sendMessage ,[
     chat_id =>$chat_id,
     text => "أهلا بك في قائمه الافلام
     
     اختار نوع الافلام اللتي ترغب في مشاهدتها
    "
     ,
     reply_markup =>json_encode([
     inline_keyboard =>[
    [['text'=> ' افلام عربي' ,callback_data => 'arabic'],[ 'text' => 'افلام اجنبي .',callback_data => 'english' ]],
    ]
    ])
    ]);
    }
    
    
    
//افلام عربي


if($data=="arabic"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"
-أهلا بك في الافلام العربي

اختار فيلم وسيتم ارساله اليك 

.
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎
[ • اضغط هنا وتابع جديدنا ، 🐋؛](https://t.me//$ch)",
'disable_web_page_preview'=> true ,
 'parse_mode'=>"Markdown",
 'reply_markup'=>json_encode([
 'inline_keyboard'=>[
[['text'=>"علي بابا",'callback_data'=>'aly']],
[['text'=>"زكي شان",'callback_data'=>'zky'],['text'=>"بابا",'callback_data'=>'baba']],
[['text'=>"وقفه رجاله",'callback_data'=>'wk'],['text'=>"الخطه العايمه",'callback_data'=>'ktt']],
[['text'=>"رجوع",'callback_data'=>'home']],
]
])
]);
}


//فيلم

if($data == "aly"){
bot('sendvideo',[
'chat_id'=>$chat_id2, 
'video'=>"https://t.me/nnnhdjfr/704",
'reply_to_message_id'=>$message->message_id,
]);
}


   if($data=="home"){
bot('editMessageText',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message_id,
 'text'=>"اهلا بك في الافلام  ..
     
     اختار نوع الافلام اللتي ترغب في مشاهدتها
    "
     ,
     reply_markup =>json_encode([
     inline_keyboard =>[
    [['text'=> ' افلام عربي' ,callback_data => 'arabic'],[ 'text' => 'افلام اجنبي .',callback_data => 'english' ]],
    ]
    ])
    ]);
    }

if($data == "zky"){
   bot('sendvideo',[
    'chat_id'=>$chat_id2,
 'video'=>"https://t.me/nnnhdjfr/707",
reply_to_message_id =>$message->message_id, 
]);
}

if($data == "baba"){
   bot('sendvideo',[
    'chat_id'=>$chat_id2,
 'video'=>"https://t.me/nnnhdjfr/710",
reply_to_message_id =>$message->message_id, 
]);
}

if($data == "wk"){
   bot('sendvideo',[
    'chat_id'=>$chat_id2,
 'video'=>"https://t.me/nnnhdjfr/716",
reply_to_message_id =>$message->message_id, 
]);
}

if($data == "ktt"){
   bot('sendvideo',[
    'chat_id'=>$chat_id2,
 'video'=>"https://t.me/nnnhdjfr/719",
reply_to_message_id =>$message->message_id, 
]);
}