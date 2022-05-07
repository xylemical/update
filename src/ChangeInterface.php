<?php

declare(strict_types=1);

namespace Xylemical\Update;

/**
 * Provides a change definition.
 */
interface ChangeInterface {

  /**
   * ChangeInterface factory.
   *
   * @param string $type
   *   The type.
   * @param mixed $target
   *   The target.
   */
  public function __construct(string $type, mixed $target);

  /**
   * Get the type of the change.
   *
   * @return string
   *   The type.
   */
  public function getType(): string;

  /**
   * The target of the change.
   *
   * @return mixed
   *   The target.
   */
  public function getTarget(): mixed;

}
