<?php

namespace WTG\Block\Interfaces;

/**
 * Block interface
 *
 * @package     WTG\Block
 * @subpackage  Interfaces
 * @author      Thomas Wiringa  <thomas.wiringa@gmail.com>
 */
interface BlockInterface
{
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
     * Get the block content.
     *
     * @return string
     */
    public function getContent(): string;

    /**
     * Set the block content.
     *
     * @param  string  $content
     * @return $this
     */
    public function setContent(string $content);
}