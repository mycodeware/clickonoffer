
  @extends('admin::layouts.master')

  @section('content') 
  @include('admin::partials.navigation')
  @include('admin::partials.breadcrumb')   

  @include('admin::partials.sidebar')  
  <div class="panel panel-white"> 


  <div class="panel panel-flat">
    <div class="panel-heading">
    <h6 class="panel-title"><b>Create {{$page_title ?? ''}}</b><a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
    <div class="heading-elements">
    <ul class="icons-list">
      <li> <a type="button" href="{{route('adstype')}}" class="btn btn-primary text-white   btn-rounded "> View ads Type<span class="legitRipple-ripple" ></span></a></li> 
    </ul>
    </div>
    </div> 
  </div>


           {!! Form::model($adsType, ['route' => ['adstype.store'],'class'=>'form-basic ui-formwizard user-form','id'=>'user-form','enctype'=>'multipart/form-data']) !!}
                
                @include('admin::ads_type.form')
                
                {!! Form::close() !!}    
                     
        </div> 
@stop
        
                 