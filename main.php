<?php

ob_start();

///////////===[IMPORTING RESOURCES]===///////////

include "./Resources/Vars.php";
include "./Resources/Functions.php";
define('API_KEY',$API_KEY);


///////////===[IMPORTING PLUGINS]===///////////

include "./Plugins/proxy.php";

////////////////=========[START MESSAGE]=========////////////////

if(strpos($text, "/start") === 0){
    bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"<b>Hey $from_fname,

I'm $USERNAMEBOT. I can scrape proxy for you ❤️

Try /cmds to know More</b>",
	'parse_mode'=>'html',
	'reply_to_message_id'=> $message_id,
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"Donate 💬",'url'=>"https://paypal.me/Mushtaq9011"]],[['text'=>"Our Channel 🌐",'url'=>"https://t.me/ExploitzBots"],['text'=>"Dev",'url'=>"https://t.me/Madboi_xd"]]
  ],'resize_keyboard'=>true])
	
  ]);


//////////////////////////////////////////////

if (isset($TG_DUMP_CHAT)) {

    bot('sendmessage',[
	'chat_id'=>$TG_DUMP_CHAT,
	'text'=>"<b>User Started Bot</b>

First Name:- $from_fname
User Name:- @$username2
User ID:- <code>$from_id</code>
Current Time:- <code>$date1</code>",
	'parse_mode'=>'html',
	
  ]);
}

}

////////////////=========[HELP MENU]=========////////////////


////////////////=========[PROXY]=========////////////////

if($data == "proxy"){
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"<b>🌀 Proxy Scrapper 🌀

Command:</b>

/http - Sends Fresh HTTPs Proxies
/socks4 - Sends Fresh Socks4 Proxies
/socks5 - Sends Fresh Socks5 Proxies",
	'parse_mode'=>'html',
	'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"Return",'callback_data'=>"help"]],
	],'resize_keyboard'=>true])
	]);
}


////////////////=========[WEATHER INFO]=========////////////////

if($data == "cmds"{
	bot('editMessageText',[
	'chat_id'=>$chatid,
	'message_id'=>$messageid,
	'text'=>"<b>/http - Sends Fresh HTTPs Proxies
/socks4 - Sends Fresh Socks4 Proxies
/socks5 - Sends Fresh Socks5 Proxies"

?>
