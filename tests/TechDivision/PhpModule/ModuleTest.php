<?php
/**
 * \TechDivision\PhpModule\ModuleTest
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category  Webserver
 * @package   TechDivision_PhpModule
 * @author    Johann Zelger <jz@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/TechDivision_PhpModule
 */

namespace TechDivision\PhpModule;

/**
 * Class ModuleTest
 *
 * @category  Webserver
 * @package   TechDivision_PhpModule
 * @author    Johann Zelger <jz@techdivision.com>
 * @copyright 2014 TechDivision GmbH <info@techdivision.com>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/techdivision/TechDivision_PhpModule
 */
class ModuleTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var PhpModule
     */
    public $module;

    /**
     * Initializes module object to test.
     *
     * @return void
     */
    public function setUp() {
        $this->module = new PhpModule();
    }

    /**
     * Test add header functionality on response object.
     */
    public function testModuleName() {
        $module = $this->module;
        $this->assertSame('php', $module::MODULE_NAME);
    }
}
