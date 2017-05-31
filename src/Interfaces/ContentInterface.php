<?php

namespace WTG\Content\Interfaces;

use Illuminate\Database\Eloquent\Builder;

/**
 * Content interface.
 *
 * @package     WTG\Content
 * @subpackage  Interfaces
 * @author      Thomas Wiringa  <thomas.wiringa@gmail.com>
 */
interface ContentInterface
{
    const TYPE_BLOCK = 'block';
    const TYPE_PAGE = 'page';
    const TYPE_CAROUSEL_ITEM = 'carousel-item';

    /**
     * Get a block by its tag
     *
     * @param  Builder  $query
     * @param  string  $tag
     * @return Builder
     */
    public function scopeTag(Builder $query, string $tag): Builder;

    /**
     * Get the id
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Set the id
     *
     * @param  string  $id
     * @return $this
     */
    public function setId(string $id);

    /**
     * Get the tag
     *
     * @return string
     */
    public function getTag(): string;

    /**
     * Set the tag
     *
     * @param  string  $tag
     * @return $this
     */
    public function setTag(string $tag);

    /**
     * Get the tag
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Set the tag
     *
     * @param  string  $name
     * @return $this
     */
    public function setName(string $name);

    /**
     * Get editable
     *
     * @return bool
     */
    public function getEditable(): bool;

    /**
     * Set editable
     *
     * @param  bool  $editable
     * @return $this
     */
    public function setEditable(bool $editable);

    /**
     * Get the content value.
     *
     * @return string
     */
    public function getValue(): string;

    /**
     * Set the content value.
     *
     * @param  string  $value
     * @return $this
     */
    public function setValue(string $value);

    /**
     * Get the content type.
     *
     * @return string
     */
    public function getType(): string;

    /**
     * Set the content type.
     *
     * @param  string  $type
     * @return $this
     */
    public function setType(string $type);
}