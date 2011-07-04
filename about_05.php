<?php
require_once("db.php");
$news = $db->boards()->where('taxonomy_id',1)->where('publish',1)->order('weight desc,id desc');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="images/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<mata name="KeyWords" content="米洛斯,米洛斯診所,米洛斯整形診所,米洛斯整形外科診所,milos,張博全,張博全院長,院長張博全,張院長" />
<meta name="author" content="張博全" />
<title>最新消息 米洛斯整形外科診所-專業抽脂,隆鼻,隆乳,整形,美容</title>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
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
</script>
</head>
<body leftmargin="0" topmargin="0" rightmargin="0" onload="MM_preloadImages('images/licon_about022.jpg','images/licon_about032.jpg','images/licon_about042.jpg','images/licon_about052.jpg','images/licon_about012.jpg')">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="123">&nbsp;</td>
        </tr>
      <tr>
        <td height="181" bgcolor="#b7d5ec">&nbsp;</td>
        </tr>
    </table></td>
    <td width="980" valign="top">
    <div class="div_body" id="content">
    <table width="980" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td valign="top"><table width="980" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="243" valign="top" background="images/rightbar_bg.gif"><table width="243" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><img src="images/index_01.jpg" alt="milos" width="243" height="123" border="0" usemap="#Map" />
                  <map name="Map" id="Map">
                    <area shape="rect" coords="65,15,236,118" href="index.html" alt="米洛斯" />
                  </map></td>
              </tr>
              <tr>
                <td><img src="images/about_licon_01.jpg" alt="米洛斯整形外科診所" width="243" height="48" /></td>
              </tr>
              <tr>
                <td align="right" valign="bottom" bgcolor="#64AADE"><table width="243" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td><a href="about.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image16','','images/licon_about012.jpg',1)"><img src="images/licon_about011.jpg" alt="認識米洛斯" name="Image16" width="243" height="80" border="0" id="Image16" /></a></td>
                  </tr>
                  <tr>
                    <td><a href="about_01.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image17','','images/licon_about022.jpg',1)"><img src="images/licon_about021.jpg" alt="我們的堅持" name="Image17" width="243" height="80" border="0" id="Image17" /></a></td>
                  </tr>
                  <tr>
                    <td><a href="about_02.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image18','','images/licon_about032.jpg',1)"><img src="images/licon_about031.jpg" alt=" 張院長的故事" name="Image18" width="243" height="80" border="0" id="Image18" /></a></td>
                  </tr>
                  <tr>
                    <td><a href="about_03.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image19','','images/licon_about042.jpg',1)"><img src="images/licon_about041.jpg" alt="環境介紹" name="Image19" width="243" height="80" border="0" id="Image19" /></a></td>
                  </tr>
                  <tr>
                    <td><a href="about_04.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image20','','images/licon_about052.jpg',1)"><img src="images/licon_about051.jpg" alt="設備介紹" name="Image20" width="243" height="80" border="0" id="Image20" /></a></td>
                  </tr>
                  <tr>
                    <td><img src="images/licon_about062.jpg" width="243" height="80" alt="最新消息" longdesc="question_05.html" /></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td><img src="images/about_licon_06.jpg" width="243" height="38" /></td>
              </tr>
              <tr>
                <td height="1" bgcolor="#FFFFFF"></td>
              </tr>
              <tr>
                <td><img src="images/limage_about05.jpg" width="243" height="238" /></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table></td>
            <td width="737" valign="top"><table width="737" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td valign="top"><table width="737" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="123">&nbsp;</td>
                  </tr>
                  <tr>
                    <td><img src="images/about_top_im06.jpg" width="737" height="181" /></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><table width="737" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="28" rowspan="2">&nbsp;</td>
                    <td width="680" class="text_indexin"><table width="680" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td><img src="images/breast_bar03.gif" width="680" height="40" alt="最新消息" /></td>
                      </tr>
                      <?php foreach($news as $n):?>
                      <tr>
                        <td class="hotnews_box"><table width="680" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="594"><img src="images/hotnews_icon.gif" width="20" height="20" style="margin-bottom:-5px"/><a href="news.php?id=<?php echo $n['id']?>" class="text_moreurl02"><?php echo $n['title']?></a></td>
                            <td width="86">(<?php echo substr($n['created_at'],0,10)?>)</td>
                          </tr>
                        </table></td>
                      </tr>
                      <?php endforeach;?>
                    </table></td>
                    <td width="29" rowspan="2">&nbsp;</td>
                  </tr>
                  <tr>
                    <td align="center"><span class="text_moreurl"><img src="hot_news/Previous.png" width="16" height="16" alt="previous" style="margin-bottom:-4px"/><a href="#" class="text_moreurl"> 上一頁</a></span> <span class="text_indexin">│</span> <span class="text_moreurl"><a href="#" class="text_moreurl">下一頁 </a><img src="hot_news/next.png" width="16" height="16" alt="next" style="margin-bottom:-4px"/></span></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table>
        </td>
      </tr>
      <tr>
        <td><img src="images/index_04.jpg" width="980" height="11" /></td>
      </tr>
      <tr>
        <td><h1 class="text_id">版權所有 © 2011 MILOS All Rights Reserved  /  米洛斯整形外科診所  /  台北市大安區復興南路一段323號6樓  / <a href="mailto:service@milos.com.tw" class="text_id">service@milos.com.tw</a><br />
營業時間：周一~周五12:00~21:00  周六12:00~18:00  /  預約專線：(02)2700-0164</h1></td>
      </tr>
      <tr>
        <td height="60">&nbsp;</td>
      </tr>
    </table>
<div class="top_banner"><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="737" height="304" id="米洛斯" align="middle">
				<param name="movie" value="about.swf" />
				<param name="quality" value="high" />
				<param name="bgcolor" value="#ffffff" />
				<param name="play" value="true" />
				<param name="loop" value="true" />
				<param name="wmode" value="transparent" />
				<param name="scale" value="showall" />
				<param name="menu" value="true" />
				<param name="devicefont" value="false" />
				<param name="salign" value="" />
				<param name="allowScriptAccess" value="sameDomain" />
				<!--[if !IE]>-->
				<object type="application/x-shockwave-flash" data="about.swf" width="737" height="304">
					<param name="movie" value="about.swf" />
					<param name="quality" value="high" />
					<param name="bgcolor" value="#ffffff" />
					<param name="play" value="true" />
					<param name="loop" value="true" />
					<param name="wmode" value="transparent" />
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
		</object></div>
    </div>
    </td>
    <td width="50%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="123">&nbsp;</td>
      </tr>
      <tr>
        <td height="181" bgcolor="#f6abdc">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
