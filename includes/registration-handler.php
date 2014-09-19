<?php 

define('EMAIL_TO', "bryan@doejo.com");
define('SUBJECT', "New Registration for Drink N Dev");
define('HEADERS', "From: DrinkNDev.com <no-reply@drinkndev.com> ");

class RegistrationHandler {


    function __construct(){
        add_action( 'init', array( $this,'ajax_setup' ) );
    }


    public function ajax_setup(){
        // handle the form the same regardless of authentication
        add_action( 'wp_ajax_submit_form', array( $this, 'form_handler' ) );
        add_action( 'wp_ajax_nopriv_submit_form', array( $this, 'form_handler' ) );
    }


    public function form_handler(){
        //  filter post data
        $data = filter_input_array( INPUT_POST, FILTER_SANITIZE_STRING );
        $form_data = $data['data'];
        $form_name = $data['form'];

        if ($data['form'] === 'register-individual') {
            $message = $this->register_individual($form_data);
        } else {
            $message = $this->register_team($form_data);
        }

        $response = wp_mail( EMAIL_TO, SUBJECT, $message, HEADERS);

        $resp = $response == 1 ? "success" : "fail";
        die($response);
    }




    private function register_team($form_data) {
        ob_start(); // echo out template here..

        echo "New Team registration on Drink N Dev.com: <br/><br/>";

        if (isset( $form_data['team_name'] ) &&  !empty( $form_data['team_name'] ) ) 
            echo "Team Name:   " . $form_data['team_name']  .  "<br/>";

        foreach (range(1, 4) as $number) {

            if ( isset( $form_data['member_' . $number . '_name'] ) &&  !empty( $form_data['member_' . $number . '_name'] ) ) 
                echo "Name:   " . $form_data['member_' . $number . '_name']   .    "<br/>";
            
            if ( isset( $form_data['member_' . $number . '_github'] ) &&  !empty( $form_data['member_' . $number . '_github'] ) ) 
                echo "Github/Portfolio: " . $form_data['member_' . $number . '_github'] .    "<br/>";
            
            if ( isset( $form_data['member_' . $number . '_email'] ) &&  !empty( $form_data['member_' . $number . '_email'] ) ) 
                echo "Email:  " . $form_data['member_' . $number . '_email']  .    "<br/><br/>";
        }
        

        // end if template body
        $message = ob_get_contents();
        ob_end_clean();

        return $message;
    }





    private function register_individual($form_data) {
        ob_start(); // echo out template here..

        echo "New Individual registration on Drink N Dev.com: <br/><br/>";
        

        if ( isset( $form_data['member_1_name'] ) &&  !empty( $form_data['member_1_name'] ) ) 
            echo "Name:   " . $form_data['member_1_name']   .    "<br/>";
        
        if ( isset( $form_data['member_1_github'] ) &&  !empty( $form_data['member_1_github'] ) ) 
            echo "Github/Portfolio: " . $form_data['member_1_github'] .    "<br/>";
        
        if ( isset( $form_data['member_1_email'] ) &&  !empty( $form_data['member_1_email'] ) ) 
            echo "Email:  " . $form_data['member_1_email']  .    "<br/><br/>";


        // end if template body
        $message = ob_get_contents();
        ob_end_clean();

        return $message;
    }

}

global $registration_handler;
$registration_handler = new RegistrationHandler;
