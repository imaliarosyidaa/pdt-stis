<x-app-layout>
  
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin PDT</title>
  <link rel="shortcut icon" type="image/png" href="../assets/img/logo pdt.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="../assets/css/profile.css" />
</head>

<body>

  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <div class="profile-nav col-md-3" >
                      <div class="panel"  >
                        <div class="user-heading round" style="background-color: white;">
                          <a href="#" >
                            <img
                              src="https://bootdey.com/img/Content/avatar/avatar3.png"
                              alt
                            />
                          </a>
                          <h3 style="color: black;">Camila Smith</h3>
                        </div>
                      </div>
                    </div>
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
        <!-- Profile -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"/>
<div class="container-fluid" class="container bootstrap snippets bootdey" >
  <div class="row" >
    <div class="profile-nav col-md-3" >
      <div class="panel" >
        <div class="user-heading round">
          <a href="#" >
            <img
              src="https://bootdey.com/img/Content/avatar/avatar3.png"
              alt
            />
          </a>
          <h1>Camila Smith</h1>
          <p>
            <a
              href="/cdn-cgi/l/email-protection"
              class="__cf_email__"
              data-cfemail="1e7a7b677a7b675e6a767b5b737f7772307d7173"
              >ima******@gmail.com</a
            >
          </p>
        </div>
        <ul class="nav nav-pills nav-stacked">
          <li class="active">
            <a href="#"> <i class="fa fa-user"></i> Profile</a>
          </li>
          <li>
            <a href="editProfile.html"> <i class="fa fa-edit"></i> Edit profile</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="profile-info col-md-9">
      <div class="panel">
        <div class="bio-graph-heading">
          Tuntutlah Ilmu Hingga ke Negeri Cina
        </div>
        <div class="panel-body bio-graph-info">
          <h1>Bio Graph</h1>
          <div class="row">
            <div class="bio-row">
              <p><span>Nama Lengkap </span>: Camila</p>
            </div>
            <!-- <div class="bio-row">
              <p><span>Last Name </span>: Smith</p>
            </div> -->
            <div class="bio-row">
              <p><span>Domisili </span>: Australia</p>
            </div>
            <div class="bio-row">
              <p><span>Tanggal Lahir</span>: 13 July 1983</p>
            </div>
            <div class="bio-row">
              <p><span>Pekerjaan </span>: UI Designer</p>
            </div>
            <div class="bio-row">
              <p>
                <span>Email </span>:
                <a
                  href="/cdn-cgi/l/email-protection"
                  class="__cf_email__"
                  data-cfemail="f09a839d998498b0969c91849c9192de939f9d"
                  >ima*******@gmail.com</a
                >
              </p>
            </div>
            <div class="bio-row">
              <p><span>Nomor Hp</span>: (12) 03 4567890</p>
            </div>
            <!-- <div class="bio-row">
              <p><span>Phone </span>: 88 (02) 123456</p>
            </div> -->
          </div>
        </div>
      </div>
      <div>
        <div class="row">
          <div class="col-md-6">
            <div class="panel">
              <div class="panel-body">
                <div class="bio-chart">
                  <div style="display: inline; width: 100px; height: 100px">
                    <canvas width="100" height="100px"></canvas
                    ><input
                      class="knob"
                      data-width="100"
                      data-height="100"
                      data-displayprevious="true"
                      data-thickness=".2"
                      value="5"
                      data-fgcolor="#e06b7d"
                      data-bgcolor="#e8e8e8"
                      style="
                        width: 54px;
                        height: 33px;
                        position: absolute;
                        vertical-align: middle;
                        margin-top: 33px;
                        margin-left: -77px;
                        border: 0px;
                        font-weight: bold;
                        font-style: normal;
                        font-variant: normal;
                        font-stretch: normal;
                        font-size: 20px;
                        line-height: normal;
                        font-family: Arial;
                        text-align: center;
                        color: rgb(224, 107, 125);
                        padding: 0px;
                        -webkit-appearance: none;
                        background: none;
                      "
                    />
                  </div>
                </div>
                <div class="bio-desk">
                  <h4 class="red">Volunteer Program PDT</h4>
                  <p>Started : 15 July</p>
                  <p>Deadline : 15 August</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="panel">
              <div class="panel-body">
                <div class="bio-chart">
                  <div style="display: inline; width: 100px; height: 100px">
                    <canvas width="80" height="100px"></canvas
                    ><input
                      class="knob"
                      data-width="100"
                      data-height="100"
                      data-displayprevious="true"
                      data-thickness=".2"
                      value="+500 RIBU"
                      data-fgcolor="#4CC5CD"
                      data-bgcolor="#e8e8e8"
                      style="
                        width: 100px;
                        height: 33px;
                        position: absolute;
                        vertical-align: middle;
                        margin-top: 33px;
                        margin-left: -77px;
                        border: 0px;
                        font-weight: bold;
                        font-style: normal;
                        font-variant: normal;
                        font-stretch: normal;
                        font-size: 20px;
                        line-height: normal;
                        font-family: Arial;
                        text-align: center;
                        color: rgb(76, 197, 205);
                        padding: 0px;
                        -webkit-appearance: none;
                        background: none;
                      "
                    />
                  </div>
                </div>
                <div class="grafik">
                  @include('keuangan.grap')
                </div>
                <div class="bio-desk">
                  <h4 class="terques">Donasi yang Disumbangkan</h4>
                  <p>Started : 15 July</p>
                  <p>Deadline : 15 August</p>
                </div>
              </div>
            </div>
          </div>
    </div>
  </div>
</div>
    </div>
  </div>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/sidebarmenu.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="../assets/js/dashboard.js"></script>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript"></script>
</body>

</html>
</x-app-layout>