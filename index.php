<?php
require_once("db.php");
$news = $db->boards()->where('taxonomy_id','1')->where('publish',1)->order('weight DESC,id DESC')->limit(4);
$content = $db->content()->where('taxonomy_id','22')->order('id');
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
        <td height="10"></td>
      </tr>
      <tr>
        <td valign="top"><table width="980" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="658" valign="top"><table width="658" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><img src="images/index_hotnews_taitel.jpg" alt="Hot News" width="658" height="27" /></td>
              </tr>
              <tr>
                <td><table width="658" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="3" bgcolor="#B7D5ED"></td>
                    <td width="282">
                    	<?php $tmp = $content->fetch();?>
                    	<a href="<?php echo $tmp['service']?>">
                    		<img src="admin/upload/<?php echo $tmp['uuid']?>" alt="<?php echo $tmp['tips']?>" width="282" height="214" border="0" />
                    	</a>
                    </td>
                    <td width="3" bgcolor="#B7D5ED"></td>
                    <td width="367" style="vertical-align:top;"><table width="367" border="0" cellspacing="0" cellpadding="13">
                      <tr>
                        <td><table width="340" border="0" cellspacing="0" cellpadding="0">
                          <?php 
                          	$i=0;
                          	foreach($news as $n):
                          ?>
                          <tr>
                            <td class="text_indexin01">
                            	<a href="news.php?id=<?php echo $n['id']?>" class="text_moreurl01<?php if($i<=1){echo " first";}?>">
                            		<?php if($i==0){echo '<img width="26" height="12" border="0" style="margin-bottom:-2px" alt="hot" src="images/hot.gif">';}?>
                            		<?php if($i==1){echo '<img width="26" height="12" border="0" style="margin-bottom:-2px" alt="hot" src="images/new.gif">';}?>
                            		<?php echo $n['title']?></a><br />
								<?php echo $n['tips']?><a href="news.php?id=<?php echo $n['id']?>" class="text_moreurl01">[more]</a>
							</td>
                          </tr>
                          <tr>
                            <td><img width="340" height="11" src="images/index_hotnews_01.gif"></td>
                          </tr>
                          <?php
                            $i++;
                           	endforeach;
                          ?>
                        </table></td>
                      </tr>
                    </table></td>
                    <td width="3" bgcolor="#B7D5ED"></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td height="3" bgcolor="#B7D5ED"></td>
              </tr>
            </table></td>
            <td width="12" valign="top">&nbsp;</td>
            <td width="310" valign="top"><table width="310" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><img src="images/index_youtube_taitel.jpg" width="310" height="27" alt="Youtube" /></td>
              </tr>
              <tr>
                <td><table width="310" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="3" bgcolor="#B7D5ED"></td>
                    <td width="304"><table width="304" border="0" cellspacing="0" cellpadding="1">
                      <tr>
                        <td height="213"><iframe width="302" height="200" src="http://www.youtube.com/embed/ux_Xa8o-_VU?rel=0" frameborder="0" allowfullscreen></iframe></td>
                      </tr>
                    </table></td>
                    <td width="3" bgcolor="#B7D5ED"></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td height="3" bgcolor="#B7D5ED"></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="10" valign="top"></td>
      </tr>
      <tr>
        <td valign="top"><table width="980" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="658" valign="top"><table width="658" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><img src="images/index_top5_01.jpg" width="658" height="27" alt="Top 5" /></td>
              </tr>
              <tr>
                <td><table width="658" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="3" bgcolor="#F3B5DA"></td>
                    <td width="652" height="133" align="center" valign="middle" background="images/index_top5_bg.jpg"><table width="652" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="12" height="111">&nbsp;</td>
                        <td width="116" align="center" valign="top" background="images/index_top5_inbg01.jpg"><table width="110" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td height="3"></td>
                          </tr>
                          <?php $tmp = $content->fetch();?>
                          <tr>
                            <td height="87"><a href="<?php echo $tmp['service']?>"><img src="admin/upload/<?php echo $tmp['uuid']?>" alt="<?php echo $tmp['tips']?>" width="112" height="87" border="0" /></a></td>
                          </tr>
                          <tr>
                            <td height="2"></td>
                          </tr>
                          <tr>
                            <td align="left"><a href="<?php echo $tmp['service']?>" title="<?php echo $tmp['tips']?>" class="text_moreurl03">&gt; <?php echo $tmp['tips']?></a></td>
                          </tr>
                        </table></td>
                        <td width="12">&nbsp;</td>
                        <td width="116" align="center" valign="top" background="images/index_top5_inbg02.jpg"><table width="110" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td height="3"></td>
                          </tr>
                          <?php $tmp = $content->fetch();?>
                          <tr>
                            <td height="87"><a href="<?php echo $tmp['service']?>"><img src="admin/upload/<?php echo $tmp['uuid']?>" alt="<?php echo $tmp['tips']?>" width="112" height="87" border="0" /></a></td>
                          </tr>
                          <tr>
                            <td height="2"></td>
                          </tr>
                          <tr>
                            <td align="left"><a href="<?php echo $tmp['service']?>" title="<?php echo $tmp['tips']?>" class="text_moreurl03">&gt; <?php echo $tmp['tips']?></a></td>
                          </tr>
                        </table></td>
                        <td width="12">&nbsp;</td>
                        <td width="116" align="center" valign="top" background="images/index_top5_inbg03.jpg"><table width="110" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td height="3"></td>
                          </tr>
                          <?php $tmp = $content->fetch();?>
                          <tr>
                            <td height="87"><a href="<?php echo $tmp['service']?>"><img src="admin/upload/<?php echo $tmp['uuid']?>" alt="<?php echo $tmp['tips']?>" width="112" height="87" border="0" /></a></td>
                          </tr>
                          <tr>
                            <td height="2"></td>
                          </tr>
                          <tr>
                            <td align="left"><a href="<?php echo $tmp['service']?>" title="<?php echo $tmp['tips']?>" class="text_moreurl03">&gt; <?php echo $tmp['tips']?></a></td>
                          </tr>
                        </table></td>
                        <td width="12">&nbsp;</td>
                        <td width="116" align="center" valign="top" background="images/index_top5_inbg04.jpg"><table width="110" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td height="3"></td>
                          </tr>
                          <?php $tmp = $content->fetch();?>
                          <tr>
                            <td height="87"><a href="<?php echo $tmp['service']?>"><img src="admin/upload/<?php echo $tmp['uuid']?>" alt="臉型美化" width="112" height="87" border="0" /></a></td>
                          </tr>
                          <tr>
                            <td height="2"></td>
                          </tr>
                          <tr>
                            <td align="left"><a href="<?php echo $tmp['service']?>" title="<?php echo $tmp['tips']?>" class="text_moreurl03">&gt; <?php echo $tmp['tips']?></a></td>
                          </tr>
                        </table></td>
                        <td width="12">&nbsp;</td>
                        <td width="116" align="center" valign="top" background="images/index_top5_inbg05.jpg"><table width="110" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td height="3"></td>
                          </tr>
                          <?php $tmp = $content->fetch();?>
                          <tr>
                            <td height="87"><a href="<?php echo $tmp['service']?>"><img src="admin/upload/<?php echo $tmp['uuid']?>" alt="<?php echo $tmp['tips']?>" width="112" height="87" border="0" /></a></td>
                          </tr>
                          <tr>
                            <td height="2"></td>
                          </tr>
                          <tr>
                            <td align="left"><a href="<?php echo $tmp['service']?>" title="<?php echo $tmp['tips']?>" class="text_moreurl03">&gt; <?php echo $tmp['tips']?></a></td>
                          </tr>
                        </table></td>
                        <td width="12">&nbsp;</td>
                      </tr>
                      </table></td>
                    <td width="3" bgcolor="#F3B5DA"></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td height="3" bgcolor="#F3B5DA"></td>
              </tr>
            </table></td>
            <td width="12" valign="top">&nbsp;</td>
            <td width="310" valign="top"><table width="310" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><img src="images/index_blog_01.jpg" width="310" height="27" /></td>
              </tr>
              <tr>
                <td><img src="images/index_blog_02.jpg" width="310" height="136" border="0" usemap="#Map2" /></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><img src="images/index_04.jpg" width="980" height="11" /></td>
      </tr>
      <tr>
        <td><h1 class="text_id">版權所有 © 2011 MILOS All Rights Reserved  /  米洛斯整形外科診所  /  台北市大安區復興南路一段323號6樓  / <a href="mailto:service@milos.com.tw" class="text_id">service@milos.com.tw</a><br />
營業時間：周一~周五12:00~21:00  周六12:00~18:00  /  預約專線：(02)2700-0164</h1></td>
      </tr>
      <tr>
          <td height="60" style="position:relative;"></td>
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
<map name="Map2" id="Map2">
  <area shape="rect" coords="206,11,304,122" href="http://aadoctor.pixnet.net/blog" target="_blank" alt="醫師個人部落格" /><area shape="rect" coords="106,11,204,122" href="http://www.facebook.com/MilosBeauty" target="_blank" alt="米洛斯美人粉斯團" />
  <area shape="rect" coords="6,11,104,122" href="http://www.wretch.cc/blog/milosclinic" target="_blank" alt="米洛斯部落格" />
</map>
</body>
</html>
