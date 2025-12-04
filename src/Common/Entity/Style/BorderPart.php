<?php

declare(strict_types=1);

namespace OpenSpout\Common\Entity\Style;

final readonly class BorderPart
{
    /**
     * @param non-empty-string $color A RGB color code
     */
    public function __construct(
        public BorderName $name,
        public string $color = Color::BLACK,
        public BorderWidth $width = BorderWidth::MEDIUM,
        public BorderStyle $style = BorderStyle::SOLID,
    ) {}

    public static function create(BorderName $name): self
    {
        return new self($name);
    }

    public function withName(BorderName $name): self
    {
        return new self($name, $this->color, $this->width, $this->style);
    }

    public function withColor(string $color): self
    {
        return new self($this->name, $color, $this->width, $this->style);
    }

    public function withWidth(BorderWidth $width): self
    {
        return new self($this->name, $this->color, $width, $this->style);
    }

    public function withStyle(BorderStyle $style): self
    {
        return new self($this->name, $this->color, $this->width, $style);
    }
}
