<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Logout Model
 *
 * @property \App\Model\Table\MembersTable|\Cake\ORM\Association\BelongsTo $Members
 *
 * @method \App\Model\Entity\Logout get($primaryKey, $options = [])
 * @method \App\Model\Entity\Logout newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Logout[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Logout|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Logout patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Logout[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Logout findOrCreate($search, callable $callback = null, $options = [])
 */
class LogoutTable extends Table
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

        $this->setTable('logout');
        $this->setDisplayField('logout_id');
        $this->setPrimaryKey('logout_id');

        $this->belongsTo('Members', [
            'foreignKey' => 'member_id',
            'joinType' => 'INNER'
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
            ->integer('logout_id')
            ->allowEmpty('logout_id', 'create');

        $validator
            ->dateTime('logout_time')
            ->requirePresence('logout_time', 'create')
            ->notEmpty('logout_time');

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
        $rules->add($rules->existsIn(['member_id'], 'Members'));

        return $rules;
    }
}
