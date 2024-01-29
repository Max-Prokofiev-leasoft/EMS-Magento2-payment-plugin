<?php
/**
 * All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Payment\Model\Api;

use Payment\Api\Config\RepositoryInterface as ConfigRepository;
use Payment\Model\Api\UrlProvider;
use Payment\Redefiners\Model\ModelBuilderRedefiner;


/**
 * GingerClient API class
 */
class GingerClient extends ModelBuilderRedefiner
{
    /**
     * GingerClient constructor.
     *
     * @param ConfigRepository $configRepository
     * @param UrlProvider $urlProvider
     */
    public function __construct(
        ConfigRepository $configRepository,
        UrlProvider $urlProvider

    )
    {
        $this->configRepository = $configRepository;
        $this->urlProvider = $urlProvider;
    }
}
