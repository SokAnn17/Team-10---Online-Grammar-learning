@extends('layouts.admin')

@section('title', 'Lesson Edit')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/admin/lesson-edit.css') }}">
@endsection

@section('content')
<div class="done-admin-lesson-editing">

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
        <img class="container13" src="{{ asset('images/admin/icons/container13.svg') }}" />
        <div class="container8">
          <div class="edit-lesson">Edit Lesson</div>
        </div>
        <img class="container14" src="{{ asset('images/admin/icons/container15.svg') }}" />
        <div class="container8">
          <div class="introduction-to-present-simple">
            Introduction to Present Simple
          </div>
        </div>
      </div>
      <div class="heading-1">
        <div class="manage-lessons">Manage Lessons</div>
      </div>
      <div class="container15">
        <div class="update-course-information-and-manage-lesson-content">
          Update course information and manage lesson content.
        </div>
      </div>
    </div>
    <div class="container16">
      <div class="left-column">
        <div class="section-course-information-card">
          <div class="background-horizontal-border">
            <img class="container17" src="{{ asset('images/admin/icons/container19.svg') }}" />
            <div class="heading-2">
              <div class="lesson-information">Lesson Information</div>
            </div>
          </div>
          <div class="container18">
            <div class="container19">
              <div class="label">
                <div class="lesson-title">Lesson Title</div>
              </div>
              <div class="input2">
                <div class="container20">
                  <div class="introduction-to-present-simple2">
                    Introduction to Present Simple
                  </div>
                </div>
              </div>
            </div>
            <div class="container21">
              <div class="label">
                <div class="lesson-description">Lesson Description</div>
              </div>
              <div class="textarea">
                <div class="container22">
                  <div class="this-is-so-cool">this is so cool</div>
                </div>
              </div>
            </div>
            <div class="container21">
              <div class="label">
                <div class="lesson-content">Lesson Content</div>
              </div>
              <div class="textarea">
                <div class="container22">
                  <div class="oooooooo">OOOOOOOO</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bottom-actions">
          <div class="button2">
            <img class="container23" src="{{ asset('images/admin/icons/container27.svg') }}" />
            <div class="delete-lesson">Delete Lesson</div>
          </div>
          <div class="container24">
            <div class="button3">
              <div class="text4">Cancel</div>
            </div>
            <div class="button4">
              <div class="button-shadow"></div>
              <div class="save-changes">Save Changes</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
@endsection