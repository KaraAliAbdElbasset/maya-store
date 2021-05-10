<?php


namespace App\QueryFilter;


class Forms extends Filter
{
    protected function applyFilters($builder)
    {
        $forms = request()->get($this->filterName());
        if (is_array($forms))
        {
            return $builder->whereIn('form_id',$forms);
        }
        return $builder;
    }
}
