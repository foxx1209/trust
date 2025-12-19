<?php $parent = '../';
  include $parent.'common.php';
  $pagedata = $recruit; ?>
              
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

      <div class="__head container__inner">
        <p class="__no c-lbl__01"></p>
        <h4 class="__title c-ttl__02 c-lang-wrap">
          <span class="__jp">社員インタビュー</span>
          <span class="__en">Staff Interview</span>
        </h4>

        <p class="__ex c-ex__02 c-lang-wrap">
          <span class="__jp">スカイジャパンコーポレーションではシューズを愛し、情熱あふれる社員が年齢、バックグランドを問わず働いています。</span>
          <span class="__en">At SKY Japan Corporation, our shoes-passionate staff work together regardless of age and background.</span>
        </p>
        <p class="__ex c-ex__02 c-lang-wrap">
          <span class="__jp">※所属や業務内容などはインタビュー当時のものです。</span>
          <span class="__en">Affiliations and job descriptions are as of the time of the interview.</span>
        </p>
      </div>

      <div class="__list-wrap width-max">
        <div class="container__inner">
          <div class="__list-sp sp">
            <div class="c-scrollbar">
              <div class="__list">
              <?php
              // $data = $member_list;
              $data = array();
              for($i=0;$i<count($member_list);$i++) {
                if ($member_list[$i]['show'] == 'on') {
                  $data[]=$member_list[$i];
                }
              }

              for($i=0;$i<count($data);$i++) {
              ?>
                <a href="member?id=<?php echo $i + 1; ?>">
                  <div class="__item c-card__01">
                    <img src="<?php echo $parent.'img/'.$data[$i]['listvisual']['filename']; ?>" alt="<?php echo $data[$i]['listvisual']['alt']; ?>">
                    <div>
                      <p class="__ex"><?php echo $data[$i]['catchphrase']; ?></p>
                      <p class="__katagaki"><?php echo $data[$i]['katagaki']; ?></p>
                      <p class="__name"><?php echo $data[$i]['name']; ?></p>
                    </div>
                  </div>
                </a>
                <?php } ?>
              </div>
            </div>
          </div>

          <ul class="__list-pc pc c-flexwrap">
          <?php
            // $data = $member_list;
            for($i=0;$i<count($data);$i++) {
          ?>
            <li>
              <a href="member?id=<?php echo $i + 1; ?>">
                <div class="c-card__01">
                  <img src="<?php echo $parent.'img/'.$data[$i]['listvisual']['filename']; ?>" alt="<?php echo $data[$i]['listvisual']['alt']; ?>">
                  <div>
                    <p class="__ex"><?php echo $data[$i]['catchphrase']; ?></p>
                    <p class="__katagaki"><?php echo $data[$i]['katagaki']; ?></p>
                    <p class="__name"><?php echo $data[$i]['name']; ?></p>
                  </div>
                </div>
              </a>
            </li>
          <?php } ?>
          </ul>
        </div>
      </div>

      <div id="guidelines" class="__guidelines">
        <div class="container__inner">
          <div class="__info">
            <p class="__no c-lbl__01"></p>
            <h4 class="__title c-ttl__02 c-lang-wrap">
              <span class="__jp">募集要項</span>
              <span class="__en">Requirements</span>
            </h4>

            <dl class="c-dl__01">
              <dt>募集職種</td><dd>総合職、専門職、販売職</dd>
              <dt>勤務地</td><dd>◯総合職 / ◯専門職<br>大阪本社、東京支店<br><br>◯販売職<br>直営店<!--および各百貨店--></dd>
              <dt>配属部署</td><dd>◯総合職<span class="__note">※面接を通じて決定します。</span><br>シューズメーカー事業/ブランドマーケティング事業/トレーディング事業/コーポレート部門<br><br>◯専門職<span class="__note">※主に中途採用者を対象とするプロフェッショナル職</span><br>シューズメーカー事業/ブランドマーケティング事業<br><br>◯販売職<br>ブランドマーケティング事業</dd>
              <dt>勤務時間</td><dd>◯総合職 / ◯専門職<br>週休2日制 　9:30~18:30 （実働8時間、休憩1時間）<br><br>◯販売職<br>シフト制 （実働8時間、休憩1時間）</dd>
            </dl>
          </div>
        </div>
      </div>

    </div>

    <?php include $parent.'include/common_entry.php'; ?>

  </main>

  <?php include $parent.'include/common_footer.php'; ?>
  <?php include $parent.'include/common_foot.php'; ?>

</body>
</html>