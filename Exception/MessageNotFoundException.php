<?php

namespace Digitalshift\MailboxPersistenceBundle\Exception;

/**
 * MessageNotFoundException
 *
 * @author Soeren Helbig <Soeren.Helbig@digitalshift.de>
 * @copyright Digitalshift (c) 2014
 */
class MessageNotFoundException
{
    protected $message = 'Could not find message with ID: %s';
} 