<?php
	include('../global.php');
	if($_SESSION['adminid'] == '' || !isset($_SESSION['adminid'])){  
		redi4("login.php");
	}

	$do_what = $_POST["do_what"];
	if($do_what == "pra_translate_name_add"){
		$name_text = trim($_POST["name_text"]);
		$name_translated = trim($_POST["name_translated"]);
		if($name_text != ""){
			mysql_query("insert into pra_translate_name( name_id, name_text, name_translated, leave_date ) values( '', '$name_text', '$name_translated', '".date("Y-m-d H:i:s")."' )");
		}
	}
	if($do_what == "pra_translate_name"){
		$name_id = $_POST["name_id"];
		$name_translated = $_POST["name_translated"];
		mysql_query("update pra_translate_name set name_translated = '$name_translated' where name_id = '$name_id'");

		$pra_translate_name = mysql_fetch_array(mysql_query("select * from pra_translate_name where name_id = '$name_id'"));
		$db->query("update product set name = '$name_translated' where product_id = '".$pra_translate_name["product_id"]."'");

		echo "<script>window.parent.loading_hide();</script>";

	}
	if($do_what == "pra_translate_name_delete"){
		$name_id = $_POST["name_id"];
		mysql_query("delete from pra_translate_name where name_id = '$name_id'");
	}

	set_page($s_page,$e_page = 100);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>ระบบจัดการเว็บไซต์</title>

	<!--jquery ui Local-->
	<link rel="stylesheet" href="../func/jquery-ui-1.10.3/themes/base/jquery-ui.css" />
	<script src="../func/jquery-ui-1.10.3/jquery-1.9.1.js"></script>
	<script src="../func/jquery-ui-1.10.3/ui/jquery-ui.js"></script>
	<script src="../func/jquery-ui-1.10.3/jquery.transit.min.js"></script>

	<!--Iswallows Loading-->
	<script src="../func/loading/loading.js"></script>

	<style type="text/css">
		body {
			background-color: #000;
			margin-left: 0px;
			margin-top: 0px;
			margin-right: 0px;
			margin-bottom: 0px;	
		}
		.bh{
			color:#FC0;
			font-size:14px;
			height:30px;
		}
		.sidemenu{
			color:#FFF;
			font-size:12px;
			height:25px;
			border-bottom:1px solid #000;
			text-decoration:none;
		}
		.sidemenu:hover{
			text-decoration:none;
		}
		a:link {
			text-decoration: none;
		}
		a:visited {
			text-decoration: none;
		}
		a:hover {
			text-decoration: none;
		}
		a:active {
			text-decoration: none;
		}
		.translate_filter {
			padding-left:10px;
			padding-right:10px;
			width:1px;
			white-space:nowrap;
			cursor:pointer;
			transition: all 0.2s ease 0s;
		}
		.translate_filter:hover {
			background-color:#a55e00;
		}
		.translate_button {
		    background-color: #FCA909;
		    border-bottom: 1px solid #C46104;
		    border-left: 1px solid #C46104;
		    border-radius: 0 0 5px 5px;
		    border-top: 1px solid #C46104;
		    color: #FFFFFF;
		    cursor: pointer;
		    font-family: Tahoma;
		    height: 35px;
		    padding: 5px;
		    width: 200px;
		    z-index: 1;
		}
	</style>

	<script>
		function translated_untranslate(){
			$(".translated_input").each(function(index){
				if($(this).val() == ""){
					$(this).parent().parent().parent().show();
				}else{
					$(this).parent().parent().parent().hide();
				}
			});
		}
		function translated_translated(){
			$(".translated_input").each(function(index){
				if($(this).val() == ""){
					$(this).parent().parent().parent().hide();
				}else{
					$(this).parent().parent().parent().show();
				}
			});
		}
		function translated_all(){
			$(".translated_input").parent().parent().parent().show();
		}
		
	</script>

</head>
<body>
<table width="1000px" align="center" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td>
			<img src="/admin/images/head.jpg" width="1098" height="288" border=""/>
		</td>
	</tr>
	<tr>
		<td bgcolor="#311407">
			<table width="100%" border="0" cellspacing="3" cellpadding="0">
				<tr>
					<td width="250px" valign="top">
						<?php
							include("sidemenu.php");
						?>
					</td>
					<td valign="top" bgcolor="#3f1d0e">
						<iframe name="translate_iframe" width="0px" height="0px" frameborder="0" bgcolor="white"></iframe>
						<table width="100%" border="0" cellspacing="1" cellpadding="3">
							<tr>
								<td style="padding-left:10px; height:30px; color:#ffcc00; background-color:#8e5100;">
									แปลภาษา
								</td>
							</tr>
							<tr>
								<td style="color:#ffffff; background-color:#6c2c16;" align="center">
									<div style="display:none;">
										<table border="0" cellpadding="0" cellspacing="0">
											<tr>
												<td>&nbsp;
													
												</td>
												<td style="color:#FC0;">
													<? include('admin_translate_bo.php'); ?>
												</td>
											</tr>
										</table>
									</div>
									<span style="cursor:pointer;" onClick="translate_slide($(this));" isopen="0">
										<span class="translate_button" style="color:#F00" >
											คลิกสู่ระบบแปลภาษา/点击进入翻译系统... ▼
										</span>
										<span style="	display:none; color:#090" class="translate_button">
											คลิกเพื่อปิดระบบแปลภาษา/点击收回翻译系统... ▲
										</span>
									</span>
									<script>
										function translate_slide(x_this){
											var isopen = x_this.attr("isopen");
											if(isopen == "1"){
												x_this.attr("isopen","0");
												x_this.find("span:eq(0)").show();
												x_this.find("span:eq(1)").hide();
												x_this.prev().slideUp();
											}else{
												x_this.attr("isopen","1");
												x_this.find("span:eq(0)").hide();
												x_this.find("span:eq(1)").show();
												x_this.prev().slideDown();
											}
										}
									</script>
								</td>
							</tr>
							<tr>
					          	<td  style="border-bottom:1px solid #FC0; color:#FC0" height="8" colspan="2">
					            วิธีการใช้แปลภาษาบนมือถือ<br> 1.ให้พิมพ์คำที่ต้องแปล    แล้วก็อปปี้วาง<br>
					2.หากไม่ใช้วิธีเขียน ก็อปปี้คำที่ต้องการ แล้ววางในช่องแปลภาษา ให้กด Inter หนึ่งครั้ง ผลลัพธ์คำแปลจะปรากฎขึ้นมา
					จากนั้นให้ก็อปปี้คำแปลวางที่ต้องการใช้งาน<br>
					3.หากผลลัพธ์การแปลไม่ปรากฎคำ กรุณานำคำแปลมาใส่ในช่องฝาก จากนั้นคำที่ฝากแปลจะใช้งานได้ภายใน24ชั่วโมง
					            </td>
					        </tr>
							<tr>
								<td style="padding-left:10px; height:30px; color:#ffcc00; background-color:#8e5100;">
									เพิ่มคำแปล
								</td>
							</tr>
							<tr>
								<td style="color:#ffffff; background-color:#6c2c16;">
									<form method="post">
									<input name="do_what" value="pra_translate_name_add" type="hidden"/>
									<table width="100%" border="0" cellpadding="0" cellspacing="0">
										<tr style="height:30px;">
											<td style="padding-left:10px; text-align:right;">
												ตำที่ฝากแปล
											</td>
											<td style="padding-left:10px; padding-right:10px; width:1px;">
												:
											</td>
											<td style="width:1px;">
												<input name="name_text" style="width:200px;" type="text"/>
											</td>
											<td style="padding-left:10px; text-align:right;">
												คำแปล
											</td>
											<td style="padding-left:10px; padding-right:10px; width:1px;">
												:
											</td>
											<td style="width:1px;">
												<input name="name_translated" style="width:200px;" type="text"/>
											</td>
											<td style="padding-left:10px; padding-right:10px; width:1px;">
												<input value="ยืนยันการเพิ่ม" type="submit"/>
											</td>
										</tr>
									</table>
									</form>
								</td>
							</tr>
							<tr>
								<td style="padding-left:10px; height:30px; color:#ffcc00; background-color:#8e5100;">
									<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td>
												รายการคำที่ฝากแปล
											</td>
											<td class="translate_filter" onclick="translated_untranslate();">
												รายการที่ยังไม่แปล
											</td>
											<td class="translate_filter" onclick="translated_translated();">
												รายการที่แปลแล้ว
											</td>
											<td class="translate_filter" onclick="translated_all();">
												รายการทั้งหมด
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td style="color:#ffffff; background-color:#6c2c16;">
									<table width="100%" border="0" cellpadding="0" cellspacing="0">
										<tr>
											<td style="padding-left:10px; width:50px; height:30px; text-align:center;">
												ลำดับ
											</td>
											<td style="padding-left:20px;">
												ตำที่ฝากแปล
											</td>
											<td style="text-align:center;">
												คำแปล
											</td>
										</tr>
										<?php
											$l = $s_page;
											$q_translate = mysql_query("select * from pra_translate_name order by name_id desc");
											$total = mysql_num_rows($q_translate);
											$q_translate = mysql_query("select * from pra_translate_name order by name_id desc limit $s_page, $e_page");
											while($translate = mysql_fetch_array($q_translate)){
												$l++;
												$q = "SELECT * FROM `product` WHERE product_id = '".$translate["product_id"]."' ";
												$dbproduct= new nDB();	
												$dbproduct->query($q);
												$dbproduct->next_record();
										?>
										<tr>
											<td class="translate_number" style="padding-left:10px; height:30px; text-align:center;">
												<?=$l?>
											</td>
											<td style="padding-left:20px;">
												<a href="../shop_product.php?product_id=<?=$dbproduct->f('product_id')?>" style="color:#FFF" target="_blank"><?=$translate["name_text"]?></a>
											</td>
											<td style="width:1px; text-align:center;">
												<form method="post" action="pra_translate_name.php" target="translate_iframe">
												<input name="do_what" value="pra_translate_name" type="hidden"/>
												<input name="name_id" value="<?=$translate["name_id"]?>" type="hidden"/>
												<input class="translated_input" name="name_translated" value="<?=$translate["name_translated"]?>" style="width:200px;" type="text"/>
											</td>
											<td style="padding-left:10px; width:1px;">
												<input onclick="loading_show('black','');" type="submit" value="ยืนยันคำแปล"/>
												</form>
											</td>
											<td style="padding-left:10px; padding-right:10px; width:1px;">
												<form method="post">
												<input name="do_what" value="pra_translate_name_delete" type="hidden"/>
												<input name="name_id" value="<?=$translate["name_id"]?>" type="hidden"/>
												<input type="submit" value="ลบ"/>
												</form>
											</td>
										</tr>
										<?php
											}
										?>
										<tr>
											<td height="30" colspan="5" align="center">
												<?php sh_page($total,$s_page,$e_page,$chk_page,Previous,Next,"#333333","#F8F8F8");?>
											</td>
										</tr>
									</table>
									<?php
										/*$db->query("select * from pra_translate_name order by name_id desc");
										while($db->next_record()){
											echo $db->f("name_text")."<br/>";
										}*/
									?>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</body>
</html>