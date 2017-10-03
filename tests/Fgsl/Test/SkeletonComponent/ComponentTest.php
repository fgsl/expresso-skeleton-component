<?php
/**
 * Fgsl Skeleton Component - a basic structure for Fgsl components
 *
 * @author    Flávio Gomes da Silva Lisboa <flavio.lisboa@fgsl.eti.br>
 * @link      https://github.com/fgsl/skeleton-component for the canonical source repository
 * @copyright Copyright (c) 2017 FGSL (http://www.fgsl.eti.br)
 * @license   https://www.gnu.org/licenses/agpl.txt GNU AFFERO GENERAL PUBLIC LICENSE
 */
namespace Fgsl\Test\SkeletonComponent;

/**
 * 
 * @package    Fgsl
 * @subpackage Test
 */
class ComponentTest extends \PHPUnit_Framework_TestCase
{    
    /**
     * ensures creation of an instance
     * @expectedException \Exception
     */
    public function testSomething()
    {
        throw new \Exception('Implements some test');
    }
}