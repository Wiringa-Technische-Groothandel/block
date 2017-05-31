<?php

namespace WTG\Content\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use WTG\Content\Interfaces\ContentInterface;

/**
 * Content model
 *
 * @package     WTG\Content
 * @subpackage  Models
 * @author      Thomas Wiringa  <thomas.wiringa@gmail.com>
 */
class Content extends Model implements ContentInterface
{
    /**
     * @var string
     */
    protected $table = 'content';

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
     * @param  Builder  $query
     * @param  string  $type
     * @return Builder
     */
    public function scopeType(Builder $query, string $type): Builder
    {
        return $query->where('type', $type);
    }

    /**
     * Get a block by its tag
     *
     * @param  Builder  $query
     * @param  string  $tag
     * @return Builder
     */
    public function scopeTag(Builder $query, string $tag): Builder
    {
        return $query->where('tag', $tag);
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
    public function getValue(): string
    {
        return $this->attributes['value'] ?: "";
    }

    /**
     * Set the block content.
     *
     * @param  string  $value
     * @return $this
     */
    public function setValue(string $value)
    {
        $this->attributes['value'] = $value;

        return $this;
    }

    /**
     * Get the content type.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->attributes['type'];
    }

    /**
     * Set the content type.
     *
     * @param  string  $type
     * @return $this
     */
    public function setType(string $type)
    {
        $this->attributes['type'] = $type;

        return $this;
    }
}