<?php
$root_path = 'http://' . $_SERVER['HTTP_HOST'] . base_path();
$node = menu_get_object();
$nid = -1;
if ($node) {
    $nid = $node->nid;
}
?>
<div id="page-wrapper" class="fullheight allfont">
    <div id="page" class="fullheight">
        <div id="header-wrapper">
            <div id="top-bar">
                <div id="social-icons">
                    <div class="social-icon"><a href="" ><img src="<?php echo $root_path . drupal_get_path('theme', 'foto') ?>/images/facebook.png" width="20px" height="20px"></a></div>
                    <div class="social-icon"><a href="" ><img src="<?php echo $root_path . drupal_get_path('theme', 'foto') ?>/images/twitter.png" width="20px" height="20px"></a></div>
                    <div class="social-icon"><a href="" ><img src="<?php echo $root_path . drupal_get_path('theme', 'foto') ?>/images/flickr.png" width="20px" height="20px"></a></div>
                </div>
                <div id="sign-in">
                    <div class="sign-back">
                        <div class="sign-letter">登陆</div>
                    </div>
                </div>
            </div>
            <div id="name-and-date" style="height: 100px;">
                <div id="site-name">
                    <div class="name-cn">须 臾 小 筑</div>
                    <div class="name-en">aaron-photograph</div>
                </div>
                <div id="site-date">
                    <div class="date-img"><img src="<?php echo $root_path . drupal_get_path('theme', 'foto') ?>/images/planner.png"></div>
                    <div class="date-number">四月 廿四</div>
                </div>
            </div>
            <div id="menu-and-search">
                <div id="site-menu">
                    <div class="menu-item-back">
                        <div class="menu-item"><a href="/xuyu-foto/">首页</a></div>
                    </div>
                    <div class="menu-item-back">
                        <div class="menu-item"><a href="">关于</a></div>
                    </div>
                    <div class="menu-item-back">
                        <div class="menu-item"><a href="">画廊</a></div>
                    </div>
                    <div class="menu-item-back">
                        <div class="menu-item"><a href="">联系</a></div>
                    </div>
                </div>
                <div id="site-search" style="float: left">
                    <div class="search-back"></div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div id="main-wrapper">
            <?php if ($page['content']['system_main']['nodes'][$nid]['#bundle'] == 'blog'): ?>
                <div id="blog-main" class="transparent-content">
                    <?php print render($page['content']); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="clear"></div>
        <div id="footer-wrapper">
            <div class="transparent-content left-bottom-panel"></div>
            <div class="transparent-content mid-bottom-panel"></div>
            <div class="transparent-content mid-bottom-panel"></div>
            <div class="transparent-content mid-bottom-panel"></div>
            <div class="transparent-content mid-bottom-panel"></div>
            <div class="transparent-content mid-bottom-panel"></div>
            <div class="transparent-content mid-bottom-panel"></div>
            <div class="transparent-content right-bottom-panel"></div>
        </div>
        <div style="clear: both;"></div>
    </div>
</div>
