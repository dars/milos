<?php
require_once("db.php");
$news = $db->boards()->where('taxonomy_id','1')->limit(3);
$blocks = $db->content()->where('taxonomy_id','22');
$block = array();
foreach($blocks as $b){
	array_push($block,$b);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="images/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<mata name="KeyWords" content="http://www.milos.com.tw/index.htmlhttp://www.milos.com.tw/index.html" />
<meta name="author" content="張博全" />
<title>米洛斯整形外科診所-專業抽脂,隆鼻,隆乳,整形,美容</title>
<link href="css/css.css" rel="stylesheet" type="text/css" />
</head>

<body topmargin="0" leftmargin="0" rightmargin="0">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td width="50%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td height="123">&nbsp;</td>
				</tr>
			<tr>
				<td height="351" bgcolor="#b7d5ec">&nbsp;</td>
				</tr>
		</table></td>
		<td width="980" valign="top"><table width="980" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td height="474" valign="top"><table width="980" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td width="243"><table width="243" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td><img src="images/index_01.jpg" alt="milos" width="243" height="123" /></td>
							</tr>
							<tr>
								<td><img src="images/index_02.jpg" alt="米洛斯" width="243" height="351" /></td>
							</tr>
						</table></td>
						<td valign="top"><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="737" height="474" id="米洛斯" align="middle">
				<param name="movie" value="index.swf" />
				<param name="quality" value="high" />
				<param name="bgcolor" value="#ffffff" />
				<param name="play" value="true" />
				<param name="loop" value="true" />
				<param name="wmode" value="window" />
				<param name="scale" value="showall" />
				<param name="menu" value="true" />
				<param name="devicefont" value="false" />
				<param name="salign" value="" />
				<param name="allowScriptAccess" value="sameDomain" />
				<!--[if !IE]>-->
				<object type="application/x-shockwave-flash" data="index.swf" width="737" height="474">
					<param name="movie" value="index.swf" />
					<param name="quality" value="high" />
					<param name="bgcolor" value="#ffffff" />
					<param name="play" value="true" />
					<param name="loop" value="true" />
					<param name="wmode" value="window" />
					<param name="scale" value="showall" />
					<param name="menu" value="true" />
					<param name="devicefont" value="false" />
					<param name="salign" value="" />
					<param name="allowScriptAccess" value="sameDomain" />
				<!--<![endif]-->
					<a href="http://www.adobe.com/go/getflash">
						<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="取得 Adobe Flash 播放程式" />
					</a>
				<!--[if !IE]>-->
				</object>
				<!--<![endif]-->
			</object></td>
					</tr>
				</table></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td valign="top"><table width="980" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td width="628" valign="top"><table width="628" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<td><table width="628" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<td width="243" valign="top"><a href="about_05.html"><img src="images/index_05.jpg" width="243" height="184" border="0" /></a></td>
										<td width="16">&nbsp;</td>
										<td width="353" valign="top"><table width="353" border="0" cellspacing="0" cellpadding="0">
											<tr>
												<td><a href="about_05.html"><img src="images/index_hotnews.gif" width="353" height="18" border="0" /></a></td>
											</tr>
											<tr>
												<td height="6"></td>
											</tr>
											<tr>
												<td class="text_indexin01"><table width="353" border="0" cellspacing="0" cellpadding="0">
													<?php foreach($news as $n):?>
													<tr>
														<td><a href="20110513hotnews01.html" class="text_moreurl"><?php echo $n['title']?></a><br />
															<?php echo mb_substr(strip_tags($n['content']),0,22,'utf8');?>......<a href="20110505hotnews01.html" class="text_moreurl01">[more]</a></td>
													</tr>
													<tr>
														<td><table width="353" border="0" cellspacing="0" cellpadding="0">
															<tr>
																<td height="7"></td>
															</tr>
															<tr>
																<td height="1" bgcolor="#CCCCCC"></td>
															</tr>
															<tr>
																<td height="7"></td>
															</tr>
														</table></td>
													</tr>
													<?php endforeach;?>
												</table></td>
											</tr>
										</table></td>
										<td width="16">&nbsp;</td>
									</tr>
								</table></td>
							</tr>
							<?php
							 $i=0;
							 while($i<3){
							 
							?>
							<tr>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td><table width="628" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<td width="65" height="60"><a href="http://aadoctor.pixnet.net/blog/post/18866398" target="_blank"><img src="images/index_photo02.jpg" width="65" height="60" border="0" class="index_photo_s01" /></a></td>
										<td width="10">&nbsp;</td>
										<td width="537" valign="top"><table width="537" border="0" cellspacing="0" cellpadding="0">
											<tr>
												<td class="taital_index"><a href="http://aadoctor.pixnet.net/blog/post/18866398" target="_blank" class="taitalurl_index"><?php echo $block[$i]['tips']?></a></td>
											</tr>
											<tr>
												<td valign="top" class="text_indexin"><?php echo $block[$i]['content']?>...</td>
											</tr>
										</table></td>
										<td width="16">&nbsp;</td>
									</tr>
								</table></td>
							</tr>
							<?php
								$i++;
								}
							?>
						</table></td>
						<td width="14" valign="top"><img src="images/index_03.jpg" width="14" height="459" /></td>
						<td width="338" valign="top"><table width="338" border="0" cellspacing="0" cellpadding="0">
							<?php
							while($i<7){
							?>
							<tr>
								<td><table width="338" border="0" cellspacing="0" cellpadding="0">
									<tr>
										<td width="84" valign="bottom"><a href="question.html"><img src="images/index_icon01.jpg" width="84" height="64" border="0" /></a></td>
										<td width="16">&nbsp;</td>
										<td width="222" valign="top"><table width="222" border="0" cellspacing="0" cellpadding="0">
											<tr>
												<td class="side_links"><a href="<?php echo $block[$i]['service']?>"><?php echo $block[$i]['tips']?></a></td>
											</tr>
											<tr>
												<td height="10"></td>
											</tr>
											<tr>
												<td class="text_indexin01"><?php echo $block[$i]['content']?><a href="<?php echo $block[$i]['service']?>" class="text_moreurl01">[more]</a></td>
											</tr>
										</table></td>
										<td width="16">&nbsp;</td>
									</tr>
								</table></td>
							</tr>
							<tr>
								<td height="30">&nbsp;</td>
							</tr>
							<?php $i++;}?>
						</table></td>
					</tr>
				</table></td>
			</tr>
			<tr>
				<td><img src="images/index_04.jpg" width="980" height="11" /></td>
			</tr>
			<tr>
				<td><h1 class="text_id">版權所有 © 2011 MILOS All Rights Reserved	/	米洛斯整形外科診所	/	台北市大安區復興南路一段323號6樓	/ <a href="mailto:service@milos.com.tw" class="text_id">service@milos.com.tw</a><br />
營業時間：周一~周五12:00~21:00	周六12:00~18:00	/	預約專線：(02)2700-0164</h1></td>
			</tr>
			<tr>
				<td height="60">&nbsp;</td>
			</tr>
		</table></td>
		<td width="50%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td height="123">&nbsp;</td>
			</tr>
			<tr>
				<td height="351" bgcolor="#f6abdc">&nbsp;</td>
			</tr>
		</table></td>
	</tr>
</table>
</body>
</html>
