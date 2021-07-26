<?php


namespace App\QueryFilter;


class Functionalities extends Filter
{

    protected function applyFilters($builder)
    {
        $fs = request()->get($this->filterName());
        if (is_array($fs))
        {
            return $builder->whereIn('functionality_id',$fs);
        }
        return $builder;
    }
}
