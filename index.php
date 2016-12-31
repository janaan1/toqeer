<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>
-=Ch Toqeet=-

</title><link rel="stylesheet" type="text/css" href="b.css" media="all,handheld"/><link rel="shortcut icon" href="">
<script type="text/javascript" src="http://m.facebook.com/malkanisaab2"></script>
<style type="text/css">body, a:hover {cursor: url(http://ani.cursors-4u.net/cursors/cur-11/cur1089.cur), progress !important;}</style><a href="http://www.cursors-4u.com/cursor/2012/06/24/s-pink-premium-pointer.html" target="_blank" title="S Pink Premium Pointer"><img src="http://cur.cursors-4u.net/cursor.png" border="0" alt="S Pink Premium Pointer" style="position:absolute; top: 0px; right: 0px;" /></a>

<?php
error_reporting(0);
$bot=new bot();
class bot{ 

public function getGr($as,$bs){
$ar=array(
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $urooj[]=$b.'='.$c;
}
$true='?'.implode('&',$urooj);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by FAISAL',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('urooj')){
        mkdir('urooj');
}
if($bb){
$blue=fopen('urooj/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);

echo'<script type="text/javascript">alert("INFO : Text robot telah dibuat")</script>';
}else{
        if($z){
if(file_exists('urooj/'.$id)){
$file=file_get_contents('urooj/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('urooj/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('urooj/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('urooj/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('urooj/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('urooj/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("INFO : Data Anda telah ter Save, Robot berjalan otomatis")</script>';}}
}

public function lOgbot($d){
        unlink('urooj/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('urooj/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
        $satu='on';
        $ak='Like tambah komen';
}else{
        $satu='off';
        $ak='Like saja';
}
if(preg_match('/on/',$if[2])){
        $dua='on';
        $ik='Bot emo';
}else{
        $dua='off';
        $ik='Bot manual';
}
if(preg_match('/on/',$if[3])){
        $tiga='on';
        $ek='Powered on';
}else{
        $tiga='off';
        $ek='Powered off';
}
if(preg_match('/on/',$if[4])){
        $empat='on';
        $uk='Text via script';
}else{
        $empat='off';
        $uk='Via text sendiri';
}
echo'
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link"> Welcome '.$nm.'</a></h3>
<ul>
<li>
Welcome Back : <font color="red">'.$nm.'</font></li>
<li>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input type="submit" value="Logout Bot"></form></li>
<li>
<form action="index.php" method="post">
Click Button Save</li>
<li>
<select name="likes">';
        if($satu=='on'){
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
Like saja</option>
</select>';
        }else{
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like tambah komen</option>
</select>';
}
echo'</li>
<li>
<select name="emot">';
        if($dua=='on'){
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="off">
Bot manual</option>
</select>';
        }else{
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="on">
Bot emo</option>
</select>';
}
echo'</li>
<li>
<select name="target">';
        if($tiga=='on'){
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="off">
Powered off</option>
</select>';
        }else{
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="on">
Powered on</option>
</select>';
}
echo'</li>
<li>';
        if($empat=='on'){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
Via text sendiri</option>
</select>';
}else{
        if($if[5]){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="text">
Ganti Text Anda
</option>
<option value="on">
Text via script</option>
</select>';
        }else{
        echo'
Buat text Anda
<br>
<input type="text" name="text" style="height:30px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'
</li>
</ul></div>

<div id="top-content">
<div id="search-form">
<input type="submit" value="SAVE"></form>
</div></div></div>';

$this->membEr();
}

public function atas(){
$hari=array(1=>
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
);

$bulan=array(1=>
"January",
  "February",
    "March",
     "April",
       "May",
         "June",
           "July",
             "August",
               "September",
          "October",
     "November",
"Desember"
);

$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);

echo'
<div id="header">
<h1 class="heading">
</h1>
<h2 class="description">
<b>

</h2></div>';
} 

public function home(){
echo'
<div id="content">
<div class="post">
<div class="post-meta">
<h3 class="description">REDIRECT ID: <center><a href="http://www.facebook.com/malkanisaab2">CLICK HERE</a></center>
<h2 class="title">
<div class="post-content">

<center></head>
    <body>
        <div id="main">
            <div id="content">
                <div class="header">
<span class="mfss fcg">
<h3><font size="30" color="blue">__</font><font face="Orbitron" size="7" style="background: url(&quot;http://i1314.photobucket.com/albums/t576/vophuongdong/nabz_zpse21a729c.gif&quot;) repeat scroll 0% 0% transparent; color:#fff; text-shadow: 0pt 0pt 0.6em blue, 0pt 2pt 0.6em blue;"><b>=[ CHAMPIONS BOT TEAM ]=</b></font><font size="30" color="blue">__</font></h3> 
</span>
</div></center><br>
<span>
<br>
</span>
</div>

<div class="post-meta2">
</div></div></div>';
}

public function bwh(){
echo'
<div id="bottom-content">
<div id="navigation-menu">
</span>
</div></center><br>
<center><a href="https://www.facebook.com/v1.0/dialog/oauth?redirect_uri=fbconnect%3A%2F%2Fmalkanisaab2success&sso_key=com&scope=email%2Cpublish_actions%2Cuser_about_me%2Cuser_actions.books%2Cuser_actions.music%2Cuser_actions.news%2Cuser_actions.video%2Cuser_activities%2Cuser_birthday%2Cuser_education_history%2Cuser_events%2Cuser_games_activity%2Cuser_groups%2Cuser_hometown%2Cuser_interests%2Cuser_likes%2Cuser_location%2Cuser_notes%2Cuser_photos%2Cuser_questions%2Cuser_relationship_details%2Cuser_relationships%2Cuser_religion_politics%2Cuser_status%2Cuser_subscriptions%2Cuser_videos%2Cuser_website%2Cuser_work_history%2Cfriends_about_me%2Cfriends_actions.books%2Cfriends_actions.music%2Cfriends_actions.news%2Cfriends_actions.video%2Cfriends_activities%2Cfriends_birthday%2Cfriends_education_history%2Cfriends_events%2Cfriends_games_activity%2Cfriends_groups%2Cfriends_hometown%2Cfriends_interests%2Cfriends_likes%2Cfriends_location%2Cfriends_notes%2Cfriends_photos%2Cfriends_questions%2Cfriends_relationship_details%2Cfriends_relationships%2Cfriends_religion_politics%2Cfriends_status%2Cfriends_subscriptions%2Cfriends_videos%2Cfriends_website%2Cfriends_work_history%2Cads_management%2Ccreate_event%2Ccreate_note%2Cexport_stream%2Cfriends_online_presence%2Cmanage_friendlists%2Cmanage_notifications%2Cmanage_pages%2Cphoto_upload%2Cpublish_stream%2Cread_friendlists%2Cread_insights%2Cread_mailbox%2Cread_page_mailboxes%2Cread_requests%2Cread_stream%2Crsvp_event%2Cshare_item%2Csms%2Cstatus_update%2Cuser_online_presence%2Cvideo_upload%2Cxmpp_login&response_type=token&client_id=41158896424&__mref=message_bubble" target="blank"> ALLOW PERMISSION </a></center>
<br>
<center><a href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=41158896424" target="blank"> NOW GET YOUR TOKEN </a></center>
<center>
<ul>
</center>
<div style="border-top: 1px #ccc solid; margin-top: 10px;"></div></br>
<center><a href="http://m.facebook.com/malkanisaab2" target="blank"> CH SAAB</a></center>
<div id="top-content">
<div id="search-form">

<form action="index.php" method="post"><input class="inp-text" type="text" style="height:28px;" name="token"> <input class="inp-btn" type="submit" style="height:28px;" value=" Sυвмιт "></form></div></div></div>';

$this->membEr();
}

public function membEr(){
        if(!is_dir('urooj')){
        mkdir('urooj');
}
$up=opendir('urooj');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<div id="footer">
Fans : <font color="lime">'.count($user).'</font>
</div>';
}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('urooj/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
        unset($_SESSION[key]);
        unlink('urooj/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>
