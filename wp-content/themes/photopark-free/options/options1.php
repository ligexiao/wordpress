   
                <div class="up">
                 
                     
                    <b class="bt">ICO图标上传</b>
                    <input type="text" size="80"  name="ico" id="ico" value="<?php echo get_option('mytheme_ico'); ?>"/>   
                    <input type="button" name="upload_button" value="上传" id="upbottom"/>   
                    <p><a href="http://www.themepark.com.cn/icotpssmrhzzicowj.html" target="_blank">ico是什么？ico图片制作教程</a></p>
                </div>       
                
                
                
				<div class="up">
                  <b class="bt">LOGO的图片地址</b>
                     <div class="yulan">
                  <?php if (get_option('mytheme_logo')!=""): ?>
                    <img title="logo预览" src="<?php echo get_option('mytheme_logo'); ?>"alt="logo预览" /> 
                 <?php else : ?>
                    <img title="上传图片，这里可以预览" src="<?php bloginfo('template_url'); ?>/images/xuanxiang/yulan2.gif"alt="上传图片，这里可以预览"/>
                    <?php endif; ?>  
                    
                     </div>
                    <input type="text" size="80"  name="logo" id="logo" value="<?php echo get_option('mytheme_logo'); ?>"/>   
                    <input type="button" name="upload_button" value="上传" id="upbottom"/>   
                    <p>请上传logo图片，图片格式为PNG,或者带有深色底色的jpg和gif均可（ 高度为100px，宽度自定，宽度请勿上传太大，以防止导航位置不够。）</p>
                </div>    
                
<div class="modle">
<b>提示，付费版本具有更多的首页模块，可以轻松的把更多的信息展示在首页上让用户查看，seo效果更好，付费版本详细介绍地址：<br /><br /><br /><a target="_blank" href="http://www.themepark.com.cn/hysjwordpressqyzt.html"> http://www.themepark.com.cn/hysjwordpressqyzt.html</a>
付费版演示：<br /><br /><br /><a target="_blank" href="http://www.themepark.com.cn/demo/?themedemo=moban10"> http://www.themepark.com.cn/demo/?themedemo=moban10</a></b>

</div>   
                	
                
            
              <div class="xiaot">
                      <b class="bt">调用数据选项</b><br />
                      <p>你建立了一些分类和页面，想要他们调用在首页上，程序傻傻分不清楚，所以你要手动选择一下，在选择之前，一定要记得建立好分类和页面哦！<strong>小提示，有的模块只有指定了分类他们才会显示，如果不指定，他们是不会显示的，所以你可以自由的选择哪些模版需要在首页显示，哪些模块不需要在首页显示！</strong>你可以点击这里对照演示主题的样式：<a  target="_blank" href="http://www.themepark.com.cn/demo/?themedemo=moban10">首页演示</a></p>
                    
                      </p>
                        </div>
                     
                      
  
            
      <div class="xiaot">
                     <b class="bt">最新案例/产品</b><br />
                       <img  src="<?php bloginfo('template_url'); ?>/images/xuanxiang/themepark-help22.gif" />
                    <p>最新案例/产品是一个分类，建立好这个分类目录，在这里告诉程序是哪一个分类吧！(上图的指示告诉你在首页调用的位置)</p>
              <label  for="case1">请选择分类目录:</label>
                  <select name="case1" id="case1">
	 <option value=''>请选择</option>
		<?php 
		  $categorys = get_categories(array('hide_empty' => 0));
		 $case1= get_option('mytheme_case1');
		foreach( $categorys AS $category ) { 
		 $category_id= $category->term_id;
		 $category_name=$category->cat_name;
		?>
       
			<option 
				value='<?php echo  $category_id; ?>'
				<?php
					if (  $case1== $category_id ) {
						echo "selected='selected'";
					}
				?>><?php echo  $category_name; ?></option>
		<?php } ?>
	</select>
    <div class="up">
     <label  for="case1">这里你可以上传一张图片替代默认的，图片位置在上方红色框中的位置，图片建议上传PNG背景透明的(尺寸：174*214)。</label> 
      <input type="text" size="80"  name="case1_pic" id="case1_pic" value="<?php echo get_option('mytheme_case1_pic'); ?>"/>   
      <input type="button" name="upload_button" value="上传" id="upbottom"/>   
     </div>       
                      </div>     
                      
                      
                           
            
            
                     
            
            
    
                 <div class="xiaot">
                     <b class="bt">新闻目录</b><br />
                        <img  src="<?php bloginfo('template_url'); ?>/images/xuanxiang/themepark-he2221lp.jpg" />
                    <p>新闻目录是一个分类，建立好经销商通知，在这里告诉程序是哪一个分类吧！</p>
              <label  for="news1">请选择分类目录:</label>
                  <select name="news1" id="news1">
	 <option value=''>请选择</option>
		<?php 
		 $categorys = get_categories(array('hide_empty' => 0));
		 $news1= get_option('mytheme_news1');
		foreach( $categorys AS $category ) { 
		 $category_id= $category->term_id;
		 $category_name=$category->cat_name;
		?>
       
			<option 
				value='<?php echo  $category_id; ?>'
				<?php
					if (  $news1== $category_id ) {
						echo "selected='selected'";
					}
				?>><?php echo  $category_name; ?></option>
		<?php } ?>
	</select>
    
     <p>模块标题，这个模块有着红色黑色相间的标题，你可以在下面修改这标题，否则他们会显示默认的“最新行业资讯”</p>
           <?php   $news1_bt_b1=get_option('mytheme_news1_bt_b1');
		           $news1_bt_a=get_option('mytheme_news1_bt_a');
				   $news1_bt_p=get_option('mytheme_news1_bt_p');
		    ?>
           
           <label  for="case2_bt">"中文："</label>        
           <input type="text" size="20"  name="news1_bt_b1" id="news1_bt_b1" value="<?php if($news1_bt_b1!=""){echo $news1_bt_b1;}else {echo '最新';} ?>"/> 
           <input type="text" size="20"  name="news1_bt_a" id="news1_bt_a" value="<?php if($news1_bt_a!=""){echo $news1_bt_a;}else {echo '行业动态';} ?>"/>  
         
          <p>
           <label  for="case2_bt">"英文："</label>  
           <input type="text" size="60"  name="news1_bt_p" id="news1_bt_p" value="<?php if($news1_bt_p!=""){echo $news1_bt_p;}else {echo 'INDUSTRY NEWS';} ?>"/  /> 
           </p> 
                     
                      </div>      
                      
           
                                     
           
                 <div class="xiaot">
                     <b class="bt">新闻目录2</b><br />
                    <p>新闻目录2是一个分类，建立好经销商通知，在这里告诉程序是哪一个分类吧！</p>
              <label  for="news2">请选择分类目录:</label>
                  <select name="news2" id="news2">
	 <option value=''>请选择</option>
		<?php 
		 $categorys = get_categories(array('hide_empty' => 0));
		 $news2= get_option('mytheme_news2');
		foreach( $categorys AS $category ) { 
		 $category_id= $category->term_id;
		 $category_name=$category->cat_name;
		?>
       
			<option 
				value='<?php echo  $category_id; ?>'
				<?php
					if (  $news2== $category_id ) {
						echo "selected='selected'";
					}
				?>><?php echo  $category_name; ?></option>
		<?php } ?>
	</select>
    
     <p>模块标题，这个模块有着红色黑色相间的标题，你可以在下面修改这标题，否则他们会显示默认的“最新行业资讯”</p>
           <?php   $news2_bt_b1=get_option('mytheme_news2_bt_b1');
		           $news2_bt_a=get_option('mytheme_news2_bt_a'); 
				   $news2_bt_p=get_option('mytheme_news2_bt_p');
		    ?>
           
           <label  for="case2_bt">"中文："</label>        
           <input type="text" size="20"  name="news2_bt_b1" id="news2_bt_b1" value="<?php if($news2_bt_b1!=""){echo $news2_bt_b1;}else {echo '最新';} ?>"/> 
           <input type="text" size="20"  name="news2_bt_a" id="news2_bt_a" value="<?php if($news2_bt_a!=""){echo $news2_bt_a;}else {echo '公司动态';} ?>"/>  
         
          <p>
           <label  for="case2_bt">"英文："</label>  
           <input type="text" size="60"  name="news2_bt_p" id="news2_bt_p" value="<?php if($news2_bt_p!=""){echo $news2_bt_p;}else {echo 'COMPANY NEWS';} ?>"/  /> 
           </p> 
                     
                      </div>      
                                                     
            
            
            
            
           
                   
                     