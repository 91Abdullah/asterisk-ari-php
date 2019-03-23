<?php

/**
 * @author Lukas Stermann
 * @copyright ng-voice GmbH (2018)
 */

declare(strict_types=1);

namespace NgVoice\AriClient\Tests\Model;


use JsonMapper_Exception;
use NgVoice\AriClient\Model\{Channel, Message\StasisStart};
use PHPUnit\Framework\TestCase;
use function NgVoice\AriClient\Tests\mapMessageParametersToAriObject;

/**
 * Class StasisStartTest
 *
 * @package NgVoice\AriClient\Tests\Model\Message
 */
final class StasisStartTest extends TestCase
{
    /**
     * @throws JsonMapper_Exception
     */
    public function testParametersMappedCorrectly(): void
    {
        $exampleChannel = [
            'name' => 'SIP/foo-0000a7e3',
            'language' => 'en',
            'accountcode' => 'TestAccount',
            'channelvars' => [
                'testVar' => 'correct',
                'testVar2' => 'nope'
            ],
            'caller' => [
                'name' => 'ExampleName',
                'number' => 'ExampleNumber'
            ],
            'creationtime' => '2016-12-20 13:45:28 UTC',
            'state' => 'Up',
            'connected' => [
                'name' => 'ExampleName2',
                'number' => 'ExampleNumber2'
            ],
            'dialplan' => [
                'context' => 'ExampleContext',
                'exten' => 'ExampleExten',
                'priority' => '3'
            ],
            'id' => '123456'
        ];

        /**
         * @var StasisStart $stasisStart
         */
        $stasisStart = mapMessageParametersToAriObject(
            'StasisStart',
            [
                'channel' => $exampleChannel,
                'replace_channel' => $exampleChannel,
                'args' => [
                    'some',
                    'args',
                    'are',
                    'cool'
                ]
            ]
        );
        $this->assertInstanceOf(Channel::class, $stasisStart->getChannel());
        $this->assertInstanceOf(Channel::class, $stasisStart->getReplaceChannel());
        $this->assertSame(['some', 'args', 'are', 'cool'], $stasisStart->getArgs());
    }
}