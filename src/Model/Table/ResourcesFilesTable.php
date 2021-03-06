<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ResourcesFiles Model
 *
 * @property \App\Model\Table\ResourcesTable|\Cake\ORM\Association\BelongsTo $Resources
 * @property \App\Model\Table\FilesTable|\Cake\ORM\Association\BelongsTo $Files
 *
 * @method \App\Model\Entity\ResourcesFile get($primaryKey, $options = [])
 * @method \App\Model\Entity\ResourcesFile newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ResourcesFile[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ResourcesFile|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ResourcesFile|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ResourcesFile patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ResourcesFile[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ResourcesFile findOrCreate($search, callable $callback = null, $options = [])
 */
class ResourcesFilesTable extends Table
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

        $this->setTable('resources_files');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Resources', [
            'foreignKey' => 'resource_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Files', [
            'foreignKey' => 'file_id',
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
            ->integer('id')
            ->allowEmpty('id', 'create');

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
        $rules->add($rules->existsIn(['resource_id'], 'Resources'));
        $rules->add($rules->existsIn(['file_id'], 'Files'));

        return $rules;
    }
}
