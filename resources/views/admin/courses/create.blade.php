@extends('layouts.admin')

@section('title', 'Course Create')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/admin/courses-create.css') }}">
@endsection

@section('content')
<div class="done-admin-courses-create">

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
      </div>
      <div class="heading-2">
        <div class="create-course-lessons">Create Course &amp; Lessons</div>
      </div>
      <div class="container5">
        <div class="add-a-new-structured-grammar-curriculum-for-your-students">
          Add a new structured grammar curriculum for your students.
        </div>
      </div>
    </div>
    <div class="container6">
      <div class="left-column-forms">
        <div class="section-course-information">
          <div class="container7">
            <img class="container8" src="{{ asset('images/admin/icons/container7.svg') }}" />
            <div class="heading-3">
              <div class="text3">Course Information</div>
            </div>
          </div>
          <div class="container9">
            <div class="container10">
              <div class="label">
                <div class="course-title">Course Title</div>
              </div>
              <div class="input">
                <div class="container11">
                  <div class="e-g-advanced-passive-voice">
                    e.g. Advanced Passive Voice
                  </div>
                </div>
              </div>
            </div>
            <div class="container12">
              <div class="container13">
                <div class="label">
                  <div class="course-category">Course Category</div>
                </div>
                <div class="options">
                  <div class="image-clip">
                    <img class="image" src="{{ asset('images/admin/icons/image0.svg') }}" />
                  </div>
                  <div class="container14">
                    <div class="tenses">Tenses</div>
                  </div>
                </div>
              </div>
              <div class="container13">
                <div class="label">
                  <div class="course-level">Course Level</div>
                </div>
                <div class="options">
                  <div class="image-clip">
                    <img class="image2" src="{{ asset('images/admin/icons/image1.svg') }}" />
                  </div>
                  <div class="container14">
                    <div class="beginner">Beginner</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container15">
              <div class="label">
                <div class="course-description">Course Description</div>
              </div>
              <div class="textarea">
                <div class="container14">
                  <div
                    class="briefly-describe-what-students-will-learn-in-this-course"
                  >
                    Briefly describe what students will learn in this course...
                  </div>
                </div>
              </div>
            </div>
            <div class="container16">
              <div class="container10">
                <div class="label">
                  <div class="lessons">Lessons</div>
                </div>
                <div class="input2">
                  <div class="container17">
                    <div class="text4">10</div>
                  </div>
                  <div class="container18">
                    <div class="container19"></div>
                    <div class="rectangle-align-stretch">
                      <div class="rectangle"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section-course-cover">
          <div class="container7">
            <img class="container20" src="{{ asset('images/admin/icons/container24.svg') }}" />
            <div class="heading-3">
              <div class="text3">Course Cover</div>
            </div>
          </div>
          <div class="background-border">
            <div class="margin">
              <div class="background">
                <img class="container21" src="{{ asset('images/admin/icons/container25.svg') }}" />
              </div>
            </div>
            <div class="margin2">
              <div class="container22">
                <div class="text5">Upload a thumbnail image</div>
              </div>
            </div>
            <div class="margin3">
              <div class="container22">
                <div class="text6">
                  PNG, JPG or WEBP up to 2MB. Recommended 1280x720px.
                </div>
              </div>
            </div>
            <div class="button">
              <div class="text7">Choose Image</div>
            </div>
          </div>
        </div>
      </div>
      <div class="right-column-preview-info"></div>
    </div>
    <div class="button2">
      <div class="create-course">Create Course</div>
    </div>
  </div>
  <div class="container23">
    <div class="input3">
      <div class="container11">
        <div class="search-resources">Search resources...</div>
      </div>
    </div>
    <div class="container24">
      <img class="container25" src="{{ asset('images/admin/icons/container31.svg') }}" />
    </div>
  </div>
  <div class="container26">
    <div class="margin4">
      <div class="container4">
        <div class="container27">
          <div class="text8">Welcome, Admin</div>
        </div>
        <div class="container27">
          <div class="text9">Manage platform resources</div>
        </div>
      </div>
    </div>
    <div class="container28">
      <div class="button3">
        <img class="container29" src="{{ asset('images/admin/icons/container37.svg') }}" />
      </div>
      <div class="button3">
        <img class="container30" src="{{ asset('images/admin/icons/container38.svg') }}" />
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