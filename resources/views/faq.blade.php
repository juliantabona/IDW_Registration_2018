@extends('layouts.app') 

@section('content')

  <div class="container">  
      <h1 class="faq_heading">Frequently Asked Questions</h1>
      <div id="accordion" style="margin-bottom: 100px;">
          <div class="card">
              <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          WHAT IS INTERNATIONAL DATA WEEK
                      </button>
                  </h5> 
              </div>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="card-body">
                      <p>International Data Week 2018 (IDW) will bring together data scientists, researchers, industry leaders, entrepreneurs, policy makers and data stewards to explore how best to exploit the data revolution to improve our knowledge and benefit society through data-driven research and innovation.</p> 
                      <p>IDW comprises SciDataCon <a href="http://www.scidatacon.org/">http://www.scidatacon.org/</a>, a conference for research and practice papers addressing all aspects of data in research, and the 12th Plenary Meeting of the Research Data Alliance&nbsp;<a href="https://rd-alliance.org/plenaries/rda-twelfth-plenary-meeting-part-international-data-week-2018-gaborone-botswana">https://rd-alliance.org/plenaries/rda-twelfth-plenary-meeting-part-international-data-week-2018-gaborone-botswana</a>.</p>
                  </div>
              </div>
          </div>
          <div class="card">
              <div class="card-header" id="headingTwo"> 
                  <i class="vc_tta-controls-icon vc_tta-controls-icon-plus"></i>
                  <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          WHAT IS THE THEME FOR INTERNATIONAL DATA WEEK
                  </button>
                  </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                      <p>The theme for IDW is <strong>"Digital Frontiers of Global Science"</strong></p>
                  </div>
              </div>
          </div>
          <div class="card">
              <div class="card-header" id="headingThree">
                  <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          WHAT IS THE SCHEDULE OF EVENTS
                      </button>
                  </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                  <div class="card-body">
                      <p>IDW will take place from 5-8 November 2018 and will include a combination of plenary sessions, poster presentations, panel discussions, SciDataCon sessions and RDA breakout sessions.</p>
                  </div>
              </div>
          </div> 
          <div class="card">
              <div class="card-header" id="headingTwo"> 
                  <i class="vc_tta-controls-icon vc_tta-controls-icon-plus"></i>
                  <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              WHAT IS THE BEST ONLINE SOURCE FOR INFORMATION ABOUT INTERNATIONAL DATA WEEK?
                      </button>
                  </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                      <p>The IDW website will provide the latest program information: http://www.internationaldataweek.org.</p>
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection