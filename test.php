<?php
header("Access-Control-Allow-Origin: *");

$Company_Name ="Bonolo Academy";
$First_Name = "Ethan";
$Last_Name="Matlala";
$Identity_Number = 9805065731088;
$Email_Address = "ethan@bonolo.com";
$Business_Address = "PO BOX SOFTLEARN 369";
$Message_Box="Experience in RAF Software Development and Psychology";
$msg_email = '
                  <html>
                    <body style="background-color: #f1f7fb">
                      <div
                        style="
                          background-color: #fff;
                          padding: 30px;
                          margin-top: 5%;
                          margin-left: 25%;
                          width: 50%;
                          font-family: sans-serif;
                        "
                      >
                        <img  style="width:100%;" src="http://akeelah.co.za/images/logo.png" />
                        <p><i>Good day Admin</i></p> <!-- get data from dbs -->
                        <p
                        style="
                          border: 1px solid #484848;
                          border-radius: 10px;
                          padding: 10px;
                          background-color: #597486;
                          color: white;
                          text-align: center;
                        "
                      >
                    </b>APPLICATION DETAILS</b>
                      </p>
                        <p><b>Company name        :</b> ' . $Company_Name . '</p>
                        <p><b>First name          :</b>  ' . $First_Name . '</p>
                        <p><b>Last name           :</b> ' . $Last_Name . '</p>
                        <p><b>Identity Number(ID) :</b> ' . $Identity_Number . '</p>
                        <p><b>Email Address       :</b> ' . $Email_Address . '</p>
                        <p><b>Business Address    :</b> ' . $Business_Address . '</p>
                        <p><b>Experience in RAF claims    :</b> ' . $Message_Box . '</p>
                        <hr />
                        <p style="text-align: right">
                          Developed By
                          <a href="https://www.akeelah.co.za/">Bonolo Academy</a>.
                        </p>
                      </div>
                    </body>
                  </html>
          ';

          $rec_email = "nelsonselape@gmail.com";  //reciever
          $sender_email = "bonoloacademy.co.za"; //sender
          $headers = "MIME-Version: 1.0\r\n";
          $headers .= "Content-type: text/html\r\n";
          $headers .= 'From: ' . $sender_email . "\r\n";
          $subject = "Employee contract-agreement details";

          mail($rec_email, $subject, $msg_email, $headers);

          if (mail($rec_email, $subject, $msg_email, $headers)) {
             echo "Message sent, thank you!";
          } else {
             echo "Mail not sent...";
          }

