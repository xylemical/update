<?php

declare(strict_types=1);

namespace Xylemical\Update;

/**
 * Provides a generic change.
 */
class Change implements ChangeInterface {

  /**
   * The type of the change.
   *
   * @var string
   */
  protected string $type;

  /**
   * The target of the change.
   *
   * @var mixed
   */
  protected mixed $target;

  /**
   * {@inheritdoc}
   */
  public function __construct(string $type, mixed $target) {
    $this->type = $type;
    $this->target = $target;
  }

  /**
   * {@inheritdoc}
   */
  public function getType(): string {
    return $this->type;
  }

  /**
   * {@inheritdoc}
   */
  public function getTarget(): mixed {
    return $this->target;
  }

}
