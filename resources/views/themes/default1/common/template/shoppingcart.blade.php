@extends('themes.default1.layouts.front.master')
@section('title')
pricing
@stop
@section('page-header')
Pricing
@stop
@section('breadcrumb')
<li><a href="{{url('home')}}">Home</a></li>
<li class="active">Pricing</li>
@stop
@section('main-class') 
main
@stop


@section('content')


<div class="row">
    @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @if(Session::has('success'))
                <div class="alert alert-success alert-dismissable">
                    <i class="fa fa-ban"></i>
                    <b>{{Lang::get('message.alert')}}!</b> {{Lang::get('message.success')}}.
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{Session::get('success')}}
                </div>
                @endif
                <!-- fail message -->
                @if(Session::has('fails'))
                <div class="alert alert-danger alert-dismissable">
                    <i class="fa fa-ban"></i>
                    <b>{{Lang::get('message.alert')}}!</b> {{Lang::get('message.failed')}}.
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{Session::get('fails')}}
                </div>
                @endif
    <div class="row">
                        <div class="col-md-12">
                            
                            <h4 style="font-size: 30px;text-align: center;font-weight: bold">Helpdesk Pricing</h4>
                        </div>
                    </div>
    <div class="col-md-12">
        <div class="pricing-table princig-table-flat">
        {!! html_entity_decode($template) !!}
        </div>
    </div>
    <br/>    <br/>    <br/>    <br/>  <br/> <br/>




  <div class="row">
                        <div class="col-md-12">
                            <!-- <hr class="tall mt-none"> -->
                            <h4 style="font-size: 30px;text-align: center;font-weight: bold;margin-top: 65px;"><strong><center>ServiceDesk Pricing</center></strong></h4>
                        </div>
                    </div>
  <div class="col-md-12">
   <div class="pricing-table princig-table-flat">
        {!! html_entity_decode($servicedesk_template) !!}
        </div>

</div>
 <br/>    <br/>    <br/>    <br/>  <br/> <br/>

  <div class="row">
                        <div class="col-md-12">
                           <!--  <hr class="tall mt-none"> -->
                            <h4 style="font-size: 30px;text-align: center;font-weight: bold;margin-top:65px;"><strong><center>Services Pricing</center></strong></h4>
                        </div>
                    </div>
<div class="col-md-12">
   <div class="pricing-table princig-table-flat">
        {!! html_entity_decode($service_template) !!}
        </div>

</div>



</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript">

        $(document).on("change", "select[name='subscription']", function () {
              // var value = $(this).text();
     // var index = $('li').index($(this));
              // alert($(this).find('option:selected').text());
              var amount=$(this).find('option:selected').text();
              var amount= amount.substring(15,20);


              // var product_id=$(this).find('option:selected').val();
              // alert(product_id);
// $(this).find('option:selected').parents().find('.plan').find('.price').text(amount)
//           console.log($(this).find('option:selected').parents().find('.plan').find('.price').text(amount));

             // alert(($(this).find('option:selected')).parents().find('.plan').find('.price').text(amount));

                    });
          

</script>

@stop

