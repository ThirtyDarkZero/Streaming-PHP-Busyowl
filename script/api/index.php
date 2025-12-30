<?php

require_once( dirname(dirname(__FILE__)) . "/api/app/config.php" );

require_once( bof_root . "/loader.php" );
require_once( root . "/app/client/loader.php" );

bof()->request->log();
bof()->execute->run();
bof()->response->display();

?>
