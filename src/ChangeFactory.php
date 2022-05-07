<?php

declare(strict_types=1);

namespace Xylemical\Update;

/**
 * Provides a generic change factory.
 */
class ChangeFactory implements ChangeFactoryInterface {

  /**
   * {@inheritdoc}
   */
  public function create(string $type, mixed $target): ChangeInterface {
    return new Change($type, $target);
  }

}
