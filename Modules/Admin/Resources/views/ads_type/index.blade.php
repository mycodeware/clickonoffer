@extends('admin::layouts.master')
 
    @section('content') 
      @include('admin::partials.navigation')
      @include('admin::partials.breadcrumb')   

       @include('admin::partials.sidebar')   

            <div class="panel panel-white"> 
  		          <div class="panel panel-flat">
                  <div class="panel-heading">
                    <h6 class="panel-title"><b> {{$heading }} List</b><a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
                    <div class="heading-elements">
                      <ul class="icons-list">
                        <li> <a type="button" href="{{route('adstype.create')}}" class="btn btn-primary text-white btn-labeled btn-rounded "><b><i class="icon-plus3"></i></b> Add Type<span class="legitRipple-ripple" ></span></a></li> 
                      </ul>
                    </div>
                  </div> 
  		        </div> 
              <div class="panel-body"> 
                  <div class="table-toolbar">
                    <div class="row">
                      <form action="{{route('adstype')}}" method="get" id="filter_data">
                     
                       
                      <div class="col-md-2">
                          <input value="{{ (isset($_REQUEST['search']))?$_REQUEST['search']:''}}" placeholder="search by Type" type="text" name="search" id="search" class="form-control" >
                      </div>
                      <div class="col-md-2">
                          <input type="submit" value="Search" class="btn btn-primary form-control">
                      </div>
                       
                    </form>
                    
                  
                    </div>
                </div> 
            </div>


               @if(Session::has('flash_alert_notice'))
                   <div class="alert alert-success alert-dismissable" style="margin:10px">
                      <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                    <i class="icon fa fa-check"></i>  
                   {{ Session::get('flash_alert_notice') }} 
                   </div>
              @endif
               
  		        <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered" id="">
                    <thead>
                        <tr>
                            <th> Sno. </th>                            
                            <th> Image </th>  
                            <th> Title </th>
                            <th> Created date</th> 
                            <th> Action</th> 
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($adsType as $key => $result)
                        <tr>
                          <td> {{++$key}} </td>                            
                            <td>
                            <a href="{{ asset('public/'.$result->image)  }}" target="_blank" >
                            <img src="{{ asset('public/'.$result->image)  }}" width="100px" height="50px;">
                             </a>  
                          </td>
                          <td> {{$result->title}} </td>
                          <td>
                                {!! Carbon\Carbon::parse($result->created_at)->format($date_format); !!}
                          </td>
                                
                          <td> 
                                    
                            <a href="{{ route('adstype.edit',$result->id)}}" class="btn btn-primary btn-xs" style="margin-left: 20px">
                            <i class="fa fa-edit" title="edit"></i> Edit
                            </a>

                            {!! Form::open(array('class' => 'form-inline pull-left deletion-form', 'method' => 'DELETE',  'id'=>'deleteForm_'.$result->id, 'route' => array('adstype.destroy', $result->id))) !!}

                            <button class='delbtn btn btn-danger btn-xs' type="submit" name="remove_levels" value="delete" id="{{$result->id}}"><i class="fa fa-trash" title="Delete"></i> Delete
                            </button>

                            {!! Form::close() !!}

                          </td>
                           
                        </tr>
                       @endforeach
                        
                    </tbody>
                </table>
              
                </div>

                </div>
              </div> 
   @stop