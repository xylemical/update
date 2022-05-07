<?php

declare(strict_types=1);

namespace Xylemical\Update;

use PHPUnit\Framework\TestCase;

/**
 * Tests \Xylemical\Update\Update.
 */
class UpdateTest extends TestCase {

  /**
   * Tests sanity.
   */
  public function testSanity(): void {
    $changeFactory = $this->getMockBuilder(ChangeFactoryInterface::class)->getMock();

    $update = new Update('test', $changeFactory);
    $this->assertEquals('test', $update->getTarget());
    $this->assertSame($changeFactory, $update->getChangeFactory());
    $this->assertEquals([], $update->getChanges());

    $change = new Change('test', 'foo.bar');
    $update->setChanges([$change]);
    $this->assertEquals([$change], $update->getChanges());

    $updater = $this->getMockBuilder(UpdaterInterface::class)->getMock();
    $update->apply($updater);
  }

}
