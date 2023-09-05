<?php

namespace App\Models\Factories;

use App\Models\Entity\Contact;

/**
 * Class ContactFactory
 * @package App\Models\Factories
 */
trait ContactFactory
{

    /**
     * @param Contact $contact
     * @param array $params
     * @return Contact
     */
    public static function contactFactory(Contact $contact, array $params): Contact
    {
        $contact->setPhoneNumber($params['phone_number']);
        $contact->setFirstName($params['first_name']);
        $contact->setLastName($params['last_name']);
        $contact->setUserId($params['user_id']);
        $contact->setVcard($params['vcard']);
        $contact->setCaption($params['caption']);
        $contact->save();
        $contact->refresh();
        return $contact;
    }

}
