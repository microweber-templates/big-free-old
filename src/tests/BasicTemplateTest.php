<?php
namespace MicroweberPackages\Template\BigFree\tests;


use MicroweberPackages\Core\tests\TestCase;

class BasicTemplateTest extends TestCase
{
    public $template_name = 'big-free';

    public function testHomepage()
    {
        save_option('current_template', $this->template_name,'template');

        $this->assertTrue(true);
    }


}
