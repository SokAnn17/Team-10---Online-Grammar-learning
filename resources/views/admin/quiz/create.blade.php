@extends('layouts.admin')

@section('title', 'Quiz Create')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/admin/quiz-create.css') }}">
@endsection

@section('content')
<div class="done-admin-quizzes-create">

  @include('admin.partials.sidebar')
  <div class="main-canvas">
    <div class="breadcrumb-header">
      <div class="nav">
        <div class="container3">
          <div class="text">Quizzes</div>
        </div>
        <img class="container4" src="{{ asset('images/admin/icons/container3.svg') }}" />
        <div class="container3">
          <div class="text2">Create Quiz</div>
        </div>
      </div>
      <div class="heading-2">
        <div class="create-new-quiz">Create New Quiz</div>
      </div>
      <div class="container5">
        <div class="create-a-new-grammar-quiz-for-students">
          Create a new grammar quiz for students.
        </div>
      </div>
    </div>
    <div class="container6">
      <div class="left-column">
        <div class="section-quiz-information-card">
          <div class="section-quiz-information-card-shadow"></div>
          <div class="horizontal-border">
            <img class="container7" src="{{ asset('images/admin/icons/container7.svg') }}" />
            <div class="heading-3">
              <div class="text3">Quiz Information</div>
            </div>
          </div>
          <div class="container8">
            <div class="container9">
              <div class="label">
                <div class="quiz-title">Quiz Title</div>
              </div>
              <div class="input">
                <div class="container10">
                  <div class="e-g-advanced-passive-voice">
                    e.g. Advanced Passive Voice
                  </div>
                </div>
              </div>
            </div>
            <div class="container11">
              <div class="label">
                <div class="quiz-category">Quiz Category</div>
              </div>
              <div class="options">
                <div class="image-clip">
                  <img class="image" src="{{ asset('images/admin/icons/image0.svg') }}" />
                </div>
                <div class="container12">
                  <div class="tenses">Tenses</div>
                </div>
              </div>
            </div>
            <div class="container13">
              <div class="label">
                <div class="difficulty-level">Difficulty Level</div>
              </div>
              <div class="options">
                <div class="image-clip">
                  <img class="image2" src="{{ asset('images/admin/icons/image1.svg') }}" />
                </div>
                <div class="container12">
                  <div class="beginner">Beginner</div>
                </div>
              </div>
            </div>
            <div class="container14">
              <div class="label">
                <div class="quiz-description">Quiz Description</div>
              </div>
              <div class="textarea">
                <div class="container12">
                  <div class="briefly-describe-what-students-will-learn">
                    Briefly describe what students will learn...
                  </div>
                </div>
              </div>
            </div>
            <div class="container15">
              <div class="label">
                <div class="time-limit-minutes">Time Limit (Minutes)</div>
              </div>
              <div class="input2">
                <div class="container16">
                  <div class="container12">
                    <img class="container17" src="{{ asset('images/admin/icons/container20.svg') }}" />
                  </div>
                  <div class="rectangle-align-stretch">
                    <div class="rectangle"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container18">
              <div class="label">
                <div class="passing-score">Passing Score (%)</div>
              </div>
              <div class="input2">
                <div class="container16">
                  <div class="container12">
                    <div class="container19">
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
        <div class="section-question-summary-card">
          <div class="section-question-summary-card-shadow"></div>
          <div class="horizontal-border2">
            <div class="container20">
              <img class="container21" src="{{ asset('images/admin/icons/container26.svg') }}" />
              <div class="heading-3">
                <div class="text3">Question Summary</div>
              </div>
            </div>
            <div class="button">
              <img class="container22" src="{{ asset('images/admin/icons/container27.svg') }}" />
              <div class="text4">Add Questions</div>
            </div>
          </div>
          <div class="container23">
            <div class="background">
              <div class="container24">
                <div class="text5">QUESTIONS ADDED</div>
              </div>
              <div class="container24">
                <div class="text6">0</div>
              </div>
            </div>
            <div class="background">
              <div class="container24">
                <div class="duration">Duration</div>
              </div>
              <div class="paragraph">
                <div class="text7">0</div>
                <div class="text8">Min</div>
              </div>
            </div>
            <div class="background">
              <div class="container24">
                <div class="text5">TOTAL POINTS</div>
              </div>
              <div class="container24">
                <div class="text6">0</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="final-actions">
      <div class="button2">
        <div class="text9">Cancel</div>
      </div>
      <div class="button3">
        <div class="text10">Create Quiz</div>
      </div>
    </div>
  </div>
  <div class="container25">
    <div class="input3">
      <div class="container10">
        <div class="search-bar-placeholder-text">Search resources...</div>
      </div>
    </div>
    <div class="container26">
      <img class="container27" src="{{ asset('images/admin/icons/container37.svg') }}" />
    </div>
  </div>
  <div class="container28">
    <div class="margin">
      <div class="container3">
        <div class="container29">
          <div class="text11">Welcome, Admin</div>
        </div>
        <div class="container29">
          <div class="text12">Manage platform resources</div>
        </div>
      </div>
    </div>
    <div class="container30">
      <div class="button4">
        <img class="container31" src="{{ asset('images/admin/icons/container43.svg') }}" />
      </div>
      <div class="button4">
        <img class="container32" src="{{ asset('images/admin/icons/container44.svg') }}" />
      </div>
    </div>
    <div class="border">
      <img
        class="ab-6-a-xu-b-4-zn-k-kxl-w-l-oc-thll-pt-ja-24-spz-a-7-bx-h-i-rn-7-nid-yl-6-u-fp-8-ofmcs-wy-ij-fnt-ez-3-y-3-b-z-1-ujj-1-xk-yn-nd-nd-67-f-jl-whlc-fzlnpno-o-606-zm-43-jnnoy-9-oi-br-l-kx-ago-km-n-10-g-3-x-zfj-rv-us-c-ced-w-1-dlwy-e-xdrtt-jk-8-p-bevt-cvmv-fm-al-8-p-t-5-jp-fqzzb-1-k-5-lqx-75-k-iwl-gm-ut-i-ek-7-w-gupfv-h-6-n-rxm-rg-xyny-gn-yyeu-uq-ng-jwm-82-hi-aimt-9-d-jx-mc-g-4-ac-3-i-wdstfp-le-mjb-ipfse-33"
        src="{{ asset('images/admin/icons/ab-6-a-xu-b-4-zn-k-kxl-w-l-oc-thll-pt-ja-24-spz-a-7-bx-h-i-rn-7-nid-yl-6-u-fp-8-ofmcs-wy-ij-fnt-ez-3-y-3-b-z-1-ujj-1-xk-yn-nd-nd-67-f-jl-whlc-fzlnpno-o-606-zm-43-jnnoy-9-oi-br-l-kx-ago-km-n-10-g-3-x-zfj-rv-us-c-ced-w-1-dlwy-e-xdrtt-jk-8-p-bevt-cvmv-fm-al-8-p-t-5-jp-fqzzb-1-k-5-lqx-75-k-iwl-gm-ut-i-ek-7-w-gupfv-h-6-n-rxm-rg-xyny-gn-yyeu-uq-ng-jwm-82-hi-aimt-9-d-jx-mc-g-4-ac-3-i-wdstfp-le-mjb-ipfse-330.png') }}"
      />
    </div>
  </div>
</div>

  </div>
@endsection