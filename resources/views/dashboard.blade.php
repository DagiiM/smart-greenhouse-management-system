<x-app-layout>

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
      <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
              class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Content Row -->
  <div class="row">

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              Temperature (Hourly)</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">{{$temperature->value}} Deg</div>
                      </div>
                      <div class="col-auto">
      <svg version="1.1" height="30px" width="30px" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<path style="fill:#FFD248;" d="M360.49,52.245c20.163,0,36.571,16.408,36.571,36.571s-16.408,36.571-36.571,36.571
	s-36.571-16.408-36.571-36.571S340.326,52.245,360.49,52.245z"/>
<path style="fill:#F1F2F2;" d="M261.224,270.836c42.948,18.286,73.143,60.919,73.143,110.551
	c0,66.347-53.816,120.163-120.163,120.163c-66.352,0-120.163-53.816-120.163-120.163c0-49.633,30.199-92.266,73.143-110.551V41.796
	c0-17.347,14-31.347,31.347-31.347h31.347c17.347,0,31.347,14,31.347,31.347V270.836z"/>
<path style="fill:#F4661E;" d="M235.102,300.53V67.918h-41.796V300.53c-36.035,9.296-62.694,41.918-62.694,80.857
	c0,46.164,37.423,83.592,83.592,83.592s83.592-37.428,83.592-83.592C297.796,342.449,271.137,309.827,235.102,300.53z"/>
<g>
	<path style="fill:#231F20;" d="M271.673,264.129V41.796C271.673,18.75,252.924,0,229.878,0h-31.347
		c-23.046,0-41.796,18.75-41.796,41.796v222.333c-44.66,21.873-73.143,67.161-73.143,117.258
		c0,72.02,58.593,130.612,130.612,130.612s130.612-58.593,130.612-130.612C344.816,331.288,316.333,285.999,271.673,264.129z
		 M214.204,491.102c-60.496,0-109.714-49.218-109.714-109.714c0-44.04,26.215-83.661,66.787-100.937
		c3.855-1.642,6.356-5.425,6.356-9.614V41.796c0-11.523,9.375-20.898,20.898-20.898h31.347c11.523,0,20.898,9.375,20.898,20.898
		v229.041c0,4.189,2.501,7.974,6.356,9.614c40.571,17.274,66.787,56.894,66.787,100.937
		C323.918,441.884,274.701,491.102,214.204,491.102z"/>
	<polygon style="fill:#231F20;" points="193.306,57.469 193.306,245.551 229.878,245.551 229.878,224.653 214.204,224.653
		214.204,203.755 229.878,203.755 229.878,182.857 214.204,182.857 214.204,161.959 229.878,161.959 229.878,141.061
		214.204,141.061 214.204,120.163 229.878,120.163 229.878,99.265 214.204,99.265 214.204,78.367 229.878,78.367 229.878,57.469
		"/>
	<path style="fill:#231F20;" d="M135.837,381.388h20.898c0-31.689,25.781-57.469,57.469-57.469V303.02
		C170.992,303.02,135.837,338.176,135.837,381.388z"/>
	<rect x="135.837" y="397.061" style="fill:#231F20;" width="20.898" height="20.898"/>
	<path style="fill:#231F20;" d="M428.408,99.265V78.367h-22.083c-1.194-5.239-3.262-10.146-6.048-14.562l14.621-14.621
		l-14.778-14.778l-14.621,14.621c-4.416-2.786-9.323-4.855-14.562-6.048V20.898H350.04v22.083
		c-5.239,1.194-10.146,3.262-14.562,6.048l-14.621-14.621l-14.778,14.778L320.7,63.807c-2.785,4.416-4.854,9.323-6.048,14.562
		h-22.081v20.898h22.083c1.194,5.239,3.262,10.146,6.048,14.562l-14.621,14.621l14.778,14.778l14.621-14.621
		c4.416,2.786,9.323,4.855,14.562,6.048v22.081h20.898v-22.083c5.239-1.194,10.146-3.262,14.562-6.048l14.621,14.621l14.778-14.778
		l-14.621-14.621c2.785-4.416,4.854-9.323,6.048-14.562h22.081V99.265z M360.49,114.939c-14.404,0-26.122-11.719-26.122-26.122
		s11.719-26.122,26.122-26.122s26.122,11.719,26.122,26.122S374.894,114.939,360.49,114.939z"/>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                              Humidity (Hourly)</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{$humidity->value}}%
                            </div>
                      </div>
                      <div class="col-auto">
                        <svg version="1.1" id="Layer_1" height="30px" width="30px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<path style="fill:#E21B1B;" d="M314.784,275.993C272.272,188.337,256,160.521,256,160.521s-16.272,27.816-58.784,115.472
c-22.488,46.4-48.8,86.608-48.8,136.992C148.4,501.697,256,498.041,256,498.041s107.6,3.672,107.6-85.032
C363.6,362.601,337.28,322.361,314.784,275.993z"/>
<path d="M478.68,92.761c-29.024-59.84-40.128-78.824-40.128-78.824S427.44,32.929,398.4,92.761
c-15.352,31.656-33.32,59.12-33.32,93.52c0,60.552,73.448,58.048,73.448,58.048S512,246.841,512,186.281
C512,151.881,494.032,124.441,478.68,92.761z"/>
<path style="fill:#999999;" d="M113.6,92.761C84.56,32.929,73.448,13.937,73.448,13.937S62.344,32.929,33.32,92.761
C17.968,124.441,0,151.881,0,186.281c0,60.552,73.448,58.048,73.448,58.048s73.448,2.512,73.448-58.048
C146.904,151.881,128.936,124.441,113.6,92.761z"/>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
</div>
</div>
</div>
</div>
</div>



      <!-- ph level -->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-warning shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                              PH Level</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">
                            {{$ph->value}}
                          </div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-comments fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-warning shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                              Light Level</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">6.0</div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-comments fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-warning shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                              Soil Moisture</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">{{$moisture->value}}%</div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-comments fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-warning shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                              System Health</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">90%</div>
                      </div>
                      <div class="col-auto">
                        <svg version="1.1" id="Layer_1" height="30px" width="30px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
 viewBox="0 0 359.928 359.928" style="enable-background:new 0 0 359.928 359.928;" xml:space="preserve">
<g id="XMLID_104_">
<path id="XMLID_105_" d="M115.604,293.4c5.95,5.224,12.091,10.614,18.41,16.202c0.043,0.039,0.087,0.077,0.131,0.115l21.018,18.155
  c2.816,2.433,6.311,3.648,9.806,3.648s6.99-1.217,9.807-3.649l18.769-16.216c17.276,12.491,38.483,19.865,61.384,19.865
  c57.897,0,105-47.103,105-105c0-29.95-12.607-57.009-32.789-76.155c1.842-8.121,2.789-16.328,2.789-24.509
  c0-54.646-42.805-97.451-97.449-97.451c-24.561,0-48.827,9.249-67.512,25.279c-18.688-16.032-42.955-25.279-67.516-25.279
  C42.806,28.406,0,71.212,0,125.857C0,191.912,45.99,232.286,115.604,293.4z M254.928,151.521c41.355,0,75,33.646,75,75
  s-33.645,75-75,75c-41.355,0-75-33.646-75-75S213.572,151.521,254.928,151.521z"/>
<path id="XMLID_108_" d="M231.321,260.128c2.929,2.93,6.768,4.394,10.606,4.394c3.839,0,7.678-1.464,10.606-4.394l45-45
  c5.858-5.858,5.858-15.355,0-21.213c-5.857-5.858-15.355-5.858-21.213,0l-34.393,34.393l-9.394-9.393
  c-5.857-5.858-15.355-5.858-21.213,0c-5.858,5.857-5.858,15.355,0,21.213L231.321,260.128z"/>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
                      </div>
                  </div>
              </div>
          </div>
      </div>

  </div>

  <!-- Content Row -->

  <div class="row">

      <!-- Area Chart -->
      <div class="col-xl-8 col-lg-7">
          <div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
              <div
                  class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Device Provision</h6>
                  <div class="dropdown no-arrow">
                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                          aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                      </div>
                  </div>
              </div>
              <div
                  class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Device Troubleshooting</h6>
                  <div class="dropdown no-arrow">
                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                          aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                      </div>
                  </div>
              </div>
              <div
                  class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Advanced Data Analysis</h6>
                  <div class="dropdown no-arrow">
                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                          aria-labelledby="dropdownMenuLink">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                      </div>
                  </div>
              </div>
              <!-- Card Body -->

          </div>
      </div>

  </div>





</x-app-layout>
