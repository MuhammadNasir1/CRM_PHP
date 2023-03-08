<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="./css/dashboard.css">
  <title>Gantt Chart</title>
<script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
  <script src="https://cdn.anychart.c om/releases/v8/js/anychart-exports.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-gantt.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-data-adapter.min.js"></script>
  <link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css" type="text/css" rel="stylesheet">
  <link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css" type="text/css" rel="stylesheet">
</head>

<body>
<?php
  include("../CRM2/side-bar.php")
    ?>
  <!-- ==========navbar-start======== -->
  <div class="main-con" style="height:100vh;">
    <nav class="navbar task-nav navbar-expand-lg bg-transparent">
      <div class="container-fluid">
        <a class=" ms-4 nav-heading navbar-brand" href="#">proyectos</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>

        <button class="share-btn me-3"><i class='bx bx-user pe-2 '></i>Flujos de trabajo</button>
        <button class="share-btn me-3"><i class='bx bx-user pe-2 '></i>compartirShare</button>
        <form class="d-flex" role="search">
          <label for="#"><a href="#"><i class="fa-solid fa-magnifying-glass"></i></a></label>
          <input class="form-control nav-search me-3 ps-5" class=" me-4" type="text" placeholder="Buscar"
            aria-label="Search">
          </form>
          <div class="dropdown dropstart float-end">
          <button class="me-3 others-task-btn" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown"
            aria-expanded="false">
            <img class="img" src="./images/plus-icon.svg" alt="plus-icons">
          </button>
          <ul class="dropdown-menu others-dropdown">
            <li>
              <a class="dropdown-item" href="#"><i class='bx bx-task'></i> tareas</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class='bx bx-checkbox'></i> proyectos</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class='bx bx-network-chart'></i> Flujos de trabajo</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class='bx bx-folder'></i> carpeta</a>
            </li>
            <li>
              <a class="dropdown-item" href="#"><i class='bx bxs-user-plus'></i> invitar</a>
            </li>
          </ul>
        </div>
        <a href="#"><img class="me-2 nav-img" src="./images/Rectangle 17.svg" alt=""></a>
      </div>
    </nav>
    <!-- ==========navbar-end======== -->
    <!-- ===============headings-start========== -->
    <div class="container-fluid">
      <div class="project-main">
        <div class="project-list">
          <ul>
            <a href="project.php" >
              <li><i class='bx bx-table pe-1'></i>Table</li>
            </a>
            <a href="project.php" class="active">
              <li><i class='bx bxs-bar-chart-alt-2 pe-1'></i>Gantt Chart</li>
            </a>
            <li>|</li>
            <a href="#">
              <li><i class='bx bx-table pe-1'></i>Fields</li>
            </a>
            <a href="#">
              <li><i class='bx bx-table pe-1'></i>Expand</li>
            </a>
          </ul>
        </div>
      </div>
    </div>
    <!-- ==============list-end======== -->
    <!-- ================= -->
    <!-- ============Gantt chart start ======= -->
    <div class="pe-3 ps-3" id = "container" style="height:82vh" ></div>
  </div>

<script>

anychart.onDocumentReady(function () {
  // The data used in this sample can be obtained from the CDN
  // https://cdn.anychart.com/samples/gantt-charts/activity-oriented-chart/data.js
  anychart.data.loadJsonFile(
    'https://cdn.anychart.com/samples/gantt-charts/activity-oriented-chart/data.json',
    function (data) {
      // create data tree
      var treeData = anychart.data.tree(data, 'as-table');

      // create project gantt chart
      var chart = anychart.ganttProject();
      // set data for the chart
      chart.data(treeData);
      // set start splitter position settings
      chart.splitterPosition(370);

      // get chart data grid link to set column settings
      var dataGrid = chart.dataGrid();

      // set first column settings
      dataGrid
        .column(0)
        .title('#')
        .width(30)
        .labels({ hAlign: 'center' });

      // set second column settings
      dataGrid.column(1).labels().hAlign('left').width(180);

      // set third column settings
      dataGrid
        .column(2)
        .title('Start Time')
        .width(70)
        .labels()
        .hAlign('right')
        .format(function () {
          var date = new Date(this.actualStart);
          var month = date.getUTCMonth() + 1;
          var strMonth = month > 9 ? month : '0' + month;
          var utcDate = date.getUTCDate();
          var strDate = utcDate > 9 ? utcDate : '0' + utcDate;
          return date.getUTCFullYear() + '.' + strMonth + '.' + strDate;
        });

      // set fourth column settings
      dataGrid
        .column(3)
        .title('End Time')
        .width(80)
        .labels()
        .hAlign('right')
        .format(function () {
          var date = new Date(this.actualEnd);
          var month = date.getUTCMonth() + 1;
          var strMonth = month > 9 ? month : '0' + month;
          var utcDate = date.getUTCDate();
          var strDate = utcDate > 9 ? utcDate : '0' + utcDate;
          return date.getUTCFullYear() + '.' + strMonth + '.' + strDate;
        });

      // set container id for the chart
      chart.container('container');

      // initiate chart drawing
      chart.draw();

      // zoom chart to specified date
      chart.zoomTo(951350400000, 954201600000);
    }
  );
});

</script>
  <!-- ============Gantt chart start ======= -->
  <!-- <div class="main-con"> -->
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <script src="./javascript/index.js"></script>
  <script src="https://kit.fontawesome.com/c416a2d46a.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>

