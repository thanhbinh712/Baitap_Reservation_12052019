<?php
namespace Page\Acceptance;

class BookingPage
{
    // include url of current page
    /**
     * @var string
     */
    public static $URL = '/reservationform';
    /**
     * @var string
     */
    public static $tableID = '//input[@name="tableID"]';
    /**
     * @var string
     */
    public static $numOfPerson = '//input[@name="numberofperson"]';
    /**
     * @var string
     */
    public static $date = '//input[@name="date"]';
    /**
     * @var string
     */
    public static $description = '//textarea[@name="description"]';
    /**
     * @var string
     */
    public static $startTime = '//input[@name="startTime"]';
    /**
     * @var string
     */
    public static $addButton = '//input[@value="add/edit"]';
    /**
     * @var string
     */
    public static $clear = '//a[text()="clear"]';

}
