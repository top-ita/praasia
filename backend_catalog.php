<?php include("global.php"); ?>
<?php if($_SESSION['adminshop_id']=='' || !isset($_SESSION['adminshop_id'])) {  
				redi4("index.php");
} ?>
<?php set_page($s_page,$e_page=20); //นำส่วนนี้ิไว้ด้านบน ?>
<html>
<head>
<title>ระบบจัดการเว็บไซต์ : เพิ่มรายการพระเครื่อง</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="favicon" href="favicon.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php include("index.css"); ?>
<style type="text/css">
body {
	background-color: #000;
}
.translate_button {
  color:#FFF;
  padding:5px;
  width:200px;
  height:35px;
  font-family:Tahoma;
  background-color:#fca909;
  cursor:pointer;
  z-index:1;
  -webkit-border-radius: 0px 0px 5px 5px;
  -moz-border-radius: 0px 0px 5px 5px;
  border-radius: 0px 0px 5px 5px;
  border-left:1px solid #c46104;
  border-top:1px solid #c46104;
  border-bottom:1px solid #c46104;
}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000;
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
</style>
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
	var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
	var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
		var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
		if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
	var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
		d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
	if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
	for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
	if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
	var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
	 if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

	function checklogin(){
		$.ajax({
			type: "POST",
			url: "checklogin_query.php",
			data: { do_what:"checklogin" },
			cache: false,
			success: function(result){
				if(result == "0"){
					alert("กรุณาเข้าสู่ระบบอีกครั้ง");
					window.location.href="index.php";
				}
			}
		});
	}
	var checklogin_timer = setInterval(function(){
		checklogin();
	}, 10000);
	
</script>

	<!--jquery ui Local-->
	<link rel="stylesheet" href="func/jquery-ui-1.10.3/themes/base/jquery-ui.css" />
	<script src="func/jquery-ui-1.10.3/jquery-1.9.1.js"></script>
	<script src="func/jquery-ui-1.10.3/ui/jquery-ui.js"></script>
	<script src="func/jquery-ui-1.10.3/jquery.transit.min.js"></script>

	<!--Iswallows Loading-->
	<!-- <script src="https://www.thaiwebeasy.com/iswallows/func/loading/loading.js"></script> -->

</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('images/images/menu-backend2_02.jpg','images/images/menu-backend2_04.jpg','images/images/menu-backend2_05.jpg','images/images/menu-backend2_06.jpg','images/images/menu-backend2_07.jpg','images/images/menu-backend2_08.jpg')">
					<script src="ieditor/ckeditor.js"></script>  
								<script src="ckfinder/ckfinder.js"></script>  

<!-- Save for Web Slices (???????.jpg) -->
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
	<tr>
		<td><img src="images/defualt.jpg" width="1000" height="271"></td>
		</tr>
	<tr>
		<td width="1000" height="180" style="background:url(images/backend.jpg) no-repeat"><table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td><img src="images/images/menubackend_01.jpg" width="103" height="180"></td>
				<td><a href="shop_index.php?shop=<?=$_SESSION['adminshop_id']?>" target="_blank" onMouseOver="MM_swapImage('Image8','','images/images/menu-backend2_02.jpg',1)" onMouseOut="MM_swapImgRestore()"><img src="images/images/menubackend_02.jpg" name="Image8" width="130" height="180" border="0"></a></td>
				<td><a href="backend.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image9','','images/images/menu-backend2_03.jpg',0)"><img src="images/images/menubackend_03.jpg" name="Image9" width="94" height="180" border="0"></a></td>
				<td><a href="banner_slide.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image10','','images/images/menu-backend2_04.jpg',1)"><img src="images/images/menubackend_04.jpg" name="Image10" width="108" height="180" border="0"></a></td>
				<td><a href="backend_banner.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image11','','images/images/menu-backend2_05.jpg',1)"><img src="images/images/menubackend_05.jpg" name="Image11" width="129" height="180" border="0"></a></td>
				<td><a href="backend_profile.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image12','','images/images/menu-backend2_06.jpg',1)"><img src="images/images/menubackend_06.jpg" name="Image12" width="103" height="180" border="0"></a></td>
				<td><a href="backend_passwod.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image13','','images/images/menu-backend2_07.jpg',1)"><img src="images/images/menubackend_07.jpg" name="Image13" width="136" height="180" border="0"></a></td>
				<td><a href="logout.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image14','','images/images/menu-backend2_08.jpg',1)"><img src="images/images/menubackend_08.jpg" name="Image14" width="92" height="180" border="0"></a></td>
				<td><img src="images/images/menubackend_09.jpg" width="105" height="180"></td>
				</tr>
			</table></td>
	</tr> 
	<?php if($_GET['e_product_id']){ 

	$q="SELECT * FROM `product` WHERE product_id=".$_GET['e_product_id']." ";
	$db5= new nDB();
	$db5->query($q);
	$db5->next_record();
 } ?>
	<tr>
		<td height="826" valign="top" style="padding:5px; background-color:#311308 ">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td width="19%" valign="top" style="border-right:1px solid #000"><table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td><table width="100%" border="0" cellspacing="0" cellpadding="3">
												<tr>
													<td>
													<table width="150" height="187" align="center" cellpadding="0" cellspacing="0">
														<tr>
																<td align="center" valign="top" style="background:url(images/post.jpg) no-repeat">
																	<form name="frmPage" action="http://track.thailandpost.co.th/trackinternet/Result.aspx" method="post" target="_blank" onSubmit="return check()">
																	
																	<table border="0" cellpadding="0" cellspacing="0" style="margin-top:95px">
																	<tr>
																	<td >
																	<input id="IDItemID" size="14" name="ItemID" class="INPUT" style="width:140">
																	</td>
																	</tr>
																	<tr>
																	<td align="center" >
																	<input value="default.asp" name="PageName" type="hidden">
																	<input value="Search" name="Submit"  type="submit">
																	</td>
																	</tr>
																	<tr>
																	<td height="30"   >
																	<a href="http://track.thailandpost.co.th/" target="_blank">
																	รายละเอียดเพิ่มเติม</a>            
																	</td>
																	</tr>
																	</table></form>
																</td>
													</tr>
												</table>
													</td>
												</tr>
												<tr>
													<td align="center">
															 <a href="policy.php">
																<table width="158" border="0" cellspacing="0" cellpadding="0">
																	<tr>
																		<td height="90" align="center" bgcolor="#CC0000"><span style="color:#FFF; font-weight:bold">กติกาการใช้งานเว็บไซต์</span><br />
																			<span style="color:#FC0; font-weight:bold; font-size:14px">www.praasia.com
																		</span></td>
																	</tr>
																</table>
																</a>
													</td>
												</tr>
												<tr>
													<td align="center"><img src="images/callcenter.jpg"/></td>
												</tr>
												<tr>
													<td align="center"><a href="http://translate.google.com" target="_blank">
													<table width="150">
														<tr>
															<td align="center" bgcolor="#FFFFFF">
																	<img src="images/Google-Translate-Logo.jpg" width="110" height="110" border="0" />
																</td>
														</tr>
													</table>
													</a></td>
												</tr>
												<tr>
													<td align="center"><a href="http://www.paypal.com" style="color:#000" target="_blank">
													<table width="150">
														<tr>
															<td align="center" bgcolor="#FFFFFF">
													วิธีการสมัคร<br />
													如何注册                          <br /><img src="images/paypal-logo.png" width="100" height="53" border="0" />
															</td>
							</tr>
													</table>                                  
													</a>
													</td>
												</tr>
												<tr>
													<td align="center">
													<a href="http://www.youtube.com/watch?v=ItioGaG_7XE" target="_blank">
													<table width="150" border="0" cellspacing="0" cellpadding="3">
														<tr>
															<td align="center" bgcolor="#FFFFFF" style="color:#000">วีธีการใช้งาน<br />
																如何使用 <br />
															<img src="images/paypal-s.jpg" width="150" height="42" border="0"/></td>
														</tr>
													</table>
													</a>
													</td>
												</tr>
												<tr>
													<td align="center"><table width="150" border="0" cellspacing="0" cellpadding="3">
														<tr>
															<td align="center" bgcolor="#FFFFFF" style="font-size:12px">CALL CENTER PAYPAL<br />
															PayPal 服务中心<br />
															+6565905502<br />
															074-262615</td>
														</tr>
													</table></td>
												</tr>
											</table></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
		</table></td>
		<td width="81%" valign="top">
				<script language="javascript">
					function selec(){
						var ab=document.getElementById('se');
						location.href=ab.value;
					}
				</script>
				<?php
	if($_POST['Submit']){
		if($_POST['h_sub_id']){
		$q="UPDATE `catalog_shop` SET 
`shop_id` = '".$_SESSION['adminshop_id']."',
`catalog_name` = '".$_POST['name']."' WHERE `catalog_id` =".$_POST['h_sub_id']." ";
		$db->query($q);	
		al('แก้ไขข้อมูลเรียบร้อยแล้ว');
		redi2();
		}else{				
		$q="INSERT INTO `catalog_shop` ( `catalog_id` ,`shop_id`,`catalog_name`) 
VALUES (
'', '".$_SESSION['adminshop_id']."', '".$_POST['name']."'
);";
		$db->query($q);
		al('เพิ่มข้อมูลเรียบร้อยแล้ว');
		redi2();
		}
	}
?>
<?php
	if($_GET['d_sub_id']){	
		$q="DELETE FROM `catalog_shop` WHERE `catalog_id` = ".$_GET['d_sub_id']." ";
		$db->query($q);
	}
?>
<?php
	if($_GET['e_sub_id']){
		$q="SELECT * FROM `catalog_shop` WHERE catalog_id=".$_GET['e_sub_id']." ";
		$db5 = new nDB();
		$db5->query($q);
		$db5->next_record();
	}
?>    
		
		<form method="post" enctype="multipart/form-data" name="form1" id="form1" >
		<table width="100%" cellpadding="3" cellspacing="0">
			<tr>
                      <td height="50" colspan="2" align="center">
                        <div style="display:none;">
                          <table border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td>&nbsp;
                              </td>
                              <td style="color:#FC0;">
                                <? include('translate_bo.php'); ?>
                              </td>
                            </tr>
                          </table>
                        </div>
                        <span style="cursor:pointer;" onClick="translate_slide($(this));" isopen="0">
                        <span class="translate_button" style="color:#F00" >
                        คลิกสู่ระบบแปลภาษา/点击进入翻译系统... ▼
                        </span>
                        <span style=" display:none; color:#090" class="translate_button">
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
			<td>
				<input name="button" type="button" id="button"  onclick="window.location='backend_add.php'" value="กลับไปหน้าเพิ่มสินค้า / 返回">
				</td>
		</tr>
			<tr>
					<td width="33%" align="right" style="color:#FC0">หมวดหมู่พระเครื่อง / 聖物分类 :
							
						</td>
					<td width="67%">
						<script>
							function namecatalog_search(v){
								$.ajax({
									type: "POST",
									url: "backend_query.php",
									data: { do_what:"catalog_name", v:v },
									cache: false,
									success: function(result){
										$(".namecatalog_container").html(result);
									}
								});
							}
							function namecatalog_select(v){
								$("input[name=name]").val(v);
								$(".namecatalog_container").html("");
							}
						
						</script>
						<input name="name" value="<?=($_GET['e_sub_id'])?$db5->f(catalog_name):''?>" onKeyUp="namecatalog_search($(this).val());" type="text" id="name" style="width:200px;" placeholder="ค้นหาชื่อพระจีนหรืออังกฤษ">
						<div style="position:relative;"><div class="namecatalog_container" style="position:absolute;"></div></div>
					</td>
				</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input name="Submit" type="submit" id="Submit" value="เพิ่มข้อมูล / 增加信息">
					<?php if($_GET['e_sub_id']){ ?>
										<input name="h_sub_id" type="hidden" id="h_sub_id" value="<?=$db5->f(catalog_id)?>" />  
														<?php } ?>
					</td>
			</tr>
		</table>
		</form>
		<table width="100%" cellpadding="3" cellspacing="0">
			<tr>
					<td width="79%" height="30" align="center" bgcolor="#4d1403" style="color:#FC0">ชื่อหมวดสินค้า</td>
					<td width="11%" align="center" bgcolor="#4d1403" style="color:#FC0">แก้ไข</td>
					<td width="10%" align="center" bgcolor="#4d1403" style="color:#FC0">ลบ</td>
				</tr>
<?php
	$q="SELECT * FROM `catalog_shop` WHERE shop_id = '".$_SESSION['adminshop_id']."' ORDER BY catalog_id ";
	$db->query($q);
	static $v=1;
	while($db->next_record()){
	?>
										<tr bgcolor="<?=($v%2==1)?"#3c1204":"#2f0d02"?>">
											<td  style="padding-left:3px"><span style="color:#FC0; font-size:12px">
												<?=$db->f(catalog_name)?>
											</span></td>
											<td width="11%" align="center" ><span class="sidemenu"><a href="?e_sub_id=<?=$db->f(catalog_id)?>" ><img src="images/edit.gif" alt="แก้ไข" width="19" height="23" border="0" /></a></span></td>
											<td width="10%" align="center" ><span class="sidemenu"><a href="?d_sub_id=<?=$db->f(catalog_id)?>"  onclick="return confirm('ยืนยันการลบข้อมูล')"><img src="images/del.gif" alt="ลบ" width="19" height="23" border="0" /></a></span></td>
										</tr>         
										<? $v++; } ?>
		</table>
		</td>
	</tr>
</table>
				
			</td>
	</tr>   
		<tr>
			<td>&nbsp;</td>
		</tr>                 
<tr>
		<td>
			<? include('footer.php');?>
		</td>
	</tr>  
</table>
<!-- End Save for Web Slices -->
</body>
</html>
