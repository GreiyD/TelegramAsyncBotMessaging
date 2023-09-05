<?php

namespace App\Models\Factories;

use App\Models\Entity\Document;

/**
 * Class DocumentFactory
 * @package App\Models\Factories
 */
trait DocumentFactory
{

    /**
     * @param Document $document
     * @param array $params
     * @return Document
     */
    public static function documentFactory(Document $document, array $params): Document
    {
        $document->setFilePath($params['file_path']);
        $document->setDocument($params['document']);
        $document->setCaption($params['caption']);
        $document->setFileName($params['file_name']);
        $document->save();
        $document->refresh();
        return $document;
    }

}
