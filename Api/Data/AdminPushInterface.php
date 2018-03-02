<?php
/**
 * Automatically created by MageSpecialist CodeMonkey
 * https://github.com/magespecialist/m2-MSP_CodeMonkey
 */

declare(strict_types=1);

namespace MSP\NotifierAdminPushAdapterApi\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface AdminPushInterface extends ExtensibleDataInterface
{
    const ID = 'admin_push_id';
    const CREATED_AT = 'created_at';
    const USER_NAME = 'user_name';
    const MESSAGE = 'message';
    const PARAMS_JSON = 'params_json';

    /**
     * Get value for rule_id
     * @return int
     */
    public function getId();

    /**
     * Set value for rule_id
     * @param int $value
     * @return void
     */
    public function setId($value);

    /**
     * Get value for created_at
     * @return string
     */
    public function getCreatedAt();

    /**
     * Set value for created_at
     * @param string $value
     * @return void
     */
    public function setCreatedAt($value);

    /**
     * Get value for user_name
     * @return string
     */
    public function getUserName();

    /**
     * Set value for user_name
     * @param string $value
     * @return void
     */
    public function setUserName($value);

    /**
     * Get value for message
     * @return string
     */
    public function getMessage();

    /**
     * Set value for message
     * @param string $value
     * @return void
     */
    public function setMessage($value);

    /**
     * Get value for params_json
     * @return string
     */
    public function getParamsJson();

    /**
     * Set value for params_json
     * @param string $value
     * @return void
     */
    public function setParamsJson($value);

    /**
     * Retrieve existing extension attributes object or create a new one
     * @return \MSP\NotifierAdminPushAdapterApi\Api\Data\AdminPushExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object
     * @param \MSP\NotifierAdminPushAdapterApi\Api\Data\AdminPushExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \MSP\NotifierAdminPushAdapterApi\Api\Data\AdminPushExtensionInterface $extensionAttributes
    );
}
