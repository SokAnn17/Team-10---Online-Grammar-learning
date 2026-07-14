@extends('layouts.admin')

@section('title', 'Quiz Home')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/admin/quiz.css') }}">
@endsection

@section('content')
<div class="done-admin-quizzes">

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
  <div class="main-content-canvas">
    <div class="left-side-dashboard-grid">
      <div class="header-actions">
        <div class="container8">
          <div class="heading-2">
            <div class="text3">Quiz Management</div>
          </div>
          <div class="container13">
            <div class="text4">
              Create, organize, and manage grammar quizzes.
            </div>
          </div>
        </div>
        <div class="button2">
          <div class="button-shadow"></div>
          <img class="container14" src="{{ asset('images/admin/icons/container15.svg') }}" />
          <div class="text5">Create Quiz</div>
        </div>
      </div>
      <div class="summary-metrics-bento">
        <div class="overlay-border-overlay-blur">
          <div class="container15">
            <div class="container8">
              <div class="text6">Total Quizzes</div>
            </div>
          </div>
          <div class="container13">
            <div class="_24">24</div>
          </div>
        </div>
        <div class="overlay-border-overlay-blur">
          <div class="container15">
            <div class="container8">
              <div class="text6">Published</div>
            </div>
          </div>
          <div class="container13">
            <div class="_18">18</div>
          </div>
        </div>
        <div class="overlay-border-overlay-blur">
          <div class="container15">
            <div class="container8">
              <div class="text6">Attempts</div>
            </div>
          </div>
          <div class="container13">
            <div class="_1-250">1,250</div>
          </div>
        </div>
      </div>
      <div class="filter-chips">
        <div class="button3">
          <div class="text5">All Quizzes</div>
        </div>
        <div class="button4">
          <div class="text7">Beginner</div>
        </div>
        <div class="button4">
          <div class="text7">Intermediate</div>
        </div>
        <div class="button4">
          <div class="text7">Advanced</div>
        </div>
      </div>
      <div class="quiz-grid">
        <div class="quiz-card-1">
          <div class="margin2">
            <div class="container16">
              <div class="container17">
                <div class="background">
                  <div class="text8">Beginner</div>
                </div>
              </div>
            </div>
          </div>
          <div class="heading-3-margin">
            <div class="heading-3">
              <div class="present-simple-tense-quiz">
                Present Simple Tense Quiz
              </div>
            </div>
          </div>
          <div class="margin3">
            <div class="container18">
              <div class="container19">
                <img class="container20" src="{{ asset('images/admin/icons/container29.svg') }}" />
                <div class="container8">
                  <div class="text9">10 Questions</div>
                </div>
              </div>
              <div class="container21">
                <img class="container22" src="{{ asset('images/admin/icons/container32.svg') }}" />
                <div class="container8">
                  <div class="text9">320 Attempts</div>
                </div>
              </div>
              <div class="container23">
                <img class="container24" src="{{ asset('images/admin/icons/container35.svg') }}" />
                <div class="container8">
                  <div class="text9">89% Avg Score</div>
                </div>
              </div>
            </div>
          </div>
          <div class="button5">
            <div class="text10">Manage Quiz</div>
            <img class="container25" src="{{ asset('images/admin/icons/container37.svg') }}" />
          </div>
        </div>
        <div class="quiz-card-2">
          <div class="margin2">
            <div class="container16">
              <div class="container17">
                <div class="background">
                  <div class="text8">Beginner</div>
                </div>
              </div>
            </div>
          </div>
          <div class="heading-3-margin">
            <div class="heading-3">
              <div class="past-simple-tense-quiz">Past Simple Tense Quiz</div>
            </div>
          </div>
          <div class="margin3">
            <div class="container18">
              <div class="container19">
                <img class="container26" src="{{ asset('images/admin/icons/container42.svg') }}" />
                <div class="container8">
                  <div class="text9">15 Questions</div>
                </div>
              </div>
              <div class="container21">
                <img class="container27" src="{{ asset('images/admin/icons/container45.svg') }}" />
                <div class="container8">
                  <div class="text9">210 Attempts</div>
                </div>
              </div>
              <div class="container23">
                <img class="container28" src="{{ asset('images/admin/icons/container48.svg') }}" />
                <div class="container8">
                  <div class="text9">76% Avg Score</div>
                </div>
              </div>
            </div>
          </div>
          <div class="button5">
            <div class="text10">Manage Quiz</div>
            <img class="container29" src="{{ asset('images/admin/icons/container50.svg') }}" />
          </div>
        </div>
        <div class="quiz-card-3">
          <div class="margin2">
            <div class="container16">
              <div class="container17">
                <div class="background2">
                  <div class="text11">Intermediate</div>
                </div>
              </div>
            </div>
          </div>
          <div class="heading-3-margin">
            <div class="heading-3">
              <div class="parts-of-speech-quiz">Parts of Speech Quiz</div>
            </div>
          </div>
          <div class="margin3">
            <div class="container18">
              <div class="container19">
                <img class="container30" src="{{ asset('images/admin/icons/container55.svg') }}" />
                <div class="container8">
                  <div class="text9">20 Questions</div>
                </div>
              </div>
              <div class="container21">
                <img class="container31" src="{{ asset('images/admin/icons/container58.svg') }}" />
                <div class="container8">
                  <div class="text9">185 Attempts</div>
                </div>
              </div>
              <div class="container23">
                <img class="container32" src="{{ asset('images/admin/icons/container61.svg') }}" />
                <div class="container8">
                  <div class="text9">82% Avg Score</div>
                </div>
              </div>
            </div>
          </div>
          <div class="button5">
            <div class="text10">Manage Quiz</div>
            <img class="container33" src="{{ asset('images/admin/icons/container63.svg') }}" />
          </div>
        </div>
        <div class="quiz-card-5">
          <div class="margin2">
            <div class="container34">
              <div class="container17">
                <div class="background3">
                  <div class="text12">Advanced</div>
                </div>
              </div>
            </div>
          </div>
          <div class="heading-3-margin">
            <div class="heading-3">
              <div class="modal-verbs-quiz">Modal Verbs Quiz</div>
            </div>
          </div>
          <div class="margin3">
            <div class="container18">
              <div class="container19">
                <img class="container35" src="{{ asset('images/admin/icons/container68.svg') }}" />
                <div class="container8">
                  <div class="text9">25 Questions</div>
                </div>
              </div>
              <div class="container21">
                <img class="container36" src="{{ asset('images/admin/icons/container71.svg') }}" />
                <div class="container8">
                  <div class="text9">92 Attempts</div>
                </div>
              </div>
              <div class="container23">
                <img class="container37" src="{{ asset('images/admin/icons/container74.svg') }}" />
                <div class="container8">
                  <div class="text9">64% Avg Score</div>
                </div>
              </div>
            </div>
          </div>
          <div class="button5">
            <div class="text10">Manage Quiz</div>
            <img class="container38" src="{{ asset('images/admin/icons/container76.svg') }}" />
          </div>
        </div>
        <div class="quiz-card-6">
          <div class="margin2">
            <div class="container16">
              <div class="container17">
                <div class="background2">
                  <div class="text11">Intermediate</div>
                </div>
              </div>
            </div>
          </div>
          <div class="heading-3-margin">
            <div class="heading-3">
              <div class="future-tense-quiz">Future Tense Quiz</div>
            </div>
          </div>
          <div class="margin3">
            <div class="container18">
              <div class="container19">
                <img class="container39" src="{{ asset('images/admin/icons/container81.svg') }}" />
                <div class="container8">
                  <div class="text9">18 Questions</div>
                </div>
              </div>
              <div class="container21">
                <img class="container40" src="{{ asset('images/admin/icons/container84.svg') }}" />
                <div class="container8">
                  <div class="text9">142 Attempts</div>
                </div>
              </div>
              <div class="container23">
                <img class="container41" src="{{ asset('images/admin/icons/container87.svg') }}" />
                <div class="container8">
                  <div class="text9">71% Avg Score</div>
                </div>
              </div>
            </div>
          </div>
          <div class="button5">
            <div class="text10">Manage Quiz</div>
            <img class="container42" src="{{ asset('images/admin/icons/container89.svg') }}" />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  </div>
@endsection