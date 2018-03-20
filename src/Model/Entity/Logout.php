<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Logout Entity
 *
 * @property int $logout_id
 * @property int $member_id
 * @property \Cake\I18n\FrozenTime $logout_time
 *
 * @property \App\Model\Entity\Member $member
 */
class Logout extends Entity
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
        'member_id' => true,
        'logout_time' => true,
        'member' => true
    ];
}
