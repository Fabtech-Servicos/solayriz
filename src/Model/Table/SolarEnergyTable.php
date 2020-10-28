<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * SolarEnergy Model
 *
 * @method \App\Model\Entity\SolarEnergy get($primaryKey, $options = [])
 * @method \App\Model\Entity\SolarEnergy newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\SolarEnergy[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\SolarEnergy|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SolarEnergy saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\SolarEnergy patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\SolarEnergy[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\SolarEnergy findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SolarEnergyTable extends Table
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

        $this->setTable('solar_energy');
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

            'photo3' => [
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'photo3_dir', // defaults to `dir`
                    'size' => 'photo3_size', // defaults to `size`
                    'type' => 'photo3_type', // defaults to `type`
                ],
            ],

            'photo4' => [
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'photo4_dir', // defaults to `dir`
                    'size' => 'photo4_size', // defaults to `size`
                    'type' => 'photo4_type', // defaults to `type`
                ],
            ],

            'photo5' => [
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'photo5_dir', // defaults to `dir`
                    'size' => 'photo5_size', // defaults to `size`
                    'type' => 'photo5_type', // defaults to `type`
                ],
            ],

            'photo6' => [
                'fields' => [
                    // if these fields or their defaults exist
                    // the values will be set.
                    'dir' => 'photo6_dir', // defaults to `dir`
                    'size' => 'photo6_size', // defaults to `size`
                    'type' => 'photo6_type', // defaults to `type`
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
            ->maxLength('title', 100)
            ->requirePresence('title', 'create')
            ->allowEmptyString('title', false);

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->allowEmptyString('description', false);

        $validator
            ->allowEmptyString('photo', false);


        $validator
            ->allowEmptyString('photo2', false);

        $validator
            ->scalar('title_advantage')
            ->maxLength('title_advantage', 100)
            ->requirePresence('title_advantage', 'create')
            ->allowEmptyString('title_advantage', false);

        $validator
            ->scalar('advantage')
            ->requirePresence('advantage', 'create')
            ->allowEmptyString('advantage', false);

        $validator
            ->scalar('title_advantage2')
            ->maxLength('title_advantage2', 100)
            ->requirePresence('title_advantage2', 'create')
            ->allowEmptyString('title_advantage2', false);

        $validator
            ->scalar('advantage2')
            ->requirePresence('advantage2', 'create')
            ->allowEmptyString('advantage2', false);

        $validator
            ->scalar('title_advantage3')
            ->maxLength('title_advantage3', 100)
            ->requirePresence('title_advantage3', 'create')
            ->allowEmptyString('title_advantage3', false);

        $validator
            ->scalar('advantage3')
            ->requirePresence('advantage3', 'create')
            ->allowEmptyString('advantage3', false);

        $validator
            ->scalar('title_advantage4')
            ->maxLength('title_advantage4', 100)
            ->requirePresence('title_advantage4', 'create')
            ->allowEmptyString('title_advantage4', false);

        $validator
            ->scalar('advantage4')
            ->requirePresence('advantage4', 'create')
            ->allowEmptyString('advantage4', false);

        $validator
            ->scalar('title_advantage5')
            ->maxLength('title_advantage5', 100)
            ->requirePresence('title_advantage5', 'create')
            ->allowEmptyString('title_advantage5', false);

        $validator
            ->scalar('advantage5')
            ->requirePresence('advantage5', 'create')
            ->allowEmptyString('advantage5', false);

        $validator
            ->scalar('title_advantage6')
            ->maxLength('title_advantage6', 100)
            ->requirePresence('title_advantage6', 'create')
            ->allowEmptyString('title_advantage6', false);

        $validator
            ->scalar('advantage6')
            ->requirePresence('advantage6', 'create')
            ->allowEmptyString('advantage6', false);

        $validator
            ->scalar('title_advantage7')
            ->maxLength('title_advantage7', 100)
            ->requirePresence('title_advantage7', 'create')
            ->allowEmptyString('title_advantage7', false);

        $validator
            ->scalar('advantage7')
            ->requirePresence('advantage7', 'create')
            ->allowEmptyString('advantage7', false);

        $validator
            ->scalar('title_advantage8')
            ->maxLength('title_advantage8', 100)
            ->requirePresence('title_advantage8', 'create')
            ->allowEmptyString('title_advantage8', false);

        $validator
            ->scalar('advantage8')
            ->requirePresence('advantage8', 'create')
            ->allowEmptyString('advantage8', false);

        $validator
            ->scalar('title_advantage9')
            ->maxLength('title_advantage9', 100)
            ->requirePresence('title_advantage9', 'create')
            ->allowEmptyString('title_advantage9', false);

        $validator
            ->scalar('advantage9')
            ->requirePresence('advantage9', 'create')
            ->allowEmptyString('advantage9', false);

        $validator
            ->scalar('title_advantage10')
            ->maxLength('title_advantage10', 100)
            ->requirePresence('title_advantage10', 'create')
            ->allowEmptyString('title_advantage10', false);

        $validator
            ->scalar('advantage10')
            ->requirePresence('advantage10', 'create')
            ->allowEmptyString('advantage10', false);

        $validator
            ->scalar('title_advantage11')
            ->maxLength('title_advantage11', 100)
            ->requirePresence('title_advantage11', 'create')
            ->allowEmptyString('title_advantage11', false);

        $validator
            ->scalar('advantage11')
            ->requirePresence('advantage11', 'create')
            ->allowEmptyString('advantage11', false);

        $validator
            ->scalar('title_advantage12')
            ->maxLength('title_advantage12', 100)
            ->requirePresence('title_advantage12', 'create')
            ->allowEmptyString('title_advantage12', false);

        $validator
            ->scalar('advantage12')
            ->requirePresence('advantage12', 'create')
            ->allowEmptyString('advantage12', false);

        $validator
            ->scalar('para')
            ->maxLength('para', 100)
            ->requirePresence('para', 'create')
            ->allowEmptyString('para', false);

        $validator
            ->scalar('description_for')
            ->requirePresence('description_for', 'create')
            ->allowEmptyString('description_for', false);

        $validator
            ->allowEmptyString('photo3', false);


        $validator
            ->scalar('for2')
            ->maxLength('for2', 100)
            ->requirePresence('for2', 'create')
            ->allowEmptyString('for2', false);

        $validator
            ->scalar('description_for2')
            ->requirePresence('description_for2', 'create')
            ->allowEmptyString('description_for2', false);


        $validator
            ->allowEmptyString('photo4', false);



        $validator
            ->scalar('for3')
            ->maxLength('for3', 100)
            ->requirePresence('for3', 'create')
            ->allowEmptyString('for3', false);

        $validator
            ->scalar('description_for3')
            ->requirePresence('description_for3', 'create')
            ->allowEmptyString('description_for3', false);

        $validator
            ->allowEmptyString('photo5', false);



        $validator
            ->scalar('for4')
            ->maxLength('for4', 100)
            ->requirePresence('for4', 'create')
            ->allowEmptyString('for4', false);

        $validator
            ->scalar('description_for4')
            ->requirePresence('description_for4', 'create')
            ->allowEmptyString('description_for4', false);

        $validator
            ->allowEmptyString('photo6', false);



        $validator
            ->scalar('modality')
            ->requirePresence('modality', 'create')
            ->allowEmptyString('modality', false);

        $validator
            ->scalar('modality2')
            ->requirePresence('modality2', 'create')
            ->allowEmptyString('modality2', false);

        $validator
            ->scalar('modality3')
            ->requirePresence('modality3', 'create')
            ->allowEmptyString('modality3', false);

        return $validator;
    }
}
