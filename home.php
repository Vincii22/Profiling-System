<?php 
include('connect.php'); // Include the database connection

// Query for each employment status
$statuses = [
    'fullTime' => 'Full-Time',
    'partTime' => 'Part-Time',
    'selfEmployed' => 'Self-Employed',
    'unemployed' => 'Unemployed',
    'retired' => 'Retired',
    'student' => 'Student',
    'freelancer' => 'Freelancer',
    'contractor' => 'Contractor',
    'temporary' => 'Temporary'
];

// Initialize variables
foreach ($statuses as $key => $status) {
    $query = $con->prepare("SELECT COUNT(*) FROM tbl_residents WHERE employment_status = ?");
    $query->execute([$status]);
    $$key = $query->fetchColumn();
}
?>

<?php include('header.php'); ?>
<link rel="stylesheet" type="text/css" href="css/style2.css">
<div class="dashboard-top">
    <div class="row clearfix">
        <!-- Existing Cards -->
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-pink hover-expand-effect">
                <div class="icon">
                    <i class="glyphicon glyphicon-user"></i>
                </div>
                <div class="content">
                    <?php
                    include('connect.php');
                    $permanent = $con->prepare("SELECT COUNT(*) FROM tbl_personnel WHERE per_designation = 'Permanent'");
                    $permanent->execute();
                    $fetch = $permanent->fetch();
                    $total = $fetch[0];
                    ?>
                    <div class="text">RESIDENTS</div>
                    <div class="number count-to"><?php echo $total; ?></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-cyan hover-expand-effect">
                <div class="icon">
                    <i class="glyphicon glyphicon-user"></i>
                </div>
                <div class="content">
                    <?php
                    $gass = $con->prepare("SELECT COUNT(*) FROM tbl_personnel WHERE per_designation = 'GASS'");
                    $gass->execute();
                    $fetch1 = $gass->fetch();
                    $total1 = $fetch1[0];
                    ?>
                    <div class="text">BHW</div>
                    <div class="number count-to"><?php echo $total1; ?></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-light-green hover-expand-effect">
                <div class="icon">
                    <i class="glyphicon glyphicon-user"></i>
                </div>
                <div class="content">
                    <?php
                    $parttime = $con->prepare("SELECT COUNT(*) FROM tbl_personnel WHERE per_designation = 'Part Time'");
                    $parttime->execute();
                    $fetch2 = $parttime->fetch();
                    $total2 = $fetch2[0];
                    ?>
                    <div class="text">BARANGAY OFFICIALS</div>
                    <div class="number count-to"><?php echo $total2; ?></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-orange hover-expand-effect">
                <div class="icon">
                    <i class="glyphicon glyphicon-user"></i>
                </div>
                <div class="content">
                    <?php
                    $jobOrder = $con->prepare("SELECT COUNT(*) FROM tbl_personnel WHERE per_designation = 'Job Order'");
                    $jobOrder->execute();
                    $fetch3 = $jobOrder->fetch();
                    $total3 = $fetch3[0];
                    ?>
                    <div class="text">PERSONNEL</div>
                    <div class="number count-to"><?php echo $total3; ?></div>
                </div>
            </div>
        </div>
    </div>
                    <!-- Pie Chart Card -->
                        <div class="container-fluid">
                            <div class="row d-flex" style="display:flex;justify-content:center;">
                                <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6">
                                    <div class="card">
                                        <div class="card-header" style="text-align:center;padding:10px;">
                                            <h4 class="card-title">Personnel Distribution</h4>
                                        </div>
                                        <div class="card-body"  style="padding:0px 70px 20px 70px;text-align:center;">
                                            <canvas id="pieChart" width="400" height="200"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
var ctx = document.getElementById('pieChart').getContext('2d');


    // Update your PHP code to fetch employment status counts
    var employmentData = {
        fullTime: <?php echo $fullTime; ?>,
        partTime: <?php echo $partTime; ?>,
        selfEmployed: <?php echo $selfEmployed; ?>,
        unemployed: <?php echo $unemployed; ?>,
        retired: <?php echo $retired; ?>,
        student: <?php echo $student; ?>,
        freelancer: <?php echo $freelancer; ?>,
        contractor: <?php echo $contractor; ?>,
        temporary: <?php echo $temporary; ?>
    };

    var pieChart = new Chart(ctx, {
        type: 'pie', // Pie chart type
        data: {
            labels: [
                'Full-Time',
                'Part-Time',
                'Self-Employed',
                'Unemployed',
                'Retired',
                'Student',
                'Freelancer',
                'Contractor',
                'Temporary'
            ],
            datasets: [{
                label: 'Number of Individuals',
                data: [
                    employmentData.fullTime,
                    employmentData.partTime,
                    employmentData.selfEmployed,
                    employmentData.unemployed,
                    employmentData.retired,
                    employmentData.student,
                    employmentData.freelancer,
                    employmentData.contractor,
                    employmentData.temporary
                ],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(199, 199, 199, 0.2)',
                    'rgba(83, 102, 255, 0.2)',
                    'rgba(122, 208, 165, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(199, 199, 199, 1)',
                    'rgba(83, 102, 255, 1)',
                    'rgba(122, 208, 165, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true
        }
    });
</script>
<script src="js/jquery.min.js"></script>
        <?php include('script.php'); ?> 
            </script>

</body>
</html>
