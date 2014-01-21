<?php

namespace Digitalshift\MailboxPersistenceBundle\Persistence;

use Digitalshift\MailboxClientBundle\Mailbox\Message;
use Digitalshift\MailboxPersistenceBundle\Exception\PersistException;
use Digitalshift\MailboxPersistenceBundle\Exception\MessageNotFoundException;

/**
 * PersistenceInterface
 *
 * @author Soeren Helbig <Soeren.Helbig@digitalshift.de>
 * @copyright Digitalshift (c) 2014
 */
interface PersistenceInterface
{
    /**
     * @param $id
     * @param Message $message
     *
     * @throws PersistException
     */
    public function persist($id, Message $message);

    /**
     * @param $id
     * @return Message
     *
     * @throws MessageNotFoundException
     */
    public function load($id);
} 