<?php

namespace Digitalshift\MailboxPersistenceBundle\Persistence\Attachment;

use Digitalshift\MailboxAbstractionBundle\Entity\MessageMimePart;

/**
 * PersistenceInterface
 *
 * @author Soeren Helbig <Soeren.Helbig@digitalshift.de>
 * @copyright Digitalshift (c) 2014
 */
interface PersistenceInterface
{
    /**
     * @param MessageMimePart $message
     *
     * @throws PersistException
     */
    public function persist(MessageMimePart $message);
}