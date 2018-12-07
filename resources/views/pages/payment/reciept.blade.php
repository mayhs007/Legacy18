<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Legacy18 Ticket</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            .header{
                padding: 5px;
                text-align: center;
                border-top: 1px solid #000;
                border-bottom: 1px solid #000;                
            }
            body{
                border: 1px solid #000;
                padding: 5px;
        
            }
        </style>    
    </head>
    <body>
        <img src="images/header.jpg" class="img-responsive" alt="Header Image">
        <br>
        <p class="header text-uppercase">PAYMENT DETAILS</p>
        <p>You have paid for the following student(s)</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Legacy_iD</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user->payments as $index => $payment)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{$payment->user->LGid()}}
                        <td>{{ $payment->user->full_name }}</td>
                        <td>{{ $payment->user->email }}</td>
                        <td>{{ $payment->user->mobile }}</td>
                        <td><i class="fa fa-inr"></i> {{ App\Payment::getEventAmount() }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="5">Total Amount Paid (Includes 4% transaction fee)</th>
                    <th><i class="fa fa-inr"></i> {{ Auth::user()->getTotalAmountPaid() }}</th>
                </tr>
            </tfoot>
        </table>
        <br>
        <p class="header text-uppercase">GENERAL INSTRUCTIONS</p>
        <ol type="square">
                    <li><p>BONA FIDE CERTIFICATE IS MUST FOR PARTICIPATING IN LEGACY18 PLEASE PRODUCE YOUR ATTESTED BONA FIDE ON THE DAY OF LEGACY18</p></li><br>
                    <li><p>FAILURE OF BONAFIDE SUBMISSION WILL RENDER YOU UNABLE TO PARTICIPATE IN THE EVENTS</p></li><br>
                    <li><p>ID CARD IS A MUST</p></li><br>
                    <li><p>KINDLY SEND THE EVENT RELATED QUERIES TO THE CORRESPONDING EMAIL IDS AND GENERAL QUERIES TO THE LEGACY 18 OFFICIAL ID</p></li><br>
        </ol>
        <br>
        <p class="header text-uppercase text-center">CONTACT</p>
            Mepco Schlenk Engineering College, Sivakasi,<br>
            Mepco Engineering College Post - 626 005,<br>
            Virudhunagar District<br>
            <i class="fa fa-1x fa-envelope"></i><span>legacy18@mepcoeng.ac.in</span><br>
            <i class="fa fa-2x fa-mobile"></i><span> 04562 – 235601, 235660, 9677913395, 9442090272</span>
        
        
</html>