<?php
namespace Page\Acceptance;

class StartPage
{
    // include url of current page
    public static $URL = '/QATest';
    /**
     * @var string
     */
    public static $newReservation = '//a[text()="New Reservation"]';
    /**
     * @var string
     */
    public static $reloadData = '//a[text()="Reload Data"]';
    /**
     * @var string
     */
    public static $goToPage1 = '//a[@title="Go to page 1"]';
    /**
     * @var string
     */
    public static $goToPage2 = '//a[@title="Go to page 2"]';

}
