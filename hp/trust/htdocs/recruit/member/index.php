<?php $parent = '../../';
  include $parent.'common.php';
  $pagedata = $member;
//  $datalist = $member_list;
  ?>

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

    <?php
    $data = $pagedata;
    for($i=0;$i<count($member_list);$i++) {
      if ($member_list[$i]['show'] == 'on') {
        $datalist[]=$member_list[$i];
      }
    }
    $count_max = count($datalist);

    // PHPバージョンが古いのか、Skyjapancanonサーバーでは??演算子が使えなかった。
    // $id = escape($_GET['id'] ?? '');
    if (isset($_GET['id'])) {
      $id = escape($_GET['id']);
    } else {
      $id = '';
    }

    // var_dump(checkMemberId($id));
    if (!checkMemberId($id, $count_max)) {
      require $parent.'include/nomember.tpl.php';
    } else {

    // for($i=0;$i<count($datalist);$i++) {
    //   if ($datalist[$i]['id'] == $id) {

        $i=$id-1;
    ?>

    <div class="p-sidetitle">
      <p class="c-ttl-side"><?php echo $data['title']; ?></p>
    </div>

    <div class="p-mv __recruit">
      <div class="__inner container__inner">
        <h4 class="__title c-ttl__03"><?php echo $datalist[$i]['question']; ?></h4>
        <p class="__no c-lbl__01"></p>
        <p class="__ex c-ex__04"><?php echo $datalist[$i]['catchphrase']; ?></p>
        <p class="__company c-ttl__03"><?php echo $datalist[$i]['company']; ?></p>
        <p class="__katagaki c-ttl__03"><?php echo $datalist[$i]['katagaki']; ?></p>
        <p class="__name c-name__02"><?php echo $datalist[$i]['name']; ?></p>
        <div class="__image"><img src="<?php echo $parent.'img/'.$datalist[$i]['mainvisual']['filename']; ?>" alt="<?php echo $datalist[$i]['mainvisual']['alt']; ?>"></div>
      </div>
    </div>

    <div class="p-<?php echo $pagedata['link']; ?>">
      <div class="container__inner">
        <div class="__detail">
        <?php
        $data2 = $datalist[$i]['body'];
        for ($j=0;$j<count($data2);$j++) {
          if ($data2[$j]['type']=='question') {?>
          <h5 class="c-ttl__04"><?php echo $data2[$j]['question']; ?></h5>
          <p class="c-ex__05"><?php echo $data2[$j]['answer']; ?></p>
        <?php } else if ($data2[$j]['type']=='image') {?>
          <div class="__image"><img src="<?php echo $parent.'img/'.$data2[$j]['filename']; ?>" alt="<?php echo $data2[$j]['alt']; ?>"></div>
        <?php } } ?>

          <?php $data2 = $datalist[$i]['timeschedule'];?>
          <h5 class="c-ttl__04"><?php echo $data2['question']; ?></h5>
          <dl class="c-dl__05">
          <?php
          $data2 = $data2['schedule'];
          for ($j=0;$j<count($data2);$j++) {?>
            <dt class="__time <?php echo $data2[$j]['class']; ?>"><?php echo $data2[$j]['time']; ?></dt><dt><?php echo $data2[$j]['title']; ?></dt><dd><?php echo $data2[$j]['detail']; ?></dd>
          <?php } ?>
          </dl>

          <?php
          $data2 = $datalist[$i]['message'];?>
          <h5 class="c-ttl__04"><?php echo $data2['question']; ?></h5>
          <p class="c-ex__05"><?php echo $data2['answer']; ?></p>



        </div>

        <div class="__other">
          <ul>

          <?php
          $data2 = $datalist;
          // $count_max = count($data2);
          $__page = [$id + 1,$id + 2];
          // $__p1 = $id + 1;
          // $__p2 = $id + 2;

          if($i==0) {
            $__page = [$count_max-1,1];
          } else if($i==$count_max-1) {
            $__page = [$count_max-2,0];
          } else {
            $__page = [$i-1,$i+1];
          }
          // if($id==1) {
          //   $__page = [$count_max,2];
          // } else if($id==$count_max) {
          //   $__page = [$count_max-1,1];
          // } else {
          //   $__page = [$id-1,$id+1];
          // }

          // echo $__page[0];
          // echo $__page[1];
          for ($j=0;$j<count($__page);$j++) {?>
            <li>
              <a class="c-btn__03" href="?id=<?php echo $__page[$j]+1; ?>">
                <span></span>
                <div class="__image"><img src="<?php echo $parent.'img/'.$data2[$__page[$j]]['mainvisual']['filename']; ?>" alt=""></div>
                <div class="__info">
                  <p class="__ex"><?php echo $data2[$__page[$j]]['catchphrase']; ?></p>
                  <p class="__katagaki"><?php echo $data2[$__page[$j]]['katagaki']; ?></p>
                  <p class="__name"><?php echo $data2[$__page[$j]]['name']; ?></p>
                </div>
              </a>
            </li>
          <?php } ?>
          <!-- for ($j=0;$j<count($__page);$j++) {
            for ($k=0;$k<count($data2);$k++) {
            if ($data2[$k]['id'] == $__page[$j]) {?>
            <li>
              <a class="c-btn__03" href="?id=<?php //echo $data2[$k]['id']; ?>">
                <span></span>
                <div class="__image"><img src="<?php //echo $parent.'img/'.$data2[$k]['mainvisual']['filename']; ?>" alt=""></div>
                <div class="__info">
                  <p class="__ex"><?php //echo $data2[$k]['catchphrase']; ?></p>
                  <p class="__katagaki"><?php //echo $data2[$k]['katagaki']; ?></p>
                  <p class="__name"><?php //echo $data2[$k]['name']; ?></p>
                </div>
              </a>
            </li>
          <?php //} } } ?> -->

          </ul>
        </div>





      </div>
    </div>

  <?php //}} ?>
    <?php include $parent.'include/common_entry.php'; ?>
  <?php } ?>

  </main>

  <?php include $parent.'include/common_footer.php'; ?>
  <?php include $parent.'include/common_foot.php'; ?>

</body>
</html>