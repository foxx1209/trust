<?php $parent = '../';
  include $parent.'common.php';
  $pagedata = $company; ?>
              
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
          $data = $pagedata;
          for($i=0;$i<count($data['mainview']);$i++) {?>
        <li class="top-slider__item"><img src="<?php echo $parent.'img/'.$data['mainview'][$i]['file']; ?>" alt="<?php echo $top['mainview'][$i]['alt']; ?>"></li>
        <?php } ?>
      </ul>
      <h2 class="p-mv__ol c-ttl-mv">
        <!-- <?php //echo $data['title_jp']; ?><span class="en"><?php //echo $data['title_en']; ?></span> -->

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
      <!-- <div class="__bg"></div> -->

      <div class="container__inner __wrap">

        <aside>
          <ul class="c-dl__03">
            <li class="__01">
              <a class="is-active" href="#__01">
                <p class="c-lang-wrap">
                  <span class="__jp"">企業理念</span>
                  <span class="__en"">CORPORATE PHILOSOPHY</span>
                </p>
              </a>
            </li>
            <li class="__02">
              <a href="#__02">
                <p class="c-lang-wrap">
                  <span class="__jp"">代表挨拶</span>
                  <span class="__en"">MESSAGE from our CEO</span>
                </p>
              </a>
            </li>
            <li class="__03">
              <a href="#__03">
                <p class="c-lang-wrap">
                  <span class="__jp"">会社概要</span>
                  <span class="__en"">COMPANY PROFILE</span>
                </p>
              </a>
            </li>
            <li class="__04">
              <a href="#__04">
                <p class="c-lang-wrap">
                  <span class="__jp"">沿革</span>
                  <span class="__en"">HISTORY</span>
                </p>
              </a>
            </li>
          </ul>
        </aside>

        <div class="__body">
          <!-- <div class="__bg"></div> -->

          <div id="__01" class="__company">
            <p class="__no c-lbl__01"></p>
            <h4 class="__title c-ttl__02 c-lang-wrap">
              <span class="__jp">企業理念</span>
              <span class="__en">CORPORATE PHILOSOPHY</span>
            </h4>

            <ul class="__rinen en">
              <li><p class="c-lbl__03"><span>Ｇ４</span>Good for Staff, Supplier, Customer and The Future</p></li>
              <li><p class="c-lbl__03"><span>＋１</span>Good Shoes</p></li>
            </ul>

            <p class="__ex c-ex__02 c-lang-wrap">
              <span class="__jp">スカイジャパンコーポレーションはシューズカンパニーとしてG4＋1を企業理念に掲げます。<br><br>社員及びその家族、取引先、顧客、そして将来に亘ってすべてのステークホルダーの幸福を追求する為、優れた商品供給を通じて顧客満足の獲得及び企業の永続的発展を目指します。</span>
              <span class="__en">SKY Japan Corporation declares G4+1 as its corporate philosophy.<br>In order to provide happiness for all its parties involved, including employees and their families, business partners, customers, and the future, we aim to provide customer satisfaction and sustain continuous company development through our supply of excellent products.</span>
            </p>

            <hr class="c-hr__01 pc">

            <div class="__image">
              <img class="pc" src="<?php echo $parent.'img/'.'img-rinen-pc.png'; ?>" alt="企業理念">
              <img class="sp" src="<?php echo $parent.'img/'.'img-rinen-sp.png'; ?>" alt="企業理念">
            </div>
          </div>

          <div id="__02" class="__company">
            <p class="__no c-lbl__01"></p>
            <h4 class="__title c-ttl__02 c-lang-wrap">
              <span class="__jp">代表挨拶</span>
              <span class="__en">MESSAGE from our CEO</span>
            </h4>

            <div class="__inner c-flexwrap">
              <div class="__l">
                <p class="c-ex__02 c-lang-wrap">
                  <span class="__jp">創業以来シューズメーカーとしての様々なアウトドア、アスレチックブランドシューズの企画、生産のサポート、欧米ブランドの総代理店としての国内展開、グローバルネットワークを活用したトレーディング事業を通じて国内外のお客様へ“よいシューズ”をお届けして参りました。<br><br>今後も企業理念であるG4＋1を遵守しお客様に“よいシューズ” をお届けすることでシューズを通じた安定的な成長を実現します。</span>
                  <span class="__en">Since our foundation, we have devoted to providing fine shoes to our customers at home and abroad, through outdoor/athletic shoes development, production support, domestic distribution of exclusive US and European brands, and trading.<br>With our G4+1 philosophy in mind, we continue to grow through providing best quality footwear to our customers.</span>
                </p>
              </div>
              <div class="__r">
                <div class="__image"><img src="<?php echo $parent.'img/'.'img-president.jpg'; ?>" alt="代表取締役　松田龍吉"></div>
                <p class="__name c-name c-lang-wrap">
                  <span class="__jp">代表取締役　松田龍吉</span>
                  <span class="__en">CEO　Ryukichi Matsuda</span>
                </p>
                <p class="__name c-name-ruvi c-lang-wrap">
                  <span class="__jp">Ryukichi Matsuda</span>
                  <span class="__en"><br></span>
                </p>
              </div>
            </div>
          </div>

          <div id="__03" class="__company">
            <p class="__no c-lbl__01"></p>
            <h4 class="__title c-ttl__02 c-lang-wrap">
              <span class="__jp">会社概要</span>
              <span class="__en">COMPANY PROFILE</span>
            </h4>

            <dl class="c-dl__01">
              <dt class="c-lang-wrap">
                <span class="__jp">会社名</span>
                <span class="__en">Company Name</span>
              </dt>
              <dd class="c-lang-wrap">
                <span class="__jp">スカイジャパンコーポレーション株式会社</span>
                <span class="__en">SKY Japan Corporation</span>
              </dd>
              <dt class="c-lang-wrap">
                <span class="__jp">所在地</span>
                <span class="__en">Head Offices</span>
              </td>
              <dd>
                <dl class="c-dl__02">
                  <dt class="c-lang-wrap">
                    <span class="__jp">大阪本社</span>
                    <span class="__en">Osaka Head Office</span>
                  </dt>
                  <dd class="c-lang-wrap">
                    <span class="__jp">〒541-0042<br>大阪市中央区今橋4-1-1<br class="sp"> 淀屋橋三井ビルディング4階<br>Tel：06-6209-8260</span>
                    <span class="__en">4F Yodoyabashi Mitsui Building, 4-1-1 Imabashi, Chuo-ku, Osaka, 541-0042, Japan<br>Tel：06-6209-8260</span>
                    <!-- <span class="__jp">〒541-0041 大阪市中央区北浜3-5-22オリックス淀屋橋ビル8階<br>Tel：06-6209-8260</span>
                    <span class="__en">Orix Yodoyabashi Bldg. 8F 3-5-22, Kitahama, Chuo-ku, Osaka, 541-0041, Japan<br>Tel：06-6209-8260</span> -->
                  </dd>
                  <dt class="c-lang-wrap">
                    <span class="__jp">東京支店</span>
                    <span class="__en">Tokyo Branch</span>
                  </dt>
                  <dd class="c-lang-wrap">
                    <span class="__jp">〒102-0083<br>東京都千代田区麹町2-3-3<br class="sp"> FDC麹町ビル10階<br>Tel：03-5214-7615</span>
                    <span class="__en">FDC Kojimachi Bldg. 10F 2-3-3, Kojimachi, Chiyoda-ku, Tokyo, 102-0083, Japan<br>Tel：03-5214-7615</span>
                  </dd>
                </dl>
              </dd>
              <dt class="c-lang-wrap">
                <span class="__jp">海外拠点</span>
                <span class="__en">Global Offices</span>
              </td>
              <dd class="c-lang-wrap">
                <span class="__jp">ホーチミン駐在員事務所</span>
                <span class="__en">Representative Office in Ho Chi Minh City</span>
              </dd>
              <dt class="c-lang-wrap">
                <span class="__jp">設立</span>
                <span class="__en">Incorporated</span>
              </td>
              <dd class="c-lang-wrap">
                <span class="__jp">2003年6月6日</span>
                <span class="__en">June 6, 2003</span>
              </dd>
              <dt class="c-lang-wrap">
                <span class="__jp">資本金</span>
                <span class="__en">Common Stock</span>
              </td>
              <dd class="c-lang-wrap">
                <span class="__jp">2500万円</span>
                <span class="__en">JPY 25 mil.</span>
              </dd>
              <dt class="c-lang-wrap">
                <span class="__jp">代表者</span>
                <span class="__en">CEO</span>
              </td>
              <dd class="c-lang-wrap">
                <span class="__jp">代表取締役　松田龍吉</span>
                <span class="__en">Ryukichi Matsuda</span>
              </dd>
				
              <dt class="c-lang-wrap">
                <span class="__jp">事業内容</span>
                <span class="__en">Business details</span>
              </td>
              <dd class="c-lang-wrap __link" style="height: 16.5em;">
                <span class="__jp">
				  <span style="margin-bottom:10px;">シューズメーカー事業<br></span>
                  <span class="__title">ブランドマーケティング事業</span>
                  <a class="c-btn__02 __lang" href="https://berwickjapan.co.jp/" target="_blank"><span>&nbsp;&nbsp;Berwick</span></a>
                  <a class="c-btn__02 __lang" href="https://prokeds.jp/" target="_blank"><span>&nbsp;&nbsp;PRO-Keds</span></a>
                  <a class="c-btn__02 __lang" style="margin-bottom:10px;" href="https://prokeds.jp/" target="_blank"><span>&nbsp;&nbsp;Keds</span></a>
				  トレーディング事業
                </span>
                <span class="__en">
				  <span style="margin-bottom:10px;">MANUFACTURING<br></span>
                  <span class="__title">BRAND MARKETING</span>
                  <a class="c-btn__02 __lang" href="https://berwickjapan.co.jp/" target="_blank"><span>&nbsp;&nbsp;Berwick</span></a>
                  <a class="c-btn__02 __lang"  href="https://prokeds.jp/" target="_blank"><span>&nbsp;&nbsp;PRO-Keds</span></a>
                  <a class="c-btn__02 __lang" style="margin-bottom:10px;" href="https://keds.co.jp/" target="_blank"><span>&nbsp;&nbsp;Keds</span></a>
				  TRADING
                </span>


              <dt class="c-lang-wrap">
                <span class="__jp">社員数</span>
                <span class="__en">Number of employees</span>
              </td>
              <dd class="c-lang-wrap">
                <span class="__jp">50名（2025年1月時点）</span>
                <span class="__en">Total 50（January, 2025）</span>
              </dd>
            </dl>
          </div>

          <div id="__04" class="__company">
            <p class="__no c-lbl__01"></p>
            <h4 class="__title c-ttl__02 c-lang-wrap">
              <span class="__jp">沿革</span>
              <span class="__en">HISTORY</span>
            </h4>

            <div class="c-scrollbar">
              <ul class="__list">
              <?php
                $data = $business_history;
                for($i=0;$i<count($data);$i++) {?>
                <li class="__item c-card__02">
                  <p><span></span></p>
                  <p class="__year c-lang-wrap">
                    <span class="__jp"><?php echo $data[$i]['year_jp']; ?></span>
                    <span class="__en"><?php echo $data[$i]['year_en']; ?></span>
                  </p>
                  <p class="__ex c-lang-wrap">
                    <span class="__jp"><?php echo $data[$i]['ex_jp']; ?></span>
                    <span class="__en"><?php echo $data[$i]['ex_en']; ?></span>
                  </p>
                </li>
              <?php } ?>            
              </ul>
            </div>

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