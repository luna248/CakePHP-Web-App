<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Login Entity
 *
 * @property int $loginID
 * @property int $member_ID
 * @property \Cake\I18n\FrozenTime $login_time
 */
class Login extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'member_ID' => true,
        'login_time' => true
    ];
}
