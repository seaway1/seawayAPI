<?php
    class Help{

        private $message;
        private $subject;
        private $sender;
        
        public function __construct($sender,$message,$subject){

            $this->message = $message;
            $this->subject = $subject;
            $this->sender = $sender;
            
        }

        public function getSender(){
            return $this->sender;
        }
        public function setSender($sender){
                $this->sender = $sender;
        }

       public function getSubject(){
           return $this->subject;
       }

       public function setSubject($subject){
           $this->subject = $subject;
       }

        public function getMessage(){

            return $this->message;
        }

        public function setMessage($message){
            $this->message = $message;

        }

        public function sendMail(){
            
            $msg = wordwrap($this->message, 70, "\r\n");
            $headers = ('From: '.$this->sender . "\r\n" .
                         'Reply-To: '.$this->sender . "\r\n" .
                        'X-Mailer: PHP/' . phpversion());
                        $to = "info@seawaytraveller.com";
            try{
            $mail_send = mail($to,$this->subject,$msg,$headers);
                if($mail_send){
                    echo "<div class=\" danger\">
                    <script>
                    alert('Your problem will be attended to ASAP. Thanks')
                    </script>
                        </div>";
                }else{
                    echo "<div class=\" success\">
                            <script>
                            alert('There was an error. Please Contact Seaway')
                            </script>
                            </div>";
                }

            }catch(Exception $e){
                echo $e->getMessage();

            }

            
        }

    }

    if(isset($_POST['help'])){
        try{

        
            $help = new Help('subject','subject','From');

            $help->setSender($_POST['sender']);
            $help->setMessage($_POST['message']);
            $help->setSubject($_POST['subject']);
            define("to", "info@seawaytraveller.com");

            $body = $help->getMessage();
            $subject = $help->getSubject();
            $from = $help->getSender();

            

                if(strlen($subject) > 100){
                
                    echo "<div class=\" danger\">
                    <script>
                    alert('Your subject is too long. Use less than 100 characters')
                    </script>
                    </div>";

                }else{

                        $help->sendMail();

                }           

            }catch(Exception $e){
                echo $e->getMessage();
        }


           
    }