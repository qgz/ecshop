<!DOCTYPE HTML>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8">
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<title><?php echo $this->_var['page_title']; ?></title>
<script src="themes/meilele/js/jq.js?1119"></script>
<link rel="stylesheet" href="themes/meilele/css/mll_common.min.css?1122" />
<link rel="stylesheet" href="themes/meilele/index.css" />
<script src="http://siteapp.baidu.com/static/webappservice/uaredirect.js" type="text/javascript"></script><script type="text/javascript">uaredirect("mobile/index.php");</script>
</head>
<body>
<script type="text/javascript">(function(){var screenWidth=window.screen.width;if(screenWidth>=1280){document.body.className="root_body";window.LOAD=true;}else{window.LOAD=false;}})()</script>


<?php echo $this->fetch('library/page_header.lbi'); ?>
<script language="javascript">
document.getElementById('globa_submenu').style.display = 'none';


</script>


<div class="slide_banner root_table" >
  <div id="JS_slide_container" class="slide_stage">
    <table id="JS_side_stage" style="width:500%;">
      <tr>
	  <?php $_from = get_flash_xml(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'playerdb');$this->_foreach['get_flash_xml'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['get_flash_xml']['total'] > 0):
    foreach ($_from AS $this->_var['playerdb']):
        $this->_foreach['get_flash_xml']['iteration']++;
?>
	 
	 
        <td><div class="bg" style="background:url(/images/nav/<?php echo $this->_foreach['get_flash_xml']['iteration']; ?>.jpg) 0 0 repeat-x;"><a href="<?php echo $this->_var['playerdb']['url']; ?>" target="_blank" title="房子先生商城，真情回馈！" style="background:url(<?php if ($this->_foreach['get_flash_xml']['iteration'] < 2): ?>/<?php echo $this->_var['playerdb']['src']; ?><?php else: ?>/images/loading.gif<?php endif; ?>) center center no-repeat;" data-bg="<?php echo $this->_var['playerdb']['src']; ?>"></a></div></td>
	  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
      </tr>
    </table>
  </div>
  <div class="slide_handdler">
    <div id="JS_side_nav" class="w"><?php $_from = get_flash_xml(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'playerdb');$this->_foreach['get_flash_xml'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['get_flash_xml']['total'] > 0):
    foreach ($_from AS $this->_var['playerdb']):
        $this->_foreach['get_flash_xml']['iteration']++;
?><a <?php if ($this->_foreach['get_flash_xml']['iteration'] < 2): ?>class="current first"<?php endif; ?> href="javascript:;"></a><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></div>
  </div>
</div>
<div class="w no_subject clearfix">
  <div class="side Left">
    <div class="ad">
	<?php $_from = get_advlist_by_id(2); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?>
	<a href="<?php echo $this->_var['ad']['url']; ?>" target="_blank" title="<?php echo $this->_var['ad']['name']; ?>"><img data-src2="/<?php echo $this->_var['ad']['image']; ?>" src="/themes/meilele/images/blank.gif" width="228" height="102" alt="<?php echo $this->_var['ad']['name']; ?>" /></a>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
    <div class="tab mt10">
      <div id="JS_side_tab_nav" class="head"><a href="javascript:;" class="first current">网站公告</a><a href="javascript:;">订单状态查询</a></div>
      <div id="JS_side_tab_body" class="body">
        <div class="show_news tBody current">
          <ul class="gg ">
            
<?php $this->assign('articles',$this->_var['articles_9']); ?><?php $this->assign('articles_cat',$this->_var['articles_cat_9']); ?><?php echo $this->fetch('library/cat_articles.lbi'); ?>

          </ul>
        </div>
        <div class="tBody query">
          <div class="input">
            <input type="text" class="uOrder" id="JS_ordersn" value="请输入订单号" onFocus="this.value=this.value=='请输入订单号'?'':this.value" onBlur="this.value=this.value==''?'请输入订单号':this.value" />
          </div>
          <div class="input mt10">
            <a class="imgBtn" href="javascript:;" id="JS_check_order" title="查询" style="margin-left:0px"></a></div>
          <p class="login" id="JS_login_status"><a href="user.php" title="登录">登录</a>进入<a href="user.php?act=order_list" target="_blank" title="订单中心">订单中心</a>查询</p>
        </div>
      </div>
    </div>
  </div>
  <div class="main Right">
    <div class="head clearfix">
	<?php if ($this->_var['region_id'] > 0): ?>
<div class="Left"><strong class="ep">欢迎光临</strong><a href="expr-<?php echo $this->_var['region_id']; ?>.html" target="_blank"><strong class="red"><?php echo $this->_var['region_name']; ?>体验馆<?php if ($this->_var['regions_count'] > 0): ?>(<?php echo $this->_var['regions_count']; ?>家)<?php endif; ?>！</strong></a><span class="weekly">店长推荐</span></div>      
	<?php else: ?>
<div class="Left"><strong><span class="red">房子先生</span><span>在您身边</span></strong><span class="weekly">每周推荐</span></div>
	<?php endif; ?>  
	<?php if ($this->_var['region_id'] > 0): ?>
	<div class="Right"><a href="expr-<?php echo $this->_var['region_id']; ?>.html" target="_blank" title="<?php echo $this->_var['region_name']; ?>体验馆" class="go"><i></i><?php echo $this->_var['region_name']; ?>体验馆</a></div>
	<?php else: ?>
    <div class="Right"> <a href="expr.php" target="_blank" title="查看体验馆" class="go"><i></i>查看体验馆</a> </div>
    <?php endif; ?>  
    </div>
    <div class="header_bg clearfix"><i class="l_bg"></i><i class="r_bg"></i></div>
    <div class="body week_body">
	<?php $_from = $this->_var['supplier_best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['hot_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['hot_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['hot_goods']['iteration']++;
?>
      <div class="goods4_list first">
        <div class="img"><?php if ($this->_var['goods']['save_rate'] > 0): ?><span class="yahei"><strong><?php echo $this->_var['goods']['save_rate']; ?></strong><br>折</span><?php endif; ?><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><img src="/themes/meilele/images/blank.gif" data-src2="/<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" /></a> </div>
        <p class="info"><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo $this->_var['goods']['short_style_name']; ?></a><br />
          本站价：<span class="yen red"></span><strong class="pr red"><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></strong></p>
      </div>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
    </div>
  </div>
</div>
<div class="w clearfix mt12">
  <div class="groupBuy Left">
    <div class="head clearfix">
      <div class="Left"><strong class="name"><a href="group_buy.php" title="团购" target="_blank">爆款团购</a></strong></div>
    </div>
    <div class="body" id="JS_group_buy_body">
      <div class="box">
        
        <table id="JS_groupBuy_stage">
          <tr>
            <td>
			<?php $_from = get_advlist_by_id(3); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?>
			<div class="img"><a href="<?php echo $this->_var['ad']['url']; ?>" target="_blank" title="<?php echo $this->_var['ad']['name']; ?>"><img src="/themes/meilele/images/blank.gif" data-src2="/<?php echo $this->_var['ad']['image']; ?>" width="210" height="192" alt="<?php echo $this->_var['ad']['name']; ?>" /></a></div>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			<?php $_from = $this->_var['group_buy_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['group_buy_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['group_buy_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['group_buy_goods']['iteration']++;
?>
			<?php if ($this->_foreach['group_buy_goods']['iteration'] < 2): ?>
              <div class="cont">
                <div class="Left"> <span>团购价:</span><span class="yen"></span><strong class="price"><?php echo $this->_var['goods']['last_price']; ?></strong> </div>
                <div class="Right"><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="参团"></a></div>
              </div>
			<?php endif; ?>  
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>  
			  </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="limitTime Right">
    <div class="head clearfix"> <strong class="name Left" style="color:#333">限时抢购</strong>
      <div class="Right none" style="height:29px;padding-top:1px;"><a id="JS_limit_left" class="limit_l"></a><a id="JS_limit_right" class="limit_r"></a></div>
    </div>
    <div id="JS_limit_time" class="body">
      <table id="JS_limit_table">
        <tr>
		<?php $_from = get_cat_promote_goods_4(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['promote_goods_4'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['promote_goods_4']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['promote_goods_4']['iteration']++;
?>
          <td><div class="goods4_list first">
              <div class="limit_time_container clearfix"> <i class="limit_icon"></i>
                 <div class="leaveTime time_area c JS_leaveTime" data-timeline="<?php echo $this->_var['goods']['promote_limit_time']; ?>">剩余<span class="digital">00</span>时<span class="digital">00</span>分<span class="digital">00</span>秒</div>
              </div>
               <div class="img"> <a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><img src="/themes/meilele/images/blank.gif"  data-src2="/<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" /></a>   
                <div class="layer"></div>
              </div>
              <div class="info"> <a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></a><br />
                抢购价：<span class="yen red"></span><strong class="pr red"><?php echo $this->_var['goods']['promote_price']; ?></strong> </div>
            </div></td>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
         
        </tr>
      </table>
    </div>
  </div>
</div>
<div class="w mt20 floor1 floor1_2">
	  <div class="header clearfix">
		<div class="Left"><a class="title" href="search_list.php?encode=YToyOntzOjU6ImludHJvIjtzOjM6Im5ldyI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjEzOTU4ODY5OTU7fQ==l" target="_blank"></a></div>
		<div class="Right"><a class="more" href="search_list.php?encode=YToyOntzOjU6ImludHJvIjtzOjM6Im5ldyI7czoxODoic2VhcmNoX2VuY29kZV90aW1lIjtpOjEzOTU4ODY5OTU7fQ==l" style="color:#cc0200" target="_blank">更多新品</a></div>
	  </div>
	  <div class="main_new" id="JS_hover_img_box_2">
			<div class="recommend_goods_list">
						 <?php $_from = $this->_var['new_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
						  <dl>
								<dt>
									<a href="<?php echo $this->_var['goods']['url']; ?>"target="_blank"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="goodsimg" /></a>
								</dt>
								<dd>
									<div class="cat_goods_name"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"target="_blank"><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></a></div>
									<div class="cat_goods_price">
										特价：<?php if ($this->_var['goods']['promote_price'] != ""): ?>
										<font class="shop_s"><?php echo $this->_var['goods']['promote_price']; ?></font>
										<?php else: ?>
										<font class="shop_s"><?php echo $this->_var['goods']['shop_price']; ?></font>
										<?php endif; ?>
									</div>
								</dd>
						  </dl>
						  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</div>
			<div style="clear:both"></div>
	  </div>
</div>

<div class="w mt20 floor1">
	  <div class="header clearfix">
		<div class="Left"><a class="title" href="search_list.php?encode=YToyOntzOjU6ImludHJvIjtzOjQ6ImJlc3QiO3M6MTg6InNlYXJjaF9lbmNvZGVfdGltZSI7aToxMzk1ODg2NjA4O30=" target="_blank"></a></div>
		<div class="Right"><a class="more" href="search_list.php?encode=YToyOntzOjU6ImludHJvIjtzOjQ6ImJlc3QiO3M6MTg6InNlYXJjaF9lbmNvZGVfdGltZSI7aToxMzk1ODg2NjA4O30=" style="color:#cc0200" target="_blank">更多精品</a></div>
	  </div>
	  <div class="main_new" id="JS_hover_img_box_1">
			<div class="recommend_goods_list">
						 <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
						  <dl>
								<dt>
									<a href="<?php echo $this->_var['goods']['url']; ?>"target="_blank"><img src="<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" class="goodsimg" /></a>
								</dt>
								<dd>
									<div class="cat_goods_name"><a href="<?php echo $this->_var['goods']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"target="_blank"><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></a></div>
									<div class="cat_goods_price">
										特价：<?php if ($this->_var['goods']['promote_price'] != ""): ?>
										<font class="shop_s"><?php echo $this->_var['goods']['promote_price']; ?></font>
										<?php else: ?>
										<font class="shop_s"><?php echo $this->_var['goods']['shop_price']; ?></font>
										<?php endif; ?>
									</div>
								</dd>
						  </dl>
						  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</div>
			<div style="clear:both"></div>
	  
	  </div>
</div>



<?php $this->assign('cat_goods',$this->_var['cat_goods_1']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_1']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_2']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_2']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>
<?php $this->assign('cat_goods',$this->_var['cat_goods_3']); ?><?php $this->assign('goods_cat',$this->_var['goods_cat_3']); ?><?php echo $this->fetch('library/cat_goods.lbi'); ?>

<script language="javascript">
$('.cat_floor').each(
	function(i){
	var index = i + 1;
	$(this).addClass('floor2_'+index);
	
	}
);

</script>
<div class="w todayDown">
  <div class="head"><strong class="name"><a href="search.php?intro=new" title="今日新品" target="_black">今日新品</a></strong></div>
  <div class="body">
  <?php $_from = get_cat_new_goods_5(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['get_cat_new_goods_5'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['get_cat_new_goods_5']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['get_cat_new_goods_5']['iteration']++;
?>
    <div class="goods4_list mt20 <?php if ($this->_foreach['get_cat_new_goods_5']['iteration'] == 1): ?>first<?php endif; ?><?php if ($this->_foreach['get_cat_new_goods_5']['iteration'] == 5): ?>SCREEN-SHOW<?php endif; ?>">
      <div class="img"><?php if ($this->_var['goods']['save_rate'] > 0): ?><span class="yahei"><strong><?php echo $this->_var['goods']['save_rate']; ?></strong><br>折</span><?php endif; ?><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><img src="/themes/meilele/images/blank.gif" data-src2="/<?php echo $this->_var['goods']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>" /></a> </div>
      <div class="info"> <a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods']['short_name']); ?></a><br />
        特价：<span class="yen red"></span><strong class="pr red"><?php if ($this->_var['goods']['promote_price'] != ""): ?><?php echo $this->_var['goods']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods']['shop_price']; ?><?php endif; ?></strong> </div>
    </div>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    
  </div>
</div>
<div class="w hotBrand">
  <div class="header yahei"><a href="brand.php" target="_blank">热门品牌</a></div>
  <table id="JS_hotBrand_table">
    <tr class="first">
	<?php $_from = get_advlist_by_id(6); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?>
	<?php if ($this->_foreach['index_image']['iteration'] < 8): ?>
      <td class="td_<?php echo $this->_foreach['index_image']['iteration']; ?>"><div class="bd">
          <div class="bg"></div>
          <div class="text"><?php echo $this->_var['ad']['name']; ?><br />
            <a href="<?php echo $this->_var['ad']['url']; ?>" title="<?php echo $this->_var['ad']['name']; ?>" target="_blank">去看商品</a></div>
          <div class="img"><img src="/themes/meilele/images/blank.gif" data-src2="/<?php echo $this->_var['ad']['image']; ?>" width="85" height="50" /><br />
            <?php echo $this->_var['ad']['name']; ?></div>
        </div></td>
	 <?php endif; ?>	
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
     
    </tr>
    <tr>
    <?php $_from = get_advlist_by_id(6); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');$this->_foreach['index_image'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_image']['total'] > 0):
    foreach ($_from AS $this->_var['ad']):
        $this->_foreach['index_image']['iteration']++;
?>
	<?php if ($this->_foreach['index_image']['iteration'] > 7): ?>
      <td class="td_<?php echo $this->_foreach['index_image']['iteration']; ?>"><div class="bd">
          <div class="bg"></div>
          <div class="text"><?php echo $this->_var['ad']['name']; ?><br />
            <a href="<?php echo $this->_var['ad']['url']; ?>" title="<?php echo $this->_var['ad']['name']; ?>" target="_blank">去看商品</a></div>
          <div class="img"><img src="/themes/meilele/images/blank.gif" data-src2="/<?php echo $this->_var['ad']['image']; ?>" width="85" height="50" /><br />
            <?php echo $this->_var['ad']['name']; ?></div>
        </div></td>
	 <?php endif; ?>	
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </tr>
  </table>
</div>

<div class="w mt20">
  <div class="frameLay">
    <div class="showMyHome Left">
      <div class="layHead"> <strong class="name"><a href="article_cat.php?id=10" title="晒家达人" target="_black">晒家达人</a></strong>
        <div id="JS_focus_xspace_nav" class="tNav"><a href="javascript:;" class="current"></a><a href="javascript:;"></a><a href="javascript:;"></a></div>
      </div>
      <div class="layBody">
        <div class="stage">
          <table id="JS_focus_xspace_body" cellspacing="0" cellpadding="0">
            <tr>
			<?php $_from = get_cat_arts_9(10); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');$this->_foreach['artciles_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['artciles_list']['total'] > 0):
    foreach ($_from AS $this->_var['article']):
        $this->_foreach['artciles_list']['iteration']++;
?>
              <td><div class="list <?php if ($this->_foreach['artciles_list']['iteration'] == 1): ?>first<?php endif; ?>">
                  <div class="img"><a href="<?php echo $this->_var['article']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>"><img src="/themes/meilele/images/blank.gif" data-src2="/<?php echo $this->_var['article']['file_url']; ?>" width="167" height="200" alt="<?php echo htmlspecialchars($this->_var['article']['title']); ?>" /></a></div>
                  <p class="txt"><?php echo htmlspecialchars($this->_var['article']['title']); ?></p>
                </div></td>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 	
              
            </tr>
          </table>
        </div>
      </div>
    </div>
    <div id="JS_newdeal" class="articleTab">
      <div class="layHead">
        <div id="JS_tab_article_nav" class="tabNav"><a class="first current" href="javascript:;" title="最新评价">最新评价</a><a href="javascript:;" title="家居知识">家居知识</a></div>
      </div>
      <div id="JS_tab_article_body" class="layBody">
        <div id="INDEX_LeiHao_XXXXX" class="tabBody dealRecord current">
          <div style="margin-top: -182px;" id="JS_scroll_out_box" class="scrollBox">
		  <?php $_from = get_new_comment_30(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'msg');$this->_foreach['message_lists'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['message_lists']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['msg']):
        $this->_foreach['message_lists']['iteration']++;
?>
        <div class="item">
          <div class="img"><a href="goods-<?php echo $this->_var['msg']['goods_id']; ?>.html" target="_blank" title="<?php echo $this->_var['msg']['goods_name']; ?>"><img src="/<?php echo $this->_var['msg']['goods_thumb']; ?>" alt="<?php echo $this->_var['msg']['goods_name']; ?>" height="79" width="117"></a></div>
          <div class="txt"><a href="goods-<?php echo $this->_var['msg']['goods_id']; ?>.html" target="_blank" title="<?php echo $this->_var['msg']['goods_name']; ?>"><?php echo $this->_var['msg']['goods_name']; ?></a><br>
            <span class="time"><?php echo $this->_var['msg']['user_name']; ?></span> 评价了<br>
            <a href="goods.php?id=<?php echo $this->_var['msg']['goods_id']; ?>" target="_blank" title="<?php echo $this->_var['msg']['content']; ?>" style="color:#999"><?php echo sub_str($this->_var['msg']['content'],30); ?></a></div>
        </div>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </div>
		  
        </div>
        <div class="tabBody">
          <div class="notes clearfix">
		  <?php $_from = get_cat_top_arts_1(11); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');$this->_foreach['artciles_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['artciles_list']['total'] > 0):
    foreach ($_from AS $this->_var['article']):
        $this->_foreach['artciles_list']['iteration']++;
?>
            <div class="img"><a href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>" target="_blank"><img src="/themes/meilele/images/blank.gif" data-src="/<?php echo $this->_var['article']['file_url']; ?>" alt="<?php echo htmlspecialchars($this->_var['article']['title']); ?>" width="161" height="106" /></a></div>
            <h3><a href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>" target="_blank"><?php echo $this->_var['article']['short_title']; ?></a></h3>
            <p><a class="gray" href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>" target="_blank"><?php echo sub_str($this->_var['article']['description'],40); ?></a></p>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </div>
          <ul class="clearfix">
		  <?php $_from = get_cat_arts_12(11); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');$this->_foreach['artciles_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['artciles_list']['total'] > 0):
    foreach ($_from AS $this->_var['article']):
        $this->_foreach['artciles_list']['iteration']++;
?>
            <li class="gray">&bull;&ensp;<a class="gray" href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['article']['title']); ?>" target="_blank"><?php echo $this->_var['article']['short_title']; ?></a></li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="w mt20" id="expr_list" style="display:none">
  <div class="randomExpr">
    <div class="title"><strong><a href="javascript:;" target="_blank"><?php 
$k = array (
  'name' => 'area_name',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>体验馆</a></strong></div>
    <div class="body">
	<?php $_from = $this->_var['regions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'supplier');$this->_foreach['get_suppliers'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['get_suppliers']['total'] > 0):
    foreach ($_from AS $this->_var['supplier']):
        $this->_foreach['get_suppliers']['iteration']++;
?>
      <div class="list <?php if ($this->_foreach['get_suppliers']['iteration'] == 1): ?>first<?php endif; ?>">
        <div class="name Left">
          <h3 style="width:150px"><a href="expr_show-<?php echo $this->_var['supplier']['suppliers_id']; ?>.html" title="<?php echo $this->_var['supplier']['suppliers_name']; ?>" target="_blank"><?php echo $this->_var['supplier']['suppliers_name']; ?></a></h3>
        </div>
        <div id="JS_hide_map_menu_1" class="addr Left" onmouseover="_show_(this);" onmouseout="_hide_(this);" style="margin-left:150px">
          <div class="floatMap">
            <div class="arrow"></div>
            <div class="map"><img src="/<?php echo $this->_var['supplier']['position_img']; ?>" width="250" height="238" alt="<?php echo $this->_var['supplier']['suppliers_name']; ?>" /></div>
          </div>
          <p>地址：<a href="expr_show-<?php echo $this->_var['supplier']['suppliers_id']; ?>.html" target="_blank" title="><?php echo $this->_var['supplier']['address']; ?>"><?php echo $this->_var['supplier']['address']; ?></a></p>
          <p>乘车路线：<span><?php echo $this->_var['supplier']['line']; ?></span></p>
        </div>
        <div class="phone Left" style="float:right; border-right:0px"> 体验热线：<strong class="f_13 red yen"><?php echo $this->_var['supplier']['tel']; ?></strong><br />
          营业时间：<?php echo $this->_var['supplier']['work_time']; ?> </div>
        
      </div>
	  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      
      
    </div>
  </div>
</div>
<script language="javascript">
$('#expr_list .body').each(
	function (i){
		if ($.trim($(this).html()) != ''){
			$('#expr_list').show();
		}
	}
);
</script>

<?php echo $this->fetch('library/page_footer.lbi'); ?>

<script language="javascript">

_show_(document.getElementById('JS_common_head_menu_812'),{source:'JS_all_head_category_menu',target:'JS_head_expand_menu_target'});
</script>


<script src="/themes/meilele/js/back_to_top.min.js?1127"></script>

<script type="text/javascript">
function limitCount() {

	var a = limitCount.doms = limitCount.doms || $("#JS_limit_table div.JS_leaveTime");
	a.each(function() {
		var c = $(this);
		var b = c[0]._timeline = c[0]._timeline || c.data("timeline");
		c.html(limitFormatTime(b - limitCount.unixTime));
	});
	limitCount.unixTime++;
}

function limitFormatTime(e) {
	if (e < 0) {
		e = 0;
	}
	var f = Math.floor(e / 3600 / 24),
	c = Math.floor((e / 3600) % 24),
	a = Math.floor((e % 3600) / 60),
	b = Math.floor((e % 3600) % 60);
	if (c < 10) {
		c = "0" + c;
	}
	if (a < 10) {
		a = "0" + a;
	}
	if (b < 10) {
		b = "0" + b;
	}
	return "剩余" + (f > 0 ? '<span class="digital">' + f + "</span>天": "") + '<span class="digital">' + c + '</span>时<span class="digital">' + a + '</span>分<span class="digital">' + b + "</span>秒";
}
function _COMMON_UNIX_TIME() {
		limitCount.unixTime = 0;
		setInterval(limitCount, 1000);
}
_COMMON_UNIX_TIME();
function getNewDealRecord() {
	
}
function formatTime(i) {
	if (!i) {
		return "刚刚";
	}
	var b = parseInt((new Date()).getTime() / 1000);
	var f = b - i;
	if (f < 0) {
		f = 0;
	}
	var e = f % 60;
	var a = parseInt(f % 3600 / 60);
	var c = parseInt(f % (3600 * 24) / 3600);
	var g = parseInt(f / (3600 * 24));
	if (g) {
		return g + "天前";
	} else {
		if (c) {
			return c + "小时前";
		} else {
			if (a) {
				return a + "分钟前";
			} else {
				if (e) {
					return e + "秒前";
				} else {
					return "刚刚";
				}
			}
		}
	}
}
function dealRecordAnimate() {
	window._JS_ZZ_LOCK_ = false;
	var e = $("#JS_scroll_out_box");
	var b = $("#JS_scroll_out_box .item");
	var a = window.LOAD ? parseInt(b.length / 2) : b.length;
	var c;
	if (a > 3) {
		e.css("margin-top", a * ( - 91) + "px");
		c = -a;
		e.hover(function() {
			window._JS_ZZ_LOCK_ = true;
		},
		function() {
			window._JS_ZZ_LOCK_ = false;
		});
		var d = e.html();
		d += d;
		e.html(d);
		setInterval(f, 4000);
	}
	function f() {
		if (window._JS_ZZ_LOCK_) {
			return;
		}
		c++;
		e.animate({
			"margin-top": c * 91 + "px"
		},
		200, "linear",
		function() {
			if (c > -1) {
				e.css("margin-top", a * ( - 91) + "px");
				c = -a;
			}
		});
	}
}
dealRecordAnimate();
$(function() {
	$.lazyImg.start("both", {
		attributeTag: "data-src2"
	});
	window._currentWidth = document.body.clientWidth;
	window.onresize = function() {
		window._currentWidth = document.body.clientWidth;
		c = 0;
		g();
	};
	var f = $("#JS_side_stage"),
	a = $("#JS_side_stage a"),
	i = $("#JS_side_nav a"),
	b = $("#JS_side_stage a"),
	d = i.length,
	e = 0,
	c = 0;
	i.on("mouseover",
	function() {
		c = $(this).index();
		if (h) {
			clearInterval(h);
		}
		g();
	}).on("mouseout",
	function() {
		h = setInterval(function() {
			g();
		},
		6000);
	});
	var g = function() {
		$(i.get(e)).removeClass("current");
		$(i.get(c)).addClass("current");
		f.stop(true, false).animate({
			"margin-left": (0 - c) * window._currentWidth + "px"
		},
		200);
		e = c;
		var l = $(b.get(e));
		var j = l.attr("data-bg");
		if (j) {
			l.css({
				background: "url(" + j + ") center center no-repeat"
			}).removeAttr("data-bg");
		}
		c = (c >= d - 1) ? 0 : c + 1;
	};
	var h = setInterval(function() {
		g();
	},
	6000);
});
function slideLazy(a) {
	if (a.index > 0) {
		var b = a["_img_" + a.index] || a.stage.find("img").get(a.index);
		if (b && !b._lazYDone) {
			$.lazyImg.prepend([{
				target: b,
				src: b.getAttribute("lazy-src2")
			}]);
			a["_img_" + a.index] = b;
			b._lazYDone = true;
		}
	}
}
$(function() {
	$.tab($("#JS_expr_num_box td.enav"), $("#JS_expr_num_box td.ebody"), {
		lazy: false
	});
	$.tab($("#JS_side_tab_nav a"), $("#JS_side_tab_body .tBody"), {
		lazy: false
	});
	$("#JS_group_buy_body").on("mouseover",
	function() {
		this.className = "body current";
	}).on("mouseout",
	function() {
		this.className = "body";
	});
	$.slide({
		prevBtn: $("#JS_group_nav_prev"),
		nextBtn: $("#JS_group_nav_next")
	},
	$("#JS_groupBuy_stage"), {
		step: 210
	});
	$.slide({
		prevBtn: $("#JS_limit_left"),
		nextBtn: $("#JS_limit_right")
	},
	$("#JS_limit_table"), {
		step: window.LOAD ? 960 : 750,
		onSlide: function(b) {
			if (b.index > 0 && !b._lazYDone) {
				var e = b.stage.find("div.img img");
				var d = [];
				for (var c = 3; c < 6; c++) {
					if (e[c]) {
						d.push({
							target: e[c],
							src: e[c].getAttribute("lazy-src2")
						});
					}
				}
				if (d.length) {
					$.lazyImg.prepend(d);
				}
				b._lazYDone = true;
			}
		}
	});
	$("#JS_limit_table").on("mouseenter", "td",
	function() {
		this.className = "current";
	});
	$("#JS_limit_table").on("mouseleave ", "td",
	function() {
		this.className = "";
	});
	$("#JS_check_order").on("click",
	function() {
		orderQuery();
	});
	for (var a = 1; a <= 4; a++) {
		$.slide($("#JS_floor_focus_nav_" + a + " a"), $("#JS_floor_focus_stage_" + a), {
			step: 721,
			eventType: "mouseenter",
			autoRun: 5000,
			onSlide: slideLazy
		});
	}
});

function orderQuery()
{
  var order_sn = $('#JS_ordersn').val();

  var reg = /^[\.0-9]+/;
  if (order_sn.length < 10 || ! reg.test(order_sn))
  {
    $.alert('无效订单号!');
    return;
  }
  $.ajax({
					type:"GET",
					url:'user.php?act=order_query&order_sn=s' + order_sn,
					cache:false,
					dataType:'json',     //接受数据格式
					data:'',
					success:orderQueryResponse
				});
}

function orderQueryResponse(result)
{
  if (result.message.length > 0)
  {
    $.alert(result.message);
  }
  if (result.error == 0)
  {
	$.alert(result.content);
  }
}

$(window).on("load",
function() {
	$.slide($("#JS_zx_slide_nav a"), $("#JS_zx_slide_body"), {
		step: 510,
		eventType: "mouseenter",
		autoRun: 3000,
		onSlide: slideLazy
	});
	$.slide($("#JS_focus_xspace_nav a"), $("#JS_focus_xspace_body"), {
		step: 567,
		eventType: "mouseenter",
		autoRun: 3500,
		onSlide: function(b) {
			var a = b.index;
			if (a > 0 && !b["_lazyDone_" + a]) {
				var e = b.stage.find("div.img img");
				var d = [];
				for (var c = a * 3; c < (a + 1) * 3; c++) {
					if (e[c]) {
						d.push({
							target: e[c],
							src: e[c].getAttribute("lazy-src2")
						});
					}
				}
				if (d.length) {
					$.lazyImg.prepend(d);
				}
				b["_lazyDone_" + a] = true;
			}
		}
	});
	$.tab($("#JS_tab_article_nav a"), $("#JS_tab_article_body div.tabBody"));
	getNewDealRecord();
	$("#JS_hotBrand_table").on("mouseenter", "td",
	function() {
		$(this).addClass("current");
	});
	$("#JS_hotBrand_table").on("mouseleave ", "td",
	function() {
		$(this).removeClass("current");
	});
});
/*LDZ:2013-08-16 15:52:28*/</script>

</body>
</html>
<!--
GH:2013-10-22 18:31:38
-->
