<?php

declare(strict_types=1);

namespace Xylemical\Update;

/**
 * Provides the update interface.
 */
interface UpdateInterface {

  /**
   * Get the change factory.
   *
   * @return \Xylemical\Update\ChangeFactoryInterface
   *   The change factory.
   */
  public function getChangeFactory(): ChangeFactoryInterface;

  /**
   * Get the target for the update.
   *
   * @return mixed
   *   The update.
   */
  public function getTarget(): mixed;

  /**
   * Get the changes.
   *
   * @return \Xylemical\Update\ChangeInterface[]
   *   The changes.
   */
  public function getChanges(): array;

  /**
   * Apply the changes.
   *
   * @param \Xylemical\Update\UpdaterInterface $updater
   *   The updater.
   *
   * @return bool
   *   The result.
   */
  public function apply(UpdaterInterface $updater): bool;

}
