<?php
use Step\Acceptance\SortSteps;
use Step\Acceptance\StartSteps;
use Step\Acceptance\BookingSteps;
class StartCest
{
    /**
     * @var
     */
    protected $tableID;
    /**
     * @var
     */
    protected $numOfPerson;
    /**
     * @var
     */
    protected $date;
    /**
     * @var
     */
    protected $startTime;
    /**
     * @var
     */
    protected $description;
    /**
     * @var
     */
    protected $edit;

    /**
     * SortCest constructor.
     */
    public function __construct()
    {
        $this->edit =
            [
                'tableID' => '4',
                'numOfPerson'=> '4',
                'date' => '22/05/2019',
                'description' => "new",
                'startTime' => '18'
            ];
    }

    /**
     * @param SortSteps $I
     * @throws Exception
     */
    public function doSort(SortSteps $I)
    {
        $I -> wantToTest('I want to click sort all column');
        $I -> doIDSort();
        $I -> doTypesort();
        $I -> doTableIDSort();
        $I -> doNumOfPersonSort();
        $I -> doDateSort();
        $I -> doDescriptionSort();
        $I -> doDurationSort();
        $I -> doStartTimeSort();
        $I -> doDelete();
    }

    /**
     * @param StartSteps $I
     * @param $scenario
     * @throws Exception
     */
    public function doEdit(StartSteps $I, $scenario)
    {
        $I -> wantToTest('I want to edit booking');
        $I = new SortSteps($scenario);
        $I -> doEdit($this->edit);
        $I -> pause();
    }

    /**
     * @param StartSteps $I
     * @throws Exception
     */
    public function checkReloadData(StartSteps $I)
    {
        $I -> wantToTest('I want to Reload Data success');
        $I -> reloadData();
        $I -> pause();
    }

    /**
     * @param StartSteps $I
     * @param $scenario
     * @throws Exception
     */
    public function doDelete(StartSteps $I, $scenario)
    {
        $I -> wantToTest('I want to delete a booking line 1');
        $I = new SortSteps($scenario);
        $I -> doDelete();
        $I -> pause();
    }

    /**
     * @param StartSteps $I
     * @throws Exception
     */
    public function changePage(StartSteps $I)
    {
        $I -> wantToTest('I want to go to page 2 and return page 1');
        $I -> goToPage2();
        $I -> goToPage1();
        $I -> pause();
    }

}