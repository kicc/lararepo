<?php

namespace App\Repositories\Eloquent;

use App\Repositories\BaseRepositoryInterface;

abstract class EloquentBaseRepository implements BaseRepositoryInterface {

    protected $modelClassName;

    public function create(array $attributes)
    {
        return call_user_func_array("{$this->modelClassName}::create", array($attributes));
    }

    public function all($columns = array('*'))
    {
        return call_user_func_array("{$this->modelClassName}::all", array($columns));
    }

    public function find($id, $columns = array('*'))
    {
        return call_user_func_array("{$this->modelClassName}::find", array($id, $columns));
    }

    public function destroy($ids)
    {
        return call_user_func_array("{$this->modelClassName}::destroy", array($ids));
    }

    public function update($id, $attributes)
    {
        $result = call_user_func_array("{$this->modelClassName}::findOrFail", array($id));
        $result->update($attributes);
        return $result;
    }

    public function whereIn($id, array $values)
    {
        return call_user_func_array("{$this->modelClassName}::whereIn", array($id,$values));;
    }

    public function with($relations)
    {
        return call_user_func_array("{$this->modelClassName}::with", array($relations));;
    }
}