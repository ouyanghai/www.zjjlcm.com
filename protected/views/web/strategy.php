<div class="wrapper">
    <div class="crumbs-bar"> <a href="/">首页</a>&nbsp;&gt;&nbsp;<span>云南旅游攻略 | 云南旅游攻略</span> </div>
    <!-- about-box -->
    <div class="about-box clearfix">
        <div class="about-left">
            <div class="about-menu">
                <ul class="about-menu-ul">
                    <li class="selected">
                        <a href="/guidelist/?list-6-57-1.html">云南旅游攻略</a>
                    </li>
    			
                    <li class="">
                        <a href="/guidelist/?list-6-48-1.html">昆明旅游攻略</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="about-cont">
          <div class="about-detail">
            <div class="about-title">
              <h2>云南旅游攻略 | 云南旅游攻略</h2>
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
                  <li>
                    <div class="logo-img"><img src="/upfiles/image/20150122/20150122145396269626.jpg" width="150" height="80"/></div>
                    <dl class="media-report-box">
                      <dt><a href="/guideshow/?article-7-20-11.html" target="_blank">2015年云南旅游概括</a></dt>
                      <dd><p class="link1">这块多彩的土地上聚居着彝、白、哈尼、傣、傈僳、纳西、瑶、景颇、布依、水、独龙等25个少数民族。走进云南，你就在不经意间走进了纳西族的东巴文化、大理的白族文化、傣族的贝页文化、彝族的贝玛文化……走进汇集了神话、歌舞、绘画、古乐的民俗风情。...<a href="/guideshow/?article-7-20-11.html" target="_blank">[详细内容]</a></p></dd>
                      <dd><span class="cc">2013/5/19&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;关注度：<font color="#FF3300">6436</font></span></dd>
                    </dl>
                  </li>
		            </ul>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>

