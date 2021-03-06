<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_User extends Model_Auth_User {

	protected $_has_many = array(
        'user_tokens' => array('model' => 'User_Token'),
        'roles'       => array('model' => 'Role', 'through' => 'roles_users'),
        'articles'    => array('model' => 'Article')
    );

    protected $_has_one = array(
        'student' => array('model' => 'Student')
    );

} // End User Model