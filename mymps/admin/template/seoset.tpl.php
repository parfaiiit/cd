<?php include mymps_tpl('inc_head');?>
<script type='text/javascript' src='js/vbm.js'></script>
<form action="seoset.php" method="post">
<div id="<?=MPS_SOFTNAME?>">
<table border="0" cellspacing="0" cellpadding="0" class="vbm">
  <tr class="firstr">
  	<td colspan="2">SEO��������</td>
  </tr>
 <tr bgcolor="#f1f5f8">
 <td style="width:35%; line-height:22px">��վ���⣬��ʾ��title��ǩ����վ����֮���ʵ����ֹؼ���</td>
 <td bgcolor="#ffffff"><input name="seo_sitename" value="<?=$seo['seo_sitename']?>" class="text"/></td>
 </tr>
 <tr bgcolor="#f1f5f8">
 <td style="width:35%; line-height:22px">��վ�ؼ��ʣ�����ؼ����ԡ�,���ָ���</td>
 <td bgcolor="#ffffff"><input name="seo_keywords" value="<?=$seo['seo_keywords']?>" class="text"/></td>
 </tr>
 <tr bgcolor="#f1f5f8">
 <td style="width:35%; line-height:22px">��վ������������255���ַ�</td>
 <td bgcolor="#ffffff"><textarea name="seo_description" style="height:100px; width:205px"><?=$seo['seo_description']?></textarea></td>
 </tr>
 <tr class="firstr">
  	<td colspan="2">SEO��ϸ����</td>
  </tr>
 <tr bgcolor="#f5f8ff" style="font-weight:bold">
      <td>���ҳ��</td>
      <td>��ʾ��ʽ</td>
    </tr>
 <tr bgcolor="#f1f5f8">
 <td style="width:35%">վ��/about.php</td>
 <td bgcolor="#ffffff"><?=GetSeoType($seo[seo_force_about],'seo_force_about')?></td>
 </tr>
  <tr bgcolor="#f1f5f8">
  <td >����/category.php</td>
 <td bgcolor="#ffffff"><?=GetSeoType($seo[seo_force_category],'seo_force_category')?></td>
 </tr>
  <tr bgcolor="#f1f5f8">
  <td >��Ϣ/info.php</td>
 <td bgcolor="#ffffff"><?=GetSeoType($seo[seo_force_info],'seo_force_info')?></td>
 </tr>
 <tr bgcolor="#f1f5f8">
  <td >����/news.php</td>
 <td bgcolor="#ffffff"><?=GetSeoType($seo[seo_force_news],'seo_force_news')?></td>
  <tr bgcolor="#f1f5f8">
 </tr>
  <tr bgcolor="#f1f5f8">
  <td >�ռ�/space.php</td>
 <td bgcolor="#ffffff"><?=GetSeoType($seo[seo_force_space],'seo_force_space')?></td>
 </tr>
  <tr bgcolor="#f1f5f8">
  <td >����/store.php</td>
 <td bgcolor="#ffffff"><?=GetSeoType($seo[seo_force_store],'seo_force_store')?></td>
 </tr>
   <tr bgcolor="#f1f5f8">
  <td >��Ʒ/goods.php</td>
 <td bgcolor="#ffffff"><?=GetSeoType($seo[seo_force_goods],'seo_force_goods')?></td>
 </tr>
  <tr bgcolor="#f1f5f8">
  <td>�̼һ�ҳ/corp.php</td>
 <td bgcolor="#ffffff"><?=GetSeoType($seo[seo_force_yp],'seo_force_yp')?></td>
 </tr>
</table>
</div>
<center><input name="seoset_submit" value="�� ��" class="mymps large" type="submit"/></center>
</form>
<?php mymps_admin_tpl_global_foot();?>