<?php

add_action('init', 'vgcLogout', 2);
add_action('init', 'vgcStartSession', 1);
//add_action('wp_logout', 'vgcEndSession');
//add_action('wp_login', 'vgcEndSession');

function vgcStartSession()
{
    global $_SESSION;
    if (!session_id()) {
//        ob_start();
        session_start();
    }
}

function vgcEndSession()
{
    global $_SESSION;
    session_destroy();
}
function vgcLogout() {
    if (isset($_GET['logout'])) {
        vgcEndSession();
//        session_destroy();
        wp_redirect('/', 301);exit();
    }
}

function redirectTo($uri, $status = 302)
{
    $url = site_url($uri);
    wp_redirect($url, $status); exit();
}

add_action('session_check', 'vgcSessionCheck', 10, 1);
function vgcSessionCheck($redirectTo = false)
{
    global $_SESSION;
    if (is_single('login') || is_single('register') || is_single('forgot')) {
        if (isset($_SESSION['cus_id'])) {
            wp_redirect(site_url('/account/dashboard/'), 301);
            exit();
        }
    } else {
        if (!isset($_SESSION['cus_id'])) {
            wp_redirect(site_url('/account/login/'), 301);
            exit();
        } else {
            if ($redirectTo != false) {
                wp_redirect(site_url($redirectTo), 301);
                exit();
            }
        }
    }
}

add_action('wp_head', 'vgcActionCheck', 1, 1);
//add_action('action_check', 'vgcActionCheck', 10, 1);
function vgcActionCheck()
{
    global $_POST;
    if (!isset($_POST['form_key'])) {
        return false;
    }
    $actions = array('form_register', 'form_login');
    foreach ($actions as $action) {
        if (wp_verify_nonce($_POST['form_key'], $action)) {
            do_action($action);
            break;
        }
    }
}

add_action('form_register', 'vgcFormRegister');
function vgcFormRegister()
{
    global $_POST;
    $url = site_url('/account/register/');
    $lead = \app\helpers\Utils::arrayGet('lead', $_POST);
    if (is_null($lead)) {
        return false;
    }

    $leadPass = \app\helpers\Utils::arrayGet('password', $lead, '');
    $leadConf = \app\helpers\Utils::arrayGet('confirmation', $lead, '');
    if ( $leadPass !== $leadConf ) {
        return false;
    }

    $leadEmail = \app\helpers\Utils::arrayGet('email', $lead, '');
    if (! \app\helpers\Utils::isValidEmail($leadEmail)) {
        return false;
    }

    $leadFirstName = \app\helpers\Utils::arrayGet('first_name', $lead, '');
    $leadLastName = \app\helpers\Utils::arrayGet('last_name', $lead, '');
    if (empty ($leadLastName)) {
        return false;
    }

    //@TO-DO
    $user = new \app\models\User(['first_name' => $leadFirstName, 'last_name' => $leadLastName, 'email' => $leadEmail, 'password' => $leadPass]);
    if (! $user->exists()) {
        $user->save();
        if (isset($user->id)) {
            redirectTo('/account/login/');
        }
    }
}


add_action('form_login', 'vgcFormLogin');
function vgcFormLogin()
{
    global $_POST;
    $lead = \app\helpers\Utils::arrayGet('lead', $_POST);
    if (is_null($lead)) {
        return false;
    }

    $leadPass = \app\helpers\Utils::arrayGet('password', $lead, '');
    $leadEmail = \app\helpers\Utils::arrayGet('email', $lead, '');
    if (! \app\helpers\Utils::isValidEmail($leadEmail)) {
        return false;
    }
    $user = new \app\models\User();
    if ( $user->findByEmail($leadEmail) !== false) {
        global $wp_hasher;
        if ( empty($wp_hasher) ) {
            require_once( ABSPATH . WPINC . '/class-phpass.php');
            // By default, use the portable hash from phpass
            $wp_hasher = new PasswordHash(8, true);
        }
        $check = $wp_hasher->CheckPassword($leadPass, $user->hashed);
        if ( $check ) {
            $_SESSION['cus_id'] = $user->id;
//            redirectTo('/account/dashboard/');
        }
    }
    else {
        //user not exists
        error_log('user doesn\'t exists');
    }

}