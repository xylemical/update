<?php

declare(strict_types=1);

namespace Xylemical\Update;

/**
 * Provide a generic update factory.
 */
class UpdateFactory implements UpdateFactoryInterface {

  /**
   * The change factory.
   *
   * @var \Xylemical\Update\ChangeFactoryInterface
   */
  protected ChangeFactoryInterface $changeFactory;

  /**
   * UpdateFactory constructor.
   *
   * @param \Xylemical\Update\ChangeFactoryInterface $changeFactory
   *   The change factory.
   */
  public function __construct(ChangeFactoryInterface $changeFactory) {
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
  public function create(mixed $target): UpdateInterface {
    return new Update($target, $this->changeFactory);
  }

}
