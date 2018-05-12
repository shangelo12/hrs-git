<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Hotel Entity
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $email
 * @property int $contact_num
 * @property string $description
 * @property string $images
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $users_id
 *
 * @property \App\Model\Entity\Reservation[] $reservations
 * @property \App\Model\Entity\Room[] $rooms
 * @property \App\Model\Entity\User[] $users
 */
class Hotel extends Entity
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
        'name' => true,
        'address' => true,
        'email' => true,
        'contact_num' => true,
        'description' => true,
        'images' => true,
        'created' => true,
        'modified' => true,
        'users_id' => true,
        'reservations' => true,
        'rooms' => true,
        'users' => true
    ];
}
