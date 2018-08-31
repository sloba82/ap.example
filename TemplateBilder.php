<?php

require_once __DIR__ . '/vendor/autoload.php';
require 'Template.php';

class TemplateBilder
{

    public function employerTemplate($employerData, $post)
    {

        $Template = new Template();

        $max = sizeof($employerData);
        for ($i = 0; $i < $max; $i++) {

            $mpdf = new \Mpdf\Mpdf();
            $html = $Template->templateBildEmployer(
                $employerData[$i][0],
                $employerData[$i][1],
                $employerData[$i][2],
                $employerData[$i][3],
                $employerData[$i][4],
                $employerData[$i][5],
                $employerData[$i][6],
                $employerData[$i][7],
                $employerData[$i][8],
                $employerData[$i][9],
                $employerData[$i][10],
                $post
            );

            sleep(1);
            $mpdf->useActiveForms = true;
            $mpdf->formUseZapD = false;
            $mpdf->form_border_color = '0.6 0.6 0.72';
            $mpdf->form_button_border_width = '2';
            $mpdf->form_button_border_style = 'S';
            $mpdf->form_radio_color = '0.0 0.0 0.4'; // radio and checkbox
            $mpdf->form_radio_background_color = '0.9 0.9 0.9';
            $mpdf->WriteHTML($html);


            $firstName = $this->clean($post['first_name']);
            $lastName =  $this->clean($post['last_name']);
            $lastEmplerName =  $this->clean($employerData[$i][0]);



            $name = 'pdf/' . $i . '_'. $firstName. '_' . $lastName .'_previous_' .$lastEmplerName.'_'. time() . '.pdf';
            /*ob_clean();*/
            $mpdf->Output($name, 'F');
            $html = '';
            $fileName[] = $name;

            unset($mpdf);
        }
        
        return $fileName;

    }


    public function clean($string) {
       $string = str_replace(' ', '_', $string);
       return preg_replace('/[^A-Za-z0-9\_]/', '', $string); 
    }


    public function futureEmployeeTemplate($previous, $accident, $convicti, $employerData, $post)
    {

        $Template = new Template();
        $mpdf = new \Mpdf\Mpdf();

        $html = $Template->futureEmployeeBildTemplate(
            $previous,
            $accident,
            $convicti,
            $employerData,
            $post
        );

        sleep(1);
        $mpdf->useActiveForms = true;
        $mpdf->formUseZapD = false;
        $mpdf->form_border_color = '0.6 0.6 0.72';
        $mpdf->form_button_border_width = '2';
        $mpdf->form_button_border_style = 'S';
        $mpdf->form_radio_color = '0.0 0.0 0.4'; // radio and checkbox
        $mpdf->form_radio_background_color = '0.9 0.9 0.9';
        $mpdf->WriteHTML($html);

            $firstName = $this->clean($post['first_name']);
            $lastName =  $this->clean($post['last_name']);

        $name = 'pdf/' . $firstName. '_' . $lastName . '_' . time() . '.pdf';
        /*ob_clean();*/
        $mpdf->Output($name, 'F');
        $html = '';
        $fileName = $name;

        unset($mpdf);
        return $fileName;

    }

}
