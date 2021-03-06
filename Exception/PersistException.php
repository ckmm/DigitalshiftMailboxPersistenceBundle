<?php

namespace Digitalshift\MailboxPersistenceBundle\Exception;

/**
 * PersistException
 *
 * @author Soeren Helbig <Soeren.Helbig@digitalshift.de>
 * @copyright Digitalshift (c) 2014
 */
class PersistException extends \Exception
{
    protected $message = 'Error during persistence of Message instance.';
} 