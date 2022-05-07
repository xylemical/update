<?php

declare(strict_types=1);

namespace Xylemical\Update;

/**
 * Provides the update application.
 */
interface UpdaterInterface {

  /**
   * Apply the update.
   *
   * @param \Xylemical\Update\UpdateInterface $update
   *   The update.
   *
   * @return bool
   *   The result.
   */
  public function apply(UpdateInterface $update): bool;

}
