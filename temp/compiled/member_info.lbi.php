<?php if ($this->_var['user_info']): ?>
<a href="user.php" target="_blank" class="red" style="display:inline-block;text-overflow:ellipsis;white-space:nowrap;overflow:hidden;width:40px; padding:0px 3px"><?php echo $this->_var['user_info']['username']; ?></a> <span id="JS_head_sita_name_haier">欢迎光临！</span><em class="line"></em><a href="user.php?act=logout" class="red" id="JS_login_out" >[退出]</a>
<?php else: ?>
<span><?php echo $this->_var['lang']['welcome']; ?>！</span><em class="line"></em><a href="user.php" title="登录">登录</a><em class="line"></em><a href="user.php?act=register" title="免费注册">注册</a>
<?php endif; ?>
<td><em class="line"></em></td>
<td><div class="help" id="JS_common_head_help"> <a href="javascript:void(0);" class="link">快捷登录</a>
            <div class="hideMenu">
              <ul>      
<a href="user.php?act=oath&type=qq"><img src="themes/meilele/images/qq_logins_24.png"></a>
<a href="user.php?act=oath&type=weibo"><img src="themes/meilele/images/sina_login_logo.gif" width="64"></a>
<a href="user.php?act=oath&type=alipay"><img src="themes/meilele/images/alipay_login_20.png" width="64"></a>
<a href="user.php?act=oath&type=taobao"><img src="themes/meilele/images/taobao_login_logo.gif" width="64"></a>
 </ul>
            </div>
          </div></td>