@extends('layouts.admin')

@section('title', 'Course Edit')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/admin/courses-edit.css') }}">
@endsection

@section('content')
<div class="done-admin-courses-editing">

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
  <div class="sidebar-my-profile-section">
    <img class="icon5" src="{{ asset('images/admin/icons/icon4.svg') }}" />
    <div class="students">Students</div>
  </div>
  <div class="main-content">
    <div class="header-section">
      <div class="nav">
        <div class="link">
          <div class="text3">Courses</div>
        </div>
        <div class="margin2">
          <div class="container13">
            <div class="text3">›</div>
          </div>
        </div>
        <div class="container14">
          <div class="present-simple-tense">Present Simple Tense</div>
        </div>
      </div>
      <div class="heading-1">
        <div class="manage-course-lessons">Manage Course &amp; Lessons</div>
      </div>
      <div class="container14">
        <div class="update-course-information-and-manage-lesson-content">
          Update course information and manage lesson content.
        </div>
      </div>
    </div>
    <div class="summary-cards">
      <div class="background-border-shadow">
        <div class="container14">
          <div class="lessons">Lessons</div>
        </div>
        <div class="container14">
          <div class="_12">12</div>
        </div>
      </div>
      <div class="background-border-shadow">
        <div class="container14">
          <div class="students2">Students</div>
        </div>
        <div class="container14">
          <div class="_84">84</div>
        </div>
      </div>
      <div class="background-border-shadow">
        <div class="container14">
          <div class="avg-score">Avg Score</div>
        </div>
        <div class="container14">
          <div class="_91">91%</div>
        </div>
      </div>
      <div class="background-border-shadow">
        <div class="container14">
          <div class="completion">Completion</div>
        </div>
        <div class="container14">
          <div class="_65">65%</div>
        </div>
      </div>
    </div>
    <div class="container15">
      <div class="left-column">
        <div class="section-course-information-card">
          <div class="background-horizontal-border">
            <img class="container16" src="{{ asset('images/admin/icons/container25.svg') }}" />
            <div class="heading-2">
              <div class="text4">Course Information</div>
            </div>
          </div>
          <div class="container17">
            <div class="container18">
              <div class="label">
                <div class="course-title">Course Title</div>
              </div>
              <div class="input2">
                <div class="container19">
                  <div class="present-simple-tense2">Present Simple Tense</div>
                </div>
              </div>
            </div>
            <div class="container20">
              <div class="container21">
                <div class="label">
                  <div class="course-category">Course Category</div>
                </div>
                <div class="options">
                  <div class="image-clip">
                    <img class="image" src="{{ asset('images/admin/icons/image0.svg') }}" />
                  </div>
                  <div class="container13">
                    <div class="tenses">Tenses</div>
                  </div>
                </div>
              </div>
              <div class="container21">
                <div class="label">
                  <div class="course-level">Course Level</div>
                </div>
                <div class="options">
                  <div class="image-clip">
                    <img class="image2" src="{{ asset('images/admin/icons/image1.svg') }}" />
                  </div>
                  <div class="container13">
                    <div class="beginner">Beginner</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container22">
              <div class="label">
                <div class="course-description">Course Description</div>
              </div>
              <div class="textarea">
                <div class="container13">
                  <div class="very-cool">Very cool</div>
                </div>
              </div>
            </div>
            <div class="container20">
              <div class="container21">
                <div class="label">
                  <div class="lessons2">Lessons</div>
                </div>
                <div class="input3">
                  <div class="container23">
                    <div class="container13">
                      <div class="container24">
                        <div class="_122">12</div>
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
        </div>
        <div class="section-course-cover-card">
          <div class="background-horizontal-border">
            <img class="container25" src="{{ asset('images/admin/icons/container41.svg') }}" />
            <div class="heading-2">
              <div class="text4">Course Cover</div>
            </div>
          </div>
          <div class="container26">
            <div class="background-border">
              <img
                class="ab-6-a-xu-byqnzdu-vo-i-nlo-3-i-x-tu-lz-4-e-0-t-jx-2-qa-ifv-kfczb-uby-hd-08-lr-6-c-w-3-x-f-62-xook-8-j-o-494-nd-63-sw-5-qs-ye-bs-7-j-oan-60-d-6-x-m-2-b-iv-7-re-2-xwx-lkrn-mu-7-cz-be-lxr-pkf-wfp-xm-0-smr-0-p-uy-zn-s-ae-e-ut-pzk-dlj-gjq-b-lh-1-gn-ez-ip-i-xv-itrb-8-mv-bn-ka-29-l-ee-i-w-nzh-cpj-3-t-959-jo-v-4-jq-l-6-bs-jy-8-e-ro-wz-0-o-tg-cb-i-8-d-cj-fg-qx-15-v-w-aj-fxc-akk-fi-la-5-j-in-a-ujh-6-n-qht-qrp-4-xrl-k-ee-0-pi-fbc"
                src="{{ asset('images/admin/icons/ab-6-a-xu-byqnzdu-vo-i-nlo-3-i-x-tu-lz-4-e-0-t-jx-2-qa-ifv-kfczb-uby-hd-08-lr-6-c-w-3-x-f-62-xook-8-j-o-494-nd-63-sw-5-qs-ye-bs-7-j-oan-60-d-6-x-m-2-b-iv-7-re-2-xwx-lkrn-mu-7-cz-be-lxr-pkf-wfp-xm-0-smr-0-p-uy-zn-s-ae-e-ut-pzk-dlj-gjq-b-lh-1-gn-ez-ip-i-xv-itrb-8-mv-bn-ka-29-l-ee-i-w-nzh-cpj-3-t-959-jo-v-4-jq-l-6-bs-jy-8-e-ro-wz-0-o-tg-cb-i-8-d-cj-fg-qx-15-v-w-aj-fxc-akk-fi-la-5-j-in-a-ujh-6-n-qht-qrp-4-xrl-k-ee-0-pi-fbc0.png') }}"
              />
              <div class="overlay">
                <div class="container8">
                  <div class="text5">Current Cover</div>
                </div>
              </div>
            </div>
            <div class="container27">
              <div class="container28">
                <div class="button2">
                  <img class="container29" src="{{ asset('images/admin/icons/container46.svg') }}" />
                  <div class="text6">
                    Change
                    <br />
                    Image
                  </div>
                </div>
                <div class="button3">
                  <img class="container30" src="{{ asset('images/admin/icons/container47.svg') }}" />
                  <div class="remove-image">
                    Remove
                    <br />
                    Image
                  </div>
                </div>
              </div>
              <div class="container14">
                <div
                  class="recommended-1280-720-px-jpg-png-or-web-p-files-supported"
                >
                  Recommended: 1280×720px. JPG, PNG or
                  <br />
                  WebP files supported.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section-lessons-management-card">
          <div class="background-horizontal-border2">
            <div class="container31">
              <img class="container32" src="{{ asset('images/admin/icons/container50.svg') }}" />
              <div class="heading-2">
                <div class="text4">Lessons Management</div>
              </div>
            </div>
            <div class="button4">
              <img class="container33" src="{{ asset('images/admin/icons/container51.svg') }}" />
              <div class="text6">Add Lesson</div>
            </div>
          </div>
          <div class="frame-16">
            <div class="frame-14">
              <div class="lesson-title">LESSON TITLE</div>
              <div class="type">type</div>
              <div class="durantion">durantion</div>
              <div class="status">STATUS</div>
              <div class="action">ACTION</div>
            </div>
          </div>
          <div class="table">
            <div class="body">
              <div class="row">
                <div class="data">
                  <div class="introduction-to-present-simple">
                    Introduction to
                    <br />
                    Present Simple
                  </div>
                </div>
                <div class="data2">
                  <div class="reading">Reading</div>
                </div>
                <div class="data3">
                  <div class="text7">10 mins</div>
                </div>
                <div class="data4">
                  <div class="background">
                    <div class="text8">PUBLISHED</div>
                  </div>
                </div>
                <div class="data5">
                  <div class="button5">
                    <div class="text9">Edit</div>
                  </div>
                </div>
              </div>
              <div class="row2">
                <div class="data6">
                  <div class="present-simple-rules">
                    Present Simple
                    <br />
                    Rules
                  </div>
                </div>
                <div class="data7">
                  <div class="video">Video</div>
                </div>
                <div class="data8">
                  <div class="text7">15 mins</div>
                </div>
                <div class="data9">
                  <div class="background">
                    <div class="text8">PUBLISHED</div>
                  </div>
                </div>
                <div class="data10">
                  <div class="button5">
                    <div class="text9">Edit</div>
                  </div>
                </div>
              </div>
              <div class="row2">
                <div class="data6">
                  <div class="text10">
                    Practice
                    <br />
                    Exercise
                  </div>
                </div>
                <div class="data7">
                  <div class="text7">Exercise</div>
                </div>
                <div class="data8">
                  <div class="text7">20 mins</div>
                </div>
                <div class="data9">
                  <div class="background">
                    <div class="text8">PUBLISHED</div>
                  </div>
                </div>
                <div class="data10">
                  <div class="button5">
                    <div class="text9">Edit</div>
                  </div>
                </div>
              </div>
              <div class="row2">
                <div class="data">
                  <div class="present-simple-quiz">
                    Present Simple
                    <br />
                    Quiz
                  </div>
                </div>
                <div class="data11">
                  <div class="quiz">Quiz</div>
                </div>
                <div class="data12">
                  <div class="_10-mins">10 mins</div>
                </div>
                <div class="data13"></div>
                <div class="data14">
                  <div class="button5">
                    <div class="text9">Edit</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bottom-actions">
          <div class="button6">
            <img class="container34" src="{{ asset('images/admin/icons/container52.svg') }}" />
            <div class="text11">Delete Course</div>
          </div>
          <div class="container35">
            <div class="button7">
              <div class="text12">Cancel</div>
            </div>
            <div class="button8">
              <div class="button-shadow"></div>
              <div class="save-changes">Save Changes</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="background2">
    <div class="text8">PUBLISHED</div>
  </div>
    </div>
  </div>
</div>
@endsection