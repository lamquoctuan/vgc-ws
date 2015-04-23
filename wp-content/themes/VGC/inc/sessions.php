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

function vgcLogout()
{
    if (isset($_GET['logout'])) {
        vgcEndSession();
//        session_destroy();
        wp_redirect('/', 301);
        exit();
    }
}

function redirectTo($uri, $status = 302)
{
    $url = site_url($uri);
    wp_redirect($url, $status);
    exit();
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
    $actions = array('form_register', 'form_login', 'form_info', 'form_subscribe');
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
    if ($leadPass !== $leadConf) {
        return false;
    }

    $leadEmail = \app\helpers\Utils::arrayGet('email', $lead, '');
    if (!\app\helpers\Utils::isValidEmail($leadEmail)) {
        return false;
    }

    $leadFirstName = \app\helpers\Utils::arrayGet('first_name', $lead, '');
    $leadLastName = \app\helpers\Utils::arrayGet('last_name', $lead, '');
    if (empty ($leadLastName)) {
        return false;
    }

    //@TO-DO
    $user = new \app\models\User(['first_name' => $leadFirstName, 'last_name' => $leadLastName, 'email' => $leadEmail, 'password' => $leadPass]);
    if (!$user->exists()) {
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
    if (!\app\helpers\Utils::isValidEmail($leadEmail)) {
        return false;
    }
    $user = new \app\models\User();
    if ($user->findByEmail($leadEmail) !== false) {
        $check = $user->checkPassword($leadPass);
        if ($check) {
            $_SESSION['cus_id'] = $user->id;
            \app\helpers\Utils::redirectTo('/account/dashboard/');
        }
    } else {
        //user not exists
        error_log('user doesn\'t exists');
    }

}

add_action('form_info', 'vgcFormInfo');
function vgcFormInfo()
{
    global $_POST;

    $lead = \app\helpers\Utils::arrayGet('lead', $_POST);
    if (is_null($lead)) {
        return false;
    }

    $leadFirstName = \app\helpers\Utils::arrayGet('first_name', $lead, '');
    $leadLastName = \app\helpers\Utils::arrayGet('last_name', $lead, '');
    $leadEmail = \app\helpers\Utils::arrayGet('email', $lead, '');
    $leadCurPass = \app\helpers\Utils::arrayGet('cur_password', $lead, '');
    $leadNewPass = \app\helpers\Utils::arrayGet('new_password', $lead, '');
    $leadConfirm = \app\helpers\Utils::arrayGet('confirmation', $lead, '');
    if (!\app\helpers\Utils::isValidEmail($leadEmail)) {
        return false;
    }
    $user = new \app\models\User();

    if ($user->findByEmail($leadEmail) !== false) {

        if (!empty($leadCurPass)) {
            $check = $user->checkPassword($leadCurPass);
            if ($check) {
                if ($leadNewPass == $leadConfirm) {
                    $user->setPassword($leadNewPass);
                }
            }
        }
        if (! empty($leadFirstName)) {
            $user->first_name =$leadFirstName;
        }
        if (! empty($leadLastName)) {
            $user->last_name =$leadLastName;
        }
        if (! empty($leadEmail)) {
            $user->email =$leadEmail;
        }
        $user->save();
    } else {
        //user not exists
        error_log('user doesn\'t exists');
    }

}

add_action('form_subscribe', 'vgcFormSubscribe');
function vgcFormSubscribe()
{
    global $_POST, $_SESSION;
    $lead = \app\helpers\Utils::arrayGet('lead', $_POST);
    if (is_null($lead)) {
        return false;
    }

    $leadSubscribed = \app\helpers\Utils::arrayGet('subscribed', $lead, 0);

    $user = new \app\models\User();
    if ($user->findOne($_SESSION['cus_id']) !== false) {
        if ($user->subscribed !=$leadSubscribed) {
            $user->subscribed =$leadSubscribed;
        }
        $user->save();
    } else {
        //user not exists
        error_log('user doesn\'t exists');
    }

}