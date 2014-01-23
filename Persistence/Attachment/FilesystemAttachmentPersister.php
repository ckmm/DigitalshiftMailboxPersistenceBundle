<?php

namespace Digitalshift\MailboxPersistenceBundle\Persistence\Attachment;

use Digitalshift\MailboxAbstractionBundle\Entity\MessageMimePart;
use Symfony\Component\HttpFoundation\File\MimeType\ExtensionGuesser;

/**
 * FilesystemAttachmentPersister
 *
 * @author Soeren Helbig <Soeren.Helbig@digitalshift.de>
 * @copyright Digitalshift (c) 2014
 */
class FilesystemAttachmentPersister implements PersistenceInterface
{
    /**
     * @var string
     */
    private $webRoot;

    /**
     * @var string
     */
    private $prefix;

    /**
     * @param string $webRoot
     * @param string $prefix
     */
    public function __construct($webRoot, $prefix)
    {
        $this->webRoot = $webRoot;
        $this->prefix = $prefix;
    }

    /**
     * @{inheritdoc}
     */
    public function persist(MessageMimePart $attachment)
    {
        $path = md5($attachment->getContent()) . '.' . $this->getFileExtension($attachment);
        $webPath = $this->prefix . '/' . $path;
        $filePath = $this->webRoot . '/' . $webPath;

        if (!file_exists($filePath)) {
            $file = fopen($filePath, 'w+');
            fwrite($file, $attachment->decodeContent(), strlen($attachment->decodeContent()));
            fclose($file);
        }

        $attachment->setPath($webPath);
    }

    /**
     * @param MessageMimePart $attachment
     * @return string
     */
    private function getFileExtension(MessageMimePart $attachment)
    {
        $guesser = ExtensionGuesser::getInstance();

        return $guesser->guess($attachment->getHeader('content-type'));
    }
}