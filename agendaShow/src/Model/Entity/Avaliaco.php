<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Avaliaco Entity
 *
 * @property int $id
 * @property int $clientes_id
 * @property int $estabelecimentos_id
 * @property int $categoria
 * @property int $nota
 * @property int $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Cliente $cliente
 * @property \App\Model\Entity\Estabelecimento $estabelecimento
 */
class Avaliaco extends Entity
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
        'clientes_id' => true,
        'estabelecimentos_id' => true,
        'categoria' => true,
        'nota' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'cliente' => true,
        'estabelecimento' => true,
    ];
}
