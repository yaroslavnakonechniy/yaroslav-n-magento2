<?php

declare(strict_types=1);

namespace YaroslavN\RegularCustomer\Model\ResourceModel\DiscountRequest;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @inheritDoc
     */
    protected function _construct(): void
    {
        parent::_construct();
        $this->_init(
            \YaroslavN\RegularCustomer\Model\DiscountRequest::class,
            \YaroslavN\RegularCustomer\Model\ResourceModel\DiscountRequest::class
        );
    }
}
