<?php

/** @copyright 2019 ng-voice GmbH */

declare(strict_types=1);

namespace NgVoice\AriClient\Models\Message;

use NgVoice\AriClient\Models\Playback;

/**
 * Event showing the continuation of a media playback operation from one media URI to the next in the list.
 *
 * @package NgVoice\AriClient\Models\Message
 *
 * @author Lukas Stermann <lukas@ng-voice.com>
 */
final class PlaybackContinuing extends Event
{
    /**
     * @var Playback Playback control object.
     */
    private $playback;

    /**
     * @return Playback
     */
    public function getPlayback(): Playback
    {
        return $this->playback;
    }

    /**
     * @param Playback $playback
     */
    public function setPlayback(Playback $playback): void
    {
        $this->playback = $playback;
    }
}
