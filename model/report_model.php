<?php

class Report_Model extends Model {
    public function __construct() {
        parent::__construct();
    }

    /**
     * TODO: it should collect all house/place info to generate the report
     * but in this case, we only use email address
     * @param $info
     * @return string COPYRIGHT ©2014-2024, FMACHINE.CN, ALL RIGHTS RESERVED
     * COPYRIGHT ©2014-2024, FMACHINE.CN, ALL RIGHTS RESERVED
     * Author: XIN MING
     */
    public function sendGeneralReport($info) {
        // send mail
        $ies = new EmailService();
        $ies->iEmailService->AddAddress($info->email, $info->userName); // Add a recipient

        /******************************************************
         * Email Content
         */
        $ies->iEmailService->IsHTML(EMAIL_CONTENT_IS_HTML); // Set email format to HTML
        $ies->iEmailService->Subject = 'Solar Investment Result';
        $ies->iEmailService->Body = "<h2>hi " . $info->userName . "</h2>
<br/>Before making an investment one should understand the risk profile associated with any investment.
<br/>There are 3 dimensions to an investment which also reflects in the return of investment.
<br/>The 3 dimensions are :
<br/>1. Cost
<br/>2. Gain or Value
<br/>3. Risk
<br/>The goal is to find an investment where Cost and Risk are less compared to Gain it will bring.
<br/>Solar power return on investment (Payback Period) = Net Costs / Monthly Savings
<br/><a href='http://weblab.cs.uml.edu/~xming/91513f2015/roi/signup'>Join us to find more!</a>
";

        if (!$ies->iEmailService->send()) {
            $result = EMAIL_SERVER_ERROR;// . $this->iEmailService->ErrorInfo;
        } else {
            $result = "<h2>Your report has been.<a href='http://weblab.cs.uml.edu/~xming/91513f2015/roi/signup'>Join us to find more!</a><br/>";
        }
        return $result;
    }
}