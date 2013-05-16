<?php

/** database host, usually it's "127.0.0.1" or "localhost", some servers also need port info, like "127.0.0.1:8080" */
define("LOGIN_HOST", "localhost");

/** name of the database. please note: database and database table are not the same thing! */
define("LOGIN_NAME", apache_getenv("SQL_NAME"));

/** user for your database. the user needs to have rights for SELECT, UPDATE, DELETE and INSERT.
/** By the way, it's bad style to use "root", but for development it will work */
define("LOGIN_USER", apache_getenv("SQL_USER"));

/** the password of the above user */
define("LOGIN_PASS", apache_getenv("SQL_PASS"));

/** enable/disable logins */
define("LOGIN_ENABLED", true);

/** enable/disable signup */
define("SIGNUP_ENABLED", true);
