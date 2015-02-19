<div class="ym1">
 <?php 

                          $pic_link1= get_option('mytheme_pic_link1');
						   if(get_option('mytheme_pic1') !=""){  $pic1= get_option('mytheme_pic1');}else {$pic1 = 'http://ww1.sinaimg.cn/large/afd49800gw1eeasokf7mpj21jk0h177d.jpg';}	 
                          $pic2_link1= get_option('mytheme_pic2_link1');
						   if(get_option('mytheme_pic2') !=""){ $pic2= get_option('mytheme_pic2');}else {$pic2 = 'http://ww1.sinaimg.cn/large/afd49800gw1eeasokf7mpj21jk0h177d.jpg';}  
                          $pic3_link1= get_option('mytheme_pic3_link1');
						   if(get_option('mytheme_pic3') !=""){  $pic3= get_option('mytheme_pic3');}else {$pic3 = 'http://ww1.sinaimg.cn/large/afd49800gw1eeasokf7mpj21jk0h177d.jpg';} 
						  ?>
<div id="box">
	
    <ul>
    
        <li><a style="background-image:url(<?php echo $pic1;?>)"></a></li>
    
    
    </ul>
    
   <a class="next"></a>   <a class="prev"></a> 
</div>
</div>