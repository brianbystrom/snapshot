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
      <div class='col-md-12'>
        <div class="panel panel-default">
          <div class="panel-heading">
            <a href="snapshot.php" class="btn btn-info margin-left-15" role="button">Back</a>
            <span class="title pad-left-15">Jennifer Ash's Snapshot</span>
          </div>
          <div class="panel-body">
            <div class='row'>
              <div class='col-md-3'>
                  <span class='title bold'>Account Details</span>
              </div>
              <div class='col-md-7'>
                <div class='row'> 
                  <div class='col-md-12'>
                    <span class='sub-title lighter'>FAN Name: TRIBAL GOVERNMENT EMPLOYEES-N GSM GOV IRU</span>
                  </div>
                </div>
                <div class='row'>
                  <div class='col-md-4'>
                    <span class='sub-title lighter'>FAN Number: 02462134</span>
                  </div>
                  <div class='col-md-4'>
                    <span class='sub-title lighter'>FAN Status: ACTIVE</span>
                  </div>
                </div>
                <div class='row'>
                  <div class='col-md-4'>
                    <span class='sub-title lighter'>Service Discount: 15%</span>
                  </div>
                  <div class='col-md-4'>
                    <span class='sub-title lighter'>Accessory Discount: 25%</span>
                  </div>
                </div>
                <div class='row'>
                  <div class='col-md-4'>
                    <span class='sub-title lighter'>Activation Fee Waived: </span>
                    <span class='glyphicon glyphicon-remove font-red'></span>
                  </div>
                  <div class='col-md-4'>
                    <span class='sub-title lighter'>Upgrade Fee Waived: </span>
                    <span class='glyphicon glyphicon-remove font-red'></span>
                  </div>
                </div>
              </div>
              <div class='col-md-2'>
                  <span class='sub-title bold'>BALANCE DUE: </span>
                  <span class='title bold font-green'>$0.00</span><br>
                  <span class='text lighter'>Bill Due Date: </span>
                  <span class='text bold'>03/22/2015</span><br>
                  <span class='text lighter'>Days Past Due: </span>
                  <span class='text bold'>0</span><br>
              </div>

            </div>
              
            <div role="tabpanel">

              <!-- Nav tabs -->
              <ul class="nav nav-tabs margin-top-15" role="tablist">
                <li role="presentation" class="active"><a href="#all" aria-controls="home" role="tab" data-toggle="tab">All</a></li>
                <li role="presentation"><a href="#payments" aria-controls="profile" role="tab" data-toggle="tab">Payments</a></li>
                <li role="presentation"><a href="#adjustments" aria-controls="messages" role="tab" data-toggle="tab">Latest Adjustment</a></li>
                <li role="presentation"><a href="#arrangements" aria-controls="settings" role="tab" data-toggle="tab">Arrangement</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="all">
                  <table class="table margin-top-15">
                    <thead class='bold'>
                      <tr>
                        <td class='col-md-4'>Date</td>
                        <td class='col-md-4'>Type</td>
                        <td class='col-md-4'>Amount</td>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>03/20/2015</td>
                          <td>Payment</td>
                          <td>$88.74</td>
                        </tr>
                        <tr>
                          <td>03/20/2015</td>
                          <td>Payment</td>
                          <td>$88.74</td>
                        </tr>
                        <tr>
                          <td>03/20/2015</td>
                          <td>Payment</td>
                          <td>$88.74</td>
                        </tr>
                    </tbody>
                  </table>

                </div>
                <div role="tabpanel" class="tab-pane" id="payments">
                  <table class="table margin-top-15">
                    <thead class='bold'>
                      <tr>
                        <td class='col-md-4'>Date</td>
                        <td class='col-md-4'>Payment Type</td>
                        <td class='col-md-4'>Amount</td>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>03/20/2015</td>
                          <td>Direct Debit</td>
                          <td>$88.74</td>
                        </tr>
                        <tr>
                          <td>03/20/2015</td>
                          <td>Direct Debit</td>
                          <td>$88.74</td>
                        </tr>
                        <tr>
                          <td>03/20/2015</td>
                          <td>Direct Debit</td>
                          <td>$88.74</td>
                        </tr>
                    </tbody>
                  </table>

                </div>
                <div role="tabpanel" class="tab-pane" id="adjustments">
                  <table class="table margin-top-15">
                    <thead class='bold'>
                      <tr>
                        <td class='col-md-2'>Date</td>
                        <td class='col-md-4'>Description</td>
                        <td class='col-md-2'>Amount</td>
                        <td class='col-md-2'>Tax</td>
                        <td class='col-md-2'>Total Amount</td>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>03/20/2015</td>
                          <td>Sample description can go here.</td>
                          <td>$88.74</td>
                          <td>$0.25</td>
                          <td>$88.99</td>
                        </tr>
                    </tbody>
                  </table>

                </div>
                <div role="tabpanel" class="tab-pane" id="arrangements">
                  <table class="table margin-top-15">
                    <thead class='bold'>
                      <tr>
                        <td class='col-md-2'>Date</td>
                        <td class='col-md-2'>Due Date</td>
                        <td class='col-md-4'>Status</td>
                        <td class='col-md-2'>Amount</td>
                        <td class='col-md-2'>Status Date</td>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>03/20/2015</td>
                        <td>03/20/2015</td>
                        <td>Pending</td>
                        <td>$88.74</td>
                        <td>03/20/2015</td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
              
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
        $('#myTab a').click(function (e) {
          e.preventDefault()
          $(this).tab('show')
        })
    </script>
  </body>
</html>