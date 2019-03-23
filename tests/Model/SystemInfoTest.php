<?php

/**
 * @author Lukas Stermann
 * @copyright ng-voice GmbH (2018)
 */

declare(strict_types=1);

namespace NgVoice\AriClient\Tests\Model;


use JsonMapper_Exception;
use NgVoice\AriClient\Model\SystemInfo;
use PHPUnit\Framework\TestCase;
use function NgVoice\AriClient\Tests\mapAriResponseParametersToAriObject;

/**
 * Class SystemInfoTest
 *
 * @package NgVoice\AriClient\Tests\Model
 */
final class SystemInfoTest extends TestCase
{
    /**
     * @throws JsonMapper_Exception
     */
    public function testParametersMappedCorrectly(): void
    {
        /**
         * @var SystemInfo $systemInfo
         */
        $systemInfo = mapAriResponseParametersToAriObject(
            'SystemInfo',
            [
                'version' => '16.1.0',
                'entity_id' => '02:42:ac:11:00:01'
            ]
        );
        $this->assertInstanceOf(SystemInfo::class, $systemInfo);
        $this->assertSame('02:42:ac:11:00:01', $systemInfo->getEntityId());
        $this->assertSame('16.1.0', $systemInfo->getVersion());
    }
}