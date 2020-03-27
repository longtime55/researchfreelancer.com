@extends(file_exists(resource_path('views/extend/back-end/master.blade.php')) ? 'extend.back-end.master' : 'back-end.master')
@section('content')
    <div class="cats-listing" id="level-list">
        @if (Session::has('message'))
            <div class="flash_msg">
                <flash_messages :message_class="'success'" :time ='5' :message="'{{{ Session::get('message') }}}'" v-cloak></flash_messages>
            </div>
        @elseif (Session::has('error'))
            <div class="flash_msg">
                <flash_messages :message_class="'danger'" :time ='5' :message="'{{{ Session::get('error') }}}'" v-cloak></flash_messages>
            </div>
        @endif
        <section class="wt-haslayout wt-dbsectionspace la-addnewcats">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-xl-4 float-left">
                    <div class="wt-dashboardbox la-category-box">
                        <div class="wt-dashboardboxtitle">
                            <h2>{{{ trans('lang.add_level') }}}</h2>
                        </div>
                        <div class="wt-dashboardboxcontent">
                            {!! Form::open([
                                'url' => route('storeLevels', ['which' => $which]),
                                'class' =>'wt-formtheme wt-formprojectinfo wt-formcategory', 'id'=> 'levels'
                                ])
                            !!}
                                <fieldset>
                                    <div class="form-group">
                                        {!! Form::text( 'title', null, ['class' =>'form-control'.($errors->has('title') ? ' is-invalid' : ''), 'placeholder' => trans('lang.ph_lev_title')] ) !!}
                                        <span class="form-group-description">{{{ trans('lang.desc') }}}</span>
                                        @if ($errors->has('title'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('title') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        {!! Form::textarea( 'abstract', null, ['class' =>'form-control', 'placeholder' => trans('lang.ph_desc')] ) !!}
                                        <span class="form-group-description">{{{ trans('lang.cat_desc') }}}</span>
                                    </div>
                                    <!--<div class="wt-settingscontent">-->
                                    <!--    <div class = "wt-formtheme wt-userform">-->
                                    <!--        <upload-image-->
                                    <!--            :id="'cat_image'"-->
                                    <!--            :img_ref="'cat_ref'"-->
                                    <!--            :url="'{{url('admin/levels/upload-temp-image/'.$which)}}'"-->
                                    <!--            :name="'uploaded_image'"-->
                                    <!--            >-->
                                    <!--        </upload-image>-->
                                    <!--        {!! Form::hidden( 'uploaded_image', '', ['id'=>'hidden_img'] ) !!}-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="form-group wt-btnarea">
                                        {!! Form::submit(trans('lang.add_level'), ['class' => 'wt-btn']) !!}
                                    </div>
                                </fieldset>
                            {!! Form::close(); !!}
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 col-xl-8 float-right">
                    <div class="wt-dashboardbox">
                        <div class="wt-dashboardboxtitle wt-titlewithsearch">
                        	@if ($which == 'research')
                            	<h2>{{{ trans('lang.research_levels') }}}</h2>
                            @elseif ($which == 'freelancer')
                            	<h2>{{{ trans('lang.freelancer_levels') }}}</h2>
                            @endif
                            {!! Form::open(['url' => route('searchLevels', ['which' => $which]),
                                'method' => 'get', 'class' => 'wt-formtheme wt-formsearch'])
                            !!}
                            <fieldset>
                                <div class="form-group">
                                    <input type="text" name="keyword" value="{{{ !empty($_GET['keyword']) ? $_GET['keyword'] : '' }}}"
                                        class="form-control" placeholder="{{{ trans('lang.ph_search_levels') }}}">
                                    <button type="submit" class="wt-searchgbtn"><i class="lnr lnr-magnifier"></i></button>
                                </div>
                            </fieldset>
                            {!! Form::close() !!}
                            <a href="javascript:void(0);" v-if="this.is_show" @click="deleteChecked('{{ trans('lang.ph_delete_confirm_title') }}', '{{ trans('lang.ph_lev_delete_message') }}', '{{ $which }}')" class="wt-skilldel">
                                <i class="lnr lnr-trash"></i>
                                <span>{{ trans('lang.del_select_rec') }}</span>
                            </a>
                        </div>
                        @if ($levels->count() > 0)
                            <div class="wt-dashboardboxcontent wt-categoriescontentholder">
                                <table class="wt-tablecategories" id="checked-val">
                                    <thead>
                                        <tr>
                                            <th>
                                                <span class="wt-checkbox">
                                                    <input name="levels[]" id="wt-levels" @click="selectAll" type="checkbox" name="head">
                                                    <label for="wt-levels"></label>
                                                </span>
                                            </th>
                                            <!--<th>{{{ trans('lang.icon') }}}</th>-->
                                            <th>{{{ trans('lang.name') }}}</th>
                                            <th>{{{ trans('lang.slug') }}}</th>
                                            <th>{{{ trans('lang.action') }}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $counter = 0; @endphp
                                        @foreach ($levels as $level)
                                            <tr class="del-{{{ $level->id }}}">
                                                <td>
                                                    <span class="wt-checkbox">
                                                        <input name="levels[]" @click="selectRecord" value="{{{ $level->id }}}" id="wt-check-{{{ $counter }}}" type="checkbox" name="head">
                                                        <label for="wt-check-{{{ $counter }}}"></label>
                                                    </span>
                                                </td>
                                                <!--<td data-th="Icon"><span class="bt-content"><figure><img src="{{{ asset(\App\Helper::getCategoryImage($level->image)) }}}" alt="{{{ $level->title }}}"></figure></span></td>-->
                                                <td>{{{ $level->title }}}</td>
                                                <td>{{{ $level->slug }}}</td>
                                                <td>
                                                    <div class="wt-actionbtn">
                                                        <a href="{{{ route('editLevels', ['which' => $which, 'id' => $level->id]) }}}" class="wt-addinfo wt-skillsaddinfo">
                                                            <i class="lnr lnr-pencil"></i>
                                                        </a>
                                                        <delete :title="'{{trans("lang.ph_delete_confirm_title")}}'" :id="'{{$level->id}}'" :message="'{{trans("lang.ph_lev_delete_message")}}'" :url="'{{{ route('destroyLevels', ['which' => $which]) }}}'"></delete>
                                                    </div>
                                                </td>
                                            </tr>
                                            @php $counter++; @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                                @if ( method_exists($levels,'links') )
                                    {{ $levels->links('pagination.custom') }}
                                @endif
                            </div>
                        @else
                            @if (file_exists(resource_path('views/extend/errors/no-record.blade.php'))) 
                                @include('extend.errors.no-record')
                            @else 
                                @include('errors.no-record')
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
