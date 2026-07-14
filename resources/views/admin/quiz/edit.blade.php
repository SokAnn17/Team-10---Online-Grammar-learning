@extends('layouts.admin')

@section('title', 'Quiz Edit')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/admin/quiz-edit.css') }}">
@endsection

@section('content')
<div class="done-admin-quizzes-editing">

  @include('admin.partials.sidebar')
  <div class="container3">
    <div class="input">
      <div class="container4">
        <div class="search-bar-placeholder-text">Search resources...</div>
      </div>
    </div>
    <div class="container5">
      <img class="container6" src="{{ asset('images/admin/icons/container5.svg') }}" />
    </div>
  </div>
  <div class="container7">
    <div class="margin">
      <div class="container8">
        <div class="container9">
          <div class="text">Welcome, Admin</div>
        </div>
        <div class="container9">
          <div class="text2">Manage platform resources</div>
        </div>
      </div>
    </div>
    <div class="container10">
      <div class="button">
        <img class="container11" src="{{ asset('images/admin/icons/container11.svg') }}" />
      </div>
      <div class="button">
        <img class="container12" src="{{ asset('images/admin/icons/container12.svg') }}" />
      </div>
    </div>
    <div class="border">
      <img
        class="ab-6-a-xu-b-4-zn-k-kxl-w-l-oc-thll-pt-ja-24-spz-a-7-bx-h-i-rn-7-nid-yl-6-u-fp-8-ofmcs-wy-ij-fnt-ez-3-y-3-b-z-1-ujj-1-xk-yn-nd-nd-67-f-jl-whlc-fzlnpno-o-606-zm-43-jnnoy-9-oi-br-l-kx-ago-km-n-10-g-3-x-zfj-rv-us-c-ced-w-1-dlwy-e-xdrtt-jk-8-p-bevt-cvmv-fm-al-8-p-t-5-jp-fqzzb-1-k-5-lqx-75-k-iwl-gm-ut-i-ek-7-w-gupfv-h-6-n-rxm-rg-xyny-gn-yyeu-uq-ng-jwm-82-hi-aimt-9-d-jx-mc-g-4-ac-3-i-wdstfp-le-mjb-ipfse-33"
        src="{{ asset('images/admin/icons/ab-6-a-xu-b-4-zn-k-kxl-w-l-oc-thll-pt-ja-24-spz-a-7-bx-h-i-rn-7-nid-yl-6-u-fp-8-ofmcs-wy-ij-fnt-ez-3-y-3-b-z-1-ujj-1-xk-yn-nd-nd-67-f-jl-whlc-fzlnpno-o-606-zm-43-jnnoy-9-oi-br-l-kx-ago-km-n-10-g-3-x-zfj-rv-us-c-ced-w-1-dlwy-e-xdrtt-jk-8-p-bevt-cvmv-fm-al-8-p-t-5-jp-fqzzb-1-k-5-lqx-75-k-iwl-gm-ut-i-ek-7-w-gupfv-h-6-n-rxm-rg-xyny-gn-yyeu-uq-ng-jwm-82-hi-aimt-9-d-jx-mc-g-4-ac-3-i-wdstfp-le-mjb-ipfse-330.png') }}"
      />
    </div>
  </div>
  <div class="page-canvas">
    <div class="nav-breadcrumbs">
      <div class="link">
        <div class="quizzes">Quizzes</div>
      </div>
      <img class="container13" src="{{ asset('images/admin/icons/container13.svg') }}" />
      <div class="container8">
        <div class="present-simple-tense-quiz">Present Simple Tense Quiz</div>
      </div>
    </div>
    <div class="page-header">
      <div class="heading-2">
        <div class="manage-quiz">Manage Quiz</div>
      </div>
      <div class="container14">
        <div class="update-quiz-information-questions-and-quiz-settings">
          Update quiz information, questions, and quiz settings.
        </div>
      </div>
    </div>
    <div class="summary-metrics-bento-grid">
      <div class="background-border">
        <div class="container8">
          <div class="container14">
            <div class="questions">Questions</div>
          </div>
          <div class="container14">
            <div class="text3">10</div>
          </div>
        </div>
      </div>
      <div class="background-border">
        <div class="container8">
          <div class="container14">
            <div class="text4">Attempts</div>
          </div>
          <div class="container14">
            <div class="text3">320</div>
          </div>
        </div>
      </div>
      <div class="background-border">
        <div class="container8">
          <div class="container14">
            <div class="text4">Avg Score</div>
          </div>
          <div class="container14">
            <div class="text3">89%</div>
          </div>
        </div>
      </div>
      <div class="background-border">
        <div class="container8">
          <div class="container14">
            <div class="text4">Pass Rate</div>
          </div>
          <div class="container14">
            <div class="text3">82%</div>
          </div>
        </div>
      </div>
    </div>
    <div class="main-grid-layout">
      <div class="left-column-primary-controls">
        <div class="section-quiz-information-card">
          <div class="horizontal-border">
            <div class="heading-3">
              <div class="text3">Quiz Information</div>
            </div>
            <div class="overlay">
              <div class="text5">General Details</div>
            </div>
          </div>
          <div class="container15">
            <div class="container16">
              <div class="container17">
                <div class="label-title">Title</div>
                <div class="input2">
                  <div class="container18">
                    <div class="present-simple-tense-quiz2">
                      Present Simple Tense Quiz
                    </div>
                  </div>
                </div>
              </div>
              <div class="container19">
                <div class="label-category">Category</div>
                <div class="options">
                  <div class="image-clip">
                    <img class="image" src="{{ asset('images/admin/icons/image0.svg') }}" />
                  </div>
                  <div class="container20">
                    <div class="tenses">Tenses</div>
                  </div>
                </div>
              </div>
              <div class="container21">
                <div class="label-level">Level</div>
                <div class="options">
                  <div class="image-clip">
                    <img class="image2" src="{{ asset('images/admin/icons/image1.svg') }}" />
                  </div>
                  <div class="container20">
                    <div class="beginner">Beginner</div>
                  </div>
                </div>
              </div>
              <div class="container22">
                <div class="container23">
                  <div class="label-time-limit-m">Time Limit (m)</div>
                  <div class="input2">
                    <div class="container24">
                      <div class="container20">
                        <img class="container25" src="{{ asset('images/admin/icons/container40.svg') }}" />
                      </div>
                      <div class="rectangle-align-stretch">
                        <div class="rectangle"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="container23">
                  <div class="label-passing-score">Passing Score (%)</div>
                  <div class="input2">
                    <div class="container24">
                      <div class="container20">
                        <div class="container26">
                          <div class="_70">70</div>
                        </div>
                      </div>
                      <div class="rectangle-align-stretch">
                        <div class="rectangle"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container27">
              <div class="label-description">Description</div>
              <div class="textarea">
                <div class="container20">
                  <div class="this-is-description">
                    this is description .
                    <br />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section-question-management-card">
          <div class="horizontal-border">
            <div class="heading-3">
              <div class="text3">Question Management</div>
            </div>
            <div class="button2">
              <div class="text6">+ Add New Question</div>
            </div>
          </div>
          <div class="container26">
            <div class="table">
              <div class="header">
                <div class="row">
                  <div class="cell">
                    <div class="text7">QUESTION TEXT</div>
                  </div>
                  <div class="cell">
                    <div class="text7">TYPE</div>
                  </div>
                  <div class="cell">
                    <div class="text7">POINTS</div>
                  </div>
                  <div class="cell">
                    <div class="text7">STATUS</div>
                  </div>
                  <div class="cell2">
                    <div class="text8">ACTIONS</div>
                  </div>
                </div>
              </div>
              <div class="body">
                <div class="row">
                  <div class="data">
                    <div class="text9">She ______ to school every day.</div>
                  </div>
                  <div class="data2">
                    <div class="text10">
                      Multiple
                      <br />
                      Choice
                    </div>
                  </div>
                  <div class="data3">
                    <div class="text11">10</div>
                  </div>
                  <div class="data4">
                    <div class="background">
                      <div class="text12">PUBLISHED</div>
                    </div>
                  </div>
                  <div class="data5">
                    <div class="button3">
                      <div class="text13">Edit</div>
                    </div>
                  </div>
                </div>
                <div class="row2">
                  <div class="data6">
                    <div class="text9">I ______ (like) ice cream.</div>
                  </div>
                  <div class="data2">
                    <div class="text10">
                      Fill in
                      <br />
                      the
                      <br />
                      Blank
                    </div>
                  </div>
                  <div class="data7">
                    <div class="text11">10</div>
                  </div>
                  <div class="data8">
                    <div class="background">
                      <div class="text12">PUBLISHED</div>
                    </div>
                  </div>
                  <div class="data9">
                    <div class="button3">
                      <div class="text13">Edit</div>
                    </div>
                  </div>
                </div>
                <div class="row2">
                  <div class="data10">
                    <div class="text9">The sun ______ in the east.</div>
                  </div>
                  <div class="data11">
                    <div class="text10">
                      Multiple
                      <br />
                      Choice
                    </div>
                  </div>
                  <div class="data12">
                    <div class="text11">10</div>
                  </div>
                  <div class="data13">
                    <div class="background">
                      <div class="text12">PUBLISHED</div>
                    </div>
                  </div>
                  <div class="data14">
                    <div class="button3">
                      <div class="text13">Edit</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom-sticky-footer-actions-margin">
      <div class="bottom-sticky-footer-actions">
        <div class="button4">
          <img class="container28" src="{{ asset('images/admin/icons/container48.svg') }}" />
          <div class="text14">Delete Quiz</div>
        </div>
        <div class="container29">
          <div class="button5">
            <div class="text15">Cancel</div>
          </div>
          <div class="button6">
            <div class="button-shadow"></div>
            <div class="text16">Save Changes</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  </div>
@endsection