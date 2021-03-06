<?php 
class User extends AppModel {
	public $hasMany = array( 'Member' => array('className' => 'Member', 'foreignKey' => 'member_id'),
							'Message' => array('className' => 'Message', 'foreignKey' => 'message_id'),
							'Checked' => array('className' => 'Checked', 'foreignKey' => 'checkedby_id'),
							'Friend' => array('className' => 'Friend', 'foreignKey' => 'friend_id')
							);

	public $hasOne = 'Friend';
}