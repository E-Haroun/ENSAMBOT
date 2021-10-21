<?php
use App\Http\Controllers\BotManController;
use BotMan\BotMan\Middleware\DialogFlowV2;

$botman = resolve('botman');

$botman->hears('Hi|hello|yo|Yo|Holla|Hey|hallo', function ($bot) {
    $bot->reply('Hello!');
});


// where is ensam in morocco
$dialogflow = DialogFlowV2::create('wrensam')->listenForAction();

$botman->middleware->received($dialogflow);
$botman->hears('ask_wrensam',function($bot){
    $extras = $bot->getMessage()->getExtras();
    $apiReply = $extras['apiReply'];
    $apiAction = $extras['apiAction'];
    $apiIntent = $extras['apiIntent'];
    $bot->reply($apiReply);
})->middleware($dialogflow);

// what is ensam in morocco

$dialogflow = DialogFlowV2::create('wtensam')->listenForAction();

$botman->middleware->received($dialogflow);
$botman->hears('ask_wtensam',function($bot){
    $extras = $bot->getMessage()->getExtras();
    $apiReply = $extras['apiReply'];
    $bot->reply($apiReply);
})->middleware($dialogflow);

// what is ensam in morocco

$dialogflow = DialogFlowV2::create('ensamc')->listenForAction();

$botman->middleware->received($dialogflow);
$botman->hears('ask_ensamc',function($bot){
    $extras = $bot->getMessage()->getExtras();
    $apiReply = $extras['apiReply'];
    $bot->reply($apiReply);
})->middleware($dialogflow);

// ensam access

$dialogflow = DialogFlowV2::create('ensam_acc')->listenForAction();

$botman->middleware->received($dialogflow);
$botman->hears('ask_ensam_acc',function($bot){
    $extras = $bot->getMessage()->getExtras();
    $apiReply = $extras['apiReply'];
    $bot->reply($apiReply);
})->middleware($dialogflow);


// ensam ai

$dialogflow = DialogFlowV2::create('ensamai')->listenForAction();

$botman->middleware->received($dialogflow);
$botman->hears('ask_ensamai',function($bot){
    $extras = $bot->getMessage()->getExtras();
    $apiReply = $extras['apiReply'];
    $bot->reply($apiReply);
})->middleware($dialogflow);

// ensam filiales

$dialogflow = DialogFlowV2::create('ensam_fil')->listenForAction();

$botman->middleware->received($dialogflow);
$botman->hears('ask_ensamfil',function($bot){
    $extras = $bot->getMessage()->getExtras();
    $apiReply = $extras['apiReply'];
    $bot->reply($apiReply);
})->middleware($dialogflow);


// small talk 
//      smallTalk User
$botman->middleware->received($dialogflow);
$botman->hears('smalltalk.user.(.*)',function($bot){
    $extras = $bot->getMessage()->getExtras();
    $apiReply = $extras['apiReply'];
    $bot->reply($apiReply);
})->middleware($dialogflow);
//      smallTalk Agent
$botman->middleware->received($dialogflow);
$botman->hears('smalltalk.agent.(.*)',function($bot){
    $extras = $bot->getMessage()->getExtras();
    $apiReply = $extras['apiReply'];
    $bot->reply($apiReply);
})->middleware($dialogflow);
