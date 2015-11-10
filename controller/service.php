<?php

/**
 * Project: SP_ROI
 * TODO: add auth code
 * TODO: modify the way of getting weather info. set a task get weather info in the morning, save it to server cache/generate a static file.
 * COPYRIGHT ©2014-2024, FMACHINE.CN, ALL RIGHTS RESERVED
 * Author: XIN MING
 * Since: 11/10/15 9:56 AM
 */
class service extends Controller {
    function __construct() {
        parent::__construct();
    }


    function phistory() {
        $poArray = $this->model->getPanelHistory();
        $this->view->msg = $this->poToJson($poArray);
        $this->view->render('service/phistory', true);
    }
//
//    public $id;
//    public $date;
//    public $email;
//    public $generated_power;
//    public $consumed_power;
//    public $price;
//    public $income;
    function poToJson($poArray) {
        $outp = "";
        foreach ($poArray as $po) {
            if ($outp != "") {
                $outp .= ",";
            }

            $outp .= '{"Date":"' . $po->date . '",';

            $outp .= '"Generated_power":"' . $po->generated_power . '",';
            $outp .= '"Consumed_power":"' . $po->consumed_power . '",';
            $outp .= '"Price":"' . $po->price . '",';

            $outp .= '"Income":"' . $po->income . '"}';
        }

        $outp = '{"records":[' . $outp . ']}';
        return $outp;
    }

    function weather() {
        $this->view->msg = '
{
  "records": [
    {
      "Date": "2015-10-01",
      "LowTemp": "51F",
      "HighTemp": "69F",
      "AvgTemp": "59F",
      "SunLight": "80",
      "WeatherType": "Sunny"
    },
    {
      "Date": "2015-10-02",
      "LowTemp": "60F",
      "HighTemp": "80F",
      "AvgTemp": "72F",
      "SunLight": "95",
      "WeatherType": "Sunny"
    },
    {
      "Date": "2015-10-03",
      "LowTemp": "65F",
      "HighTemp": "90F",
      "AvgTemp": "71F",
      "SunLight": "80",
      "WeatherType": "Sunny"
    }
  ]
}
        ';
        $this->view->render('service/weather', true);
    }

}