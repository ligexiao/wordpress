<div class="modle">
<b>付费版本的底部和免费版也是不同的，详情请看演示。<br /><br /><br /><a target="_blank" href="http://www.themepark.com.cn/hysjwordpressqyzt.html"> http://www.themepark.com.cn/hysjwordpressqyzt.html</a>
付费版演示：<br /><br /><br /><a target="_blank" href="http://www.themepark.com.cn/demo/?themedemo=moban10"> http://www.themepark.com.cn/demo/?themedemo=moban10</a></b>

</div>   

                   <div class="xiaot">
                    <b class="bt">页脚设置</b>
                    <p>这款主题的页脚有相当多的文字、链接和功能需要你设置成为你自己的</p>
                    
                    </div>
                  
                   
                   
                   <div class="xiaot">
                    <b class="bt">灰色背景的页脚设置（如下图区域）</b>
                    <p>
                   <img src="<?php bloginfo('template_url'); ?>/images/xuanxiang/40319112048.gif" width="300" height="48" /></p>
                   <?php $yuyue1=get_option('mytheme_yuyue1') ;
				          $yuyue2=get_option('mytheme_yuyue2') ;
						  $yuyue3=get_option('mytheme_yuyue3') ;
				          $yuyue4=get_option('mytheme_yuyue4') ;
						  $yuyue5=get_option('mytheme_yuyue5') ;
				          $yuyue6=get_option('mytheme_yuyue6') ;
						  $yuyue7=get_option('mytheme_yuyue7') ;
				          $yuyue8=get_option('mytheme_yuyue8') ;
						  $yuyue9=get_option('mytheme_yuyue9') ;
						  $yuyue10=get_option('mytheme_yuyue10') ;
						  $yuyue11=get_option('mytheme_yuyue11') ;
						  
				   ?>
                    <p>下面的文字个链接设定，请对照网站底部的模块文字进行修改</p>
                    <p>
                     <label  for="yuyue">文字1</label>        
                       <input type="text" size="92"  name="yuyue1" id="yuyue1" value="<?php if($yuyue1!=""){echo $yuyue1;}else {echo '预约请咨询店内客服<br />请在婚期钱3-6个月进行预定';} ?>"/>
                         <label  for="case2_bt">链接1</label>  
                        <input type="text" size="92"  name="yuyue2" id="yuyue2" value="<?php if($yuyue2!=""){echo $yuyue2;}else {echo 'http://www.themepark.com.cn/';} ?>"/> 
                    </p>
                    
                      <p>
                     <label  for="yuyue">文字2</label>        
                       <input type="text" size="92"  name="yuyue3" id="yuyue3" value="<?php if($yuyue3!=""){echo $yuyue3;}else {echo 'XX摄影工作室<br />查看我们地址联系方式';} ?>"/>
                         <label  for="case2_bt">链接2</label>  
                        <input type="text" size="92"  name="yuyue4" id="yuyue4" value="<?php if($yuyue4!=""){echo $yuyue4;}else {echo 'http://www.themepark.com.cn/';} ?>"/> 
                    </p>
                    
                     <p>
                     <label  for="yuyue">文字3</label>        
                       <input type="text" size="92"  name="yuyue5" id="yuyue5" value="<?php if($yuyue5!=""){echo $yuyue5;}else {echo 'XX高端摄影作品欣赏<br />请点击这里查看';} ?>"/>
                         <label  for="case2_bt">链接3</label>  
                        <input type="text" size="92"  name="yuyue6" id="yuyue6" value="<?php if($yuyue6!=""){echo $yuyue6;}else {echo 'http://www.themepark.com.cn/';} ?>"/> 
                    </p>
                    
                      <p>
                     <label  for="yuyue">声明</label>        
                      <textarea name="yuyue7" cols="85" rows="3" id="yuyue7"><?php if($yuyue7!=""){echo $yuyue7;}else {echo '郑重声明：XXX摄影所展示的作品均来自真实客人定制照片，并经由客户本人同意在XX唯一官方网站行发表。未经允许不得转载或用于任何商业用途，违者必究！';} ?></textarea>   
                         <textarea name="yuyue8" cols="85" rows="3" id="yuyue8"><?php if($yuyue8!=""){echo $yuyue8;}else {echo 'Works on display are from real customers custom photos, and I agree by the customers official website be published. Shall not be reproduced without permission or used for any commercial ';} ?></textarea>   
                        
                    </p>
                    <strong>注意：QQ客服请在“页面/分类”中的“联系我们”中设置，灰色背景下的QQ客服将调用第一个qq客服的qq号码</strong>
                    
                   </div>
                   
                   
                     <div class="xiaot">
                    <b class="bt">黑色背景的页脚设置</b>
                     </div>
                     
                     <div class="xiaot">
                       <b class="bt">邮件订阅或者二维码</b>
                       <p>这里你可以选择是使用QQ邮件订阅 还是放置一张二维码的图片，提供微信关注服务。位置在底部的Mail subscription 大标题下的模块内容。</p>
                        <p>
                         <label  for="case1">请选择需要放置的内容:</label>
                
                         <select name="yuyue9" id="yuyue9">
	                      <option value='' <?php if ($yuyue9="") {echo "selected='selected'";}?>>QQ邮件订阅</option>
                         <option value='1' <?php if ($yuyue9=="1") {echo "selected='selected'";}?>>二维码图片</option>
	                  </select>
                      </p>
                     <p>
                       <label  for="yuyue">QQ邮件订阅代码</label>        
                      <textarea name="yuyue10" cols="85" rows="3" id="yuyue10"><?php if($yuyue10!=""){echo $yuyue10;}else {echo ' ';} ?></textarea>   
                     <a target="_blank" href="http://www.themepark.com.cn/ryhyjdyndwordpresswz.html">如何获得QQ邮件订阅代码？</a>
                      </p>
                      
                      <div class="up">
                    <label  for="yuyue">二维码图片上传</label>  
                    <input type="text" size="80"  name="yuyue11" id="yuyue11" value="<?php echo get_option('mytheme_yuyue11'); ?>"/>   
                    <input type="button" name="upload_button" value="上传" id="upbottom"/>   
                    <p>请上传一张二维码图片 ，尺寸为“180*180” 正方形</p>
                     </div>    
                 
                      
                      
                     </div>
                       <?php  $yuyue12=get_option('mytheme_yuyue12') ;
				              $yuyue13=get_option('mytheme_yuyue13') ;
						      $yuyue14=get_option('mytheme_yuyue14') ;
				            
						    
				   ?>
                     
                      <div class="xiaot">
                       <b class="bt">页脚其他文字和按钮信息设置</b>
                       <p>对照你的网站页脚，修改一些文字、链接和图片</p>
                        <p>
                         <label  for="case1">显示WEB主题公园的技术支持:</label>
                         <select name="yuyue12" id="yuyue12">
	                      <option value='' <?php if ($yuyue12="") {echo "selected='selected'";}?>>显示</option>
                         <option value='1' <?php if ($yuyue12=="1") {echo "selected='selected'";}?>>不显示</option>
	                  </select><br />
                      <a>WEB主题公园的主题下方会有一个“技术支持：WEB主题公园”的信息，如果你给予了保留，那么我们将会非常感激！</a>
                      </p>
                    <p>
                      <label  for="yuyue">ICP备案号（如果有的话）</label>        
                       <input type="text" size="92"  name="yuyue13" id="yuyue13" value="<?php echo $yuyue13; ?>"/>
                    </p>
                      
                      <div class="up">
                    <label  for="yuyue">底部LOGO图片</label>  
                    <input type="text" size="80"  name="yuyue14" id="yuyue14" value="<?php echo get_option('mytheme_yuyue14'); ?>"/>   
                    <input type="button" name="upload_button" value="上传" id="upbottom"/>   
                    <p>底部的logo图片，尺寸为：350*60</p>
                     </div>    
                  
               
                      
                      
                     </div>
                    
                    
               