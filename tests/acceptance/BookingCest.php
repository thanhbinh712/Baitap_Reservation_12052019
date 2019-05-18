<?php 
use Step\Acceptance\BookingSteps;
use Step\Acceptance\StartSteps;
use Step\Acceptance\SortSteps;
class BookingCest
{
    /**
     * @var
     */
    protected $tableID;
    /**
     * @var string
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
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $booking;
    /**
     * @var
     */
    protected $booking1;

    /**
     * BookingCest constructor.
     */
    public function __construct()
    {
        $this->booking =
            [
                'tableID' => '4',
                'numOfPerson'=> '2',
                'date' => '18/05/2019',
                'description' => "New booking",
                'startTime' => '18'
            ];
        $this->booking1 =
            [
                'tableID' => '1',
                'numOfPerson'=> '2',
                'date' => '21/05/2019',
                'description' => '',
                'startTime' => '19'
            ];
    }


    /**
     * @param StartSteps $I
     * @param $scenario
     * @throws Exception
     */

    public function createBooking(StartSteps $I, $scenario)
    {
        $I -> wantToTest('I want to create new booking');
        $I -> checkCreateReservation();
        $I = new BookingSteps($scenario);
        $I -> doBooking($this->booking);
        $I -> doAdd();
        $I -> pause();
    }

    /**
     * @param StartSteps $I
     * @param $scenario
     * @throws Exception
     */
    public function createBooking1(StartSteps $I, $scenario)
    {
        $I -> wantToTest('I want to create new booking without fill Field Description');
        $I -> checkCreateReservation();
        $I = new BookingSteps($scenario);
        $I -> doBooking($this->booking1);
        $I -> doAdd();
        $I -> pause();
    }
    /**
     * @param StartSteps $I
     * @param $scenario
     * @throws Exception
     */
    public function clearData(StartSteps $I, $scenario)
    {
        $I -> wantToTest('I want to fill Input and clear');
        $I -> checkCreateReservation();
        $I = new BookingSteps($scenario);
        $I -> doBooking($this->booking);
        $I -> checkClear();
        $I -> pause();
    }
}
