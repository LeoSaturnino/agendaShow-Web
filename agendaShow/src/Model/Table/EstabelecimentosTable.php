<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Estabelecimentos Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Estabelecimento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Estabelecimento newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Estabelecimento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Estabelecimento|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Estabelecimento saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Estabelecimento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Estabelecimento[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Estabelecimento findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EstabelecimentosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('estabelecimentos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'users_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create')
            ->add('id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('nome')
            ->maxLength('nome', 60)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

        $validator
            ->integer('categoria')
            ->allowEmptyString('categoria');

        $validator
            ->scalar('proprietario')
            ->maxLength('proprietario', 45)
            ->requirePresence('proprietario', 'create')
            ->notEmptyString('proprietario');

        $validator
            ->scalar('telefone')
            ->maxLength('telefone', 45)
            ->allowEmptyString('telefone');

        $validator
            ->scalar('celular')
            ->maxLength('celular', 45)
            ->requirePresence('celular', 'create')
            ->notEmptyString('celular');

        $validator
            ->scalar('logradouro')
            ->maxLength('logradouro', 45)
            ->requirePresence('logradouro', 'create')
            ->notEmptyString('logradouro');

        $validator
            ->scalar('cep')
            ->maxLength('cep', 45)
            ->requirePresence('cep', 'create')
            ->notEmptyString('cep');

        $validator
            ->scalar('numero')
            ->maxLength('numero', 45)
            ->requirePresence('numero', 'create')
            ->notEmptyString('numero');

        $validator
            ->scalar('cidade')
            ->maxLength('cidade', 45)
            ->requirePresence('cidade', 'create')
            ->notEmptyString('cidade');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['id']));
        $rules->add($rules->existsIn(['users_id'], 'Users'));

        return $rules;
    }
}
