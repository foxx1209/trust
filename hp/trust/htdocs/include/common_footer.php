<footer id="footer">
  <!-- <a class="c-topagetop c-topagetop clr__m2 en" href="#"></a> -->

  <div class="container">
   
    <div class="footer__head">
      <h1 class="footer-logo">
        <a class="navbar-brand" href="#">
          <img src="<?php echo $parent.'img/logo.svg'; ?>" alt="SH SANKYO">
        </a>
      </h1>
      <address>
        <p class="c-address c-lang-wrap">
        <span class="__jp">
            〒<?php echo $companies[0]['yubin']; ?>
            <br class="pc">
            <?php echo ' '.$companies[0]['address']; ?>
          </span>
          <span class="__en">
            <?php echo ' '.$companies[0]['address_en']; ?>
          </span>
        </p>
        <p class="c-tel c-lang-wrap">
          <span class="__jp">tel.<?php echo $companies[0]['tel_jp']; ?><!--<br>fax.<?php //echo $companies[0]['fax']; ?>--></span>
          <span class="__en">tel.<?php echo $companies[0]['tel_en']; ?><!--<br>fax.<?php //echo $companies[0]['fax']; ?>--></span>
        </p>
      </address>
    </div>
    <div class="footer__foot">
      <p class="copywrite">Copyright&nbsp;&copy;&nbsp;2022 SKY Japan Corporation All rights Reserved.</p>
    </div>

</div>

</footer>
