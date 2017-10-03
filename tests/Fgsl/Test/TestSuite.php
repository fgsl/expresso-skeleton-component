<?php
/**
 * Fgsl Skeleton Component - a basic structure for Fgsl components
 *
 * @author    Flávio Gomes da Silva Lisboa <flavio.lisboa@fgsl.eti.br>
 * @link      https://github.com/fgsl/skeleton-component for the canonical source repository
 * @copyright Copyright (c) 2017 FGSL (http://www.fgsl.eti.br)
 * @license   https://www.gnu.org/licenses/agpl.txt GNU AFFERO GENERAL PUBLIC LICENSE
 */
namespace Fgsl\Test;

/**
 * 
 * @package    Fgsl
 * @subpackage Test
 */
class TestSuite
{
    /**
     * run all tests
     */
    public static function main()
    {
        \PHPUnit_TextUI_TestRunner::run(self::suite());
    }

    /**
     * 
     * @return \PHPUnit_Framework_TestSuite
     */
    public static function suite()
    {
        $suite = new \PHPUnit_Framework_TestSuite('Fgsl Component Tests');
        $suite->addTestSuite('Fgsl\Test\SkeletonComponent\ComponentTest');

        return $suite;
    }
}