@extends('layouts.admin')

@section('title', 'Lesson Create')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/admin/lesson-create.css') }}">
@endsection

@section('content')
<div class="done-admin-lesson-create">

  @include('admin.partials.sidebar')
  <div class="page-content">
    <div class="breadcrumbs-page-header">
      <div class="nav">
        <div class="link">
          <div class="text">Courses</div>
        </div>
        <img class="container3" src="{{ asset('images/admin/icons/container2.svg') }}" />
        <div class="container4">
          <div class="text2">Create Course</div>
        </div>
        <img class="container5" src="{{ asset('images/admin/icons/container4.svg') }}" />
        <div class="container4">
          <div class="create-lesson">Create Lesson</div>
        </div>
      </div>
      <div class="heading-2">
        <div class="create-lessons">Create Lessons</div>
      </div>
      <div class="container6">
        <div class="add-lesson-to-course">Add lesson to course</div>
      </div>
    </div>
    <div class="section-lessons-section">
      <div class="container7">
        <div class="container8">
          <img class="container9" src="{{ asset('images/admin/icons/container9.svg') }}" />
          <div class="heading-3">
            <div class="text3">Lessons Section</div>
          </div>
        </div>
      </div>
      <div class="container10">
        <div class="lesson-2">
          <div class="container11">
            <div class="container12">
              <div class="label">
                <div class="lesson-title">Lesson Title</div>
              </div>
              <div class="input">
                <div class="container13">
                  <div class="enter-lesson-title">Enter Lesson Title</div>
                </div>
              </div>
            </div>
            <div class="container14"></div>
            <div class="container15">
              <div class="label">
                <div class="lesson-description">Lesson Description</div>
              </div>
              <div class="textarea">
                <div class="container16">
                  <div class="description">Description</div>
                </div>
              </div>
            </div>
            <div class="container17">
              <div class="label">
                <div class="lesson-content">Lesson Content</div>
              </div>
              <div class="textarea2">
                <div class="container16">
                  <div class="what-will-this-lesson-cover">
                    What will this lesson cover?
                  </div>
                </div>
              </div>
            </div>
            <div class="container18">
              <div class="label">
                <div class="duration-mins">Duration (mins)</div>
              </div>
              <div class="input2">
                <div class="container19">
                  <div class="text4">0</div>
                </div>
                <div class="container20">
                  <div class="container21"></div>
                  <div class="rectangle-align-stretch">
                    <div class="rectangle"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="button">
            <img class="container22" src="{{ asset('images/admin/icons/container23.svg') }}" />
          </div>
        </div>
        <div class="button2">
          <img class="container23" src="{{ asset('images/admin/icons/container24.svg') }}" />
          <div class="text5">Add Lesson</div>
        </div>
      </div>
    </div>
  </div>
  <div class="container24">
    <div class="input3">
      <div class="container13">
        <div class="search-resources">Search resources...</div>
      </div>
    </div>
    <div class="container25">
      <img class="container26" src="{{ asset('images/admin/icons/container28.svg') }}" />
    </div>
  </div>
  <div class="container27">
    <div class="margin">
      <div class="container4">
        <div class="container28">
          <div class="text6">Welcome, Admin</div>
        </div>
        <div class="container28">
          <div class="text7">Manage platform resources</div>
        </div>
      </div>
    </div>
    <div class="container29">
      <div class="button3">
        <img class="container30" src="{{ asset('images/admin/icons/container34.svg') }}" />
      </div>
      <div class="button3">
        <img class="container31" src="{{ asset('images/admin/icons/container35.svg') }}" />
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
@endsection