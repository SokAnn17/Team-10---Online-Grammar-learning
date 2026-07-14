@extends('layouts.admin')

@section('title', 'Course Management')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/admin/courses.css') }}">
@endsection

@section('content')
<div class="done-admin-courses">

  @include('admin.partials.sidebar')
  
  <div class="container3">
    <div class="container4">
      <div class="container5">
        <div class="container6">
          <div class="heading-2">
            <div class="text">Course Management</div>
          </div>
          <div class="container7">
            <div class="text2">
              Create, organize, and manage grammar learning courses.
            </div>
          </div>
        </div>
        <div class="button">
          <div class="button-shadow"></div>
          <img class="container8" src="{{ asset('images/admin/icons/container7.svg') }}" />
          <div class="text3">Create Course</div>
        </div>
      </div>
      <div class="container9">
        <div class="container10">
          <div class="container11">
            <div class="background-border-shadow">
              <div class="container12">
                <div class="container13">
                  <div class="text4">
                    TOTAL
                    <br />
                    COURSES
                  </div>
                </div>
              </div>
              <div class="container7">
                <div class="_24">24</div>
              </div>
            </div>
            <div class="background-border-shadow">
              <div class="container12">
                <div class="container14">
                  <div class="text4">PUBLISHED</div>
                </div>
              </div>
              <div class="container7">
                <div class="_18">18</div>
              </div>
            </div>
            <div class="background-border-shadow2">
              <div class="container15">
                <div class="container16">
                  <div class="text4">ENROLLMENTS</div>
                </div>
              </div>
              <div class="container7">
                <div class="_320">320</div>
              </div>
            </div>
          </div>
          <div class="container17">
            <div class="heading-3">
              <div class="text5">All Course Modules</div>
            </div>
            <div class="container18">
              <div class="button2">
                <div class="text6">All Levels</div>
              </div>
              <div class="button2">
                <div class="text6">Beginner</div>
              </div>
              <div class="button2">
                <div class="text6">Intermediate</div>
              </div>
              <div class="button2">
                <div class="text6">Advanced</div>
              </div>
            </div>
          </div>
          <div class="container19">
            <div class="background-border-shadow3">
              <div class="container20">
                <div class="container21">
                  <div class="background">
                    <div class="text7">BEGINNER</div>
                  </div>
                </div>
                <div class="heading-4">
                  <div class="present-simple-tense">
                    Present Simple
                    <br />
                    Tense
                  </div>
                </div>
                <div class="container22">
                  <div class="container23">
                    <img class="container24" src="{{ asset('images/admin/icons/container27.svg') }}" />
                    <div class="text8">12 Lessons</div>
                  </div>
                  <div class="container25">
                    <img class="container26" src="{{ asset('images/admin/icons/container29.svg') }}" />
                    <div class="text8">84 Students</div>
                  </div>
                  <div class="container27">
                    <img class="container28" src="{{ asset('images/admin/icons/container31.svg') }}" />
                    <div class="text8">65% Avg.</div>
                  </div>
                </div>
              </div>
              <div class="button3">
                <div class="text9">Manage Course</div>
                <img class="container29" src="{{ asset('images/admin/icons/container32.svg') }}" />
              </div>
            </div>
            <div class="background-border-shadow4">
              <div class="container30">
                <div class="container21">
                  <div class="background">
                    <div class="text7">BEGINNER</div>
                  </div>
                </div>
                <div class="heading-4">
                  <div class="past-simple-tense">Past Simple Tense</div>
                </div>
                <div class="container22">
                  <div class="container31">
                    <img class="container32" src="{{ asset('images/admin/icons/container37.svg') }}" />
                    <div class="text8">10 Lessons</div>
                  </div>
                  <div class="container33">
                    <img class="container34" src="{{ asset('images/admin/icons/container39.svg') }}" />
                    <div class="text8">52 Students</div>
                  </div>
                  <div class="container35">
                    <img class="container36" src="{{ asset('images/admin/icons/container41.svg') }}" />
                    <div class="text8">40% Avg.</div>
                  </div>
                </div>
              </div>
              <div class="button4">
                <div class="text9">Manage Course</div>
                <img class="container37" src="{{ asset('images/admin/icons/container42.svg') }}" />
              </div>
            </div>
            <div class="background-border-shadow5">
              <div class="container20">
                <div class="container38">
                  <div class="background2">
                    <div class="text10">INTERMEDIATE</div>
                  </div>
                </div>
                <div class="heading-4">
                  <div class="parts-of-speech">Parts of Speech</div>
                </div>
                <div class="container39">
                  <div class="container40">
                    <img class="container41" src="{{ asset('images/admin/icons/container47.svg') }}" />
                    <div class="text8">15 Lessons</div>
                  </div>
                  <div class="container40">
                    <img class="container42" src="{{ asset('images/admin/icons/container49.svg') }}" />
                    <div class="text8">120 Students</div>
                  </div>
                  <div class="container40">
                    <img class="container43" src="{{ asset('images/admin/icons/container51.svg') }}" />
                    <div class="text8">80% Avg.</div>
                  </div>
                </div>
              </div>
              <div class="button3">
                <div class="text9">Manage Course</div>
                <img class="container44" src="{{ asset('images/admin/icons/container52.svg') }}" />
              </div>
            </div>
            <div class="background-border-shadow6">
              <div class="container20">
                <div class="container21">
                  <div class="background">
                    <div class="text7">BEGINNER</div>
                  </div>
                </div>
                <div class="heading-4">
                  <div class="articles-and-determiners">
                    Articles and
                    <br />
                    Determiners
                  </div>
                </div>
                <div class="container22">
                  <div class="container23">
                    <img class="container45" src="{{ asset('images/admin/icons/container57.svg') }}" />
                    <div class="text8">8 Lessons</div>
                  </div>
                  <div class="container46">
                    <img class="container47" src="{{ asset('images/admin/icons/container59.svg') }}" />
                    <div class="text8">45 Students</div>
                  </div>
                  <div class="container25">
                    <img class="container48" src="{{ asset('images/admin/icons/container61.svg') }}" />
                    <div class="text8">92% Avg.</div>
                  </div>
                </div>
              </div>
              <div class="button3">
                <div class="text9">Manage Course</div>
                <img class="container49" src="{{ asset('images/admin/icons/container62.svg') }}" />
              </div>
            </div>
            <div class="background-border-shadow7">
              <div class="container20">
                <div class="container21">
                  <div class="background3">
                    <div class="text11">ADVANCED</div>
                  </div>
                </div>
                <div class="heading-4">
                  <div class="modal-verbs">Modal Verbs</div>
                </div>
                <div class="container22">
                  <div class="container31">
                    <img class="container50" src="{{ asset('images/admin/icons/container67.svg') }}" />
                    <div class="text8">14 Lessons</div>
                  </div>
                  <div class="container33">
                    <img class="container51" src="{{ asset('images/admin/icons/container69.svg') }}" />
                    <div class="text8">32 Students</div>
                  </div>
                  <div class="container52">
                    <img class="container53" src="{{ asset('images/admin/icons/container71.svg') }}" />
                    <div class="text8">55% Avg.</div>
                  </div>
                </div>
              </div>
              <div class="button4">
                <div class="text9">Manage Course</div>
                <img class="container54" src="{{ asset('images/admin/icons/container72.svg') }}" />
              </div>
            </div>
            <div class="background-border-shadow8">
              <div class="container20">
                <div class="container38">
                  <div class="background2">
                    <div class="text10">INTERMEDIATE</div>
                  </div>
                </div>
                <div class="heading-4">
                  <div class="relative-clauses">Relative Clauses</div>
                </div>
                <div class="container22">
                  <div class="container31">
                    <img class="container55" src="{{ asset('images/admin/icons/container77.svg') }}" />
                    <div class="text8">11 Lessons</div>
                  </div>
                  <div class="container33">
                    <img class="container56" src="{{ asset('images/admin/icons/container79.svg') }}" />
                    <div class="text8">28 Students</div>
                  </div>
                  <div class="container57">
                    <img class="container58" src="{{ asset('images/admin/icons/container81.svg') }}" />
                    <div class="text8">71% Avg.</div>
                  </div>
                </div>
              </div>
              <div class="button3">
                <div class="text9">Manage Course</div>
                <img class="container59" src="{{ asset('images/admin/icons/container82.svg') }}" />
              </div>
            </div>
            <div class="background-border-shadow9">
              <div class="container20">
                <div class="container21">
                  <div class="background2">
                    <div class="text10">INTERMEDIATE</div>
                  </div>
                </div>
                <div class="heading-4">
                  <div class="future-tense">Future Tense</div>
                </div>
                <div class="container22">
                  <div class="container23">
                    <img class="container60" src="{{ asset('images/admin/icons/container87.svg') }}" />
                    <div class="text8">9 Lessons</div>
                  </div>
                  <div class="container46">
                    <img class="container61" src="{{ asset('images/admin/icons/container89.svg') }}" />
                    <div class="text8">18 Students</div>
                  </div>
                  <div class="container25">
                    <img class="container62" src="{{ asset('images/admin/icons/container91.svg') }}" />
                    <div class="text8">0% Avg.</div>
                  </div>
                </div>
              </div>
              <div class="button3">
                <div class="text9">Manage Course</div>
                <img class="container63" src="{{ asset('images/admin/icons/container92.svg') }}" />
              </div>
            </div>
            <div class="background-border-shadow10">
              <div class="container20">
                <div class="container21">
                  <div class="background2">
                    <div class="text10">INTERMEDIATE</div>
                  </div>
                </div>
                <div class="heading-4">
                  <div class="reported-speech">Reported Speech</div>
                </div>
                <div class="container22">
                  <div class="container31">
                    <img class="container64" src="{{ asset('images/admin/icons/container97.svg') }}" />
                    <div class="text8">10 Lessons</div>
                  </div>
                  <div class="container33">
                    <img class="container65" src="{{ asset('images/admin/icons/container99.svg') }}" />
                    <div class="text8">12 Students</div>
                  </div>
                  <div class="container66">
                    <img class="container67" src="{{ asset('images/admin/icons/container101.svg') }}" />
                    <div class="text8">0% Avg.</div>
                  </div>
                </div>
              </div>
              <div class="button4">
                <div class="text9">Manage Course</div>
                <img class="container68" src="{{ asset('images/admin/icons/container102.svg') }}" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container69">
    <div class="input">
      <div class="container70">
        <div class="search-resources">Search resources...</div>
      </div>
    </div>
    <div class="container71">
      <img class="container72" src="{{ asset('images/admin/icons/container106.svg') }}" />
    </div>
  </div>
  <div class="container73">
    <div class="margin">
      <div class="container14">
        <div class="container74">
          <div class="text12">Welcome, Admin</div>
        </div>
        <div class="container74">
          <div class="text13">Manage platform resources</div>
        </div>
      </div>
    </div>
    <div class="container75">
      <div class="button5">
        <img class="container76" src="{{ asset('images/admin/icons/container112.svg') }}" />
      </div>
      <div class="button5">
        <img class="container77" src="{{ asset('images/admin/icons/container113.svg') }}" />
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