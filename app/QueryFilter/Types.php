<?php


namespace App\QueryFilter;


class Types extends Filter
{

    protected function applyFilters($builder)
    {
        $types = request()->get($this->filterName());
        if (is_array($types))
        {
            return $builder->whereIn('type_id',$types);
        }
        return $builder;
    }
}
