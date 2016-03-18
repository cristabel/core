<?php namespace Cristabel\Core\Domain\Repository;

use Cristabel\Core\Contracts\InterfaceCrud;
use Cristabel\Core\Traits\EloquentCrud;

use Illuminate\Database\Eloquent\Model;

class EloquentRepository implements InterfaceCrud {

    use EloquentCrud;

}
