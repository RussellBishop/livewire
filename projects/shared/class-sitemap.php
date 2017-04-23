<?php

class Sitemap
{

    /**
     * @return void
     */
    public function __construct($projectId)
    {
        $username = 'accounts@wearelighthouse.com';
        $apikey = 'f16b739f-8a2a-448d-b3dc-55359d864136';

        $ch = curl_init();

        curl_setopt( $ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Accept: application/vnd.gathercontent.v0.5+json'));
        curl_setopt( $ch, CURLOPT_USERPWD, $username . ':' . $apikey);
        curl_setopt( $ch, CURLOPT_URL, 'https://api.gathercontent.com/items?project_id=' . $projectId);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

        $response = json_decode(curl_exec($ch));
        curl_close($ch);

        return $response->data;

        // foreach ($response->data->config[0]->elements as $element) {
        //     $field = $this->slugify($element->label);

        //     if ($field) {
        //         $this->{$field} = $element->value;
        //     }
        // }
    }
}
