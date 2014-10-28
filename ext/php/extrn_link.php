<?php
include '/home/forumc/common/header.php'; // Common configs

Config::set_config('/home/forumc/common/config.php'); // Local config

$stat_obj = new Statistic;
$stat_obj->external_link();
