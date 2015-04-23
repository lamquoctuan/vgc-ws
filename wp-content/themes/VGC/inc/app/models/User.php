<?php
namespace app\models;


class User
{
    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $resetPassToken;
    public $subscribed;
    private $password;
    public $hashed;

    private $_newAttributes;
    private $_oldAttributes;

    private $tableName = 'alabeo_customers';

    public function __construct($lead = [])
    {
        if (!empty($lead)) {
            $this->_newAttributes['first_name'] = $this->first_name = \app\helpers\Utils::arrayGet('first_name', $lead);
            $this->_newAttributes['last_name'] = $this->last_name = \app\helpers\Utils::arrayGet('last_name', $lead);
            $this->_newAttributes['email'] = $this->email = \app\helpers\Utils::arrayGet('email', $lead);
            $this->_newAttributes['subscribed'] = $this->email = \app\helpers\Utils::arrayGet('subscribed', $lead);
            $this->password = \app\helpers\Utils::arrayGet('password', $lead);
        }
    }

    public function setPassword($leadPass = null){
        if (! empty($leadPass)) {
            $this->password = $leadPass;
        }
        $this->hashed = wp_hash_password($this->password);
        $this->_newAttributes['hashed'] = $this->hashed;
    }

    protected function setAttributes(){
        foreach ($this->_oldAttributes as $key =>$value) {
            $this->_newAttributes[$key] = $this->{$key};
        }
    }

    public function exists()
    {
        return false;
    }

    public function findOne($id) {
        global $wpdb;
        $query = "SELECT id, email, first_name, last_name, email, hashed, reset_pass_token, subscribed FROM {$this->tableName} WHERE id = '{$id}'";
        $record = $wpdb->get_row($query);
        if ($record != null) {
            foreach($record as $key=>$val) {
                $this->{$key} = $val;
                $this->_oldAttributes[$key] = $val;
            }
            $this->_newAttributes = $this->_oldAttributes;
            return true;
        } else {
            return false;
        }
    }
    public function findByEmail($email) {
        global $wpdb;
        $query = "SELECT id, email, first_name, last_name, email, hashed, reset_pass_token, subscribed FROM {$this->tableName} WHERE email = '{$email}'";
        $record = $wpdb->get_row($query);
        if ($record != null) {
            foreach($record as $key=>$val) {
                $this->{$key} = $val;
                $this->_oldAttributes[$key] = $val;
            }
            $this->_newAttributes = $this->_oldAttributes;
            return true;
        } else {
            return false;
        }
    }

    public function checkPassword($leadPass) {
        global $wp_hasher;
        if ( empty($wp_hasher) ) {
            require_once( ABSPATH . WPINC . '/class-phpass.php');
            // By default, use the portable hash from phpass
            $wp_hasher = new \PasswordHash(8, true);
        }
        return $wp_hasher->CheckPassword($leadPass, $this->hashed);
    }

    public function save()
    {
        global $wpdb;

        if (isset($this->id)) {
            $this->setAttributes();
            $updateValues = $this->_newAttributes;
            $numRows = $wpdb->update(
                $this->tableName,
                $updateValues,
                array( 'id' => $this->id )
            );
            if ($numRows == false) {
                error_log('Update Lead failed.');
            }
        }
        else {
            $this->setPassword();
            $wpdb->insert(
                $this->tableName,
                array(
                    'first_name' => $this->first_name,
                    'last_name' => $this->last_name,
                    'email' => $this->email,
                    'hashed' => $this->hashed,
                    'subscribed' => $this->subscribed,
                    'date_created' => \app\helpers\Utils::now()
                ),
                array(
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s'
                )
            );
            $this->id = $wpdb->insert_id;
        }
    }
}