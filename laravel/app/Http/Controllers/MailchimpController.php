<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Mailchimp\Mailchimp;
use Illuminate\Http\Request;

Class MailchimpController extends Controller{
    private $mailchimp;
    private $from_name = "Anshuman Chandra";
    private $from_email = "no-reply@vitservices.com.au";
    private $subject = "Anshuman Chandra Newsletter";
    private $en = "en";
    private $permission_reminder = "You registered to get Newsletter";
    private $listID = "510bd686ba";


    public function __construct() {
        $this->mailchimp = new Mailchimp('b01e89df640bf552cf1d6f91048bf122-us12');
    }


    public function createList(Request $request){
        
        $data = array(
            "name" => $request->input('listname'),
            "contact" => array(
                        "company" => $request->input('company'),
                        "address1" => $request->input('address1'),
                        "address2" => $request->input('address2'),
                        "city" => $request->input('city'),
                        "state" => $request->input('state'),
                        "zip" => $request->input('zip'),
                        "country" => $request->input('country'),
                        "phone" => $request->input('phone'),
            ),
            "permission_reminder" => $this->permission_reminder,
            "campaign_defaults" => array(
                        "from_name" => $this->from_name,
                        "from_email" => $this->from_email,
                        "subject" => $this->subject,
                        "language" => $this->en
            ),
            "email_type_option" => true
        );
        $result = $this->mailchimp->post("lists",$data);
        dd($result);
    }

    public function updateUser(Request $resource){
        $subscribed = (!empty($resource->input('subscribed'))) ? "subscribed" : "unsubscribed";
        $data = array(
            "email_address" => $resource->input('email'),
            "status" => $subscribed,
            'merge_fields'  => array(
            "FNAME" => $resource->input('firstname'),
            "LNAME" => $resource->input('lastname')
            )
        );
        $hash = md5($resource->input('email'));
        $result = $this->mailchimp->put("lists/$this->listID/members/$hash", $data);
        dd($result);
    }


}