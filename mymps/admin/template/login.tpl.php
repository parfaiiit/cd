<!doctype html>
<html>

<head>
	<meta charset="gbk" />
	<title>ϵͳ��̨</title>
	<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width" />
	<meta name="robots" content="noindex,nofollow">
	<link href="template/css/login.css" rel="stylesheet" />
	<script type="text/javascript" src="js/login.js"></script>
</head>

<body>
	<div class="topbg">
		<span class="left"><a href="<?php echo $mymps_global[SiteUrl]?>" target="_blank">������վ��ҳ</a></span>
		<span class="right"><a href="#" onClick="var strHref=window.location.href;this.style.behavior='url(#default#homepage)';this.setHomePage('<?php echo GetUrl();?>');" style="cursor: hand">��Ϊ��ҳ</a> <a href="#" onClick="collect();">�����ղ�</a></span>
	</div>
	<div class="wrap">
		<h1>Mymps ��̨��������</h1>
		<form name="Login" action="index.php?part=chk&url=<?=$url?>&go=<?=$go?>" method="post" onSubmit="return CheckForm();">
            <input name="do" value="login" type="hidden">
			<div class="login">
				<ul>
					<li>
						<input class="input" required name="username" type="text" placeholder="�ʺ�" title="����Ա�ʺ�" />
					</li>

					<li>
						<input class="input" type="password" required name="password" placeholder="����" title="����Ա����" />
					</li>
					<?php if ($authcodesettings['adminlogin'] == 1){?>
					<li>
						<img style="float:right;" src="../<?php echo $mymps_global[cfg_authcodefile]; ?>" alt="�����壬����ˢ��" class="authcode" onClick="this.src=this.src+'?'" align="absmiddle"/> <input style="float:left; width:100px; height:28px;" class="input" type="text" required name="checkcode" placeholder="��֤��" title="��֤��" />
					</li>
					 
					<?php }?>
				</ul>
				<button type="submit" name="submit" class="btn">��¼����</button>
			</div>
		</form>
	</div>
	<div class="foot">
		Powered by <a href="http://www.mymps.com.cn" target="_blank">Mymps</a> <?php echo MPS_VERSION; ?>
	</div>
</body>
</html>