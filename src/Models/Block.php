<?php

namespace WTG\Block\Models;

use Illuminate\Database\Eloquent\Model;
use WTG\Block\Interfaces\BlockInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class Block
 *
 * @package     WTG\Block
 * @subpackage  Models
 * @author      Thomas Wiringa  <thomas.wiringa@gmail.com>
 */
class Block extends Model implements BlockInterface
{
    /**
     * @param  Builder  $query
     * @param  bool  $editable
     * @return Builder
     */
    public function scopeEditable(Builder $query, bool $editable = true): Builder
    {
        return $query->where('editable', $editable);
    }

    /**
     * Get a block by its tag
     *
     * @param  string  $tag
     * @return Block
     */
    public static function getByTag(string $tag): Block
    {
        return static::where('tag', $tag)->first();
    }

    /**
     * Get the id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->attributes['id'];
    }

    /**
     * Set the id
     *
     * @param  string  $id
     * @return $this
     */
    public function setId(string $id)
    {
        $this->attributes['id'] = $id;

        return $this;
    }

    /**
     * Get the tag
     *
     * @return string
     */
    public function getTag(): string
    {
        return $this->attributes['tag'];
    }

    /**
     * Set the tag
     *
     * @param  string  $tag
     * @return $this
     */
    public function setTag(string $tag)
    {
        $this->attributes['tag'] = $tag;

        return $this;
    }

    /**
     * Get the tag
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->attributes['name'];
    }

    /**
     * Set the tag
     *
     * @param  string  $name
     * @return $this
     */
    public function setName(string $name)
    {
        $this->attributes['name'] = $name;

        return $this;
    }

    /**
     * Get editable
     *
     * @return bool
     */
    public function getEditable(): bool
    {
        return (bool) $this->attributes['editable'];
    }

    /**
     * Set editable
     *
     * @param  bool  $editable
     * @return $this
     */
    public function setEditable(bool $editable)
    {
        $this->attributes['editable'] = $editable;

        return $this;
    }

    /**
     * Get the block content.
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->attributes['content'] ?: "";
    }

    /**
     * Set the block content.
     *
     * @param  string  $content
     * @return $this
     */
    public function setContent(string $content)
    {
        $this->attributes['content'] = $content;

        return $this;
    }
}