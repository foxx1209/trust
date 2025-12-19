<?php $parent = '../';
  include $parent.'common.php';
  $pagedata = $business; ?>

<!doctype html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">

<?php include $parent.'include/common_head.php'; ?>

  <title><?php echo $pagedata['title_jp']."｜".$sitename; ?></title>
  <meta name="Description" content="" />
  <meta name="Keywords" content="" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
  <link rel="stylesheet" href="<?php echo $parent.'css/'.$pagedata['link'].'.css?'.$version; ?>">

</head>

<body>

  <?php include $parent.'include/common_header.php'; ?>

  <main id="<?php echo $pagedata['link']; ?>">

    <?php $data = $pagedata; ?>

    <div class="p-sidetitle">
      <p class="c-ttl-side en"><?php echo $data['title']; ?></p>
    </div>

    <div class="p-mv __sub">
      <ul class="__view top-slider">
        <?php
          for($i=0;$i<count($data['mainview']);$i++) {?>
        <li class="top-slider__item"><img src="<?php echo $parent.'img/'.$data['mainview'][$i]['file']; ?>" alt="<?php echo $top['mainview'][$i]['alt']; ?>"></li>
        <?php } ?>
      </ul>
      <h2 class="p-mv__ol c-ttl-mv">
        <div class="c-lang-wrap">
          <span class="__jp">
            <?php echo $data['title_jp']; ?><span class="en"><?php echo $data['title_en']; ?></span>
          </span>
          <span class="__en">
            <?php echo $data['title_en']; ?><span class="en"><?php echo $data['title_jp']; ?></span>
          </span>
        </div>
      </h2>
    </div>

    <div class="p-<?php echo $pagedata['link']; ?>">

      <div class="__sv">
        <div class="__bg"></div>
        <div class="container__inner">
          <div class="__inner c-flexwrap">
            <div class="__l">
              <h3 class="c-ttl-mv en">Good Shoes!</h3>
              <p class="c-ex__03 c-lang-wrap">
                <span class="__jp">当社は、シューズ好きなスタッフが情熱をもってグローバル<br class="pc">ネットワーク、ノウハウを活用しながら多様な“よいシューズ”<br class="pc">作りを通じてお客様に満足を提供しています。</span>
                <span class="__en">At SKY Japan Corporation, our devoted staff are<br class="pc">dedicated to providing our customers with high quality<br class="pc">footwear through our global network and experience.</span>
              </p>
            </div>
            <div class="__r">
              <div class="__wrap"><img src="<?php echo $parent.'img/img-business-sv.jpg'; ?>" alt=""></div>
            </div>
          </div>
        </div>
      </div>

      <div class="__body">
        <div class="__bg"></div>
        <div class="container__inner">

        <?php
          $data = $business_body;
          for($i=0;$i<count($data);$i++) {
            if ($data[$i]['class']=='__business') {?>
          <div id="<?php echo $data[$i]['id']; ?>" class="<?php echo $data[$i]['class']; ?>">
            <p class="c-lbl__01"><?php echo $data[$i]['no']; ?></p>
            <h4 class="c-ttl__02 c-lang-wrap">
              <span class="__jp"><?php echo $data[$i]['title_jp']; ?></span>
              <span class="__en"><?php echo $data[$i]['title_en']; ?></span>
            </h4>
            <div class="__inner c-flexwrap">
              <div class="__l">
                <div><img src="<?php echo $parent.'img/'.$data[$i]['img']['filename']; ?>" alt="<?php echo $data[$i]['img']['alt']; ?>"></div>
              </div>
              <div class="__r">
                <p class="c-ex__03 c-lang-wrap">
                  <span class="__jp"><?php echo $data[$i]['ex']; ?></span>
                  <span class="__en"><?php echo $data[$i]['ex_en']; ?></span>
                </p>
              </div>
            </div>
          </div>
        <?php } else if ($data[$i]['class']=='__brand') {?>
          <div id="<?php echo $data[$i]['id']; ?>" class="<?php echo $data[$i]['class']; ?>">
          <div class="__bg"></div>
          <h5 class="__title en"><?php echo $data[$i]['title']; ?></h5>
          <div class="__inner c-flexwrap c-grid--2">
            <?php
              $data2 = $data[$i]['contents'];
             for($j=0;$j<count($data2);$j++) {?>
            <div class="__l">
              <div class="__image <?php if($data2[$j]['class']!='') {echo $data2[$j]['class'];} ?>"><img src="<?php echo $parent.'img/'.$data2[$j]['filename']; ?>" alt="<?php echo $data2[$j]['alt']; ?>"></div>
              <p class="c-lbl__02 en"><?php echo $data2[$j]['title']; ?></p>
              <p class="c-ex__03 c-lang-wrap">
                <span class="__jp"><?php echo $data2[$j]['ex']; ?></span>
                <span class="__en"><?php echo $data2[$j]['ex_en']; ?></span>
              </p>
              <?php if($data2[$j]['link']!='') {?>
              <a class="c-btn__01 __lang c-lang-wrap" href="<?php echo $data2[$j]['link']; ?>" target="_blank">
                <span class="__jp"><?php echo $data2[$j]['link-caption']; ?></span>
                <span class="__en"><?php echo $data2[$j]['link-caption_en']; ?></span>
              </a>
              <?php } ?>
            </div>
            <?php } ?>
          </div>
        </div>
      <?php } } ?>
    </div>
      </div>
    </div>

    <?php include $parent.'include/common_entry.php'; ?>

  </main>

  <?php include $parent.'include/common_footer.php'; ?>
  <?php include $parent.'include/common_foot.php'; ?>

</body>
</html>