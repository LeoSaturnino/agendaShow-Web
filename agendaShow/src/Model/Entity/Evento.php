<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Evento Entity
 *
 * @property int $id
 * @property int $estabelecimentos_id
 * @property string $nome
 * @property string $descricao
 * @property string|null $banner
 * @property string|null $cronograma
 * @property int $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Estabelecimento $estabelecimento
 */
class Evento extends Entity
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
        'estabelecimentos_id' => true,
        'nome' => true,
        'descricao' => true,
        'banner' => true,
        'cronograma' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'estabelecimento' => true,
    ];
}
