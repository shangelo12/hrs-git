<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Room Entity
 *
 * @property int $id
 * @property string $name
 * @property int $room_number
 * @property string $description
 * @property string $images
 * @property bool $room_avi
 * @property \Cake\I18n\FrozenTime $created
 * @property int $hotel_id
 *
 * @property \App\Model\Entity\Hotel $hotel
 * @property \App\Model\Entity\Reservation[] $reservations
 */
class Room extends Entity
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
        'room_number' => true,
        'description' => true,
        'images' => true,
        'room_avi' => true,
        'created' => true,
        'hotel_id' => true,
        'hotel' => true,
        'reservations' => true
    ];
}
