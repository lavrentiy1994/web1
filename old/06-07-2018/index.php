<?php

  echo '<form action="'. $_SERVER['PHP_SELF'] .'" method="GET" >';
  echo '<input name="firstname" type="text" placeholder="Ваше имя" pattern="^[a-zA-Z]+$" required/><br />';
  echo '<input name="login" type="text" placeholder="Логин" required/><br />';
  echo '<input name="email" type="email" placeholder="Ваш email"/><br />';
  echo '<input name="tel" type="tel" placeholder="123-4567-8901"/><br />';
  echo '<input name="date" id="date" type="date" /><br />';
  echo '<input name="lang" type="radio" value="eng"/>English|<input name="lang" type="radio" value="ru"/>Русский<br />';
  echo '<input name="buttom" type="submit" />';
  echo '</form>';




?>
