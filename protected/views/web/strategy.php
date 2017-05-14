<div class="wrapper">
    <div class="crumbs-bar"> <a href="/">首页</a>&nbsp;&gt;&nbsp;<span>张家界旅游攻略</span> </div>
    <!-- about-box -->
    <div class="about-box clearfix">
        <div class="about-left">
            <div class="about-menu">
                <ul class="about-menu-ul">
                    <li class="selected">
                        <a href="<?php echo $this->createUrl('strategy'); ?>">张家界旅游攻略</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="about-cont">
          <div class="about-detail">
            <div class="about-title">
              <h2>张家界旅游攻略</h2>
            </div>
            <div class="about-info">
              <div class="media-list">
                <ul class="media-list-ul">
                <?php if(!empty($data)){ 
                  foreach ($data as $key => $value) {
                ?>
                  <li>
                    <div class="logo-img">
                      <img src="<?php echo "/images/article/".$value['pic'] ?>" width="150" height="80"/></div>
                    <dl class="media-report-box">
                      <dt><a href="<?php echo $this->createUrl('article',array('id'=>$value['id'])); ?>" target="_blank"><?php echo $value['name'];?></a></dt>
                      <dd><p class="link1"><?php echo mb_substr(strip_tags(htmlspecialchars_decode($value['content'])),0,120,'utf-8');?>...<a href="<?php echo $this->createUrl('article',array('id'=>$value['id'])); ?>" target="_blank">[详细内容]</a></p></dd>
                      <dd><span class="cc"><?php echo $value['created'];?></span></dd>
                    </dl>
                  </li>
                <?php }} ?>
		            </ul>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="page-box">
            <div class="page-field">
                <a href='/web/strategy?page=1' >首页</a>&nbsp;
                <a href='/web/strategy?page=<?php echo $page-1; ?>' class='UpPage'>上一页</a>&nbsp;
                <a href='/web/strategy?page=<?php echo $page+1; ?>' class='NextPage'>下一页</a>&nbsp;
                <a href='/web/strategy?page=<?php echo $pages; ?>' >尾页</a> <a>页次：<?php echo $page."/".$pages; ?>页 10条/页</a>
            </div>
    </div>  
</div>

