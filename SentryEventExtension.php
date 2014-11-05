<?php

namespace Classmarkets\RavenBundle;

class SentryEventExtension extends \Twig_Extension
{
    /** @var SentryEventRecorder */
    private $recorder;

    public function __construct(SentryEventRecorder $recorder)
    {
        $this->recorder = $recorder;
    }

    public function getName()
    {
        return 'sentry_event_id_extension';
    }

    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('sentry_event_id', array($this->recorder, 'getEventIdForException')),
        );
    }
}
