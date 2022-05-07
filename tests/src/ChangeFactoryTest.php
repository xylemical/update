<?php

declare(strict_types=1);

namespace Xylemical\Update;

use PHPUnit\Framework\TestCase;

/**
 * Tests \Xylemical\Update\ChangeFactory.
 */
class ChangeFactoryTest extends TestCase {

  /**
   * Tests sanity.
   */
  public function testSanity(): void {
    $factory = new ChangeFactory();
    $change = $factory->create('test', 'foo.bar');
    $this->assertEquals('test', $change->getType());
    $this->assertEquals('foo.bar', $change->getTarget());
  }

}
