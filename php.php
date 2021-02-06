<?php

error_reporting(0);

ob_start();

$bot_id = "1525467852"; // ايدي بوتك

$admmm = "1593178008";

$tbbots = "MahmoudM2"; 

$API_KEY = "1525467852:AAFF5gcahhtHUXpaCsLxEb2doEjJFq9lj4U";
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $iBadlz = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$iBadlz";
        $iBadlz = file_get_contents($url);
        return json_decode($iBadlz);
}

$Dev = array("$admmm","1183747742");// حط ايدي مطور ثاني بدل الاصفار
@$channel = "phprim";
@$token = API_KEY;
$buyy = "@$tbbots";

@$update = json_decode(file_get_contents('php://input'));
@$message = $update->message;
@$from_id = $message->from->id;
@$from_ud = $message->from->id;
@$chat_id = $message->chat->id;
@$message_id = $message->message_id;
@$first_name = $message->from->first_name;
$name = $message->from->first_name;
@$last_name = $message->from->last_name;
@$username = $message->from->username;
$text = $message->text;
@$firstname = $update->callback_query->from->first_name;
@$usernames = $update->callback_query->from->username;
@$chatid = $update->callback_query->message->chat->id;
@$fromid = $update->callback_query->from->id;
@$membercall = $update->callback_query->id;
@$reply = $update->message->reply_to_message->forward_from->id;
@$data = $update->callback_query->data;
@$messageid = $update->callback_query->message->message_id;
@$tc = $update->message->chat->type;
@$gpname = $update->callback_query->message->chat->title;
@$namegroup = $update->message->chat->title;
@$texxt = $update->inline_qurey->qurey;
@$newchatmemberid = $update->message->new_chat_member->id;
@$newchatmemberu = $update->message->new_chat_member->username;
@$rt = $update->message->reply_to_message;
@$re = $update->message->reply_to_message;
@$replyid = $update->message->reply_to_message->message_id;
@$tedadmsg = $update->message->message_id;
@$edit = $update->edited_message->text;
@$re_id = $update->message->reply_to_message->from->id;
@$re_user = $update->message->reply_to_message->from->username;
@$re_name = $update->message->reply_to_message->from->first_name;
@$re_msgid = $update->message->reply_to_message->message_id;
@$re_chatid = $update->message->reply_to_message->chat->id;
@$message_edit_id = $update->edited_message->message_id;
@$chat_edit_id = $update->edited_message->chat->id;
@$edit_for_id = $update->edited_message->from->id;
@$edit_chatid = $update->callback_query->edited_message->chat->id;
@$caption = $update->message->caption;
@$statjson = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
@$status = $statjson['result']['status'];
@$hj = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id),true);
@$you = $hj['result']['status'];
@$statjsonrt = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_id),true);
@$statusrt = $statjsonrt['result']['status'];
@$statjsonq = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chatid&user_id=".$fromid),true);
@$statusq = $statjsonq['result']['status'];
@$info = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_edit_id&user_id=".$edit_for_id),true);
@$yyou = $info['result']['status'];
@$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=@".$channel."&user_id=".$from_id));
@$tch = $forchannel->result->status;
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
@$settings2 = json_decode(file_get_contents("data/$chatid.json"),true);
@$editgetsettings = json_decode(file_get_contents("data/$chat_edit_id.json"),true);
@$user = json_decode(file_get_contents("data/user.json"),true);
@$filterget = $settings["filterlist"];
$can_change_info_rply = $statjsonrt['result']['can_change_info'];
$can_delete_messages_rply =  $statjsonrt['result']['can_delete_messages'];
$can_restrict_members_rply = $statjsonrt['result']['can_restrict_members'];
$can_invite_users_rply = $statjsonrt['result']['can_invite_users'];
$can_pin_messages_rply = $statjsonrt['result']['can_pin_messages'];
$can_promote_members_rply = $statjsonrt['result']['can_promote_members'];
$new = $message->new_chat_member;
$idBot = $bot_id;
$infos = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=$idBot"), true);
$bot = $infos['result']['status'];
$can_bot_chang_info = $infos['result']['can_change_info'];
$can_bot_delete =  $infos['result']['can_delete_messages'];
$can_bot_restrict = $infos['result']['can_restrict_members'];
$can_bot_invite = $infos['result']['can_invite_users'];
$can_bot_pin = $infos['result']['can_pin_messages'];
$can_bot_promote = $infos['result']['can_promote_members'];
$allmsg = file_get_contents("data/allmsg.txt");
$allmsgpv = file_get_contents("data/allmsgpv.txt");
/*===== فاكشن =====*/
function objectToArrays($object)
    {
        if (!is_object($object) && !is_array($object)) {
            return $object;
        }
        if (is_object($object)) {
            $object = get_object_vars($object);
        }
        return array_map("objectToArrays", $object);
    }
if ($tc == 'private'){  
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($from_id, $user["userlist"])) {
$user["userlist"][]="$from_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
    }
}

elseif ($tc == 'group' | $tc == 'supergroup'){  
@$user = json_decode(file_get_contents("data/user.json"),true);
if(!in_array($chat_id, $user["grouplist"])) {
$user["grouplist"][]="$chat_id";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
    }
}
if(strpos($text, "صورتي") !== false){
$n = str_replace("صورتي ", "", $text);
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$from_id));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][$n-1][0]["file_id"];
if($e == 0){
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📛┇› لايوجد لديك اي صورة ✓",
]);
}
else{
if($n <= $e){
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$f,
'caption'=>"صورتك عزيزي رقم $n 💙🙈",
]);
}
else{
  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"انت لاتمتلك $n من الصور",
]);
}
}
}
if(strpos($text, "جلب صورة") !== false){
$n = str_replace("جلب صورة ", "", $text);
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$n));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][0][0]["file_id"];
if($e == 0){
bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
• العضو { $n }
📛┇› لايوجد لديه اي صوره ✓
",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
else
{
if($e != 0){
bot("sendphoto",[
"photo"=>"$f",
'chat_id'=>$chat_id,
	'caption'=>"
📌❉ تم جلب صورة • { $n } •
" ,
]);
}}}
if(strpos($text, "صورته") !== false){
$n = str_replace("صورته ", "", $text);
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$re_id));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][0][0]["file_id"];
if($e == 0){
bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
• العضو { $re_id }
📛┇› لايوجد لديه اي صوره ✓
",
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
else
{
if($e != 0){
bot("sendphoto",[
"photo"=>"$f",
'chat_id'=>$chat_id,
	'caption'=>"
📌❉ تم جلب صورة • { $re_id } •
" ,
]);
}}}
if ($text && $tc == "supergroup" ){
$newmessg = $allmsg + 1;
file_put_contents("data/allmsg.txt","$newmessg");
}
if ($text && $tc == "private" ){
$newmessg = $allmsgpv + 1;
file_put_contents("data/allmsgpv.txt","$newmessg");
}

if( $text=="/start" &&  $tc == "private" or $text=="🔙  رجوع" &&  $tc == "private" ){
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📦┇› اهلا بڪ عزيـزي المطـور 🍁
📫┇› اليـڪ اعـداداتك الخاصه 🗳
⚙┇› تستطيع التحـكم بها الان 🛠

📮┇› مطور السـورس @ieoooo 👨‍✈️
• ملاحظة:/ قم بتفعيل نظام البوت خدمي من الكيبورد ثم قم بوضع شرط التفعيل للعد 10 اوراي عدد تريده لكي يتم تفعيل البوت في المجموعات
[وضع شرط التفعيل ثم ارسال العدد]
ادخل للقناة لتتعلم اكثر » @phprim
",
     'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
'keyboard'=>[
[
['text'=>"👥┇› عدد المشترڪين"],['text'=>"📙┇› عدد الجـروبات"]
],
[
['text'=>"🤹‍♀┇› وضع كليشة مـطور"],['text'=>"🎖┇› وضع اسم للبـوت"]
],
[
['text'=>"📙┇› قائمة الردود العامه "]
],
[
['text'=>"➕┇› اضف رد"],["text"=>"➖┇› حذف رد"],['text'=>"🗑┇› حذف الردود"]
],
[
['text'=>"🖇┇› روابـط الجروبــات"],['text'=>"🎲┇› الاحصـائيات"]
],
[
['text'=>"📨┇› اذﻉـة خاص"],['text'=>"📨┇› اذﻉـة جروبات"]
],
[
['text'=>"💡┇› تفعيل البوت خدمي"]
],
[
['text'=>"📨┇› توجيـہه خاص"],['text'=>"📨┇› توجيـہه جروبات"]
],
[
['text'=>"💡┇› تفعيل البوت للمطور"]
],
[
['text'=>"⚜┇› تعيين الترحيب"],['text'=>"💧┇› حذف الترحيب"],['text'=>""]                            
],
[
['text'=>"💧┇› جلب الترحيب"]
],
[
['text'=>"💟┇› تعيين الستارت"],['text'=>""],['text'=>"✅┇› حذف الستارت"]                            
],
[
['text'=>"✅┇› جلب الستارت"]
],
[
['text'=>"📮┇› تعيين رد التواصل"],['text'=>""],['text'=>"🗂┇› حذف رد التواصل"]                            
],
[
['text'=>"🗂┇› جلب رد التواصل"]
],
],
  'resize_keyboard'=>true
])
]);
}
}
$Twassl = file_get_contents("twassl.txt");
$Twasl = file_get_contents("twasl.txt");
if($text != "/start" and $Twasl == null and !in_array($from_id,$Dev)){
if($tc == 'private'){
    bot('forwardMessage',[
        'chat_id'=>$Dev[0],
        'from_chat_id'=>$chat_id,
  'message_id'=>$update->message->message_id,
'text'=>$text,
    ]);
    bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"
📮❉ تم ارسال رسالتك لـ المطور ✓
📬❉ معرف المطور » $buyy",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
        'reply_to_message_id'=>$message->message_id,
        'reply_markup'=>json_encode([
          'inline_keyboard'=>[  
                [['text'=>'• اصنع بوت ، لك 🔱','url'=>'https://t.me/KENAEBOT']],
               ]
        ])
    ]);
}
}
$Twassl = file_get_contents("twassl.txt");
$Twasl = file_get_contents("twasl.txt");
if($text != "/start" and $Twasl != null and !in_array($from_id,$Dev)){
if($tc == 'private'){
    bot('forwardMessage',[
        'chat_id'=>$Dev[0],
        'from_chat_id'=>$chat_id,
  'message_id'=>$update->message->message_id,
'text'=>$text,
    ]);
    bot('sendmessage',[
       'chat_id'=>$chat_id,
        'text'=>"
$Twasl",
'parse_mode'=>"markdown",
'disable_web_page_preview'=>true,
        'reply_to_message_id'=>$message->message_id,
        'reply_markup'=>json_encode([
          'inline_keyboard'=>[  
                [['text'=>'• اصنع بوت ، لك 🔱','url'=>'https://t.me/KENAEBOT']],
               ]
        ])
    ]);
}
}
if($message->reply_to_message->forward_from->id and in_array($from_id,$Dev)){
    bot('sendMessage',[
       'chat_id'=>$message->reply_to_message->forward_from->id,
        'text'=>$text,
    ]);
    bot('sendmessage',[
       'chat_id'=>$Dev[0],
        'text'=>"
• تم ارسال رسالتك •",
]);
}
elseif($text =="🎲┇› الاحصـائيات" or $text == "الاحصائيات"){
	if (in_array($from_id,$Dev) or in_array($from_id,$developer)) {
$users = count($user["userlist"]);
$group = count($user["grouplist"]);
$allc = $group + $users;
				bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"
👨‍💻┇› اهلا بك عزيــزي 🍂
♻✣ اليك احصائيات بوتك :-
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍✈️┇› عدد المشتركين  ‹ $users › ➺
💬┇› عدد الجروبات ‹ $group › ➺
🚸┇› عدد رسائل الخاص ‹ $allmsgpv › ➺
",
                'hide_keyboard'=>true,
		]);
		}}
$new = $message->new_chat_member;
$newbot = $update->message->new_chat_member;
$wel = file_get_contents("wel.txt");
if ($new and $new->id == $bot_id and $wel == null) {
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"👨‍✈️❉ اهلا انا اسمي $namebot 🎗
🏅❉ عملي هو حماية مجموعتك •
☢❉ من الاعلانات والتفليش ..الخ •
🔰❉ خالي من الاعلانات وآمن •

⚜❉ ارفعني ادمن وارسل تفعيل •
🔱❉ مطوري › $buyy ✅
♻️",
'reply_to_message_id'=>$message->message_id
]);}
$wel = file_get_contents("wel.txt");
if ($new and $new->id == $bot_id and $wel != null) {
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
$wel",
'reply_to_message_id'=>$message->message_id
]);}
elseif($text =="👥┇› عدد المشترڪين" or $text == "المشتركين"){
	if (in_array($from_id,$Dev) or in_array($from_id,$developer)) {
$users = count($user["userlist"]);
$group = count($user["grouplist"]);
$allc = $group + $users;
				bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"
👨‍💻┇› اهلا بك عزيــزي 🍂
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍✈️┇› عدد المشتركين  ‹ $users › ➺
",
                'hide_keyboard'=>true,
		]);
		}}
elseif($text =="📙┇› عدد الجـروبات" or $text == "عدد الجروبات" or $text == "الجروبات"){
	if (in_array($from_id,$Dev) or in_array($from_id,$developer)) {
$users = count($user["userlist"]);
$group = count($user["grouplist"]);
$allc = $group + $users;
				bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"
👨‍💻┇› اهلا بك عزيــزي 🍂
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
💬┇› عدد الجروبات ‹ $group › ➺
",
                'hide_keyboard'=>true,
		]);
		}}
elseif ($text  == '📨┇› اذﻉـة خاص' && in_array($from_id,$Dev)) {
$users = count($user["userlist"]);
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
🔱✣ ارسل رسالتك الان ✓
🚸✣ ليتم ارسالها الى $users مشترك !!",
	  'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"🔙  رجوع"] 
	]
   ],
      'resize_keyboard'=>true
   ])
 ]);
$user["userjop"]["$from_id"]["file"]="senduser";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
elseif ($text  == '📨┇› اذﻉـة جروبات' && in_array($from_id,$Dev)) {
$group = count($user["grouplist"]);
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
🔱✣ ارسل رسالتك الان ✓
🚸✣ ليتم ارسالها الى $group جروب !!",
	  'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"🔙  رجوع"] 
	]
   ],
      'resize_keyboard'=>true
   ])
 ]);
$user["userjop"]["$from_id"]["file"]="sendgroup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
elseif ($text  == '📨┇› اذﻉـة عام' && in_array($from_id,$Dev)) {
$group = count($user["grouplist"]);
$users = count($user["userlist"]);
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
🔱✣ ارسل رسالتك الان ✓
🚸✣ ليتم ارسالها الى $group جروب و $users عضو !!",
	  'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"🔙  رجوع"] 
	]
   ],
      'resize_keyboard'=>true
   ])
 ]);
$user["userjop"]["$from_id"]["file"]="sendall";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
elseif ($text  == '📨┇› توجيـہه جروبات' && in_array($from_id,$Dev)) {
$group = count($user["grouplist"]);
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
🔱✣ قم بتوجيه رسالتك الان ✓
🚸✣ ليتم توجيهها الى $group جروب !!",
	  'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"🔙  رجوع"] 
	]
   ],
      'resize_keyboard'=>true
   ])
 ]);
$user["userjop"]["$from_id"]["file"]="forwardgroup";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
elseif ($text  == '📨┇› توجيـہه عام' && in_array($from_id,$Dev)) {
$group = count($user["grouplist"]);
$users = count($user["userlist"]);
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
🔱✣ قم بتوجيه رسالتك الان ✓
🚸✣ ليتم توجيهها الى $group جروب و $users عضو !!
",
	  'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"🔙  رجوع"] 
	]
   ],
      'resize_keyboard'=>true
   ])
 ]);
$user["userjop"]["$from_id"]["file"]="forall";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
elseif ($text  == '📨┇› توجيـہه خاص' && in_array($from_id,$Dev)) {
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
🔱✣ وججه رسالتك الان ✓
🚸✣ ليتم توجيهها الى $users مشترك !!",
				  'reply_to_message_id'=>$message_id,
				   'reply_markup'=>json_encode([
    'keyboard'=>[
	[
	['text'=>"🔙  رجوع"] 
	]
   ],
      'resize_keyboard'=>true
   ])
    		]);
$user["userjop"]["$from_id"]["file"]="forwarduser";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}


elseif ($user["userjop"]["$from_id"]["file"] == 'forwarduser') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["userlist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($text  != "رجوع  🔙") {
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"تم ارسال الرسالة بنجاح ✔️",
	  'reply_to_message_id'=>$message_id,
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
Forward($numbers[$z], $chat_id,$message_id);
}
}
}
elseif ($user["userjop"]["$from_id"]["file"] == 'forwardgroup') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["grouplist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($text  != "رجوع  🔙") {
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>" تم ارسال الرسالة بنجاح✔️",
	  'reply_to_message_id'=>$message_id,
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
Forward($numbers[$z], $chat_id,$message_id);
}
}
}
elseif ($user["userjop"]["$from_id"]["file"] == 'sendgroup') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["grouplist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($text  != "رجوع  🔙") {
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"تم ارسال رسالتك بنجاح ✔️",
	  'reply_to_message_id'=>$message_id,
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
     bot('sendmessage',[
          'chat_id'=>$numbers[$z],        
		  'text'=>"$text ",
        ]);
}
}
}
elseif ($user["userjop"]["$from_id"]["file"] == 'senduser') {
$user["userjop"]["$from_id"]["file"]="none";
$numbers = $user["userlist"];
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);	
if ($text  != "رجوع  🔙") {
         bot('sendmessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"تم ارسال رسالتك بنجاح ✔️",
	  'reply_to_message_id'=>$message_id,
 ]);
for($z = 0;$z <= count($numbers)-1;$z++){
     bot('sendmessage',[
          'chat_id'=>$numbers[$z],        
		  'text'=>"$text ",
        ]);
}
}
}
$twasl = file_get_contents("twasl.txt");
if($text=="🗂┇› جلب رد التواصل" and $twasl == null){
if($tc == "private"){
if( in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📮❉ تم ارسال رسالتك لـ المطور ✓
📬❉ معرف المطور » $buyy
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"",'url'=>"t.me/GRT16BOT"]],
]])
]);
}}}
$twasl = file_get_contents("twasl.txt");
if($text=="🗂┇› جلب رد التواصل" and $twasl != null){
if($tc == "private"){
if( in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$twasl
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"",'url'=>"t.me/GRT16BOT"]],
]])
]);
}}}
$wel = file_get_contents("wel.txt");
if($text=="💧┇› جلب الترحيب" and $wel == null){
if($tc == "private"){
if( in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
👨‍✈️❉ اهلا انا اسمي $namebot 🎗
🏅❉ عملي هو حماية مجموعتك •
☢❉ من الاعلانات والتفليش ..الخ •
🔰❉ خالي من الاعلانات وآمن •

⚜❉ ارفعني ادمن وارسل تفعيل •
🔱❉ مطوري › $buyy ✅
♻️
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"",'url'=>"t.me/GRT16BOT"]],
]])
]);
}}}
$wel = file_get_contents("wel.txt");
if($text=="💧┇› جلب الترحيب" and $wel != null){
if($tc == "private"){
if( in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$wel
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
 'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"",'url'=>"t.me/GRT16BOT"]],
]])
]);
}}}

$setnamebot = file_get_contents("setname.txt");
$namebot = file_get_contents("namebot.txt");
if ($text == "🎖┇› وضع اسم للبـوت" or $text == "وضع اسم للبوت" and in_array($from_id,$Dev)){
file_put_contents("setname.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال اسم لي الان !!
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $setnamebot =="nam" and in_array($from_id,$Dev)){
file_put_contents("namebot.txt",$text); 
file_put_contents("setname.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🚸✣ تم حفظ الاسم بنجاح ✓
🔱✣ اسمي الان  ❨ $text ❩
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
$Twassl = file_get_contents("twassl.txt");
$Twasl = file_get_contents("twasl.txt");
if ($text == "📮┇› تعيين رد التواصل" or $text == "تعيين رد التواصل" and in_array($from_id,$Dev)){
file_put_contents("twassl.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال الرد الان !!
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $Twassl =="nam" and in_array($from_id,$Dev)){
file_put_contents("twasl.txt",$text); 
file_put_contents("twassl.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🚸✣ تم حفظ الرد بنجاح ✓
🔱✣ اصبح الان  ❨ $text ❩
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
$kock = file_get_contents("kock.txt");
$kocke = file_get_contents("kocke.txt");
if ($text == "وضع عدد التفعيل" or $text == "وضع شرط التفعيل" and in_array($from_id,$Dev)){
file_put_contents("kock.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال العدد الان !!
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $kock =="nam" and in_array($from_id,$Dev)){
file_put_contents("kocke.txt",$text); 
file_put_contents("kock.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🚸✣ تم حفظ العدد بنجاح ✓
🔱✣ اصبح الان  ❨ $text ❩
• لن يستطيع احد تفعيل مجموعته اذا كانت اقل من $text عضو ✓
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}

$wel = file_get_contents("wel.txt");
$well = file_get_contents("well.txt");
if ($text == "⚜┇› تعيين الترحيب" or $text == "تعيين الترحيب" and in_array($from_id,$Dev)){
file_put_contents("well.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال الترحيب الان !!
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $well =="nam" and in_array($from_id,$Dev)){
file_put_contents("wel.txt",$text); 
file_put_contents("well.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🚸✣ تم حفظ الترحيب بنجاح ✓
🔱✣ اصبح الان  ❨ $text ❩
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
mkdir("data/$chat_id");
$setlink = file_get_contents("data/$chat_id/set.txt");
$linktxt = file_get_contents("data/$chat_id/link.txt");
if ($text == "وضع رابط" or $text == "ضع رابط"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
file_put_contents("data/$chat_id/set.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال الرابط الان !!
",
 'reply_to_message_id'=>$message_id
,]);}}}
if($text && $setlink =="nam"){
if($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ($tc == 'group' | $tc == 'supergroup'){
file_put_contents("data/$chat_id/link.txt",$text); 
file_put_contents("data/$chat_id/set.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🚸✣ تم حفظ الرابط بنجاح ✓
🔱✣ اصبح الان  ❨ $text ❩
",
 'reply_to_message_id'=>$message_id
,]);}}}
$sek = file_get_contents("sek.txt");
$sekk = file_get_contents("sekk.txt");
if ($text == "تفعيل البوت خدمي" or $text == "💡┇› تفعيل البوت خدمي" and in_array($from_id,$Dev)){
file_put_contents("sek.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ ارسل نعم للتاكيد !!
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text == "نعم" && $sek =="nam" and in_array($from_id,$Dev)){
file_put_contents("sekk.txt","متاح"); 
file_put_contents("sek.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🚸✣ تم تغيير نظام البوت ✓
🔱✣ اصبح الان  ❨ متاح ❩
• يستطيع اي شخص تفعيل المجموعة بدون الحاجه لك 
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
$sek = file_get_contents("sek.txt");
$sekk = file_get_contents("sekk.txt");
if ($text == "تفعيل البوت للمطور" or $text == "💡┇› تفعيل البوت للمطور" and in_array($from_id,$Dev)){
file_put_contents("sek.txt","namm");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ ارسل نعم للتاكيد !!
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text == "نعم" && $sek =="namm" and in_array($from_id,$Dev)){
file_put_contents("sekk.txt","للمطور"); 
file_put_contents("sek.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🚸✣ تم تغيير نظام البوت ✓
🔱✣ اصبح الان  ❨ للمطور فقط ❩
• انت فقط تستطيع تفعيل المجموعات 
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
$startt = file_get_contents("start.txt");
$starttext = file_get_contents("starttxt.txt");
if ($text == "💟┇› تعيين الستارت" or $text == "تعيين الستارت" and in_array($from_id,$Dev)){
file_put_contents("start.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال الكليشه الان !!
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $startt =="nam" and in_array($from_id,$Dev)){
file_put_contents("starttxt.txt",$text); 
file_put_contents("start.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
🚸✣ تم حفظ الكليشه ✓
🔱✣ اصبحت الان  ❨ $text ❩
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if ($text == "✅┇› حذف الستارت" or $text == "حذف الستارت" and in_array($from_id,$Dev)){
file_put_contents("starttxt.txt","");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ تم بنجاح حذف كليشه الستارت
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if ($text == "💧┇› حذف الترحيب" or $text == "حذف الترحيب" and in_array($from_id,$Dev)){
file_put_contents("wel.txt","");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ تم بنجاح حذف كليشه الترحيب
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if ($text == "🗂┇› حذف رد التواصل" or $text == "حذف رد التواصل" and in_array($from_id,$Dev)){
file_put_contents("twasl.txt","");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ تم بنجاح حذف كليشه رد التواصل
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
$s = json_decode(file_get_contents('http://www.api-hany.cf/time?GTM=Asia/Baghdad&lang=ar'),true);
$time = $s["time"];
$date = $s["date"];
$day = $s["day"];
$mon = $s["month"];
$t24 = $s["time24"];
$dayhj = $s["hijri"]["day"];
$monhj = $s["hijri"]["month"];
$yearhj = $s["hijri"]["year"];
if($text == "الوقت" or $text == "الساعة" or $text == "الساعه"){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"
🕐❉ الوقت الان -: $time {$t24}
",
'parse_mode'=>"MarkDown",'disable_web_page_preview'=>true,
]);
}
$s = json_decode(file_get_contents('http://www.api-hany.cf/time?GTM=Asia/Baghdad&lang=ar'),true);
$time = $s["time"];
$date = $s["date"];
$day = $s["day"];
$mon = $s["month"];
$t24 = $s["time24"];
$dayhj = $s["hijri"]["day"];
$monhj = $s["hijri"]["month"];
$yearhj = $s["hijri"]["year"];
if($text == "كم التاريخ" or $text == "تاريخ" or $text == "التاريخ"){
bot('sendMessage',['chat_id'=>$chat_id,'text'=>"
📆❉ التاريخ » $date
📅❉التاريخ العربي » *$dayhj*/*$monhj*/*$yearhj*
",
'parse_mode'=>"MarkDown",'disable_web_page_preview'=>true,
]);
}
$fre = file_get_contents("data/$chat_id/sett.txt");
if ($text == "صمملي" or $text == "صمم"){
file_put_contents("data/$chat_id/sett.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال اسمك الان !!
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $fre =="nam"){
file_put_contents("data/$chat_id/sett.txt","");
bot("sendPhoto",[
"chat_id"=>$chat_id,
"photo" => "https://rta10.ir/creatphoto/api/api.php?text=$text&color=white&size=130&RL=10&UD=0&RO=0&picaddrs=799273845/pic/file_8973.jpg&font=Adab.ttf",
'caption'=>"
🚸✣ تم تصميم الاسم بنجاح ✓
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
$linksg = file_get_contents("links.txt");
$namesg = file_get_contents("lonks.txt");
if ($text == "🖇┇› روابـط الجروبــات" or $text == "روابط الجروبات"){
file_put_contents("fre.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ اليك روابط المجموعات :-

[$namesg]($linksg)",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message_id
,]);}

$freee = file_get_contents("freee.txt");
if ($text == "زخرفه" or $text == "زخرفة" or $text == "زخرفلي"){
file_put_contents("freee.txt","nam");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال اسمك الان !!
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $freee =="nam"){
file_put_contents("freee.txt","");
$get = json_decode(file_get_contents("https://api-bots.000webhostapp.com/api/ZH.php?text=$text"));
$z = $get->result->z;
$z1 = $get->result->z1;
$z2 = $get->result->z2;
$z3 = $get->result->z3;
$z4 = $get->result->z4;
$z5 = $get->result->z5;
$z6 = $get->result->z6;
$z7 = $get->result->z7;
$z8 = $get->result->z8;
$z9 = $get->result->z9;
$z10 = $get->result->z10;
$z11 = $get->result->z11;
$z12 = $get->result->z12;
$z13 = $get->result->z13;
$z14 = $get->result->z14;
$z15 = $get->result->z15;
$z16 = $get->result->z16;
$z17 = $get->result->z17;
$z18 = $get->result->z18;
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
`$z `
`$z1 `
`$z2 `
`$z3 `
`$z4 `
`$z5 `
`$z6 `
`$z7 `
`$z8`
`$z9 `
`$z10 `
`$z11 `
`$z12 `
`$z13 `
`$z14 `
`$z15 `
`$z16 `
`$z17 `
`$z18 `
*-------------*
🚸✣ تم زخرفة الاسم بنجاح ✓
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text == "بوت" || $text == "ايش اسمك" || $text == "شسمك" || $text == "مسمك" and $namebot == NULL){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"⁉✣ لم يتم تسميتي بعد ☹💔"
,'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id,
]);}}
if($text == "بوت" || $text == "ايش اسمك" || $text == "شسمك" || $text == "مسمك" and $namebot != NULL){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"آإسسمي $namebot 🌚☄"
,'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id,
]);}}

$kdeveloper = file_get_contents("kdevelopers.txt");
$kdevelopers = file_get_contents("kdeveloper.txt");
if ($text == "🤹‍♀┇› وضع كليشة مـطور" || $text == "وضع كليشة المطور" and in_array($from_id,$Dev)){
file_put_contents("kdevelopers.txt","namdev");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"
👨‍✈️✣ قم بارسال كليشة للمطور الان !!
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text && $kdeveloper =="namdev" and in_array($from_id,$Dev)){
file_put_contents("kdeveloper.txt",$text); 
file_put_contents("kdevelopers.txt","");
bot("sendmessage",[
"chat_id"=>$chat_id,
"text" => "
👨‍✈️✣ تم حفظ كليشتك ✓

`$text`
 ",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text == "المطور" and $kdevelopers != null || $kdevelopers != " "){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"$kdevelopers",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message_id,
]);}}
if($text == "المطور"and $kdevelopers == null || $kdevelopers == " "){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
🍁✣ لم يتم وضع كليشة للمطور ✗",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 'reply_to_message_id'=>$message_id,
]);}}

$message_id = $update->message->message_id;
$user          = $update->message->from->username;

/*
الاوامر كتٱلي : 
- اضف رد ، مسح رد ، الردود ، مسح الردود 
- اضف رد عام ، مسح رد عام ، الردود العامه ، مسح الردود العامه
*/

mkdir("data");
mkdir("data/addrd");

$opption = file_get_contents("data/addrd/$chat_id/opption.txt");
$get_from_id = file_get_contents("data/addrd/$chat_id/from_id.txt");
$get_rd = file_get_contents("data/addrd/$chat_id/getrd.txt");
$opption_ = file_get_contents("data/addrd/opption.txt");
$get_from_id1_ = file_get_contents("data/addrd/from_id.txt");
$I_get_rd = file_get_contents("data/addrd/getrd.txt");
$get_from_id_1 = explode("\n",$get_from_id1_);
$get_from_id_ = explode("\n",$get_from_id);



if($status == "creator" || $status == "administrator" || in_array($from_id,$Dev) || in_array($from_id,$useradmin) || in_array($from_id,$getCCmember) ) {
if($text == "اضف رد"){
	
mkdir("data/addrd/$chat_id");
mkdir("data/addrd/$chat_id/media");
mkdir("data/addrd/$chat_id/media/sticker");
mkdir("data/addrd/$chat_id/media/video");
mkdir("data/addrd/$chat_id/media/videonote");
mkdir("data/addrd/$chat_id/media/document");
mkdir("data/addrd/$chat_id/media/photo");
mkdir("data/addrd/$chat_id/media/audio");
mkdir("data/addrd/$chat_id/media/contact");

 file_put_contents("data/addrd/$chat_id/from_id.txt",$from_id);
 file_put_contents("data/addrd/$chat_id/opption.txt","GG1ZZ");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"📭¦ حسننا , الان ارسل كلمه الرد 
-",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($text and in_array($from_id,$get_from_id_) and $opption == "GG1ZZ"){
 	file_put_contents("data/addrd/$chat_id/opption.txt","IBADLZ");
     file_put_contents("data/addrd/$chat_id/mod.txt",$text);
     file_put_contents("data/addrd/$chat_id/media/media.txt",$text);
     file_put_contents("data/addrd/$chat_id/getrd.txt", "- ". $text . "\n" , FILE_APPEND);
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
📜¦ جيد , يمكنك الان ارسال جواب الرد 
🔛¦ [ نص,صوره,فيديو,متحركه,بصمه,اغنيه ] ✓
- 
",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($message and in_array($from_id,$get_from_id_) and $opption == "IBADLZ"){
  file_put_contents("data/addrd/$chat_id/opption.txt","");
  $IB_3ADLZ = file_get_contents("data/addrd/$chat_id/mod.txt");
  $IB_4ADLZ = file_get_contents("data/addrd/$chat_id/media/media.txt");

  $IB_2ADLZ = fopen("data/addrd/$chat_id/mod.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_2ADLZ, "$IB_3ADLZ\n");
   fclose($IB_2ADLZ);
   
   $IB_5ADLZ = fopen("data/addrd/$chat_id/media/media.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_5ADLZ, "$IB_4ADLZ\n");
   fclose($IB_5ADLZ);
   
   file_put_contents("data/addrd/$chat_id/$IB_3ADLZ.txt",$text);
   file_put_contents("data/addrd/$chat_id/mod.txt","");
   file_put_contents("data/addrd/$chat_id/media/media.txt","");
   file_put_contents("data/addrd/$chat_id/media/$IB_4ADLZ.txt",$message->voice->file_id);
   file_put_contents("data/addrd/$chat_id/media/sticker/$IB_4ADLZ.txt",$message->sticker->file_id );
   file_put_contents("data/addrd/$chat_id/media/document/$IB_4ADLZ.txt",$message->document->file_id);
   file_put_contents("data/addrd/$chat_id/media/videonote/$IB_4ADLZ.txt",$message->video_note->file_id);
   file_put_contents("data/addrd/$chat_id/media/contact/$IB_4ADLZ.txt",$message->contact->phone_number);
   file_put_contents("data/addrd/$chat_id/media/video/$IB_4ADLZ.txt",$message->video->file_id);
   file_put_contents("data/addrd/$chat_id/media/photo/$IB_4ADLZ.txt",$message->photo[0]->file_id);
   file_put_contents("data/addrd/$chat_id/media/audio/$IB_4ADLZ.txt",$message->audio->file_id );
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*مقفول️ تم ٱضافةهہ الرد بنجٱح ،*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 if($text == "مسح رد"){
 file_put_contents("data/addrd/$chat_id/from_id.txt",$from_id);
 file_put_contents("data/addrd/$chat_id/opption.txt","delete");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*📭¦ حسننا عزيزي  ✋🏿
🗯¦ الان ارسل الرد لمسحها من  للمجموعه 🍃*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 if(file_exists("data/addrd/$chat_id/$text.txt") and in_array($from_id,$get_from_id_) and $opption == "delete"){
 	$str = str_replace("- $text","",$get_rd);
     file_put_contents("data/addrd/$chat_id/getrd.txt",$str);
      file_put_contents("data/addrd/$chat_id/from_id.txt","");
      file_put_contents("data/addrd/$chat_id/opption.txt","");
 	unlink("data/addrd/$chat_id/$text.txt");
     unlink("data/addrd/$chat_id/media/$text.txt");
     unlink("data/addrd/$chat_id/media/sticker/$text.txt");
     unlink("data/addrd/$chat_id/media/video/$text.txt");
     unlink("data/addrd/$chat_id/media/videonote/$text.txt");
     unlink("data/addrd/$chat_id/media/document/$text.txt");
     unlink("data/addrd/$chat_id/media/photo/$text.txt");
     unlink("data/addrd/$chat_id/media/audio/$text.txt");
     unlink("data/addrd/$chat_id/media/contact/$text.txt");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*($text)
  ✓ تم مسح الرد 🚀* ",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
elseif(!file_exists("data/addrd/$chat_id/$text.txt") and in_array($from_id,$get_from_id_) and $opption == "delete"){
	file_put_contents("data/addrd/$chat_id/from_id.txt","");
    file_put_contents("data/addrd/$chat_id/opption.txt","");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*💬¦ هذا الرد ليس مضاف في قائمه الردود 📛*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }

if($text == "مسح الردود"){
$links = __DIR__ . "/data/addrd/$chat_id";
$media = __DIR__ . "/data/addrd/$chat_id/media";
$media_contact = __DIR__ . "/data/addrd/$chat_id/media/contact";
$media_document = __DIR__ . "/data/addrd/$chat_id/media/document";
$media_video = __DIR__ . "/data/addrd/$chat_id/media/video";
$media_videonote = __DIR__ . "/data/addrd/$chat_id/media/videonote";
$media_photo = __DIR__ . "/data/addrd/$chat_id/media/photo";
$media_sticker = __DIR__ . "/data/addrd/$chat_id/media/sticker";
$media_audio = __DIR__ . "/data/addrd/$chat_id/media/audio";


$files = scandir($links);
$files_media = scandir($media);
$files_media_contact = scandir($media_contact);
$files_media_document = scandir($media_document);
$files_media_video = scandir($media_video);
$files_media_videonote = scandir($media_videonote);
$files_media_photo = scandir($media_photo);
$files_media_sticker = scandir($media_sticker);
$files_media_audio = scandir($media_audio);

foreach ($files as $file) {
if(is_file($links . "/" . $file)){
	unlink ($links . "/" .$file);
}
}
foreach ($files_media as $filemedia) {
if(is_file($media . "/" . $filemedia)){
	unlink ($media . "/" .$filemedia);
}
}
foreach ($files_media_contact as $file_media_contact) {
if(is_file($media_contact . "/" . $file_media_contact)){
	unlink ($media_contact . "/" .$file_media_contact);
}
}
foreach ($files_media_document as $file_media_document) {
if(is_file($media_document . "/" . $file_media_document)){
	unlink ($media_document . "/" .$file_media_document);
}
}
foreach ($files_media_video as $file_media_video) {
if(is_file($media_video . "/" . $file_media_video)){
	unlink ($media_video . "/" .$file_media_video);
}
}
foreach ($files_media_videonote as $file_media_videonote) {
if(is_file($media_videonote . "/" . $file_media_videonote)){
	unlink ($media_videonote . "/" .$file_media_videonote);
}
}
foreach ($files_media_photo as $file_media_photo) {
if(is_file($media_photo . "/" . $file_media_photo)){
	unlink ($media_photo . "/" .$file_media_photo);
}
}
foreach ($files_media_sticker as $file_media_sticker) {
if(is_file($media_sticker . "/" . $file_media_sticker)){
	unlink ($media_sticker . "/" . $file_media_sticker);
}
}
foreach ($files_media_audio as $file_media_audio) {
if(is_file($media_audio . "/" . $file_media_audio)){
	unlink ($media_audio . "/" . $file_media_audio);
}
}
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*✓ تم مسح كل الردود 🚀*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
file_put_contents("data/addrd/$chat_id/getrd.txt", "");
}


if($text == "الردود" and $get_rd != NULL and $get_rd != "" and $get_rd != " " and $get_rd != "\n\n" and $get_rd != "\n" and $get_rd != "\n\n\n" and $get_rd != "\n\n\n\n" and $get_rd != "\n\n\n\n\n" and $get_rd != "\n\n\n\n\n\n"){
	bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*💬¦ ردود البوت في المجموعه  :

$get_rd

➖➖➖*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "الردود" and $get_rd == NULL || $get_rd == "" || $get_rd == " " || $get_rd == "\n\n" || $get_rd == "\n" || $get_rd == "\n\n\n" || $get_rd == "\n\n\n\n" || $get_rd == "\n\n\n\n\n" || $get_rd == "\n\n\n\n\n\n"){
	bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*🚸¦ لا يوجد ردود مضافه حاليا 
❕*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if(in_array($from_id,$Dev)){
if($text == "اضف رد عام" || $text == "➕┇› اضف رد"){
mkdir("data/addrd/media");
mkdir("data/addrd/$chat_id/media");
mkdir("data/addrd/media/sticker");
mkdir("data/addrd/media/video");
mkdir("data/addrd/media/videonote");
mkdir("data/addrd/media/document");
mkdir("data/addrd/media/photo");
mkdir("data/addrd/media/audio");
mkdir("data/addrd/media/contact");

 file_put_contents("data/addrd/from_id.txt",$from_id);
 file_put_contents("data/addrd/opption.txt","I_GG1ZZ");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"📭¦ حسننا , الان ارسل كلمه الرد 
-",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 if($text and in_array($from_id,$get_from_id_1) and $opption_ == "I_GG1ZZ"){
 	file_put_contents("data/addrd/opption.txt","I_BADLZ");
     file_put_contents("data/addrd/mod.txt",$text);
     file_put_contents("data/addrd/media/media.txt",$text);
     file_put_contents("data/addrd/getrd.txt", "- ". $text . "\n" , FILE_APPEND);
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"📜¦ جيد , يمكنك الان ارسال جواب الرد 
🔛¦ [ نص,صوره,فيديو,متحركه,بصمه,اغنيه ] ✓
-",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 
 if($message and in_array($from_id,$get_from_id_1) and $opption_ == "I_BADLZ"){
  file_put_contents("data/addrd/opption.txt","");
  $IB_3ADLZ = file_get_contents("data/addrd/mod.txt");
  $IB_4ADLZ = file_get_contents("data/addrd/media/media.txt");

  $IB_2ADLZ = fopen("data/addrd/mod.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_2ADLZ, "$IB_3ADLZ\n");
   fclose($IB_2ADLZ);
   
   $IB_5ADLZ = fopen("data/addrd/media/media.txt", "a") or die("Unable to open file!"); 
   fwrite($IB_5ADLZ, "$IB_4ADLZ\n");
   fclose($IB_5ADLZ);
   
   file_put_contents("data/addrd/$IB_3ADLZ.txt",$text);
   file_put_contents("data/addrd/mod.txt","");
   file_put_contents("data/addrd/media/media.txt","");
   file_put_contents("data/addrd/media/$IB_4ADLZ.txt",$message->voice->file_id);
   file_put_contents("data/addrd/media/sticker/$IB_4ADLZ.txt",$message->sticker->file_id );
   file_put_contents("data/addrd/media/document/$IB_4ADLZ.txt",$message->document->file_id);
   file_put_contents("data/addrd/media/videonote/$IB_4ADLZ.txt",$message->video_note->file_id);
   file_put_contents("data/addrd/media/contact/$IB_4ADLZ.txt",$message->contact->phone_number);
   file_put_contents("data/addrd/media/video/$IB_4ADLZ.txt",$message->video->file_id);
   file_put_contents("data/addrd/media/photo/$IB_4ADLZ.txt",$message->photo[0]->file_id);
   file_put_contents("data/addrd/media/audio/$IB_4ADLZ.txt",$message->audio->file_id );
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"* تم ٱضافةهہ الرد بنجٱح ،*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 if($text == "مسح رد عام" || $text == "➖┇› حذف رد" || $text == "حذف رد عام"){
 file_put_contents("data/addrd/from_id.txt",$from_id);
 file_put_contents("data/addrd/opption.txt","I_delete");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*📭¦ حسننا عزيزي  ✋🏿
🗯¦ الان ارسل الرد لمسحها من  للمجموعه 🍃*",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 if(file_exists("data/addrd/$text.txt") and in_array($from_id,$get_from_id_1) and $opption_ == "I_delete"){
 	$str = str_replace("- $text","",$I_get_rd);
     file_put_contents("data/addrd/getrd.txt",$str);
      file_put_contents("data/addrd/from_id.txt","");
      file_put_contents("data/addrd/opption.txt","");
 	unlink("data/addrd/$text.txt");
     unlink("data/addrd/media/$text.txt");
     unlink("data/addrd/media/sticker/$text.txt");
     unlink("data/addrd/media/video/$text.txt");
     unlink("data/addrd/media/videonote/$text.txt");
     unlink("data/addrd/media/document/$text.txt");
     unlink("data/addrd/media/photo/$text.txt");
     unlink("data/addrd/media/audio/$text.txt");
     unlink("data/addrd/media/contact/$text.txt");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*($text)
  ✓ تم مسح الرد 🚀* ",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 elseif(!file_exists("data/addrd/$text.txt") and in_array($from_id,$get_from_id_1) and $opption_ == "I_delete"){
	file_put_contents("data/addrd/from_id.txt","");
    file_put_contents("data/addrd/opption.txt","");
 bot("SendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"*🚸¦ لا يوجد ردود مضافه حاليا *",
 'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message->message_id, 
 ]);
 }
 
 if($text == "مسح الردود العامه" || $text == "🗑┇› حذف الردود"){
$links = __DIR__ . "/data/addrd";
$media = __DIR__ . "/data/addrd/media";
$media_contact = __DIR__ . "/data/addrd/media/contact";
$media_document = __DIR__ . "/data/addrd/media/document";
$media_video = __DIR__ . "/data/addrd/media/video";
$media_videonote = __DIR__ . "/data/addrd/media/videonote";
$media_photo = __DIR__ . "/data/addrd/media/photo";
$media_sticker = __DIR__ . "/data/addrd/media/sticker";
$media_audio = __DIR__ . "/data/addrd/media/audio";


$files = scandir($links);
$files_media = scandir($media);
$files_media_contact = scandir($media_contact);
$files_media_document = scandir($media_document);
$files_media_video = scandir($media_video);
$files_media_videonote = scandir($media_videonote);
$files_media_photo = scandir($media_photo);
$files_media_sticker = scandir($media_sticker);
$files_media_audio = scandir($media_audio);

foreach ($files as $file) {
if(is_file($links . "/" . $file)){
	unlink ($links . "/" .$file);
}
}
foreach ($files_media as $filemedia) {
if(is_file($media . "/" . $filemedia)){
	unlink ($media . "/" .$filemedia);
}
}
foreach ($files_media_contact as $file_media_contact) {
if(is_file($media_contact . "/" . $file_media_contact)){
	unlink ($media_contact . "/" .$file_media_contact);
}
}
foreach ($files_media_document as $file_media_document) {
if(is_file($media_document . "/" . $file_media_document)){
	unlink ($media_document . "/" .$file_media_document);
}
}
foreach ($files_media_video as $file_media_video) {
if(is_file($media_video . "/" . $file_media_video)){
	unlink ($media_video . "/" .$file_media_video);
}
}
foreach ($files_media_videonote as $file_media_videonote) {
if(is_file($media_videonote . "/" . $file_media_videonote)){
	unlink ($media_videonote . "/" .$file_media_videonote);
}
}
foreach ($files_media_photo as $file_media_photo) {
if(is_file($media_photo . "/" . $file_media_photo)){
	unlink ($media_photo . "/" .$file_media_photo);
}
}
foreach ($files_media_sticker as $file_media_sticker) {
if(is_file($media_sticker . "/" . $file_media_sticker)){
	unlink ($media_sticker . "/" . $file_media_sticker);
}
}
foreach ($files_media_audio as $file_media_audio) {
if(is_file($media_audio . "/" . $file_media_audio)){
	unlink ($media_audio . "/" . $file_media_audio);
}
}
bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*✓ تم مسح كل الردود 🚀*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
file_put_contents("data/addrd/getrd.txt", "");
}


if($text == "الردود العامه" || $text == "📙┇› قائمة الردود العامه " and $I_get_rd != NULL and $I_get_rd != "" and $I_get_rd != " " and $I_get_rd != "\n\n" and $I_get_rd != "\n" and $I_get_rd != "\n\n\n" and $I_get_rd != "\n\n\n\n" and $I_get_rd != "\n\n\n\n\n" and $I_get_rd != "\n\n\n\n\n\n"){
	bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"*💬¦ الردود العامه في البوت :

$I_get_rd

➖➖➖*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "الردود العامه" || $text == "📙┇› قائمة الردود العامه" and $I_get_rd == NULL || $I_get_rd == "" || $I_get_rd == " " || $I_get_rd == "\n\n" || $I_get_rd == "\n" || $I_get_rd == "\n\n\n" || $I_get_rd == "\n\n\n\n" || $I_get_rd == "\n\n\n\n\n" || $I_get_rd == "\n\n\n\n\n\n"){
	bot("SendMessage",[
'chat_id'=>$chat_id,
'text'=>"🚸¦ لا يوجد ردود مضافه حاليا ❕*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
}


if($message->text and file_exists("data/addrd/$text.txt")) {
    $MoStaFa = file_get_contents("data/addrd/$text.txt");
   bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>$MoStaFa,
    'parse_mode'=>"MARKDOWN",
    'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/media/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/media/$text.txt");
   bot('Sendvoice',[
    'chat_id'=>$chat_id,
    'voice'=>$MoStaFa,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/media/audio/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/media/audio/$text.txt");
 bot('SendAudio',[
    'chat_id'=>$chat_id,
    'audio'=>$MoStaFa,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }
 if($message->text and file_exists("data/addrd/media/sticker/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/media/sticker/$text.txt");
 bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>$MoStaFa,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/video/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/media/video/$text.txt");
bot('Sendvideo',[
'chat_id'=>$chat_id,
'video'=>$MoStaFa,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/photo/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/media/photo/$text.txt");
bot('Sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$MoStaFa,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/videonote/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/media/videonote/$text.txt");
 bot('Sendvideonote',[
'chat_id'=>$chat_id,
'video_note'=>$MoStaFa,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/document/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/media/document/$text.txt");
 bot('SendDocument',[
'chat_id'=>$chat_id,
'document'=>$MoStaFa,
'reply_to_message_id'=>$message->message_id,
]);
}
if($message->text and file_exists("data/addrd/media/contact/$text.txt")) {
 $MoStaFa = file_get_contents("data/addrd/media/contact/$text.txt");
bot('SendContact',[
'chat_id'=>$chat_id,
'phone_number'=>$MoStaFa,
'first_name'=>$message->from->first_name,
'last_name'=>$message->from->last_name,
'reply_to_message_id'=>$message->message_id,
]);
 }
 //♥
 if($settings["lock"]["rdodsg"] == "مقفول"){
 if($message->text and file_exists("data/addrd/$chat_id/$text.txt")) {
    $MoStaFa = file_get_contents("data/addrd/$chat_id/$text.txt");
   bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>$MoStaFa,
    'parse_mode'=>"MARKDOWN",
    'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }}
$startt = file_get_contents("start.txt");
$starttext = file_get_contents("starttxt.txt");
if($text=="/start" and $starttext == null){
if($tc == "private"){
if( !in_array($from_id,$Dev) && !in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
مرحبا بك في بوت حمايه الكروبات

🦁┇[TeaM KAYDO](https://t.me/joinchat/AAAAAE58wesWACXAfmMV_Q)

",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
]);
}}}
$starttext = file_get_contents("starttxt.txt");
if($text=="/start" and $starttext != null){
if($tc == "private"){
if( !in_array($from_id,$Dev) && !in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$starttext
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
  'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"مطور بوت $namebot 👮",'url'=>"t.me/GRT16BOT"]],
]])
]);
}}}

$startt = file_get_contents("start.txt");
$starttext = file_get_contents("starttxt.txt");
if($text=="✅┇› جلب الستارت" and $starttext == null){
if($tc == "private"){
if( in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
مرحبا بك في بوت حمايه الكروبات

🦁┇[TeaM KAYDO](https://t.me/joinchat/AAAAAE58wesWACXAfmMV_Q)

",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
]);
}}}
$starttext = file_get_contents("starttxt.txt");
if($text=="✅┇› جلب الستارت" and $starttext != null){
if($tc == "private"){
if(in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$starttext
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
  }}
$re         = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;

// info developers //
$developers_info = file_get_contents("data/developers/developer.txt");
$developer = explode ("\n",$developers_info);
$developers_infos = file_get_contents("data/developers/developers.txt");
$developers = explode("\n",$developers_infos);
$list_developers ="";
$list_developers = $list_developers."*➺*".$developers_infos."\n➖➖➖➖➖➖➖\n📨¦ الٱيـديـٱت :\n" ."*➺*`".$developers_info . "`";
// info mangers //
$mangers_info = file_get_contents("data/manger/$chat_id.txt");
$manger  = explode("\n",$mangers_info);
$mangers_infos = file_get_contents("data/manger/$chat_id/mange.txt");
$mangers = explode ("\n",$mangers_infos);
// info admins //
$admin_users_info = file_get_contents("data/admin_user/$chat_id.txt");
$admin_user  = explode("\n",$admin_users_info);
$admin_users_infos = file_get_contents("data/admin_user/$chat_id/mange.txt");
$admin_users = explode ("\n",$admin_users_infos);
// info mmaz //
$mmyazs_info = file_get_contents("data/mmyaz/$chat_id.txt");
$mmyaz  = explode("\n",$mmyazs_info);
$mmyazs_infos = file_get_contents("data/mmyaz/$chat_id/mange.txt");
$mmyazs = explode ("\n",$mmyazs_infos);
// folders auto //
mkdir("data");
mkdir("data/developers");
mkdir("data/manger");
mkdir("data/manger/$chat_id");
mkdir("data/admin_user");
mkdir("data/admin_user/$chat_id");
mkdir("data/mmyaz");
mkdir("data/mmyaz/$chat_id");
if($re and $text == "رفع مطور" and $re_id !=$id_Bot and  in_array($from_id,$Dev) and !in_array($re_id,$developer)){
			file_put_contents("data/developers/developer.txt",$re_id ."\n " , FILE_APPEND);
			file_put_contents("data/developers/developers.txt","➺ @" . $re_user . " » " . $re_id . "«" . "\n" , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🙋🏽‍♂ ❉ العضو ❨ @$re_user ❩
⚜ ❉ الايدي ❨`$re_id`❩
📮 ❉ تم رفعة مطور بنجاح ✓",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
elseif($re and $text == "رفع مطور"  and $re_id !=$id_Bot and in_array($from_id,$Dev)  and in_array($re_id,$developer)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"🙋🏽‍♂ ❉ العضو ❨ @$re_user ❩
⚜ ❉ الايدي ❨`$re_id`❩
📮 ❉ تم رفعة مطور بالفعل ✓
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
if($text == "مسح المطورين" and  in_array($from_id,$Dev)){
$cdevs = count($developers);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
*🛠 ❉ تم حذف ❨ $cdevs ❩ من المطورين ✓*
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
file_put_contents("data/developers/developer.txt"," ");
file_put_contents("data/developers/developers.txt"," ");
}
if($text == "رتبتي" and in_array($from_id,$developer)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"🥇¦› *رتــبتڪ* ›› *مطور* 👨‍🏭

🎗┇› [$name](tg://user?id=$from_id)
",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}


if($re and $text == "رفع مدير" || $text == "رفع المدير"  and !in_array($re_id,$manger)){
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
			file_put_contents("data/manger/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/manger/$chat_id/mange.txt" , " *❉* [" . "@". $re_user ."] *𓆪* " . "»" . " `". $re_id ."`". "\n" , FILE_APPEND);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"
🙋🏽‍♂ ❉ العضو ❨ @$re_user ❩
⚜ ❉ الايدي ❨`$re_id`❩
📮 ❉ تم رفعة مدير بنجاح ✓"
,'parse_mode'=>'markdown',
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
]);
}
}
if($re and $text == "رفع مدير" || $text == "رفع المدير" || $text == "رفع منشئ" || $text == "رفع المنشئ" and in_array($re_id,$manger)){
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🙋🏽‍♂ ❉ العضو ❨ @$re_user ❩
⚜ ❉ الايدي ❨`$re_id`❩
📮 ❉ تم رفعة مدير بالفعل ✓
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}
if($text == "مسح المدراء" and $mangers_info != NULL and $mangers_info != " "){
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
$cmang = count($mangers);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
*🛠 ❉ تم حذف ❨ $cmang ❩ من المدراء ✓*",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id.txt","");
file_put_contents("data/manger/$chat_id/mange.txt" ,"");
}}
if($text == "مسح المدراء" and $mangers_info == NULL or $mangers_info == " "){
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"*
📛❉ لم يتم رفع اي مدير ✗*",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
}}
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "تنزيل المدير" || $text == "تنزيل مدير"  and in_array($re_id,$manger)){
	$re_id_info = file_get_contents("data/manger/$chat_id.txt");
	$mdrs = file_get_contents("data/manger/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *❉* [" . "@". $re_user ."] *𓆪* " . "»" . " `". $re_id ."`","",$mdrs1);
	file_put_contents("data/manger/$chat_id.txt",$str);
	file_put_contents("data/manger/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
🙋🏽‍♂ ❉ العضو ❨ @$re_user ❩
⚜ ❉ الايدي ❨`$re_id`❩
📮 ❉ تم حذفه من المدراء ✓
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}
if($status == "creator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "تنزيل المدير" || $text == "تنزيل مدير" || $text == "تنزيل منشئ" || $text == "تنزيل المنشئ" and !in_array($re_id,$manger)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🙋🏽‍♂ ❉ العضو ❨ @$re_user ❩
⚜ ❉ الايدي ❨`$re_id`❩
📮 ❉ تم تنزيله من قبل ✓
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "رفع ادمن"  and !in_array($re_id,$admin_user)){
			file_put_contents("data/admin_user/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
			file_put_contents("data/admin_user/$chat_id/mange.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🙋🏽‍♂ ❉ العضو ❨ @$re_user ❩
⚜ ❉ الايدي ❨`$re_id`❩
📮 ❉ تم رفعة ادمن بنجاح ✓
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if ($re and $text == "رفع ادمن" and in_array($re_id,$admin_user)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🙋🏽‍♂ ❉ العضو ❨ @$re_user ❩
⚜ ❉ الايدي ❨`$re_id`❩
📮 ❉ تم رفعة ادمن بالفعل ✓
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($text == "مسح الادمنيه" or $text == "مسح الادمنية" ){
$cadmins = count($admin_users);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
*🛠 ❉ تم حذف ❨ $cadmins ❩ من الادمنيه ✓*",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
file_put_contents("data/admin_user/$chat_id.txt","");
	file_put_contents("data/admin_user/$chat_id/mange.txt","");
	}}
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "تنزيل ادمن" and in_array($re_id,$admin_user)){
	$re_id_info = file_get_contents("data/admin_user/$chat_id.txt");
	$admn = file_get_contents("data/admin_user/$chat_id/mange.txt");
	$admn1 = explode("             \n",$admn);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$admn1);
	file_put_contents("data/admin_user/$chat_id.txt",$str);
	file_put_contents("data/admin_user/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
🙋🏽‍♂ ❉ العضو ❨ @$re_user ❩
⚜ ❉ الايدي ❨`$re_id`❩
📮 ❉ تم تنزيله من الادمنيه ✓
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {
if($re and $text == "تنزيل ادمن"  and !in_array($re_id,$admin_user)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🙋🏽‍♂ ❉ العضو ❨ @$re_user ❩
⚜ ❉ الايدي ❨`$re_id`❩
📮 ❉ تم تنزيله من قبل ✓
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}

if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($re and $text == "رفع مميز"  and !in_array($re_id,$mmyaz)){
file_put_contents("data/mmyaz/$chat_id.txt",$re_id . "\n" , FILE_APPEND);
file_put_contents("data/mmyaz/$chat_id/mange.txt" , " *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ". "\n" , FILE_APPEND);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🙋🏽‍♂ ❉ العضو ❨ @$re_user ❩
⚜ ❉ الايدي ❨`$re_id`❩
📮 ❉ تم رفعة مميز بنجاح ✓
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($re and $text == "رفع مميز"  and in_array($re_id,$mmyaz)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🙋🏽‍♂ ❉ العضو ❨ @$re_user ❩
⚜ ❉ الايدي ❨`$re_id`❩
📮 ❉ تم رفعة مميز بالفعل ✓
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($text == "مسح المميزين" ){
$cmmyz = count($mmyazs);
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
*🛠 ❉ تم حذف ❨ $cmmyz ❩ من المميزين ✓*
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,  
]);
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id.txt","");
file_put_contents("data/mmyaz/$chat_id/mange.txt" ,"");
}}

if($re and $text == "تنزيل مميز"   and in_array($re_id,$mmyaz)){
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
	$re_id_info = file_get_contents("data/mmyaz/$chat_id.txt");
	$mdrs = file_get_contents("data/mmyaz/$chat_id/mange.txt");
	$mdrs1 = explode("             \n",$mdrs);
	$str = str_replace($re_id,"",$re_id_info);
	$str2 = str_replace(" *𓆩* [" . "@". $re_user ."] *𓆪* " . "»" . " *𓆩* `". $re_id ."` *𓆪* ","",$mdrs1);
	file_put_contents("data/mmyaz/$chat_id.txt",$str);
	file_put_contents("data/mmyaz/$chat_id/mange.txt",$str2);
	bot('SendMessage',['chat_id'=>$chat_id,
    'text'=>"
🙋🏽‍♂ ❉ العضو ❨ @$re_user ❩
⚜ ❉ الايدي ❨`$re_id`❩
📮 ❉ تم تنزيله من المميزين ✓
",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($re and $text == "تنزيل مميز" and !in_array($re_id,$mmyaz)){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🙋🏽‍♂ ❉ العضو ❨ @$re_user ❩
⚜ ❉ الايدي ❨`$re_id`❩
📮 ❉ تم تنزيله من قبل ✓
",'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
$reply = $update->message->reply_to_message;
$re_id      = $update->message->reply_to_message->from->id;
$API_KEY = API_KEY;
$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$re_id);
$info = json_decode($get, true);
$re_rou = $info['result']['status'];
$namesaeedh = $update->message->reply_to_message->from->first_name;
$usersaeedh = $update->message->reply_to_message->from->username;
$idsaeedh = $update->message->reply_to_message->from->id;


$get             = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info            = json_decode($get, true);
$JJ117        = $info['result']['status'];

$command = array("id","/id","ايدي");

$get_myid = file_get_contents("data/ids/idset.txt");
$_get_ = file_get_contents("data/ids/id.txt");
$get_ALONE = file_get_contents("data/ids/id_.txt");
$GETGG1ZZ = file_get_contents("data/ids/iBadlz.txt");
$_GG1ZZ_ = explode("\n",$GETGG1ZZ);

if($message and $tc == "supergroup"){
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+1);
file_put_contents('msgs.json', json_encode($msgs));}
$result=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getUserProfilePhotos?user_id=$from_id"),true);
$file_id=$result["result"]["photos"][0][0]["file_id"];
$count=$result["result"]["total_count"];
$game = json_decode(file_get_contents('game.json'),true);
$from_user = $message->from->username;
$from_name = $message->from->first_name;
$get_game = file_get_contents("game.txt");
$game1 = explode("\n",$get_game);
$gg1zz = array('اســرع واحد يرتب » { ل ، س ، ا ، ق ، ت ، ب ،ا } «','اســرع واحد يرتب » { ه ، ا ، ع ، ر ، ا } «','اســرع واحد يرتب » { ر ، و ، ح ، س } «','اســرع واحد يرتب » { ن ، ف ، ه ، ق } «','اســرع واحد يرتب » { و ، ن ، ي ، ا ، ف } «','اســرع واحد يرتب » { ن ، و ، ه ، ب ، ز } «','اســرع واحد يرتب » { ر ، ك ، و ، س ، ت ، ن ، ا ، ي } «','اســرع واحد يرتب » { ا ، ن ، م ، ل ، ي } «','اســرع واحد يرتب » { و ، ه ، ق ، ه } «','اســرع واحد يرتب » { ف ، ي ، س ، ه ، ن } «','اســرع واحد يرتب » { ج ، ا ، د ، ج ، ه } «','اســرع واحد يرتب » { س ، م ، ر ، د ، ه } «','اســرع واحد يرتب » { ا ، ن ، ا ، و ، ل } «','اســرع واحد يرتب » { ه ، غ ، ف ، ر ، } «','اســرع واحد يرتب » { ج ، ه ، ث ، ل ، ا } «','اســرع واحد يرتب » { خ ، م ، ب ، ط } «');
$get_iBadlz = array_rand($gg1zz, 1);

if($text =="الترتيب" or $text =="ترتيب"){
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفتوح") {
file_put_contents("game.txt",$chat_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$gg1zz[$get_iBadlz],
'reply_to_message_id'=>$message->message_id]);}}
if(in_array($chat_id,$game1) and $text == 'سحور' or $text == 'سياره'  or $text == 'استقبال'  or $text == 'قنفه'  or $text == 'ايفون'  or $text == 'بزونه' or  $text == 'مطبخ' or $text == 'كرستيانو' or $text == 'دجاجه' or $text == 'مدرسه' or $text == 'الوان' or $text == 'غرفه' or $text == 'ثلاجه' or $text == 'قهوه' or $text == 'سفينه' or $text == 'اليمن'){$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);file_put_contents('game.json', json_encode($game));bot('sendMessage',['chat_id'=>$chat_id,'text'=>"*🎉¦ مبروك لقد ربحت نقطه🔖¦ اصبح لديك { ".$game['game'][$chat_id][$from_id]." } نقطه 🍃️*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);file_put_contents("game.txt","MMoHaMMeD");}
$marks = array('الرقم 📮¦ [ 12+13-8=؟؟ ]'  ,'الرقم 📮¦ [ 22-12+3=؟؟ ]'  ,'الرقم 📮¦ [ 1+1+2+9-0-1=؟؟ ]'  ,'الرقم 📮¦ [ 100-100+100-1=؟؟ ]'  ,'الرقم 📮¦ [  76-10+9=؟؟ ]'  ,'الرقم 📮¦ [ 13+2+1+7+0=؟؟ ]'  ,'الرقم 📮¦ [ 1+19-2=؟؟ ]'  ,'الرقم 📮¦ [ 91-81+10=؟؟ ]'  ,'الرقم 📮¦ [ 11+11+0=؟؟ ]'  ,'الرقم 📮¦ [ 0-0+0-1+1=؟؟ ]'  ,'الرقم 📮¦ [ 41+1+3-1=؟؟ ]'  ,'الرقم 📮¦ [ 50+50-2=؟؟ ]'  ,'الرقم 📮¦ [ 78-1+1=؟؟ ]'  ,'الرقم 📮¦ [ 33-13+1=?? ]'  ,'الرقم 📮¦ [ 10-9+10=?? ]'); $marks_php = array_rand($marks, 1);
if($text =="رياضيات" or $text =="حساب"){
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفتوح") {
file_put_contents("game.txt",$chat_id);bot('sendMessage',['chat_id'=>$chat_id,'text'=>$marks[$marks_php],'reply_to_message_id'=>$message->message_id]);}
if(in_array($chat_id,$game1) and $text == '17' or $text == '13'  or $text == '12'  or $text == '99'  or $text == '75'  or $text == '23' or  $text == '18' or $text == '20' or $text == '1' or $text == '44' or $text == '98' or $text == '78' or $text == '21' or $text == '11' or $text == '10000' or $text == '1000'){$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);file_put_contents('game.json', json_encode($game));bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"*🎉¦ مبروك لقد ربحت نقطه
🔖¦ اصبح لديك { ".$game['game'][$chat_id][$from_id]." } نقطه 🍃️*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);file_put_contents("game.txt","MMoHaMMeD");}}
$iBadlz_smile = array('🍏','🍎','843578','9755','25677','578866','14589','🍐','🍊','🍋','🍌','🍉','🍇','🍓','🍈','🍒','🍑','🍍','🥥','🥝','🍅','🍆','🥑','🥦','🥒','🌶','🌽','🥕','🥔','🍠','🥐','🍞','🥖','🥨','🧀','🥚','🍳','🥞','🥓','🥩','🍗','🍖','🌭','🍔','🍟','🍕','🥪','🥙','🍼','☕️','🍵','🥤','🍶','🍺','🍻','🏀','⚽️','🏈','⚾️','🎾','🏐','🏉','🎱','🏓','🏸','🥅','🎰','🎮','🎳','🎯','🎲','🎻','🎸','🎺','🥁','🎹','🎼','🎧','🎤','🎬','🎨','🎭','🎪','🎟','🎫','🎗','🏵','🎖','🏆','🥌','🛷','🚕','7643','93289','3457','95439','378865','24568','9976','289','2288','2854','🚗','🚙','🚌','🚎','🏎','🚓','🚑','🚚','🚛','🚜','🇮🇶','⚔','🛡','🔮','🌡','💣','📌','📍','📓','📗','📂','📅','📪','📫','📬','📭','⏰','📺','🎚','☎️','📡');$MOD = array_rand($iBadlz_smile,1);
if($text =="سمايلات" || $text =="سمايل"){
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفتوح") {
file_put_contents("game.txt",$chat_id);bot('sendMessage',['chat_id'=>$chat_id,'text'=>"اسرع واحد يدز هذهہٓ ›› `$iBadlz_smile[$MOD]`",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);}}
if(in_array($text,$iBadlz_smile) and in_array($chat_id,$game1)){$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]+1);file_put_contents('game.json', json_encode($game));bot('sendMessage',['chat_id'=>$chat_id,'text'=>"*🎉¦ مبروك لقد ربحت نقطه🔖¦ اصبح لديك { ".$game['game'][$chat_id][$from_id]." } نقطه 🍃️*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);file_put_contents("game.txt","MMoHaMMeD");}
if($text == "نقودي" || $text == "عدد نقودي" || $text == "نقاطي" || $text == "عدد نقاطي" and $game['game'][$chat_id][$from_id]  > 0){bot('sendMessage',['chat_id'=>$chat_id,'text'=>"*📮¦ عدد النقود التي ربحتها هي » { ".$game['game'][$chat_id][$from_id]." }*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);}
if($text == "نقودي" || $text == "عدد نقودي" || $text == "نقاطي" || $text == "عدد نقاطي" and $game['game'][$chat_id][$from_id]  == NULL || $game['game'][$chat_id][$from_id]  == 0){bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"*💬¦ ليس لديك نقود ،
📬¦ للحصول ؏ النقود ،
📮¦ ارسل الالعاب وابدأ اللعب !*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id]);}
if($text == "بيع نقودي" || $text == "بيع نقاطي" || $text == "بيع النقود" || $text =="بيع النقاط" and $game['game'][$chat_id][$from_id]  >= 19 and $game['game'][$chat_id][$from_id]  != null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ تم خصم { 20 } من نقودك ،📨¦ وتم اضافة » { 200 } رساله الى رسائلك !*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, ]);
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+200);
file_put_contents('msgs.json', json_encode($msgs));
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]-20);file_put_contents('game.json', json_encode($game));
}
if($text == "بيع نقودي" || $text == "بيع نقاطي" || $text == "بيع النقود" || $text =="بيع النقاط" and $game['game'][$chat_id][$from_id]  > 49 and $game['game'][$chat_id][$from_id]  != null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ تم خصم { 50 } من نقودك ،📨¦ وتم اضافة » { 600 } رساله الى رسائلك !*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, ]);
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+600);
file_put_contents('msgs.json', json_encode($msgs));
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]-50);file_put_contents('game.json', json_encode($game));
}
if($text == "بيع نقودي" || $text == "بيع نقاطي" || $text == "بيع النقود" || $text =="بيع النقاط" and $game['game'][$chat_id][$from_id]  > 99 and $game['game'][$chat_id][$from_id]  != null){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*🎉¦ تم خصم { 100 } من نقودك ،📨¦ وتم اضافة » { 1000 } رساله الى رسائلك !*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, ]);
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]+200);
file_put_contents('msgs.json', json_encode($msgs));
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]-20);file_put_contents('game.json', json_encode($game));
}
if($text == "msg" or $text == "رسائلي"){bot('sendmessage',['chat_id'=>$chat_id,'text'=>"*  💬 ❉ رسائلك »  { ".$msgs['msgs'][$chat_id][$from_id]." } ➺*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id,]);}
elseif($text == "بيع نقودي" || $text == "بيع نقاطي" || $text == "بيع النقود" || $text =="بيع النقاط" and $game['game'][$chat_id][$from_id]  == NULL || $game['game'][$chat_id][$from_id]  < 20){bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"*⚜¦ لايمكنني بيع نقودك  ،
❗️¦ يجب ان تكون نقودك 20 فما فوق !*",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message->message_id, ]);}
mkdir("data/count");
if($status == "creator" ||  $status == "administrator" or in_array($from_id,$Dev) || in_array($from_id,$developer) || in_array($from_id,$admin_user) || in_array($from_id,$manger)) {
if($text == "المجموعه" || $text == "معلومات المجموعه" || $text == "معلومات المجموعة"){
$mem = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
$cmg = file_get_contents("data/count/$chat_id.txt");
$cmssg  = explode("\n",$cmg);
$cmsg = count($cmssg);
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🚸✣ معلومات المجموعة :-
*------------*
• ايدي المجموعة ؛ $chat_id
• اسم المجموعة ؛ $namegroup
• رابط المجموعة ؛ $getlinkde
• عدد الاعضاء ؛ $mem
• عدد الرسائل ، $message->message_id
• عدد الادمنيه ؛ $cmsg
*------------*",
'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}
if($text == "مسح رسايلي" or $text == "مسح رسائلي"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*📌✣ تم مسح { ".$msgs['msgs'][$chat_id][$from_id]." } من رسائلك ✓*",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id, ]);
$msgs = json_decode(file_get_contents('msgs.json'),true);
$update = json_decode(file_get_contents('php://input'));
$msgs['msgs'][$chat_id][$from_id] = ($msgs['msgs'][$chat_id][$from_id]=0);
file_put_contents('msgs.json', json_encode($msgs));
$game['game'][$chat_id][$from_id] = ($game['game'][$chat_id][$from_id]-20);file_put_contents('game.json', json_encode($game));
}
if( $text =="المشرفين" or $text == "المنشئين"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
👨‍✈️❉ منشى المجموعة :-
❉ $owner ➻ @$owner2

👮🏽‍♂❉ الاداريين | المشرفين :-
$msg
",
'reply_to_message_id'=>$message_id,

'parse_mode'=>"MarkDown",
 ]);
	}
}
if($text == "عرض الكل" and $mmyazs_info != NULL and $admin_users_info != NULL and $mangers_infos != NULL){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🍂❉ اهلا بك عزيزي المنشئ
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍✈️❉ المنشئ المشرفين :-
$msg
$owner
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👮🏽‍♂❉ المدراء :-
$mangers_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🔧❉ الادمنية :-
$admin_users_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🎤❉ المميزين :-
$mmyazs_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
📮❉ للاستفسار » @ieoooo ➻",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}}
if($text == "عرض الكل" and $mmyazs_info == NULL and $admin_users_info != NULL and $mangers_infos != NULL){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🍂❉ اهلا بك عزيزي المنشئ
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍✈️❉ المنشئ المشرفين :-
$msg
$owner
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👮🏽‍♂❉ المدراء :-
$mangers_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🔧❉ الادمنية :-
$admin_users_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🎤❉ المميزين :-
📛❉ لم يتم رفع اي مميز ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
📮❉ للاستفسار » @ieoooo ➻",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}}
if($text == "عرض الكل" and $mmyazs_info != NULL and $admin_users_info == NULL and $mangers_infos != NULL){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🍂❉ اهلا بك عزيزي المنشئ
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍✈️❉ المنشئ المشرفين :-
$msg
$owner
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👮🏽‍♂❉ المدراء :-
$mangers_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🔧❉ الادمنية :-
📛❉ لم يتم رفع اي ادمن ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🎤❉ المميزين :-
$mmyazs_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
📮❉ للاستفسار » @ieoooo ➻",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}}
if($text == "عرض الكل" and $mmyazs_info == NULL and $admin_users_info != NULL and $mangers_infos == NULL){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🍂❉ اهلا بك عزيزي المنشئ
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍✈️❉ المنشئ المشرفين :-
$msg
$owner
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👮🏽‍♂❉ المدراء :-
📛❉ لم يتم رفع اي مدير ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🔧❉ الادمنية :-
$admin_user_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🎤❉ المميزين :-
📛❉ لم يتم رفع اي مميز ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
📮❉ للاستفسار » @ieoooo ➻",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}}
if($text == "عرض الكل" and $mmyazs_info != NULL and $admin_users_info == NULL and $mangers_infos == NULL){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🍂❉ اهلا بك عزيزي المنشئ
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍✈️❉ المنشئ المشرفين :-
$msg
$owner
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👮🏽‍♂❉ المدراء :-
📛❉ لم يتم رفع اي مدير ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🔧❉ الادمنية :-
📛❉ لم يتم رفع اي ادمن ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🎤❉ المميزين :-
$mmyazs_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
📮❉ للاستفسار » @ieoooo ➻",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}
}}

if($text == "عرض الكل" and $mmyazs_info == NULL and $admin_users_info == NULL and $mangers_infos != NULL){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🍂❉ اهلا بك عزيزي المنشئ
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍✈️❉ المنشئ المشرفين :-
$msg
$owner
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👮🏽‍♂❉ المدراء :-
$mangers_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🔧❉ الادمنية :-
📛❉ لم يتم رفع اي ادمن ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🎤❉ المميزين :-
📛❉ لم يتم رفع اي مميز ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
📮❉ للاستفسار » @ieoooo ➻",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}}
if($text == "عرض الكل" and $mmyazs_info != NULL and $admin_users_info != NULL and $mangers_infos == NULL){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
🍂❉ اهلا بك عزيزي المنشئ
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍✈️❉ المنشئ المشرفين :-
$msg
$owner
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👮🏽‍♂❉ المدراء :-
📛❉ لم يتم رفع اي مدير ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🔧❉ الادمنية :-
$admin_users_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🎤❉ المميزين :-
$mmyazs_infos
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
📮❉ للاستفسار » @ieoooo ➻",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}}
if($text == "عرض الكل" and $mmyazs_info == NULL and $admin_users_info == NULL and $mangers_infos == NULL ){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['username'];
    }
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
}
  }
		 }
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>"
??❉ اهلا بك عزيزي المنشئ
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍✈️❉ المنشئ المشرفين :-
$msg
$owner
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👮🏽‍♂❉ المدراء :-
📛❉ لم يتم رفع اي مدير ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🔧❉ الادمنية :-
📛❉ لم يتم رفع اي ادمن ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
👨‍🎤❉ المميزين :-
📛❉ لم يتم رفع اي مميز ✗
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
📮❉ للاستفسار » @ieoooo ➻",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
]);
}}}

if( $text =="رفع الادمنيه" or $text == "رفع الادمنية"){
$cmg = file_get_contents("data/count/$chat_id.txt");
$cmssg  = explode("\n",$cmg);
$cmsg = count($cmssg);
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🧟‍♂❉ تم رفع { $cmsg } من الادمنيه ✓
",
'reply_to_message_id'=>$message_id,
 ]);
	}
}

$id = $rep->id; 
$reply = $message->reply_to_message->message_id;
$rep = $message->reply_to_message->forward_from; 

if($settings["lock"]["link"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if (strstr($text ,"t.me") == true or strstr($text ,"telegram.me") == true or strstr($caption,"t.me") == true or strstr($caption,"telegram.me")) {   
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
// lock photo
if($settings["lock"]["photo"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if ($update->message->photo){  
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
// gif
if($settings["lock"]["gif"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if ($update->message->document){  
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
// document
if($settings["lock"]["document"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if ($update->message->document){  
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
// video
if($settings["lock"]["video"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if ($update->message->video){  
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
  }
}
}
if ($settings["lock"]["ar"] == "مقفول️"){
if (strstr($text,"ض") == true  or strstr($text,"ص") == true or strstr($text,"ق") == true  or  strstr($text,"ف") == true   or strstr($text,"غ") == true or  strstr($text,"ع") == true  or strstr($text,"ه") == true or strstr($text,"خ") == true  or  strstr($text,"ح") == true   or strstr($text,"ج") == true or strstr($text,"ش") == true  or strstr($text,"س") == true or strstr($text,"ي") == true  or  strstr($text,"ب") == true   or strstr($text,"ل") == true or  strstr($text,"ا") == true  or strstr($text,"ت") == true or strstr($text,"ن") == true  or  strstr($text,"م") == true   or strstr($text,"ك") == true or strstr($text,"ظ") == true or strstr($text,"ط") == true  or  strstr($text,"ذ") == true   or strstr($text,"د") == true or  strstr($text,"ز") == true  or strstr($text,"ر") == true or strstr($text,"و") == true  or  strstr($text,"ة") == true   or strstr($text,"ث") == true or strstr($text,"ؤ") == true  or strstr($text,"ء") == true or strstr($text,"ى") == true  or  strstr($text,"ئ") == true   or strstr($text,"آ") == true or  strstr($text,"إ") == true  or strstr($text,"أ") == true ) {
if ($tc == 'group' | $tc == 'supergroup'){
if( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember)  && !in_array($from_id,$mmyaz) ){

bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
if ($settings["lock"]["en"] == "مقفول️"){
if (strstr($text,"q") == true  or strstr($text,"w") == true or strstr($text,"e") == true  or  strstr($text,"r") == true   or strstr($text,"t") == true or  strstr($text,"y") == true  or strstr($text,"u") == true or strstr($text,"i") == true  or  strstr($text,"o") == true   or strstr($text,"p") == true or strstr($text,"a") == true  or strstr($text,"s") == true or strstr($text,"d") == true  or  strstr($text,"f") == true   or strstr($text,"g") == true or  strstr($text,"h") == true  or strstr($text,"j") == true or strstr($text,"k") == true  or  strstr($text,"l") == true   or strstr($text,"z") == true or strstr($text,"x") == true or strstr($text,"c") == true  or  strstr($text,"v") == true   or strstr($text,"b") == true or  strstr($text,"n") == true  or strstr($text,"m") == true or strstr($text,"Q") == true  or  strstr($text,"X") == true   or strstr($text,"C") == true or strstr($text,"F") == true  or strstr($text,"G") == true or strstr($text,"H") == true  or  strstr($text,"A") == true   or strstr($text,"L") == true or  strstr($text,"O") == true  or strstr($text,"P") == true ) {
if ($tc == 'group' | $tc == 'supergroup'){
if( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) && !in_array($from_id,$useradmin) && !in_array($from_id,$getCCmember)  && !in_array($from_id,$mmyaz) ){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}
}
}
}
// edit 
if($editgetsettings["lock"]["edit"] == "مقفول"){
if ( $you != 'creator' && $you != 'administrator' && $edit_for_id != $Dev && $edit_for_id != $manger && $edit_for_id != $admin_user && $edit_for_id != $mmyaz && $edit_for_id != $developer){
if ($update->edited_message->text){  
bot('deletemessage',[
    'chat_id'=>$chat_edit_id,
    'message_id'=>$message_edit_id
    ]);
  }
}
}

// contact
if ($settings["lock"]["contact"] == "مقفول"){
if($update->message->contact){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
$edit_media  = $update->edited_message->message_id;
$edit_chat_id_media = $update->edited_message->chat->id;
$edit_medias  = $update->edited_message->text;
$video_media = $update->edited_message->video;
$voice_media = $update->edited_message->voice;
$photo_media = $update->edited_message->photo;
$document_media = $update->edited_message->document;
$audio_media = $update->edited_message->audio;
$location_media = $update->edited_message->location;

if ($editgetsettings["lock"]["editmd"] == "مقفول"){
	if ( $you != 'creator' && $you != 'administrator' && $edit_for_id != $Dev && $edit_for_id != $manger && $edit_for_id != $admin_user && $edit_for_id != $mmyaz && $edit_for_id != $developer){
if(edit_medias || $photo_media || $document_media || $video_media || $voice_media || $audio_media || $location_media || preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$edit_medias) ){
bot('deleteMessage',[
'chat_id'=>$edit_chat_id_media,
'message_id'=>$edit_media,
]);
}
}
}

// tag
if ($settings["lock"]["tag"] == "مقفول"){
if (strstr($text ,"#") == true or strstr($caption,"#") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}// username 
if ($settings["lock"]["username"] == "مقفول"){
if (strstr($text ,"@") == true or strstr($caption,"@") == true) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
// audio
if ($settings["lock"]["audio"] == "مقفول"){
if($update->message->audio){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
// voice 
if ($settings["lock"]["voice"] == "مقفول"){
if($update->message->voice){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
if ($settings["lock"]["markdown"] == "مقفول"){
if($update->message->entities){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}


if($settings["lock"]["bot"] == "مقفول"){
if ($message->new_chat_member->is_bot) {
$hardmodebot = $settings["information"]["hardmodebot"];
if($hardmodebot == "مفتوح"){
 bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
  }
else
{
 bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
   bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$from_id
  ]);
}
}
}
// sticker
if ($settings["lock"]["sticker"] == "مقفول"){
if($update->message->sticker){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
if ($settings["lock"]["iduser"] == "مقفول"){
$iduserr = $update->message->text;
if($iduserr == "ايدي"){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
📛❉ امر ‹ ايدي › تم تعطيله ✗",
    ]);
	}
}
}
}
// forward
if ($settings["lock"]["forward"] == "مقفول"){
if($update->message->forward_from | $update->message->forward_from_chat){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
// fosh 
if ($settings["lock"]["fosh"] == "مقفول"){
if (strstr($text ,"كس") == true  or strstr($text ,"زب") == true or strstr($text ,"اير") == true  or  strstr($text ,"شرموطة") == true   or strstr($text ,"طيز") == true or strstr($text ,"كسمك") == true or strstr($text ,"كسختك") == true or strstr($text ,"مشتهيه") == true or strstr($text ,"مشتهية") == true  ) {
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
if ($settings["lock"]["getlink"] == "مقفول"){
$getlinkk = $update->message->text;
if($getlinkk == "الرابط"){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
📛❉ لايمكنني اعطائك الرابط ☹👊
🔱❉ بسبب منع المدراء عن ذالك ☹💔",
    ]);
	}
}
}
}
if ($settings["lock"]["zhr"] == "مقفول"){
$zhrr = $update->message->text;
if($zhrr == "زخرفه" or $zhrr == "زخرفة"){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
📛❉ لايمكنني الزخرفة ✗
🚫❉ المدير قام بمنعي عن ذالك 💔",
    ]);
	}
}
}
}
if($text == "ايديي" or $text == "أيديي"){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
• ايديك { $from_id } •",
    ]);
	}
// muteall
if ($settings["lock"]["mute_all"] == "مقفول"){
if($update->message){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
// replay
if ($settings["lock"]["reply"] == "مقفول"){
if($update->message->reply_to_message){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
// tg
if ($settings["lock"]["tgservic"] == "مقفول"){
if($update->message->new_chat_member | $update->message->new_chat_photo | $update->message->new_chat_title | $update->message->left_chat_member | $update->message->pinned_message){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
// text
if ($settings["lock"]["text"] == "مقفول"){
if($update->message->text){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
// video note
if ($settings["lock"]["video_msg"] == "مقفول"){
if($update->message->video_note){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}

if($settings["information"]["add"] == "مقفول") {
if($newchatmemberid == true){
$add = $settings["addlist"]["$from_id"]["add"];
$addplus = $add +1;
$settings["addlist"]["{$from_id}"]["add"]="$addplus";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}

if($settings["information"]["add"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if ($tc == 'group' | $tc == 'supergroup'){
$youadding = $settings["addlist"]["$from_id"]["add"];
$setadd = $settings["information"]["setadd"];
$addtext = $settings["addlist"]["$from_id"]["addtext"];
$msg = $settings["information"]["lastmsgadd"];
            if($youadding < $setadd){
			if($addtext == false){
            bot('SendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"
📭❉ المعذرة !!
📮❉ لاتستطيع التكلم هنا ✗
📌❉ قم باضافة $setadd للتكلم ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true
            ]);
            bot('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$message_id
            ]);
			            bot('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$msg
            ]);
$msgplus = $message_id + 1;
$settings["information"]["lastmsgadd"]="$msgplus";
$settings["addlist"]["$from_id"]["addtext"]="true";
$settings["addlist"]["$from_id"]["add"]=0;
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
          }
		  else
		  {
			              bot('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$message_id
			 ]);
       }
		}
		  }
		}
		}

if(in_array($from_id,$Dev)){
$info = "مطور اساسي 👷";
}elseif($status == "creator"){
$info = "منشى المجموعة 🕵";
}elseif($status == "administrator"){
$info = "مشرف المجموعة 👮";
}elseif(in_array($from_id,$admin_user) ){
$info = "ادمن في مجموعة 💂";
}elseif(in_array($from_id,$manger) ){
$info = "مدير المجموعة 🙇";
}elseif(in_array($from_id,$mmyaz) ){
$info = "عضو مميز 👼";
}elseif(in_array($from_id,$developer) ){
$info = "من المطورين 👷";
}elseif($status == "member" ){
$info = "عضو فقط 😿";
}
if(!$username){
$usr = "لايوجد يوزر 😐";
}elseif($username){
$usr = "@$username";
}
if($msgs['msgs'][$chat_id][$from_id] > 3000){
$active = array("خوش متفاعل 🌝","متفاعل ✨","اسطورة التفاعل 🌈ء","الله مال تفاعل ⚜","نايس التفاعل 💘ء",'قوي جدا ⚡️ ',  'قمه التفاعل ✨ ',  'اقوى تفاعل 🔥 ',);
$JJ119 = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 500){
$active = array('متوسط 🎋 ',  'متفاعل 💐',);
$JJ119 = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 1){
$active = array('تفاعل زفت 🙄','ضعيف جدا 🐢',);
$JJ119 = array_rand($active,1);
}
if($msgs['msgs'][$chat_id][$from_id] > 3000){
$Free3 = array("1000% 😻","999% 😺","100% 🙂",);
$Free4 = array_rand($Free3,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 500){
$Free3 = array('80% 🤗','84% 😙',);
$Free4 = array_rand($Free3,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 1){
$Free3 = array('18% 🤔','20% 😳','6% 😶',);
$Free4 = array_rand($Free3,1);
}if($msgs['msgs'][$chat_id][$from_id] > 200){
$Free3 = array("40% 🙁","43% 😐",);
$Free4 = array_rand($Free3,1);
}
$Free1 = array('صورة مو حلوة ??','افضل صورة 💜','اعجبتني 😉','غيرها 😜','والله قووووه 😎','Very Nice 😍','روعةة 🤗','ذوقك حلو 👌');
$Free2 = array_rand($Free1,true);
if(!$rep && $text=="ايدي" and $game['game'][$chat_id][$from_id] == 0){
$iduser = $settings["lock"]["iduser"];
if ($iduser == "مفتوح") {
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$from_id));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][0][0]["file_id"];
if($e == 0){
bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
 📬❉ لم يتم وضع صورة ✗
⚜❉ اسمك » ❨ $first_name ❩
🚸❉ معرفك » ❨ @$username ❩
🥇❉ رتبتك » ❨ $info ❩
🎗❉ تفاعلك » ❨ $active[$JJ119] ❩
🎲❉ ايديك » ❨ $from_id ❩
🔱❉ نسبة تفاعلك » ❨ $Free3[$Free4] ❩
📮❉ رسائلك » ❨ ".$msgs['msgs'][$chat_id][$from_id]." ❩
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
else
{
if($e != 0){
bot("sendphoto",[
"photo"=>"$f",
'chat_id'=>$chat_id,
	'caption'=>"
📬❉ الصورة » $Free1[$Free2]
⚜❉ اسمك » ❨ $first_name ❩
🚸❉ معرفك » ❨ @$username ❩
🏌‍♂❉ صورك » ❨ $count ❩
🥇❉ رتبتك » ❨ $info ❩
🎗❉ تفاعلك » ❨ $active[$JJ119] ❩
🎲❉ ايديك » ❨ $from_id ❩
🔱❉ نسبة تفاعلك » ❨ $Free3[$Free4] ❩
📮❉ رسائلك » ❨ ".$msgs['msgs'][$chat_id][$from_id]." ❩
💰❉ نقاطك » ❨ 0 ❩
" ,
]);
}}}}
if(!$rep && $text=="ايدي" and $game['game'][$chat_id][$from_id]  > 0){
$iduser = $settings["lock"]["iduser"];
if ($iduser == "مفتوح") {
$a = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getuserprofilephotos?user_id=".$from_id));
$b = objectToArrays($a);
$c = $b["ok"];
$d = $b["result"];
$e = $d["total_count"];
$f = $d["photos"][0][0]["file_id"];
if($e == 0){
bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
 📬❉ لم يتم وضع صورة ✗
⚜❉ اسمك » ❨ $first_name ❩
🚸❉ معرفك » ❨ @$username ❩
🥇❉ رتبتك » ❨ $info ❩
🎗❉ تفاعلك » ❨ $active[$JJ119] ❩
🎲❉ ايديك » ❨ $from_id ❩
🔱❉ نسبة تفاعلك » ❨ $Free3[$Free4] ❩
📮❉ رسائلك » ❨ ".$msgs['msgs'][$chat_id][$from_id]." ❩
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
  ]);
  }
else
{
if($e != 0){
bot("sendphoto",[
"photo"=>"$f",
'chat_id'=>$chat_id,
	'caption'=>"
📬❉ الصورة » $Free1[$Free2]
⚜❉ اسمك » ❨ $first_name ❩
🚸❉ معرفك » ❨ @$username ❩
🏌‍♂❉ صورك » ❨ $count ❩
🥇❉ رتبتك » ❨ $info ❩
🎗❉ تفاعلك » ❨ $active[$JJ119] ❩
🎲❉ ايديك » ❨ $from_id ❩
🔱❉ نسبة تفاعلك » ❨ $Free3[$Free4] ❩
📮❉ رسائلك » ❨ ".$msgs['msgs'][$chat_id][$from_id]." ❩
💰❉ نقودك » ❨ ".$game['game'][$chat_id][$from_id]." ❩
" ,
]);
}}}}
if(in_array($from_id,$Dev)){
$info = "مطور اساسي 👷";
}elseif($status == "creator"){
$info = "منشى المجموعة 🕵";
}elseif($status == "administrator"){
$info = "مشرف المجموعة 👮";
}elseif(in_array($from_id,$admin_user) ){
$info = "ادمن في مجموعة 💂";
}elseif(in_array($from_id,$manger) ){
$info = "مدير المجموعة 🙇";
}elseif(in_array($from_id,$mmyaz) ){
$info = "عضو مميز 👼";
}elseif(in_array($from_id,$developer) ){
$info = "من المطورين 👷";
}elseif($status == "member" ){
$info = "عضو فقط 😿";
}
if(!$username){
$usr = "لايوجد يوزر 😐";
}elseif($username){
$usr = "@$username";
}
if($msgs['msgs'][$chat_id][$from_id] > 3000){
$active = array("خوش متفاعل 🌝","متفاعل ✨","اسطورة التفاعل 🌈ء","الله مال تفاعل ⚜","نايس التفاعل 💘ء",'قوي جدا ⚡️ ',  'قمه التفاعل ✨ ',  'اقوى تفاعل 🔥 ',);
$JJ119 = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 500){
$active = array('متوسط 🎋 ',  'متفاعل 💐',);
$JJ119 = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 1){
$active = array('تفاعل زفت 🙄','ضعيف جدا 🐢',);
$JJ119 = array_rand($active,1);
}
if($msgs['msgs'][$chat_id][$from_id] > 3000){
$Free3 = array("1000% 😻","999% 😺","100% 🙂",);
$Free4 = array_rand($Free3,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 500){
$Free3 = array('80% 🤗','84% 😙',);
$Free4 = array_rand($Free3,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 1){
$Free3 = array('18% 🤔','20% 😳','6% 😶',);
$Free4 = array_rand($Free3,1);
}if($msgs['msgs'][$chat_id][$from_id] > 200){
$Free3 = array("40% 🙁","43% 😐",);
$Free4 = array_rand($Free3,1);
}
if(!$rep && $text=="معلوماتي" or $text == "موقعي"){
bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
📬❉ معلوماتك عزيزي العضو 📜

⚜❉ اسمك » ❨ $first_name ❩
🚸❉ معرفك » ❨ @$username ❩
🏌‍♂❉ صورك » ❨ $count ❩
🥇❉ رتبتك » ❨ $info ❩
🎗❉ تفاعلك » ❨ $active[$JJ119] ❩
🎲❉ ايديك » ❨ $from_id ❩
🔱❉ نسبة تفاعلك » ❨ $Free3[$Free4] ❩
📮❉ رسائلك » ❨ ".$msgs['msgs'][$chat_id][$from_id]." ❩
💰❉ نقاطك » ❨ ".$game['game'][$chat_id][$from_id]." ❩
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
]);
}
if(in_array($re,$Dev)){
$info = "مطور اساسي 👷";
}elseif($statusrt == "creator"){
$info = "منشى المجموعة 🕵";
}elseif($statusrt == "administrator"){
$info = "مشرف المجموعة 👮";
}elseif(in_array($re_id,$admin_user) ){
$info = "ادمن في مجموعة 💂";
}elseif(in_array($re_id,$manger) ){
$info = "مدير المجموعة 🙇";
}elseif(in_array($re_id,$mmyaz) ){
$info = "عضو مميز 👼";
}elseif(in_array($re_id,$developer) ){
$info = "من المطورين 👷";
}elseif($statusrt== "member" ){
$info = "عضو فقط 😿";
}
if(!$re_user){
$usr = "لايوجد يوزر 😐";
}elseif($username){
$usr = "@$username";
}
if($msgs['msgs'][$chat_id][$re_id] > 3000){
$active = array("خوش متفاعل 🌝","متفاعل ✨","اسطورة التفاعل 🌈ء","الله مال تفاعل ⚜","نايس التفاعل 💘ء",'قوي جدا ⚡️ ',  'قمه التفاعل ✨ ',  'اقوى تفاعل 🔥 ',);
$JJ119 = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$re_id] > 500){
$active = array('متوسط 🎋 ',  'متفاعل 💐',);
$JJ119 = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$re_id] > 1){
$active = array('تفاعل زفت 🙄','ضعيف جدا 🐢',);
$JJ119 = array_rand($active,1);
}
if($msgs['msgs'][$chat_id][$re_id] > 3000){
$Free3 = array("1000% 😻","999% 😺","100% 🙂",);
$Free4 = array_rand($Free3,1);
}elseif($msgs['msgs'][$chat_id][$re_id] > 500){
$Free3 = array('80% 🤗','84% 😙',);
$Free4 = array_rand($Free3,1);
}elseif($msgs['msgs'][$chat_id][$re_id] > 1){
$Free3 = array('18% 🤔','20% 😳','6% 😶',);
$Free4 = array_rand($Free3,1);
}if($msgs['msgs'][$chat_id][$re_id] > 200){
$Free3 = array("40% 🙁","43% 😐",);
$Free4 = array_rand($Free3,1);
}
if(!$rep && $text=="معلوماته" or $text == "موقعه"){
bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
📬❉ معلومات { $re_id } 📜

⚜❉ اسمه » ❨ $re_name ❩
🚸❉ معرفه » ❨ @$re_user ❩
🥇❉ رتبته » ❨ $info ❩
🎗❉ تفاعله » ❨ $active[$JJ119] ❩
🎲❉ ايديه » ❨ $re_id ❩
🔱❉ نسبة تفاعله » ❨ $Free3[$Free4] ❩
📮❉ رسائله » ❨ ".$msgs['msgs'][$chat_id][$re_id]." ❩
💰❉ نقاطه » ❨ ".$game['game'][$chat_id][$re_id]." ❩
",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message->message_id,
]);
}
if($text == "الالعاب" || $text == "قائمه الالعاب"){
$lockgamess = $settings["lock"]["gamess"];
if ($lockgamess == "مفتوح") {
	bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"🕹❉ اهلا بك في قائمة الالعاب !!

💰❉ يمكنك لعب احد الالعاب هذه:  -
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
🎁❉ سمايلات » لعبه تطابق ايموجي
📮❉ رياضيات » لعبة جمع وطرح..الخ
🎎❉ ترتيب » لعبة ترتيب كلمات
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
📬❉ لشراء العاب لبوتك راسل المطور مع العلم ان اللعبه الواحدة بـ 3$ ويمكن مقايضتها بالريال اليمني او بتمويل اعضاء !!👨🏽‍💻
👨‍🎨❉ معرف المطور » @ieoooo ➺",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MARKDOWN",
	]);
	}
}
if($msgs['msgs'][$chat_id][$re_id] > 3000){
$active = array("خوش متفاعل 🌝","متفاعل ✨","اسطورة التفاعل 🌈ء","الله مال تفاعل ⚜","نايس التفاعل 💘ء",'قوي جدا ⚡️ ',  'قمه التفاعل ✨ ',  'اقوى تفاعل 🔥 ',);
$JJ119 = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$re_id] > 500){
$active = array('متوسط 🎋 ',  'متفاعل 💐',);
$JJ119 = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$re_id] > 1){
$active = array('تفاعل زفت 🙄','ضعيف جدا 🐢',);
$JJ119 = array_rand($active,1);
}
if($msgs['msgs'][$chat_id][$re_id] > 3000){
$Free3 = array("1000% 😻","999% 😺","100% 🙂",);
$Free4 = array_rand($Free3,1);
}elseif($msgs['msgs'][$chat_id][$re_id] > 500){
$Free3 = array('80% 🤗','84% 😙',);
$Free4 = array_rand($Free3,1);
}elseif($msgs['msgs'][$chat_id][$re_id] > 1){
$Free3 = array('18% 🤔','20% 😳','6% 😶',);
$Free4 = array_rand($Free3,1);
}if($msgs['msgs'][$chat_id][$re_id] > 200){
$Free3 = array("40% 🙁","43% 😐",);
$Free4 = array_rand($Free3,1);
}
if($rt and $text == "تفاعله" || $text == "نسبه تفاعله" or $text == "نسبة تفاعله" or $text == "نسبة تفاعلة"){
	bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
🎁❉ تفاعله » { $active[$JJ119] }
📮❉ نسبه تفاعله » { $Free3[$Free4] }
",
'reply_to_message_id'=>$message->message_id,
	]);
	}
if($msgs['msgs'][$chat_id][$from_id] > 3000){
$active = array("خوش متفاعل 🌝","متفاعل ✨","اسطورة التفاعل 🌈ء","الله مال تفاعل ⚜","نايس التفاعل 💘ء",'قوي جدا ⚡️ ',  'قمه التفاعل ✨ ',  'اقوى تفاعل 🔥 ',);
$JJ119 = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 500){
$active = array('متوسط 🎋 ',  'متفاعل 💐',);
$JJ119 = array_rand($active,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 1){
$active = array('تفاعل زفت 🙄','ضعيف جدا 🐢',);
$JJ119 = array_rand($active,1);
}
if($msgs['msgs'][$chat_id][$from_id] > 3000){
$Free3 = array("1000% 😻","999% 😺","100% 🙂",);
$Free4 = array_rand($Free3,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 500){
$Free3 = array('80% 🤗','84% 😙',);
$Free4 = array_rand($Free3,1);
}elseif($msgs['msgs'][$chat_id][$from_id] > 1){
$Free3 = array('18% 🤔','20% 😳','6% 😶',);
$Free4 = array_rand($Free3,1);
}if($msgs['msgs'][$chat_id][$from_id] > 200){
$Free3 = array("40% 🙁","43% 😐",);
$Free4 = array_rand($Free3,1);
}
if( $text == "تفاعلي" || $text == "نسبه تفاعلي" or $text == "نسبة تفاعلي"){
	bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
🎁❉ تفاعلك » { $active[$JJ119] }
📮❉ نسبة تفاعلك » { $Free3[$Free4] }
",
'reply_to_message_id'=>$message->message_id,
	]);
	}
if($text == "اسمي" || $text == "اسميي"){
	bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉  اسمك » { $first_name }
",
'reply_to_message_id'=>$message->message_id,
	]);
	}
	if($text == "معرفي" || $text == "يوزري"){
	bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉  يوزرك » { @$username }
",
'reply_to_message_id'=>$message->message_id,
	]);
	}
if(in_array($re,$Dev)){
$info = "مطور اساسي 👷";
}elseif($statusrt == "creator"){
$info = "منشى المجموعة 🕵";
}elseif($statusrt == "administrator"){
$info = "مشرف المجموعة 👮";
}elseif(in_array($re_id,$admin_user) ){
$info = "ادمن في مجموعة 💂";
}elseif(in_array($re_id,$manger) ){
$info = "مدير المجموعة 🙇";
}elseif(in_array($re_id,$mmyaz) ){
$info = "عضو مميز 👼";
}elseif(in_array($re_id,$developer) ){
$info = "من المطورين 👷";
}elseif($statusrt== "member" ){
$info = "عضو فقط 😿";
}
if($text == "الرتبه" || $text == "رتبته" or $text == "الرتبة" or $text == "رتبتة"){
	bot("SendMessage",[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉  رتبته » { $info }
",
'reply_to_message_id'=>$message->message_id,
	]);
	}
//  game
if($settings["lock"]["game"] == "مقفول"){
if($update->message->game){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
// location
if ($settings["lock"]["location"] == "مقفول"){
if($update->message->location){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
if(in_array($re,$Dev)){
$info = "مطور اساسي 👷";
}elseif($statusrt == "creator"){
$info = "منشى المجموعة 🕵";
}elseif($statusrt == "administrator"){
$info = "مشرف المجموعة 👮";
}elseif(in_array($re_id,$admin_user) ){
$info = "ادمن في مجموعة 💂";
}elseif(in_array($re_id,$manger) ){
$info = "مدير المجموعة 🙇";
}elseif(in_array($re_id,$mmyaz) ){
$info = "عضو مميز 👼";
}elseif(in_array($re_id,$developer) ){
$info = "من المطورين 👷";
}elseif($statusrt== "member" ){
$info = "عضو فقط 😿";
}
if(!$re_user){
$usr = "لايوجد يوزر 😐";
}elseif($username){
$usr = "@$username";
}
if($text == "كشف" || $text == "ايديه"){
	bot("SendMessage",[
	'chat_id'=>$chat_id,
'text'=>"
📌❉ اسمه » { $namesaeedh }
🎟❉ ايديه » { $idsaeedh  }
🎗❉ معرفه »{ @$usersaeedh }
🎖❉ رتبته » $info 
❉",
]);
}
if ($settings["lock"]["kickme"] == "مقفول"){
$KickmeText = $update->message->text;
if($KickmeText == "اطردني"){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
📛❉ لايمكنني طردك بسبب تعطيل المدير لهاذا الامر !! ",
    ]);
	}
}
}
}
if($text == "تحديث السورس"  || $text == "تحديث" || $text == "تحديث البوت" || $text == "تحديث سورس" and in_array($from_id,$Dev) or in_array($from_id,$devlopers)){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>'⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️0%
Open Games.php ...
• Updateing ...',
'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>'⬛️⬜️⬜️⬜️⬜️⬜️⬜️⬜️10%
• Updateing ...
Open kickme.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬜️⬜️⬜️⬜️⬜️⬜️20%
• Updateing ...
Open Orders.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(10);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬜️⬜️⬜️⬜️⬜️30%
• Updateing ...
Open bot.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️🔳⬜️⬜️⬜️⬜️40%
• Updateing ...
Open id.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬜️⬜️⬜️⬜️50%
• Updateing ...
Open photoshop.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬜️⬜️⬜️60%
• Updateing ...
Open Hello.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️▪️⬜️⬜️70%
• Updateing ...
Open welcome.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬜️⬜️80%
• Updateing ...
Open replys.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️90%
• Updateing ...
Open fun.php ...',
 'reply_to_message_id'=>$message->message_id, 

 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️100%
• Updateing ...
..',
 'reply_to_message_id'=>$message->message_id, 
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️100%
• Updateing ...
...',
 'reply_to_message_id'=>$message->message_id, 
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️100%
• Updateing ...
....',
 'reply_to_message_id'=>$message->message_id, 
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>
 "*👨‍✈️ ❉ تم تحديث السورس 🔱*",
  'parse_mode'=>"MARKDOWN",
  'reply_to_message_id'=>$message->message_id, 

 ]);
 } 
$text = $message->text;
mkdir("data/kickme");
mkdir("data/kickmelist");
$ieoooo = "799273845";//هنا ايديك
$TTK       = $message->message_id;
$Kickmetxt = file_get_contents("kickme.txt");
if ($text =="اطردني" or $text == "ادفرني" or $text == "مغادره" and $from_id != $ieoooo){
if ($settings["lock"]["kickme"] == "مفتوح"){
 file_put_contents("kickme.txt","yes");
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• ارسل ( نعم ) ليتم طردك •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
 }
 if($text == "نعم" && $Kickmetxt =="yes"){ file_put_contents("kickme.txt","");
bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id,
]);
bot('banChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id,
]);
  bot("sendmessage",[
  "chat_id"=>$chat_id,
  "text" => "
📛❉ يلا مع السلامه عند امك مع حظر انتبه ترجع 😒🖕🏿
  ", 'parse_mode'=>"HTML",
  "reply_to_message_id"=>$TTK,
  ]);
file_put_contents("data/kickme/$chat_id.txt",$from_id . "\n" , FILE_APPEND);
file_put_contents("data/kickmelist/$chat_id.txt",".» @$username.". "\n" , FILE_APPEND);
  }
if ($text =="اطردني" and $from_id == $ieoooo){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• لااستطيع طردك مطوري •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
if ($text =="اطردني" and $status == 'administrator'){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• لااستطيع طردك لانك مشرف •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
if($from_id != $ieoooo){
if ($text =="اطردني" and $status == 'craetor'){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• لااستطيع طردك لانك منشئ •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
 }
if($status == "member"){
if ($text =="اطردني" and in_array($from_id,$mmyaz)){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• لااستطيع طردك لانك مميز •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
 }
if ($text =="اطردني" and in_array($from_id,$admin_user)){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• لااستطيع طردك لانك ادمن •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
 if ($text =="اطردني" and in_array($from_id,$manger)){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• لااستطيع طردك لانك مشرف •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
 
if ($settings["lock"]["gamess"] == "مقفول"){
$gamesText = $update->message->text;
if($gamesText == "الالعاب"){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
📛❉ لايمكنني اللعب معك بامر من المنشئ ☹💔",
    ]);
	}
}
}
}
if ($settings["lock"]["photoshop"] == "مقفول"){
$photoshop = $update->message->text;
if($photoshop == "تصميم"){
if ($tc == 'group' | $tc == 'supergroup'){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
	bot('SendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
📛❉ لايمكنني التصميم لك ✗
🙄❉ مش شاقي مع امك ☹",
    ]);
	}
}
}
}
function check_filter($str){
	global $filterget;
	foreach($filterget as $d){
		if (mb_strpos($str, $d) !== false) {
			return true;
		}
	}
}

// filter
if($settings["filterlist"] != false){
if ($status != 'creator' && $status != 'administrator' ) {
$check = check_filter("$text");
if ($check == true) {
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id,
    ]);
}
}
}

if( $text =="قائمة المنع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$filter = $settings["filterlist"];
for($z = 0;$z <= count($filter)-1;$z++){
$result = $result.$filter[$z]."\n";
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
❇❉ الكلمات الممنوعة هنا :-

$result
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
if( $text =="قائمة المنع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$filter = $settings["filterlist"];
for($z = 0;$z <= count($filter)-1;$z++){
$result = $result.$filter[$z]."\n";
}
if($settings["filterlist"][] = " "){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
❇❉ الكلمات الممنوعة هنا :-

$result
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
$frokick = file_get_contents("data/kickme/$chat_id.txt");
$frokicked = file_get_contents("data/kickmelist/$chat_id.txt");
if( $text =="المطرودين" and $frokick != null and $frokicked != null){
$frokick = file_get_contents("data/kickme/$chat_id.txt");
$frokicked = file_get_contents("data/kickmelist/$chat_id.txt");
$ckic = explode("\n",$frokick);
$ckick = count($ckic);
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$filter = $settings["filterlist"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
❇❉ الاعضاء الذين طردتهم :-
• عددهم » $ckick
*----------*
$frokicked
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
$frokick = file_get_contents("data/kickme/$chat_id.txt");
$frokicked = file_get_contents("data/kickmelist/$chat_id.txt");
if( $text =="المطرودين" and $frokick == null and $frokicked == null){
$frokick = file_get_contents("data/kickme/$chat_id.txt");
$frokicked = file_get_contents("data/kickmelist/$chat_id.txt");
$ckic = explode("\n",$frokick);
$ckick = count($ckic);
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$filter = $settings["filterlist"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
لم يتم طرد احد •
┉",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
$frokick = file_get_contents("data/kickme/$chat_id.txt");
$frokicked = file_get_contents("data/kickmelist/$chat_id.txt");
if( $text =="مسح المطرودين" and $frokick != null and $frokicked != null){
file_get_contents("data/kickme/$chat_id.txt","");
file_get_contents("data/kickmelist/$chat_id.txt","");
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$filter = $settings["filterlist"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
❇❉ تم مسح المطرودين بنجاح ✓ ",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
$frokick = file_get_contents("data/kickme/$chat_id.txt");
$frokicked = file_get_contents("data/kickmelist/$chat_id.txt");
if( $text =="مسح المطرودين" and $frokick == null and $frokicked == null){
file_get_contents("data/kickme/$chat_id.txt","");
file_get_contents("data/kickmelist/$chat_id.txt","");
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$filter = $settings["filterlist"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
❇❉ لايوجد مطرودين ✓ ",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
elseif (strpos($text , "منع ") !== false or strpos($text , "امنع") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$text1 = str_replace(['امنع ','منع'],'',$text);
bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"
📛❉ تم منع ❨ $text1 ❩
⚜❉ لن يتم ارسالها بعد الان ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents("data/$chat_id/filtrs.txt",$text1 ."\n" , FILE_APPEND);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
$settings["filterlist"][]="$text1";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🔘┋لم يتم تفعيل البوت في مجموعتك⁉️┋ يرجى تفعيل البوت في المجموعة
☑️┋يمكنك تفعيل البوت مجانا م̷ـــِْن خلال ارسال كلمة { • تفعيل • }",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif ( strpos($text  , "الغاء منع") !== false) {
	$text1 = str_replace(['البييييس ','الغاء منع'],'',$text);
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$text1 = str_replace(['الغاء فلترة'],'',$text );
bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"
📛❉ تم منع ❨ $text1 ❩
⚜❉ سـ يتم ارسالها من الان ✓

",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$re_id_ = file_get_contents("data/$chat_id/filtrs.txt");
$str = str_replace($text1,"",$re_id_);
file_put_contents("data/$chat/$chat_id.txt",$str);
@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
$key = array_search($text1,$settings["filterlist"]);
unset($settings["filterlist"][$key]);
$settings["filterlist"] = array_values($settings["filterlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
elseif( $text =="مسح قائمة المنع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🚸❉ تم مسح كل الكلمات التي تم منعها من الارسال في هذه المجموعة ✓
",
         'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);

@$settings = json_decode(file_get_contents("data/$chat_id.json"),true);
unset($settings["filterlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}


// setrules
elseif (strpos($text , 'ضع قوانين ') !== false or strpos($text , 'وضع قوانين') !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)){
$add = $settings["information"]["added"];
if ($add == true) {
$code = str_replace(['ضع قوانين ','وضع قوانين'],'',$text);
$plus = mb_strlen("$code");
if($plus < 600) {
 bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
⚜❉ احسنت ؛ تم وضع قوانين لمجموعتك ✓
⚜❉ ارسل ‹ القوانين › لعرض قوانين مجموعتك !!
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["rules"]="$code";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
	}
else
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🌿┇عزيزي $name لا يمكنك وضع قوانين اكثر من 600 حرف ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة
",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);	
}
}
}
/*
کانال سورس خونه ! پر از سورس هاي ربات هاي تلگرامي !
لطفا در کانال ما عضو شويد 
@source_home
https://t.me/source_home
*/
if(strpos($text , "/insta ") !== false or strpos($text , "اینستاگرام ") !== false){
    if ( $status != 'creator' && $status != 'administrator' && !in_array($from_id,$Dev) ){
$lockcmd = $settings["lock"]["cmd"];
if ($lockcmd == "| غیر فعال | ❌") {
if ($tc == 'group' | $tc == 'supergroup'){
/*
کانال سورس خونه ! پر از سورس هاي ربات هاي تلگرامي !
لطفا در کانال ما عضو شويد 
@source_home
https://t.me/source_home
*/
      $matntrtoen1 =str_replace(['/insta ','اینستاگرام'],'',$text);
     
      $matntrtoen2 = $matntrtoen1;
      
    $parssa002="http://api.eliyateam.ir/instadown.php?urlpost=$matntrtoen2";
$eliya0021=json_decode(file_get_contents($parssa002),true);
$eliya002=$eliya0021;
	//coded by @Source_Home
//channel => @Source_Home
//main channel => @Source_Home
$type=$eliya002['type'];
$image=$eliya002['image'];
$video=$eliya002['video'];
$caption=$eliya002['caption'];
$like=$eliya002['like'];
$coment=$eliya002['coment'];
if($type =='video'){
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"$video",
 'caption'=>"$caption ",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                 [
                     ['text'=>"type",'callback_data'=>'text'],['text'=>"$type",'callback_data'=>'text']
					 ],
					            [
                     ['text'=>"❤️",'callback_data'=>'text'],['text'=>"$like",'callback_data'=>'text']
					 ],
[
                     ['text'=>"💬",'callback_data'=>'text'],['text'=>"$coment",'callback_data'=>'text']
					 ],
					 [
					 ['text'=>"",'url'=>"https://telegram.me/$channel"]
					 ],
	
                     ]
               ])
 ]);
	//coded by @Source_Home
//channel => @Source_Home
//main channel => @Source_Home
}
elseif($type== 'image'){
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$image",
 'caption'=>"$caption ",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                 [
                     ['text'=>"type",'callback_data'=>'text'],['text'=>"$type",'callback_data'=>'text']
					 ],
					            [
                     ['text'=>"❤️",'callback_data'=>'text'],['text'=>"$like",'callback_data'=>'text']
					 ],
[
                     ['text'=>"💬",'callback_data'=>'text'],['text'=>"$coment",'callback_data'=>'text']
					 ],
					 [
					 ['text'=>"",'url'=>"https://telegram.me/$channel"]
					 ],
	
                     ]
               ])
 ]);

}
else{
	//coded by @Source_Home
//channel => @Source_Home
//main channel => @Source_Home
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" 
- الرابط غلط
",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);

            }
}  

}
}
else
{
   	//coded by @Source_Home
//channel => @Source_Home
//main channel => @Source_Home   
           
      $matntrtoen1 =str_replace(['/insta ','اینستاگرام'],'',$text);
     
      $matntrtoen2 = $matntrtoen1;
      
    $parssa002="http://api.eliyateam.ir/instadown.php?urlpost=$matntrtoen2";
$eliya0021=json_decode(file_get_contents($parssa002),true);
$eliya002=$eliya0021;

$type=$eliya002['type'];
$image=$eliya002['image'];
$video=$eliya002['video'];
$caption=$eliya002['caption'];
$like=$eliya002['like'];
$coment=$eliya002['coment'];
if($type =='video'){
bot('sendvideo',[
 'chat_id'=>$chat_id,
 'video'=>"$video",
 'caption'=>"$caption ",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                 [
                     ['text'=>"type",'callback_data'=>'text'],['text'=>"$type",'callback_data'=>'text']
					 ],
					            [
                     ['text'=>"❤️",'callback_data'=>'text'],['text'=>"$like",'callback_data'=>'text']
					 ],
[
                     ['text'=>"💬",'callback_data'=>'text'],['text'=>"$coment",'callback_data'=>'text']
					 ],
					 [
					 ['text'=>"",'url'=>"https://telegram.me/$channel"]
					 ],
	
                     ]
               ])
 ]);

}
elseif($type== 'image'){
		//coded by @Source_Home
//channel => @Source_Home
//main channel => @Source_Home
bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"$image",
 'caption'=>"$caption ",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                 [
                     ['text'=>"type",'callback_data'=>'text'],['text'=>"$type",'callback_data'=>'text']
					 ],
					            [
                     ['text'=>"❤️",'callback_data'=>'text'],['text'=>"$like",'callback_data'=>'text']
					 ],
[
                     ['text'=>"💬",'callback_data'=>'text'],['text'=>"$coment",'callback_data'=>'text']
					 ],
					 [
					 ['text'=>"",'url'=>"https://telegram.me/$channel"]
					 ],
	
                     ]
               ])
 ]);

}
else{
	//coded by @Source_Home
//channel => @Source_Home
//main channel => @Source_Home
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" 
- الرابط غلط
",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);

}
}
}
/*
کانال سورس خونه ! پر از سورس هاي ربات هاي تلگرامي !
لطفا در کانال ما عضو شويد 
@source_home
https://t.me/source_home
*/
// lock channel 
if($settings["information"]["lockchannel"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
if ($tc == 'group' | $tc == 'supergroup'){
$usernamechannel = $settings["information"]["setchannel"];
@$forchannel = json_decode(file_get_contents("https://api.telegram.org/bot".$token."/getChatMember?chat_id=".$usernamechannel."&user_id=".$from_id));
@$tch = $forchannel->result->status;
if($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
$msg = $settings["information"]["lastmsglockchannel"];
$channeltext = $settings["channellist"]["$from_id"]["channeltext"];
			if($channeltext == false){
            bot('SendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"
📭❉ المعذرة !!
📮❉ لاتستطيع التكلم هنا ✗
📌❉ قم بالاشتراك $usernamechannel اولا ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
            ]);
            bot('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$message_id
            ]);
			            bot('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$msg
            ]);
$msgplus = $message_id + 1;
$settings["information"]["lastmsglockchannel"]="$msgplus";
$settings["channellist"]["$from_id"]["channeltext"]="true";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
          }
		  else
		  {
			              bot('deletemessage',[
                'chat_id'=>$chat_id,
            'message_id'=>$message_id
			 ]);
       }
		}
		  }
		}
		}
if($settings["information"]["step"] == "setchannel"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
if(strpos($text  , '@') !== false) {
$plus = mb_strlen("$text ");
if($plus < 25) {
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
⚜❉ احسنت ؛ تم وضع @$text ✓
⚜❉ ارسل تفعيل الاشتراك الاجباري وتاكد من رفع البوت ادمن في القناة !!
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["information"]["setchannel"]="$text ";
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
		bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⚠️┇خطا المعرف غير مسموح به",
  'reply_to_message_id'=>$message_id,
      
                     
               
 ]);
}
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⚠️┇خطأ يجب ان تضع @ للمعرف  
🔰┇مثال • @$channel •√
",
  'reply_to_message_id'=>$message_id,
               
 ]);
}
}
}
}
if($text == "المطورين" and $developers_info != null and  in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>
"*👨‍✈️ ❉ قائمة المطورين :-
👨‍💻 ❉ الاساسي » ❨ $buyy ❩ ➻

$devlopers_info
📛┇┉┉┉┉┉┉┉┉┉┉┉┉┉",
]);
}
}
if($text == "المطورين" and $developers_info == null and  in_array($from_id,$Dev)){
if ($tc == 'group' | $tc == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>
"*👨‍✈️ ❉ قائمة المطورين :-
👨‍💻 ❉ الاساسي » ❨ $buyy ❩ ➻

• لايوجد مطورين √
📛┇┉┉┉┉┉┉┉┉┉┉┉┉┉",
]);
}
}
if($text == "المدراء" and $mangers_info != null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>
"*👨‍✈️ ❉ قائمة المدراء :-
👨‍💻 ❉ الاساسي » ❨ $buyy ❩ ➻

$mangers_infos
📛┇┉┉┉┉┉┉┉┉┉┉┉┉┉",
]);
}
}
}
if($text == "المدراء" and $mangers_info == null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>
"*👨‍✈️ ❉ قائمة المدراء :-
👨‍💻 ❉ الاساسي » ❨ $buyy ❩ ➻

• لايوجد مدراء √
📛┇┉┉┉┉┉┉┉┉┉┉┉┉┉",
]);
}
}
}
if($text == "الادمنيه" || $text == "الادمنية" and $admin_user_info != null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>
"*👨‍✈️ ❉ قائمة الادمنيه :-
👨‍💻 ❉ الاساسي » ❨ $buyy ❩ ➻

$admin_user_infos
📛┇┉┉┉┉┉┉┉┉┉┉┉┉┉",
]);
}
}
}
if($text == "الادمنيه" || $text == "الادمنية" and $admin_user_info == null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>
"*👨‍✈️ ❉ قائمة الادمنيه :-
👨‍💻 ❉ الاساسي » ❨ $buyy ❩ ➻

• لايوجد ادمنية √
📛┇┉┉┉┉┉┉┉┉┉┉┉┉┉",
]);
}
}
}
if($text == "المميزين" and $mmyaz_info != null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>
"*👨‍✈️ ❉ قائمة المميزين :-
👨‍💻 ❉ الاساسي » ❨ $buyy ❩ ➻

$mmyaz_infos
📛┇┉┉┉┉┉┉┉┉┉┉┉┉┉",
]);
}
}
}
if($text == "المميزين" and $mmyaz_info == null){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>
"*👨‍✈️ ❉ قائمة المميزين :-
👨‍💻 ❉ الاساسي » ❨ $buyy ❩ ➻

$mmyaz_infos
📛┇┉┉┉┉┉┉┉┉┉┉┉┉┉",
]);
}
}
}
// setwelcome
if($settings["information"]["step"] == "setwelcome"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
$plus = mb_strlen("$text ");
if($plus < 200) {
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
📮❉ تم بنجاح وضع الترحيب ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["information"]["textwelcome"]="$text ";
$settings["information"]["step"]="none";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
		bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⁉️¦ يجب ان يكون العدد بين ⊱ *1* إلى *200* ⊰
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
     
 ]);
}
}
}
}
// banall
elseif ($tc == 'private'){ 
if(in_array($from_id, $user["banlist"])) {
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🛑 لقد تم حظرك م̷ـــِْن البوت

❇️ ارجو ان لٱ تقوم بارسال رسالة اخرى",
'reply_markup'=>json_encode(['KeyboardRemove'=>[
],'remove_keyboard'=>true
])
]);
    }
}
elseif ($tc == 'group' | $tc == 'supergroup'){ 
if(in_array($from_id, $user["banlist"])) {
		bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
      ]);
}
}
// sup
if($user["userjop"]["$from_id"]["file"] == "sup"&& $tc == "private"){   
if ($text  != "🔙 رجوع") {	
bot('ForwardMessage',[
'chat_id'=>$Dev[0],
'from_chat_id'=>$chat_id,
'message_id'=>$message_id
]);
			bot('sendmessage',[       
			'chat_id'=>$chat_id,
			'text'=>"✔️ تم ارسال اقتراحك شكرا لك",
	]);	
	}
	}


if($text  == "تفعيل الاعضاء" or $text  == "تفعيل الاضافه الاجباريه" or $text  == "تفعيل لاعضاء"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
📮❉ تم بنجاح تفعيل الاضافة ✓
📬❉ بواسطة » `$from_id` ➺
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
	 'reply_to_message_id'=>$message_id,
   ]);
$settings["information"]["add"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   } 
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}   
}
	}
}
elseif($text  == "تعطيل الاضافة" or $text  == "تعطيل الاضافه الاجباريه" or $text  == "تعطيل الاضافه"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$setadd = $settings["information"]["setadd"];
 bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
📮❉ تم بنجاح تعطيل الاضافه ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
		 'reply_to_message_id'=>$message_id,
   ]);
$settings["information"]["add"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   }
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);   
}	   
}
	}
}
elseif (strpos($text  , '/setadd ') !== false or strpos($text  , 'عدد الاضافه ') !== false ) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$code = str_replace(['/setadd ','عدد الاعضاء '],'',$text );
if($code <= 20 && $code >= 1){
 bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⚜❉ احسنت ؛ تم وضع $code ✓
⚜❉ لن يستطيع احد الدردشة قبل اضافه $code من الاعضاء ✓

• تاكد من تفعيل الاضافه اولا ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["setadd"]="$code";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
   } 
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"🚸❉ يمكنك وضع عدد الاعضاء 20 فقط !!",
  'reply_to_message_id'=>$message_id,
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 ]);  
}
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);   
}	   
}
}
if($text =="قفل الروابط" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
??❉ تم بنجاح قفل الروابط ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الروابط" or $text =="فتح روابط"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح فتح الروابط ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["link"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if($text =="⚠️┇› تعطيل الستارت" ){
if (in_array($from_id,$Dev)){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح تعطيل الستارت ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["start"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
if($text =="🔱┇› تفعيل الستارت" ){
if (in_array($from_id,$Dev)){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح تفعيل الستارت ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["start"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
if($text =="⚠️┇› تعطيل الترحيـب" ){
if (in_array($from_id,$Dev)){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح تعطيل الترحيب ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["Botadmin"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
if($text =="⚜┇› تفعيل الترحيـب" ){
if (in_array($from_id,$Dev)){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح تفعيل الترحيب ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["Botadmin"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
if($text =="تعطيل الالعاب" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح تعطيل الالعاب ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gamess"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تفعيل الالعاب" or $text =="تفعيل الألعاب"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح تفعيل الالعاب ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gamess"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if($text =="جوائز النقاط" or $text =="جوائز الالعاب"){
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📌❉ جوائز ربح النقاط :-
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
• عدد النقاط 💰         الجوائز 🏆
1 - 20 نقطة.     - اضافه 200 رساله لك
2 - 50 نقطة.     - اضافه 600 رساله لك
3 - 140 نقطة.   - رفعك عضو مميز (الاصدار المدفوع)
4 - 1000 نقطة. - رفعك مدير (الاصدار المدفوع)
5 - 100 نقطة.   - اضافه 1000 رساله لك
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉

",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
}
if($text =="تعطيل الزخرفه" || $text == "تعطيل الزخرفة" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح تعطيل الزخرفه ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["zhr"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تفعيل الزخرفه" or $text =="تفعيل الزخرفة"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح تفعيل الزخرفه ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gamess"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if($text =="تعطيل التصميم" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح تعطيل التصميم ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photoshop"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تفعيل التصميم" or $text =="فتح التصميم"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح تفعيل التصميم ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photoshop"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if($text =="تعطيل الرابط" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح تعطيل الرابط ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["getlink"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تفعيل الرابط" or $text =="تفعيل جلب الرابط"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح تفعيل الرابط ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["getlink"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if($text =="تعطيل اطردني" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح تعطيل اطردني ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["kickme"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تفعيل اطردني" or $text =="فتح اطردني"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح تفعيل اطردني ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["kickme"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
if($text =="قفل الانكليزيه" or $text == "قفل الانجليزيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح قفل الانجليزيه ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["en"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الانكليزيه" or $text == "فتح الانجليزيه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح فتح الانجليزيه ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["en"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// lock photo
elseif($text =="قفل الصور" or $text =="قفل صور"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح قفل الصور ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["photo"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الصور" or $text =="فتح صور"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح فتح الصور ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["photo"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تفعيل الردود" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح تفعيل الردود ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["rdodsg"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تعطيل الردود" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح تعطيل الردود ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["rdodsg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// gif
elseif($text =="قفل المتحركة" or $text =="قفل الصور المتحركه" or $text == "قفل المتحركه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح قفل الـ GIF ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["gif"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح المتحركة" or $text =="فتح المتحركه"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح فتح الـ GIF ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["gif"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="قفل الماركدوان" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح قفل الماركداون ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["markdown"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الماركدوان" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح فتح الماركدون ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["markdown"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="قفل العربيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح قفل العربيه ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["ar"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح العربيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح فتح العربيه ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["ar"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// document
elseif($text =="قفل الملفات" or $text =="قفل ملفات،"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح قفل الملفات ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["document"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الملفات" or $text =="فتح ملفات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح فتح الملفات ✓
📬❉ بواسطة » `$from_id` ➺
",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["document"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// video
elseif($text =="قفل الفيديو" or $text =="قفل فيديو"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح قفل الفيديو ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الفيديو" or $text =="فتح فيديو"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح فتح الفيديو ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// edit
elseif($text =="قفل التعديل" or $text =="قفل تعديل"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح قفل التعديل ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["edit"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح التعديل" or $text =="فتح تعديل"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح فتح التعديل ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["edit"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// game
elseif($text =="قفل الالعاب" or $text =="قفل العاب"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح الالعاب ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["game"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الالعاب" or $text =="فتح العاب"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح فتح الالعاب ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 $settings["lock"]["game"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// location
elseif($text =="قفل المواقع" or $text =="قفل الموقع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح قفل المواقع ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["location"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح المواقع" or $text =="فتح الموقع"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح فتح الروابط ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["location"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// contact
elseif($text =="قفل الجهات" or $text =="قفل جهات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح قفل الجهات ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["contact"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الجهات" or $text =="فتح جهات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح فتح الجهات ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["contact"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="قفل تعديل الميديا" or $text == "قفل تعديل الوسائط"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح قفل تعديل الوسائط ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["editmd"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح تعديل الميديا" or $text == "فتح تعديل الوسائط"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح قفل تعديل الوسائط ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["editmd"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// tag
elseif($text =="قفل التاك" or $text =="قفل الهاش تاك"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح قفل التاك ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tag"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح التاك" or $text =="فتح الهاش تاك"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح فتح التاك ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tag"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// username 
elseif($text =="قفل المعرفات" or $text =="قفل اليوزرات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
??❉ تم بنجاح قفل المعرفات ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["username"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح المعرفات" or $text =="فتح المعرف"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح فتح المعرفات ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["username"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// audio
elseif($text =="قفل الصوت" or $text =="قفل الموسيقى"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح قفل الصوت ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["audio"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الصوت" or $text =="فتح صوت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح فتح الصوت ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["audio"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif( $text =="قفل الايدي" or $text == "تعطيل الايدي"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح تعطيل الايدي ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["iduser"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الايدي" or $text == "تفعيل الايدي"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح تفعيل الايدي ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["iduser"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// replay
elseif($text =="قفل الرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
'text'=>"
📮❉ تم بنجاح قفل الرد ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["reply"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}


elseif($text =="فتح الرد" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح فتح الرد ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["reply"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// tgservic
elseif($text =="قفل الاشعارات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح قفل الاشعارات ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tgservic"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الاشعارات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح فتح الاشعارات ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tgservic"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// video note
elseif($text =="قفل بصمة اااااالفيديو" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📌┊❯ تم قفل ⊱ بصمة الفيديو ⊰
👨‍✈️╽❯ بواسطة [$from_id](tg://user?id=$from_id) 
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video_msg"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح بصمة الرارررفيديو" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📌┊❯ تم فتح ⊱ بصمة الفيديو ⊰
👨‍✈️╽❯ بواسطة [$from_id](tg://user?id=$from_id) 
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["video_msg"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// lock bots
elseif ($text  == "قفل البوتات" or $text  == "قفل بوتات" or $text  == "قفل البوت") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح قفل البوتات ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["bot"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif ($text  == "فتح البوتات" or $text  == "فتح بوتات"  or $text  == "فتح البوت") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح فتح البوتات ✓
📬❉ بواسطة » `$from_id` ➺
 ",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["bot"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
  if($text  == "تفعيل اشتراك الاجباري" or $text  == "/channel on" or $text  == "تفعيل الاشتراك الاجباري"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
📮❉ تم تفعيل الاشتراك الاجباري ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
		 'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["lockchannel"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
   }   
}
elseif($text  == "/channel off" or $text  == "تعطيل اشتراك اجباري" or $text  == "تعطيل الاشتراك الاجباري"){
if ($tc == 'group' | $tc == 'supergroup'){  
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
📮❉ تم تعطيل الاشتراك الاجباري ✓
📬❉ بواسطة » `$from_id` ➺
 ",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
		 'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["lockchannel"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
   }   
}
elseif ( strpos($text  , 'وضع قناة ') !== false ) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$code = $num = str_replace(['وضع قناة'],'',$text );
 bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⚜❉ احسنت ؛ تم وضع $code ✓
⚜❉ ارسل تفعيل الاشتراك الاجباري وتاكد من رفع البوت ادمن في القناة !!
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["setchannel"]="$code";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
   }  
if($text =="قفل البصمات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح قفل البصمات ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["voice"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح البصمات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح فتح البصمات ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["voice"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// sticker
elseif($text =="قفل الملصقات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح قفل الملصقات ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["sticker"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح الملصقات" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح فتح الملصقات ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["sticker"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// forward
elseif($text =="قفل التوجيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح قفل التوجيه ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["forward"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح التوجيه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح فتح التوجيه ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["forward"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
// fosh
elseif($text =="قفل السيئات" or $text =="قفل الممنوعات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح قفل الممنوعات ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["fosh"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="فتح السيئات" or $text =="فتح الممنوعات"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح فتح الممنوعات ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["fosh"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif( $text =="قفل الررركلايش"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {	
$pluscharacter = $settings["information"]["pluscharacter"];
$downcharacter = $settings["information"]["downcharacter"];
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📌┊❯ تم قفل ⊱ الكلايش ⊰
👨‍✈️╽❯ بواسطة [$from_id](tg://user?id=$from_id) 
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["lockcharacter"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif( $text =="فتح الكررررلايش"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📌┊❯ تم فتح ⊱ الكلايش ⊰
👨‍✈️╽❯ بواسطة [$from_id](tg://user?id=$from_id) 
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["lockcharacter"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif ( strpos($text  , "وضع كررررلايش") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	$num = str_replace(['وضع كلايش'],'',$text );
$add = $settings["information"]["added"];
if ($add == true) {
$te = explode(" ",$num);
$startlock = $te[0];
$endlock = $te[1];
			  bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"
📌┊❯ تم وضع ⊱ *$startlock* ⊰
👨‍✈️╽❯ بواسطة [$from_id](tg://user?id=$from_id) 
➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
$settings["information"]["downcharacter"]="$startlock";
$settings["information"]["pluscharacter"]="$endlock";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings); 
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// farsi
if( $text =="قفل الدردشه" or $text == "قفل الدردشة"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح قفل الدردشةة ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["text"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif( $text =="فتح الدردشه" or $text == "فتح الدردشة"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح فتح الدردشه ✓
??❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["text"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}

elseif (strpos($text  , "/banall ") !== false or strpos($text  , "حظر عام") !== false) {
if (in_array($from_id,$Dev)) {
$text = str_replace(['/banall ','حظر عام '],'',$text );
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"
📮❉ تم بنجاح حظر $id ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$user["banlist"][]="$text";
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
elseif (strpos($text  , "/unbanall ") !== false or strpos($text  , "الغاء حظر العام ") !== false) {
if (in_array($from_id,$Dev)) {
$text = str_replace(['/unbanall ','الغاء حظر العام '],'',$text );
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
bot('sendmessage',[
            'chat_id'=>$chat_id,
            'text'=>"
📮❉ تم الغاء حظر $id ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
    'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$key = array_search($text,$user["banlist"]);
unset($user["banlist"][$key]);
$user["banlist"] = array_values($user["banlist"]); 
$user = json_encode($user,true);
file_put_contents("data/user.json",$user);
}
}
elseif( $text  == "المحظورين عام") {
if ( in_array($from_id,$Dev)) {
$silent = $user["banlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result.$silent[$z]."\n";
}
	  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📛❉ قائمة المحظورين عام :-

$result
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
// lock character
// lock photo


 elseif($text  == "كتم" && $rt or $text  == "silent" && $rt or $text  == "تقييد" && $rt){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer)) {
$add = $settings["information"]["added"];
if ($add == true){
   bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
         ]);
  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🙋🏽‍♂ ❉ العضو ❨ @$re_user ❩
⚜ ❉ الايدي ❨`$re_id`❩
📮 ❉ تم تقييده بنجاح ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$re_msgid,
]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" لايمكنني تقييد الادمنية او المدراء او  او المميزين",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif (strpos($text  , "كتم لمدة ") !== false && $rt or strpos($text  , "تقييد لمدة") !== false && $rt) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer)) {
$add = $settings["information"]["added"];
$we = str_replace(['كتم لمدة ',' تقييد لمدة'],'',$text );
if ($we <= 1000 && $we >= 1){
if ($add == true) {
$weplus = $we + 0;
	bot('sendmessage',[
	'chat_id'=>$chat_id,
'text'=>"🙋🏽‍♂ ❉ العضو ❨ @$re_user ❩
⚜ ❉ الايدي ❨`$re_id`❩
📮 ❉ تم تقييده لمدة $we دقيقه ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
   'until_date'=>time()+$weplus*60,
         ]);
$settings["silentlist"][]="$re_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"خطا⚠️
➖➖➖➖➖➖
يجب اختيار عدد بين 1 الى 1000",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"لايمكنني تقييد الادمنية او المدراء او المطورين او المميزين",
'reply_markup'=>$inlinebutton,
   ]);
}
}
}
elseif($text  == "الغاء تقييد" && $rt or $text  == "الغاء كتم" && $rt or $text  == "الغاء التقييد" && $rt){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🙋🏽‍♂ ❉ العضو ❨ @$re_user ❩
⚜ ❉ الايدي ❨`$re_id`❩
📮 ❉ تم فك التقييد عنه ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$re_msgid,
]);
$key = array_search($re_id,$settings["silentlist"]);
unset($settings["silentlist"][$key]);
$settings["silentlist"] = array_values($settings["silentlist"]); 
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif( $text  == "قائمة المقيدين" or $text == "قائمة المكتومين") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
$result = $result."[$silent[$z]](tg://user?id=$silent[$z])"."\n";
}
	  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
📛❉ قائمة المكتومين/المقيدين :-

$result
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
elseif( $text  == "مسح المقيدين" or $text == "مسح المكتومين") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$silent = $settings["silentlist"];
for($z = 0;$z <= count($silent)-1;$z++){
 bot('restrictChatMember',[
   'user_id'=>$silent[$z],   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
}
	  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"  
📮❉ تم بنجاح مسح المكتومين ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
unset($settings["silentlist"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
// promote
elseif($rt && $text =="رفع منشئ"){
if ( $status == 'creator' or in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🙋🏽‍♂ ❉ العضو ❨ @$re_user ❩
⚜ ❉ الايدي ❨`$re_id`❩
📮 ❉ تم رفعه منشئ في المجموعة ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 bot('promoteChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$re_id,
 'can_change_info'=>True,
  'can_delete_messages'=>True,
  'can_invite_users'=>True,
  'can_restrict_members'=>True,
  'can_pin_messages'=>True,
  'can_promote_members'=>True,
]);
	}
}
elseif($rt && $text =="تنزيل مشرف"){
if ( $status == 'creator' or in_array($from_id,$Dev)) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🙋🏽‍♂ ❉ العضو ❨ @$re_user ❩
⚜ ❉ الايدي ❨`$re_id`❩
📮 ❉ تم تنزيله من المشرفين ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 bot('restrictChatMember',[
   'user_id'=>$re_id,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
	}
}
// admin list

if ($settings["information"]["welcome"] == "مقفول"){
if($update->message->new_chat_member){
if ($tc == "group" | $tc == "supergroup"){
$text1 = $settings["information"]["textwelcome"];
$newmemberuser = $update->message->new_chat_member->username;
$name = $update->message->new_chat_member->first_name;
date_default_timezone_set('Asia/Damascus');
$date = date('Y-m-d');
$date2 = date("H:i");
$text = str_replace(["gpname","username","time"],["$namegroup","@$newmemberuser","$date | $date2"],"$text1");
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"$text",
'reply_to_message_id'=>$message_id,
	]);
}
}
}
// lock character
if($settings["lock"]["lockcharacter"] == "مقفول"){
if ($status !=  creator  && $status !=  administrator  && !in_array($from_id,$Dev) && !in_array($from_id,$manger) && !in_array($from_id,$admin_user) && !in_array($from_id,$mmyaz) && !in_array($from_id,$developer) ){
$plus = mb_strlen("$text ");
$pluscharacter = $settings["information"]["pluscharacter"];
$downcharacter = $settings["information"]["downcharacter"];
if ($pluscharacter < $plus or $plus < $downcharacter) {   
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
]);
}
}
}

  if($settings["lock"]["rdodsg"] == "مقفول"){
 if($message->text and file_exists("data/addrd/$chat_id/media/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/$text.txt");
   bot('Sendvoice',[
    'chat_id'=>$chat_id,
    'voice'=>$MoStaFa,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }}
  if($settings["lock"]["rdodsg"] == "مقفول"){
 if($message->text and file_exists("data/addrd/$chat_id/media/audio/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/audio/$text.txt");
 bot('SendAudio',[
    'chat_id'=>$chat_id,
    'audio'=>$MoStaFa,
    'reply_to_message_id'=>$message->message_id,
 ]);
 }}
  if($settings["lock"]["rdodsg"] == "مقفول"){
 if($message->text and file_exists("data/addrd/$chat_id/media/sticker/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/sticker/$text.txt");
 bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>$MoStaFa,
'reply_to_message_id'=>$message->message_id,
]);
}}
 if($settings["lock"]["rdodsg"] == "مقفول"){
if($message->text and file_exists("data/addrd/$chat_id/media/video/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/video/$text.txt");
bot('Sendvideo',[
'chat_id'=>$chat_id,
'video'=>$MoStaFa,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}}
 if($settings["lock"]["rdodsg"] == "مقفول"){
if($message->text and file_exists("data/addrd/$chat_id/media/photo/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/photo/$text.txt");
bot('Sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$MoStaFa,
'caption'=>$message->caption,
'reply_to_message_id'=>$message->message_id,
]);
}}
 if($settings["lock"]["rdodsg"] == "مقفول"){
if($message->text and file_exists("data/addrd/$chat_id/media/videonote/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/videonote/$text.txt");
 bot('Sendvideonote',[
'chat_id'=>$chat_id,
'video_note'=>$MoStaFa,
'reply_to_message_id'=>$message->message_id,
]);
}}
 if($settings["lock"]["rdodsg"] == "مقفول"){
if($message->text and file_exists("data/addrd/$chat_id/media/document/$text.txt")) {
  $MoStaFa = file_get_contents("data/addrd/$chat_id/media/document/$text.txt");
 bot('SendDocument',[
'chat_id'=>$chat_id,
'document'=>$MoStaFa,
'reply_to_message_id'=>$message->message_id,
]);
}}
 if($settings["lock"]["rdodsg"] == "مقفول"){
if($message->text and file_exists("data/addrd/$chat_id/media/contact/$text.txt")) {
 $MoStaFa = file_get_contents("data/addrd/$chat_id/media/contact/$text.txt");
bot('SendContact',[
'chat_id'=>$chat_id,
'phone_number'=>$MoStaFa,
'first_name'=>$message->from->first_name,
'last_name'=>$message->from->last_name,
'reply_to_message_id'=>$message->message_id,
]);
 }
}

if( $text =="الاعدادات" or $text == "الوسائط" or $text == "الحمايه" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
$locklink = $settings["lock"]["link"];
$markdown = $settings["lock"]["markdown"];
$editmd = $settings["lock"]["editmd"];
$lockusername = $settings["lock"]["username"];
$locktag = $settings["lock"]["tag"];
$rdodsg = $settings["lock"]["rdodsg"];
$ar = $settings["lock"]["ar"];
$en = $settings["lock"]["en"];
$lockedit = $settings["lock"]["edit"];
$lockfosh = $settings["lock"]["fosh"];
$lockbots = $settings["lock"]["bot"];
$lockforward = $settings["lock"]["forward"];
$locktg = $settings["lock"]["tgservic"];
$lockreply = $settings["lock"]["reply"];
$lockcmd = $settings["lock"]["cmd"];
$lockdocument = $settings["lock"]["document"];
$lockgif = $settings["lock"]["gif"];
$iduser = $settings["lock"]["iduser"];
$lockvideo_note = $settings["lock"]["video_msg"];
$locklocation = $settings["lock"]["location"];
$lockphoto = $settings["lock"]["photo"];
$lockcontact = $settings["lock"]["contact"];
$lockaudio = $settings["lock"]["audio"];
$lockvoice = $settings["lock"]["voice"];
$locksticker = $settings["lock"]["sticker"];
$lockgame = $settings["lock"]["game"];
$lockvideo = $settings["lock"]["video"];
$locktext = $settings["lock"]["text"];
$mute_all = $settings["lock"]["mute_all"];
$welcome = $settings["information"]["welcome"];
$add = $settings["information"]["add"];
$kickk = $settings["lock"]["kickme"];
$setwarn = $settings["information"]["setwarn"];
$charge = $settings["information"]["charge"];
$lockauto = $settings["lock"]["lockauto"];
$add = $settings["information"]["add"];
$zhr = $settings["lock"]["zhr"];
$photoshop = $settings["lock"]["photoshop"];
$lockgamess = $settings["lock"]["gamess"];
$getlinkk = $settings["lock"]["getlink"];
$joinn = $settings["information"]["lockchannel"];
$lockaddd = $settings["information"]["setadd"];
$lockcharacter = $settings["lock"]["lockcharacter"];
$startlock = $settings["information"]["timelock"];
$endlock = $settings["information"]["timeunlock"];
$startlockcharacter = $settings["information"]["pluscharacter"];
$endlockcharacter = $settings["information"]["downcharacter"];
$text = str_replace("| فعال |","","
🤖❉ اعدادات المجموعة :-
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
🔗❉ الروابط » ❨ $locklink ❩
🎲❉ الالعاب » ❨ $lockgame ❩
🏌‍♀❉ المعرفات » ❨ $lockusername ❩
🎟❉ التاك » ❨ $locklink ❩
🎨❉ الصور » ❨ $lockphoto ❩
🏵❉ الفيديو » ❨ $lockvideo ❩
🎖❉ التوجيه » ❨ $lockforward ❩
☄❉ الاشعارات » ❨ $locktg ❩
✨❉ الملصقات » ❨ $locksticker ❩
🎟❉ الـ GIF » ❨ $lockgif ❩
💥❉ البصمات » ❨ $lockvoice ❩
💫❉ الرد » ❨ $lockreply ❩
🗂❉ الملفات » ❨ $lockdocument ❩
📭❉ الجهات » ❨ $lockcontact ❩
📯❉ المواقع » ❨ $locklocation ❩
📨❉ الدردشة » ❨ $locktext ❩
🏮❉ الماركداون » ❨ $markdown ❩
📜❉ الممنوعات » ❨ $lockfosh ❩
🗳❉ العربيه » ❨ $ar ❩
📑❉ الانجليزية » ❨ $en ❩
🎈❉ البوتات » ❨ $lockbots ❩
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
🏹❉ اعدادات التفعيل والتعطيل :-
💡❉ الايدي » $iduser
⚖❉ الردود » $rdodsg
⚙❉ الزخرفه » $zhr
🏷❉ الترحيب » $wel
🎈❉ التصميم » $photoshop
🗂❉ الالعاب » $lockgamess
🗳❉ الرابط » $getlinkk
🏅❉ امر اطردني » $kickk
💢❉ الاضافة » $lockaddd
🔥❉ الاشتراك الاجباري » $joinn
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
");
$text2 = str_replace("| غير مفعل |","","$text");
	bot('sendmessage',[ 
 'chat_id'=>$chat_id,
 'text'=>"$text2",
'reply_to_message_id'=>$message_id,
   ]);
}
}


if($text  == '/leave'  or $text  == 'leave'  or $text  == 'بوت غادر'){
if (in_array($from_id,$Dev) and in_array($from_id,$developer)){
bot('sendMessage',[
  'chat_id'=>$chat_id,
  'text'=>"
📮❉ سيتم مغادرة المجموعة ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
bot('LeaveChat',[
  'chat_id'=>$chat_id,
  ]);
  }
}
  elseif($text  == 'تعطيل' ){
	  if (in_array($from_id,$Dev) or in_array($from_id,$developer)){
bot('sendMessage',[
  'chat_id'=>$chat_id,
  'text'=>"
📮❉ تم بنجاح تعطيل البوت ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
unlink("data/$chat_id.json");
   }  
  }   
 // tools and cmd
 //rules
elseif( $rt && $text =="تثبيت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) { bot('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
📮❉ تم تثبيت الرساله ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
elseif(  $text =="الغاء التثبيت"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) { bot('unpinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
📮❉ تم الغاء تثبيت الرساله ✓
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}

 elseif( $rt && $text == "حظر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer)) {
	bot('banChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
'text'=>"
🙋🏽‍♂ ❉ العضو ❨ @$re_user ❩
⚜ ❉ الايدي ❨`$re_id`❩
📮 ❉ تم حظره بنجاح ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
   } 
else	
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" لايمكنني تقييد الادمنية او المدراء او المطورين او المميزين",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
   }
}
 }
 elseif( $rt && $text == "الغاء حظر"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev)) {
	bot('unbanChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
🙋🏽‍♂ ❉ العضو ❨ @$re_user ❩
⚜ ❉ الايدي ❨`$re_id`❩
📮 ❉ تم الغاء حظره ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
   } 
else	
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" لايمكنني الغاء تقييد الادمنية او المدراء او المطورين او المميزين",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
   }
}
 }
  elseif( $rt && $text == "طرد"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
if ( $statusrt != 'creator' && $statusrt != 'administrator' && !in_array($re_id,$Dev) && !in_array($re_id,$manger) && !in_array($re_id,$admin_user) && !in_array($re_id,$mmyaz) && !in_array($re_id,$developer)) {
	bot('kickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
'text'=>"
🙋🏽‍♂ ❉ العضو ❨ @$re_user ❩
⚜ ❉ الايدي ❨`$re_id`❩
📮 ❉ تم طرده بنجاح ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
   ]);
   } 
else	
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>" لايمكنني تقييد الادمنية او المدراء او المطورين او المميزين",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
   }
}
 }
 elseif( strpos($text  ,"حظر عام") !== false) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {
$text1 = str_replace(['حظر عام'],'',$text );
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$text&user_id=".$text1);
$statjson = json_decode($stat, true);
$name = $statjson['result']['user']['first_name'];
$username = $statjson['result']['user']['username'];
$id = $statjson['result']['user']['id'];
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$text1
      ]);
       bot('sendmessage', [
                'chat_id' => $chat_id,
             'text'=>"
🙋🏽‍♂ ❉ العضو ❨ @$re_user ❩
⚜ ❉ الايدي ❨`$re_id`❩
📮 ❉ تم حظره عام بنجاح ✓
",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);

}
}
 
   //del
elseif( $rt && $text  == "حذف"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) { bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$re_msgid
    ]);
	 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
 }
}
// rmsg
elseif ( strpos($text  , '/rmsg ') !== false or strpos($text  , 'تنظيف') !== false  ) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$num = str_replace(['/rmsg ','تنظيف'],'',$text );
if ($num <= 300 && $num >= 1){
$add = $settings["information"]["added"];
if ($add == true) {
for($i=$message_id; $i>=$message_id-$num; $i--){
bot('deletemessage',[
 'chat_id' => $chat_id,
 'message_id' =>$i,
              ]);
}
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text' =>"
📮❉ تم حذف $num من الرسائل ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_markup'=>$inlinebutton,
   ]);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⁉️┇خطأ البوت لا يعمل بسبب عدم تفعيل البوت
🔘┇ارسل كلمة تفعيل لتفعيل البوت في المجموعة
",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"
⁉️┇يجب ان يكون العدد بين 1 إلى 300 ",
'reply_markup'=>$inlinebutton,
   ]);
}
}
}
//  setname
elseif ( strpos($text , 'وضع اسم ') !== false or strpos($text , 'ضع اسم ') !== false  ) {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
$newname= str_replace(['وضع اسم ','ضع الاسم '],'',$text);
 bot('setChatTitle',[
    'chat_id'=>$chat_id,
    'title'=>$newname
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"
📭❉ تم وضع اسم للمجموعةة ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
 }
}}


// link
if($can_bot_change == 1){ 
$canchangeinfo = "✅";
}else{
$canchangeinfo = "❌";
}
if($can_bot_delete== 1){ 
$candeletemessages = "✅";
}else{
$candeletemessages = "❌";
}
if($can_restrict_members_rply == 1){ 
$canrestrictmembers = "✅";
}else{
$canrestrictmembers = "❌";
}
if($can_bot_invite == 1){ 
$caninviteusers = "✅";
}else{
$caninviteusers = "❌";
}
if($can_pin_messages_rply == 1){ 
$canpinmessages = "✅";
}else{
$canpinmessages = "❌";
}
if($can_promote_members_rply == 1){ 
$canpromotemembers = "✅";
}else{
$canpromotemembers = "❌";
}
$linktxt = file_get_contents("data/$chat_id/link.txt");
if( $text =="الرابط" and $linktxt == null){
if ($tc == 'group' | $tc == 'supergroup'){  
$getlinkk = $settings["lock"]["getlink"];
if ($getlinkk == "مفتوح") {
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
🎗❉ لم يتم وضع رابط
🤹‍♂❉ $namegroup
",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
 }}}
$linktxt = file_get_contents("data/$chat_id/link.txt");
if( $text =="الرابط" and $caninviteusers == "❌" and $linktxt == null){
if ($tc == 'group' | $tc == 'supergroup'){  
$getlinkk = $settings["lock"]["getlink"];
if ($getlinkk == "مفتوح") {
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
🎗❉ ليس لدي صلاحيه دعوة مستخدمين ❌
• قم بارسال وضع رابط ثم ارسل لي الرابط ✓
",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
 }}}
$linktxt = file_get_contents("data/$chat_id/link.txt");
if( $text =="الرابط" and $linktxt != null){
if ($tc == 'group' | $tc == 'supergroup'){  
$getlinkk = $settings["lock"]["getlink"];
if ($getlinkk == "مفتوح") {
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"
🎗❉ رابط جروب ‹ $namegroup › 
🤹‍♂❉ $linktxt
",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
   ]);
 }}}
//add
$kocke = file_get_contents("kocke.txt");
$sekk = file_get_contents("sekk.txt");
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
if ( $text  == "تفعيل" and $MEMH <= $kocke and $sekk == "متاح") {
if ($status == 'creator' or $status == 'administrator'){
if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add != true) {
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
🛑❉ عذرا !!
⚜❉ لايمكنني تفعيل هاذه المجموعة لانها قليله جدا ❌
🔱❉ يجب ان يكون عدد اعضاء المجموعة { $kocke } عضو ليتم التفعيل ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
		
 ]);  
 }
 }
 }
 }
$kocke = file_get_contents("kocke.txt");
$sekk = file_get_contents("sekk.txt");
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
if ( $text  == "تفعيل" and $MEMH >= $kocke and $sekk == "متاح") {
if ($status == 'creator' or $status == 'administrator'){
if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
file_put_contents("links.txt",$getlinkde."\n",FILE_APPEND);
file_put_contents("lonks.txt",$namegroup."\n",FILE_APPEND);
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
mkdir("data/count");
file_put_contents("data/count/$chat_id.txt",$result[$key]['user']['id'] . "\n" , FILE_APPEND);
$cmg = file_get_contents("data/count/$chat_id.txt");
$cmssg  = explode("\n",$cmg);
$cmsg = count($cmssg);
}
}
}
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
if ($add != true) {
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
🕵🏽‍♂❉ تم تفعيل المجموعة بنجاح ✓
👨🏽‍🏭❉ تم رفع المنشئ ✓
👮🏽‍♂❉ ارسل رفع الادمنيه ليتم رفع جميع ادمنيه الجروب بالبوت ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
		
 ]);  
 		        bot('sendmessage',[
            'chat_id'=>$Dev[0],
            'text'=>"
👨🏽‍💻❉ اهلا مطوري ؛ كيف حالك 🙋🏽‍♂
🧜‍♂❉ تم تفعيلي في مجموعة جديدة
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
📛❉ اسم الجروب « $namegroup »
📛❉ ايدي الجروب « `$chat_id` »
📛❉ رابط الجروب « $getlinkde »
📛❉ عدد الاعضاء « $MEMH »
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
🚸❉ بواسطة « [$first_name](t.me/$username)
🚸❉ ايديه « $from_id »
🚸❉ معرفه « @$username »
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
        ]); 
$dateadd = date('Y-m-d', time());
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +999 day"));
        $settings = '{"lock": {
                "text": "مفتوح",
                "photo": "مفتوح",
                "link": "مفتوح",
                "tag": "مفتوح",
				"username": "مفتوح",
                "sticker": "مفتوح",
                "video": "مفتوح",
                "voice": "مفتوح",
                "editmd": "مفتوح",
                "photoshop": "مفتوح",
                "getlink": "مفتوح",
                "audio": "مفتوح",
                "iduser": "مفتوح",
                "gif": "مفتوح",
                "markdown": "مفتوح",
                "bot": "مفتوح",
                "forward": "مفتوح",
                "document": "مفتوح",
                "tgservic": "مفتوح",
				"edit": "مفتوح",
				"reply": "مفتوح",
				"en": "مفتوح",
				"kickme": "مفتوح",
				"zhr": "مفتوح",
				"en": "مفتوح",
				"ar": "مفتوح",
				"contact": "مفتوح",
				"rdodsg": "مقفول",
				"location": "مفتوح",
				"game": "مفتوح",
				"gamess": "مفتوح",
				"cmd": "مفتوح",
				"mute_all": "مفتوح",
				"mute_all_time": "مفتوح",
				"fosh": "مفتوح",
				"lockauto": "مفتوح",
				"lockcharacter": "مفتوح",
				"video_msg": "مفتوح"
			},
			"information": {
            "added": "true",
			"welcome": "مفتوح",
			"add": "مفتوح",
			"lockchannel": "مفتوح",
			"hardmodebot": "مفتوح",
			"hardmodewarn": "كتم العضو ♨️",
			"charge": "999 يوم",
			"setadd": "3",
			"dataadded": "",
			"expire": "",
			"msg": "",
			"timelock": "00:00",
			"timeunlock": "00:00",
			"pluscharacter": "300",
			"downcharacter": "0",
			"textwelcome": "اهلا بك عزيزي",
			"rules": "غير مسجل",
			"setwarn": "3"
			}
}';
        $settings = json_decode($settings,true);
		$settings["information"]["expire"]="$next_date";
		$settings["information"]["dataadded"]="$dateadd";
		$settings["information"]["msg_id"]="$message_id";
        $settings = json_encode($settings,true);
        file_put_contents("data/$chat_id.json",$settings);
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");  
fwrite($gpadd, "اسم المجموعة : [$namegroup] | ايدي المجموعة : [$chat_id]\n");
fclose($gpadd);
}
else
{
$dataadd = $settings["information"]["dataadded"];
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
🕵🏽‍♂❉ تم تفعيل المجموعة من قبل ✓
• بواسطة ‹ $from_id ›
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
     ]); 
}
}
}
}
$kocke = file_get_contents("kocke.txt");
$sekk = file_get_contents("sekk.txt");
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
if ( $text  == "تفعيل" and $MEMH >= $kocke and $sekk == null) {
if ($status == 'creator' or $status == 'administrator'){
if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
file_put_contents("links.txt",$getlinkde."\n",FILE_APPEND);
file_put_contents("lonks.txt",$namegroup."\n",FILE_APPEND);
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
if($found == "administrator"){
if($result[$key]['user']['first_name'] == true){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$msg = $msg.""."❉"."[{$innames}](tg://user?id={$result[$key]['user']['id']})";
mkdir("data/count");
file_put_contents("data/count/$chat_id.txt",$result[$key]['user']['id'] . "\n" , FILE_APPEND);
$cmg = file_get_contents("data/count/$chat_id.txt");
$cmssg  = explode("\n",$cmg);
$cmsg = count($cmssg);
}
}
}
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
if ($add != true) {
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
🕵🏽‍♂❉ تم تفعيل المجموعة بنجاح ✓
👨🏽‍🏭❉ تم رفع المنشئ ✓
👮🏽‍♂❉ ارسل رفع الادمنيه ليتم رفع جميع ادمنيه الجروب بالبوت ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
		
 ]);  
 		        bot('sendmessage',[
            'chat_id'=>$Dev[0],
            'text'=>"
👨🏽‍💻❉ اهلا مطوري ؛ كيف حالك 🙋🏽‍♂
🧜‍♂❉ تم تفعيلي في مجموعة جديدة
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
📛❉ اسم الجروب « $namegroup »
📛❉ ايدي الجروب « `$chat_id` »
📛❉ رابط الجروب « $getlinkde »
📛❉ عدد الاعضاء « $MEMH »
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
🚸❉ بواسطة « [$first_name](t.me/$username)
🚸❉ ايديه « $from_id »
🚸❉ معرفه « @$username »
⚜┇┉┉┉┉┉┉┉┉┉┉┉┉┉
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
        ]); 
$dateadd = date('Y-m-d', time());
$dateadd2 = isset($_GET['date']) ? $_GET['date'] : date('Y-m-d');
$next_date = date('Y-m-d', strtotime($dateadd2 ." +999 day"));
        $settings = '{"lock": {
                "text": "مفتوح",
                "photo": "مفتوح",
                "link": "مفتوح",
                "tag": "مفتوح",
				"username": "مفتوح",
                "sticker": "مفتوح",
                "video": "مفتوح",
                "voice": "مفتوح",
                "editmd": "مفتوح",
                "photoshop": "مفتوح",
                "getlink": "مفتوح",
                "audio": "مفتوح",
                "iduser": "مفتوح",
                "gif": "مفتوح",
                "markdown": "مفتوح",
                "bot": "مفتوح",
                "forward": "مفتوح",
                "document": "مفتوح",
                "tgservic": "مفتوح",
				"edit": "مفتوح",
				"reply": "مفتوح",
				"en": "مفتوح",
				"kickme": "مفتوح",
				"zhr": "مفتوح",
				"en": "مفتوح",
				"ar": "مفتوح",
				"contact": "مفتوح",
				"rdodsg": "مقفول",
				"location": "مفتوح",
				"game": "مفتوح",
				"gamess": "مفتوح",
				"cmd": "مفتوح",
				"mute_all": "مفتوح",
				"mute_all_time": "مفتوح",
				"fosh": "مفتوح",
				"lockauto": "مفتوح",
				"lockcharacter": "مفتوح",
				"video_msg": "مفتوح"
			},
			"information": {
            "added": "true",
			"welcome": "مفتوح",
			"add": "مفتوح",
			"lockchannel": "مفتوح",
			"hardmodebot": "مفتوح",
			"hardmodewarn": "كتم العضو ♨️",
			"charge": "999 يوم",
			"setadd": "3",
			"dataadded": "",
			"expire": "",
			"msg": "",
			"timelock": "00:00",
			"timeunlock": "00:00",
			"pluscharacter": "300",
			"downcharacter": "0",
			"textwelcome": "اهلا بك عزيزي",
			"rules": "غير مسجل",
			"setwarn": "3"
			}
}';
        $settings = json_decode($settings,true);
		$settings["information"]["expire"]="$next_date";
		$settings["information"]["dataadded"]="$dateadd";
		$settings["information"]["msg_id"]="$message_id";
        $settings = json_encode($settings,true);
        file_put_contents("data/$chat_id.json",$settings);
$gpadd = fopen("data/group.txt",'a') or die("Unable to open file!");  
fwrite($gpadd, "اسم المجموعة : [$namegroup] | ايدي المجموعة : [$chat_id]\n");
fclose($gpadd);
}
else
{
$dataadd = $settings["information"]["dataadded"];
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
🕵🏽‍♂❉ تم تفعيل المجموعة من قبل ✓
• بواسطة ‹ $from_id ›
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
     ]); 
}
}
}
}
$kocke = file_get_contents("kocke.txt");
$sekk = file_get_contents("sekk.txt");
$MEMH = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
if ( $text  == "تفعيل" and $MEMH <= $kocke and $sekk == "متاح") {
if ($status == 'creator' or $status == 'administrator'){
if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add != true) {
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
🛑❉ عذرا !!
⚜❉ لايمكنني تفعيل هاذه المجموعة لانها قليله جدا ❌
🔱❉ يجب ان يكون عدد اعضاء المجموعة { $kocke } عضو ليتم التفعيل ✓
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
		
 ]);  
 }
 }
 }
 }
$kocke = file_get_contents("kocke.txt");
$sekk = file_get_contents("sekk.txt");
if ( $text  == "تفعيل" and $MEMH >= $kocke and $sekk == "للمطور") {
if(!in_array($from_id,$Dev)){
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
👨‍✈️✣ للمطور الاساسي فقط ✓
📌✣ معرفه $buyy",
]);
}
}
elseif ($text  == "قفل الكل"  or $text  == "automatic" or $text  == "قفل كل") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {if ($tc == 'group' | $tc == 'supergroup'){
$add = $settings["information"]["added"];
if ($add == true) {
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"
📮❉ تم بنجاح قفل الكل ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
		$settings["lock"]["link"]="مقفول";
		$settings["lock"]["username"]="مقفول";
		$settings["lock"]["bot"]="مقفول";
		$settings["lock"]["forward"]="مقفول";
		$settings["lock"]["tgservices"]="مقفول";
		$settings["lock"]["contact"]="مقفول";
        $settings = json_encode($settings,true);
        file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 يجب تفعيل البوت في المجموعة

ℹ️ يمكنك تفعيل البوت في مجموعة مع امر تفعيل مجاني",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
}

elseif( $text =="unmute all" or $text =="فتح الكل"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح فتح الكل ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["mute_all"]="مفتوح";
$settings["lock"]["mute_all_time"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}

// setwelcome
if (strpos($text  , "وضع ترحيب ") !== false  ) {
if ($status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev)) {
$add = $settings["information"]["added"];
if ($add == true) {
$we = str_replace(['وضع ترحيب '],'',$text );
$plus = mb_strlen("$we");
if($plus < 600) {
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
👨‍💻┇› اهلا بك عزيــزي 🍂
👨‍✈️┇› تم وضع الترحيب بنجاح ✣
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["textwelcome"]="$we";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
	}
else
{
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لقد ارسلت رسالة تحتوي600 حرف لٱ يمكنك ارسال اكثر م̷ـــِْن 600 حرف",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 يجب تفعيل البوت في المجموعة

ℹ️ يمكنك تفعيل البوت في مجموعة مع امر تفعيل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);	
}
}
}
elseif ($text == "الترحيب") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	$text = $settings["information"]["textwelcome"];
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$text
",  'reply_to_message_id'=>$message_id,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
 ]);
$settings["information"]["welcome"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}

}
}
// welcome enbale and disable
elseif ( $text  == "تفعيل الترحيب") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
$text = $settings["information"]["textwelcome"];
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح تفعيل الترحيب ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id, 
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["welcome"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 يجب تفعيل البوت في المجموعة

ℹ️ يمكنك تفعيل البوت في مجموعة مع امر تفعيل مجاني",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif ( $text  == "تعطيل الترحيب") {
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
📮❉ تم بنجاح تعطيل الترحيب ✓
📬❉ بواسطة » `$from_id` ➺
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["information"]["welcome"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 يجب تفعيل البوت في المجموعة

ℹ️ يمكنك تفعيل البوت في مجموعة مع امر تفعيل مجاني",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}

if($text =="الاوامر" or $text =="مساعدة" or $text =="مساعده"){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
👨‍✈️❉ اهلا بك عزيزي 🙋🏽‍♂
🔘❉ اليك قائمة الاوامر العامه !
📛┇┉┉┉┉┉┉┉┉┉┉┉┉┉
⚜❉ م1 » لعرض اوامر القفل والفتح
⚜❉ م2 » لعرض اوامر الوضع 
⚜❉ م3 » لعرض اوامر الادمنيه
⚜❉ م4 » لعرض اوامر الاعضاء
⚜❉ م5 » لعرض الاوامر الاضافيه
⚜❉ م المطور » لعرض اوامر المطور
📛┇┉┉┉┉┉┉┉┉┉┉┉┉┉
📮✣ للاستفسار ‹ $buyy › 👨🏽‍💻
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}

if($text =="م1" ){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
👨‍✈️❉ اهلا بك عزيزي 🙋🏽‍♂
🔘❉ اليك اوامر القفل والفتح !
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
• قفل + الامر ادناه » لقفل الامر 🔐
• فتح + الامر ادناه » لفتح الامر 🔓

💥 الروابط «» التوجيه
💥 المعرفات «» التاك
💥 الملصقات «» الاشعارات
💥 الالعاب «» المواقع
💥 العربيه «» الانجليزيه
💥 الفيديو «» البصمات
💥 الموسيقى «» المتحركة
💥 الماركداون «» الجهات
💥 الممنوعات «» الرد
💥 الكل «» التكرار
💥 الدردشة «» البوتات
💥 التعديل «» الملفات
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
• تعطيل + الامر ادناه » لتعطيل امر 🔐
• تفعيل + الامر ادناه » لتفعيل الامر 🔓

📮✣ الايدي
📮✣ اطردني
📮✣ الرابط
📮✣ الالعاب
📮✣ الاشتراك الاجباري
📮✣ الاضافه
📮✣ الزخرفه
📮✣ التصميم
📮✣ الترحيب
••┉┉┉┉┉┉┉┉┉┉┉┉┉•• 
📮✣ للاستفسار ‹ $buyy › 👨🏽‍💻
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}

if($text =="م المطور" || $text == "اوامر المطور"){
	if (in_array($from_id,$Dev) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
👨‍✈️❉ اهلا بك مطوري 🙋🏽‍♂
🔘❉ اليك اوامرك في خاص البوت وهنا !
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
• تفعيل/تعطيل المجموعات
• وضع شرط التفعيل
• تفعيل البوت خدمي
• تفعيل البوت للمطور
• وضع اسم للبوت
• رفع/تنزيل مطور
• المطورين / مسح المطورين
• رفع منشئ / مدير
• بقيه الاوامر في كيبورد البوت في الخاص
• تستطيع التحكم بها هنا ايضا
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
📮✣ للاستفسار ‹ @ieoooo
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}

if($text =="م2"  ){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
👨‍✈️❉ اهلا بك عزيزي 🙋🏽‍♂
🔘❉ اليك اوامر اوامر الوضع !
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
🗯❉ وضع ترحيب + نص الترحيب
• تاكد من تفعيل الترحيب •
🗯❉ وضع قوانين + القوانين
🗯❉ وضع قناة + قناة اشتراك اجباري
🗯❉ وضع عدد الاضافه + عدد
🗯❉ وضع اسم + اسم للمجموعة
🗯❉ وضع وصف + نص الوصف
🗯❉ وضع  + نص الترحيب
🗯❉ وضع رابط + رابط المجموعة
••┉┉┉┉┉┉┉┉┉┉┉┉┉•• 
📮✣ للاستفسار ‹ $buyy › 👨🏽‍💻
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
if($text =="م4"  ){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
👨‍✈️❉ اهلا بك عزيزي 🙋🏽‍♂
🔘❉ اليك اوامر اوامر الاعضاء !
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
🗯❉ ايدي » لعرض ايديك ومعلوماتك
🗯❉ معلوماتي » لعرض معلوماتك
🗯❉ موقعي » لعرض موقعك
🗯❉ اسمي » لعرض اسمك
🗯❉ معرفي » لعرض معرفك
🗯❉ ايديي » لعرض ايديك
🗯❉ رتبتي » لعرض رتبتك
••┉┉┉┉┉┉┉┉┉┉┉┉┉•• 
📮✣ للاستفسار ‹ @ieoooo › 👨🏽‍💻
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
if($text =="م3"  ){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
👨‍✈️❉ اهلا بك عزيزي 🙋🏽‍♂
🔘❉ اليك اوامر الادمنيه والمدراء! 
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
🚫❉ حظر (بالرد) » لحظر العضو من المجموعة 
🚫❉ كتم/تقييد (بالرد) » لتقييد العضو في المجموعة
🚫❉ تقييد/كتم لمدة + عدد الدقائق » لكتم او تقييد العضو بالتوقيت
🚸❉ رفع ادمن (بالرد) » لرفع العضو ادمن بالمجموعة
🚸❉ رفع مشرف (بالرد) » لرفع العضو مشرف في المجموعة
🚸❉ رفع مدير » لرفع العضو مدير في المجموعة
🚸❉ رفع ممير » لرفع العضو مميز بالمجموعة
••┉┉┉┉┉┉┉┉┉┉┉┉┉•• 
🔱❉ اوامر المسح وعرض القوائم :-
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
⛓❉ الادمنيه » لعرض الادمنية
⛓❉ مسح الادمنيه
⛓❉ المكتومين » لعرض المكتومين
⛓❉ المقيدين » لعرض المقيدين
⛓❉ مسح المكتومين
⛓❉ مسح المقيدين
⛓❉ القوانين » لعرض القوانين
⛓❉ مسح القوانين
⛓❉ المدراء » لعرض قائمة المدراء
⛓❉ مسح المدراء » لمسح المدراء
⛓❉ المميزين » لعرض المميزين
⛓❉ مسح المميزين 
⛓❉ المشرفين » لعرض المشرفين
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
📮✣ للاستفسار ‹ $buyy › 👨🏽‍💻
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}
if($text =="م5"  ){
	if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer)) {	if ($tc == 'group' | $tc == 'supergroup'){  
	$add = $settings["information"]["added"];
if ($add == true) {
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"
👨‍✈️❉ اهلا بك عزيزي 🙋🏽‍♂
🔘❉ اليك اوامر اوامر الاضافيه !
••┉┉┉┉┉┉┉┉┉┉┉┉┉••
💢❉ اضف رد 
💢❉ حذف رد
💢❉ الردود
💢❉ مسح الردود
💢❉ زخرفلي
💢❉ صصملي
💢❉ رسائلي
💢❉ نقاطي
💢❉ بيع نقاطي
💢❉ مسح رسائلي
💢❉ الالعاب
💢❉ تفاعلي
💢❉ نسبه تفاعلي
💢❉ /insta + رابط المنشور
💢❉ اطردني
••┉┉┉┉┉┉┉┉┉┉┉┉┉•• 
📮✣ للاستفسار ‹ $buyy › 👨🏽‍💻
",
    'reply_to_message_id'=>$message_id,
  	]);
  	}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"📍 لم يتم تفعيل البوت في المجموعة ! م̷ـــِْن فضلك قم بتفغيل البوت بإرسال
ℹ️ `تفعيل ` البوت يتم تفعيله بشكل مجاني ",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
    }	
  }
	}
}

if($text == "رابط حذف" or $text == "رابط الحذف" or $text == "اريد احذف الحساب" or $text == "ححذف"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" ⸨ رابط حذف التلكرام ⸩ 🗑
➧  https://telegram.org/deactivate
⸺⸺⸺⸺⸺⸺⸺
",
'reply_to_message_id'=>$message->message_id, 
]);
}

if(in_array($from_id,$Dev)){
$info = "مطور اساسي 👷";
}elseif($status == "creator"){
$info = "منشى المجموعة 🕵";
}elseif($status == "administrator"){
$info = "مشرف المجموعة 👮";
}elseif(in_array($from_id,$admin_user) ){
$info = "ادمن في مجموعة 💂";
}elseif(in_array($from_id,$manger) ){
$info = "مدير المجموعة 🙇";
}elseif(in_array($from_id,$mmyaz) ){
$info = "عضو مميز 👼";
}elseif(in_array($from_id,$developer) ){
$info = "من المطورين 👷";
}elseif($status == "member" ){
$info = "عضو فقط 😿";
}
if(!$re_user){
$usr = "لايوجد يوزر 😐";
}elseif($username){
$usr = "@$username";
}
if($text=="رتبتي" ){
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"🥇¦› *رتــبتڪ* ›› *$info* 👨‍🏭

🎗┇› [$name](tg://user?id=$from_id)
",
'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}
if($text == " مـَسّـِآء الـخّـيًــر" || $text == " مَـــسُأُء أَلَــوّورّد " || $text == "مساء الخير" || $text == "مسا الخير"){
if ($tc == 'group' | $tc == 'supergroup'){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendsticker',[
'chat_id'=>$chat_id,
'sticker'=>"https://t.me/shehad2/8036",
 'reply_to_message_id'=>$message_id,
]);}}}
$rand = array('مزاج 🚶','في مانع 😒','صنافه','مدري لَيــِْ♡̷̴̬̩̃̊ـِْش😹😔','خلاص دامك ماتعرف اسكت لٱ تسئل 😹🐸');
$ra = array_rand($rand, 1);
if($text ==  "ليش"or $text =="لَيــِْ♡̷̴̬̩̃̊ـِْش "){
if ($tc == 'group' | $tc == 'supergroup'){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra]
]);
}
}
}
$rand = array('انَـَY̷ ̜̩̐̌̋O̷ ̜̩̐̌̋U̷ ̜̩̐̌̋ـَتَ الاجمل👍🌷','كـ جمالك حب 😘','مثلك 😍');
$ra = array_rand($rand, 1);
if($text == 'جميل'){
if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra]
]);
}
}
}
$rand = array('شو تسويها🙁','يله خلينا نشوف');
$ra = array_rand($rand, 1);
if($text == 'اسويها'){
if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
]);
}
}
}
if(preg_match('/^(.*)(م̷ـــِْن امس|من امس|امس |قبل يومين )(.*)/',$text) ){
if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
حاول الان حب لاتيئس ☹",
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}
}
if($text == "ضابح" or $text == "ضايج"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"روح انتحر🌚🌷",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if($text == "🚶‍♂"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ع وين😉",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if($text == "😂"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لف اسنانك😚فضحتنا بين الأجانب😢",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if($text == "طمام"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"سوي زحاوق😋لرجع وماهي جاهزه😒😂",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if(preg_match('/^(.*)(ملف ردود|بوت ردود|ردود|ملف بوت ردود)(.*)/',$text) ){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"ها حب تريد ملفي 😔رح اعطيك تَعاّإاّإلّ خاص 🚶
بس ارسل الملف", 
'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}
}
$rand = array('احسن 😌مو لآزٍمٍ تدري بكل جديد','كلشي انت متعرفه اصلا 😴','م̷ـــِْن مِِـتــ ؟؟! ـى عرفت شي انت بدون ماعلمك 😔😹','عمرك لادريت ☹');
$ra = array_rand($rand, 1);

if($text == 'مدري'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra]
]);
}
}
}
if($text == "مالك"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"مدري🤷‍♂سئل نفسك",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if($text == "وش"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"سوي الدقل. خل نسمع الاخبار📻😂",
'reply_to_message_id'=>$message->message_id, 
]);
}
}
}
if($text == "فهمت"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اكييد😌",
'reply_to_message_id'=>$message->message_id, 
]);
}}}

if($text == "ممكن طلب"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اتفظل بس لاتطلب حسابات🙂",
'reply_to_message_id'=>$message->message_id, 
]);
}}}

if($text == "??"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"وش فْيَگ روح اقرب عياده استلم علاجك😬",
'reply_to_message_id'=>$message->message_id, 
]);
}}}
$rand = array('بويش تفكر شاركنا 🚶','لٱ تروح بعيد خلك معنا 🐸','شو مافهمت 🙄');
$ra = array_rand($rand, 1);

if($text == '🤔'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}}
$rand = array('معك حب شو تريد🙂','موجود ماتشوفني يعني 😕','مشغولين حب 😔بقي انت ماعندك شغل');
$ra = array_rand($rand, 1);

if($text == 'وينكم'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra]
]);
}}}
if($text == "تعال"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اجيك خاص😍",
'reply_to_message_id'=>$message->message_id, 
]);
}}}
if($text == "تعال خاص"){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"🤭😐😑",
'reply_to_message_id'=>$message->message_id, 
]);
}}}
$rand = array(' دِْۈۈۈۈم/يّارٌب ماتفارقك العافيه 😘ْ','يستاهل الحمد🙌','❤️');
$ra = array_rand($rand, 1);

if($text == 'الحمد لله'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}}
$rand = array('ع الجميع 🌹','علينا وعليكم 
اكثرو م̷ـــِْن الصلاة ع النبي واله 💐','اغنم حبي ودعي ليـّۓ معاك 🌺');
$ra = array_rand($rand, 1);

if($text == 'جمعه مباركه'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}}
$rand = array('هاا گـّيَفْ الـّحـّال ٱن شـْاءِ اللـٌہ بَخـّيَرٌ 🙂','وينك مغيب غلا 😉');
$ra = array_rand($rand, 1);

if($text == 'وعليكم السلام'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}}
$rand = array('🌺⌣{يـّـٌدِْۈۈ/عّزٌگ-ۈنَبْضّ قَلبْگ/ۈۈمْ}⌣ 🍂','تدوم العافيه عليك غلا 🤓');
$ra = array_rand($rand, 1);

if($text == 'دووم'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}}}
$rand = array('الْحٍمَدٍ للـّہ🌹
     وانت??','بخيـــ😃ــر دامـّگ بـْخـّيرٌ يـّٱلـّغـٌالـّے 🌾');
$ra = array_rand($rand, 1);

if($text == 'كيفك'){
	if ($tc ==  group  | $tc ==  supergroup ){
if ($settings["lock"]["rdodsg"] == "مقفول️"){
bot('SendMessage',[
'chat_id'=>$chat_id,    
'text'=>$rand[$ra],
'parse_mode'=>'MarkDown','disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,
]);
}
}}
if($text =="عيش بشوقك" || $text =="شوقك"){
	bot('sendaudio',[
	'chat_id'=>$chat_id,
	'audio'=>"t.me/nnnhdjfr/20"
	]);
	}
	if($text =="هلا والله" || $text =="هلا "){
	bot('sendaudio',[
	'chat_id'=>$chat_id,
	'audio'=>"t.me/nnnhdjfr/64"
	]);
	}
if($text =="السورس" || $text =="سورس"){
	bot('sendphoto',[
	'chat_id'=>$chat_id,
	'photo'=>"
👨‍✈️❉ اهلا بك عزيزي في سورس كيناي
💢❉ السورس الاول بلغه php
💢❉ السورس الاول اكتمالا في اليمن والدول العربيه
💢❉ لايحتاج سرفرات او VPS
💢❉ سريع جدا ومميزات خياليه
••┉┉┉┉┉┉┉┉┉┉┉┉┉•• 
💢❉ قم بمراسله المطور لصنع بوت مدفوع خاص بك › @ieoooo ✅
📮✣ لصنع بوتك مجاني من مصنع بوتات كيناي ‹ @GRT16BOT › 👨🏽‍💻
",
   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
	[
	['text'=>'','url'=>"https://telegram.me/KENAEBOT?start"]
              ] 
              ],
        ])
            ]);
        }
