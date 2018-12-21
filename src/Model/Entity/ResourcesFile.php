<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ResourcesFile Entity
 *
 * @property int $id
 * @property int $resource_id
 * @property int $file_id
 *
 * @property \App\Model\Entity\Resource $resource
 * @property \App\Model\Entity\File $file
 */
class ResourcesFile extends Entity
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
        'resource_id' => true,
        'file_id' => true,
        'resource' => true,
        'file' => true
    ];
}
