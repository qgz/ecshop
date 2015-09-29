
<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<title><?php echo $this->_var['page_title']; ?></title>
<link rel="stylesheet" href="themes/meilele/css/mll_common.min.css" />
<link href="themes/meilele/css/category_wide.min.css?1128" rel="stylesheet" type="text/css"/>
<script src="themes/meilele/js/jq.js?1119"></script>
<script src="themes/meilele/js/jquery.json.min.js"></script>
</head>
<body>
<script type="text/javascript">(function(){var screenWidth=window.screen.width;if(screenWidth>=1280){document.body.className='root_body';window.isWideScreen = true;window.LOAD = true;}else{window.LOAD = false;}})()</script>

<?php echo $this->fetch('library/page_header.lbi'); ?> 

<div class="w clearfix mt10">
  <div class="cat_r">
    <div class="position">
      <?php echo $this->fetch('library/ur_here.lbi'); ?> </div>
      <?php echo $this->fetch('library/goods_hot.lbi'); ?>
	<?php if ($this->_var['brands']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?>
    <div class="filter">
      <script type="text/javascript">
				var _fliterShowNum = 3;
				var _fliterShowCount = 4;
			</script>
      <table class="filter_table" id="JS_fliterTable">
	  <?php if ($this->_var['brands']['1']): ?>
        <tr class="list">
          <td class="lable"><?php echo $this->_var['lang']['brand']; ?>：</td>
          <td class="value">
		  <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
		  <a href='<?php echo $this->_var['brand']['url']; ?>' class="<?php if ($this->_var['brand']['selected']): ?>current<?php endif; ?>"><?php echo $this->_var['brand']['brand_name']; ?><span></span></a> 
		  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
		  </td>
        </tr>
      <?php endif; ?>  
	  <?php if ($this->_var['price_grade']['1']): ?>
        <tr class="list">
          <td class="lable"><?php echo $this->_var['lang']['price']; ?>：</td>
          <td class="value">
		  <?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');if (count($_from)):
    foreach ($_from AS $this->_var['grade']):
?>
		  <a href='<?php echo $this->_var['grade']['url']; ?>' class="<?php if ($this->_var['grade']['selected']): ?>current<?php endif; ?>"><?php echo $this->_var['grade']['price_range']; ?><span></span></a> 
		  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
		  </td>
        </tr>
      <?php endif; ?>
	  <?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_64182700_1443528733');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_64182700_1443528733']):
?>
        <tr class="list">
          <td class="lable"><?php echo htmlspecialchars($this->_var['filter_attr_0_64182700_1443528733']['filter_attr_name']); ?>：</td>
          <td class="value">
		  <?php $_from = $this->_var['filter_attr_0_64182700_1443528733']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
		  <a href='<?php echo $this->_var['attr']['url']; ?>' class="<?php if ($this->_var['attr']['selected']): ?>current<?php endif; ?>"><?php echo $this->_var['attr']['attr_value']; ?><span></span></a> 
		  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
		  </td>
        </tr>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

      </table>
    </div>
	<?php endif; ?>
	<?php if ($this->_var['goods_list']): ?>
    <div class="toggle">
      <div class="bar"></div>
      <div class="c">
        <div id="JS_exp_fliter" class="nav_box clearfix">
          <div class="nav nav_left Left"></div>
          <div class="nav nav_content Left" id="JS_exp_fliter_text" data-show-text="更多选项<span class='nav_more_opt'></span>">更多选项<span class="nav_more_opt"></span></div>
          <div class="nav nav_right Left"></div>
        </div>
      </div>
    </div>
	<?php endif; ?>
    <?php echo $this->fetch('library/goods_list.lbi'); ?>
    <?php echo $this->fetch('library/pages2.lbi'); ?>
  </div>
  <div class="cat_l">
    <script type="text/javascript">
			var _currentCat = '0';
		</script>
    <div class="category">
      <div class="cate_title">所有分类</div>
	  <?php $_from = get_categories_tree(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['cat_tree'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_tree']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['cat_tree']['iteration']++;
?>
      <div class="category_title" onclick="toggleCatgory1(<?php echo ($this->_foreach['cat_tree']['iteration'] - 1); ?>);return false;"><a class="" href="<?php echo $this->_var['cat']['url']; ?>" id="JS_category_title_<?php echo ($this->_foreach['cat_tree']['iteration'] - 1); ?>" onclick="return false;"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a><span class="icon2" id="JS_category_icon2_<?php echo ($this->_foreach['cat_tree']['iteration'] - 1); ?>"><?php if ($this->_var['cat']['id'] == $this->_var['top_id']): ?>-<?php else: ?>+<?php endif; ?></span></div>
      <div id="JS_category_body_<?php echo ($this->_foreach['cat_tree']['iteration'] - 1); ?>" class="category_body <?php if ($this->_var['cat']['id'] != $this->_var['top_id']): ?>none<?php endif; ?>">
	  <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['cat_cat_id'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_cat_id']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['cat_cat_id']['iteration']++;
?>	
        <dl class="wofang <?php if ($this->_foreach['cat_cat_id']['iteration'] == 1): ?>first<?php endif; ?>">
          <dt><b class="<?php if ($this->_var['child']['id'] == $this->_var['p_id'] || $this->_var['child']['id'] == $this->_var['category']): ?>current<?php endif; ?>" onclick="toggleCatgory2(this);return false;"><?php if ($this->_var['child']['id'] == $this->_var['p_id'] || $this->_var['child']['id'] == $this->_var['category']): ?>−<?php else: ?>+<?php endif; ?></b><a href="<?php echo $this->_var['child']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['child']['name']); ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></dt>
          <dd class="<?php if ($this->_var['child']['id'] == $this->_var['p_id'] || $this->_var['child']['id'] == $this->_var['category']): ?><?php else: ?>none<?php endif; ?>"> <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?><span><a <?php if ($this->_var['childer']['id'] == $this->_var['category']): ?>class="current"<?php endif; ?> href="<?php if ($this->_var['childer']['id'] == $this->_var['category']): ?><?php echo $this->_var['child']['url']; ?><?php else: ?><?php echo $this->_var['childer']['url']; ?><?php endif; ?>"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a></span><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> </dd>
        </dl>
	   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>	
        
      </div>
	  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      
    </div>
    
    
	<div class="ranking mt10">
  <div class="title_1"><span class="icon"></span><span class="zh">本月热卖排行榜</span></div>
  <div class="rankbody">
  <?php $_from = get_cat_hot_goods_5(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_item');$this->_foreach['best_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['best_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_item']):
        $this->_foreach['best_goods']['iteration']++;
?>
    <div id="JS_left_rank_<?php echo ($this->_foreach['best_goods']['iteration'] - 1); ?>" class="list <?php if ($this->_foreach['best_goods']['iteration'] == 1): ?>first<?php endif; ?> <?php if (($this->_foreach['best_goods']['iteration'] == $this->_foreach['best_goods']['total'])): ?>current<?php endif; ?>" onmouseover="setRankCurrent(<?php echo ($this->_foreach['best_goods']['iteration'] - 1); ?>);">
      <div class="titles"><span class="icon icon1"><?php echo $this->_foreach['best_goods']['iteration']; ?></span><span style="width: auto;" class="name"><a href="<?php echo $this->_var['goods_item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_item']['name']); ?>" target="_blank"><?php echo sub_str($this->_var['goods_item']['short_name'],8); ?></a></span><span class="price yen red"><?php if ($this->_var['goods_item']['promote_price'] != ""): ?><?php echo $this->_var['goods_item']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_item']['shop_price']; ?><?php endif; ?></span></div>
      <div class="extra">
        <div class="img c"><a href="<?php echo $this->_var['goods_item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_item']['name']); ?>" target="_blank"><img data-src="<?php echo $this->_var['goods_item']['thumb']; ?>" src="<?php echo $this->_var['goods_item']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_item']['name']); ?>" height="160" width="160" style="padding:2px; border:solid 1px #e3e3e3; background:#fff"></a></div>
        <div class="info c"> 本站价：<span class="red yen"><?php if ($this->_var['goods_item']['promote_price'] != ""): ?><?php echo $this->_var['goods_item']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_item']['shop_price']; ?><?php endif; ?></span> <span class="gray">销量：</span><span class="orange"><?php $_from = get_goods_ex($GLOBALS[smarty]->_var[goods_item][id]); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_data');$this->_foreach['get_goods_ex'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['get_goods_ex']['total'] > 0):
    foreach ($_from AS $this->_var['goods_data']):
        $this->_foreach['get_goods_ex']['iteration']++;
?><?php if ($this->_foreach['get_goods_ex']['iteration'] == 1): ?><?php echo $this->_var['goods_data']['total_sells']; ?><?php endif; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></span> </div>
      </div>
    </div>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    
  </div>
</div>
<script>
var _currentRankId = 0;
function setRankCurrent(j) {
	if (!j) {
		j = 0;
	}
	if (j == _currentRankId) {
		return;
	}
	var h = $("#JS_left_rank_" + j);
	var i = $("#JS_left_rank_" + _currentRankId);
	if (h && i) {
		var c = h.find("span").eq(1);
		var g = i.find("span").eq(1);
		if (c && g) {
			var b = c.find("a").eq(0);
			var e = g.find("a").eq(0);
			if (b && e) {
				
			}
		}
		h.addClass("current");
		i.removeClass("current");
		_currentRankId = j;
	}
}
</script>

	
    <div class="comment mt10">
      <div class="title_1"><span class="icon"></span><span class="zh">本月新品</span></div>
      <?php $_from = get_cat_new_goods_10(0); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_item');$this->_foreach['best_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['best_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_item']):
        $this->_foreach['best_goods']['iteration']++;
?>
      <div class="list clearfix <?php if ($this->_foreach['best_goods']['iteration'] == 1): ?>first<?php endif; ?><?php if (($this->_foreach['best_goods']['iteration'] == $this->_foreach['best_goods']['total'])): ?>last<?php endif; ?>">
        <div class="Left"><a href="<?php echo $this->_var['goods_item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_item']['name']); ?>" target="_blank"><img width="70" height="70" src="<?php echo $this->_var['goods_item']['thumb']; ?>"  alt="<?php echo htmlspecialchars($this->_var['goods_item']['name']); ?>" /></a></div>
        <div class="Right"> <a href="<?php echo $this->_var['goods_item']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_item']['name']); ?>" target="_blank"><?php echo htmlspecialchars($this->_var['goods_item']['short_name']); ?></a>
          <p class="gray">本站价：<span class="red yen"></span><span class="red JS_show_price_ajax" data-goods_id=""><?php if ($this->_var['goods_item']['promote_price'] != ""): ?><?php echo $this->_var['goods_item']['promote_price']; ?><?php else: ?><?php echo $this->_var['goods_item']['shop_price']; ?><?php endif; ?></span></p>
        </div>
      </div>
     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    </div>
	
	
    <div class="mt10" id="JS_adimg_rand"></div>
  </div>
</div>

<?php echo $this->fetch('library/goods_history.lbi'); ?>
<script type="text/javascript">
var _fixture_url = [];

var _fixture_bbs=[];
</script>
<?php echo $this->fetch('library/page_footer.lbi'); ?>




<script src="themes/meilele/js/back_to_top.min.js?1127"></script>
<script src="themes/meilele/js/category_wide_b.min.js?1127"></script>
<script type="text/javascript">

var CG = CG || {};
	CG.priceUrl = '';
	var _basic_url = '';

	CG.cat_id = 268;
	new TabMouseover('JS_fixture_tag','fixture_show',0);

</script>
<script type="text/javascript">
(function(){
	$('#JS_more_link_g_new').click(function(){
		var item =$(this),span=$('#JS_more'),arrow=$('#JS_more_arrow'),show_div=$('#JS_show_more');
		if( item.data('link') == 'more'){
			item.data('link','reduce');
			span.html('收起');
			arrow[0].className="arrow_up";
			show_div.show();
		}else{
			item.data('link','more');
			span.html('更多');
			arrow[0].className="arrow_down";
			show_div.hide();
		}
	});

var select_div=$('#JS_new_pro_select');
	$('#JS_new_select').mouseenter(function(){
		select_div.show();
	}).mouseleave(function(){
		select_div.hide();
	});
})();

</script>
<script type="text/javascript" src="themes/meilele/js/viewHistory.min.js?0917"></script>



</body>
</html>


