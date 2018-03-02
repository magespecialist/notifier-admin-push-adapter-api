<?php
/**
 * Copyright © MageSpecialist - Skeeller srl. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace MSP\NotifierAdminPushAdapterApi\Api;

/**
 * Extension attribute loader for AdminPush
 *
 * @api
 */
interface IconRepositoryInterface
{
    /**
     * Get a list of available icons
     * @return array
     */
    public function getList(): array;

    /**
     * Get icon file by icon ID
     * @param string $iconId
     * @return string
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function get(string $iconId): string;
}
