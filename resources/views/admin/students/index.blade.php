@extends('layouts.admin')

@section('title', 'Manage Student')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/admin/student.css') }}">
@endsection

@section('content')
<div class="_31-done-admin-students">

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
  <div class="center-content-canvas">
    <div class="page-header">
      <div class="container13">
        <div class="heading-2">
          <div class="text3">Student Management</div>
        </div>
        <div class="container14">
          <div class="text4">
            View and manage student accounts, enrollments, and learning progress
            across all
            <br />
            grammar levels.
          </div>
        </div>
      </div>
    </div>
    <div class="stats-grid">
      <div class="total-students">
        <div class="container15">
          <div class="total-students2">Total Students</div>
        </div>
        <div class="heading-3">
          <div class="_1-248">1,248</div>
        </div>
        <div class="container16"></div>
      </div>
      <div class="active-students">
        <div class="container15">
          <div class="active-students2">Active Students</div>
        </div>
        <div class="heading-3">
          <div class="_982">982</div>
        </div>
        <div class="container17"></div>
      </div>
      <div class="new-this-month">
        <div class="container15">
          <div class="new-this-month2">New This Month</div>
        </div>
        <div class="container18">
          <div class="_86">86</div>
        </div>
        <div class="heading-32"></div>
      </div>
      <div class="average-score">
        <div class="container15">
          <div class="average-score2">Average Score</div>
        </div>
        <div class="heading-3">
          <div class="_84">84%</div>
        </div>
        <div class="container19"></div>
      </div>
    </div>
    <div class="filters-section">
      <div class="container20">
        <div class="input2">
          <div class="container4">
            <div class="filter-by-name-or-email">
              Filter by name or email...
            </div>
          </div>
        </div>
        <img class="container21" src="{{ asset('images/admin/icons/container25.svg') }}" />
      </div>
      <div class="options">
        <div class="image-clip">
          <img class="image" src="{{ asset('images/admin/icons/image0.svg') }}" />
        </div>
        <div class="container22">
          <div class="text3">All Levels</div>
        </div>
      </div>
      <div class="options">
        <div class="image-clip">
          <img class="image2" src="{{ asset('images/admin/icons/image1.svg') }}" />
        </div>
        <div class="container23">
          <div class="text3">All Status</div>
        </div>
      </div>
      <div class="options">
        <div class="image-clip2">
          <img class="image3" src="{{ asset('images/admin/icons/image2.svg') }}" />
        </div>
        <div class="container24">
          <div class="text3">All Courses</div>
        </div>
      </div>
      <div class="button2">
        <div class="text5">Reset Filters</div>
      </div>
    </div>
    <div class="student-list-table">
      <div class="table">
        <div class="header-row">
          <div class="cell">
            <div class="text6">Student Name</div>
          </div>
          <div class="cell">
            <div class="text6">Student ID</div>
          </div>
          <div class="cell">
            <div class="text6">Email</div>
          </div>
          <div class="cell2">
            <div class="text6">
              Enrolled
              <br />
              Courses
            </div>
          </div>
          <div class="cell3">
            <div class="text7">
              Avg.
              <br />
              Score
            </div>
          </div>
          <div class="cell">
            <div class="text6">Status</div>
          </div>
          <div class="cell4">
            <div class="text8">Action</div>
          </div>
        </div>
        <div class="body">
          <div class="row-1">
            <div class="data">
              <img
                class="ab-6-a-xu-dksu-ksb-fyu-1-ff-j-1-b-h-4-bm-uj-ykg-p-kq-hn-4-o-ux-57-ico-iu-1-r-cjfju-cp-q-iyz-jo-ic-qppjl-xj-ef-m-1-ben-n-6-r-d-9-aotu-may-2-x-jgay-ax-tel-8-yk-76-t-61-ix-ja-14-bd-w-fia-h-7-jf-kz-us-ky-5-n-vh-y-0-gl-ac-x-odwy-vr-baq-pm-on-rcu-pb-8-ass-0-r-nk-wvyk-tfew-x-lch-cq-wh-j-fn-reeo-6-i-mx-wo-15-z-t-6-zc-54-kb-3-i-kux-qj-4-mv-8-cj-hux-lkl-pmevghz-5-pd-wx-mf-d-8-fm-64-u-ks-96-w-tg-tz-5-q-ea-v-x-hk"
                src="{{ asset('images/admin/icons/ab-6-a-xu-dksu-ksb-fyu-1-ff-j-1-b-h-4-bm-uj-ykg-p-kq-hn-4-o-ux-57-ico-iu-1-r-cjfju-cp-q-iyz-jo-ic-qppjl-xj-ef-m-1-ben-n-6-r-d-9-aotu-may-2-x-jgay-ax-tel-8-yk-76-t-61-ix-ja-14-bd-w-fia-h-7-jf-kz-us-ky-5-n-vh-y-0-gl-ac-x-odwy-vr-baq-pm-on-rcu-pb-8-ass-0-r-nk-wvyk-tfew-x-lch-cq-wh-j-fn-reeo-6-i-mx-wo-15-z-t-6-zc-54-kb-3-i-kux-qj-4-mv-8-cj-hux-lkl-pmevghz-5-pd-wx-mf-d-8-fm-64-u-ks-96-w-tg-tz-5-q-ea-v-x-hk0.png') }}"
              />
              <div class="container25">
                <div class="text3">
                  Alex
                  <br />
                  Johnson
                </div>
              </div>
            </div>
            <div class="data2">
              <div class="text4">ENG2026001</div>
            </div>
            <div class="data3">
              <div class="text4">alex@email.com</div>
            </div>
            <div class="data3">
              <div class="text4">4 Courses</div>
            </div>
            <div class="data4">
              <div class="text9">91%</div>
            </div>
            <div class="data5">
              <div class="background">
                <div class="text10">Active</div>
              </div>
            </div>
            <div class="data6">
              <div class="button3">
                <div class="text5">
                  View
                  <br />
                  Profile
                </div>
              </div>
            </div>
          </div>
          <div class="row-2">
            <div class="data">
              <img
                class="ab-6-a-xu-c-sim-wjr-4-am-loajm-mo-1-x-on-iemu-rb-xih-7-oz-z-fm-cnk-cj-yrsd-2-a-9-u-kh-gc-d-3-o-r-4-ejqauc-axl-x-eb-0-ky-5-vdg-qw-q-sgalcn-j-wj-ffh-3-pd-xg-r-2-ir-dlgsij-k-0-m-0-mqlhp-ifo-kl-0-xjb-za-41-w-0-yzbq-tgvb-5-gy-1-edvybrm-n-46-d-zq-ky-ly-bx-qb-5-wpzp-pq-ihk-guzjrrm-506-q-6-u-psn-v-xv-4-zn-iaj-wb-4-j-fy-pvpum-6-z-5-ins-ax-vxg-ys-n-dsmj-wk-bm-n-0-rb-gc-0-i-u-6-obw-v-8-b-4-p-3-q-ypm-xm-aalg-m"
                src="{{ asset('images/admin/icons/ab-6-a-xu-c-sim-wjr-4-am-loajm-mo-1-x-on-iemu-rb-xih-7-oz-z-fm-cnk-cj-yrsd-2-a-9-u-kh-gc-d-3-o-r-4-ejqauc-axl-x-eb-0-ky-5-vdg-qw-q-sgalcn-j-wj-ffh-3-pd-xg-r-2-ir-dlgsij-k-0-m-0-mqlhp-ifo-kl-0-xjb-za-41-w-0-yzbq-tgvb-5-gy-1-edvybrm-n-46-d-zq-ky-ly-bx-qb-5-wpzp-pq-ihk-guzjrrm-506-q-6-u-psn-v-xv-4-zn-iaj-wb-4-j-fy-pvpum-6-z-5-ins-ax-vxg-ys-n-dsmj-wk-bm-n-0-rb-gc-0-i-u-6-obw-v-8-b-4-p-3-q-ypm-xm-aalg-m0.png') }}"
              />
              <div class="container26">
                <div class="text3">
                  Emma
                  <br />
                  Wilson
                </div>
              </div>
            </div>
            <div class="data2">
              <div class="text4">ENG2026002</div>
            </div>
            <div class="data3">
              <div class="text4">emma@email.com</div>
            </div>
            <div class="data3">
              <div class="text4">3 Courses</div>
            </div>
            <div class="data4">
              <div class="text9">88%</div>
            </div>
            <div class="data5">
              <div class="background">
                <div class="text10">Active</div>
              </div>
            </div>
            <div class="data6">
              <div class="button3">
                <div class="text5">
                  View
                  <br />
                  Profile
                </div>
              </div>
            </div>
          </div>
          <div class="row-3">
            <div class="data">
              <img
                class="ab-6-a-xu-bt-4-bi-da-o-dudqw-ruz-a-0-qy-d-6-h-c-vh-0-i-d-prh-9-me-h-0-x-fg-t-kwc-ea-et-b-9-s-5-g-evprm-1-gx-0-iw-vyxg-eosp-mr-izz-ffmz-ln-bo-xw-z-ef-2-bbxz-eh-p-co-dz-fvk-6-qy-uq-egh-y-1-od-mu-rq-l-le-hk-vqirlaudp-lbkql-m-wr-s-jgo-x-pph-c-fy-y-6-crilybjnu-fx-2-kzb-lwgjg-3-qm-do-lunz-llun-6-obu-x-16-yc-8-du-jdirx-3-dl-ko-h-iu-abvl-tnapd-7-y-fpco-uk-rq-6-la-5-e-kbilo-2-m-4-n-1-loki-85-fohx-18"
                src="{{ asset('images/admin/icons/ab-6-a-xu-bt-4-bi-da-o-dudqw-ruz-a-0-qy-d-6-h-c-vh-0-i-d-prh-9-me-h-0-x-fg-t-kwc-ea-et-b-9-s-5-g-evprm-1-gx-0-iw-vyxg-eosp-mr-izz-ffmz-ln-bo-xw-z-ef-2-bbxz-eh-p-co-dz-fvk-6-qy-uq-egh-y-1-od-mu-rq-l-le-hk-vqirlaudp-lbkql-m-wr-s-jgo-x-pph-c-fy-y-6-crilybjnu-fx-2-kzb-lwgjg-3-qm-do-lunz-llun-6-obu-x-16-yc-8-du-jdirx-3-dl-ko-h-iu-abvl-tnapd-7-y-fpco-uk-rq-6-la-5-e-kbilo-2-m-4-n-1-loki-85-fohx-180.png') }}"
              />
              <div class="container27">
                <div class="text3">
                  Michael
                  <br />
                  Brown
                </div>
              </div>
            </div>
            <div class="data2">
              <div class="text4">ENG2026003</div>
            </div>
            <div class="data3">
              <div class="text4">michael@email.com</div>
            </div>
            <div class="data3">
              <div class="text4">2 Courses</div>
            </div>
            <div class="data4">
              <div class="text11">76%</div>
            </div>
            <div class="data5">
              <div class="background2">
                <div class="text12">Inactive</div>
              </div>
            </div>
            <div class="data6">
              <div class="button3">
                <div class="text5">
                  View
                  <br />
                  Profile
                </div>
              </div>
            </div>
          </div>
          <div class="row-4">
            <div class="data">
              <img
                class="ab-6-a-xu-au-8-z-s-qrjw-gd-ze-zsp-3-sj-5-bz-yt-8-v-6-ldhe-6-xlv-ad-wgja-50-x-0-oll-3-c-l-nbzo-7-k-oflf-gu-y-8-ple-za-16-y-n-4-i-1-an-ka-63-xpd-1-qw-gk-ek-1-vt-iuf-ru-ud-8-i-frbqo-scf-fjx-nv-0-gc-tf-s-dm-jn-68-fzbab-cz-959-a-om-e-5-l-syr-1-w-pc-un-898-j-4-sh-kz-u-p-7-mapac-8-icu-fh-3-e-d-0-o-fy-anbx-nks-py-9-zzuk-q-9-txth-f-otrbnbdgy-6-c-6-f-gex-4-h-nsu-do-2-pvp-gop-z-2-od-br-9-fq-ld-nq-iz-37-uo-6-ewbw-vu"
                src="{{ asset('images/admin/icons/ab-6-a-xu-au-8-z-s-qrjw-gd-ze-zsp-3-sj-5-bz-yt-8-v-6-ldhe-6-xlv-ad-wgja-50-x-0-oll-3-c-l-nbzo-7-k-oflf-gu-y-8-ple-za-16-y-n-4-i-1-an-ka-63-xpd-1-qw-gk-ek-1-vt-iuf-ru-ud-8-i-frbqo-scf-fjx-nv-0-gc-tf-s-dm-jn-68-fzbab-cz-959-a-om-e-5-l-syr-1-w-pc-un-898-j-4-sh-kz-u-p-7-mapac-8-icu-fh-3-e-d-0-o-fy-anbx-nks-py-9-zzuk-q-9-txth-f-otrbnbdgy-6-c-6-f-gex-4-h-nsu-do-2-pvp-gop-z-2-od-br-9-fq-ld-nq-iz-37-uo-6-ewbw-vu0.png') }}"
              />
              <div class="container28">
                <div class="text3">
                  Sophia
                  <br />
                  Davis
                </div>
              </div>
            </div>
            <div class="data7">
              <div class="text4">ENG2026004</div>
            </div>
            <div class="data8">
              <div class="text4">sophia@email.com</div>
            </div>
            <div class="data8">
              <div class="text4">5 Courses</div>
            </div>
            <div class="data9">
              <div class="text9">95%</div>
            </div>
            <div class="data10">
              <div class="background">
                <div class="text10">Active</div>
              </div>
            </div>
            <div class="data11">
              <div class="button3">
                <div class="text5">
                  View
                  <br />
                  Profile
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pagination">
        <div class="container8">
          <div class="text4">Showing 1 to 4 of 1,248 students</div>
        </div>
        <div class="container29">
          <div class="button4">
            <img class="container30" src="{{ asset('images/admin/icons/container35.svg') }}" />
          </div>
          <div class="button5">
            <div class="text13">1</div>
          </div>
          <div class="button6">
            <div class="text14">2</div>
          </div>
          <div class="button6">
            <div class="text14">3</div>
          </div>
          <div class="container8">
            <div class="text4">...</div>
          </div>
          <div class="button6">
            <div class="text14">125</div>
          </div>
          <div class="button4">
            <img class="container31" src="{{ asset('images/admin/icons/container37.svg') }}" />
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection