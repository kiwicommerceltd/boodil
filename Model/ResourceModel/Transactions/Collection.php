<?php

namespace Boodil\Payment\Model\ResourceModel\Transactions;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'entity_id';

    protected function _construct()
    {
        $this->_init('Boodil\Payment\Model\Transactions', 'Boodil\Payment\Model\ResourceModel\Transactions');
    }
}
