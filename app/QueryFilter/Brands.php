<?php


namespace App\QueryFilter;


class Brands extends Filter
{

    protected function applyFilters($builder)
    {
        $brands = request()->get($this->filterName());
        if (is_array($brands))
        {
            return $builder->whereIn('brand_id',$brands);
        }
        return $builder;
    }
}
