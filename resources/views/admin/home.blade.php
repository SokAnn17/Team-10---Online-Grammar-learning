@extends('layouts.admin')

@section('title', 'Dashboard')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/admin/home.css') }}">
@endsection

@section('content')
<div class="done-admin-home">

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
  <div class="container13">
    <div class="container14">
      <div class="heading-2">
        <div class="dashboard-overview">Dashboard Overview</div>
      </div>
      <div class="container14">
        <div class="monitor-platform-activity-and-manage-learning-resources">
          Monitor platform activity and manage learning resources.
        </div>
      </div>
    </div>
    <div class="container15">
      <div class="container16">
        <div class="heading-1">
          <div class="master-english-grammar-with-confidence">
            <span>
              <span class="master-english-grammar-with-confidence-span">
                Master English
              </span>
              <span class="master-english-grammar-with-confidence-span2">
                Grammar
                <br />
              </span>
              <span class="master-english-grammar-with-confidence-span">
                with Confidence
              </span>
            </span>
          </div>
        </div>
        <div class="container17">
          <div class="text3">
            Learn grammar step by step through interactive lessons,
            <br />
            quizzes, and progress tracking. Your journey to academic
            <br />
            English excellence starts here.
          </div>
        </div>
      </div>
      <div class="container8">
        <div class="background-shadow">
          <img
            class="ab-6-a-xu-aosk-t-1-zx-x-0-hfm-3-h-5-j-3-k-b-bqjhgq-0-yg-h-1-bp-a-7-n-5816-hv-rs-jvd-ytstf-ua-l-ac-5-logo-33-ll-0-q-n-82-h-e-pe-mq-5-bm-kwu-y-vh-4-fe-6-x-na-8-mip-ud-7-s-kh-h-kx-rz-t-8-y-6-fd-f-0-exldak-ltk-lc-iat-hn-9-kpy-wv-8-ppk-mzq-6-qlgn-3-a-mgp-2-gj-sm-in-l-8-p-8-v-lsn-gx-8-t-scv-lf-k-jig-4-fomz-3-y-z-dvz-efj-ayb-i-5-q-sv-sza-q-xtgj-abwxt-0-j-yid-y-ox-9-v-tp-3-jtq-fpec-3-m-9-95-oq-p-iz-1-q-gr-7-zwy-4-g"
            src="{{ asset('images/admin/icons/ab-6-a-xu-aosk-t-1-zx-x-0-hfm-3-h-5-j-3-k-b-bqjhgq-0-yg-h-1-bp-a-7-n-5816-hv-rs-jvd-ytstf-ua-l-ac-5-logo-33-ll-0-q-n-82-h-e-pe-mq-5-bm-kwu-y-vh-4-fe-6-x-na-8-mip-ud-7-s-kh-h-kx-rz-t-8-y-6-fd-f-0-exldak-ltk-lc-iat-hn-9-kpy-wv-8-ppk-mzq-6-qlgn-3-a-mgp-2-gj-sm-in-l-8-p-8-v-lsn-gx-8-t-scv-lf-k-jig-4-fomz-3-y-z-dvz-efj-ayb-i-5-q-sv-sza-q-xtgj-abwxt-0-j-yid-y-ox-9-v-tp-3-jtq-fpec-3-m-9-95-oq-p-iz-1-q-gr-7-zwy-4-g0.png') }}"
          />
        </div>
        <div class="background-border">
          <div class="overlay-shadow"></div>
          <div class="container18">
            <img class="container19" src="{{ asset('images/admin/icons/container21.svg') }}" />
            <div class="container8">
              <div class="container14">
                <div class="text4">Top Rated Program</div>
              </div>
              <div class="container14">
                <div class="text5">Academic Excellence</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container20">
      <div class="background-border-shadow">
        <div class="margin2">
          <img class="container21" src="{{ asset('images/admin/icons/container26.svg') }}" />
        </div>
        <div class="container22">
          <div class="text6">24</div>
        </div>
        <div class="margin3">
          <div class="container22">
            <div class="text7">Total Courses</div>
          </div>
        </div>
      </div>
      <div class="background-border-shadow2">
        <div class="margin2">
          <img class="container23" src="{{ asset('images/admin/icons/container29.svg') }}" />
        </div>
        <div class="container22">
          <div class="text6">320</div>
        </div>
        <div class="margin3">
          <div class="container22">
            <div class="text7">Total Students</div>
          </div>
        </div>
      </div>
      <div class="background-border-shadow3">
        <div class="margin2">
          <img class="container24" src="{{ asset('images/admin/icons/container32.svg') }}" />
        </div>
        <div class="container22">
          <div class="text6">85</div>
        </div>
        <div class="margin3">
          <div class="container22">
            <div class="text7">Total Quizzes</div>
          </div>
        </div>
      </div>
      <div class="background-border-shadow4">
        <div class="margin2">
          <img class="container25" src="{{ asset('images/admin/icons/container35.svg') }}" />
        </div>
        <div class="container22">
          <div class="text6">91%</div>
        </div>
        <div class="margin3">
          <div class="container22">
            <div class="text7">Avg Completion</div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection