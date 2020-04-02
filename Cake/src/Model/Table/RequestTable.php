<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Request Model
 *
 * @method \App\Model\Entity\Request newEmptyEntity()
 * @method \App\Model\Entity\Request newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Request[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Request get($primaryKey, $options = [])
 * @method \App\Model\Entity\Request findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Request patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Request[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Request|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Request saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Request[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Request[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Request[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Request[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class RequestTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('request');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 25)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('lName')
            ->maxLength('lName', 26)
            ->requirePresence('lName', 'create')
            ->notEmptyString('lName');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('DOB')
            ->maxLength('DOB', 10)
            ->requirePresence('DOB', 'create')
            ->notEmptyString('DOB');

        $validator
            ->scalar('gender')
            ->requirePresence('gender', 'create')
            ->notEmptyString('gender');

        $validator
            ->scalar('nationality')
            ->maxLength('nationality', 30)
            ->requirePresence('nationality', 'create')
            ->notEmptyString('nationality');

        $validator
            ->requirePresence('telephoneNumber', 'create')
            ->notEmptyString('telephoneNumber');

        $validator
            ->scalar('extraSupport')
            ->requirePresence('extraSupport', 'create')
            ->notEmptyString('extraSupport');

        $validator
            ->integer('GCSEs')
            ->requirePresence('GCSEs', 'create')
            ->notEmptyString('GCSEs');

        $validator
            ->integer('ALevels')
            ->requirePresence('ALevels', 'create')
            ->notEmptyString('ALevels');

        $validator
            ->scalar('prevEducation')
            ->maxLength('prevEducation', 20)
            ->requirePresence('prevEducation', 'create')
            ->notEmptyString('prevEducation');

        $validator
            ->scalar('CGrade')
            ->requirePresence('CGrade', 'create')
            ->notEmptyString('CGrade');

        $validator
            ->scalar('courseLevel')
            ->maxLength('courseLevel', 15)
            ->requirePresence('courseLevel', 'create')
            ->notEmptyString('courseLevel');

        $validator
            ->scalar('courseApplication')
            ->maxLength('courseApplication', 20)
            ->requirePresence('courseApplication', 'create')
            ->notEmptyString('courseApplication');

        $validator
            ->scalar('Accepted')
            ->requirePresence('Accepted', 'create')
            ->notEmptyString('Accepted');

        return $validator;
    }
}
