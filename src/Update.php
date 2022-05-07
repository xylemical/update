<?php

declare(strict_types=1);

namespace Xylemical\Update;

/**
 * Provides a generic update.
 */
class Update implements UpdateInterface {

  /**
   * The change factory.
   *
   * @var \Xylemical\Update\ChangeFactoryInterface
   */
  protected ChangeFactoryInterface $changeFactory;

  /**
   * The target of changes.
   *
   * @var mixed
   */
  protected mixed $target;

  /**
   * Get the changes.
   *
   * @var \Xylemical\Update\ChangeInterface[]
   */
  protected array $changes = [];

  /**
   * Update constructor.
   *
   * @param mixed $target
   *   The target.
   * @param \Xylemical\Update\ChangeFactoryInterface $changeFactory
   *   The change factory.
   */
  public function __construct(mixed $target, ChangeFactoryInterface $changeFactory) {
    $this->target = $target;
    $this->changeFactory = $changeFactory;
  }

  /**
   * {@inheritdoc}
   */
  public function getChangeFactory(): ChangeFactoryInterface {
    return $this->changeFactory;
  }

  /**
   * {@inheritdoc}
   */
  public function getTarget(): mixed {
    return $this->target;
  }

  /**
   * {@inheritdoc}
   */
  public function getChanges(): array {
    return $this->changes;
  }

  /**
   * Set the changes.
   *
   * @param \Xylemical\Update\ChangeInterface[] $changes
   *   The changes.
   *
   * @return $this
   */
  public function setChanges(array $changes): static {
    $this->changes = [];
    return $this->addChanges($changes);
  }

  /**
   * Add multiple changes.
   *
   * @param \Xylemical\Update\ChangeInterface[] $changes
   *   The changes.
   *
   * @return $this
   */
  public function addChanges(array $changes): static {
    foreach ($changes as $change) {
      $this->addChange($change);
    }
    return $this;
  }

  /**
   * Add a change.
   *
   * @param \Xylemical\Update\ChangeInterface $change
   *   The change.
   *
   * @return $this
   */
  public function addChange(ChangeInterface $change): static {
    $this->changes[] = $change;
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function apply(UpdaterInterface $updater): bool {
    return $updater->apply($this);
  }

}
