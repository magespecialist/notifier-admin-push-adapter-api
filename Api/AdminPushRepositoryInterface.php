<?php
/**
 * Automatically created by MageSpecialist CodeMonkey
 * https://github.com/magespecialist/m2-MSP_CodeMonkey
 */

declare(strict_types=1);

namespace MSP\NotifierAdminPushAdapterApi\Api;

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
interface AdminPushRepositoryInterface
{
    /**
     * Save AdminPush
     * @param \MSP\NotifierAdminPushAdapterApi\Api\Data\AdminPushInterface $adminPush
     * @return int
     */
    public function save(\MSP\NotifierAdminPushAdapterApi\Api\Data\AdminPushInterface $adminPush): int;

    /**
     * Get AdminPush by id
     * @param int $adminPushIid
     * @return \MSP\NotifierAdminPushAdapterApi\Api\Data\AdminPushInterface
     */
    public function get(int $adminPushIid): \MSP\NotifierAdminPushAdapterApi\Api\Data\AdminPushInterface;

    /**
     * Clear whole queue
     * @return void
     */
    public function clear();

    /**
     * Delete AdminPush
     * @param int $adminPushIid
     * @return void
     */
    public function deleteById(int $adminPushIid);

    /**
     * Get a list of AdminPush
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \MSP\NotifierAdminPushAdapterApi\Api\AdminPushSearchResultsInterface
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria = null
    ): \MSP\NotifierAdminPushAdapterApi\Api\AdminPushSearchResultsInterface;
}
