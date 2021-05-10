<?php


namespace App\QueryFilter;


class ComputerConsumables extends Filter
{

    protected function applyFilters($builder)
    {
        $ccs = request()->get($this->filterName());
        if (is_array($ccs))
        {
            return $builder->whereIn('computerConsumable_id',$ccs);
        }
        return $builder;
    }
}
