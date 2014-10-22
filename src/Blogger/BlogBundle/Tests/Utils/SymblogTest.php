<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Blogger\BlogBundle\Tests\Utils;

use Blogger\BlogBundle\Utils\Symblog;

/**
 * Description of SymblogTest
 *
 * @author SakyHank
 */
class SymblogTest extends \PHPUnit_Framework_TestCase{
    
    public function testSlugify(){
        $this->assertEquals('hello-world', Symblog::slugify('Hello World'));
    }
}
