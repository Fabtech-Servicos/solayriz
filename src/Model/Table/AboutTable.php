<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * About Model
 *
 * @method \App\Model\Entity\About get($primaryKey, $options = [])
 * @method \App\Model\Entity\About newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\About[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\About|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\About saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\About patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\About[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\About findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AboutTable extends Table
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

        $this->setTable('about');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'photo' => [
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'photo_dir', // defaults to `dir`
                    'size' => 'photo_size', // defaults to `size`
                    'type' => 'photo_type', // defaults to `type`
                ],
            ],

            'photo2' => [
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'photo2_dir', // defaults to `dir`
                    'size' => 'photo2_size', // defaults to `size`
                    'type' => 'photo2_type', // defaults to `type`
                ],
            ],

            'map' => [
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'map_dir', // defaults to `dir`
                    'size' => 'map_size', // defaults to `size`
                    'type' => 'map_type', // defaults to `type`
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
            ->scalar('title_vision')
            ->maxLength('title_vision', 50)
            ->allowEmptyString('title_vision');

        $validator
            ->scalar('vision')
            ->allowEmptyString('vision');

        $validator
            ->scalar('title_mission')
            ->maxLength('title_mission', 50)
            ->allowEmptyString('title_mission');

        $validator
            ->scalar('mission')
            ->allowEmptyString('mission');

        $validator
            ->scalar('title_value')
            ->maxLength('title_value', 100)
            ->allowEmptyString('title_value');

        $validator
            ->scalar('value')
            ->allowEmptyString('value');

        $validator
            ->scalar('title_state')
            ->maxLength('title_state', 100)
            ->allowEmptyString('title_state');

        $validator
            ->scalar('state')
            ->allowEmptyString('state');


        $validator
            ->allowEmptyString('photo');

        $validator
            ->allowEmptyString('photo2');

        $validator
            ->allowEmptyString('map');


        return $validator;
    }
}
