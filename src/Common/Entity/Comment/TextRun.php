<?php

declare(strict_types=1);

namespace OpenSpout\Common\Entity\Comment;

/**
 * This class defines rich text in a fluent interface that can be added to a comment.
 */
final readonly class TextRun
{
    public function __construct(
        public string $text,
        public int $fontSize = 10,
        public string $fontColor = '000000',
        public string $fontName = 'Tahoma',
        public bool $bold = false,
        public bool $italic = false,
    ) {}

    public function withText(string $text): self
    {
        return new self($text, $this->fontSize, $this->fontColor, $this->fontName, $this->bold, $this->italic);
    }

    public function withFontSize(int $fontSize): self
    {
        return new self($this->text, $fontSize, $this->fontColor, $this->fontName, $this->bold, $this->italic);
    }

    public function withFontColor(string $fontColor): self
    {
        return new self($this->text, $this->fontSize, $fontColor, $this->fontName, $this->bold, $this->italic);
    }

    public function withFontName(string $fontName): self
    {
        return new self($this->text, $this->fontSize, $this->fontColor, $fontName, $this->bold, $this->italic);
    }

    public function withBold(bool $bold): self
    {
        return new self($this->text, $this->fontSize, $this->fontColor, $this->fontName, $bold, $this->italic);
    }

    public function withItalic(bool $italic): self
    {
        return new self($this->text, $this->fontSize, $this->fontColor, $this->fontName, $this->bold, $italic);
    }
}
