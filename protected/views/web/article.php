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
            <div class="about-title" align="center">
              <h2><?php echo $data['name'] ?></h2>
            </div>
            <div class="about-info brand-txt2">
                <?php echo htmlspecialchars_decode($data['content']);?>
                <br/><br/>
                <h3 class="brand-tit"><span class="cn-tt">
                <?php if(!empty($prev)){ ?>
                    上一篇：<a href="<?php echo $this->createUrl('article',array('id'=>$prev['id'])); ?>" class="slan"><?php echo $prev['name']; ?></a>
                <?php }else{ ?>
                    上一篇：没有了！
                <?php } ?>
                </span></h3>
                <h3 class="brand-tit"><span class="cn-tt">
                <?php if(!empty($next)){ ?>
                    下一篇：<a href="<?php echo $this->createUrl('article',array('id'=>$next['id'])); ?>" class="slan"><?php echo $next['name']; ?></a>
                <?php }else{ ?>
                    下一篇：没有了！
                <?php } ?>
                </span></h3>

            </div>
          </div>
        </div>
    </div>
</div>

