<?php
  $ua = $_SERVER['HTTP_USER_AGENT'];
  echo $ua;
  $ua_list = ['iPhone','iPad','iPod','Android','touch']
  $user_agent = 'pc';
  foreach($ua_list as $value){
    if(strpos($subject,'bc') !== false){
    //'abcd'のなかに'bc'が含まれている場合
    $user_agent = 'sp';
    break;}
  }
?>

<?php  if($user_agent = 'pc'){?>
  <ul>
    <li>menu1</li>
    <li>menu2</li>
    <li>menu3</li>
  </ul>
  <?php }else{ ?>
  <p>
    <span>menu<strong>1</strong></span>
    <span>menu<strong>2</strong></span>
    <span>menu<strong>3</strong></span>
  </p>
  <?php } ?>