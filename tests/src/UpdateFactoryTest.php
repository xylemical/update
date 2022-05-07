<?php

declare(strict_types=1);

namespace Xylemical\Update;

use PHPUnit\Framework\TestCase;

/**
 * Tests \Xylemical\Update\UpdateFactory.
 */
class UpdateFactoryTest extends TestCase {

  /**
   * Tests sanity.
   */
  public function testSanity(): void {
    $changeFactory = $this->getMockBuilder(ChangeFactoryInterface::class)->getMock();

    $factory = new UpdateFactory($changeFactory);
    $this->assertSame($changeFactory, $factory->getChangeFactory());
    $update = $factory->create('test');
    $this->assertEquals('test', $update->getTarget());
    $this->assertSame($changeFactory, $update->getChangeFactory());
  }

}
