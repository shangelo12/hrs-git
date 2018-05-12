<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reservation Entity
 *
 * @property int $id
 * @property int $room_id
 * @property int $user_id
 * @property int $hotel_id
 * @property int $start_date
 * @property int $end_date
 *
 * @property \App\Model\Entity\Room $room
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Hotel $hotel
 */
class Reservation extends Entity
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
        'room_id' => true,
        'user_id' => true,
        'hotel_id' => true,
        'start_date' => true,
        'end_date' => true,
        'room' => true,
        'user' => true,
        'hotel' => true
    ];
}
