<?php
echo "PHP tutorial on Cookies" . "<br/><br/>";

setcookie("category", "books", time() + 86400, "/");
echo "The cookie is set <br/>";