<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Name Entity
 *
 * @property int $id
 * @property string $name
 * @property int $id_work
 * @property int $id_salary
 */
class Name extends Entity
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
        'id_work' => true,
        'id_salary' => true
    ];
}
