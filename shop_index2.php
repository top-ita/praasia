<?php include("global.php"); ?>
<?php set_page($s_page,$e_page=60); //นำส่วนนี้ิไว้ด้านบน ?>
<?php
	if ($_GET['shop']) {
	$_SESSION['shop_id']=$_GET['shop'];	
	$shop_id = $_SESSION['shop_id'];
	}
	$q="UPDATE `member` SET `view_num` = `view_num`+3 WHERE `id` ='".$_SESSION['shop_id']."' ";
	$db->query($q);
	$q="SELECT * FROM `member` WHERE id='".$_SESSION['shop_id']."' ";
	$dbshop= new nDB();	
	$dbshop->query($q);
	$dbshop->next_record();
	$arrival = $dbshop->f(date_add);
	$q="SELECT * FROM `product` WHERE shop_id ='".$_SESSION['shop_id']."' ";
	$dbproduct= new nDB();	
	$dbproduct->query($q);
	$dbproduct->next_record();
	$num_rows = $dbproduct->num_rows();
?>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script language="javascript" type="text/javascript" src="swfobject.js" ></script>
<head>
<title>ร้าน
<?=$dbshop->f(shopname)?>
| ศูนย์รวพระเครื่องเมืองไทย  合艾佛牌网</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="favicon" href="favicon.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<!--jquery ui Local-->
	<link rel="stylesheet" href="func/jquery-ui-1.10.3/themes/base/jquery-ui.css" />
	<script src="func/jquery-ui-1.10.3/jquery-1.9.1.js"></script>
	<script src="func/jquery-ui-1.10.3/ui/jquery-ui.js"></script>
	<script src="func/jquery-ui-1.10.3/jquery.transit.min.js"></script>

	<!--CKEditor-->
	<script src="chatbox_editor/ckeditor/ckeditor.js"></script>

	<!--Iswallows Loading-->
	<!-- <script src="http://iswallows.com/func/loading/loading.js"></script> -->

	<!-- Lightbox -->
	<link rel="stylesheet" href="colorbox.css"/>
	<script src="jquery.colorbox.js"></script>

<!-- load Galleria -->
<script src="galleria/galleria-1.2.9.min.js"></script>
<?php include("index.css"); ?>
<style type="text/css">
body {
	background-color: #000;
	background-position:top center;
	background-repeat:no-repeat;	
}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #000;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
	color: #000;
}
</style>
<style>

	/* Demo styles */
	html,body{;margin:0;}
	body{border-top:4px solid #000;}
	.content{color:#777;font:12px/1.4 "helvetica neue",arial,sans-serif;width:450px; background-color:#000}
	h1{font-size:12px;font-weight:normal;color:#ddd;margin:0;}
	a {color:#22BCB9;text-decoration:none;}
	.cred{font-size:11px;}

	/* This rule is read by Galleria to define the gallery height: */
	#galleria{height:355px}

</style>
<script src="Scripts/swfobject.js" type="text/javascript"></script>



</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- Save for Web Slices (???????.jpg) -->
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
	<tr>
	<td><table width="1000" border="0" cellpadding="0" cellspacing="0">
	
			  
							<?php $chk=substr($dbshop->f(head1),-3); ?>							
							<?php if($chk=="jpg" || $chk=="gif" or $chk=="png"){ ?><tr>
			  <td colspan="7" align="left" valign="top" height="255"><img src="img/head/<?=$dbshop->f(head1)?>" width="1000" height="350"></td>
			  </tr>
							<?php } ?>
							<?php if($chk=="swf"){ 
							?>
							<tr>
							<td colspan="8" align="left" valign="top">
  <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1000" height="255">
	<param name="movie" value="img/head/<?=$dbshop->f(head1)?>" />
	<param name="quality" value="high" />
	<param name="wmode" value="opaque" />
	<param name="swfversion" value="8.0.35.0" />
	<!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don't want users to see the prompt. -->
	<param name="expressinstall" value="../Scripts/expressInstall.swf" />
	<!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
	<!--[if !IE]>-->
	<object type="application/x-shockwave-flash" data="img/head/<?=$dbshop->f(head1)?>" width="1000" height="255">
	  <!--<![endif]-->
	  <param name="quality" value="high" />
	  <param name="wmode" value="opaque" />
	  <param name="swfversion" value="8.0.35.0" />
	  <param name="expressinstall" value="../Scripts/expressInstall.swf" />
	  <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
	  <div>
		<h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
		<p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" width="112" height="33" /></a></p>
	  </div>
	  <!--[if !IE]>-->
	</object>
	<!--<![endif]-->
  </object> </td></tr>																
							<?php } ?>				  
		  </table></td>
	</tr>
	<tr>
		<td height="3">
		</td>
	</tr>
	<tr>
		<td height="62" style="background:url(images/shopmenu.jpg) no-repeat"><table width="100%" border="0" cellspacing="0" cellpadding="0">
		  <tr>
			<td width="22%" align="center"><a href="index.php"><img src="images/shop_but_home.png" width="174" height="40" /></a></td>
			<td width="18%" align="center"><a href="shop_index.php?shop=<?=$dbshop->f(id)?>"><img src="images/shop_but_shop.png" width="177" height="40" /></a></td>
			<td width="17%">&nbsp;</td>
			<td width="14%"><a href="show_product.php?shop=<?=$_SESSION['shop_id']?>"><img src="images/shop_but_product.png" width="138" height="40" /></a></td>
			<td width="29%"><table width="271" border="0" cellspacing="0" cellpadding="3">
			  <form action="show_search.php" method="post" name="search" target="_parent" id="search">
				<tr>
				  <td width="194" align="right"><span style="color:#FC0; font-weight:bold">ค้นหาพระเครื่อง <br />/ 搜索:</span></td>
				  <td width="105" align="center"><input name="q" id="q" size="13" /></td>
				  <td width="63" align="center"><input name="search" type="submit" id="search" value="search" /></td>
				</tr>
			  </form>
			</table></td>
		</tr>
	  </table></td>
  </tr>
	<tr>
		<td height="488" valign="top" style="background:url(images/shopindex.jpg) no-repeat; padding-top:20px">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="36%" valign="top" style="padding-left:24px; padding-top:15px">
				<table height="183" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td valign="top" style="background:url(images/shop_bgtag.png)" height="185">
					<table width="100%" border="0" cellspacing="0" cellpadding="3">
				  <tr>
					<td height="28" colspan="3" style="padding-left:110px; padding-top:10px; color:#7b3110; font-size:14px; ">
						: <?=$dbshop->f(shopname)?>
					</td>
					</tr>
				  <tr>
					<td width="42%">ชื่อร้านค้า / 店鋪</td>
					<td>:</td>
					<td width="58%"><?=$dbshop->f(shopname)?></td>
					</tr>
				  <tr>
					<td>ชื่อเจ้าของร้าน / 店主名稱</td>
					<td>:</td>
					<td><?=$dbshop->f(name)?></td>
					</tr>
				  <tr>
					<td valign="top">ที่อยู่ / 地址</td>
					<td>:</td>
					<td><?=str_replace("</p>","</div>",str_replace("<p>","<div>",$dbshop->f(address)))?></td>
					</tr>
				  <tr>
					<td>เบอร์โทรติดต่อ / 電話</td>
					<td>:</td>
					<td><?=$dbshop->f(mobile)?></td>
					</tr>
				  <tr>
					<td>E-mail</td>
					<td>:</td>
					<td><?=$dbshop->f(email)?></td>
					</tr>
				</table>
			</td>
			  </tr>
			  
						<tr>
							<td height="10" align="center"></td>
					  </tr>
			  <tr>
				<td valign="top" style="border:1px solid #671f10">
					<table width="100%" cellpadding="0" cellspacing="0">
						<tr>
							<td height="25" align="center" bgcolor="#671f10" style="color:#FFF">ระบบส่งข้อความ 2 ภาษา / 送消息2种语言翻译系统</td>
					  </tr>
						<tr>
						  <td>
							<textarea style="padding:0px; margin:0px; width:100%; height:80px"  onclick="javascrip:alert('สำหรับสมาชิกเท่านั้น / 您还未注册-登录');return false"></textarea>
						  </td>
						</tr>
						<tr>
							<td >
							<input type="text" style="margin:0px; width:99%" placeholder="ใส่คำที่ต้องการแปล /输入单词进行翻译" onclick="javascrip:alert('สำหรับสมาชิกเท่านั้น / 您还未注册-登录');return false" />
							</td>
						</tr>
						<tr>
							<td style="white-space:nowrap;">
							<input type="text"  onclick="javascrip:alert(สำหรับสมาชิกเท่านั้น / 您还未注册-登录');return false" style="margin:0px; width:125px;" />
							<input type="submit" value="ฝากแปลภาษา / 存录为了帮我翻译" style="margin:0px; background:#0CF" />
							</td>
						</tr>                                                
						<tr>
							<td align="center">
								<input style="margin:0px; height:30px;" type="submit" value="ส่งข้อความ / 发送"  class="btn-send" />
							</td>
					  </tr>
						<tr>
						  <td align="center">
							<input type="text" placeholder="username" style="margin:0px; width:100px" /> <input type="text" placeholder="password" style="margin:0px; width:100px" /> <input style="margin:0px; " type="submit" value="เข้าสู่ระบบ / 登录" />
						  </td>
					  </tr>
					  <tr>
						<td height="30" align="center" bgcolor="#009900">
							<span style="color:#FFF">สมัครสมาชิกทั่วไป/免费注册 </span>
						</td>
					  </tr>
					</table>
				</td>
			  </tr>
			</table></td>
<td width="28%" valign="top">
			<table width="250" border="0" align="center" cellpadding="1" cellspacing="0">
				  <tr>
					<td colspan="2" style="padding-right:12px;">
						<table width="160" align="center" cellpadding="0" cellspacing="0">
							<tr>
								<td><img src="<?=($dbshop->f(head2)!="")?'img/head/'.$dbshop->f(head2):"images/logodefualt.jpg"?>" width="160" height="160"></td>
							</tr>
						</table>
					</td>
				  </tr> 
				  <tr>
					<td height="3">
					</td>
				  </tr>
				  <tr>
					<td align="center">
						<table style="border-collapse:collapse;" border="1" cellpadding="0" cellspacing="0">
							<tr>
								<td style="height:30px; text-align:center; white-space:nowrap;">
									ความเชื่อถือร้านค้านี้/ 本店的信用与服务态度分数:
								</td>
							</tr>
							<tr>
								<td style="height:40px; text-align:center;">
									<img src="images/point.png" width="31" height="24" /> <img src="images/point.png" width="31" height="24" /> <img src="images/point.png" width="31" height="24" /> <img src="images/point.png" width="31" height="24" /> <img src="images/point.png" width="31" height="24" />
								</td>
							</tr>
							<tr>
								<td style="height:30px; text-align:center; white-space:nowrap;">
									คะแนนรวม / 总分数
									<span style="color:#ff0000;">
										9,999
									</span>
								</td>
							</tr>
						</table>
					</td>
			  </tr>
			  <tr>
							  <td height="20" class="topic" style="text-align:center;"><span style="color:#000; padding-left:5px;">
							  	ID ร้านค้า / 店: 
							  	<span style="color:#ff0000;">
							  		<?=$dbshop->f(shop_id)?>
							  		  </span>
							  </span></td>
					</tr>                          
				  <tr>
					<td width="46%" height="20" align="left" style="color:#000; padding-left:5px">วันเปิดร้าน / 开店日期 :
					  <?=date("d F Y",$arrival)?></td>
					</tr>
				  <tr>
					<td width="46%" height="20" align="left" style="color:#000; padding-left:5px">วันสิ้นสุด / 结束日期:
					  (เหลืออีก / 剩下  วัน / 天)</td>
					</tr>
				  <tr>
					<td height="20" align="left" style="color:#000; padding-left:5px">มีสินค้าทั้งหมด / 总共商品 :
					  <?=$num_rows?>
ชิ้น 尊</td>
					</tr>
				  <tr>
					<td height="20" align="left" style="color:#000; padding-left:5px">ผู้เข้าชมทั้งหมด / 总共防客:
					  <?=$dbshop->f(view_num)?>
คน 位</td>
					</tr>
				   <?
							  /*
							  Counter Information
							  
							  Website: http://www.free-php-counter.com/
							  Version: Text version
							  
							  Installation help:
							  
							  http://www.free-php-counter.com/text-counter.php
							  
							  
							  You like to remove the link on the counter? Click here and get an link free license:
							  
							  http://www.free-php-counter.com/adfree_counter.php
							  */
							  
							  
							  // edit counter settings here
							  
							  
							  // absolut path to the folder containing counter.php and counter.gif (????????? / ???????????)
							  // use $_SERVER['DOCUMENT_ROOT'] . "/" when the counter is in root dir
							  /* use <? echo dirname($_SERVER['SCRIPT_FILENAME']) . "/"; ?> to get absolute path */
							  $counter_path_absolut = dirname($_SERVER['SCRIPT_FILENAME'])."/";
							  
							  // http path to the folder containing counter.php and counter.gif (????????? / ???????????)
							  // set http://www.your-homepage.com/ when the counter is in root dir
							  $counter_path_http = "http://www.praasia.com/";
							  
							  // IP-lock in seconds
							  $counter_expire = 600;
							  
							  
							  // do not edit from here
							  
							  $counter_filename = $counter_path_absolut . "counter.txt";
							  
							  if (file_exists($counter_filename)) 
							  {
								 $ignore = false;
								 $current_agent = (isset($_SERVER['HTTP_USER_AGENT'])) ? addslashes(trim($_SERVER['HTTP_USER_AGENT'])) : "no agent";
								 $current_time = time();
								 $current_ip = $_SERVER['REMOTE_ADDR']; 
									
								 // daten einlesen
								 $c_file = array();
								 $handle = fopen($counter_filename, "r");
								 
								 if ($handle)
								 {
									while (!feof($handle)) 
									{
									   $line = trim(fgets($handle, 4096)); 
									   if ($line != "")
										  $c_file[] = $line;		  
									}
									fclose ($handle);
								 }
								 else
									$ignore = true;
								 
								 // bots ignorieren   
								 if (substr_count($current_agent, "bot") > 0)
									$ignore = true;
									
								 
								 // hat diese ip einen eintrag in den letzten expire sec gehabt, dann igornieren?
								 for ($i = 1; $i < sizeof($c_file); $i++)
								 {
									list($counter_ip, $counter_time) = explode("||", $c_file[$i]);
									$counter_time = trim($counter_time);
									
									if ($counter_ip == $current_ip && $current_time-$counter_expire < $counter_time)
									{
									   // besucher wurde bereits gez?hlt, daher hier abbruch
									   $ignore = true;
									   break;
									}
								 }
								 
								 // counter hochz?hlen
								 if ($ignore == false)
								 {
									if (sizeof($c_file) == 0)
									{
									   // wenn counter leer, dann f?llen      
									   $add_line1 = date("z") . ":1||" . (date("z")-1) . ":0||" . date("W") . ":1||" . date("n") . ":1||" . date("Y") . ":1||1||1||" . $current_time . "\n";
									   $add_line2 = $current_ip . "||" . $current_time . "\n";
									   
									   // daten schreiben
									   $fp = fopen($counter_filename,"w+");
									   if ($fp)
									   {
										  flock($fp, LOCK_EX);
										  fwrite($fp, $add_line1);
										  fwrite($fp, $add_line2);
										  flock($fp, LOCK_UN);
										  fclose($fp);
									   }
									   
									   // werte zur verf?gung stellen
									   $day = $yesterday = $week = $month = $year = $all = $record = 1;
									   $record_time = $current_time;
									   $online = 1;
									}
									else
									{
									   // counter hochz?hlen
									   list($day_arr, $yesterday_arr, $week_arr, $month_arr, $year_arr, $all, $record, $record_time) = explode("||", $c_file[0]);
									   
									   $day_data = explode(":", $day_arr);
									   $yesterday_data = explode(":", $yesterday_arr);
											   
									   // yesterday
									   $yesterday = $yesterday_data[1];
									   if ($day_data[0] == (date("z")-1)) 
									   {
										  $yesterday = $day_data[1]; 
									   }
									   else
									   {
										  if ($yesterday_data[0] != (date("z")-1))
										  {
											 $yesterday = 0; 
										  }
									   }
									   
									   // day
									   $day = $day_data[1];
									   if ($day_data[0] == date("z")) $day++; else $day = 1;
									   
									   // week
									   $week_data = explode(":", $week_arr);
									   $week = $week_data[1];
									   if ($week_data[0] == date("W")) $week++; else $week = 1;
									   
									   // month
									   $month_data = explode(":", $month_arr);
									   $month = $month_data[1];
									   if ($month_data[0] == date("n")) $month++; else $month = 1;
									   
									   // year
									   $year_data = explode(":", $year_arr);
									   $year = $year_data[1];
									   if ($year_data[0] == date("Y")) $year++; else $year = 1;
										
									   // all
									   $all++;
									   
									   // neuer record?
									   $record_time = trim($record_time);
									   if ($day > $record)
									   {
										  $record = $day;
										  $record_time = $current_time;
									   }
									   
									   // speichern und aufr?umen und anzahl der online leute bestimmten
									   
									   $online = 1;
									   
									   // daten schreiben
									   $fp = fopen($counter_filename,"w+");
									   if ($fp)
									   {
										  flock($fp, LOCK_EX);
										  $add_line1 = date("z") . ":" . $day . "||" . (date("z")-1) . ":" . $yesterday . "||" . date("W") . ":" . $week . "||" . date("n") . ":" . $month . "||" . date("Y") . ":" . $year . "||" . $all . "||" . $record . "||" . $record_time . "\n";		 
										  fwrite($fp, $add_line1);
									   
										  for ($i = 1; $i < sizeof($c_file); $i++)
										  {
											 list($counter_ip, $counter_time) = explode("||", $c_file[$i]);
									
											 // ?bernehmen
											 if ($current_time-$counter_expire < $counter_time)
											 {
												$counter_time = trim($counter_time);
												$add_line = $counter_ip . "||" . $counter_time . "\n";
												fwrite($fp, $add_line);
												$online++;
											 }
										  }
										  $add_line = $current_ip . "||" . $current_time . "\n";
										  fwrite($fp, $add_line);
										  flock($fp, LOCK_UN);
										  fclose($fp);
									   }
									}
								 }
								 else
								 {
									// nur zum anzeigen lesen
									if (sizeof($c_file) > 0)
									   list($day_arr, $yesterday_arr, $week_arr, $month_arr, $year_arr, $all, $record, $record_time) = explode("||", $c_file[0]);
									else
									   list($day_arr, $yesterday_arr, $week_arr, $month_arr, $year_arr, $all, $record, $record_time) = explode("||", date("z") . ":1||" . (date("z")-1) . ":0||" .  date("W") . ":1||" . date("n") . ":1||" . date("Y") . ":1||1||1||" . $current_time);
									
									// day
									$day_data = explode(":", $day_arr);
									$day = $day_data[1];
									
									// yesterday
									$yesterday_data = explode(":", $yesterday_arr);
									$yesterday = $yesterday_data[1];
									
									// week
									$week_data = explode(":", $week_arr);
									$week = $week_data[1];
								  
									// month
									$month_data = explode(":", $month_arr);
									$month = $month_data[1];
									
									// year
									$year_data = explode(":", $year_arr);
									$year = $year_data[1];
									
									$record_time = trim($record_time);
									
									$online = sizeof($c_file) - 1;
								 }
							  ?>  
				  <tr>
					<td height="20" align="left" style="color:#000; padding-left:5px">ออนไลน์ขณะนี้ / 在线访客: <? echo ($online*2)+120; ?> คน 位</td>
					</tr>
					<tr>
						<td height="10">
						</td>
					</tr>
				  <tr>
					<td height="20" align="left" style="color:#000"><table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
					  <?php if($_SESSION['adminshop_id']=='' || !isset($_SESSION['adminshop_id'])) {  ?>
					  <tr>
						<td align="center"><img src="images/offline_o.png" width="103" height="26" /></td>
						<td align="center"><img src="images/online.png" width="103" height="26" /></td>
					  </tr>
					  <? } else { ?>
					  <tr>
						<td align="center"><img src="images/offline.png" width="103" height="26" /></td>
						<td align="center"><img src="images/online_o.png" width="103" height="26" /></td>
					  </tr>
					  <? } ?>
					</table></td>
			  </tr>
					<? } ?>
				</table>
			</td>
<td width="36%" valign="top" style="padding-top:15px">
	<table width="345" height="434" border="0" cellspacing="0" cellpadding="0">
			  <tr>
				<td valign="top" style="background:url(images/shop_bg_detail.png);"><table width="100%" border="0" cellspacing="0" cellpadding="0">
				  <tr>
					<td height="35">&nbsp;</td>
					</tr>
				  <tr>
					<td>
					<div style="color:#000; overflow-y:auto; overflow-x:hidden; height:388px; width:344px">
					<table width="100%" border="0" cellspacing="0" cellpadding="3">
					  <tr>
						<td><span style="color:#000"><?=$dbshop->f(welcome)?></span></td>
						</tr>
					  <tr>
						<td>
						<table width="98%" border="0" cellspacing="0" cellpadding="3">
							<tr>
							  <td align="center"><span style="color:#900; font-weight:bold">การรับประกัน / 如何保证产品 </span></td>
							</tr>
							<? if ($dbshop->f(warranty2)==1) { ?>
							<tr>
							  <td>รับประกันพระแท้ภายในระยะเวลา / /保证真产品的期间内 <span style="font-weight:bold; color:#900; font-size:16px"><?=$dbshop->f(warrantydetail1)?></span> วัน/ 天 นับแต่ลูกค้าได้รับพระไป / /算当天开始领到产品</td>
							</tr>
							<? } ?>
							<? if ($dbshop->f(warranty3)==1) { ?>
							<tr>
							  <td>รับประกันความพอใจในระยะเวลา / 保证满意的定期时间 <span style="font-weight:bold; color:#900; font-size:16px"><?=$dbshop->f(warrantydetail2)?></span> วัน / 天 ไม่หักเปอร์เซ็นต์ / /不扣百分之 (เมื่อได้รับพระแล้วไม่ถูกใจ /意思是如领到后不满意) แต่หากเกินจำนวนวันหัก /但如超定期扣数目 <span style="font-weight:bold; color:#900; font-size:16px"><?=$dbshop->f(warrantydetail3)?></span> %</td>
							</tr>
							<? } ?>
							<? if ($dbshop->f(warranty4)==1) { ?>                            
							<tr>
							  <td>พระต้องอยู่ในสภาพเดิม ไม่ชำรุดหักบิ่น เสียสภาพ ล้างผิว /产品要保持原样 不残破 断 洗皮</td>
							</tr>
							<? } ?>
							<? if ($dbshop->f(warranty5)==1) { ?>                            
							<tr>
							  <td>ยินดีรับซื้อคืนในราคาตลาดขณะนั้น /卖家满意买回当时产品的买卖价钱</td>
							</tr>
							<? } ?>
							<? if ($dbshop->f(warranty6)==1) { ?>                            
							<tr>
							  <td>นำมาแลกเปลี่ยน กับองค์ใหม่ได้ หากท่านต้องการซื้อพระองค์อื่นโดยหัก /产品交换，可以换新的产品，如买家需要换别的产品，将要扣百分之 <span style="font-weight:bold; color:#900; font-size:16px"><?=$dbshop->f(warrantydetail4)?></span> %</td>
							</tr>
							<? } ?>
						  </table>
						</td>
						</tr>
					  </table>
					  </div>
					  </td>
					</tr>
				</table></td>
			  </tr>
			</table></td>
		  </tr>
		</table></td>
	</tr>
	<tr>
		<td height="1">
		</td>
	</tr>
	<tr>
		<td style="background:url(images/tab.jpg) no-repeat; font-weight:bold; font-size:16px; color:#7b3110" height="56" align="center">
		รายการพระเด่น / 热门产品
		</td>
	</tr>
	<tr>
		<td height="618" valign="top" style="background:url(images/shop_recommend.jpg)">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
		  <tr>
			<td width="74%" height="35">&nbsp;
			  
		    </td>
		  </tr>
		  <tr>
			<td style="padding-left:40px">
            <div style="width:925px; height:530px; overflow-y:scroll; overflow-x:hidden;">
			<table width="920" border="0" cellspacing="0" cellpadding="0">
			  <tr>
				<td style="padding-left:13px; padding-top:5px">
												<? 	$q="SELECT * FROM `product` WHERE shop_id ='".$_SESSION['shop_id']."' AND hot = '1' AND active = '2' ORDER BY hotdate DESC  ";
                        $dbhot= new nDB();
                        $dbhot->query($q);
                        while ($dbhot->next_record()) { ?>
						<table width="133" border="0" align="center" cellpadding="0" cellspacing="0" style="float:left; margin:5px">
	<tr>
		<td align="center">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td bgcolor="#000000">
						<a href="shop_product.php?product_id=<?=$db->f(product_id)?>">
							<img src="<?=($dbhot->f(pic1)!="")?'/slir/w140-h135/img/amulet/'.$dbhot->f(pic1):"images/clear.gif"?>" alt="" width="140" height="135" border="0" />
						</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
<tr>
<td height="60px" valign="top" bgcolor="#666666">
<table width="95%" border="0" align="center" cellpadding="3" cellspacing="0">
	<tr>
		<td>
			<div style="position:relative;">
				<div class="pravote_container" style="display:none; position:absolute; left:-200px; top:-250px;">
					<table style="width:400px; height:250px; color:#ffcc02; background-color:#311407; border:1px solid #ffcc02; border-collapse:collapse;" border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td style="height:35px; text-align:center; font-weight:bold;">
								คะแนนความน่าเชื่อถือสินค้านี้
							</td>
						</tr>
						<tr>
							<td style="height:1px; text-align:center;">
								<?php
									if($db->f(score) < 0){
										$dbscore = 0;
									}else{
										$dbscore = $db->f(score);
									}
								?>
								<div class="pra_progressbar_container">
									<table style="position:absolute; width:350px; height:27px;" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td style="text-align:center; vertical-align:middle; color:#000000;">
												<?=$dbscore?>
												คะแนน / 分数
											</td>
										</tr>
									</table>
									<div class="pra_progressbar" style="width:<?=$dbscore?>%;"></div>
								</div>
							</td>
						</tr>
						<tr>
							<td style="padding-top:5px; vertical-align:top;">
								<table border="0" cellpadding="0" cellspacing="0">
									<tr>
										<td style="width:90px; height:35px; text-align:right; vertical-align:top;">
											เหตุผลที่เลือก
											<br/>
											选的意见
										</td>
										<td style="width:20px; text-align:center; vertical-align:top;">
											:
										</td>
										<td style="padding-right:5px; vertical-align:top;">
											<?php
												$showment = new nDB();
												$showment->query("SELECT * FROM `comment` WHERE `comment_product` = '".$dbhot->f(product_id)."' ORDER BY comment_id DESC ");
												$showment->next_record();
												if ($showment->f(vote1) != 0) {
											?>
											จากภาพพระเบลอ / 相片里佛牌模糊
											,
											<?php
												}
												if ($showment->f(vote2) != 0) {
											?>
											จากภาพพระเบลอมาก / 相片里佛牌很模糊
											,
											<?php
												}
												if ($showment->f(vote3) != 0) {
											?>
											จากภาพพิมพ์ตื้นไป / 相片里模表面很浅
											,
											<?php
												}
												if ($showment->f(vote4)) {
											?>
											จากภาพผิดพิมพ์ / 相片里佛牌模不对
											,
											<?php
												}
												if ($showment->f(vote5) != 0) {
											?>
											จากภาพผิดเนื้อ / 相片里佛牌料质不对
											,
											<?php
												}
												if ($showment->f(vote6) !=0) {
											?>
											จากภาพผิวรมใหม่ / 相片里佛牌是新皮
											,
											<?php
												}
												if ($showment->f(vote7) != 0) {
											?>
											จากภาพพระบวม / 相片里佛牌肿胀
											,
											<?php
												}
												if ($showment->f(vote8) != 0) {
											?>
											จากภาพพระดูยาก / 相片里佛牌辨认真假难
											,
											<?php
												}
												if ($showment->f(vote9) != 0) {
											?>
											จากภาพทีความคมชัดน้อย / 相片里的尖锐度很少
											,
											<?php
												}
												if ($showment->f(vote10) != 0) {
											?>
											จากภาพปลอมแปลงใบรับรอง / 假冒的验正书
											,
											<?php
												}
												if ($showment->f(vote11) != 0) {
											?>
											จากภาพประวัติไม่ชัดเจน / 来历不明显
											
											<?php
												}
											?>
										</td>
									</tr>
									<tr>
										<td style="height:35px; text-align:right; vertical-align:top;">
											เหตุผลเพิ่มเติม
										</td>
										<td style="width:20px; text-align:center; vertical-align:top;">
											:
										</td>
										<td style="padding-right:5px; vertical-align:top;">
											<?=$showment->f(comment_detail)?>
										</td>
									</tr>
									<tr>
										<td style="height:35px; text-align:right; vertical-align:top;">
											วันที่
										</td>
										<td style="width:20px; text-align:center; vertical-align:top;">
											:
										</td>
										<td style="padding-right:5px; vertical-align:top;">
											<?=date("d F Y",$showment->f(comment_date))?>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<?php
				if ($dbhot->f(score) == "100") {
			?>
			<img onmouseover="$(this).parent().find('div:eq(1)').show();" onmouseout="$(this).parent().find('div:eq(1)').hide();" src="images/light-green.png" border="0" />
			<?php
				} else {
					if ($dbhot->f(score) < 31) {
			?>
			<img onmouseover="$(this).parent().find('div:eq(1)').show();" onmouseout="$(this).parent().find('div:eq(1)').hide();" src="images/flash-red.gif" border="0" />
			<?php
					}
					if ($dbhot->f(score) > 30 and $dbhot->f(score) < 70) {
			?>
			<img onmouseover="$(this).parent().find('div:eq(1)').show();" onmouseout="$(this).parent().find('div:eq(1)').hide();" src="images/flash-yellow.gif" border="0" />
			<?php
					}
					if ($dbhot->f(score) > 70) {
			?>
			<img onmouseover="$(this).parent().find('div:eq(1)').show();" onmouseout="$(this).parent().find('div:eq(1)').hide();" src="images/flash-green.gif" border="0" />
			<?php
					}
				}
			?>
			&nbsp;
			<span style="color:#0CF; font-weight:bold">
				ID : <?=$dbhot->f(product_id)?>
			</span>
		</td>
	</tr>
	<tr>
		<td height="25">
			<div style="width:133px; height:67px; overflow:hidden;">
				<div style="width:153px; height:65px; overflow-y:scroll; overflow-x:hidden;">
					<table width="129">
						<tr>
							<td>
								<a href="shop_product.php?product_id=<?=$dbhot->f(product_id)?>"  title="<?=$dbhot->f(name)?>" >
									<span style="color:#FFF">
										<?=$dbhot->f(name)?>
									</span>
								</a>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</td>
	</tr>
</table>
</td>
</tr>
	<tr>
		<td height="25" align="center" bgcolor="#333333">
			<table width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td width="63%" align="center">
						<span style="color:#FFF">
							<?php
								if($dbhot->f(status) == 1){
							?>
							<span style="color:#09F">
								พระโชว์ / 展示
							</span>
							<?php
								}
								if($dbhot->f(status) == 2){
							?>
							<span style="color:#090">
								ให้เช่า / 出售
							</span>
							<?php
								}
								if($dbhot->f(status) == 3){
							?>
							<span style="color:#FF0">
								เปิดจอง / 预定
							</span>
							<?php
								}
								if($dbhot->f(status) == 4){
							?>
							<span style="color:#FC0">
								จองแล้ว / 已定
							</span>
							<?php
								}
								if($dbhot->f(status) == 5){
							?>
							<span style="color:#F00">
								ขายแล้ว / 已出售
							</span>
							<?php
								}
							?>
						</span>
					</td>
					<td width="37%">
						<table width="100%" border="0" cellspacing="0" cellpadding="3">
							<tr>
								<td width="20">
									<img src="images/view-icon.png" width="20" height="11" />
								</td>
								<td>
									<span style="color:#FFF">
										<?=$dbhot->f(view_num)?>
									</span>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
						  <? } ?>                
				</td>
			</tr>
		  </table>
          </div>
	  </td>
</tr>
	  </table>
			
		</td>
  </tr>
	<tr>
		<td>
			<table width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td><img src="images/shop_bh_catagory.jpg" width="1000" height="76" />
						
					</td>
				</tr>
				<tr>
				  <td>&nbsp;</td>
			  </tr>
				<tr>
				  <td><img src="images/shop_bt_catagory.jpg" width="1000" height="89" /></td>
			  </tr>
			</table>
	  </td>
	</tr>
	<tr>
		<td><table width="100%" border="0" cellspacing="0" cellpadding="0">	
		  <tr>
			<td>
			  <?php
			  $q="SELECT * FROM `product` WHERE shop_id='".$_SESSION['shop_id']."' AND active = '2' ";
			  $p_r=1;
			  $db->query($q);							
			  $total=$db->num_rows();							
			  $q.=" ORDER BY order_num DESC LIMIT $s_page,$e_page";
			  $db->query($q);
			  while($db->next_record()){
			  ?>
			  <table width="148" border="0" align="center" cellpadding="0" cellspacing="0" style="float:left; margin:5px">
	<tr>
		<td align="center">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td bgcolor="#000000">
						<a href="shop_product.php?product_id=<?=$db->f(product_id)?>">
							<img src="<?=($db->f(pic1)!="")?'/slir/w155-h150/img/amulet/'.$db->f(pic1):"images/clear.gif"?>" alt="" width="155" height="150" border="0" />
						</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
<tr>
<td height="60px" valign="top" bgcolor="#666666">
<table width="95%" border="0" align="center" cellpadding="3" cellspacing="0">
	<tr>
		<td>
			<div style="position:relative;">
				<div class="pravote_container" style="display:none; position:absolute; left:-200px; top:-250px;">
					<table style="width:400px; height:250px; color:#ffcc02; background-color:#311407; border:1px solid #ffcc02; border-collapse:collapse;" border="0" cellpadding="0" cellspacing="0">
						<tr>
							<td style="height:35px; text-align:center; font-weight:bold;">
								คะแนนความน่าเชื่อถือสินค้านี้
							</td>
						</tr>
						<tr>
							<td style="height:1px; text-align:center;">
								<?php
									if($db->f(score) < 0){
										$dbscore = 0;
									}else{
										$dbscore = $db->f(score);
									}
								?>
								<div class="pra_progressbar_container">
									<table style="position:absolute; width:350px; height:27px;" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td style="text-align:center; vertical-align:middle; color:#000000;">
												<?=$dbscore?>
												คะแนน / 分数
											</td>
										</tr>
									</table>
									<div class="pra_progressbar" style="width:<?=$dbscore?>%;"></div>
								</div>
							</td>
						</tr>
						<tr>
							<td style="padding-top:5px; vertical-align:top;">
								<table border="0" cellpadding="0" cellspacing="0">
									<tr>
										<td style="width:90px; height:35px; text-align:right; vertical-align:top;">
											เหตุผลที่เลือก
											<br/>
											选的意见
										</td>
										<td style="width:20px; text-align:center; vertical-align:top;">
											:
										</td>
										<td style="padding-right:5px; vertical-align:top;">
											<?php
												$showment = new nDB();
												$showment->query("SELECT * FROM `comment` WHERE `comment_product` = '".$db->f(product_id)."' ORDER BY comment_id DESC ");
												$showment->next_record();
												if ($showment->f(vote1) != 0) {
											?>
											จากภาพพระเบลอ / 相片里佛牌模糊
											,
											<?php
												}
												if ($showment->f(vote2) != 0) {
											?>
											จากภาพพระเบลอมาก / 相片里佛牌很模糊
											,
											<?php
												}
												if ($showment->f(vote3) != 0) {
											?>
											จากภาพพิมพ์ตื้นไป / 相片里模表面很浅
											,
											<?php
												}
												if ($showment->f(vote4)) {
											?>
											จากภาพผิดพิมพ์ / 相片里佛牌模不对
											,
											<?php
												}
												if ($showment->f(vote5) != 0) {
											?>
											จากภาพผิดเนื้อ / 相片里佛牌料质不对
											,
											<?php
												}
												if ($showment->f(vote6) !=0) {
											?>
											จากภาพผิวรมใหม่ / 相片里佛牌是新皮
											,
											<?php
												}
												if ($showment->f(vote7) != 0) {
											?>
											จากภาพพระบวม / 相片里佛牌肿胀
											,
											<?php
												}
												if ($showment->f(vote8) != 0) {
											?>
											จากภาพพระดูยาก / 相片里佛牌辨认真假难
											,
											<?php
												}
												if ($showment->f(vote9) != 0) {
											?>
											จากภาพทีความคมชัดน้อย / 相片里的尖锐度很少
											,
											<?php
												}
												if ($showment->f(vote10) != 0) {
											?>
											จากภาพปลอมแปลงใบรับรอง / 假冒的验正书
											,
											<?php
												}
												if ($showment->f(vote11) != 0) {
											?>
											จากภาพประวัติไม่ชัดเจน / 来历不明显
											
											<?php
												}
											?>
										</td>
									</tr>
									<tr>
										<td style="height:35px; text-align:right; vertical-align:top;">
											เหตุผลเพิ่มเติม
										</td>
										<td style="width:20px; text-align:center; vertical-align:top;">
											:
										</td>
										<td style="padding-right:5px; vertical-align:top;">
											<?=$showment->f(comment_detail)?>
										</td>
									</tr>
									<tr>
										<td style="height:35px; text-align:right; vertical-align:top;">
											วันที่
										</td>
										<td style="width:20px; text-align:center; vertical-align:top;">
											:
										</td>
										<td style="padding-right:5px; vertical-align:top;">
											<?=date("d F Y",$showment->f(comment_date))?>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<?php
				if ($db->f(score) == "100") {
			?>
			<img onmouseover="$(this).parent().find('div:eq(1)').show();" onmouseout="$(this).parent().find('div:eq(1)').hide();" src="images/light-green.png" border="0" />
			<?php
				} else {
					if ($db->f(score) < 31) {
			?>
			<img onmouseover="$(this).parent().find('div:eq(1)').show();" onmouseout="$(this).parent().find('div:eq(1)').hide();" src="images/flash-red.gif" border="0" />
			<?php
					}
					if ($db->f(score) > 30 and $db->f(score) < 70) {
			?>
			<img onmouseover="$(this).parent().find('div:eq(1)').show();" onmouseout="$(this).parent().find('div:eq(1)').hide();" src="images/flash-yellow.gif" border="0" />
			<?php
					}
					if ($db->f(score) > 70) {
			?>
			<img onmouseover="$(this).parent().find('div:eq(1)').show();" onmouseout="$(this).parent().find('div:eq(1)').hide();" src="images/flash-green.gif" border="0" />
			<?php
					}
				}
			?>
			&nbsp;
			<span style="color:#0CF; font-weight:bold">
				ID : <?=$db->f(product_id)?>
			</span>
		</td>
	</tr>
	<tr>
		<td height="25">
			<div style="width:133px; height:67px; overflow:hidden;">
				<div style="width:153px; height:65px; overflow-y:scroll; overflow-x:hidden;">
					<table width="129">
						<tr>
							<td>
								<a href="shop_product.php?product_id=<?=$db->f(product_id)?>"  title="<?=$db->f(name)?>" >
									<span style="color:#FFF">
										<?=$db->f(name)?>
									</span>
								</a>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</td>
	</tr>
</table>
</td>
</tr>
	<tr>
		<td height="25" align="center" bgcolor="#333333">
			<table width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td width="63%" align="center">
						<span style="color:#FFF">
							<?php
								if($db->f(status) == 1){
							?>
							<span style="color:#09F">
								พระโชว์ / 展示
							</span>
							<?php
								}
								if($db->f(status) == 2){
							?>
							<span style="color:#090">
								ให้เช่า / 出售
							</span>
							<?php
								}
								if($db->f(status) == 3){
							?>
							<span style="color:#FF0">
								เปิดจอง / 预定
							</span>
							<?php
								}
								if($db->f(status) == 4){
							?>
							<span style="color:#FC0">
								จองแล้ว / 已定
							</span>
							<?php
								}
								if($db->f(status) == 5){
							?>
							<span style="color:#F00">
								ขายแล้ว / 已出售
							</span>
							<?php
								}
							?>
						</span>
					</td>
					<td width="37%">
						<table width="100%" border="0" cellspacing="0" cellpadding="3">
							<tr>
								<td width="20">
									<img src="images/view-icon.png" width="20" height="11" />
								</td>
								<td>
									<span style="color:#FFF">
										<?=$db->f(view_num)?>
									</span>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>			  <?php } ?> 
			</td>
		  </tr>
		  <tr>
		   <td height="30" colspan="10" align="center" style="color:#F00">
		    <?php  sh_page($total,$s_page,$e_page,$chk_page,Previous,Next,"#F00","#FFFFFF"); // นำไปวางในตำแหน่งที่ต้องการแสดง ?>
		   </td>
		  </tr>                  
	  </table></td>
	</tr>   
	<tr>
		<td>
			<?php
				include("shop_chatbox_message.php");
			?>
		</td>
	</tr>     
    <tr>
    	<td align="center">
   	    <img src="images/banner-s.jpg" width="959" height="86" /></td>
    </tr>             
  <tr>
	  <td><img src="images/footer.jpg" width="1000" height="136"></td>
  </tr>
</table>
<!-- End Save for Web Slices -->

<script type="text/javascript">
swfobject.registerObject("FlashID", "9.0.0", "expressInstall.swf");
</script>
</body>
</html>
