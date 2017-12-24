<div class="modal fade" id="create-tax-option">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Create Tax Class Name</h4>
            </div>
            <div class="modal-body">
                <!-- Form  -->
                {!! Form::open(['url'=>'taxes/option']) !!}

                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <!-- name -->
                    {!! Form::label('name',Lang::get('message.name'),['class'=>'required']) !!}
                    {!! Form::text('name',null,['class' => 'form-control']) !!}

                </div>
                <div class="form-group">
                    <label> Product Name </label>
                 
                      
                       <select name="product" value="Select a Product" class="form-control">
                         <option value="">Select A Product</option>
                        @foreach ($products as $product)


                        <option value="{{$product->id}}">{{$product->name}}</option>
                        @endforeach
                    </select>
                    
                </div>

               

                 <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <!-- name -->
                   
               
                    {!! Form::label('Country',Lang::get('message.country'),['class'=>'required']) !!}
                    <?php $countries = \App\Model\Common\Country::pluck('country_name', 'country_code_char2')->toArray(); ?>
                    {!! Form::select('country',[''=>'Select a Country','Countries'=>$countries],null,['class' => 'form-control','onChange'=>'getStates(this.value);']) !!}

                        
       
                </div>



                <div class="form-group {{ $errors->has('state') ? 'has-error' : '' }}">
                    <!-- name -->
                    {!! Form::label('state',Lang::get('message.state')) !!}
                 

                    <select name="state"  class="form-control" id="states">
                        <option name="state">Please Select Country</option>
                    </select>

                </div>

                 <div class="form-group {{ $errors->has('state') ? 'has-error' : '' }}">
                    <!-- name -->
                    <label>TimeZone</label>
                    <?php $timezone = \App\Model\Common\Timezone::pluck('location','location')->toArray(); ?>
                          <option name="state">Please Select Timezone</option>
                    {!! Form::select('timezone',[''=>'Select a Timezone','Timezones'=>$timezone],null,['class' => 'form-control']) !!}

                </div>
                 
                 <div class="form-group {{ $errors->has('rate') ? 'has-error' : '' }}">
                    <!-- name -->
                    {!! Form::label('Rate',Lang::get('Rate(%)'),['class'=>'required']) !!}
                    {!! Form::text('rate',null,['class' => 'form-control']) !!}

                </div>

                 <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <!-- name -->
                    {!! Form::label('Start Date',Lang::get('Start Date'),['class'=>'required']) !!}
                   <input type="date" class="form-control" name="sdate">

                </div>
                 <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <!-- name -->
                    {!! Form::label('End Date',Lang::get('End Date'),['class'=>'required']) !!}
                   <input type="date" class="form-control" name="edate">

                </div>






               

            </div>
            <div class="modal-footer">
                <button type="button" id="close" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="{{Lang::get('message.save')}}">
            </div>
            {!! Form::close()  !!}
            <!-- /Form -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->  
<script>
    function getStates(val) {


        $.ajax({
            type: "GET",
            url: "{{url('get-state')}}/" + val,
            success: function (data) {
                // console.log(data)
              
                
                    $("#states").html(data);
                
            }
        });
    }
</script>

{!! Form::close()  !!}