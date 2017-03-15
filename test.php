<?php
	$command = "mysqldump -u spicesmart -h testspicemart.cpzoed5qx3ag.ap-northeast-1.rds.amazonaws.com --password=spicesmart newspicemart user > user.sql";

	exec($command);
?>