<?php $parent = '../'; ?>
<?php include $parent.'common.php'; ?>
<?php $pagedata = $contact; ?>

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
      </div>

      <div class="__body">
        <div id="formWrap">
          <form method="post" class="__lang" action="<?php echo $parent.'functions/contact.php'; ?>">
            <dl class="p-form">
              <dt class="c-lang-wrap">
                <span class="__hissu __jp">名前</span>
                <span class="__hissu __en">Name</span>
              </dt>
              <dd class="c-lang-wrap">
                <input class="__jp" type="text" name="名前" placeholder="氏名をご入力ください">
                <input class="__en" type="text" name="name" placeholder="Please enter your name">
              </dd>
              <dt class="c-lang-wrap">
                <span class="__hissu __jp">フリガナ</span>
                <span class="__nini __en">No need</span>
              </dt>
              <dd class="c-lang-wrap">
                <input class="__jp" type="text" name="フリガナ" placeholder="フリガナをご入力ください">
                <input class="__en" type="text" name="noneed" placeholder="No need">
              </dd>
              <dt class="c-lang-wrap">
                <span class="__hissu __jp">メールアドレス</span>
                <span class="__hissu __en">Email Address</span>
              </dt>
              <dd class="c-lang-wrap">
                <input class="__jp" type="email" name="メールアドレス" placeholder="">
                <input class="__en" type="email" name="mailaddress" placeholder="">
              </dd>
              <dt class="c-lang-wrap">
                <span class="__hissu __jp">お問い合わせ内容</span>
                <span class="__hissu __en">Inquiry detail</span>
              </dt>
              <dd class="__long"><textarea name="お問い合わせ内容" cols="20" rows="15" placeholder=""></textarea></dd>
            </dl>

            <div class="__agreement">
              <h4 class="c-lang-wrap">
                <span class="__jp">個人情報の取り扱い規定</span>
                <span class="__en">Personal Information Protection Guidelines</span>
              </h4>
              <div class="__content"><?php echo $agreement; ?></div>
              <div class="__check-wrap">
                <input type="checkbox" id="agreement" name="個人情報の取り扱い規定" value="1" />
                <label for="agreement">
                  <p class="c-lang-wrap">
                    <span class="__jp">個人情報の取り扱い規定に同意する</span>
                    <span class="__en">I agree to Personal Information Protection Guidelines.</span>
                  </p>
                </label>
              </div>
            </div>

            <div class="form-btn">
              <p class="c-lang-wrap">
                <span class="__jp"><input class="submit clr__m2" type="submit" value="入力内容の確認"></span>
                <span class="__en"><input class="submit clr__m2" type="submit" value="Entry confirmation"></span>
              </p>
              <!-- <p>
                <input class="submit clr__m2" type="submit" value="入力内容の確認">
              </p> -->
            </div>
          </form>
        </div>





      </div>
    </div>
  </main>

  <?php include $parent.'include/common_footer.php'; ?>
  <?php include $parent.'include/common_foot.php'; ?>

</body>
</html>