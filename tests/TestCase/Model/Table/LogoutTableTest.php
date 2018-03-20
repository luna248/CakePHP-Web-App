<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LogoutTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LogoutTable Test Case
 */
class LogoutTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LogoutTable
     */
    public $Logout;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.logout',
        'app.members'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Logout') ? [] : ['className' => LogoutTable::class];
        $this->Logout = TableRegistry::get('Logout', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Logout);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
