<?php

/*
 | --------------------------------------------------------------------
 | App Namespace
 | --------------------------------------------------------------------
 |
 | This defines the default Namespace that is used throughout
 | CodeIgniter to refer to the Application directory. Change
 | this constant to change the namespace that all application
 | classes should use.
 |
 | NOTE: changing this will require manually modifying the
 | existing namespaces of App\* namespaced-classes.
 */
defined('APP_NAMESPACE') || define('APP_NAMESPACE', 'App');

/*
 | --------------------------------------------------------------------------
 | Composer Path
 | --------------------------------------------------------------------------
 |
 | The path that Composer's autoload file is expected to live. By default,
 | the vendor folder is in the Root directory, but you can customize that here.
 */
defined('COMPOSER_PATH') || define('COMPOSER_PATH', ROOTPATH . 'vendor/autoload.php');

/*
 |--------------------------------------------------------------------------
 | Timing Constants
 |--------------------------------------------------------------------------
 |
 | Provide simple ways to work with the myriad of PHP functions that
 | require information to be in seconds.
 */
defined('SECOND') || define('SECOND', 1);
defined('MINUTE') || define('MINUTE', 60);
defined('HOUR')   || define('HOUR', 3600);
defined('DAY')    || define('DAY', 86400);
defined('WEEK')   || define('WEEK', 604800);
defined('MONTH')  || define('MONTH', 2_592_000);
defined('YEAR')   || define('YEAR', 31_536_000);
defined('DECADE') || define('DECADE', 315_360_000);

/*
 | --------------------------------------------------------------------------
 | Exit Status Codes
 | --------------------------------------------------------------------------
 |
 | Used to indicate the conditions under which the script is exit()ing.
 | While there is no universal standard for error codes, there are some
 | broad conventions.  Three such conventions are mentioned below, for
 | those who wish to make use of them.  The CodeIgniter defaults were
 | chosen for the least overlap with these conventions, while still
 | leaving room for others to be defined in future versions and user
 | applications.
 |
 | The three main conventions used for determining exit status codes
 | are as follows:
 |
 |    Standard C/C++ Library (stdlibc):
 |       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
 |       (This link also contains other GNU-specific conventions)
 |    BSD sysexits.h:
 |       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
 |    Bash scripting:
 |       http://tldp.org/LDP/abs/html/exitcodes.html
 |
 */
defined('EXIT_SUCCESS')        || define('EXIT_SUCCESS', 0);        // no errors
defined('EXIT_ERROR')          || define('EXIT_ERROR', 1);          // generic error
defined('EXIT_CONFIG')         || define('EXIT_CONFIG', 3);         // configuration error
defined('EXIT_UNKNOWN_FILE')   || define('EXIT_UNKNOWN_FILE', 4);   // file not found
defined('EXIT_UNKNOWN_CLASS')  || define('EXIT_UNKNOWN_CLASS', 5);  // unknown class
defined('EXIT_UNKNOWN_METHOD') || define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     || define('EXIT_USER_INPUT', 7);     // invalid user input
defined('EXIT_DATABASE')       || define('EXIT_DATABASE', 8);       // database error
defined('EXIT__AUTO_MIN')      || define('EXIT__AUTO_MIN', 9);      // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      || define('EXIT__AUTO_MAX', 125);    // highest automatically-assigned error code

/**
 * @deprecated Use \CodeIgniter\Events\Events::PRIORITY_LOW instead.
 */
define('EVENT_PRIORITY_LOW', 200);

/**
 * @deprecated Use \CodeIgniter\Events\Events::PRIORITY_NORMAL instead.
 */
define('EVENT_PRIORITY_NORMAL', 100);

/**
 * @deprecated Use \CodeIgniter\Events\Events::PRIORITY_HIGH instead.
 */
define('EVENT_PRIORITY_HIGH', 10);
#
# WebToken
# 
defined('WEBTOKEN') or define('WEBTOKEN', '0E7E2670DE06AF4A304DC92E38F11DA6');
#
# Modo Debug MyPrint
# 
defined('DEBUG_MY_PRINT') or define('DEBUG_MY_PRINT', true);
$currentmonth = date('m');
$month = $currentmonth + 5;
$form_value = [
    'name' => md5(password_hash('name1', PASSWORD_DEFAULT)) . ' ' . md5(password_hash('name2', PASSWORD_DEFAULT)),
    'profile' => 'client',
    'generalregistry' => date('iH.s-m'),
    'individualregistration' => time() . '1',
    'zipcode' => date('d.i') . '5' . '-9' . date('m'),
    'address' => 'Rua ' . md5(password_hash('name1', PASSWORD_DEFAULT)),
    'number' => date('id'),
    'neighborhood' => md5(password_hash('neighborhood', PASSWORD_DEFAULT)),
    'city' => 'Rio de Janeiro',
    'state' => 'Rio de Janeiro',
    'federalunit' => 'RJ',
    'mail' => md5(password_hash('mail', PASSWORD_DEFAULT)) . '@' . md5(password_hash('server', PASSWORD_DEFAULT)) . '.com',
    'password1' => md5('password'),
    'password2' => md5('password'),
    'telephone' => '(' . date('s') . ')' . date('id-iH'),
    'cellphone' => '(' . date('s') . ')' . '9' . date('id-iH'),
    'active' => 'Y',
    'registrationdate' => date('Y-m-d'),
    'expirydate' => date("Y-$month-d"),
    'nationalregistrationoflegalentity' => time() . date('is'),
    'stateregistration' => time() . date('s'),
    'site' => 'www.' . md5(password_hash('site', PASSWORD_DEFAULT)) . time() . '.com',
    'licenseplate' => strtoupper(substr(md5(password_hash('licenseplate', PASSWORD_DEFAULT)), 0, 3) . '-' . strtoupper(substr(md5(password_hash('licenseplate', PASSWORD_DEFAULT)), -4))),
    'color' => substr(md5(password_hash('licenseplate', PASSWORD_DEFAULT)), 0, 9),
    'yearofmanufacture' => date('Y-m-d'),
    'modelyear' => date('Y-m-d'),
    'newused' => 'Usado',
    'manufacturer' => 'Chevrolett',
    'chassis' => strtoupper(substr(md5(password_hash('chassis', PASSWORD_DEFAULT)), 0, 17)),
    // 'osnumber'=>
];
defined('FORM_DEFAULT') or define('FORM_DEFAULT', $form_value);

if (
    $_SERVER['SERVER_NAME'] == 'localhost'
    || $_SERVER['SERVER_NAME'] == '10.146.84.140'
    || $_SERVER['SERVER_NAME'] == '10.146.84.177'
) {
    # Ambiente Localhost
    defined('DATABASE_CONNECTION_DATA') or define('DATABASE_CONNECTION_DATA', "saotiago_localhost");
} elseif (
    $_SERVER['SERVER_NAME'] == 'habilidade.com'
    || $_SERVER['SERVER_NAME'] == 'habilidade.com'
    || $_SERVER['SERVER_NAME'] == 'www.habilidade.com'
) {
    defined('DATABASE_CONNECTION_DATA') or define('DATABASE_CONNECTION_DATA', "saotiago_habilidade");
}
