<?php
/**
 * ***************************************************************
 * globals.php (c) 2004 Jonathan Dieter
 *
 * Store any user modifiable global variables to be used by LESSON.
 * ***************************************************************
 */
include "core/constants.php"; // Get login functions

/* User modifiable globals */

$MAX_TRIES = 3; // Maximum number of login attempts with
                // non-existent usernames before IP is blacklisted

$MAX_LOW_MARKS = 3000; // Maximum number of low marks to show without a
                       // warning

#$DSN = "mysqli://ODBC@database.lesbg.com/lesson"; // DSN to connect to database
#$PDO_DSN = "mysql:host=database.lesbg.com;dbname=lesson;charset=utf8"; // DSN to connect to database
$DSN = "mysqli://ODBC@localhost/lesson"; // DSN to connect to database
$PDO_DSN = "mysql:host=127.0.0.1;dbname=lesson;charset=utf8"; // DSN to connect to database
$PDO_USER = "ODBC";
$PDO_PWD = "";

$LDAP_URI = "ldap://ipa4.lesbg.com";
$LDAP_SEARCH = "cn=users,cn=accounts,dc=local,dc=lesbg,dc=com";
$LDAP_RDN = "uid=";

$IPA_PW_UID = "admin@LOCAL.LESBG.COM";
$IPA_PW_PWD = "DerisYoor";

$LOG_LEVEL = $LOG_LEVEL_TEACHER; // Set log level. See core/constants.php for more details
$LOGS_PER_PAGE = 100; // Number of logs to show per page
$LOCAL_HOSTS = ".local.lesbg.com"; // Domain of local hosts
$UPLOAD_BASE_DIR = "/var/www/share/uploads"; // Base directory for uploads

$URL = "https://lesson.lesbg.com";

$SMS_PASSWORD = "peach11m";

$REPLICA_COUNT = 2;
$REPLICA_ID = 2;

$DYNAMIC_FILES_LOCATION = "/var/www/lesson-dynamic";
$STATIC_FILES_LOCATION = "/var/www/html/lesson-static";
$STATIC_FILES_WEBPATH = "/lesson-static";

$SHOW_COMMENT_LENGTH = 30;

$DEFAULT_PUN_PERM = 2;
