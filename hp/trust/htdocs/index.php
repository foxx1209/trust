<?php $parent = './';
  include 'common.php';
  $pagedata = $top; ?>

<!doctype html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">

<?php include $parent.'include/common_head.php'; ?>

  <title><?php echo $pagedata['title_jp']."｜".$sitename; ?></title>
  <meta name="Description" content="" />
  <meta name="Keywords" content="" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
  <link rel="stylesheet" href="<?php echo $parent.'css/'.$pagedata['link'].'.css?ver=0.0.002'; ?>">

</head>

<body>

  <?php include $parent.'include/common_header.php'; ?>

  <main id="<?php echo $pagedata['link'] ?>">

    <div class="p-mv">
      <ul class="top-slider">
        <?php
          $data = $top;
          for($i=0;$i<count($data['mainview']);$i++) {
          if ($data['mainview'][$i]['meta'] == 'img') { ?>
        <li class="top-slider__item"><img src="<?php echo $parent.'img/'.$data['mainview'][$i]['file']; ?>" alt="<?php echo $data['mainview'][$i]['alt']; ?>"></li>
        <?php } elseif ($data['mainview'][$i]['meta'] == 'movie') { ?>
        <li class="top-slider__item">
          <video src="<?php echo $parent.'movie/'.$data['mainview'][$i]['file']; ?>" autoplay muted loop></video>
        </li>
        <?php }} ?>
      </ul>
    </div>

    <div class="p-mv__ol">
      <h2 class="__title en c-ttl-mv">Good Shoes!</h2>
      <p class="__ex c-ex__01 c-lang-wrap">
        <span class="__jp">当社は、シューズ好きなスタッフが情熱をもってグローバルネットワーク、ノウハウを活用しながら多様な“よいシューズ”作りを通じてお客様に満足を提供しています。</span>
        <span class="__en ta-c">At SKYJAPAN CORPORATION, our devoted staff are<br>dedicated to providing our customers with high quality<br>footwear through our global network and experience.</span>
      </p>
    </div>

    <section class="p-sv">
      <?php
        $data = $top_body_01;
        for($i=0;$i<count($data);$i++) { ?>
      <div class="__contents <?php echo $data[$i]['class']; ?>">
        <div class="container__inner">
          <h2 class="__title c-ttl__01 en c-lang-wrap"><?php echo $data[$i]['title']; ?>
            <span class="__jp"><?php echo $data[$i]['title_jp']; ?></span>
            <span class="__en"><?php echo $data[$i]['title_en']; ?></span>
          </h2>
          <?php if($data[$i]['exp']!='') {?>
          <div class="__ex c-ex__02">
            <div class="c-lang-wrap">
              <span class="__jp"><?php echo $data[$i]['exp']; ?></span>
              <span class="__en"><?php echo $data[$i]['exp_en']; ?></span>
            </div>
          </div>
          <?php } ?>

          <?php if($data[$i]['img']['class']!='-1') {?>
          <div class="__image <?php echo $data[$i]['img']['class']; ?>">

            <?php if($data[$i]['img']['class']=='__link') {
              $data2 = $data[$i]['img']['file'];
              for($j=0;$j<count($data2);$j++) {?>
            <div>
              <a class="__lang" href="<?php echo $data2[$j]['link'] ?>">
                <img src="<?php echo $parent.'img/'.$data2[$j]['filename']; ?>" alt="<?php echo $data2[$j]['alt']; ?>">
                <p class="c-lang-wrap">
                  <span class="__jp"><span class="c-btn__top-recruit"><?php echo $data2[$j]['link_caption'] ?></span></span>
                  <span class="__en"><span class="c-btn__top-recruit"><?php echo $data2[$j]['link_caption_en'] ?></span></span>
                </p>
              </a>
            </div>
            <?php } } else {
              $data2 = $data[$i]['img']['file'];
              for($j=0;$j<count($data2);$j++) {?>
            <div><img src="<?php echo $parent.'img/'.$data2[$j]['filename']; ?>" alt="<?php echo $data2[$j]['alt']; ?>"></div>
            <?php } }?>


          </div>
          <?php } ?>

          <?php if(count($data[$i]['menu'])>0) {?>
          <ul class="__list">
            <?php
            $data2 = $data[$i]['menu'];
            for($j=0;$j<count($data2);$j++) {?>
            <li>
              <a class="c-btn__01 __lang" href="<?php echo $data2[$j]['link']; ?>">
                <p class="c-lang-wrap">
                  <span class="__jp"><?php echo $data2[$j]['title']; ?></span>
                  <span class="__en"><?php echo $data2[$j]['title_en']; ?></span>
                </p>
              </a>
            </li>
            <?php } ?>
          </ul>
          <?php } ?>

          <?php
            $data2 = $data[$i]['background'];
            for($j=0;$j<count($data2);$j++) {?>
            <div class="__bg <?php echo $data2[$j]['class']; ?>"></div>
          <?php } ?>

        </div>
      </div>
      <?php } ?>
    </section>

    <?php include $parent.'include/common_entry.php'; ?>

  </main>

  <?php include $parent.'include/common_footer.php'; ?>
  <?php include $parent.'include/common_foot.php'; ?>

</body>
</html>