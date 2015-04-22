<?php
namespace app\models;


class User
{
    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $resetPassToken;
    private $password;
    public $hashed;

    private $tableName = 'alabeo_customers';

    public function __construct($lead = [])
    {
        if (!empty($lead)) {
            $this->first_name = \app\helpers\Utils::arrayGet('first_name', $lead);
            $this->last_name = \app\helpers\Utils::arrayGet('last_name', $lead);
            $this->email = \app\helpers\Utils::arrayGet('email', $lead);
            $this->password = \app\helpers\Utils::arrayGet('password', $lead);
        }
    }

    public function exists()
    {
        return false;
    }

    public function findOne($id) {
        global $wpdb;
        $query = "SELECT id, email, first_name, last_name, email, hashed, reset_pass_token FROM {$this->tableName} WHERE id = '{$id}'";
        $record = $wpdb->get_row($query);
        if ($record != null) {
            foreach($record as $key=>$val) {
                $this->{$key} = $val;
            }
            return true;
        } else {
            return false;
        }
    }
    public function findByEmail($email) {
        global $wpdb;
        $query = "SELECT id, email, first_name, last_name, email, hashed, reset_pass_token FROM {$this->tableName} WHERE email = '{$email}'";
        $record = $wpdb->get_row($query);
        if ($record != null) {
            foreach($record as $key=>$val) {
                $this->{$key} = $val;
            }
            return true;
        } else {
            return false;
        }
    }

    public function save()
    {
        global $wpdb;
        $this->hashed = wp_hash_password($this->password);
        $wpdb->insert(
            $this->tableName,
            array(
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'email' => $this->email,
                'hashed' => $this->hashed,
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