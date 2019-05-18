<?php
namespace Step\Acceptance;
use Page\Acceptance\StartPage;
use Page\Acceptance\SortPage;
use Page\Acceptance\BookingPage;
class BookingSteps extends \AcceptanceTester
{
    /**
     * @param array $booking
     */

    public function doBooking($booking = array())
    {
        $I = $this;
        $I -> fillField(BookingPage::$tableID, $booking['tableID'] );
        $I -> fillField(BookingPage::$numOfPerson, $booking['numOfPerson']);
        $I -> fillField(BookingPage::$date, $booking['date']);
        $I -> fillField(BookingPage::$description, $booking['description']);
        $I -> fillField(BookingPage::$startTime, $booking['startTime']);
    }
    public function checkClear()
    {
        $I = $this;
        $I -> click(BookingPage::$clear);
    }
    public function doAdd()
    {
        $I = $this;
        $I -> click(BookingPage::$addButton);
    }

}