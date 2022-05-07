<?php

declare(strict_types=1);

namespace Xylemical\Update;

use PHPUnit\Framework\TestCase;

/**
 * Tests \Xylemical\Update\Change.
 */
class ChangeTest extends TestCase {

  /**
   * Tests sanity.
   */
  public function testSanity(): void {
    $change = new Change('test', 'foo.bar');
    $this->assertEquals('test', $change->getType());
    $this->assertEquals('foo.bar', $change->getTarget());
  }

}
