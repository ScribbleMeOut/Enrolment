<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Request Entity
 *
 * @property int $id
 * @property string $name
 * @property string $lName
 * @property string $email
 * @property string $DOB
 * @property string $gender
 * @property string $nationality
 * @property int $telephoneNumber
 * @property string $extraSupport
 * @property int $GCSEs
 * @property int $ALevels
 * @property string $prevEducation
 * @property string $CGrade
 * @property string $courseLevel
 * @property string $courseApplication
 * @property string $Accepted
 */
class Request extends Entity
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
        'lName' => true,
        'email' => true,
        'DOB' => true,
        'gender' => true,
        'nationality' => true,
        'telephoneNumber' => true,
        'extraSupport' => true,
        'GCSEs' => true,
        'ALevels' => true,
        'prevEducation' => true,
        'CGrade' => true,
        'courseLevel' => true,
        'courseApplication' => true,
        'Accepted' => true,
    ];
}
