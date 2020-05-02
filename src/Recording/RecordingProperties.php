<?php

declare(strict_types=1);

namespace Stopka\OpenviduPhpClient\Recording;

class RecordingProperties
{

    /** @var string */
    private string $name;

    /** @var RecordingOutputModeEnum */
    private RecordingOutputModeEnum $outputMode;

    /** @var RecordingLayoutEnum */
    private RecordingLayoutEnum $recordingLayout;

    /** @var string */
    private ?string $customLayout;

    /** @var string */
    private ?string $resolution;

    /** @var bool */
    private bool $hasAudio;

    /** @var bool */
    private bool $hasVideo;

    public function __construct(
        string $name,
        RecordingOutputModeEnum $outputMode = null,
        RecordingLayoutEnum $recordingLayout = null,
        ?string $customLayout = null,
        ?string $resolution = null,
        bool $hasAudio = true,
        bool $hasVideo = true
    ) {
        $this->name = $name;
        $this->outputMode = $outputMode ?? new RecordingOutputModeEnum(RecordingOutputModeEnum::COMPOSED);
        $this->recordingLayout = $recordingLayout ?? new RecordingLayoutEnum(RecordingLayoutEnum::BEST_FIT);
        $this->customLayout = $customLayout;
        $this->resolution = $resolution;
        $this->hasAudio = $hasAudio;
        $this->hasVideo = $hasVideo;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return RecordingOutputModeEnum
     */
    public function getOutputMode(): RecordingOutputModeEnum
    {
        return $this->outputMode;
    }

    /**
     * @return RecordingLayoutEnum
     */
    public function getRecordingLayout(): RecordingLayoutEnum
    {
        return $this->recordingLayout;
    }

    /**
     * @return string|null
     */
    public function getCustomLayout(): ?string
    {
        return $this->customLayout;
    }

    /**
     * @return string|null
     */
    public function getResolution(): ?string
    {
        return $this->resolution;
    }

    /**
     * @return bool
     */
    public function isHasAudio(): bool
    {
        return $this->hasAudio;
    }

    /**
     * @return bool
     */
    public function isHasVideo(): bool
    {
        return $this->hasVideo;
    }
}
