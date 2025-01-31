<?php
if (isset($_COOKIE['page_visits'])) {
    $Visits = $_COOKIE['page_visits'] + 1;
} else {
    $Visits = 1;
}
setcookie('page_visits', $Visits, 0);
echo "Deze pagina heb je al: $Visits keer bekeken voordat je de internetbrowser hebt afgesloten.";
?>