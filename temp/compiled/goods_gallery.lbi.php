<?php if ($this->_var['pictures']): ?>
<style>
#gallbox .gallery{width:130px; height:404px; float:left;text-align:left;overflow:hidden;}
#gallbox .gallery ul{height:404px;width:130px; padding-bottom:5px;}
#gallbox .gallery li{width:96px; margin:5px 17px 0 17px;}
#gallbox .gallery li img{width:90px;height:90px;cursor:pointer; padding:2px; border: solid 1px #f1f1f1;}
#gallbox .gallery img.onbg{border:1px solid #B46B63;}
#gallbox .gallery img.autobg{border:1px solid #DEDEDE;}
#gallbox span{width:17px; height:8px; margin:5px 56px; background:url(themes/meilele/images/sroll_bg.gif) 0 0 no-repeat;float:left;cursor:pointer;}
#gallbox span.spanR{width:17px; height:8px; margin:5px 56px; background:url(themes/meilele/images/sroll_bg.gif) 0 -9px no-repeat;cursor:pointer;}
#gallbox span:hover{width:17px; height:8px; margin:5px 56px; background:url(themes/meilele/images/sroll_bg.gif) 0 -19px no-repeat;float:left;cursor:pointer;}
#gallbox span.spanR:hover{width:17px; height:8px; margin:5px 56px; background:url(themes/meilele/images/sroll_bg.gif) 0 -28px no-repeat;cursor:pointer;}
#gallbox #demo{float:left;}
</style>
<div class="clearfix" id="gallbox" style="margin-top:10px; float:left; width:130px;">
<span onmouseover="moveLeft()" onmousedown="clickLeft()" onmouseup="moveLeft()" onmouseout="scrollStop()"></span>
<div class="gallery">
<div id="demo">
<div id="demo1" style="float:left">
<ul>
<?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');$this->_foreach['ptab'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ptab']['total'] > 0):
    foreach ($_from AS $this->_var['picture']):
        $this->_foreach['ptab']['iteration']++;
?>
<li>
<a href="<?php echo $this->_var['picture']['img_url']; ?>" rel="zoom-id:Zoomer" rev="<?php echo $this->_var['picture']['img_url']; ?>" title="<?php echo $this->_var['goods']['title']; ?>">
<img src="<?php if ($this->_var['picture']['thumb_url']): ?><?php echo $this->_var['picture']['thumb_url']; ?><?php else: ?><?php echo $this->_var['picture']['img_url']; ?><?php endif; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" <?php if ($this->_foreach['ptab']['iteration'] == '1'): ?>class="onbg" <?php else: ?>class="autobg" <?php endif; ?> onmouseover="chkimgcss(this)"/>
</a>
</li>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul>
</div>
<div id="demo2" style="display:inline;overflow:visible;">
</div>
</div>
</div>
<span onmouseover="moveRight()" onmousedown="clickRight()" onmouseup="moveRight()" onmouseout="scrollStop()" class="spanR"></span>
<script type="text/javascript">
function $gg(A){
return(document.getElementById)?document.getElementById(A):document.all[A]
}
function chkimgcss(C){
var D=document.getElementById("demo");
var B=D.getElementsByTagName("img");
for(var A=0;A<B.length;A++){B[A].className="autobg"}C.className="onbg"}
var boxwidth=150;
var box=$gg("demo");
var obox=$gg("demo1");
var dulbox=$gg("demo2");
obox.style.height=obox.getElementsByTagName("li").length*boxwidth+"px";
dulbox.style.height=obox.getElementsByTagName("li").length*boxwidth+"px";
box.style.height=obox.getElementsByTagName("li").length*boxwidth*3+"px";
var canroll=false;if(obox.getElementsByTagName("li").length>=4){
canroll=true;dulbox.innerHTML=obox.innerHTML}var step=4;temp=1;speed=50;var awidth=obox.offsetWidth;var mData=0;var isStop=1;var dir=1;
function s(){if(!canroll){return}if(dir){if((awidth+mData)>=0){mData=mData-step}else{mData=-step}}else{if(mData>=0){mData=-awidth}else{mData+=step}}obox.style.marginTop=mData+"px";if(isStop){return}setTimeout(s,speed)}
function moveLeft(){var A=isStop;dir=1;speed=50;isStop=0;if(A){setTimeout(s,speed)}}
function moveRight(){var A=isStop;dir=0;speed=50;isStop=0;if(A){setTimeout(s,speed)}}
function scrollStop(){isStop=1}
function clickLeft(){var A=isStop;dir=1;speed=25;isStop=0;if(A){setTimeout(s,speed)}}
function clickRight(){var A=isStop;dir=0;speed=25;isStop=0;if(A){setTimeout(s,speed)}};
</script>
</div>
<?php endif; ?>

