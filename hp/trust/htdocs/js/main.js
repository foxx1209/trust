jQuery('body').data('lang','jp');

jQuery(
function() {

  let $is_scroll = true;
  let $is_click = false;
  var scrollStopEvent = new $.Event("scrollstop");
  var delay = 100;
  var timer;

  function scrollStopEventTrigger(){
    if (timer) {
      clearTimeout(timer);
    }
    timer = setTimeout(function(){$(window).trigger(scrollStopEvent)}, delay);
  }
  $("body").on("touchmove", scrollStopEventTrigger);

  // ページトップに戻る
  var pagetop = $('.c-topagetop');

  pagetop.click(function () {
    $('body, html').animate({ scrollTop: 0 }, 1500);
    return false;
  });

  // HEADER スクロールが下に行ったら固定する
  function slideHeader() {

    var scroll = $(window).scrollTop();// スクロール値取得

    if (scroll >= 1000) {
      $('#g-nav').addClass('is-fixed');
      $('#g-nav ').addClass('is-fixed');
    } else {
      $('#g-nav').removeClass('is-fixed');
    }

  };

  // 言語設定保持　リンクの編集
  function editurl(inid) {
    let target = document.getElementById(inid);
    target.href = target.href+'?lang='+css_lang;
  }






  $('#company a[href*="#"]').click(function () {
    var elmHash = $(this).attr('href'); //ページ内リンクのHTMLタグhrefから、リンクされているエリアidの値を取得
    var pos = $(elmHash).offset().top-150;//idの上部の距離からHeaderの高さを引いた値を取得
    $('body,html').animate({scrollTop: pos}, 1500); //取得した位置にスクロール。500の数値が大きくなるほどゆっくりスクロール
    return false;
  });

  $('#company aside ul li.__01 > a').click(function () {
    $is_click = true;
    $('#company aside ul li > a').removeClass('is-active');
    $(this).addClass('is-active');
    return false;
  });
  $('#company aside ul li.__02 > a').click(function () {
    $is_click = true;
    $('#company aside ul li > a').removeClass('is-active');
    $(this).addClass('is-active');
    return false;
  });
  $('#company aside ul li.__03 > a').click(function () {
    $is_click = true;
    $('#company aside ul li > a').removeClass('is-active');
    $(this).addClass('is-active');
    return false;
  });
  $('#company aside ul li.__04 > a').click(function () {
    $is_click = true;
    $('#company aside ul li > a').removeClass('is-active');
    $(this).addClass('is-active');
    return false;
  });






  // 文字が左から流れるように現れるアニメーション
  function slideAnime() {
    //====左に動くアニメーションここから===
    $('.leftAnime').each(function() {
      var elemPos = $(this).offset().top-50;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight){
        //左から右へ表示するクラスを付与
        //テキスト要素を挟む親要素（左側）とテキスト要素を元位置でアニメーションをおこなう
        $(this).addClass("slideAnimeLeftRight"); //要素を左枠外にへ移動しCSSアニメーションで左から元の位置に移動
        $(this).children(".leftAnimeInner").addClass("slideAnimeRightLeft");  //子要素は親要素のアニメーションに影響されないように逆の指定をし元の位置をキープするアニメーションをおこなう
      }else{
        //左から右へ表示するクラスを取り除く
        $(this).removeClass("slideAnimeLeftRight");
        $(this).children(".leftAnimeInner").removeClass("slideAnimeRightLeft");
      }
    });
  };

  // スクロールで場所まで来ると、ふわっと右から現れる
  function slideAnime2(s) {
    //====左に動くアニメーションここから===
    $(s).each(function(){ 
      var elemPos = $(this).offset().top-100;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight){
        $(this).addClass("fadeRight");
      }else{
        //左から右へ表示するクラスを取り除く
        // $(this).removeClass("fadeRight");
      }
    });
  };

  // 動きのきっかけの起点となるアニメーションの名前を定義
  function BgFadeAnime() {
    // 背景色が伸びて出現（左から右）
    $('.bgLRextendTrigger').each(function() { //bgLRextendTriggerというクラス名が
      var elemPos = $(this).offset().top-50;//要素より、50px上の
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight){
        $(this).addClass('bgLRextend');// 画面内に入ったらbgLRextendというクラス名を追記
      }else{
        $(this).removeClass('bgLRextend');// 画面外に出たらbgLRextendというクラス名を外す
      }
    }); 

    // 文字列を囲う子要素
    $('.bgappearTrigger').each(function(){ //bgappearTriggerというクラス名が
      var elemPos = $(this).offset().top-50;//要素より、50px上の
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight){
        $(this).addClass('bgappear');// 画面内に入ったらbgappearというクラス名を追記
      }else{
        $(this).removeClass('bgappear');// 画面外に出たらbgappearというクラス名を外す
      }
    });   
  }

  //任意のタブにURLからリンクするための設定
  function GethashID (hashIDName){
    if(hashIDName){
      //タブ設定
      $('.tab li').find('a').each(function() { //タブ内のaタグ全てを取得
        var idName = $(this).attr('href'); //タブ内のaタグのリンク名（例）#lunchの値を取得 
        if(idName == hashIDName){ //リンク元の指定されたURLのハッシュタグ（例）http://example.com/#lunch←この#の値とタブ内のリンク名（例）#lunchが同じかをチェック
          var parentElm = $(this).parent(); //タブ内のaタグの親要素（li）を取得
          $('.tab li').removeClass("active"); //タブ内のliについているactiveクラスを取り除き
          $(parentElm).addClass("active"); //リンク元の指定されたURLのハッシュタグとタブ内のリンク名が同じであれば、liにactiveクラスを追加
          //表示させるエリア設定
          $(".area").removeClass("is-active"); //もともとついているis-activeクラスを取り除き
          $(hashIDName).addClass("is-active"); //表示させたいエリアのタブリンク名をクリックしたら、表示エリアにis-activeクラスを追加 
        }
      });
    }
  }

  //線が伸びるための設定　初期化
  function ScrollTimelineAnime_init(){
    $('.timeline > li').each(function(){// それぞれのli要素の
      let elemPos = $(this).offset().top;// 上からの高さ取得
      let scroll = $(window).scrollTop();// スクロール値取得
      let windowHeight = $(window).height();// windowの高さ取得

      // window.console.log('---------- init');
      // window.console.log('elemPos:' + elemPos);
      // window.console.log('scroll:' + scroll);
      // window.console.log('windowHeight:' + windowHeight);

      if (1300 <= windowHeight) {
        $(this).children('.p-contents__01__description').addClass('fadeRight');
      }
      if (elemPos <= 0) { return false; }

      // ボーダーの長さをセット
      $(this).children('.border-line').css({
        height: "0%", //CSSでパーセント指定
      });
    });
  }

  //線が伸びるための設定を関数でまとめる
  function ScrollTimelineAnime(){
    $('.timeline > li').each(function(){// それぞれのli要素の
      let elemPos = $(this).offset().top;// 上からの高さ取得
      let scroll = $(window).scrollTop();// スクロール値取得
      let windowHeight = $(window).height();// windowの高さ取得
      let startPoint = (windowHeight / 2); //線をスタートさせる位置を指定※レイアウトによって調整してください
      let image_height = $(this).children('.image').height() * 1.5;

      // window.console.log('----------');
      // window.console.log('elemPos:' + elemPos);
      // window.console.log('scroll:' + scroll);
      // window.console.log('windowHeight:' + windowHeight);
      // window.console.log('startPoint:' + startPoint);

      // window.console.log('scroll:' + scroll);
      // window.console.log('elemPos - windowHeight-startPoint:' + (elemPos - windowHeight-startPoint) );

      if (elemPos <= 0) {
        if (1400 <= windowHeight) {
          $(this).children('.p-contents__01__description').addClass('fadeRight');
        }
        return false;
      }
      if (scroll >= elemPos - startPoint) {
      // if (scroll >= elemPos - startPoint) {
          let H = $(this).outerHeight(true)//liの余白と高さを含めた数値を取得
        //スクロール値から要素までの高さを引いた値を、liの高さの半分のパーセントで出す
        let percent = (scroll+startPoint - elemPos) / (H/2) *100;//liの余白と高さの半分で線を100％に伸ばす
      // window.console.log('percent:' + percent);

        // 100% を超えたらずっと100%を入れ続ける
        if(percent > 100){
          percent = 100;
        }
        // ボーダーの長さをセット
        $(this).children('.border-line').css({
          height: percent + "%", //CSSでパーセント指定
        });

      }

      // 文字エリアが右からふわっと出てくる
      if (scroll >= elemPos - startPoint - image_height || elemPos <= windowHeight) {
        $(this).children('.p-contents__01__description').addClass('fadeRight');
      }



      // window.console.log('scroll:' + scroll);
      // window.console.log('elemPos:' + elemPos);
      // window.console.log('elemPos + windowHeight:' + (elemPos + windowHeight) );
      if (scroll >= elemPos - startPoint - image_height && scroll <= elemPos + windowHeight - startPoint ) {
          $(this).children('.p-contents__01__description').children('.c-ttl__26').addClass("clr__m2");
      } else {
        $(this).children('.p-contents__01__description').children('.c-ttl__26').removeClass("clr__m2");
      }

    });
  }

//アコーディオンをクリックした時の動作
  $('.title').on('click', function() {//タイトル要素をクリックしたら
    var findElm = $(this).next(".box");//直後のアコーディオンを行うエリアを取得し
    $(findElm).slideToggle();//アコーディオンの上下動作

    if($(this).hasClass('close')){//タイトル要素にクラス名closeがあれば
      $(this).removeClass('close');//クラス名を除去し
    }else{//それ以外は
      $(this).addClass('close');//クラス名closeを付与
    }
  });

  //タブをクリックしたら
  $('.tab a').on('click', function() {
    var idName = $(this).attr('href'); //タブ内のリンク名を取得  
    GethashID (idName);//設定したタブの読み込みと
    return false;//aタグを無効にする
  });

  //タブをクリックしたら
  $('.hamburger-menu__body').on('click', function() {
    $(this).toggleClass('is-active');
    $('.g-nav__nav').toggleClass('is-active');
  });

  
  $('.g-nav__body .g-nav__nav .c-lang-sel-wrap').on('click',function () {
    $('.g-nav__nav > ul > .item.__lang > div ul').toggleClass('is-active');
  });
  // $('.g-nav__body .g-nav__nav li.__lang div span.__click').on('click',function () {
  //   $('.g-nav__nav > ul > .item.__lang > div ul').toggleClass('is-active');
  // });
  $('.g-nav__body .g-nav__nav li.__lang li.choice-jp').on('click',function () {
    jQuery('body').data('lang','jp');
    $('body').removeClass('__lang-en en');
    $('body').addClass('__lang-jp');
    $('.g-nav__nav > ul > .item.__lang > .c-lang-sel-wrap ul li.choice-jp').addClass('is-active');
    $('.g-nav__nav > ul > .item.__lang > .c-lang-sel-wrap ul li.choice-en').removeClass('is-active');
    // $('.g-nav__nav > ul > .item.__lang > div ul').removeClass('is-active');
    // $('.g-nav__nav > ul > .item.__lang > .c-lang-sel-wrap ul').removeClass('is-active');
    // lang_en_flag=false;
  });
  $('.g-nav__body .g-nav__nav li.__lang li.choice-en').on('click',function () {
    jQuery('body').data('lang','en');
    $('body').removeClass('__lang-jp');
    $('body').addClass('__lang-en en');
    $('.g-nav__nav > ul > .item.__lang > .c-lang-sel-wrap ul li.choice-jp').removeClass('is-active');
    $('.g-nav__nav > ul > .item.__lang > .c-lang-sel-wrap ul li.choice-en').addClass('is-active');
    // $('.g-nav__nav > ul > .item.__lang > div ul').removeClass('is-active');
    // $('.g-nav__nav > ul > .item.__lang > .c-lang-sel-wrap ul').removeClass('is-active');
    // lang_en_flag=true;
  });



  $('a.__lang').on('click',function () {
    // window.alert('!');
    // window.alert($(this).attr('href'));
    let link=$(this).attr('href') + "?lang="+jQuery('body').data('lang');
    // window.alert(link);
    $(this).attr('href',link);
    // window.location.href=link;
  });
  $('.form-btn input').on('click',function () {
    // window.alert('!');
    // window.alert($(this).attr('href'));
    let link=$('form.__lang').attr('action') + "?lang="+jQuery('body').data('lang');
    // window.alert(link);
    $('form.__lang').attr('action',link);
  });




  // 画面をスクロールをしたら動かしたい場合の記述
  $(window).scroll(function () {

    scrollStopEventTrigger();

    slideHeader();

    /* アニメーション用の関数を呼ぶ */
    slideAnime();

    /* アニメーション用の関数を呼ぶ */
    BgFadeAnime();

    if (window.scrollY > 1000) {
      $('#company aside ul').addClass('is-active');
    } else {
      $('#company aside ul').removeClass('is-active');
    }

  console.log($is_click);
  if (!$is_click) {

  // console.log(window.scrollY);
      if (window.scrollY > 1005 && window.scrollY <= 1943) {
        $('#company aside ul li > a').removeClass('is-active');
        $('#company aside ul li.__01 > a').addClass('is-active');
      } else if (window.scrollY > 1944 && window.scrollY <= 2499) {
        $('#company aside ul li > a').removeClass('is-active');
        $('#company aside ul li.__02 > a').addClass('is-active');
      } else if (window.scrollY > 2500 && window.scrollY <= 3878) {
        $('#company aside ul li > a').removeClass('is-active');
        $('#company aside ul li.__03 > a').addClass('is-active');
      } else if (window.scrollY > 3879) {
        $('#company aside ul li > a').removeClass('is-active');
        $('#company aside ul li.__04 > a').addClass('is-active');
      }

    }


    // ScrollTimelineAnime();// 線が伸びる関数を呼ぶ

  });
  // ここまで画面をスクロールをしたら動かしたい場合の記述

  $(window).on('scrollstop', function(){
    $is_click=false;
  });



  // 画面が読み込まれたらすぐに動かしたい場合の記述
  $(window).on('load', function(){

    let url = location.href;
    let postlist=location.search.split('=');
    let lang='__lang-jp';

    $('body').removeClass('__lang-jp');
    $('body').removeClass('__lang-en en');
    // window.alert(postlist[1]);
    if (postlist[1]=='en') {
      jQuery('body').data('lang','en');
      lang='__lang-en en';
      $('.g-nav__nav > ul > .item.__lang > .c-lang-sel-wrap ul li.choice-jp').removeClass('is-active');
      $('.g-nav__nav > ul > .item.__lang > .c-lang-sel-wrap ul li.choice-en').addClass('is-active');
    }
    $('body').addClass(lang);







    /* アニメーション用の関数を呼ぶ */
    slideAnime();

    /* アニメーション用の関数を呼ぶ */
    BgFadeAnime();

    /* コンタクト確認画面 */
    // location.log(location.href);
    // console.log(url);
    // if (url.indexOf('contact.php')!==-1) {
    //   console.log( '見つかりました' );
    //   // if (lang_en_flag)
    //   $('body').addClass('__lang-en');
    // }

    $('.c-scrollbar').mCustomScrollbar({
      advanced:{
        updateOnContentResize: true
      },
      mouseWheel: true,
      scrollButtons: true,
      autoHideScrollbar: false,
      scrollButtons:{enable: true },
      horizontalScroll: true,
    });

    //ページが読み込まれた際にopenクラスをつけ、openがついていたら開く動作※不必要なら下記全て削除
    $('.accordion-area li:first-of-type section').addClass("open"); //accordion-areaのはじめのliにあるsectionにopenクラスを追加
    $(".open").each(function(index, element){ //openクラスを取得
      var Title =$(element).children('.title'); //openクラスの子要素のtitleクラスを取得
      $(Title).addClass('close');       //タイトルにクラス名closeを付与し
      var Box =$(element).children('.box'); //openクラスの子要素boxクラスを取得
      $(Box).slideDown(500);          //アコーディオンを開く
    });

    $('.tab li:first-of-type').addClass("active"); //最初のliにactiveクラスを追加
    $('.area:first-of-type').addClass("is-active"); //最初の.areaにis-activeクラスを追加
    var hashName = location.hash; //リンク元の指定されたURLのハッシュタグを取得
    GethashID (hashName);//設定したタブの読み込み

    ScrollTimelineAnime_init();// 線が伸びる関数を呼ぶ

  });
  // ここまで画面が読み込まれたらすぐに動かしたい場合の記述

	//モーダル表示
	$(".video-open").modaal({
    start_open:false, // ページロード時に表示するか
    overlay_close:true,//モーダル背景クリック時に閉じるか
    type: 'video',
    auto: true,
    background: '#FFCD3C', // 背景色
    overlay_opacity:0.8, // 透過具合
    before_open:function(){// モーダルが開く前に行う動作
      $('html').css('overflow-y','hidden');/*縦スクロールバーを出さない*/
    },
    after_close:function(){// モーダルが閉じた後に行う動作
      $('html').css('overflow-y','scroll');/*縦スクロールバーを出す*/
    }
  });


});
