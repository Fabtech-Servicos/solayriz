<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Operation Model
 *
 * @method \App\Model\Entity\Operation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Operation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Operation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Operation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Operation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Operation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Operation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Operation findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OperationTable extends Table
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

        $this->setTable('operation');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'photo' => [
                'fields' => [
                    'dir' => 'photo_dir',
                    'size' => 'photo_size',
                    'type' => 'photo_type',
                ],
            ],

            'photo2' => [
                'fields' => [
                    'dir' => 'photo2_dir',
                    'size' => 'photo2_size',
                    'type' => 'photo2_type',
                ],
            ],

            'cover' => [
                'fields' => [
                    'dir' => 'cover_dir',
                    'size' => 'cover_size',
                    'type' => 'cover_type',
                ],
            ],

            'photo3' => [
                'fields' => [
                    'dir' => 'photo3_dir',
                    'size' => 'photo3_size',
                    'type' => 'photo3_type',
                ],
            ],

            'photo4' => [
                'fields' => [
                    'dir' => 'photo4_dir',
                    'size' => 'photo4_size',
                    'type' => 'photo4_type',
                ],
            ],
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
        ->allowEmptyString('id', 'create');

    $validator
        ->dateTime('modifield')
        ->allowEmptyDateTime('modifield');

    $validator
        ->scalar('title')
        ->maxLength('title', 50)
        ->allowEmptyString('title');

    $validator
        ->scalar('description')
        ->allowEmptyString('description');

    $validator
        ->allowEmptyString('photo');

    $validator
        ->allowEmptyString('photo2');

    $validator
        ->scalar('title2')
        ->maxLength('title2', 100)
        ->allowEmptyString('title2');

    $validator
        ->scalar('scenario')
        ->allowEmptyString('scenario');

    $validator
        ->scalar('scenario2')
        ->allowEmptyString('scenario2');

    $validator
        ->scalar('scenario3')
        ->allowEmptyString('scenario3');

    $validator
        ->allowEmptyString('cover');

    $validator
        ->scalar('link')
        ->maxLength('link', 255)
        ->allowEmptyString('link');

    $validator
        ->scalar('title_ installation')
        ->maxLength('title_installation', 100)
        ->allowEmptyString('title_installation');

    $validator
        ->scalar('installation')
        ->allowEmptyString('installation');

    $validator
        ->allowEmptyString('Photo3');

    $validator
        ->scalar('title_ installation2')
        ->maxLength('title_installation2', 100)
        ->allowEmptyString('title_installation');

    $validator
        ->scalar('installation2')
        ->allowEmptyString('installation2');

    $validator
        ->allowEmptyString('Photo4');

    $validator
        ->scalar('begin')
        ->maxLength('begin', 255)
        ->allowEmptyString('begin');

    $validator
        ->scalar('steps')
        ->allowEmptyString('steps');

    $validator
        ->scalar('steps2')
        ->allowEmptyString('steps2');

    $validator
        ->scalar('steps3')
        ->allowEmptyString('steps3');

    $validator
        ->scalar('steps4')
        ->allowEmptyString('steps4');

    $validator
        ->scalar('steps5')
        ->allowEmptyString('steps5');

    $validator
        ->scalar('steps6')
        ->allowEmptyString('steps6');

    return $validator;

   }

}
