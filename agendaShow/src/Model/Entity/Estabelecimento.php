<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Estabelecimento Entity
 *
 * @property int $id
 * @property int $users_id
 * @property string $proprietario
 * @property string $nome
 * @property int|null $categoria
 * @property string|null $telefone
 * @property string $celular
 * @property string $cep
 * @property string $logradouro
 * @property string $numero
 * @property string $uf
 * @property string $cidade
 * @property string $bairro
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
        'proprietario' => true,
        'nome' => true,
        'categoria' => true,
        'telefone' => true,
        'celular' => true,
        'cep' => true,
        'logradouro' => true,
        'numero' => true,
        'uf' => true,
        'cidade' => true,
        'bairro' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
    ];
}
