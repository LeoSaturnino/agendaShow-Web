<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Estabelecimento Entity
 *
 * @property int $id
 * @property int $users_id
 * @property string $nome
 * @property int|null $categoria
 * @property string $proprietario
 * @property string|null $telefone
 * @property string $celular
 * @property string $logradouro
 * @property string $cep
 * @property string $numero
 * @property string $cidade
 * @property int $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 */
class Estabelecimento extends Entity
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
        'users_id' => true,
        'nome' => true,
        'categoria' => true,
        'proprietario' => true,
        'telefone' => true,
        'celular' => true,
        'logradouro' => true,
        'cep' => true,
        'numero' => true,
        'cidade' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
    ];
}
