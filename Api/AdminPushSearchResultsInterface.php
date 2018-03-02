<?php
/**
 * Automatically created by MageSpecialist CodeMonkey
 * https://github.com/magespecialist/m2-MSP_CodeMonkey
 */

declare(strict_types=1);

namespace MSP\NotifierAdminPushAdapterApi\Api;

interface AdminPushSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{
    /**
     * Get an array of objects
     * @return \MSP\NotifierAdminPushAdapterApi\Api\Data\AdminPushInterface[]
     */
    public function getItems();

    /**
     * Set objects list
     * @param \MSP\NotifierAdminPushAdapterApi\Api\Data\AdminPushInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
