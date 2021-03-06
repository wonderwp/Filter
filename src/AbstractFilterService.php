<?php
/**
 * Created by PhpStorm.
 * User: jeremydesvaux
 * Date: 11/07/2017
 * Time: 17:57
 */

namespace WonderWp\Component\Filter;

abstract class AbstractFilterService implements FilterServiceInterface
{

    /**
     * @var Filter[]
     */
    protected $filters;

    /** @inheritdoc */
    public function getFilters()
    {
        return $this->filters;
    }

    /** @inheritdoc */
    public function setFilters($filters)
    {
        $this->filters = $filters;

        return $this;
    }

    /** @inheritdoc */
    public function addFilter(Filter $filter)
    {
        $this->filters[] = $filter;

        return $this;
    }
}
