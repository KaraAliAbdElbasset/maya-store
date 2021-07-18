<?php


namespace App\QueryFilter;


class Consumables extends Filter
{

    protected function applyFilters($builder)
    {
        $cs = request()->get($this->filterName());
        if (is_array($cs))
        {
            return $builder->whereIn('consumable_id',$cs);
        }
        return $builder;
    }
}
