     <div class="zu">
      <?php               $yuyue1=get_option('mytheme_yuyue1') ;
				          $yuyue2=get_option('mytheme_yuyue2') ;
						  $yuyue3=get_option('mytheme_yuyue3') ;
				          $yuyue4=get_option('mytheme_yuyue4') ;
						  $yuyue5=get_option('mytheme_yuyue5') ;
				          $yuyue6=get_option('mytheme_yuyue6') ;
						  $yuyue7=get_option('mytheme_yuyue7') ;
				          $yuyue8=get_option('mytheme_yuyue8') ;
						  $yuyue9=get_option('mytheme_yuyue9') ;
						  $yuyue12=get_option('mytheme_yuyue12') ;
				          $yuyue13=get_option('mytheme_yuyue13') ;
						  $yuyue14=get_option('mytheme_yuyue14') ;
				          $yuyue15=get_option('mytheme_yuyue15') ;
						  $yuyue16=get_option('mytheme_yuyue16') ;
						  $yuyue17=get_option('mytheme_yuyue17') ;
						  $yuyue18=get_option('mytheme_yuyue18') ;
						  $yuyue19=get_option('mytheme_yuyue19') ;
						     
							  $yuyue20=get_option('mytheme_yuyue20') ;
				              $yuyue21=get_option('mytheme_yuyue21') ;
						      $yuyue22=get_option('mytheme_yuyue22') ;
				              $yuyue23=get_option('mytheme_yuyue23') ;
							  $yuyue24=get_option('mytheme_yuyue24') ;
							  $yuyue25=get_option('mytheme_yuyue25') ;
						      $yuyue26=get_option('mytheme_yuyue26') ;
							  $yuyue27=get_option('mytheme_yuyue27') ;
							  $yuyue28=get_option('mytheme_yuyue28') ;
						      $yuyue29=get_option('mytheme_yuyue29') ;
							  $yuyue30=get_option('mytheme_yuyue30') ;
						  $contact_tit9=  get_option('mytheme_contact_tit9');
				          $contact_tit10=  get_option('mytheme_contact_tit10');
				   ?>
          <div class="zu1">
               <div class="zu1_1"><a href="<?php if($yuyue2!=""){echo $yuyue2;}else {echo 'http://www.themepark.com.cn/';} ?>"><?php if($yuyue1!=""){echo $yuyue1;}else {echo '预约请咨询店内客服<br />请在婚期钱3-6个月进行预定';} ?></a></div>
               <div class="zu1_2"><a href="<?php if($yuyue4!=""){echo $yuyue4;}else {echo 'http://www.themepark.com.cn/';} ?>"><?php if($yuyue3!=""){echo $yuyue3;}else {echo 'XX摄影工作室<br />查看我们地址联系方式';} ?></a></div>
               <div class="zu1_3"><a href="<?php if($yuyue6!=""){echo $yuyue6;}else {echo 'http://www.themepark.com.cn/';} ?>"><?php if($yuyue5!=""){echo $yuyue5;}else {echo 'XX高端摄影作品欣赏<br />请点击这里查看';} ?></a></div>
          </div>
          <div class="zu2">
               <div class="zu2_1"><?php if($yuyue7!=""){echo $yuyue7;}else {echo '郑重声明：XXX摄影所展示的作品均来自真实客人定制照片，并经由客户本人同意在XX唯一官方网站行发表。未经允许不得转载或用于任何商业用途，违者必究！';} ?></div>
               <div class="zu2_2"><?php if($yuyue8!=""){echo $yuyue8;}else {echo 'Works on display are from real customers custom photos, and I agree by the customers official website be published. Shall not be reproduced without permission or used for any commercial ';} ?></div>
          </div>
          <div class="zu3"><a id="qq_buff1" href="<?php if($contact_tit9 !=""){ echo'http://wpa.qq.com/msgrd?V=1&Uin='.$contact_tit9.'&Site=themepark售前客服&Menu=yes';}else{ echo "#";} ?>"></a></div>
     </div>
</div>
<div id="footer">
     <div class="f1">
          <div class="f1_1">
               <h2>Share</h2>
               <div class="g1">
                    <div class="g1_1">
                         <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/gz1.jpg" /></a>
                    </div>
                    <div class="g1_1">
                         <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/gz1.jpg" /></a>
                    </div>
                    <div class="g1_1">
                         <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/gz1.jpg" /></a>
                    </div>
                    <div class="g1_1">
                         <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/gz1.jpg" /></a>
                    </div>
                    <div class="g1_1">
                         <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/gz1.jpg" /></a>
                    </div>
                    <div class="g1_1">
                         <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/gz1.jpg" /></a>
                    </div>
                    <div class="g1_1">
                         <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/gz1.jpg" /></a>
                    </div>
               </div>
          </div>
          
          <div class="f1_2">
             
             <?php wp_nav_menu(array( 'theme_location' => 'footer-menu1' ) ); ?>
          </div>
        
          
          <div class="f1_3">
               <h2>  <?php if($yuyue9 =="1") {echo "关注微信"; } else{ echo "Mail subscription";} ?>      </h2>
               <div class="pl">
               <?php if( get_option('mytheme_yuyue10') !=""){$yuyue10= get_option('mytheme_yuyue10');}else{ $yuyue10= '<!--以下是QQ邮件列表订阅嵌入代码--><script> var nId = "64c6b162753ebcf2aa27fa3936f39172661d80092e58250f",nWidth="auto",sColor="dark",sText="填写您的邮件地址，订阅我们的精彩内容：" ;</script>
					   <script src="http://list.qq.com/zh_CN/htmledition/js/qf/page/qfcode.js" charset="gb18030"></script>'; };
					
					 if( get_option('mytheme_yuyue11') !=""){$yuyue11= '<img src="'. get_option('mytheme_yuyue11').'" />';}
					 else{ $yuyue11= '<img src="'. get_bloginfo('template_url').'/images/ph8q4cjj.gif" />'; };
					   
					    ?>
                  
                  <?php if($yuyue9 =="1") {echo $yuyue11; } else{ echo $yuyue10;} ?>      
                       <!--以下是QQ邮件列表订阅嵌入代码-->
					  
                        
                       
                  
                
                    
               </div>
          </div>
          <?php   if(get_option('mytheme_contact_tit17') !=""){  $contact_tit17=  get_option('mytheme_contact_tit17');}else{$contact_tit17="abc@cbc.com"; } 
		          if(get_option('mytheme_contact_tit4') !=""){  $contact_tit4=  get_option('mytheme_contact_tit4');}else{$contact_tit4="400-800-8820"; }
				  if(get_option('mytheme_contact_tit8') !=""){  $contact_tit8=  get_option('mytheme_contact_tit8');}else{$contact_tit8="0731-8888888"; }
		   ?>
          <div class="f1_4">
               <h2>Contact us</h2>
               <div class="g4">
                    <div class="g4_1">09:00AM -- 19:00PM</div>
                    <div class="g4_2"><?php echo $contact_tit17; ?></div>
                    <div class="g4_3"><?php echo $contact_tit4; ?><br /><?php echo $contact_tit8; ?></div>
               </div>
          </div>
          
     </div>
</div>
<div class="f2">
     <div class="f2_1">
          <div class="g5"><img src="<?php if($yuyue14 !=""){ echo $yuyue14;}else{ echo  get_bloginfo('template_url').'/images/logo2.jpg';}?>" /></div>
          <div class="g6 f_bq p">版权所有  &copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?>  <?php echo '  |  <a rel="nofollow" href="http://www.miitbeian.gov.cn/">'.$yuyue13.'</a>   '; ?>  <a class="banquan" target="_blank" href="http://www.themepark.com.cn"> 技术支持： WEB主题公园</a><br />
Copyright © <?php echo date("Y").' | '; echo get_bloginfo('url')?>, |  E-mail:<a href="#"><?php echo $contact_tit17; ?></a>                   <?php echo stripslashes(get_option('mytheme_analytics')); ?></div>
     </div>
     <div class="f2_2">
        
       
        <?php wp_nav_menu(array( 'theme_location' => 'link-menu2' ) ); ?>
       
     </div>
</div>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/s.js"></script>
<?php wp_footer(); ?>
<!-- Don't forget analytics -->
</body>

</html>