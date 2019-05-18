<?php
namespace Step\Acceptance;
use Page\Acceptance\StartPage;
use Page\Acceptance\SortPage;
use Page\Acceptance\BookingPage;
class SortSteps extends \AcceptanceTester
{
    /**
     * @throws \Exception
     */
    public function doIDSort()
    {
        $I = $this;
        $I->amOnPage(StartPage::$URL);
        $I->waitForElementVisible(SortPage::$ID, 30);
        $I->click(SortPage::$ID);
    }

    /**
     * @throws \Exception
     */
    public function doTypeSort()
    {
        $I = $this;
        $I->waitForElementVisible(SortPage::$type, 30);
        $I->click(SortPage::$type);
    }
    
    /**
     * @throws \Exception
     */
    public function doDescriptionSort()
    {
        $I = $this;
        $I->waitForElementVisible(SortPage::$description, 30);
        $I->click(SortPage::$description);
    }

    /**
     * @throws \Exception
     */
    public function doDateSort()
    {
        $I = $this;
        $I->waitForElementVisible(SortPage::$date, 30);
        $I->click(SortPage::$date);
    }

    /**
     * @throws \Exception
     */
    public function doTableIDSort()
    {
        $I = $this;
        $I->waitForElementVisible(SortPage::$tableID, 30);
        $I->click(SortPage::$tableID);
    }

    /**
     * @throws \Exception
     */
    public function doNumOfPersonSort()
    {
        $I = $this;
        $I->waitForElementVisible(SortPage::$noOfPerson, 30);
        $I->click(SortPage::$noOfPerson);
    }

    /**
     * @throws \Exception
     */
    public function doStartTimeSort()
    {
        $I = $this;
        $I->waitForElementVisible(SortPage::$startTime, 30);
        $I->click(SortPage::$startTime);
    }

    /**
     * @throws \Exception
     */
    public function doDurationSort()
    {
        $I = $this;
        $I->waitForElementVisible(SortPage::$duration, 30);
        $I->click(SortPage::$duration);
    }

    /**
     * @throws \Exception
     */
    public function doDelete()
    {
        $I = $this;
        $I->waitForElementVisible(SortPage::$delete, 30);
        $I->click(SortPage::$delete);
    }

    /**
     * @throws \Exception
     */
    public function clickEdit()
    {
        $I = $this;
        $I->waitForElementVisible(SortPage::$edit, 30);
        $I->click(SortPage::$edit);
    }

    /**
     * @param array $edit
     * @throws \Exception
     */
    public function doEdit($edit = array())
    {
        $I = $this;
        $I -> clickEdit();
        $I -> fillField(BookingPage::$tableID, $edit['tableID']);
        $I -> fillField(BookingPage::$numOfPerson, $edit['numOfPerson']);
        $I -> fillField(BookingPage::$date, $edit['date']);
        $I -> fillField(BookingPage::$description, $edit['description']);
        $I -> fillField(BookingPage::$startTime, $edit['startTime']);
        $I -> click(BookingPage::$addButton);
    }
}