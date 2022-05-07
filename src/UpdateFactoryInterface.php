<?php

declare(strict_types=1);

namespace Xylemical\Update;

/**
 * Provides creating updates.
 */
interface UpdateFactoryInterface {

  /**
   * Get the change factory.
   *
   * @return \Xylemical\Update\ChangeFactoryInterface
   *   The factory.
   */
  public function getChangeFactory(): ChangeFactoryInterface;

  /**
   * Create an update.
   *
   * @param mixed $target
   *   The target being updated.
   *
   * @return \Xylemical\Update\UpdateInterface
   *   The update.
   */
  public function create(mixed $target): UpdateInterface;

}
