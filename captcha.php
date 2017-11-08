<script src='https://www.google.com/recaptcha/api.js'></script>
<div class="g-recaptcha" id="rcaptcha" data-sitekey="6LeFnTYUAAAAAFGYATrh9Ns-v-0DrvbDkbeXa3Pw"></div>
var v = grecaptcha.getResponse();if(v.length == 0){jQuery(".capt").html('Captcha not match);} else {jQuery(".capt").html('Captcha match);}
