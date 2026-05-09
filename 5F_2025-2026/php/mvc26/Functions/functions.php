<?php
function logError(Exception $e):void {
    error_log($e->getMessage().'---'.date('Y-m-d H:i:s')."\n", 3, 'Log/database_logfile.log');
}
