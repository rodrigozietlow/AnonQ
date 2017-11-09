<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tag Entity
 *
 * @property int $id
 * @property string $nome
 * @property int $sala_id
 *
 * @property \App\Model\Entity\Sala $sala
 * @property \App\Model\Entity\Pergunta[] $perguntas
 */
class Tag extends Entity
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
        'nome' => true,
        'sala_id' => true,
        'sala' => true,
        'perguntas' => true
    ];
}
