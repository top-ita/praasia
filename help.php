<?php include("global.php"); 
		$q = "UPDATE `counter` SET `counter` = `counter`+1 WHERE `id` ='1' ";
		$db->query($q);
		?>
<?php set_page($s_page,$e_page=282); //นำส่วนนี้ิไว้ด้านบน ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<title>ศูนย์รวมพระเครื่องออนไลน์</title>
				<META name=description content="ศนย์พระเครื่อง เปิดร้านพระออนไลน์" >
				<meta name="keywords" content="ศูนย์พระเครื่องภาคใต้, ศูนย์พระเครื่องภาคเหนือ, ศูนย์พระเครื่องกรุงเทพ, ศูนย์พระเครื่องอีสาน"/>
				<link rel="icon" href="/favicon.ico" type="image/x-icon" />
				<?php include("index.css"); ?>
		</head>
		<body>
				<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
						<tr>
							<td><? include('head.php') ?></td>
						</tr>
						<tr>
							<td>
								<table width="100%" border="0" cellspacing="0" cellpadding="0">
										<tr>
											<td style="background:url(images/bg.jpg) repeat-y; padding-left:5px">
												<table width="100%" cellpadding="0" cellspacing="0" border="0">
													<tr>
														<td valign="top" style="padding-left:20px">
															<table width="95%" border="0" cellspacing="0" cellpadding="0">
																<tr>
																	<td valign="top" bgcolor="#FFFFFF">
																		<table width="100%" border="0" cellspacing="0" cellpadding="10">
																			<tr>
																				<td align="center" style="font-size: 14px; color: #eee;background: rgb(43, 104, 40);">ช่วยเหลือ / 帮助</td>
																			</tr>
																			<tr>
																				<td>
																					<style type="text/css">
																						ol{
																							line-height: 40px;
																						}
																						ol li{
																							background: rgb(207, 193, 193);
																							margin: 4px;
																							padding-left: 15px;
																						}
																						ol li:hover{
																							font-size: 15px;
																							color: #000000;
																							background: rgb(146, 125, 125)
																						}
																						ol li a{
																							font-size: 15px;
																							color: #534B4B;
																						}
																					</style>
																					<ol>
																						<?php 
																							$q="SELECT * FROM `help`";
																							$dbnews= new nDB();
																							$dbnews->query($q);
																							while ( $dbnews->next_record()) {
																								?>
																								<li>
																									<a href="help.php?v=<?=md5($dbnews->f(geji_id))?>">
																										<?=$dbnews->f(topic)?>
																									</a>
																								</li>
																								<?
																							}
																						?>
																					</ol>
																				</td>
																			</tr>
																		</table>
																	</td>
																</tr>
																<tr>
																	<td>
																		&nbsp;
																	</td>
																</tr>
																<?
																if($_GET['v']){
																?>
																<tr>
																	<td>
																		<?
																			$q="SELECT * FROM `help` where md5(geji_id) = '".$_GET['v']."' ";
																			$dbnews= new nDB();
																			$dbnews->query($q);
																			$dbnews->next_record();

																			include('help_detail.php');
																		?>
																	</td>
																</tr>
																<?
																}
																?>
																
															</table>
														</td>
													</tr>
												</table>
											</td>
										</tr>
								</table>
							</td>
						</tr>
						<tr>
								<td align="center">
									<?php include('footer.php');?>
								</td>
						</tr>
				</table>
		</body>
</html>
