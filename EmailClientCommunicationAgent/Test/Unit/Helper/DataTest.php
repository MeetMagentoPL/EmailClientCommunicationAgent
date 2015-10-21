<?php

namespace MMHackaton\EmailClientCommunicationAgent\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;

class DataTest extends \PHPUnit_Framework_TestCase
{

    protected $helper;

    protected function setUp()
    {
        $this->helper = (new ObjectManager($this))->getObject('MMHackaton\EmailClientCommunicationAgent\Helper\Data');
    }
    
    public function testTheClassExists()
    {
        $this->assertInstanceOf(AbstractHelper::class, $this->helper);
    }

}
