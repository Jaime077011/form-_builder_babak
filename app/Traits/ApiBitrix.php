<?php

namespace App\Traits;

use GuzzleHttp\Client;

trait ApiBitrix
{
    public function createTask($Responsible_id,$Title,$Description)
    {
        // Do something...
     
        $url = 'https://ilaw.bitrix24.com/rest/33/1oqj5qhbgfgo4amq/tasks.task.add.json?fields[TITLE]=(Babak-system)' . $Title . '&fields[RESPONSIBLE_ID]=' . $Responsible_id . '&fields[DESCRIPTION]=' . $Description;
        // https://ilaw.bitrix24.com/rest/29/iq01qhi4q2l5ho2f/tasks.task.add.json?fields[TITLE]=(Babak-system)
        // https://ilaw.bitrix24.com/rest/33/1oqj5qhbgfgo4amq/tasks.task.add.json?fields[TITLE]=(Babak-system)

        
        // yousry
        // https://ilaw.bitrix24.com/rest/23/2lre87fb7930yrto/tasks.task.add.json?fields[TITLE]=(Babak-system)
        $client = new Client();
    
        try {
          $response = $client->get($url);
          $data = json_decode($response->getBody(),true );

          if ( !empty($data['result']['task'])) {
            $data['status'] = '200';
            $data['message'] = 'Task created successfully.';
             return  $data;
          }
      } catch (\Exception $e) {
        
        $data = [];
        $data['status'] = '405';
        $data['message'] = 'Task not successfully.';
        $data['error_description'] = $e->getMessage();
     
      
return $data;






      }

    }
    public function createAlert()
    {

    }
}