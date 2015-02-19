<div class="modle">
<b>付费版本具有超多列表、内页和页面模板可以提供给你选择，并且每一个模板都非常独特。<br /><br /><br /><a target="_blank" href="http://www.themepark.com.cn/hysjwordpressqyzt.html"> http://www.themepark.com.cn/hysjwordpressqyzt.html</a>
付费版演示：<br /><br /><br /><a target="_blank" href="http://www.themepark.com.cn/demo/?themedemo=moban10"> http://www.themepark.com.cn/demo/?themedemo=moban10</a></b>

</div>   

         
             <div class="xiaot">
             <b class="bt"><strong>分类模版</strong>的一些设置</b>
              <p>每个分类模版都有一些背景图片和标题图片等信息，这里你可以自定义他们，让你的网站与众不同，你可以参考演示主题中的一些页面和分类模版的样式，对照他们，然后将你自己的图片和文字替换掉，让你的网站独具自己的特色！</p>
              </div>
              
             
             <div class="xiaot">
                      <b class="bt">联系我们页面模版</b>
                        <p>你可以点击这里查看演示中的联系我们:<a target="_blank" href="http://www.themepark.com.cn/demo/lian_xi_fang_shi?themedemo=moban10">联系我们页面模版演示</a></p>
                      <img src="<?php bloginfo('template_url'); ?>/images/lxwm.jpg" width="400" height="90" />
                    <p>替换这张图片，你可以上传大图片：1920*410（全屏显示）</p>
                    <div class="up">
                    <input type="text" size="80"  name="contact_bag" id="contact_bag" value="<?php echo get_option('mytheme_contact_bag'); ?>"/>   
                    <input type="button" name="upload_button" value="上传" id="upbottom"/>   
                  
                   
                  </div> 
                  
                          <?php  
						         $contact_tit11=  get_option('mytheme_contact_tit11');
						         $contact_tit12=  get_option('mytheme_contact_tit12');
						         $contact_tit13=  get_option('mytheme_contact_tit13');
						         $contact_tit14=  get_option('mytheme_contact_tit14');
								 $contact_tit15=  get_option('mytheme_contact_tit15');
								 $contact_tit16=  get_option('mytheme_contact_tit16');
								 $contact_tit17=  get_option('mytheme_contact_tit17');
							
				     ?>
                
                    
                    <p>
                     <label  for="contact_tit">QQ客服（填写QQ号码即可）：</label>        
                       <input type="text" size="10"  name="contact_tit9" id="contact_tit9" value="<?php if($contact_tit9!=""){echo $contact_tit9;}else {echo '';} ?>"/> 
                       <input type="text" size="10"  name="contact_tit10" id="contact_tit10" value="<?php if($contact_tit10!=""){echo $contact_tit10;}else {echo '';} ?>"/>  
                       <input type="text" size="10"  name="contact_tit11" id="contact_tit11" value="<?php if($contact_tit11!=""){echo $contact_tit11;}else {echo '';} ?>"/>   
                       <input type="text" size="10"  name="contact_tit12" id="contact_tit12" value="<?php if($contact_tit12!=""){echo $contact_tit12;}else {echo '';} ?>"/><br />
                       <input type="text" size="10"  name="contact_tit13" id="contact_tit13" value="<?php if($contact_tit13!=""){echo $contact_tit13;}else {echo '';} ?>"/> 
                       <input type="text" size="10"  name="contact_tit14" id="contact_tit14" value="<?php if($contact_tit14!=""){echo $contact_tit14;}else {echo '';} ?>"/> 
                    </p>
                    
                    <p>
                      <label  for="contact2_bt"> 企业QQ（如果有的话）：</label>        
                       <input type="text" size="56"  name="contact_tit15" id="contact_tit15" value="<?php if($contact_tit15!=""){echo $contact_tit15;}else {echo '';} ?>"/> 
                    
                    </p>
                    
                     <p>
                      <label  for="contact2_bt">联系地址</label>        
                       <input type="text" size="90"  name="contact_tit16" id="contact_tit16" value="<?php if($contact_tit16!=""){echo $contact_tit16;}else {echo '请输入联系地址';} ?>"/> 
                       
                       <label  for="contact2_bt">电子邮箱</label>        
                       <input type="text" size="66"  name="contact_tit17" id="contact_tit17" value="<?php if($contact_tit17!=""){echo $contact_tit17;}else {echo '请输入电子邮箱';} ?>"/> 

                    </p>
                    
                
               </div>
     
     
  