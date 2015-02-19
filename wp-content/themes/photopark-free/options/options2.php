<div class="modle">
<b>付费版本采用更炫更出彩的焦点图脚本，动画效果更佳，并且支持自定义输入多种色彩组合的文字，更佳漂亮！<br /><br /><br /><a target="_blank" href="http://www.themepark.com.cn/hysjwordpressqyzt.html"> http://www.themepark.com.cn/hysjwordpressqyzt.html</a>
付费版演示：<br /><br /><br /><a target="_blank" href="http://www.themepark.com.cn/demo/?themedemo=moban10"> http://www.themepark.com.cn/demo/?themedemo=moban10</a></b>

</div>   
        
                 
                    <!-- 焦点图1 -->
                     <div class="xiaot">
                      <b class="bt">焦点图1</b><br />
                       
                   <p>这里可以设置你的首页大焦点图，最多可以设置3张。</p>
                      <div class="yulan2">
                          <?php 
						  $pic1= get_option('mytheme_pic1');
						
                          $pic_link1= get_option('mytheme_pic_link1');
						  ?>
                          <img src="<?php echo $pic1 ?>" />
                     </div>
                     <div class="up" >

                    <p>请上传图片（ 2000 X 613尺寸图片）</p>
                    <input type="text" size="40"  name="pic1" id="pic1" value="<?php echo $pic1 ?>"/>   
                    <input type="button" name="upload_button" value="上传" id="upbottom"/>  
                      </div>
                 
                     <p>请填写链接，如果不填写，则为空连接</p>
                      <input type="text" size="60"  name="pic_link1" id="pic_link1" value="<?php echo $pic_link1; ?>" />
                   </div>     
            
            
            <div class="xiaot">
                      <b class="bt">焦点图2</b><br />
                      <div class="yulan2">
                          <?php 
						  $pic2= get_option('mytheme_pic2');
						
                          $pic2_link1= get_option('mytheme_pic2_link1');
						  ?>
                           <img src="<?php echo $pic2 ?>" />
                     </div>
                     <div class="up" >

                    <p>请上传图片（ 2000 X 613尺寸图片）</p>
                    <input type="text" size="40"  name="pic2" id="pic2" value="<?php echo $pic2 ?>"/>   
                    <input type="button" name="upload_button" value="上传" id="upbottom"/>  
                      </div>
                   
                             
                     <p>请填写链接，如果不填写，则为空连接</p>
                      <input type="text" size="60"  name="pic2_link1" id="pic2_link1" value="<?php echo $pic2_link1; ?>" />
                   </div>     
                   
                   
                   
                   
            <div class="xiaot">
                      <b class="bt">焦点图3</b><br />
                      <div class="yulan2">
                          <?php 
						  $pic3= get_option('mytheme_pic3');
						
                          $pic3_link1= get_option('mytheme_pic3_link1');
						  ?>
                           <img src="<?php echo $pic3 ?>" />
                     </div>
                     <div class="up" >

                    <p>请上传图片（ 2000 X 613尺寸图片）</p>
                    <input type="text" size="40"  name="pic3" id="pic3" value="<?php echo $pic3 ?>"/>   
                    <input type="button" name="upload_button" value="上传" id="upbottom"/>  
                      </div>
                    
                             
                     <p>请填写链接，如果不填写，则为空连接</p>
                      <input type="text" size="60"  name="pic3_link1" id="pic3_link1" value="<?php echo $pic3_link1; ?>" />
                   </div>     
               
               <p><br /> <br />  -----------------------------------------------------------------------------------------------------------------<br /> <br /> </p>
                          
                 
               
               