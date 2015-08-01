<?php namespace Cristabel\Core\Traits;

trait EloquentCrud {

    protected $entity;

    public function __construct(Model $entity)
    {
        $this->entity = $entity;
    }

    public function all()
    {
        return $this->entity->all();
    }

    public function find($id)
    {
        return $this->entity->find($id);
    }

    public function create(array $data)
    {
        return $this->entity->create($data);
    }

    public function update($id, array $data)
    {
        $row = $this->entity->find($id);
        if( !is_null($row) ){
            return $row->update($data, $id);
        }

        return null;
    }

    public function delete($id)
    {
        return $this->entity->delete($id);
    }

    public function search(array $where = array(), array $order = null, array $columns = array('*'))
    {
        $query = $this->entity->select($columns);

        if( is_array($where) ){
            foreach( $order as $column => $direction ) {
                $query->entity->orderBy($column, $direction);
            }
        }

        if( is_array($order) ){
            foreach( $order as $column => $direction ) {
                $query->entity->orderBy($column, $direction);
            }
        }

        return $query->get();
    }

    public function getEntity()
    {
        return $this->entity;
    }

}
