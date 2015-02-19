 <?php 
						
						  $pic_tit_tex1= get_option('mytheme_pic_tit_tex1');
						  $pic_tit_tex2= get_option('mytheme_pic_tit_tex2');
						  $pic_tit_tex3= get_option('mytheme_pic_tit_tex3');
						  $pic_tit_tex4= get_option('mytheme_pic_tit_tex4');
                          $pic_link1= get_option('mytheme_pic_link1');
						   if(get_option('mytheme_pic1') !==""){  $pic1= get_option('mytheme_pic1');}else {$pic1 = 'http://ww1.sinaimg.cn/large/afd49800gw1eeasokf7mpj21jk0h177d.jpg';}
						  $pic2_tit_tex1= get_option('mytheme_pic2_tit_tex1');
						  $pic2_tit_tex2= get_option('mytheme_pic2_tit_tex2');
						  $pic2_tit_tex3= get_option('mytheme_pic2_tit_tex3');
						  $pic2_tit_tex4= get_option('mytheme_pic2_tit_tex4');
                          $pic2_link1= get_option('mytheme_pic2_link1');
						   if(get_option('mytheme_pic2') !==""){ $pic2= get_option('mytheme_pic2');}else {$pic2 = 'http://ww1.sinaimg.cn/large/afd49800gw1eeasokf7mpj21jk0h177d.jpg';}  
						  $pic3_tit_tex1= get_option('mytheme_pic3_tit_tex1');
						  $pic3_tit_tex2= get_option('mytheme_pic3_tit_tex2');
						  $pic3_tit_tex3= get_option('mytheme_pic3_tit_tex3');
						  $pic3_tit_tex4= get_option('mytheme_pic3_tit_tex4');
                          $pic3_link1= get_option('mytheme_pic3_link1');
						   if(get_option('mytheme_pic3') !==""){  $pic3= get_option('mytheme_pic3');}else {$pic3 = 'http://ww1.sinaimg.cn/large/afd49800gw1eeasokf7mpj21jk0h177d.jpg';} 
						  ?>
<div id="box">
	<div class="header-content home">
		<div class="parallax-bg" id="slider-wrap">
		     <div class="slider parallax-bg" id="slider"> 
                  <div class="slider-sections sandbox"> 
		               <section class="first">
                              <div class="pic" style="background:url(<?php echo $pic1;?>) center no-repeat"></div>
                              <div class="text">
                                   <h2 class="box_bitit1">
                                      <span><?php if($pic_tit_tex1!=""){echo $pic_tit_tex1;}else {echo '01';} ?></span> 
                                       <b> <?php if($pic_tit_tex2!=""){echo $pic_tit_tex2;}else {echo '婚纱摄影';} ?></b>
                                   </h2>
                                    <p class="copy">
                                        <b><?php if($pic_tit_tex3!=""){echo $pic_tit_tex3;}else {echo 'WEDDING PHOTOGRAPHY';} ?></b> 
                                         <?php if($pic_tit_tex4!=""){echo $pic_tit_tex4;}else {echo '铺就了徘徊寻觅的记忆';} ?>
                                     </p>
                                   <p class="button">
                                        <a href="<?php if($pic_link1!=""){echo $pic_link1;}else {echo '#';} ?>">MORE ></a>
                                   </p>
                              </div>
                       </section>
                       <section>
                             <div class="pic" style="background:url(<?php echo $pic2;?>) center no-repeat"></div>
                             <div class="text">
                                   <h2 class="box_bitit1">
                                      <span><?php if($pic2_tit_tex1!=""){echo $pic2_tit_tex1;}else {echo '02';} ?></span> 
                                       <b> <?php if($pic2_tit_tex2!=""){echo $pic2_tit_tex2;}else {echo '婚纱摄影';} ?></b>
                                   </h2>
                                    <p class="copy">
                                        <b><?php if($pic2_tit_tex3!=""){echo $pic2_tit_tex3;}else {echo 'WEDDING PHOTOGRAPHY';} ?></b> 
                                         <?php if($pic2_tit_tex4!=""){echo $pic2_tit_tex4;}else {echo '铺就了徘徊寻觅的记忆';} ?>
                                     </p>
                                   <p class="button">
                                        <a href="<?php if($pic2_link1!=""){echo $pic2_link1;}else {echo '#';} ?>">MORE ></a>
                                   </p>
                             </div>
                       </section>
		               <section>
                             <div class="pic" style="background:url(<?php echo $pic3;?>) center no-repeat"></div>
                             <div class="text">
                                   <h2 class="box_bitit1">
                                      <span><?php if($pic3_tit_tex1!=""){echo $pic3_tit_tex1;}else {echo '03';} ?></span> 
                                       <b> <?php if($pic3_tit_tex2!=""){echo $pic3_tit_tex2;}else {echo '婚纱摄影';} ?></b>
                                   </h2>
                                    <p class="copy">
                                        <b><?php if($pic3_tit_tex3!=""){echo $pic3_tit_tex3;}else {echo 'WEDDING PHOTOGRAPHY';} ?></b> 
                                         <?php if($pic3_tit_tex4!=""){echo $pic3_tit_tex4;}else {echo '铺就了徘徊寻觅的记忆';} ?>
                                     </p>
                                   <p class="button">
                                        <a href="<?php if($pic3_link1!=""){echo $pic3_link1;}else {echo '#';} ?>">MORE ></a>
                                   </p>
                              </div>
                       </section>
                   </div>
              </div>
              <a class="slider-prev" onClick="selectTag('tagContent0',this)" href="javascript: void(0)" onFocus=this.blur()>?</a> 
              <a class="slider-next" onClick="selectTag('tagContent0',this)" href="javascript: void(0)" onFocus=this.blur()>?</a>
         </div>
	</div>
</div>
