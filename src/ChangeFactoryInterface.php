<?php

declare(strict_types=1);

namespace Xylemical\Update;

/**
 * Provides the creation of changes.
 */
interface ChangeFactoryInterface {

  /**
   * Create a change.
   *
   * @param string $type
   *   The type.
   * @param mixed $target
   *   The target.
   *
   * @return \Xylemical\Update\ChangeInterface
   *   The change.
   */
  public function create(string $type, mixed $target): ChangeInterface;

}
