I am a sample symfony app, in development mode! Here is some php:
<?= time();?>
<br/>
Now, let us try to access the database.
<?php $dbh = new PDO('pgsql:host=database;dbname=sample_app', 'sample_app', 'sample_app');
$statement = $dbh->query('SELECT NOW();');
$time = $statement->fetchObject()->now;
;?>
Here is the time, right from the database: <?= $time; ?>
<?php
    $memcache = new Memcache;
    $memcache->addServer('memcached');
?>
<br/>
And now let us try to get memcache's status (0 is bad) : <?= $memcache->getServerStatus('memcached');
