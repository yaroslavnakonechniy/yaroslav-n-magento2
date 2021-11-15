<?php

declare(strict_types=1);

namespace Nakonechnyi\PersonalDiscount\Model\ResourceModel;

class DiscountRequest extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * @inheritDoc
     */
    protected function _construct(): void
    {
        $this->_init('na_konechnyi_personal_discount_request', 'discount_request_id');
    }
}
