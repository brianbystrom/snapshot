<?
  
  //session_start();
  include('./include/include.inc');
  include('./include/library.php');

  /*if(isset($_SESSION['auth'])) {
      check_login($conn);
    } else {
      header('Location: logout.php');
      exit;
    }*/

  $ctn = 2147483647;

  $account = get_customer($conn,$ctn);

  $id = $account[0]['id'];
  $name = $account[0]['name'];
  $birthday = date('m/d/Y', strtotime($account[0]['birthday']));
  $account_no = $account[0]['account_no'];
  $account_type = $account[0]['account_type'];
  $online = $account[0]['online'];
  $payment_type = $account[0]['payment_type'];
  $billing_type = $account[0]['billing_type'];
  $installment_plans = $account[0]['installment_plans'];
  $last_bill_amount = $account[0]['last_bill_amount'];
  $bill_due_date = date('m/d/Y', strtotime($account[0]['bill_due_date']));

  $minutes_left = $account[0]['minutes_left'];
  $minutes_total = $account[0]['minutes_total'];
  $minutes_percent = $minutes_left / $minutes_total;

  $messaging = $account[0]['messaging'];

  if($messaging == 99999) {
    $messaging_text = 'Unlimited';
    $messaging_percent = 100;
  } else {
    $messaging_text = $messaging;
  }

  $devices = get_devices($conn,$id);

  
  

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class='container'>
        <div class='row'><div class='col-md-12'><br></div></div>
      <div class='row'>
        <div class='col-md-3  pad-bottom-15'>
          <div class='panel panel-default'>
            <div class='panel-heading'>
              
                <span class='title'><? echo $name; ?></span>
            </div>
            <div class='panel-body'>
              <span class='sub-title bold font-grey'>CUSTOMER SINCE <? echo $birthday; ?></span><br>
              <span class='sub-title bold'>AUTHORIZED USERS:</span><br>
              <span class='text lighter font-grey'>None</span><br>
              <span class='sub-title bold'>OTHER AT&T SERVICES:</span><br>
              <span class='text lighter font-grey'>None</span><br>
              
              <div class='row'>
                <hr>
              </div>
              <div class='row pad-left-15 margin-top-neg-15'>
                 <span class='sub-title bold'>BILLING ACCT NUMBER: </span><span class='text lighter font-grey'><? echo $account_no; ?></span><br>
                 <span class='sub-title bold'>ACCT TYPE: </span><span class='text lighter font-grey'><? echo $account_type; ?></span><br>
                 <span class='sub-title bold'>ONLINE ACCT: </span><span class='text lighter font-grey'><? echo $online; ?></span><br>
                 <span class='sub-title bold'>PAYMENT TYPE: </span><span class='text lighter font-grey'><? echo $payment_type; ?></span><br>
                 <span class='sub-title bold'>BILLING TYPE </span><span class='text lighter font-grey'><? echo $billing_type; ?></span><br>
              </div>
              <div class='row'>
                <hr>
              </div>
              <div class='row pad-left-15 margin-top-neg-15'>
                <span class='sub-title bold'>INSTALLMENT PLANS: </span><span class='text lighter font-grey'><? echo $installment_plans; ?></span><br>
              </div>
              <div class='row'>
                <hr>
              </div>
              <div class='row pad-left-15'>
                <span class='sub-title bold'>LAST BILL AMOUNT</span><br>
                <span class='title bold font-green'>$<? echo $last_bill_amount; ?></span><br>
                <span class='text lighter font-grey'>Bill Due Date: <? echo $bill_due_date; ?></span><br>
                <span class='sub-title bold'>LAST ADJUSTMENT</span><br>
                <span class='text lighter font-grey'>None</span><br>
                <a href="account.php" class="btn btn-info margin-left-15 margin-top-15" role="button">View Account Details</a>
              </div>
            </div>
          </div>
        </div>

        <div class='col-md-9'>
          <div class="panel panel-default">
            <div class="panel-heading">
              <span class="title">Contacts in last 30 days (0)</span>
            </div>
            <div class="panel-body">
              <div class="progress margin-top-15">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                 <span class="sr-only">40% Complete (success)</span>
               </div>
             </div>
            </div>
          </div>
        </div>
        <div class='col-md-6'>
          <div class="panel panel-default">
            <div class="panel-heading">
              <span class="title">Devices (1)</span>
                <div class="dropdown float-right">
                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                    231-620-0919 - Samsung Galaxy S4
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">

                    <?  foreach($devices AS $device) {
                      echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="#">'.$device["ctn"].' - Samsung Galaxy S3</a></li>';
                    } ?>
                    
                  </ul>
                </div>
              <br>
              <span class='text lighter'>Device selection can display up to 15 devices</span>
            </div>
            <div class="panel-body">
              <div class='row'>
                  <div class='col-md-5 text-center'>
                    <span class='device-title'>Samsung Galaxy S4</span><br>
                    <img class='margin-top-15' align='center' src='http://ecx.images-amazon.com/images/I/41Lq6GIxQ1L._SL500_AA300_.jpg' style='max-height: 100px; max-width: 100px;'></img><br>
                    <span class='sub-title bold'>Android</span><br>
                    <span class='sub-title bold font-orange'>CTN: 231-620-0919</span><br>
                    <span class='sub-title bold'>IMEI: 356567056814732</span><br>
                    <span class='sub-title bold'>Contract Ends: </span><span class='text lighter'>08/27/2015</span><br>
                  </div>

                  <div class='col-md-7 border-left'>
                      <span class='device-title'>Nation 450 with Rollover</span><br>
                      <span class='text lighter'>Billing Cycle</span><br>
                      <span class='text lighter'>03/03/2015 - 03/28/2015</span>
                      <span class='text bold float-right'>3 days left</span><br>
                      <div class="progress progress-height-10">
                         <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                          <span class="sr-only">40% Complete (success)</span>
                        </div>
                      </div>
                      <span class='text lighter'>Talk</span>
                      <span class='text bold float-right'><? echo $minutes_left; ?> left</span><br>
                      <div class="progress progress-height-10">
                         <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <? echo $minutes_percent*100; ?>%">
                          <span class="sr-only">40% Complete (success)</span>
                        </div>
                      </div>
                      <span class='text lighter'>Messaging</span>
                      <span class='text bold float-right'><? echo $messaging_text; ?></span><br>
                      <div class="progress progress-height-10">
                         <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <? echo $messaging_percent; ?>%">
                          <span class="sr-only">40% Complete (success)</span>
                        </div>
                      </div>
                      <span class='text lighter'>Data</span>
                      <span class='text bold float-right'>No Usage Returned</span><br>
                      <div class="progress progress-height-10">
                         <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                          <span class="sr-only">40% Complete (success)</span>
                        </div><br>
                      </div>
                      <span class='text bold'><a href='usage.php'>View Usage Details</a></span>
                      
                      
                  </div>
              </div>
              <div class='row'>
                <hr>
              </div>
              <div class='row'>
                  <div class='col-md-3 text-center'>
                      <span class='sub-title bold'>Upgrade Eligible</span><br>
                      <span class='sub-title bold font-green'>Yes</span><br>
                      <span class='sub-title bold'><a href='upgrades.php'>View All Devices</a></span><br>
                  </div>
                  <div class='col-md-4 border-left'>
                    <div class='row'>
                      <div class='col-md-5'>
                        <span class='text bold'>Standard</span><br>
                        <span class='text bold'>Early</span><br>
                        <span class='text bold'>Installment</span><br>
                        <span class='text bold'>Shared</span><br>
                      </div>
                      <div class='col-md-2'>
                        <span class='glyphicon glyphicon-ok font-green'></span>
                        <span class='glyphicon glyphicon-remove font-red'></span>
                        <span class='glyphicon glyphicon-ok font-green'></span>
                        <span class='glyphicon glyphicon-ok font-green'></span>
                      </div>
                      <div class='col-md-5'>
                        <span class='text lighter'>08/28/2015</span><br>
                        <span></span><br>
                        <span></span><br>
                        <span></span><br>
                      </div>
                    </div>
                  </div>
                  <div class='col-md-2 text-center border-left'>
                      <span class='text bold'>Warranty Expired</span><br>
                      <span class='text bold'>09/09/2014</span>
                  </div>
                  <div class='col-md-3 text-center border-left'>
                      <span class='text bold'>Insurance Coverage</span><br>
                      <span class='text bold'>AT&T</span><span class='glyphicon glyphicon-ok font-green'></span>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class='col-md-3'>
          <div class="panel panel-default">
            <div class="panel-heading">
              <span class="title">Device Notices (13)</span>
            </div>
            <div class='row'>
              <div class='col-md-2'>
                <div class="panel-body text-center">
                  <div class='circle device-number font-white bg-orange'>3</div>
                </div>
              </div>
              <div class='col-md-10'>
                <div class="panel-body text-left">
                  <div class='text bold pad-top-10'><a href='line.php'>Line Information</a></div>
                </div>
              </div>
            </div>
            <div class='row'>
              <div class='col-md-2'>
                <div class="panel-body text-center">
                  <div class='circle device-number bg-grey'>0</div>
                </div>
              </div>
              <div class='col-md-10'>
                <div class="panel-body text-left">
                  <div class='text bold pad-top-10'>User Reported Network Info</div>
                </div>
              </div>
            </div>  
            <div class='row'>
              <div class='col-md-2'>
                <div class="panel-body text-center">
                  <div class='circle device-number font-white bg-orange'>10</div>
                </div>
              </div>
              <div class='col-md-10'>
                <div class="panel-body text-left">
                  <div class='text bold pad-top-10'><a href='device.php'>Device Alerts</a></div>
                </div>
              </div>
            </div>
          </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <span class="title">Account Notices (1)</span>
          </div>
          <div class='row'>
            <div class='col-md-2'>
              <div class="panel-body text-center">
                <div class='circle device-number bg-grey'>0</div>
              </div>
            </div>
            <div class='col-md-10'>
              <div class="panel-body text-left">
                <div class='text bold pad-top-10'>Open Items</div>
              </div>
            </div>
            <hr>
          </div>
          
          <div class='row'>
            <div class='col-md-2'>
              <div class="panel-body text-center">
                <div class='circle device-number font-white bg-orange'>1</div>
              </div>
            </div>
            <div class='col-md-10'>
              <div class="panel-body text-left">
                <div class='text bold pad-top-10'>Outbound Offers</div>
              </div>
            </div>
          </div>  
        </div>
      </div>

              


    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script>
        $('.dropdown-menu').click(function (e) {
          e.preventDefault();
          alert("YO");
          //$(this).tab('show')
        })
    </script>

  </body>
</html>