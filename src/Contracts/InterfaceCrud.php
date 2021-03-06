<?php namespace Cristabel\Core\Contracts;

interface InterfaceCrud {

    public function all();

    public function find($id);

    public function create(array $data);

    public function update($id, array $data);

    public function delete($id);

    public function search(array $where = array(), array $order = null, array $columns = array('*') );

}
