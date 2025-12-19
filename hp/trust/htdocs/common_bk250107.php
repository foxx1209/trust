<?php
$sitename = 'SKY Japan Corporation';
$domain = 'skyjapan';
$version = 'ver=1.1.0013';
$uri = '';
$lang='';
$root = $_SERVER['DOCUMENT_ROOT'];
if ( $_SERVER['SERVER_NAME'] == 'localhost' ) {
  $uri = 'http'.'://'.$_SERVER['SERVER_NAME'].':8888/'.$domain;
} else {
  if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']!='off') {
    $uri = 'https'.'://'.$_SERVER['SERVER_NAME'];
  } else {
    $uri = 'http'.'://'.$_SERVER['SERVER_NAME'];
  } 
}

// メール送信用
// 本番用
$site_top = 'https://skyjapan-corp.co.jp/';
$to_entry = "recruit@skyjapan-corp.co.jp";
$to_contact = "information@skyjapan-corp.co.jp";

// TEST用
// $site_top = 'https://demonstration2.plusinc.jp/';
// // $to_entry = "yuichiro.odachi@gmail.com";
// // $to_contact = "yuichiro.odachi@gmail.com";
// $to_entry = "recruit@skyjapan-corp.co.jp,main.plusinc@gmail.com,yuichiro.odachi@gmail.com";
// $to_contact = "information@skyjapan-corp.co.jp,main.plusinc@gmail.com,yuichiro.odachi@gmail.com";

$gnav_navs = array (
  array(
    'title' => 'OUR BUSINESS',
    'title_jp' => '事業紹介',
    'link' => 'business',
    'class' => '__normal'
  ),
  array(
    'title' => 'OUR COMPANY',
    'title_jp' => '会社案内',
    'link' => 'company',
    'class' => '__normal'
  ),
  array(
    'title' => 'RECRUIT',
    'title_jp' => '採用情報',
    'link' => 'recruit',
    'class' => '__normal'
  ),
  array(
    'title' => 'CONTACT',
    'title_jp' => 'お問い合わせ',
    'link' => 'contact',
    'class' => '__normal'
  ),
  array(
    'title' => 'Lang',
    'title_jp' => 'Lang',
    'link' => '',
    'class' => '__lang',
    // 'class' => '__nothing',
  ),
  array(
    'title' => 'ENTRY',
    'title_jp' => 'エントリー',
    'link' => 'entry',
    'class' => '__01'
  ),
);

$companies = array (
  array(
    'name' => 'スカイジャパンコーポレーション株式会社',
    'yubin' => '541-0042',
    'address' => '大阪市中央区今橋4-1-1<br>淀屋橋三井ビルディング4F',
    // 'yubin' => '541-0041',
    // 'address' => '大阪市中央区北浜3-5-22<br>オリックス淀屋橋ビル8階',
    'yubin_en' => '541-0042',
    'address_en' => '4F Yodoyabashi Mitsui Building<br>4-1-1 Imabashi, Chuo-ku, Osaka, Japan',
    // 'yubin_en' => '',
//    'address_en' => 'Orix Yodoyabashi Bldg. 8F<br>3-5-22, Kitahama, Chuo-ku, Osaka, 541-0041, Japan',
    'tel_jp' => '06-6209-8260(代表)',
    'tel_en' => '06-6209-8260',
    'fax' => '06-6209-8262',
  ),
);

$top = array (
  'link' => 'top',
  'title' => 'TOP',
  'title_jp' => 'トップ',
  'mainview' => array (
    array (
      'meta' => 'movie',
      'file' => 'mv-v2.mp4',
      'alt' => '',
    ),
  ),
  'catchphrase' => array (
    'エスエッチ・サンキョウの作る『枠』は、',
    '日常の空間の中で、',
    '様々なものに使われています。',
  ),
  'description' => '',  
);

$top_body_01 = array (
  array (
    'class' => '__01',
    'title' => 'BUSINESS',
    'title_jp' => '事業紹介',
    'title_en' => 'OUR BUSINESS',
    'exp' => '<span class="sp">私たちは輸入取引を中心とするブランド開発・マーケティング事業を展開しています。</span>',
    'img' => array (
      'class' => '__03',
      'file' => array (
        array (
          'filename' => 'top-second-01-01.jpg?ver1.1',
          'alt' => '事業紹介１',
          'link' => '',
        ),
        array (
          'filename' => 'top-second-01-02.jpg',
          'alt' => '事業紹介２',
          'link' => '',
        ),
      ),
    ),
    // 'img' => array (
    //   'class' => '__01',
    //   'file' => array (
    //     array (
    //       'filename' => 'top-second-01-01.png',
    //       'alt' => '事業紹介１',
    //       'link' => '',
    //     ),
    //     array (
    //       'filename' => 'top-second-01-02.jpg',
    //       'alt' => '事業紹介２',
    //       'link' => '',
    //     ),
    //   ),
    // ),
    'menu' => array (
      array (
        'title' => 'シューズメーカー事業',
        'title_en' => 'MANUFACTURING',
        'link' => 'business#business-01',
      ),
      array (
        'title' => 'ブランドマーケティング事業',
        'title_en' => 'BRAND MARKETING',
        'link' => 'business#business-02',
      ),
      array (
        'title' => 'トレーディング事業',
        'title_en' => 'TRADING',
        'link' => 'business#business-03',
      ),
    ),
    'background' => array (
      array (
        'class' => '__01',
      )
    ),
  ),
  array (
    'class' => '__02',
    'title' => 'COMPANY',
    'title_jp' => '会社案内',
    'title_en' => 'OUR COMPANY',
    'exp' => '',
    'img' => array (
      'class' => '__02',
      'file' => array (
        array (
          'filename' => 'top-second-02-01.jpg',
          'alt' => '会社案内',
          'link' => '',
        ),
      ),
    ),
    'menu' => array (
      array (
        'title' => '企業理念',
        'title_en' => 'CORPORATE PHILOSOPHY',
        'link' => 'company#__01',
      ),
      array (
        'title' => '会社概要',
        'title_en' => 'COMPANY PROFILE',
        'link' => 'company#__03',
      ),
      array (
        'title' => '沿革',
        'title_en' => 'HISTORY',
        'link' => 'company#__04',
      ),
    ),
    'background' => array (
      array (
        'class' => '__01',
      ),
    ),
  ),
  array (
    'class' => '__03',
    'title' => 'RECRUIT',
    'title_jp' => '採用情報',
    'title_en' => 'RECRUIT',
    'exp' => 'スカイジャパンコーポレーションでは未来の“よいシューズ”を<br>共に創り上げるスタッフを募集しています',
    'exp_en' => 'At SKY Japan Corporation, we welcome new staff devoted to<br>developing products together.',
    'img' => array (
      'class' => '__link',
      'file' => array (
        array (
          'filename' => 'top-second-03-01.jpg',
          'alt' => '採用情報１',
          'link' => 'recruit',
          'link_caption' => '社員インタビュー',
          'link_caption_en' => 'Staff Interview',
        ),
        array (
          'filename' => 'top-second-03-02.jpg',
          'alt' => '採用情報２',
          'link' => 'recruit#guidelines',
          'link_caption' => '募集要項',
          'link_caption_en' => 'Requirements',
        ),
      ),
    ),
    'menu' => array (
    ),
    'background' => array (
      array (
        'class' => '__01',
      ),
      array (
        'class' => '__02',
      ),
    ),
  ),
);

$top_view03 = array (
  array(
    'title' => 'PRODUCT',
    'description1' => '樹木も木も扱える技術力と対応力で<br>最適な住宅用各種部材部品を構築します。',
    'description2' => '広島県を中心にラッピング製品の製造販売やVカット製品の製造販売、住宅用各種部材部品の製造販売を行なっており、独自の生産管理、品質管理システムの運用で、小ロット、多品種、短納期と低コストを同時に実現します。',
    'link' => 'product',
    'imgfile' => 'img-top03_01.jpg',
    'alt' => 'PRODUCT',
  ),
  array(
    'title' => 'FACTORY',
    'description1' => '生産する製品に合わせて都度、<br>工場のラインを組み替えています。',
    'description2' => '画期的な仕組みや生産ラインを創ることにより、製品を作ることだけではなく、お客様のニーズに応える仕組みや設備、それ自体を生み出しているのです。',
    'link' => 'factory',
    'imgfile' => 'img-top03_02.jpg',
    'alt' => 'FACTORY',
  ),
);


$business = array (
  'link' => 'business',
  'title' => 'BUSINESS',
  'title_jp' => '事業紹介',
  'title_en' => 'OUR BUSINESS',
  'mainview' => array (
    array (
      'meta' => 'image',
      'file' => 'img-business-mv.png',
      'alt' => '事業紹介',
    ),
  ),
);

$business_body = array (
  array (
    'id' => 'business-01',
    'class' => '__business',
    'no' => '01',
    'title' => '',
    'title_jp' => 'シューズメーカー事業',
    'title_en' => 'MANUFACTURING',
    'ex' => '国内外のアウトドア、アスレチックブランドシューズの<br class="pc">ビジネスサポートを行っています。<br><br>シューズ好きなスタッフが知識と経験、<br class="sp">そして情熱を持って<br class="pc">“よいシューズ”のご提供を目指します。<br class="pc">企画開発から生産まで当社のグローバルネットワークを活用しシューズを生産しています。',
    'ex_en' => 'We offer business support for outdoor/athletic footwear brands, both domestic and overseas.  Utilizing our global network, we help manufacture shoes from design to production.  Our staff are passionate about footwear, and with our expertise and experience, we strive to find the perfect products for our clients and customers. ',
    'img' => array (
      'filename' => 'img-business-01-01.jpg',
      'alt' => 'シューズメーカー事業',
      'link' => '',
    ),
    'contents' => array (
    ),
  ),
  array (
    'id' => 'business-02',
    'class' => '__business',
    'no' => '02',
    'title' => '',
    'title_jp' => 'ブランドマーケティング事業',
    'title_en' => 'BRAND MARKETING',
    'ex' => '欧米ブランドシューズの総代理店事業を運営しています。 <br><br>シューズメーカー事業で培った機能と役割を活用しドレスシューズ及びスニーカーブランドを展開しています。',
    'ex_en' => 'We operate as an exclusive distributor for US and European footwear brands.  Building on our manufacturing experience, we also include dress, sports, to casual brands.',
    'img' => array (
      'filename' => 'img-business-02-01.jpg',
      'alt' => 'ブランドマーケティング事業',
      'link' => '',
    ),
    'contents' => array (
    ),
  ),
  array (
    'id' => 'brand-01',
    'class' => '__brand',
    'no' => '',
    'title' => 'BRAND',
    'title_jp' => '',
    'ex' => '',
    'img' => array (
      'filename' => '',
      'alt' => '',
      'link' => '',
    ),
    'contents' => array (
      array (
        'class' => '__sp __left',
        'filename' => 'img-business-brand-01.png',
        'alt' => 'Berwick1707',
        'title' => 'Berwick1707',
        'ex' => 'Berwick1707はフランス・イタリア等の欧州各国から調達した高品質な素材をふんだんに使用した色気とクラッシックテイストを備えたメイドインスペインのドレスシューズです。',
        'ex_en' => 'Using abundant high-grade materials from all over Europe, such as France and Italy, Berwick 1707 is well-known for its alluring and classic dress shoes, all made in Spain. ',
        'link' => 'https://berwickjapan.co.jp/',
        'link-caption' => '公式ホームページへ',
        'link-caption_en' => 'Official Website',
      ),
      array (
        'class' => '',
        'filename' => 'img-business-brand-02.jpg',
        'alt' => 'PRO-Keds',
        'title' => '<span class="c-mark__reg">PRO-Keds</span>',
        'ex' => '<span class="c-mark__reg">PRO-Keds</span>は、ネイビーレッドを基調とした60年を超える歴史をもつ伝統的なヴァルカナイズ製法で作られたスニーカーブランドです。2021年に当社がライセンス権を獲得し、シューズ好きのスタッフがアメリカの古き良き時代のアーカイブと現代のテクノロジーを融合させた“よいシューズ“を展開しています。',
        'ex_en' => '<span class="c-mark__reg">PRO-Keds</span> is a NAVY-RED themed traditional vulcanized sneaker brand with a history over 60 years. In 2021, we acquired distribution rights in Japan, and our dedicated staff are  promoting and developing an updated collection ,through integration of American vintage and modern technology.',
        'link' => 'https://prokeds.jp/',
        'link-caption' => '公式ホームページへ',
        'link-caption_en' => 'Official Website',
      ),
    ),
  ),
  array (
    'id' => 'business-03',
    'class' => '__business',
    'no' => '03',
    'title' => '',
    'title_jp' => 'トレーディング事業',
    'title_en' => 'TRADING',
    'ex' => '世界各国と輸出入を中心とするトレーディング事業を展開しています。<br><br>当社の優れた貿易ノウハウを活用し様々なお客様のニーズに応えながら、お客様のシューズビジネスをサポートしています。',
    'ex_en' => 'We engage in importing and exporting business with countries all over the world.  Through our trading expertise, we strive to provide our customers with the best solutions for their business.',
    'img' => array (
      'filename' => 'img-business-03-01.jpg',
      'alt' => 'トレーディング事業',
      'link' => '',
    ),
    'contents' => array (
    ),
  ),
);

$business_history = array (
  array (
    'year_jp' => '2003年',
    'year_en' => '2003',
    'ex_jp' => '大阪/北浜にて創業',
    'ex_en' => 'Founded at Kitahama, Osaka',
  ),
  array (
    'year_jp' => '2009年',
    'year_en' => '2009',
    'ex_jp' => '大阪/淀屋橋へ本社移転',
    'ex_en' => 'Moved the head office<br>to Yodoyabashi, Osaka',
  ),
  array (
    'year_jp' => '2017年',
    'year_en' => '2017',
    'ex_jp' => 'ベトナム/ホーチミンに<br>駐在員事務所開設',
    'ex_en' => 'Established the Representative<br>office in Ho Chi Minh City, Vietnam',
  ),
  array (
    'year_jp' => '2019年',
    'year_en' => '2019',
    'ex_jp' => 'バーウィックジャパン株式会社設立<br>ドレスシューズブランド「Berwick1707」の<br>独占販売契約締結',
    'ex_en' => 'Established “Berwick Japan Co., Ltd.”<br>and tied exclusive distributor agreement<br>with Spanish dress shoes brand”Berwick1707”.',
  ),
  array (
    'year_jp' => '2020年',
    'year_en' => '2020',
    'ex_jp' => '東京支店を開設',
    'ex_en' => 'Established Tokyo branch',
  ),
  array (
    'year_jp' => '2021年',
    'year_en' => '2021',
    'ex_jp' => 'スニーカーブランド&#12300;<span class="c-mark__reg">PRO-Keds</span>&#12301;<br>のライセンス契約締結',
    'ex_en' => 'Contracted an exclusive distributor agreement with sneaker brand “<span class="c-mark__reg">PRO-Keds</span>”',
  ),
  array (
    'year_jp' => '2024年',
    'year_en' => '2024',
    'ex_jp' => '大阪/淀屋橋にて本社拡大移転',
    'ex_en' => 'Headquarters expansion and relocation in Osaka/Yodoyabashi',
  ),
  array (
    'year_jp' => '2025年',
    'year_en' => '2025',
    'ex_jp' => '子会社BMS株式会社を吸収合併',
    'ex_en' => 'Absorbed and merged subsidiary BMS Co., Ltd.',
  ),
);


$company = array (
  'link' => 'company',
  'title' => 'COMPANY',
  'title_jp' => '会社案内',
  'title_en' => 'OUR COMPANY',
  'mainview' => array (
    array (
      'meta' => 'image',
      'file' => 'img-company-mv.jpg',
      'alt' => '会社案内',
    ),
  ),
);

$company_body = array (
  array (
    'class' => '__business',
    'no' => '01',
    'title' => '企業理念',
    'title_jp' => 'シューズメーカー事業',
    'ex' => '国内外のアウトドア、アスレチックブランドシューズの<br>ビジネスサポートを行っています。<br><br>シューズ好きなスタッフが知識と経験、そして情熱を持って<br>“よいシューズ”のご提供を目指します。<br>企画開発から生産まで当社のグローバルネットワークを活用しシューズを生産しています。',
    'img' => array (
      'filename' => 'top-second-01-01.jpg',
      'alt' => 'シューズメーカー事業',
      'link' => '',
    ),
    'contents' => array (
    ),
  ),
);


$recruit = array (
  'link' => 'recruit',
  'title' => 'RECRUIT',
  'title_jp' => '採用情報',
  'title_en' => 'RECRUIT',
  'mainview' => array (
    array (
      'meta' => 'image',
      'file' => 'img-recruit-mv.jpg',
      'alt' => '採用情報',
    ),
  ),
);






$member = array (
  'link' => 'member',
  'title' => 'RECRUIT',
  'title_jp' => '採用情報',
  'title_en' => 'OUR RECRUIT',
  'mainview' => array (
    array (
      'meta' => 'image',
      'file' => 'img-recruit-mv.jpg',
      'alt' => '採用情報',
    ),
  ),
);

$member_list = array (
  array (
    'id' => '1',
    'show' => 'on',
    'name' => '粟野 陽介',
    'company' => 'BMS株式会社',
    'katagaki' => '商品管理グループ 課長 2020年入社',
    'catchphrase' => '既存の括りに縛られない働き<br>マルチプレイヤーとしての挑戦',
    'question' => '社員インタビュー',
    'mainvisual' => array (
      'filename' => 'img-member-01-mv.jpg',
      'alt' => '粟野 陽介',
    ),
    'listvisual' => array (
      'filename' => 'img-member-01.jpg',
      'alt' => '粟野 陽介',
    ),
    'body' => array (
      array (
        'type' => 'question',
        'question' => '商品管理グループではどのような仕事を担当していますか？',
        'answer' => '入社は2020年で、最初は1年ほど販売業務を経験しました。店長としてお客さまと接したのちバックオフィスに異動し、現在は商品管理グループの課長を任されています。商品管理グループの主な業務は商品の在庫コントロールです。靴を入荷して売れるまでの流れ、在庫の保管、その指示出しなどを担います。<br><br>しかし実際の業務内容は多岐に渡っていて、サプライヤーへの発注、売り場から上がってきた課題の吸い上げ、商品の新規開発、SNSプロモーションといった広報活動まで実に幅広く携わっています。在庫管理や流通だけでなく、商品企画の段階から携わることも。マルチプレイヤーとして、ひとつの括りに縛られない働き方をしていますね。<br><br>ポリシーは「相手の気持ちを考えて行動する」こと。何事もその先に相手がいることを意識して、できるだけクィックリーに行動することを心がけています。',
      ),
      array (
        'type' => 'image',
        'filename' => 'img-member-01-p01.jpg',
        'alt' => '',
      ),
      array (
        'type' => 'question',
        'question' => '入社したきっかけを教えてください。',
        'answer' => '私は服飾系専門学校の出身です。学生時代から素材として革に魅力を感じていました。革は丈夫でかつ経年変化が楽しめます。使い込むことで生まれる良さに惹かれ、次第に靴に興味を持つようになりました。<br><br>卒業後は希望通り靴業界に就職し、販売員や営業を13年ほど経験してきました。そのときに「Berwick1707」というブランドに出会ったんです。BWの靴はグッドイヤーウェルト製法で作られていて、修理をすることでずっと履き続けられるような、愛着の湧く縫製で作られています。初めて革靴を買う方もそうでない方も幅広く親しめるところが魅力でした。<br><br>ある日、バーウィックの総代理店（バーウィックジャパン）が日本にできるという情報を知りました。販路がそこに集約されれば発展は間違いないと思いましたし、ワクワクしか見えなかった。なんとしても入社したくて、迷わず応募しました。',
      ),
      array (
        'type' => 'question',
        'question' => '仕事のやりがいや、スカイジャパングループで<br>働いていて良かったと思うことは？',
        'answer' => 'ひとつの業務に縛られず、ありとあらゆることに携われるのが大きな魅力です。中でも自分がチョイスした商品がヒットして売れ筋になると「よっしゃ！」と思いますね。また、そういうときに全社で喜んでくれるのもうれしいですし、モチベーションにつながっています。<br><br>スカイジャパングループは全員の顔がわかるくらい風通しの良い会社です。尊敬する上司や同僚と一緒に仕事ができるのも、私が感じる会社の魅力ですね。メンバーの一人ひとりが同じ方向を見ているので、日々やりがいを実感しながら働ける環境だと実感しています。',
      ),
      array (
        'type' => 'question',
        'question' => 'これからの目標はなんですか？',
        'answer' => '入社してから2年間、様々な経験を積んできて、現在は責任あるポジションにも就かせていただきました。自分の強みは靴と仕事へのパッション。自分の中で凝り固まったフィルターを作らずに、今度もどんどん上を目指していきたいです。<br><br>会社としては、もっとブランドマーケティングを進めたいと思っています。直営店を増やすことはもちろん新規商品開発、プロモーションの強化を通じて、より一層バーウィックのブランディングを進めたいと思っています。',
      ),
      array (
        'type' => 'image',
        'filename' => 'img-member-01-p02.jpg',
        'alt' => '',
      ),
    ),
    'timeschedule' => array (
      'question' => '1日の流れを教えてください。',
      'schedule' => array (
        array (
          'class' => '__0930',
          'time' => '9:30',
          'title' => '出社',
          'detail' => '売上データや在庫変動をチェックし、ネットショップのカスタマーサポートを行う合間に、今日の業務の確認。',
        ),
        array (
          'class' => '',
          'time' => '10:30',
          'title' => '定例 MTG',
          'detail' => '社長や店舗の店長が参加する週1回の方針会議に出席。前週の振り返りや今週の計画を共有。',
        ),
        array (
          'class' => '',
          'time' => '11:30',
          'title' => '目標共有',
          'detail' => 'MTGの内容を受けて今週の目標を共有し、業務の振り分けを行う。新作リリース準備の指示なども。',
        ),
        array (
          'class' => '__1200',
          'time' => '12:00',
          'title' => '昼休憩',
          'detail' => '',
        ),
        array (
          'class' => '',
          'time' => '12:00-18:30',
          'title' => 'データ収集や<br>商材選定',
          'detail' => '売上の数値検証やセールシーズンの商材選定。営業グループとのMTGや、店舗ビルと広報施策を打ち合わせるために外出することも。',
        ),
        array (
          'class' => '__1830',
          'time' => '18:30',
          'title' => '定時',
          'detail' => 'この日は外出があったため、1時間ほど残業予定。<br>ちなみに毎週水曜日は全社のノー残業デーとなっている。',
        ),
      ),
    ),
    'message' => array (
      'question' => '新入社員へメッセージをお願いします。',
      'answer' => '靴への想いや個人の取り組みに応じてどんどんキャリアステップが踏んでいける会社なので、やる気とパッションを持って取り組む姿勢を大事にしてほしいです。その気持ちは会社や上司がきちんと汲み取って、できる限りサポートする体制が整っていますよ。<br><br>たとえば弊社では日々海外とのやりとりが発生します。だからもっと英語を学びたいと思えば、オンライン英会話レッスンに対して補助が出るような制度があります。もちろんきちんと業務に還元してもらいますが、外部の研修を受講したいとか、靴業界ならではの資格に挑戦してみるのもおすすめです。<br><br>靴の專門知識は正直あとからでもついてきます。何かを「成し遂げたい」という強い気持ちがある方と一緒に仕事ができるのを楽しみにしています！ ',
    ),
  ),
  array (
    'id' => '2',
    'show' => 'on',
    'name' => '楊 鳳敏',
    'company' => 'スカイジャパンコーポレーション株式会社',
    'katagaki' => '経営企画室 課長 2021年入社',
    'catchphrase' => '法律＋ビジネス目線で<br>会社の問題解決に貢献したい',
    'question' => '社員インタビュー',
    'mainvisual' => array (
      'filename' => 'img-member-05-mv.jpg',
      'alt' => '楊 鳳敏',
    ),
    'listvisual' => array (
      'filename' => 'img-member-05.jpg',
      'alt' => '楊 鳳敏',
    ),
    'body' => array (
      array (
        'type' => 'question',
        'question' => '経営企画室ではどのような仕事を担当していますか？',
        'answer' => '経営企画室では経営企画、財務、総務、人事などスカイジャパングループのバックオフィス機能全てを担っています。また各事業部門のサポートや課題解決を目指すのも仕事で、たとえば会社の制度で効率的に回っていないような部分があればそれを分析して改革するなど、スムーズに進まない仕組みに対してアプローチしています。<br><br>その一環としてOEMビジネスの管理も担っていて、物流や経理・請求関係、商品生産の進捗状況の確認を日本語、英語、中国語を交えながら行っています。全社の資金繰りについてもチェックしていて、送金や請求の承認も行います。',
      ),
      array (
        'type' => 'image',
        'filename' => 'img-member-05-p01.jpg',
        'alt' => '',
      ),
      array (
        'type' => 'question',
        'question' => '入社したきっかけを教えてください。',
        'answer' => '私は法科大学院を卒業したのち、2021年に新卒でスカイジャパングループに入社しました。大手メーカーや商社、コンサルティングなどを視野に入れていたのですが、中小企業でもより実力のある会社を探していてスカイジャパンコーポレーションと出会いました。<br><br>もともとビジネス全般に興味があり、学生時代に学んだ法律の知識を活かして自分もビジネスパーソンとして成長できる環境を探していました。<br><br>仕事において、わからないことは積極的に上司へ相談すること、勇気を持って自分の意見を声に出すことを大切にしてきました。そうして真摯に取り組む中で、入社してから1年で課長代理に任命していただきました。責任感を評価していただけたのかなと感じています。',
      ),
      array (
        'type' => 'question',
        'question' => '仕事のやりがいや、スカイジャパングループで<br>働いていて良かったと思うことは？',
        'answer' => '問題を発見し、道筋を立てて解決に導くアクションを起こせたときにやりがいを感じます。たとえば靴のパーツの原料や染料などに関わる「規制物質リスト（RSL：Restricted Substances List）」に関してグローバルで国ごとに異なる基準を調査し当社が留意すべき基準を取りまとめしました。<br><br>自分が軸となり、部署を越えていろいろな方に関わってもらいながら進めることのできた仕事のひとつです。新規ブランドを扱うことになったときに今の基準と照らし合わせながら推進していけるので、分析もしやすくなったと思います。これはコンプライアンスやCSR活動にも通じているので、意義のある課題解決でした。<br><br>またこれらの課題解決は経営上のリスクマネジメントにも直結しています。今後も法律の知識を活かしながら多様な視点で課題解決を実現できるように努力したいです。',
      ),
      array (
        'type' => 'question',
        'question' => 'これからの目標はなんですか？',
        'answer' => '個人的な目標としては、專門分野である法律を活用しつつプラスアルファで経営知識を習得してレベルアップを図りたいです。学生の頃からその想いは強く、足りない知識をどんどん吸収することで成長していきたいと思っています。<br><br>仕事に対しては、既存事業の拡大と共に新規事業の開発にも力を入れ、いずれ上場できるような規模の会社へと成長に導くのが目標です。事前にビジネスにおけるリスクを分析し、どうしたら利益が生まれるかをもっと提案できるようこれからも視野を広く勉強していきます。',
      ),
      array (
        'type' => 'image',
        'filename' => 'img-member-05-p02.jpg',
        'alt' => '',
      ),
    ),
    'timeschedule' => array (
      'question' => '1日の流れを教えてください。',
      'schedule' => array (
        array (
          'class' => '__0930',
          'time' => '9:30',
          'title' => '業務開始',
          'detail' => 'メールチェック、社内ポータルで各種申請の動きをチェック。',
        ),
        array (
          'class' => '',
          'time' => '10:30',
          'title' => '定例MTG',
          'detail' => 'グループ全体の定例MTG',
        ),
        array (
          'class' => '__1200',
          'time' => '12:00',
          'title' => 'ランチ',
          'detail' => '',
        ),
        array (
          'class' => '',
          'time' => '13:00',
          'title' => '業務再開',
          'detail' => 'メール返信、社内ポータルをチェック。',
        ),
        array (
          'class' => '',
          'time' => '14:00',
          'title' => '定例MTG',
          'detail' => '二部（OEM）の定例MTG',
        ),
        array (
          'class' => '',
          'time' => '15:00',
          'title' => 'サポート',
          'detail' => '定例MTGで出た議題やタスクの中からサポートできる業務で連携。経理・請求関係、商品生産の進捗状況の確認を行う。',
        ),
        array (
          'class' => '',
          'time' => '18:00',
          'title' => '',
          'detail' => '社内ポータルで申請を確認し、発注や送金の承認を行う。

          ',
        ),
        array (
          'class' => '__1900',
          'time' => '19:00',
          'title' => '定時',
          'detail' => 'メールをチェックしてから1日の業務が終了。',
        ),
      ),
    ),
    'message' => array (
      'question' => '新入社員へメッセージをお願いします。',
      'answer' => 'スカイジャパングループは、自分のアクションによって会社が成長していることをダイレクトに感じられる会社です。全員が一丸となって経営に携わっているので、前向きで、積極性のある方と仕事ができたらうれしいです。<br><br>たくさんの案件に携わることになるので、私も最初はわからないことだらけでした。でも、先輩や上司が真正面から向き合ってくれるので質問しやすい環境だと思います。そうしてコミュニケーションを取るうちに解決できることもたくさんあるので、ぜひどんどん質問してくださいね。',
    ),
  ),
  array (
    'id' => '3',
    'show' => 'on',
    'name' => '藤元 祐佳',
    'company' => 'BMS株式会社バーウィックジャパン事業部',
    'katagaki' => '営業グループ 丸ノ内店 店長代行 2021年入社',
    'catchphrase' => 'バーウィックの顔として<br>ブランドの魅力を伝えたい',
    'question' => '社員インタビュー',
    'mainvisual' => array (
      'filename' => 'img-member-04-mv.jpg',
      'alt' => '藤元 祐佳',
    ),
    'listvisual' => array (
      'filename' => 'img-member-04.jpg',
      'alt' => '藤元 祐佳',
    ),
    'body' => array (
      array (
        'type' => 'question',
        'question' => '営業グループはどのような仕事を担当していますか？',
        'answer' => 'バーウィックの直営店である「Berwick MARUNOUCHI」で、接客販売やそれに付帯する在庫管理などの業務を担当しています。バーウィックの靴を長く愛用していただくため、そして次の靴が欲しくなったときにまたご来店いただきたくて、店舗一丸となって日々お客さまと接しています。<br><br>特に心がけているのは、既存のお客さまであっても足の採寸を毎回させていただくこと。靴のモデル（木型）が変わるとご案内するサイズも変わりますし、お客さまのライフスタイルやお悩みは一人ひとり異なります。パーソナルなご提案ができるよう、しっかりとカウンセリングを行います。<br><br>それにも通じますが仕事のポリシーとして、主語が常に「お客さま」であるように考えます。「お客さまはあのときなんと仰っていただろう」と振り返ると自ずと答えが見えてくるんです。そしてそれらを自分だけで落とし込むのではなく、店舗のスタッフと共有してスタッフ間のコミュニケーションも重視しています。',
      ),
      array (
        'type' => 'image',
        'filename' => 'img-member-04-p01.jpg',
        'alt' => '',
      ),
      array (
        'type' => 'question',
        'question' => '入社したきっかけを教えてください。',
        'answer' => '私はもともと販売職出身です。前職の会社では婦人服や装飾、メンズスーツなどさまざまな分野の販売全般を12年ほど担当してきました。中でも紳士靴の部署には6〜7年在籍しました。紳士靴の販売が一番やりたかったのですが、ある日その部署がなくなってしまったんです。<br><br>そんなとき有楽町に新しくバーウィックのお店がオープンしたのを見て、「これは！」と思いました。靴も接客も大好きで、どうしても紳士靴の販売に携わりたくて応募しました。バーウィックジャパンに入ってから、靴や革についてより一層知識を深め、お客さまにしっかりとブランドと靴の魅力をお伝えできるように努めています。',
      ),
      array (
        'type' => 'question',
        'question' => '仕事のやりがいや、スカイジャパングループで<br>働いていて良かったと思うことは？',
        'answer' => 'やりがいを感じる瞬間はとても多く、絞り込めないくらいです。たとえばバーウィックの靴を気に入って、シューズクローゼットを一新したいというお客さまから「藤元さんに選んでほしい」と言っていただいてとてもうれしかったのを覚えています。その際は「この色をお持ちでないので追加していきましょう」といったご提案をしました。<br><br>バーウィックの靴はサイズレンジが広いことが特徴なので、ものによっては女性の方にでも履いていただけますし、実際に私も着用しています。以前、ご夫婦がふたりで散歩するためにおそろいの商品を買っていただいたことがあって。そうやってお客さまの毎日の中でバーウィックの靴を愛してもらえることが心からうれしいんです。<br><br>そしてやはり、お客さまから「ありがとう」という言葉をいただく瞬間は、何度経験してもいまだに胸が熱くなりますね。',
      ),
      array (
        'type' => 'question',
        'question' => 'これからの目標はなんですか？',
        'answer' => '入社時は「とにかく販売を頑張るぞ」という心意気でしたが、ここ最近は以前のような自分軸ではなく、ブランドがお客さまにもっと認知され、お客さまの日常にバーウィックがもっと溶け込んでほしいという想いにシフトしています。<br><br>そのためにも、ただ販売するだけではなくプラスアルファで感動体験をしていただける接客を努めています。先程もお話しましたが、足の採寸を必ず行うのは他店ではなかなかできないサービスだと思っています。たとえその日お買い上げにならなかったとしても、必ず“何か”を持ち帰っていただきたい。そんな想いで日々接客に臨んでいます。',
      ),
      array (
        'type' => 'image',
        'filename' => 'img-member-04-p02.jpg',
        'alt' => '',
      ),
    ),
    'timeschedule' => array (
      'question' => '1日の流れを教えてください。',
      'schedule' => array (
        array (
          'class' => '__1000',
          'time' => '10:00',
          'title' => '出勤',
          'detail' => '',
        ),
        array (
          'class' => '',
          'time' => '10:30',
          'title' => '朝礼',
          'detail' => '前日の引き継ぎの共有、伝票の確認、店舗清掃。',
        ),
        array (
          'class' => '__1100',
          'time' => '11:00',
          'title' => '開店',
          'detail' => '販売開始',
        ),
        array (
          'class' => '__1930',
          'time' => '19:30',
          'title' => '定時',
          'detail' => '次の日の担当へ引き継ぎ連絡。店舗を整え退勤。',
        ),
      ),
    ),
    'message' => array (
      'question' => '新入社員へメッセージをお願いします。',
      'answer' => 'バーウィックジャパンには「ONE BJ」という合言葉があって、グループ全体が一丸となって会社を良くしていこうとしている気概をひしひしと感じます。本社、支店、売り場、どこで活躍していても同じ目標に向かっているのは変わりません。「ONE BJ」は、そんな弊社の姿勢を体現した言葉だと思います。<br><br>紳士靴の販売は力仕事というイメージも強くて敬遠されてしまうこともあるのですが、バーウィックではスタッフ全員で協力しながら売り場を作っているので、ひとりに負担がかかることは決してありません。<br><br>一点集中ではなく、一人ひとりの意見が大切なんです。チーム全員で目標に向かって頑張っているので、楽しみながらぜひ一緒に働きましょう。',
    ),
  ),
  array (
    'id' => '4',
    'show' => 'off',
    'name' => '李 新光',
    'company' => 'スカイジャパンコーポレーション株式会社',
    'katagaki' => '二部 生産管理チーム 課長代理 2013年入社',
    'catchphrase' => '自分にとってSKYは<br>“チャレンジする場所”',
    'question' => '社員インタビュー',
    'mainvisual' => array (
      'filename' => 'img-member-02-mv.jpg',
      'alt' => '李 新光',
    ),
    'listvisual' => array (
      'filename' => 'img-member-02.jpg',
      'alt' => '李 新光',
    ),
    'body' => array (
      array (
        'type' => 'question',
        'question' => '二部 生産管理チームではどのような仕事を担当していますか？',
        'answer' => '生産管理チームはその名の通り、商品の量産と商品自体の管理がメインです。<br><br>たとえば量産では商品を大量生産するための材料の仕入れや、生産プロセスの整備などを行います。また生産量が多ければ多いほど商品の不良率も高くなるので、どうやってそれを改善していくのかを考えるのも仕事です。<br><br>私の業務の中でも重要なのがベトナム出張です。コロナ禍でここ数年は不定期でしたが、通常は1〜2カ月に1回といった頻度で出張しています。自分のチームは特に工場の担当者とのやりとりが多いので、現場でのコミュニケーションが大切。課題解決や今後の商品作りの計画を進め、ほかにも各部署のリクエストと工場の意見とをつなげるパイプ役のような動きをしています。',
      ),
      array (
        'type' => 'question',
        'question' => '入社したきっかけを教えてください。',
        'answer' => '私は新卒で入社しました。就職活動ではあえて業界を絞ることなくさまざまな企業を見てきましたが、最終的には大好きだった靴に携わりたいという想いから、スカイジャパンコーポレーションへの入社を決めました。<br><br>大学時代はバスケットボールをしていました。プレイするのと同じくらいバッシュ（バスケットボールシューズ）が大好きで、アメリカで発売される新しいデザインの商品をなんとしても手に入れたくて、アルバイトにも精を出していましたね。<br><br>スカイジャパンコーポレーションの選考で印象に残っているのは、面接官の方と好きな靴の話題で盛り上がったことです。これによって靴好きの人たちと一緒に仕事がしたいという想いがより一層強くなり、ますます入社意欲が高まりました。',
      ),
      array (
        'type' => 'question',
        'question' => '仕事のやりがいや、スカイジャパングループで<br>働いていて良かったと思うことは？',
        'answer' => '自分が生産に関わった商品のクチコミを見て改善ポイントや課題に気付いたので、次の生産で改良したんです。そうしたら、それに気付いてくれたお客さまがいて。小さいかもしれませんが、やってきてよかったと思った瞬間です。<br><br>入社してすぐにはわからなかったのですが、ものづくりって本当に奥が深いんですよね。ひとつひとつ丁寧に改良していけばお客さまが喜ぶし、会社の実力にもなる。積み重ねが重要だと思えたきっかけでした。',
      ),
      array (
        'type' => 'question',
        'question' => 'これからの目標はなんですか？',
        'answer' => 'シューズメーカーとして、会社の規模をもっともっと大きくしていきたいと思っています。もちろん会社はこれまでも成長し続けてきたのですが、事業が大きくなるにつれてそのタイミングに合わせた組織作りや業務の整備も必要になります。<br><br>私にとってスカイジャパンコーポレーションは“チャレンジする場所”。これまで知識不足や文化・考え方の違いでたくさんの失敗を重ねてきましたが、失敗すると同時にチャンスをたくさん与えられてきたと思っています。失敗してもどんどん軌道修正を繰り返して、会社と一緒に自分自身も大きく成長していきたいです。',
      ),
    ),
    'timeschedule' => array (
      'question' => '1日の流れを教えてください。',
      'schedule' => array (
        array (
          'class' => '__0800',
          'time' => '8:00',
          'title' => '集合',
          'detail' => 'スタッフと一緒に車で工場に向かう。',
        ),
        array (
          'class' => '',
          'time' => '9:00',
          'title' => '工場到着',
          'detail' => 'ラウンド（巡回）を行い現場の状況を確認。その後は日本とのMTG。',
        ),
        array (
          'class' => '',
          'time' => '11:30',
          'title' => '昼食',
          'detail' => '食堂でランチ',
        ),
        array (
          'class' => '__1200',
          'time' => '12:00',
          'title' => 'メール対応',
          'detail' => '日本時間で14:00頃なので、日本とのコミュニケーションの時間に充てる。',
        ),
        array (
          'class' => '',
          'time' => '13:00',
          'title' => '工場再稼働',
          'detail' => '開発や量産に合わせてMTGや巡回を行う。工場でのMTGは場所問わず立ち話でフレキシブルにこなす。',
        ),
        array (
          'class' => '__1800',
          'time' => '18:00',
          'title' => '定時',
          'detail' => '退社',
        ),
      ),
    ),
    'message' => array (
      'question' => '新入社員へメッセージをお願いします。',
      'answer' => '当社は、毎日決まったワークをこなして「これだけやればOK」、という会社ではありません。パッションをベースに、多彩な発想を持っていろんなことにチャレンジしたいという人に向いていると思います。<br><br>自分が入社した2013年と今とでは、会社の規模感も業務量も大幅に増え、大きく変化を遂げてきました。会社のフェースが変わってきたからこそ業務の難易度もアップして、個人に求められるレベルも高まってきていると思います。<br><br>そういった変化に対応していける、どんどん吸収できるような方と一緒に働きたいと同時に、自分もそうありたいと思います。',
    ),
  ),
  array (
    'id' => '5',
    'show' => 'on',
    'name' => '矢野 託真',
    'company' => 'BMS株式会社 Berwick事業部',
    'katagaki' => '営業グループ 丸の内店 2022年入社',
    'catchphrase' => '販売員×広告塔<br>選ばれるブランドへ邁進',
    'question' => '社員インタビュー',
    'mainvisual' => array (
      'filename' => 'img-member-yano-mv.jpg',
      'alt' => '矢野 託真',
    ),
    'listvisual' => array (
      'filename' => 'img-member-yano.jpg',
      'alt' => '矢野 託真',
    ),
    'body' => array (
      array (
        'type' => 'question',
        'question' => '営業グループではどのような仕事を担当していますか？',
        'answer' => 'お客さまへの接客販売と、それに付随する商品の在庫管理です。現在は直営店である「Berwick MARUNOUCHI」が主たる所属店舗ですが、「伊勢丹新宿店メンズ館」に配属されていた時期もありました。直営店と百貨店では、客層や売れ筋、周囲の環境などが異なります。入社して2年目ですが、日々幅広い環境で接客経験ができていると感じています。<br>またここ最近は、被写体として公式InstagramやYouTubeでのプロモーションに関わらせてもらっています。特にYouTubeへの出演は、接客の際のトークや立ち振舞いを客観的に見つめ直す経験となりました。ブランドを背負っての出演は緊張しますが、だからといってあまり気負いしすぎず、自然体でいることを心がけています。',
      ),
      array (
        'type' => 'image',
        'filename' => 'img-member-yano-p01.jpg',
        'alt' => '矢野 託真',
      ),
      array (
        'type' => 'question',
        'question' => '入社したきっかけを教えてください。',
        'answer' => '大学で専門的に学んでいた「法律」か、自分が好きな「革靴」か。働くなら、そのどちらかの業界を選びたいと考えていました。<br><br>学生の頃から「Berwick1707(以下、バーウィック)」の革靴を愛用していて、直営店で接客を受けたこともあります。店作りにもこだわりを感じ、シックで落ち着いた雰囲気が好きでした。また店頭で革靴を購入すると、長く大切に履けるようにとプレメンテナンスをしてから渡してもらえるのですが、そのときにかかるブラッシングの音や響きも好きでしたね。<br><br>僕には、接客業の経験も社会人経験もありませんでした。しかし「自分が好きな革靴をもっとたくさんのお客さまに履いてほしい」という想いで、BMSへの入社を決意しました。
        ',
      ),
      array (
        'type' => 'question',
        'question' => '仕事のやりがいや、スカイジャパングループで働いていて良かったと思うことは？',
        'answer' => '自分が担当したお客さまが喜んでくださったときや、来店して「今こんな感じだよ」と革靴の風合いを見せてくださったときなど、やりがいを感じる瞬間はたくさんあります。お客さまとのコミュニケーションが何よりも大切なので、その場でいかにバーウィックの価値を伝えられるか試行錯誤しながら日々の接客に臨んでいます。<br><br>またせっかくの機会なので少し現実的な話にもふれたいと思うのですが、評価制度がしっかり整っていることも僕にとっては嬉しいポイントでした。がんばった分だけ評価や昇給などでフィードバックがあるので、「次はこうしてみよう」、「あれを取り入れてみよう」と常に高いモチベーションで仕事に取り組めています。
        ',
      ),
      array (
        'type' => 'question',
        'question' => 'これからの目標はなんですか？',
        'answer' => '自分の接客スタイルを確立することです。幸いなことに、プロフェッショナルな接客をするメンバーに囲まれて仕事をしているので、言葉の使い方や会話など、良いエッセンスにふれる機会が豊富なんです。<br><br>以前法律の勉強に打ち込んでいたときは、インプットとアウトプットの繰り返しが基本でした。しかしこの仕事においては、アウトプットをする際に自分の解釈を加えることが成長の鍵となります。靴や革の知識、そして魅力的な接客の要素をひとつずつ吸収しながら、自分の接客にどう活かせるかを模索しているところです。<br><br>バーウィックは、日本での展開開始から間もないブランドです。1人でも多くのお客さまにブランドのファンになってもらえるよう、僕自身も研鑽を重ねていきたいです。
        ',
      ),
      array (
        'type' => 'image',
        'filename' => 'img-member-yano-p04.jpg',
        'alt' => '矢野 託真',
      ),
    ),
    'timeschedule' => array (
      'question' => '1日の流れを教えてください。',
      'schedule' => array (
        array (
          'class' => '__0930',
          'time' => '9:30',
          'title' => '出社',
          'detail' => 'この日はYouTubeの撮影があるため、社内のプロモーション担当と共に撮影に使う靴の準備や店の清掃を行う。',
        ),
        array (
          'class' => '',
          'time' => '9:30',
          'title' => 'Youtube<br>撮影開始',
          'detail' => '普段の自然な接客を意識しながら、ていねいに撮影を重ねていく。',
        ),
        array (
          'class' => '__1100',
          'time' => '11:00',
          'title' => '撮影終了<br>〜オープン',
          'detail' => '店のオープンとともに通常営業開始。お客さまの接客にあたる。',
        ),
        array (
          'class' => '__1300',
          'time' => '13:00',
          'title' => 'ランチ',
          'detail' => '食堂でランチ',
        ),
        array (
          'class' => '__1400',
          'time' => '14:00',
          'title' => '午後の販売接客開始',
          'detail' => '',
        ),
        array (
          'class' => '__1930',
          'time' => '19:30',
          'title' => '退社',
          'detail' => '引き継ぎ内容を共有ノートに記入し終業。月末は百貨店の棚卸し応援に行くこともあるが、残業時間は月10時間以内に収まる程度。',
        ),
      ),
    ),
    'message' => array (
      'question' => '新入社員へメッセージをお願いします。',
      'answer' => '僕も意識して実践していることなのですが、 “相手の声に耳を傾けること”を大切にしてほしいなと思います。それは上司や同僚からのアドバイスもそうですが、バーウィックの顔として店頭に立つ際、特に意識しているポイントです。<br><br>僕は接客の際、お客さまとの会話を何よりも大事にしています。どんな靴が自分に合うのか最初はわからずに訪れたお客さまでも、お話を伺っているうちに欲しい靴の輪郭が見えてきます。結果お気に入りの一足に出会ってもらえると、それは僕にとってもかけがえのない瞬間となります。<br><br>「経験がないから」と諦めないでください！努力次第できっと、バーウィックの重要な一員になれるはずです。',
    ),
  ),
  array (
    'id' => '6',
    'show' => 'on',
    'name' => '下村 佳織',
    'company' => 'BMS株式会社',
    'katagaki' => '商品管理グループ 管理チーム 2022年入社',
    'catchphrase' => 'グループの一員としての実感が<br>日々のやりがいにつながっている',
    'question' => '社員インタビュー',
    'mainvisual' => array (
      'filename' => 'img-member-shimomura-mv.jpg',
      'alt' => '下村 佳織',
    ),
    'listvisual' => array (
      'filename' => 'img-member-shimomura.jpg',
      'alt' => '下村 佳織',
    ),
    'body' => array (
      array (
        'type' => 'question',
        'question' => '商品管理グループはどのような仕事を担当していますか？',
        'answer' => '売上管理、海外から入荷した商品の仕入れ計上といった経理業務を中心に、商品管理、委託倉庫とのやりとり、備品管理等の庶務業務など幅広く担当しています。学生のときに簿記の資格を取っていたので、数字に苦手意識はありませんでしたし、前職で販売をしていたときにも売上は見ていたので、これまでの経験が全部活きていると感じます。<br><br>私が普段意識しているのは、広い意味での“業務効率化”です。たとえば相手に伝わりやすいよう、表の出し方や文章にも注意を払います。細かなことですが、こうすることで相手が考える時間を削減できますし、人的ミスを防ぐことで自分の業務もスムーズに進められるんです。<br><br>また既存のツールや方法にとらわれず、より良くできそうだと感じた工程については積極的に改善提案をしています。限られた時間内で質の高いパフォーマンスを発揮できるよう、日々業務にあたっています。',
      ),
      array (
        'type' => 'image',
        'filename' => 'img-member-shimomura-p01.jpg',
        'alt' => '下村 佳織',
      ),
      array (
        'type' => 'question',
        'question' => '入社したきっかけを教えてください。',
        'answer' => 'ファッションが好きだったので、これまでも販売や事務などアパレル業界で仕事をしてきました。アパレルといっても以前はウエアが中心だったため革靴には興味津々で、バーウィックは日本に入ってきてから比較的新しかったこともあり、一緒にブランドを創り上げていきたいと考えました。<br><br>入社して驚いたのは、専門用語の多さでした。ファッション用語には馴染んでいたつもりでしたが、中にはまったく見聞きしたことのない単語があったりして。日々知識が増えていくことを楽しんでいます。',
      ),
      array (
        'type' => 'question',
        'question' => '仕事のやりがいや、スカイジャパングループで働いていて良かったと思うことは？',
        'answer' => '少し地味かもしれませんが、月末の集計で数字がピッタリ合ったときでしょうか（笑）<br>どうしても入力ミスや報告間違いで誤差が出てしまうことはありますが、それらを減らすための改善は惜しみません。<br><br>また以前上司から依頼されたデータを提供して、「わかりやすい！」と喜んでもらえたことがとてもうれしかったです。関数を利用して必要な情報を一覧できるようなツールを新たに作ったのですが、評価してもらえたのはやりがいを感じた瞬間でした。<br><br>これまで経験してきた会社は社員数が多かったので、スカイジャパングループの少数精鋭の体制に最初は不安を感じていました。しかし人数が少ないからこそ風通しが良くて、情報共有がとてもスピーディ。「自分も一員なんだ」という感覚がダイレクトにあって、日々やりがいを感じています。',
      ),
      array (
        'type' => 'question',
        'question' => 'これからの目標はなんですか？',
        'answer' => '現在は経理に携わっていますが、財務の知識をもっと身につけ、“経理財務のプロフェッショナル”を目指したいです。簡単にいうと、経理の仕事はお金の流れの管理、そして財務は戦略立案や予算管理、資金調達を行う仕事です。<br><br>先程もお話しましたが、スカイジャパングループは基本的に少数精鋭なので、一人ひとりの裁量が大きいです。だから、会社に財務を見ることができるメンバーがひとりでも多くいることはメリットだと思っています。最近バーウィックではレディースラインの取り扱いが始まりました。今後も拡大を続けていくブランドとともに自分自身も成長できるよう、頑張っていきたいと思います。',
      ),
      array (
        'type' => 'image',
        'filename' => 'img-member-shimomura-p04.jpg',
        'alt' => '下村 佳織',
      ),
    ),
    'timeschedule' => array (
      'question' => '1日の流れを教えてください。',
      'schedule' => array (
        array (
          'class' => '__0930',
          'time' => '9:30',
          'title' => '出勤',
          'detail' => '入金確認、メールチェック、売上確認と計上を行う。EC店や百貨店に当日出荷する商品に変更がないかを確認し、倉庫と連携をとる。',
        ),
        array (
          'class' => '__1200',
          'time' => '12:00',
          'title' => 'ランチ',
          'detail' => '会社近くに日替わりのキッチンカーがやってくるので、ランチが楽しみ。',
        ),
        array (
          'class' => '__1300',
          'time' => '13:00',
          'title' => '午後の<br>業務開始',
          'detail' => '請求書確認などを行う。申請された出荷数や納品書の確認があり、倉庫に情報共有。倉庫からは当日出荷分の連絡があるので内容を確認。',
        ),
        array (
          'class' => '',
          'time' => '18:30',
          'title' => '退社',
          'detail' => '',
        ),
      ),
    ),
    'message' => array (
      'question' => '新入社員へメッセージをお願いします。',
      'answer' => 'スカイジャパングループを一言で表すと「多様性」だと思います。メンバーは多国籍でさまざまな背景を持った方が働いていて、男女比率もほぼ半々。風通しも良いので、「こうしたら現状がより良くなるんじゃないか」といった意見はおそれずにどんどん発言していってほしいと思います。<br><br>柔軟性がある方、責任感がある方、チャレンジ意欲がある方にはうってつけの環境なのではないでしょうか。新しい風を吹き込んでくれる方、ぜひ一緒に働きましょう！',
    ),
  ),
  array (
    'id' => '7',
    'show' => 'off',
    'name' => '大岩 真弓',
    'company' => 'スカイジャパンコーポレーション株式会社',
    'katagaki' => 'プロダクトチーム 2021年入社',
    'catchphrase' => '縫製技術と開発企画の二刀流で<br>チームバリューを高めたい',
    'question' => '社員インタビュー',
    'mainvisual' => array (
      'filename' => 'img-member-ooiwa-mv.jpg',
      'alt' => '大岩 真弓',
    ),
    'listvisual' => array (
      'filename' => 'img-member-ooiwa.jpg',
      'alt' => '大岩 真弓',
    ),
    'body' => array (
      array (
        'type' => 'question',
        'question' => 'プロダクトチームではどのような仕事を担当していますか？',
        'answer' => '靴の開発を担当しています。お取引先ブランドからのデザイン依頼をもとにまずは仕様書を書き起こし、複数回のサンプル開発を経て、最終的に商品化直前のサンプルを作り上げていくのが主な仕事の流れです。<br><br>一方で、お客様から直接ヒアリングさせていただく機会も多く、ニーズに踏み込んだコミュニケーションで追加発注につなげることができるのも特徴です。',
      ),
      array (
        'type' => 'image',
        'filename' => 'img-member-ooiwa-p01.jpg',
        'alt' => '大岩 真弓',
      ),
      array (
        'type' => 'question',
        'question' => '入社したきっかけを教えてください。',
        'answer' => '「靴ってどうやって作られているんだろう？」
        そんな疑問を抱き、働きながらシューズデザインの専門学校に通ったことが靴づくりのキャリアのはじまりでした。専門学校修了後は靴メーカーに転職して、希望通り靴の製造に携わりました。<br><br>ジョブチェンジして15年ほど経ったタイミングでコロナ禍に突入し、当時勤めていた会社もあおりを受けました。それを機に一念発起して、IllustratorとPhotoshopを学ぶ職業訓練校へ。講義とインターン合わせて4か月しっかりと学びました。<br><br>そんな折に、スカイジャパンコーポレーションと出会いました。スカイは、商社でもありメーカーでもあるという珍しいビジネスモデルを取っています。また少数精鋭でしたので靴作りの専門知識がある私の経験がハマると考えました。',
      ),
      array (
        'type' => 'question',
        'question' => '仕事のやりがいや、スカイジャパングループで<br>働いていて良かったと思うことは？',
        'answer' => '2D（仕様書）から3D（シューズサンプル）ができあがる瞬間は、何度経験しても感慨深いものがあります。お客様からの難易度高めの希望に応え、スケジュールをハンドリングして仕上げることができたときにもやりがいを感じますし、「大岩さんがいて良かった」と言っていただけたときは本当にうれしいです。<br><br>前職までは製造担当者としての側面が強かったのですが、スカイでは企画営業担当者としての関わり方がメインで、製造や開発のみならず事業面を見つめることができるので、とても面白いです。',
      ),
      array (
        'type' => 'question',
        'question' => 'これからの目標はなんですか？',
        'answer' => 'まだ今はがむしゃらになって業務をこなしている状態なので、周りを見渡しながら仕事ができるようになるのが直近の目標です。靴は、真っ白な紙の上に企画が描かれることによってはじめて仕様書になり、形作られていきます。<br><br>どうやったら自分の業務の先の工程にいる仲間にスムーズにつないでいけるか、どうしたらお客様に満足していただけるか、そこを俯瞰してまとめられるようなスキルを伸ばし、チームバリューにつなげていきたいと思います。',
      ),
      array (
        'type' => 'image',
        'filename' => 'img-member-ooiwa-p04.jpg',
        'alt' => '大岩 真弓',
      ),
    ),
    'timeschedule' => array (
      'question' => '1日の流れを教えてください。',
      'schedule' => array (
        array (
          'class' => '__0930',
          'time' => '9:30',
          'title' => '出勤・始業',
          'detail' => 'メールのチェック。お客様から届いた希望・与件をもとに仕様書を書き起こし、工場にサンプル依頼。',
        ),
        array (
          'class' => '__1200',
          'time' => '12:00',
          'title' => 'ランチ',
          'detail' => 'ランチはキッチンカーに買いに行くことが多い。この時間に海外便の荷物が届くことも。',
        ),
        array (
          'class' => '',
          'time' => '13:00',
          'title' => '午後の
          業務開始',
          'detail' => '海外便で届いたサンプルに対して、仕様間違いがないかくまなくチェック。アフターケアや仕上げ直しなどを行い、お客様へ発送。',
        ),
        array (
          'class' => '',
          'time' => '18:00',
          'title' => 'メールチェック',
          'detail' => 'サンプルの発送業務を終え、一呼吸。メールチェックや、翌日の依頼書作成を行う。',
        ),
        array (
          'class' => '__1900',
          'time' => '19:00',
          'title' => '退勤',
          'detail' => '',
        ),
      ),
    ),
    'message' => array (
      'question' => '新入社員へメッセージをお願いします。',
      'answer' => 'スカイの企業理念「G4＋1」は、「Good for Staff, Supplier, Customer and The Future ＋１– Good Shoes」を示したものです。目の前の業務の先には、形作られるプロダクトがあって、それを待っている誰かがいることを意識すると、スカイでの仕事はより一層楽しくなると思います。<br><br>スカイジャパンコーポレーションは、変わり続ける会社です。ぜひ一緒に、その変化を楽しんでみませんか？',
    ),
  ),
  array (
    'id' => '8',
    'show' => 'on',
    'name' => '藤原 祥代',
    'company' => 'スカイジャパンコーポレーション株式会社',
    'katagaki' => 'ロジスティクスチーム 2022年入社',
    'catchphrase' => 'キャリアも性別も関係なく<br>信頼して任せてもらえる会社',
    'question' => '社員インタビュー',
    'mainvisual' => array (
      'filename' => 'img-member-fujiwara-mv.jpg',
      'alt' => '藤原 祥代',
    ),
    'listvisual' => array (
      'filename' => 'img-member-fujiwara.jpg',
      'alt' => '藤原 祥代',
    ),
    'body' => array (
      array (
        'type' => 'question',
        'question' => 'ロジスティクスチームはどのような仕事を担当していますか？',
        'answer' => '貿易事務として、自社で扱う商品の物流を最適化するための実務を担当しています。具体的には、靴を運搬する船や飛行機のブッキング（予約）、船積書類やパッキングリスト（梱包明細書）の作成・チェック、現地との仲介をしてくれるフォワーダーとのやりとりなど。レスポンスのスピード感を意識して取り組んでいます。<br>今の業務は大半が海外とのやりとりになるため、毎日英語で、幅広く貿易事務に携わっています。',
      ),
      array (
        'type' => 'image',
        'filename' => 'img-member-fujiwara-p01.jpg',
        'alt' => '藤原 祥代',
      ),
      array (
        'type' => 'question',
        'question' => '入社したきっかけを教えてください。',
        'answer' => '前職は、大手鉄鋼メーカーの営業事務でした。ルーティン化された仕事をこなす日々で、女性の事務員にはキャリアアップのシステムがないことに気付きました。9年間働きましたが、「もっと実力で評価してもらいたい」と考え、転職を決意しました。<br><br>スカイジャパンコーポレーションは変化を続けていく会社で、「変わりたい」と切望していた自分にピッタリだと感じました。また、学生のころから好きだった英語を活かせる貿易事務に挑戦できることも、入社の決め手となりました。',
      ),
      array (
        'type' => 'question',
        'question' => '仕事のやりがいや、スカイジャパングループで<br>働いていて良かったと思うことは？',
        'answer' => '入社して間もない私でも、メンバーのひとりとして議論に参加させてもらえることです。でもそれって、若手に丸投げという意味ではありません。<br><br>先輩方がそれぞれ責任感のある仕事を背中で見せてくれますし、新人が前に出られるという環境は、先輩方がバックでサポートしてくれる体制が整っているからこそ。前線でグループに関われているという実感があり、責任感が芽生えました。',
      ),
      array (
        'type' => 'question',
        'question' => 'これからの目標はなんですか？',
        'answer' => '通関でイレギュラーが起きても冷静に対応できるよう、英語力や貿易実務のスキルアップを続けていくことです！<br><br>そもそも貿易事務は未経験の職種だったので、船の予約だけでなく全てが初めての経験でした。特に専門用語が難しくて、慣れるのにも時間がかかりましたが、先輩方が貿易関連の勉強会を開いてくださったり、自分で資格の勉強をしたりして、ゼロから新しい知識を身につけることができました。<br><br>今でも出勤中のスキマ時間を利用して、少しずつ勉強を進めています。先日は貿易実務検定C級に合格したので、次はB級を目指したいです。',
      ),
      array (
        'type' => 'image',
        'filename' => 'img-member-fujiwara-p04.jpg?ver=1.1',
        'alt' => '藤原 祥代',
      ),
    ),
    'timeschedule' => array (
      'question' => '1日の流れを教えてください。',
      'schedule' => array (
        array (
          'class' => '__0915',
          'time' => '9:15',
          'title' => '出社',
          'detail' => '貿易実務検定の勉強時間にあてるなどして、出勤時間を有意義に使う。',
        ),
        array (
          'class' => '',
          'time' => '9:30',
          'title' => '始業',
          'detail' => 'メールチェックのほか、社内ポータルで申請書類や海外送金の確認。',
        ),
        array (
          'class' => '',
          'time' => '10:30',
          'title' => 'ミーティング',
          'detail' => '靴の生産状況、船ブッキング（予約）の進捗、スケジュールなどを報告。',
        ),
        array (
          'class' => '__1200',
          'time' => '12:00',
          'title' => 'ランチ',
          'detail' => '',
        ),
        array (
          'class' => '',
          'time' => '13:00',
          'title' => '午後の<br>業務開始',
          'detail' => '海外送金の手配、請求書や船積書類の作成・チェックなど、スケジュール管理や申請に関する事務作業をこなす。',
        ),
        array (
          'class' => '__1900',
          'time' => '19:00',
          'title' => '退勤',
          'detail' => '',
        ),
      ),
    ),
    'message' => array (
      'question' => '新入社員へメッセージをお願いします。',
      'answer' => 'スカイは、年齢や経験関係なく自分だけの役割を見つけられる会社です。挑戦を続ける社風で、かつ先輩方もそれぞれが最高のパフォーマンスを発揮しているので、成長意欲や上昇志向の強い方にはうってつけの環境だと思います。<br><br>会社の規模も、ブランドのラインナップも、どんどん進化を続けていくスカイで、一緒に働きませんか？変化を楽しめる方、お待ちしています。',
    ),
  ),
  // array (
  //   'id' => '3',
  //   'name' => '澤田 恭兵',
  //   'company' => 'スカイジャパンコーポレーション株式会社',
  //   'katagaki' => '二部  2021年入社',
  //   'catchphrase' => '「好き」が追求できる環境で<br>自分自身も大きく成長中',
  //   'question' => '社員インタビュー',
  //   'mainvisual' => array (
  //     'filename' => 'img-member-03-mv.jpg',
  //     'alt' => '澤田 恭兵',
  //   ),
  //   'listvisual' => array (
  //     'filename' => 'img-member-03.jpg',
  //     'alt' => '澤田 恭兵',
  //   ),
  //   'body' => array (
  //     array (
  //       'type' => 'question',
  //       'question' => '二部ではどのような仕事を担当していますか？',
  //       'answer' => '私の部署ではOEMの発注から生産、販売までをメインで行っています。OEMとはOriginal Equipment Manufacturing、つまり他社のブランド製品を製造すること。OEMはスカイジャパングループの事業の柱のひとつです。<br><br>現在は、シューズの勉強も兼ねてベトナムにあるホーチミン事務所に出張中です。ひとつの靴が出来上がるまでのあらゆる工程――たとえば生地の裁断から縫製、加工に至るまで、一通りの靴作りについて学んでいるところです。',
  //     ),
  //     array (
  //       'type' => 'image',
  //       'filename' => 'img-member-03-p01.jpg',
  //       'alt' => '',
  //     ),
  //     array (
  //       'type' => 'question',
  //       'question' => '入社したきっかけを教えてください。',
  //       'answer' => '私の現在の所属はスカイジャパンコーポレーションですが、最初はバーウィックジャパンに応募しました。バーウィックジャパンの選考中に、スカイジャパンコーポレーションのOEM事業部の募集があることを人事の方から教えていただき、興味を持って応募したのが入社のきっかけです。<br><br>学生時代からずっとファッションが好きでした。特に革靴が大好きで「Berwick1707」の靴も持っていました。前職ではファッションと全く関係のない機械系メーカーで営業をしていましたが、次はアパレル業界で好きなことを追求しながら働きたいと思っていたんです。<br><br>スカイジャパンコーポレーションのOEM事業の取り組みを知るうちに、革靴だけでなく大手アウトドアメーカーの靴やスニーカーなど、より幅広いシューズファッションに携われることに魅力を感じ、入社を決めました。',
  //     ),
  //     array (
  //       'type' => 'question',
  //       'question' => '仕事のやりがいや、スカイジャパングループで<br>働いていて良かったと思うことは？',
  //       'answer' => '企画段階から見てきた靴がさまざまな工程を経てひとつの形になり、商品としてお客様の手元に届くこと。これが一番のやりがいにつながっています。企画から商品として靴が世に出るまで、1年以上の時間を要します。生産に携わった靴を履いている人を実際に街中で見かけたとき、それが頑張ってよかったと思える瞬間ですね。<br><br>とはいえ日々もちろん大変なことはあります。たとえば仕事で海外に長期出張するのは初めての経験だったので、ベトナム駐在は楽しみ半分・不安半分でした。ベトナム人スタッフに伝えたいことがうまく伝えられずに苦労したことも。でも現場ではコミュニケーションが命なので、翻訳アプリを使ったりジェスチャーを交えたりして、伝えたいことを諦めない姿勢を大事にしました。<br><br>現場で靴が作られていく工程を体験したことで現場の状況が肌感覚でわかるようになったので、商品生産のスケジュール管理の解像度が上がったと実感しています。この出張は自分にとって大きな財産ですし、今後の仕事に活かしていきたいと思います。',
  //     ),
  //     array (
  //       'type' => 'question',
  //       'question' => 'これからの目標はなんですか？',
  //       'answer' => '最初は、憧れていたアパレル業界に携われること、同時に良い商品を世に発信し続けることを目標に入社しました。入社して1年と少し経ちましたが、大筋の目標は変わっていません。<br><br>ただ今後は、もっとミクロな視点でスキルアップを目指して、1日でも早く会社に貢献していきたいという気持ちが強くなりました。たとえば海外の人とのやりとりが多いので英語力の向上は喫緊の課題ですし、お客様とのコミュニケーションにおいてはもっともっと靴の知識を修得したいです。<br><br>会社には、学ぶ意欲に対する補助制度があります。TOEICの受験料補助もあるので、取り急ぎスコアアップを目指して頑張ります。',
  //     ),
  //   ),
  //   'timeschedule' => array (
  //     'question' => '1日の流れを教えてください。',
  //     'schedule' => array (
  //       array (
  //         'class' => '__0915',
  //         'time' => '9:15',
  //         'title' => '出社',
  //         'detail' => 'オフィスの掃除',
  //       ),
  //       array (
  //         'class' => '',
  //         'time' => '9:30',
  //         'title' => '始業',
  //         'detail' => '国内外から発送した商品（荷物）の追跡確認をして、流通が正常に行われているかを把握',
  //       ),
  //       array (
  //         'class' => '',
  //         'time' => '10:30',
  //         'title' => '定例MTG',
  //         'detail' => '火曜日と金曜日は会議に参加。開発と生産のカテゴリに分かれ、問題の報告と課題解決に関する情報整理を図る',
  //       ),
  //       array (
  //         'class' => '__1200',
  //         'time' => '12:00',
  //         'title' => 'ランチ',
  //         'detail' => '',
  //       ),
  //       array (
  //         'class' => '',
  //         'time' => '13:00',
  //         'title' => '発注業務など',
  //         'detail' => '発注業務や、サンプルのスケジュール管理など。海外事業所や工場の担当者、材料メーカーとのやりとりなども行う。',
  //       ),
  //       array (
  //         'class' => '__1830',
  //         'time' => '18:30',
  //         'title' => '定時',
  //         'detail' => '退社',
  //       ),
  //     ),
  //   ),
  //   'message' => array (
  //     'question' => '新入社員へメッセージをお願いします。',
  //     'answer' => 'スカイジャパングループで働く上で大事にしてほしいものは、ふたつあります。ひとつは、ファッションや靴など好きなものに対する想い。「好き」を追求できるフィールドなので、その軸は忘れないでほしいです。そしてふたつ目は素直さです。仕事に対する向き合い方として単純に新しい視点が吸収しやすくなりますし、わからないことをそのままにしないこと、これができれば周りの先輩もサポートしてくれますし、のびのびと成長できる環境だと思います。<br><br>また、生産に携わるのであればベトナム出張は業務上必須です。日本だけでなく海外と仕事ができるのは大きな経験になりますよ！',
  //   ),
  // ),

);























$about = array (
  'link' => 'about',
  'title' => 'ABOUT',
  'title_jp' => 'SHサンキョウについて',
  'image' => array (
    array (
      'file' => 'img-about-top_01.jpg',
      'alt' => 'SHサンキョウについて',
    ),
  ),
);

$about_tabs = array (
  array (
    'link' => 'about-message',
    'title' => 'MESSAGE',
    'title_jp' => '会社からのメッセージ',
    'class' => 'p-about__message',
  ),
  array (
    'link' => 'about-feature',
    'title' => 'FEATURE',
    'title_jp' => 'SHサンキョウの強み',
    'class' => 'p-about__feature',
  ),
  array (
    'link' => 'about-history',
    'title' => 'HISTORY',
    'title_jp' => '沿革(ヒストリー)',
    'class' => 'p-about__history',
  ),
  array (
    'link' => 'about-profile',
    'title' => 'PROFILE',
    'title_jp' => '会社概要',
    'class' => 'p-about__profile',
  ),
);

$about_tabs_massage = array (
  'title' => '社員が皆、自信を持って自慢できる会社。<br>これが、私がめざすエスエッチ・サンキョウです。',
  'description01' => '当社は、1987年造船不況で市全体が暗いムードになっていた造船の町、広島県因島市(当時)に、大阪から、この造船の町で全く新しい事業をやってやろうとやってきました。スタートは、大阪でやっている樹脂の押出成形と当時住宅の内装建材分野で急激な普及を始めたシート貼り建材の製造です。シート貼り建材の製造については全くのゼロからのスタートでした。<br><br>スタート当時、元造船会社勤務の素人人間10人位で、先輩会社の工場見学等の見よう見まねでやってきて、現在は100名を超える従業員数となり、住宅建材業界では名前だけ知っているよと言われるまでになることが出来ました。<br><br>ここまで成長させていただいた根本であり、社員たちにも伝え続けてきたことが以下の2点です。',
  'description02' => '<br>いい会社をめざしてもうすぐ30年、これからもより一層の精進を続け、一歩一歩理想に近づいていきたいと思っています。',
  'president' => '代表取締役　池田 隆',
  'list' => array (
    '常に自分の仕事は、決して大企業にも負けないという自信とプライドを持ってチャレンジしなさい。',
    '仕事で失敗すること多いに結構。但し失敗を糧として次の仕事につなげる努力をして成果を挙げなさい。',
  ),
);
$about_tabs_feature = array (
  array (
    'num' => '01',
    'title' => '樹脂も木も扱える技術力',
    'description' => '多種多様な建材・部材を製造している当社のまず挙げられる強みは、「樹脂（プラスチック）」も「木」も扱えるということ。堅くて水に強い樹脂、加工しやすく低コストの木、それぞれの長所を活かして製品づくりをしています。また、樹脂と木を組み合わせたハイブリッド製品も開発しており、用途に応じた建材を提供することができます。',
    'image' => array (
      'file' => 'img-about-feature_01.jpg',
      'alt' => '樹脂も木も扱える技術力',
    ),
  ),
  array (
    'num' => '02',
    'title' => 'ニーズに応える仕組みを創造',
    'description' => 'お客様とダイレクトにやりとりをすることで、本当のニーズが見えてきます。密接にお客様とタッグを組んで、ニーズを解決するためのアイデアを出し合い、それをカタチにして画期的な仕組みや生産ラインを創ってきました。私たちはただ製品を作るのではなく、ニーズに応える仕組みや設備、それ自体を生み出しているのです。',
    'image' => array (
      'file' => 'img-about-feature_02.jpg',
      'alt' => 'ニーズに応える仕組みを創造',
    ),
  ),
  array (
    'num' => '03',
    'title' => '職人技とIT技術の融合',
    'description' => '当社では、生産する製品に合わせて都度、工場のラインを組み替えます。ラインの機械の部品を製品の形状に合わせてセッティングするのは、人の手と経験による緻密な職人技。一方、在庫や受注についてミスなく効率よく管理できるように、早くからコンピュータシステムでの管理体制を導入。職人技とIT技術の融合で、お客様のニーズに応えています。',
    'image' => array (
      'file' => 'img-about-feature_03.jpg',
      'alt' => '職人技とIT技術の融合',
    ),
  ),
  array (
    'num' => '04',
    'title' => 'お客様に在庫が発生しない単納期システム',
    'description' => '加工途中の“仕掛かり品”をストックしておき、受注と在庫をシステム管理することで、注文を受けてから納品までスピーディに対応。さらに、現場へ部材を直接納品できる当社独自の仕組みを確立し、圧倒的な短納期を実現しています。お客様自身は在庫を抱えることなく、必要なときに必要な数だけ必要な部材を発注することができます。',
    'image' => array (
      'file' => 'img-about-feature_04.jpg',
      'alt' => 'お客様に在庫が発生しない単納期システム',
    ),
  ),
  array (
    'num' => '05',
    'title' => '完成度の高い製品を提供',
    'description' => '自動加工機などを駆使して、従来は現場で加工している部分を当社で先に加工し、使いやすい状態にした部材を出荷しています。加工度の高い製品を提供するため、現場での大工職人の負担軽減、工期の短縮などにもつながっています。',
    'image' => array (
      'file' => 'img-about-feature_05.jpg',
      'alt' => '完成度の高い製品を提供',
    ),
  ),
);


$about_tabs_history = array (
  array (
    'num' => '01',
    'title' => '母体である三協化工の 創設期〜因島への進出',
    'description' => array (
      'エスエッチ・サンキョウのルーツは、昭和40年に設立された三協化工株式会社です。三協化工は、大阪・平野区に工場を構え、樹脂の異形押出成型品を製造していました。食器棚のレール、家庭用電灯の傘の部品、学習机の高さ調節用パーツなど、多様なプラスチック押出成型フィルム製品を扱っており、このノウハウが後にエスエッチ・サンキョウにも引き継がれることになります。',
      '昭和62年末、三協化工は、家具金物などを扱う株式会社シモオカとの共同出資で、エスエッチ・サンキョウ株式会社を設立。これは、プラスチック押出成型品に加えて新たな事業として木工フィルム製品へ取り組み、既存の取引先へ新製品として販売しつつ住宅家具分野への営業も促進するためでした。余談ですが、当社の社名にあるSHとは、シモオカ・ハードウェア（Shimooka Hardware）の頭文字に由来しています。',
      '設立と時を同じくして、エスエッチ・サンキョウは因島を拠点とすることになりました。それ以前の因島では造船が盛んでしたが、造船不況に見舞われた後は多くの人が職を失っており、そのマンパワーを当社で活かすために因島へ進出したのです。こうして、エスエッチ・サンキョウの歴史が因島で幕を開けました。',
    ),
    'image' => array (
      'file' => 'img-about-history_01.jpg',
      'alt' => '母体である三協化工の 創設期〜因島への進出',
    ),
  ),
  array (
    'num' => '02',
    'title' => '木工フィルム製品への 取り組みと大きな決断',
    'description' => array (
      '約15名でスタートした当社。新たな分野への取り組みは決して順風満帆ではありませんでした。三協化工が手掛けていたプラスチック押出成型の技術は活かせるのですが、これから広げていきたい木工フィルムの製造ノウハウはほぼ皆無。フィルムで化粧する製品といっても、樹脂をラッピングするのか木質をラッピングするのかで作り方は異なります。木工フィルムのノウハウを持っている当時の取引先にお願いして従業員をあずかってもらい、まずその習得に励みました。',
      '設立後しばらくして、木工にも樹脂にも対応できるという強みを活かせるようになり、シモオカの取引ルートで部品の注文も徐々に増加。とはいえ、オーダーのボリューム自体は他社に比べると少なく、かけた手間と時間の割には作っても作っても売上が伸びないという状況が続きました。なんとか打破しなければ…。より効率のよい生産体制にするために、まず大きな仕事を受注する必要性がありました。そして平成2年、シモオカとの合弁を解消し、家具金物の部品ではなく、新たな販路開拓の道へ進むことを決断。ここから建材メーカーとの直接取引が始まることになります。',
    ),
    'image' => array (
      'file' => 'img-about-history_02.jpg',
      'alt' => '木工フィルム製品への 取り組みと大きな決断',
    ),
  ),
  array (
    'num' => '03',
    'title' => '建材メーカーとの直接取引で培われてゆく強み',
    'description' => array (
      '大きな仕事を取りにいくためには、どこに営業をかけるかがポイントでした。目を付けたのが住宅の建材メーカー。当時の業界では、当社のような小さな部材屋が建材メーカーと直接取引するというのは例を見ないことでした。様々な紆余曲折を乗り越えて営業した末、それまでの常識を覆し、とある建材メーカーとの直取引ルートを拓くことができたのです。',
      '建材メーカーと直接取引するということは、建材の部品を供給するだけでなく、最終製品化にもトライするということ。しかも、建材メーカーのニーズに合わせて、大小さまざまなロット数の多種多様な製品づくりに対応する必要があったのです。多様な製品ニーズに自社内ですべて対応するために、社内在庫・受注をコンピュータで管理するシステムを業界に先駆けていち早く導入。また、作る製品に合わせて工場ラインのマシンのセット替えを迅速に行なう必要があったので、そのノウハウも蓄積されました。これらが結果的に、当社の強みになっていくのです。',
    ),
    'image' => array (
      'file' => 'img-about-history_03.jpg',
      'alt' => '建材メーカーとの直接取引で培われてゆく強み',
    ),
  ),
  array (
    'num' => '04',
    'title' => 'お客様のニーズに応える画期的システムを続々開発',
    'description' => array (
      'ダイレクトに建材メーカーと取引をするメリットは他にもありました。直接会話をすることでお客様のニーズ（ひいては建築現場や市場のニーズ）を的確に捉えることができたのです。それらのニーズに応えるために、従来なかった画期的で新しいやり方やシステムを考案。以下のようなものを提供してきました。<dl><dt>IPシステム</dt><dd>建材メーカーからの多様な注文に迅速に対応するため、コンピュータによる管理を取り入れたIPシステムを開発・導入。作り置きの半製品をストックしておき、受注するたびに必要な製品だけ仕上げてセットで納品。建材メーカーの在庫を削減できる仕組みです。</dd><dt>全自動引戸枠加工機ライン（平成14年）</dt><dd>加工データを入力すると自動で製造される引戸枠専用のラインを開発。生産効率の大幅アップにつながり、当時では前例のない画期的な取り組みでした。</dd><dt>ジャストカット窓枠の専用ライン（平成14年）</dt><dd>現場での施工負担の軽減と作業効率アップのため、窓枠をきちんとした寸法に加工してサッシメーカーへ出荷。</dd><dt>住宅メーカー向け完全邸別生産ラインの構築（平成17年）</dt><dd>住宅メーカーの要望で、窓枠・枠材の邸別出荷を開始。現場のスタッフも含めてアイデアを出し合い、試行錯誤の結果、専用モルダーを独自開発しました。</dd><dt>現場への直送システム開発</dt><dd>よりスピーディな納品を実現するために、物流面の改革にも着手。オーダーから出荷までをシステムで管理し、製品ごとに現場へ直送できるフローを作り上げました。</dd></dl>',
    ),
    'image' => array (
      'file' => 'img-about-history_04.jpg',
      'alt' => 'お客様のニーズに応える画期的システムを続々開発',
    ),
  ),
);





$about_tabs_profile = array (
  array (
    'title' => '会社名',
    'data' => 'エスエッチ・サンキョウ株式会社',
  ),
  array (
    'title' => '創業',
    'data' => '昭和62年12月',
  ),
  array (
    'title' => '業務内容',
    'data' => 'ラッピング製品の製造販売<br>Vカット製品の製造販売<br>住宅用各種部材、部品の製造販売',
  ),
  array (
    'title' => '代表者',
    'data' => '池田 隆',
  ),
  array (
    'title' => '社員数',
    'data' => '118名',
  ),
  array (
    'title' => '資本金',
    'data' => '9600万円',
  ),
  array (
    'title' => '所在地',
    'data' => '<ul><li>本社・本社工場<br>〒722-2211<br>広島県尾道市因島中庄町文久新開4895-15<br>TEL：0845-24-3381　FAX：0845-24-3380</li><li>加西事業所<br>〒675-2431<br>兵庫県加西市島町238番地<br>TEL：0790-27-8568　FAX：0790-27-8630</li><li>浦崎事業所<br>〒720-0551<br>広島県尾道市浦崎町1852-1<br>TEL：0848-73-3601　FAX：0848-73-2791</li><li>岸和田事業所<br>〒596-0011<br>大阪府岸和田市木材町17番地2<br>TEL：072-430-6660　FAX：072-430-6668</li></ul>',
    ),
  array (
    'title' => '関連会社',
    'data' => '<ul><li>三協化工株式会社（本社・大阪工場）<br>〒547-0001<br>大阪市平野区加美北6丁目2番22号<br>TEL：06-6792-6825　FAX：06-6793-6200</li><li>三協化工株式会社（因島工場）<br>〒722-2211<br>広島県尾道市因島中庄町文久新開4895-17<br>TEL：0845-24-3384　FAX：0845-26-2000</li><li>株式会社サンキョウエポック<br>〒113-0034<br>東京都文京区湯島3-37-4<br>HF湯島ビルディング1F<br>TEL：03-5807-8160　FAX：03-3836-1033</li><li>イケモク株式会社<br>〒322-0252<br>栃木県鹿沼市加園1085<br>TEL：0289-60-7700　FAX：0289-60-7701</li></ul>',
    ),
  array (
    'title' => '主要取引先<br>(五十音順)',
    'data' => '旭化成ホームズ（株）<br>積水ハウス（株）<br>大建工業（株）<br>ナスラック（株）<br>南海プライウッド（株）<br>パナホーム（株）<br>三井ホーム（株）<br>LIXIL（株）',
  ),
);




$product = array (
  'link' => 'product',
  'title' => 'PRODUCT',
  'title_jp' => '製品紹介',
  'image' => array (
    array (
      'file' => 'img-product-top_01.jpg',
      'alt' => '製品紹介',
    ),
  ),
  'catchphrase' => array (
    'エスエッチ・サンキョウの作る『枠』は、',
    '日常の空間の中で、',
    '様々なものに使われています。',
  ),
  'description' => '',  
);
$product_body = array (
  array (
    'number' => '01',
    'title_jp' => 'シート階段',
    'description' => 'これまでにはなかった、樹脂と木材を組み合わせた階段ユニット。専用の製造ラインを構築し、次なるエスエッチ・サンキョウの柱にしようと現在最も力を入れている事業です。<br>完全プレカットに対応すべく、側板加工の設備としてNC3台を有し、2000セット～3000セット/月の生産が可能。<br>廻踏板については、プレス方式での生産を実施。ロット性の高いものと多品種小ロットを分けて生産することで、生産効率を上げお客様のニーズに合わせて生産しています。プレス方式としては他社にない製造方法を考案し、設備も新規に立ち上げました。',
    'image' => array (
      'file' => 'img-product-body_01.jpg',
      'alt' => 'シート階段',
    ),
  ),
  array (
    'number' => '02',
    'title_jp' => '階段巾木',
    'description' => '従来は現場で大工職人が加工していた階段の巾木ですが、省施工を実現するために弊社で事前に加工し、ユニットとして現場へ提供しています。<br><br>意匠性の高い巾木の生産を目指し、水平方向部材と垂直方向部材の一体型のL字型巾木を設計・開発。シートラッピング材での巾木では木口処理が弱点でしたが、Vカット技術を取り入れることで立体的な成形を可能にしました。<br><br>現在では、階段の施工ズレを吸収できるような巾木も開発中。さらなる製品開発に注力しています。',
    'image' => array (
      'file' => 'img-product-body_02.jpg',
      'alt' => '階段巾木',
    ),
  ),
  array (
    'number' => '03',
    'title_jp' => '窓枠(ジャストカット)',
    'description' => '窓枠のジャストカット化が進む中、いち早くシステム化に着手し、かつ従来の生産方式の見直しに取り組んだことで、生産リードタイムの短縮を実現。<br>短納期ならびに低コストでの生産を可能にしました。',
    'image' => array (
      'file' => 'img-product-body_03.jpg',
      'alt' => '窓枠(ジャストカット)',
    ),
  ),
  array (
    'number' => '04',
    'title_jp' => 'ハイブリッド敷居',
    'description' => 'グループ企業に樹脂押出製品メーカー(三協化工)があり、同一工場敷地内に樹脂押出製造設備を有しているという利点を生かし、業界初の「樹脂と木質を融合させたハイブリッド製品」を完成させました。現場では、大工職人から施工の容易さ等で好評を得ています。<br>現在、樹脂と木質のハイブリッド製品について、次なる開発を進めている状況です。',
    'image' => array (
      'file' => 'img-product-body_04.jpg',
      'alt' => 'ハイブリッド敷居',
    ),
  ),
);

$factory = array (
  'link' => 'factory',
  'title' => 'FACTORY',
  'title_jp' => '工場設備',
  'image' => array (
    array (
      'file' => 'img-factory-top_01.jpg',
      'alt' => '工場設備',
    ),
  ),
  'catchphrase' => array (
    '多様な製品ニーズに応えるため、',
    'たくさんの設備を配置。',
    '当社の強みがギュッと詰まっています。',
  ),
  'description' => '',  
);
$factory_body = array (
  array (
    'number' => '01',
    'title_jp' => '階段NC',
    'description' => '側板加工用NC機3台を有し、階段における箱側板、ひな段側板、露出側板(ササラ桁）の全てのタイプのプレカット生産が可能です。ラインとしても階段専用ソフトとの連携により、加工データをタイムリーに現場に伝送し加工が可能な仕組みを構築しています。<br>生産キャパとしては、2000セット～3000セット/月の生産が可能。',
    'image' => array (
      'file' => 'img-factory-body_01.jpg',
      'alt' => '階段NC',
    ),
  ),
  array (
    'number' => '02',
    'title_jp' => 'ラッピングマシン',
    'description' => 'ラッピングマシンとしては14台を有しており 、巾木などの細ものから 壁パネルなどの広幅のものまでの製品特性や顧客ニーズに基づいてライン分けを行っております。設備としても環境に配慮した脱溶剤系を進めており、PURへの切り替えを行っています。<br>お客様製品の多様化から多品種小ロット化が進み、ラッピングとしても如何に生産性を 上げていくかが技術課題となってはいますが、日々試行錯誤し、段替え方法やシート切替方法等 において工夫を行い生産性向上の為の追求を行っています。',
    'image' => array (
      'file' => 'img-factory-body_02.jpg',
      'alt' => 'ラッピングマシン',
    ),
  ),
  array (
    'number' => '03',
    'title_jp' => 'Vカットマシン',
    'description' => 'Vカットとは、化粧面材の裏面にV字状の溝を入れ、折り曲げて成型する製法です。当社では、化粧面材のみならず、MDF素板の状態でVカットすることにも日本で唯一成功しました。<br><br>小ロット・多品種生産が得意な1号機、量産が得意な2号機の2ラインを有しており、見切材・一般造作材から和室造作材・窓枠・建具枠の生産を行っています。大量生産はもちろんのこと、商品の多様化や特寸・特注に対応した1個作りの生産体制で、お客様の細かいニーズにもお応えいたします。',
    'image' => array (
      'file' => 'img-factory-body_03.jpg',
      'alt' => 'Vカットマシン',
    ),
  ),
  array (
    'number' => '04',
    'title_jp' => 'ホットプレス機',
    'description' => 'ホットプレス機での廻踏板生産を技術的に確立させたことにより、多品種小ロット生産を可能にしました。<br><br>また、階段のタイプにより、平貼りラインと巻き込みラインの2つのプレスを併設しており、巻き込みラインにおいては従来、平面部、木口部、裏面部と3段階の工程を踏まなければなりませんでしたが､それをワンオペレ―ションで全自動で巻き込める設備を開発し巻き込みタイプにおける量産化にも対応しています。',
    'image' => array (
      'file' => 'img-factory-body_04.jpg',
      'alt' => 'ホットプレス機',
    ),
  ),
  array (
    'number' => '05',
    'title_jp' => '引き戸枠加工機',
    'description' => '加西事業所としては引戸枠専用工場として立ち上げ、弊社の自動化ラインの中でも初めての試みでしたが自動投入～自動積載までの一貫ラインとしており、インラインでのNCルーター加工の採用、スペーサーのタッカー止めも採用しており、弊社の設備の中では最も省人化を進めた設備になります。<br><br>生産部材としては、縦枠・控縦枠・中方立・鴨居の構成であり、縦枠・控縦枠を1ライン、中方位を1ラインの2ラインで構成しており、鴨居は形状及び長さが変化する為、1個作り生産方式を採用しております。<br>生産順位はどの品番順でも加工が出来る様、システム化しており発注データ順でのパレット荷造りが可能となっています。<br>お客様要望である、発注後2日での出荷、お客様指定場所別の配送も実施しており、製品在庫を持たない完全受注生産方式を行っています。',
    'image' => array (
      'file' => 'img-factory-body_05.jpg',
      'alt' => '引き戸枠加工機',
    ),
  ),
);


$recruit_info = array (
  array (
    'title_jp' => '営業スタッフ',
    'description' => '住宅用部材のハウスメーカー、建材メーカーへのOEM供給の為の提案営業などを行います。',
    'image' => 'icon-recruit__01.svg',
    'alt' => '営業スタッフ',
    'requirement' => array (
      array (
        'title' => '応募資格',
        'data' => '高卒以上35歳くらいまで',
      ),
      array (
        'title' => '提出書類',
        'data' => '電話の上、履歴書(写真添付)をご持参ください',
      ),
      array (
        'title' => '給与',
        'data' => '固定給　月額200,000円以上 ※経験・能力を考慮の上、優遇致します。',
      ),
      array (
        'title' => '諸手当',
        'data' => '交通費全額支給',
      ),
      array (
        'title' => '昇給',
        'data' => '年１回',
      ),
      array (
        'title' => '賞与',
        'data' => '年２回',
      ),
      array (
        'title' => '勤務地',
        'data' => '因島本社',
      ),
      array (
        'title' => '勤務時間',
        'data' => '7:55～17:00',
      ),
      array (
        'title' => '休日休暇',
        'data' => '隔週土休日（当社年間カレンダーに準ずる）',
      ),
      array (
        'title' => '福利厚生',
        'data' => '各種社会保険完備、退職金制度',
      ),
    )
  ),
  array (
    'title_jp' => '業務スタッフ',
    'description' => '受注、生産管理、出荷管理業務等を行います。',
    'image' => 'icon-recruit__02.svg',
    'alt' => '業務スタッフ',
    'requirement' => array (
      array (
        'title' => '応募資格',
        'data' => '高卒以上35歳くらいまで',
      ),
      array (
        'title' => '提出書類',
        'data' => '電話の上、履歴書(写真添付)をご持参ください',
      ),
      array (
        'title' => '給与',
        'data' => '固定給　月額180,000円以上 ※経験・能力を考慮の上、優遇致します。',
      ),
      array (
        'title' => '諸手当',
        'data' => '交通費全額支給',
      ),
      array (
        'title' => '昇給',
        'data' => '年１回',
      ),
      array (
        'title' => '賞与',
        'data' => '年２回',
      ),
      array (
        'title' => '勤務地',
        'data' => '因島本社',
      ),
      array (
        'title' => '勤務時間',
        'data' => '7:55～17:00',
      ),
      array (
        'title' => '休日休暇',
        'data' => '隔週土休日（当社年間カレンダーに準ずる）',
      ),
      array (
        'title' => '福利厚生',
        'data' => '各種社会保険完備、退職金制度',
      ),
    )
  ),
  array (
    'title_jp' => '工場スタッフ/正社員',
    'description' => '住宅内装用建材の部材、部品の製造業務等を行います。',
    'image' => 'icon-recruit__03.svg',
    'alt' => '工場スタッフ/正社員',
    'requirement' => array (
      array (
        'title' => '応募資格',
        'data' => '高卒以上45歳くらいまで',
      ),
      array (
        'title' => '提出書類',
        'data' => '電話の上、履歴書(写真添付)をご持参ください',
      ),
      array (
        'title' => '給与',
        'data' => '固定給　月額180,000円以上 ※経験・能力を考慮の上、優遇致します。',
      ),
      array (
        'title' => '諸手当',
        'data' => '交通費全額支給',
      ),
      array (
        'title' => '昇給',
        'data' => '年１回',
      ),
      array (
        'title' => '賞与',
        'data' => '年２回',
      ),
      array (
        'title' => '勤務地',
        'data' => '因島本社',
      ),
      array (
        'title' => '勤務時間',
        'data' => '7:55～17:00',
      ),
      array (
        'title' => '休日休暇',
        'data' => '隔週土休日（当社年間カレンダーに準ずる）',
      ),
      array (
        'title' => '福利厚生',
        'data' => '各種社会保険完備、退職金制度',
      ),
    )
  ),

);




$staff_member = array (
  array (
    'number' => '1',
    'name' => 'K.O.さん',
    'entering' => '2011年入社',
    'post' => '営業統括部・営業課　課長',
    'image' => 'img-staff_01.jpg',
    'image_alt' => 'K.O.さん',
    'face' => '',
    'face_alt' => '',
    'message' => 'しまなみ海道が気持ち良い！<br>島に入ると仕事のスイッチが入ります',
    'icon' => 'icon-recruit__01__white.svg',
    'icon_alt' => '営業スタッフ',
    'interview' => array (
      array (
        'num' => 'Q1',
        'question' => '日々の仕事はどんなことをしていますか？',
        'answer' => '営業をしています。既存のお客様への訪問と新規案件の提案が主ですね。営業活動を10とすると、既存顧客のフォローが4、既存顧客の新規案件が3、新規顧客の開拓が3という割合です。ものづくりに直接関わることは少ないのですが、自分で取ってきた仕事を現場に落とし込むために自ら作業して見せることはあります。',
      ),
      array (
        'num' => 'Q2',
        'question' => '入社したきっかけはなんですか？',
        'answer' => '岡山の大学に進学して土木専門の学部で学び、卒業後はスーツを販売する会社に入社。京都の店舗に配属されて8年間勤めました。「地元で働きたい」という思いから尾道に帰省し、喫茶店でマスターに。仕入れから売上管理、投資まで行って経営の全体像を学んでからは、家族の紹介でエスエッチ・サンキョウを受けることになりました。<br>もともと私は衣・食・住の仕事に就きたいと思っていました。「衣」も「食」もやってきたので、当社で「住」に携わることができるのは単純にうれしかったですね。',
      ),
      array (
        'num' => 'Q3',
        'question' => '尾道での暮らしはどうですか？',
        'answer' => '尾道は好きですね。尾道で生まれ育ったので小さい頃はそこまで特別な場所だと思わなかったのですが、大学進学を機に初めて外から尾道を見たときに改めて良い町だなと。大学の卒論に「尾道の坂道と路地について」をテーマとして選ぶくらい、ここには愛着があります。<br>会社へは車通勤。因島大橋を渡って出社します。橋には通行料がかかりますが会社が補助してくれるので助かりますね。瀬戸内海の景観を眺めながら車を走らせていると単純に気持ちが良いですし、因島に入ると仕事のスイッチが入ります。',
      ),
      array (
        'num' => 'Q4',
        'question' => '仕事の取り組みや、働く上での想いを聞かせてください',
        'answer' => '顧客への提案では、自社で扱っていない素材や商品のアプローチも模索します。たとえば当社は木製品がメインですが、樹脂や金属素材だったらどうか、枠材や階段材ではない新しい建材ならどうかなど、既存の枠にとらわれない視点で検討して取り組んでいます。<br>新しい提案がしたい際はまず社長にプレゼンしますが、面白ければ「やってみたら」と言ってもらえる環境です。もちろん普段の仕事を大切にしつつも、「自分もいつか◯◯がしたい」というビジョンがあるとより一層仕事を楽しめると思います。',
      ),
      array (
        'num' => 'Q5',
        'question' => 'これからどうなっていきたいですか？',
        'answer' => '当社はもともとラッピング材をやってきましたが、そこに“加工”という付加価値をつけてどんどん事業を拡大し、製品まで作るようになりました。自社のノウハウを活かしてどんどん次のステージにステップアップしているのがこの会社の良いところ。そのため営業にも終わりがなく、私自身かなり楽しんでやっています。<br>社長が常に新しい種をまき続けながらチャレンジしてくれているのは大きいと思います。私もどんな新規提案ができるか模索しながら、これからも学ぶつもりでやっていきたいと思います。',
      ),
    ),
  ),
  array (
    'number' => '2',
    'name' => 'S.H.さん',
    'entering' => '2018年入社',
    'post' => '製造部・生産技術課　課長',
    'image' => 'img-staff_02.jpg',
    'image_alt' => 'S.H.さん',
    'face' => '',
    'face_alt' => '',
    'message' => '移住者代表として、福利厚生など<br>サポート制度を充実させたい',
    'icon' => 'icon-recruit__02__white.svg',
    'icon_alt' => '業務スタッフ',
    'interview' => array (
      array (
        'num' => 'Q1',
        'question' => '日々の仕事はどんなことをしていますか？',
        'answer' => '製造品質保証の管理者として事業所全体を担当しています。製造工程が遵守されているか、従業員が問題なく作業できているかなどをチェックするのが仕事です。製品にしろものづくりの工程にしろ、不具合が起きるときには必ず理由があります。問題があればその原因を洗い出し、自社製品全体の品質に役立てています。',
      ),
      array (
        'num' => 'Q2',
        'question' => '入社したきっかけはなんですか？',
        'answer' => '4年前まで栃木で自営業をしていましたが、一から家具作りを覚えたいと考え栃木の木工製作所に入社。その会社の社長がエスエッチ・サンキョウと共同で関東に営業所を作ることになり、たまたま転籍となったのが当社との出会いでした。勉強のために因島本社へ配属され、研修期間を終えたら栃木に戻る選択肢もあったんです。でも、ここでの仕事にやりがいを感じていたこと、家族が尾道での生活を気に入り「こっちにいたい」という希望していたことなど理由が重なり、移住することにしました。',
      ),
      array (
        'num' => 'Q3',
        'question' => '尾道での暮らしはどうですか？',
        'answer' => '仕事のかたわら家探しを進め、因島の隣にある「向島」に家を構えることにしました。家から少し歩けば海という、とても気持ちの良い立地です。<br>移住前に住んでいた栃木は“海なし県”だったこともあり、四方を海で囲まれた尾道の景色、生活はそれまでとは全く異なるものでした。母もこっちで一緒に住むことにして、家族全員おおらかな気持ちで暮らしています。また私も妻も釣りが趣味なので、生活の中に潮の満ち引きを感じられることがとても新鮮。豊かな環境で生活できていると実感しています。
        ',
      ),
      array (
        'num' => 'Q4',
        'question' => '仕事の取り組みや、働く上での想いを聞かせてください',
        'answer' => '品質管理を通じて現場が少しでも楽になれば、という想いで取り組んでいます。品質向上のために検査項目を増やすのは簡単ですが、それだけ作業の負担はかさみ効率も悪くなります。品質を担保したまま適正な検査頻度・工程の仕組みを作り、作業者がより一層ものづくりに励めるような環境を整備したいです。<br>また私は移住者として、客観的な視点で因島や当社のことを見られます。採用に関していえば地元の人はもちろん大歓迎ですが、外から来る人の採用活動にもこの目線を活かしていきたいです。
        ',
      ),
      array (
        'num' => 'Q5',
        'question' => 'これからどうなっていきたいですか？',
        'answer' => 'ものづくりがしたくて選んだキャリアでしたが、当社のことを知るにつれ、事業をより大きくしたいという想いにシフトしていきました。エスエッチ・サンキョウは「やらないよりやることが大事」という社風で、行動し続けることが推奨されます。今後は品質管理にとらわれず、新しい挑戦をしていくつもりです。<br>また移住者目線を活かし、福利厚生の面でも仕組み作りや既存制度の強化に尽力したいです。徐々に体制を整えていくので、尾道や島暮らしに興味がある人はぜひお問い合わせください。
        ',
      ),
    ),
  ),
  array (
    'number' => '3',
    'name' => 'T.S.さん',
    'entering' => '2011年入社',
    'post' => '製造2課２係　係長',
    'image' => 'img-staff_03.jpg',
    'image_alt' => 'T.S.さん',
    'face' => '',
    'face_alt' => '',
    'message' => '「どうしたら良くなるか？」を<br>常に探求し続けています',
    'icon' => 'icon-recruit__03__white.svg',
    'icon_alt' => '工場スタッフ',
    'interview' => array (
      array (
        'num' => 'Q1',
        'question' => '日々の仕事はどんなことをしていますか？',
        'answer' => '各工程にあるラインの人員配置や、作業内容・段取りの決定、指示出しを行っていて、要は全体の現場監督のような立ち位置で仕事しています。この人は何が得意なのか、いつもどんな工程でつまづくのかといった適正を見極めて、従業員が働きやすいように、そして作業が滞りなく進むように全体を見渡しています。',
      ),
      array (
        'num' => 'Q2',
        'question' => '入社したきっかけはなんですか？',
        'answer' => '前職は美容師で、尾道の隣・福山市で働いていました。エスエッチ・サンキョウへは知人から紹介されたことがきっかけで入社することに。<br>最初は引き戸枠の加工機のオペレーターをしていましたが、フォローやサポートであらゆる工程の作業に参加していたら、あれよあれよという間にできることが増えていって。さまざまな経験させてもらい、気が付けば加工から梱包まで全ての工程ができるようになっていました。家族の看病で3年ほど地元に帰った時期もありましたが復職し、延べ10年ほど働いています。',
      ),
      array (
        'num' => 'Q3',
        'question' => '尾道での暮らしはどうですか？',
        'answer' => '日々の仕事には、これまでやってきた居酒屋でのアルバイトや美容師時代の経験も活きています。振り返ればどんな仕事でも「どうすれば作業効率を改善できるか」「どうしたらムダな動きをなくせるか」という点を念頭に置いて取り組んできました。<br>興味に対して追求する性格というのもあり、少しでも気になったら突き詰めていくタイプ。たとえば作業動線に問題があると感じたら工場内のレイアウト変更だってしますよ。従業員が少しでも早く作業を終えられるよう、自分も現場の目線で常に考えています。',
      ),
      array (
        'num' => 'Q4',
        'question' => '仕事の取り組みや、働く上での想いを聞かせてください',
        'answer' => '今やっている取り組みの延長でもありますが、誰もがどの工程においても作業しやすいと感じられる職場作りを強化したいです。これまで自分が大変だと感じてきた部分に対して、新しく入った人たちが同じ思いをしなくて済むよう、苦労を取り除いてあげられるような作業環境を整備したい。それでいて品質や生産スピードに担保できるよう、仕組みをもっと考えていきたいと思っています。やはり自分が講じた対策で作業がスムーズになったり、みんなが早く帰れるようになったりするとやりがいを感じますね。作業の流れが改善されてどのラインにも負荷をかけない状況にもっていけたら嬉しいです。<br>また後輩には「自分ならどうしたいか」「どうしたら作業が早く終わるのか」という視野もいずれ身に付けてもらいたいなと思います。これから入ってくる人も、最初は自分にできるだろうかと不安に思うのは当たり前だし、完璧にできなくて当然です。私たちだって同じ経験をしてきているので、その気持ちはよくわかります。こちらも気軽に聞ける環境を整えておくので、わからなかったらいつでも聞いてください。',
      ),
    ),
  ),
  array (
    'number' => '4',
    'name' => 'H.F.さん',
    'entering' => '2018年入社',
    'post' => '製造3課',
    'image' => 'img-staff_04.jpg',
    'image_alt' => 'H.F.さん',
    'face' => '',
    'face_alt' => '',
    'message' => '東京からUターン。自然と海に<br>囲まれて気持ち良く暮らしています',
    'icon' => 'icon-recruit__01__white.svg',
    'icon_alt' => '営業スタッフ',
    'interview' => array (
      array (
        'num' => 'Q1',
        'question' => '日々の仕事はどんなことをしていますか？',
        'answer' => '主に階段の建材（シート階段）を作っています。具体的には、溝幅加工機を使って階段の踏み板の溝を彫ったり、踏み板の幅の寸法を調整するという作業があります。1日の流れとしては、出社してラジオ体操をしたあと、自分の現場に分かれて軽くミーティングをして、持ち場について作業をスタートさせます。',
      ),
      array (
        'num' => 'Q2',
        'question' => '入社したきっかけはなんですか？',
        'answer' => '出身は因島です。高校を卒業し、調理（和食）の専門学校へ進学したのを機に19歳で上京しました。学校と修業で2年間の東京生活を経て、家庭の事情が重なったこともありUターン。なるべく家の近場で仕事を探し、中途でエスエッチ・サンキョウに入社しました。<br>東京では格式が高めの料理店で修業していたので精神的疲労が大きかったんですが、調理から一転、今一番しんどいのは重労働ですね。調理にももちろん体力は必要ですが、職種が全く違うのでやはり別次元の大変さは感じます。',
      ),
      array (
        'num' => 'Q3',
        'question' => '尾道での暮らしはどうですか？',
        'answer' => '因島は、良い意味で何もないところです。何もないんだけど、東京から帰ってきてみたらこっちの環境はやっぱり落ち着きます。<br>東京はとても便利な場所でした。少し行けば大きなショッピングモールがあって買い物には困らないし、ライブ会場となるような大きなホールがたくさんあるし。でもとても忙しい街でしたね。24時間ずっと街が明るいし、気の休まる瞬間がないというか。<br>都会の生活に憧れたりもしましたが、今は自然と海に囲まれて暮らしていて、地元って良いなと感じています。',
      ),
      array (
        'num' => 'Q4',
        'question' => '仕事の取り組みや、働く上での想いを聞かせてください',
        'answer' => '1日に何百、何千という建材を作ります。建築のように家全体の施工をしているわけではないので、建材をひとつ作ったからといって「できた！」という達成感があるかと聞かれると、少し違うかもしれません。でも今まで普段の生活で何気なく目にしていた階段の建材が、そのクオリティも含めて気になるようになりましたね。<br>前職を通じて今の仕事でも実感するのは、準備や段取りの重要さ。料理の世界って段取りが命なんです。現在の作業においても、それを意識しながら行動するように心がけています。',
      ),
      array (
        'num' => 'Q5',
        'question' => 'これからどうなっていきたいですか？',
        'answer' => '私は今、通常の作業以上に新しい領域を覚えないといけない段階にきているみたいで。階段の建材の中でもさまざまな工程での作業に呼ばれ、いろいろなことを任され始めているところです。本当なら作業効率をいかにして上げるかといった点も考えながら進めたいのですが、まだそこまで考えている余裕がなくて……。<br>正直、はっきりとしたビジョンはこれから考えていきたいです。でも今後はどんな注文にもスムーズに応えられるよう、さまざまな工程で力を発揮できる存在になっていけたらと思います。',
      ),
    ),
  ),
);

$member = array (
  'link' => 'member',
  'title' => 'MEMBER',
  'title_jp' => 'メンバー紹介',
);



$entry = array (
  'link' => 'entry',
  'title' => 'ENTRY',
  'title_jp' => 'ENTRY',
  'description' => '採用エントリーフォーム',
);

$agreement = 'プライバシーポリシー<br>スカイジャパンコーポレーション株式会社（以下，「当社」といいます。）は，本ウェブサイト上で提供するサービス（以下,「本サービス」といいます。）における，ユーザーの個人情報の取扱いについて，以下のとおりプライバシーポリシー（以下，「本ポリシー」といいます。）を定めます。<br><br>第1条（個人情報）<br>「個人情報」とは，個人情報保護法にいう「個人情報」を指すものとし，生存する個人に関する情報であって，当該情報に含まれる氏名，生年月日，住所，電話番号，連絡先その他の記述等により特定の個人を識別できる情報及び容貌，指紋，声紋にかかるデータ，及び健康保険証の保険者番号などの当該情報単体から特定の個人を識別できる情報（個人識別情報）を指します。<br><br>第2条（個人情報の収集方法）<br>当社は，ユーザーが利用登録をする際に氏名，生年月日，住所，電話番号，メールアドレス，銀行口座番号，クレジットカード番号，運転免許証番号などの個人情報をお尋ねすることがあります。また，ユーザーと提携先などとの間でなされたユーザーの個人情報を含む取引記録や決済に関する情報を,当社の提携先（情報提供元，広告主，広告配信先などを含みます。以下，｢提携先｣といいます。）などから収集することがあります。<br><br>第3条（個人情報を収集・利用する目的）<br>当社が個人情報を収集・利用する目的は，以下のとおりです。<br><br>当社サービスの提供・運営のため<br>ユーザーからのお問い合わせに回答するため（本人確認を行うことを含む）<br>ユーザーが利用中のサービスの新機能，更新情報，キャンペーン等及び当社が提供する他のサービスの案内のメールを送付するため<br>メンテナンス，重要なお知らせなど必要に応じたご連絡のため<br>利用規約に違反したユーザーや，不正・不当な目的でサービスを利用しようとするユーザーの特定をし，ご利用をお断りするため<br>ユーザーにご自身の登録情報の閲覧や変更，削除，ご利用状況の閲覧を行っていただくため<br>有料サービスにおいて，ユーザーに利用料金を請求するため<br>上記の利用目的に付随する目的<br><br>第4条（利用目的の変更）<br>当社は，利用目的が変更前と関連性を有すると合理的に認められる場合に限り，個人情報の利用目的を変更するものとします。<br>利用目的の変更を行った場合には，変更後の目的について，当社所定の方法により，ユーザーに通知し，または本ウェブサイト上に公表するものとします。<br><br>第5条（個人情報の第三者提供）<br>当社は，次に掲げる場合を除いて，あらかじめユーザーの同意を得ることなく，第三者に個人情報を提供することはありません。ただし，個人情報保護法その他の法令で認められる場合を除きます。<br>人の生命，身体または財産の保護のために必要がある場合であって，本人の同意を得ることが困難であるとき<br>公衆衛生の向上または児童の健全な育成の推進のために特に必要がある場合であって，本人の同意を得ることが困難であるとき<br>国の機関もしくは地方公共団体またはその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって，本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがあるとき<br>予め次の事項を告知あるいは公表し，かつ当社が個人情報保護委員会に届出をしたとき<br>利用目的に第三者への提供を含むこと<br>第三者に提供されるデータの項目<br>第三者への提供の手段または方法<br>本人の求めに応じて個人情報の第三者への提供を停止すること<br>本人の求めを受け付ける方法<br>前項の定めにかかわらず，次に掲げる場合には，当該情報の提供先は第三者に該当しないものとします。<br>当社が利用目的の達成に必要な範囲内において個人情報の取扱いの全部または一部を委託する場合<br>合併その他の事由による事業の承継に伴って個人情報が提供される場合<br>個人情報を特定の者との間で共同して利用する場合であって，その旨並びに共同して利用される個人情報の項目，共同して利用する者の範囲，利用する者の利用目的および当該個人情報の管理について責任を有する者の氏名または名称について，あらかじめ本人に通知し，または本人が容易に知り得る状態に置いた場合<br><br>第6条（個人情報の開示）<br>当社は，本人から個人情報の開示を求められたときは，本人に対し，遅滞なくこれを開示します。ただし，開示することにより次のいずれかに該当する場合は，その全部または一部を開示しないこともあり，開示しない決定をした場合には，その旨を遅滞なく通知します。なお，個人情報の開示に際しては，1件あたり1，000円の手数料を申し受けます。<br>本人または第三者の生命，身体，財産その他の権利利益を害するおそれがある場合<br>当社の業務の適正な実施に著しい支障を及ぼすおそれがある場合<br>その他法令に違反することとなる場合<br>前項の定めにかかわらず，履歴情報および特性情報などの個人情報以外の情報については，原則として開示いたしません。<br><br>第7条（個人情報の訂正および削除）<br>ユーザーは，当社の保有する自己の個人情報が誤った情報である場合には，当社が定める手続きにより，当社に対して個人情報の訂正，追加または削除（以下，「訂正等」といいます。）を請求することができます。<br>当社は，ユーザーから前項の請求を受けてその請求に応じる必要があると判断した場合には，遅滞なく，当該個人情報の訂正等を行うものとします。<br>当社は，前項の規定に基づき訂正等を行った場合，または訂正等を行わない旨の決定をしたときは遅滞なく，これをユーザーに通知します。<br><br>第8条（個人情報の利用停止等）<br>当社は，本人から，個人情報が，利用目的の範囲を超えて取り扱われているという理由，または不正の手段により取得されたものであるという理由により，その利用の停止または消去（以下，「利用停止等」といいます。）を求められた場合には，遅滞なく必要な調査を行います。<br>前項の調査結果に基づき，その請求に応じる必要があると判断した場合には，遅滞なく，当該個人情報の利用停止等を行います。<br>当社は，前項の規定に基づき利用停止等を行った場合，または利用停止等を行わない旨の決定をしたときは，遅滞なく，これをユーザーに通知します。<br>前2項にかかわらず，利用停止等に多額の費用を有する場合その他利用停止等を行うことが困難な場合であって，ユーザーの権利利益を保護するために必要なこれに代わるべき措置をとれる場合は，この代替策を講じるものとします。<br><br>第9条（プライバシーポリシーの変更）<br>本ポリシーの内容は，法令その他本ポリシーに別段の定めのある事項を除いて，ユーザーに通知することなく，変更することができるものとします。<br>当社が別途定める場合を除いて，変更後のプライバシーポリシーは，本ウェブサイトに掲載したときから効力を生じるものとします。<br><br>第10条（お問い合わせ窓口）<br>本ポリシーに関するお問い合わせは，お問い合わせフォームよりお願いいたします。<br><br>以上';



$contact = array (
  'link' => 'contact',
  'title' => 'CONTACT',
  'title_jp' => 'CONTACT',
  'description' => 'お問い合わせフォーム',
);



function escape($data, $nl2br = false) {
  //HTMLに埋め込んでも大丈夫な文字に変換する
  $convertedData = htmlspecialchars($data, ENT_HTML5);

  return $convertedData;
}

function checkMemberId($data, $max) {
  $ret = 1;

  if (!is_numeric($data)) {
    return false;
  }
  if (!($data>=1 && $data<=$max)) {
    return false;
  }

  return true;
}
?>
