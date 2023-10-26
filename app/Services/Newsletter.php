<?php

namespace App\Services;

class Newsletter
{

    protected function client()
    {
        return (new \MailchimpMarketing\ApiClient())->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us21'
        ]);
    }

    public function subscribe(string $email, string $list = null)
    {
        $list ??= config('services.mailchimp.list.subscribers');

        return $this->client()->lists->addListMember(
            $list,
            [
                'email_address' => $email,
                'status' => 'subscribed'
            ]
        );
    }


}