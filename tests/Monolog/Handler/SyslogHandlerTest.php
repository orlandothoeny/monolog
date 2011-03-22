<?php

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\Handler;

use Monolog\Logger;

class SyslogHandlerTest extends \PHPUnit_Framework_TestCase
{
    public function testConstruct()
    {
      $handler = new SyslogHandler('test');
      $this->assertInstanceOf('Monolog\Handler\SyslogHandler', $handler);

      $handler = new SyslogHandler('test', LOG_LOCAL1);
      $this->assertInstanceOf('Monolog\Handler\SyslogHandler', $handler);

      $handler = new SyslogHandler('test', 'local1');
      $this->assertInstanceOf('Monolog\Handler\SyslogHandler', $handler);

    }

    public function testConstructInvalidFacility()
    {
      $this->setExpectedException('UnexpectedValueException');
      $handler = new SyslogHandler('test', 'unknown');
    }

}