<?php $parent = '../'; ?>
<?php include $parent.'common.php'; ?>
<?php $pagedata = $entry; ?>

<!doctype html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">

<?php include $parent.'include/common_head.php'; ?>

  <title><?php echo $pagedata['title_jp']."｜".$sitename; ?></title>
  <meta name="Description" content="" />
  <meta name="Keywords" content="" />
  <link rel="stylesheet" href="<?php echo $parent.'css/'.$pagedata['link'].'.css?'.$version; ?>">

</head>

<body>

  <?php include $parent.'include/common_header.php'; ?>

  <main id="<?php echo $pagedata['link'] ?>" class="p-contact">
  <!-- <aside class="c-fixed"><h2 class="c-fixed__title en"><?php echo $pagedata['title']; ?></h2></aside> -->

    <div class="container__inner">

      <div class="__head">
        <h2 class="c-ttl__subpage__02 en"><?php echo $pagedata['title_jp'] ?></h2>
        <p class="c-description__31"><?php echo $pagedata['description'] ?></p>
        <div class="p-newentry">
          <h3 class="__title c-ttl__05">新卒採用</h3>
          <a class="link-mynavi" href="https://job.mynavi.jp/25/pc/search/corp252129/outline.html" target="_blank">
            <img src="https://job.mynavi.jp/conts/kigyo/2025/logo/banner_logo_195_60.gif" alt="マイナビ2025" border="0">
          </a>
        </div>
      </div>

      <h3 class="__title c-ttl__05">中途採用</h3>
      <div class="__body">
        <div id="formWrap">
          <form method="post" action="<?php echo $parent.'functions/entry.php'; ?>">
            <dl class="p-form">
              <dt><span class="__hissu">応募職種</span></dt>
              <dd>
                <select name="応募職種" placeholder="選択してください">
                  <option value=""></option>
                  <option value="総合職">総合職</option>
                  <option value="専門職">専門職</option>
                  <option value="販売職">販売職</option>
                </select>
              </dd>
              <dt><span class="__hissu">名前</span></dt>
              <dd><input type="text" name="名前" placeholder="氏名をご入力ください"></dd>
              <dt><span class="__hissu">フリガナ</span></dt>
              <dd><input type="text" name="フリガナ" placeholder="フリガナをご入力ください"></dd>

              <dt><span class="__hissu">生年月日</span></dt>
              <dd>
                <select name="生年月日年" class="__year">
                  <option value="">- -</option>
                  <?php
                  for($i=2022;$i>1950;$i--) {?>
                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                  <?php } ?>
                </select>
                <span>年</span>
                <select name="生年月日月" class="__month">
                  <option value="">- -</option>
                  <?php
                  for($i=1;$i<=12;$i++) {?>
                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                  <?php } ?>
                </select>
                <span>月</span>
                <select name="生年月日日" class="__day">
                  <option value="">- -</option>
                  <?php
                  for($i=1;$i<=31;$i++) {?>
                  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                  <?php } ?>
                </select>
                <span>日</span>
              </dd>

              <dt><span class="__hissu">メールアドレス</span></dt>
              <dd><input type="email" name="メールアドレス" placeholder=""></dd>
              <dt><span class="__hissu">電話番号</span></dt>
              <dd><input type="tel" name="電話番号" placeholder=""></dd>
              <dt><span class="__nini">備考欄</span></dt>
              <dd><textarea name="備考欄" cols="20" rows="15" placeholder=""></textarea></dd>
            </dl>

            <div class="__agreement">
              <h4>個人情報の取り扱い規定</h4>
              <div class="__content"><?php echo $agreement; ?></div>
              <div class="__check-wrap"><input type="checkbox" id="agreement" name="個人情報の取り扱い規定" value="1" /><label for="agreement">個人情報の取り扱い規定に同意する</label></div>
            </div>

            <div class="form-btn">
              <p>
                <input class="submit clr__m2" type="submit" value="入力内容の確認">
              </p>
            </div>

            <p class="__message c-ex__06">エントリー後に人事担当より応募方法詳細をご連絡申し上げます</p>

          </form>
        </div>





      </div>
    </div>
  </main>

  <?php include $parent.'include/common_footer.php'; ?>
  <?php include $parent.'include/common_foot.php'; ?>

</body>
</html>