<?php

class formClass
{
    public function submit()
    {
        if($_POST) {
            $name = "";
            $email = "";
            $email_title = "";
            $concerned_department = "";
            $message = "";
            $submitted_body = "<div style='font-size: 30px; margin: 50px; text-align: left;'> Submitted Details are as follows: <br><br>";
              
            if(isset($_POST['name'])) {
                $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
                $submitted_body .= "<div>
                                   <label><b>Visitor Name:</b></label>&nbsp;<span>".$name."</span>
                                </div>";
            }
         
            if(isset($_POST['email'])) {
                $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
                $email = filter_var($email, FILTER_VALIDATE_EMAIL);
                $submitted_body .= "<div>
                                   <label><b>Visitor Email:</b></label>&nbsp;<span>".$email."</span>
                                </div>";
            }
              
            if(isset($_POST['email_title'])) {
                $email_title = filter_var($_POST['email_title'], FILTER_SANITIZE_STRING);
                $submitted_body .= "<div>
                                   <label><b>Reason For Contacting Us:</b></label>&nbsp;<span>".$email_title."</span>
                                </div>";
            }
              
            if(isset($_POST['concerned_department'])) {
                $concerned_department = filter_var($_POST['concerned_department'], FILTER_SANITIZE_STRING);
                $submitted_body .= "<div>
                                   <label><b>Concerned Department:</b></label>&nbsp;<span>".$concerned_department."</span>
                                </div>";
            }
              
            if(isset($_POST['message'])) {
                $message = htmlspecialchars($_POST['message']);
                $submitted_body .= "<div>
                                   <label><b>Visitor Message:</b></label>
                                   <div>".$message."</div>
                                </div>";
            }
              
            if($concerned_department == "billing") {
                $recipient = "billing@domain.com";
            }
            else if($concerned_department == "marketing") {
                $recipient = "marketing@domain.com";
            }
            else if($concerned_department == "technical support") {
                $recipient = "tech.support@domain.com";
            }
            else {
                $recipient = "contact@domain.com";
            }
              
            $submitted_body .= "</div>";
         
            return $submitted_body;
              
        } else {
            header('Location: /hello-world/src/pages/form.php');
            return;
        }
    }
}