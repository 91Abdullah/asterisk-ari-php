<?php

/** @copyright 2020 ng-voice GmbH */

declare(strict_types=1);

namespace NgVoice\AriClient\Model;

use NgVoice\AriClient\Collection\ContactStatus;

/**
 * Detailed information about a contact on an endpoint.
 *
 * @package NgVoice\AriClient\Model
 *
 * @author Lukas Stermann <lukas@ng-voice.com>
 */
final class ContactInfo implements ModelInterface
{
    private string $uri;

    private string $contactStatus;

    private string $aor;

    private ?string $roundtripUsec = null;

    /**
     * The location of the contact.
     *
     * @return string
     */
    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * The current status of the contact.
     *
     * @see ContactStatus
     *
     * @return string
     */
    public function getContactStatus(): string
    {
        return $this->contactStatus;
    }

    /**
     * The Address of Record this contact belongs to.
     *
     * @return string
     */
    public function getAor(): string
    {
        return $this->aor;
    }

    /**
     * Current round trip time, in microseconds, for the contact.
     *
     * @return string|null
     */
    public function getRoundtripUsec(): ?string
    {
        return $this->roundtripUsec;
    }
}