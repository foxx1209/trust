  <!-- Navigation -->
  <nav id="g-nav">
    <!-- <div class="container"> -->
      <div class="g-nav__body">
        <h1 class="header-logo">
          <a id="to-top" class="__lang" href="<?php echo $uri; ?>">
            <img class="islogowhite" src="<?php echo $parent.'img/logo.svg'; ?>" alt="スカイジャパンコーポレーション株式会社">
            <img class="islogoblack" src="<?php echo $parent.'img/logo.svg'; ?>" alt="スカイジャパンコーポレーション株式会社">
          </a>
        </h1>

        <div class="g-nav__nav">
          <ul>
            <?php for($i=0;$i<count($gnav_navs);$i++) {
              if ($gnav_navs[$i]['class']=='__lang') {?>
            <li class="item <?php if($gnav_navs[$i]['class']!='') { echo $gnav_navs[$i]['class']; } ?>">
              <div class="c-lang-sel-wrap">
                <span class="c-lbl__04">
                  <span>Lang:</span>
                  <!-- <span class="__en">Lang:</span> -->
                </span>
                <ul class="c-ul__01">
                  <li class="choice-jp is-active"><span class="__jp">日本語</span><span class="__en">日本語</span></li>
                  <li class="choice-en"><span class="__jp">English</span><span class="__en">English</span></li>
                </ul>
                <span class="__click">▼</span>
              </div>
            </li>
            <?php } else if ($gnav_navs[$i]['class']=='__nothing') {
            } else {?>
            <li class="item <?php if($gnav_navs[$i]['class']!='') { echo $gnav_navs[$i]['class']; } ?>">
              <a class="nav-link __lang" href="<?php echo $parent.$gnav_navs[$i]['link']; ?>">
                <div class="c-lang-wrap">
                  <span class="__jp"><?php echo $gnav_navs[$i]['title_jp'] ?></span>
                  <span class="__en"><?php echo $gnav_navs[$i]['title'] ?></span>
                </div>
              </a>
            </li>
            <?php } } ?>
          </ul>
        </div>

        <div class="hamburger-menu">
          <div class="hamburger-menu__body">
            <span></span>
            <span></span>
            <span></span>
            <!-- <span class="__word en">MENU</span> -->
          </div>
        </div>
      </div>
    <!-- </div> -->
  </nav>
