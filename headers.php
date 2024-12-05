<!DOCTYPE html>
<html>
<body>
<div>Deze php pagina laat alle headers zien als key: value</div>
<?php

foreach (getallheaders() as $name => $value) {
    echo "<div>$name: $value\n</div>";
}

?>
</body>
</html>