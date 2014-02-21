<?php
/**
 * Definition of the EmailAddress type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the EmailAddress type
 */
class EmailAddress extends PhpEws\EWSType
{
    /**
     * Name property
     *
     * @var string
     */
    public $Name;

    /**
     * Address property
     *
     * @var string
     */
    public $Address;

    /**
     * RoutingType property
     *
     * @var string
     */
    public $RoutingType;
}
