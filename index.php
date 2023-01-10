<!DOCTYPE html>
<html>
<body>

<h2> My Server's Hostname & IP Address</h2>

<h1> HOSTNAME:
<?php

echo "hostname is:" .gethostname();

?>
</h1>

<h1>IP ADDRESS:
<?php

echo file_get_contents('http://169.254.169.254/latest/meta-data/local-ipv4');

?>
</h2>

</body>
</html>
