<?php
/**
 * Definition of the AppendToFolderFieldType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the AppendToFolderFieldType type
 */
class AppendToFolderFieldType extends PhpEws\EWSType
{
    /**
     * Folder property
     *
     * @var FolderType
     */
    public $Folder;

    /**
     * CalendarFolder property
     *
     * @var CalendarFolderType
     */
    public $CalendarFolder;

    /**
     * ContactsFolder property
     *
     * @var ContactsFolderType
     */
    public $ContactsFolder;

    /**
     * SearchFolder property
     *
     * @var SearchFolderType
     */
    public $SearchFolder;

    /**
     * TasksFolder property
     *
     * @var TasksFolderType
     */
    public $TasksFolder;
}
