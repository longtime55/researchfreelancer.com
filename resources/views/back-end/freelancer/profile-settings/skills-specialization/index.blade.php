@extends(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master')
@section('content')
    <div class="wt-dbsectionspace wt-haslayout la-ps-freelancer">
        <div class="freelancer-profile" id="user_profile">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
                    <div class="wt-dashboardbox wt-dashboardtabsholder">
                        @if (file_exists(resource_path('views/extend/back-end/freelancer/profile-settings/tabs.blade.php'))) 
                            @include('extend.back-end.freelancer.profile-settings.tabs')
                        @else 
                            @include('back-end.freelancer.profile-settings.tabs')
                        @endif
                        <div class="wt-tabscontent tab-content">
                            @if (Session::has('message'))
                                <div class="flash_msg">
                                    <flash_messages :message_class="'success'" :time ='5' :message="'{{{ Session::get('message') }}}'" v-cloak></flash_messages>
                                </div>
                            @endif
                            @if ($errors->any())
                                <ul class="wt-jobalerts">
                                    @foreach ($errors->all() as $error)
                                        <div class="flash_msg">
                                            <flash_messages :message_class="'danger'" :time ='10' :message="'{{{ $error }}}'" v-cloak></flash_messages>
                                        </div>
                                    @endforeach
                                </ul>
                            @endif
                            <div class="wt-personalskillshold tab-pane active fade show" id="wt-skills">
                                {!! Form::open(['url' => url('freelancer/store-profile-settings'), 'class' =>'wt-userform', 'id' => 'skills_specialization', '@submit.prevent'=>'submitSkillsSpecialization']) !!}
                                    <div class="wt-skills la-skills-holder">
                                        @if (file_exists(resource_path('views/extend/back-end/freelancer/profile-settings/skills-specialization/specialty.blade.php'))) 
                                            @include('extend.back-end.freelancer.profile-settings.skills-specialization.specialty')
                                        @else 
                                            @include('back-end.freelancer.profile-settings.skills-specialization.specialty')
                                        @endif
                                    </div>
                                    <div class="wt-jobcategories wt-tabsinfo pt-4">
                                        @if (file_exists(resource_path('views/extend/back-end/freelancer/profile-settings/skills-specialization/research-category.blade.php'))) 
                                            @include('extend.back-end.freelancer.profile-settings.skills-specialization.research-category')
                                        @else 
                                            @include('back-end.freelancer.profile-settings.skills-specialization.research-category')
                                        @endif
                                    </div>
                                    <div class="wt-yourdetails wt-tabsinfo">
                                        @if (file_exists(resource_path('views/extend/back-end/freelancer/profile-settings/skills-specialization/citations.blade.php'))) 
                                            @include('extend.back-end.freelancer.profile-settings.skills-specialization.citations')
                                        @else 
                                            @include('back-end.freelancer.profile-settings.skills-specialization.citations')
                                        @endif
                                    </div>

                                    @if (file_exists(resource_path('views/extend/back-end/freelancer/profile-settings/skills-specialization/otherprofile.blade.php'))) 
                                        @include('extend.back-end.freelancer.profile-settings.skills-specialization.otherprofile')
                                    @else 
                                        @include('back-end.freelancer.profile-settings.skills-specialization.otherprofile')
                                    @endif
                                    
                                    <div class="wt-updatall">
                                        <i class="ti-announcement"></i>
                                        <span>{{{ trans('lang.save_changes_note') }}}</span>
                                        {!! Form::submit(trans('lang.btn_save_update'), ['class' => 'wt-btn', 'id'=>'submit-skills-special']) !!}
                                    </div>
                                {!! form::close(); !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
