@extends('DashbordAdminPanel.layout.master')

@section('content')

  <style type="text/css">
    
  </style>	
    

   

  <div class="content mt-3">


  
 <div class=" fadeIn">

                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Job</strong>
                        </div>
                             
                                	     <!-- model -->
 

                        <div class="card-body">

<div style="padding-bottom:30px;">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">
     Add New Job
   </button>



   </div>
   
   <div class="modal fade bd-example-modal-lg" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
     <div class="modal-content">
    
      
    <div class="modal-body">
  <form  action="/jobadminstore" method="POST" class="formlogin" enctype="multipart/form-data">
  {{ csrf_field() }}
    <fieldset style="padding: .35em .625em .75em; margin: 0 2px; border: 1px solid silver;">
      <legend style="width: fit-content;border: 0px;">Job Info:</legend>
 


      <div class="col-lg-12">
                   
                      
                     
                <div class="form-group">
                <select   tabindex="1" name="job" class="job" style="width: 100%">
              <option selected="" disabled="disabled"  > Looking For</option>

                @foreach(\App\Job::all() as $job)
                <option value="{{$job->id}}">{{$job->name}}</option>
                @endforeach
                </select>
                </div>


     

              <div class="form-group">
              <select  tabindex="1" name="country" class="country" style="width: 100%">

             <option selected="" disabled="disabled" >Choose A Country ... </option>

              @foreach(\App\Country::all() as $country)
              
              <option value="{{$country->id}}" >{{$country->name}}</option>
              @endforeach
              </select>

              </div>

                    
                    <div class="form-group">  
                     <div class="col-md-4 mb-3">
      <label >From</label>
     
                <input type="Number" class="form-control "  id="salary" value="" name="salay">

          
            
    </div>

     <div class="col-md-4 mb-3">
      <label >to</label>
     
              <input type="Number" class="form-control "  id="MaxSalary" value="" name="MaxSalary">

          
            
    </div>

        <div class="col-md-4 mb-3">
      <label > Currency</label>

        <select  tabindex="1" name="Currency" class="Currency" style="width: 100%">

             <option selected="" disabled="disabled" >Choose A Currency ... </option>

              @foreach(\App\Currency::all() as $Currency)
              
              <option value="{{$Currency->id}}" >{{$Currency->name}}</option>
              @endforeach
              </select>

          
            
    </div>
 
                    
                  </div>


                       <div class="form-group">
                        <div class="col-md-12 mb-3">
            <label >No.of candidates</label>
      <input type="text" class="form-control" placeholder=" No.Candidate"  name="num_of_candidates">
                </div>
                   </div>
</fieldset>  <!-- end Desired Job -->

   
      <fieldset style="padding: .35em .625em .75em; margin: 0 2px; border: 1px solid silver;">
      <legend style="width: fit-content;border: 0px;">Job Description:</legend>
 


      <div class="col-lg-12">
                   
                      

                       <div class="form-group">
                        <div class="col-md-12 mb-3">
            <label >Job Description</label>
      <textarea type="text" class="form-control" placeholder=" No.Candidate"  name="job_descripton"></textarea>
                </div>
                   </div>
</fieldset> 
      <fieldset style="padding: .35em .625em .75em; margin: 0 2px; border: 1px solid silver;">
      <legend style="width: fit-content;border: 0px;">Basic Info:</legend>
 


    <div class="col-lg-12">
                   
                      
                     
           <div class="row form-group">
                            <div class="col-sm-3 airports availability"> Company</div>
                             <label class="col-sm-3 airports">
                  <input type="radio" name="job_for" value="family" checked="">
                  <span class="label-text" >Family</span> </label>

                <label class="col-sm-3 airports">
                  <input type="radio" name="job_for" value="company" >
                  <span class="label-text" >Company</span> </label>
                <label class="col-sm-3 airports">
                  <input type="radio" name="job_for" value="agency">
                  <span class="label-text" >Agency</span> </label>

                 
                </div>

              <div class="form-group">
              <div class="col-md-12 mb-3">
              <label >Company Name"</label>
              <input type="text" class="form-control" placeholder=" Company Name"  name="company_name">
              </div>
              </div>

              <div class="form-group">
              <div class="col-md-12 mb-3">
              <label >Phone No</label>
              <input type="text" class="form-control" placeholder=" Phone"  name="phone">
              </div>
              </div>


               <div class="form-group">
              <div class="col-md-12 mb-3">
              <label >Email</label>
              <input type="email" class="form-control" placeholder=" email"  name="email">
              </div>
              </div>


               <div class="form-group">
              <div class="col-md-12 mb-3">
              <label >Password</label>
              <input type="password" class="form-control" placeholder=" Password"  name="password">
              </div>
              </div>
                            </div>
</fieldset> 
 <br/>
   <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="button" class="btn btn-primary " data-dismiss="modal">Cancel</button>
                         <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit"  name="login_form_submit" class="btn btn-success" value="Save">Submit</button>
                        </div>
                      </div>


    
      </form>



</div> <!-- end modal-body -->
</div><!-- end modal-content -->
</div><!-- end modal-dialog -->
</div><!-- end myModal1 -->

 

    <div class="form-group">

 <div class="col-md-6 mb-3">
              <label >From Date:</label>
              <input name="min" id="min" type="text">
              </div>

              <div class="col-md-6 mb-3">
              <label >To Date:</label>
              <input name="max" id="max" type="text">
              </div>
              </div>
    <button style="margin: 5px;" class="btn btn-danger btn-xs delete-all" data-url="">Delete All</button>

     
<br></br>


                  <table  id= "bootstrap-data-table" class="table table-striped table-bordered Jobs">

         

       
                    <thead>
                      <tr>
                      	<th><input type="checkbox" id="check_all"></th>
                        <th>Job Name</th>
                        <th>Created By</th>
                        <th>Job For</th>
                       <th>Country</th>
                       <th>Created At</th>
                        <th>Process</th>

                      </tr>
                    </thead>
                    <tbody>
                    	@foreach($allJob as $all)
                      <tr id="tr_{{$all->id}}">
                    <td><input type="checkbox" class="checkbox" data-id="{{$all->id}}"></td>
					<td>{{ $all->job->name}}</td>
					<td>{{ $all->user->name}}</td>
					   <td>{{ $all->job_for}}</td>
                <td>{{ $all->country->name}}</td>
                <td>{{date('Y/m/d', strtotime($all->created_at))}}
</td>
			<td>
	 
<a  href="/Job/{{$all->id}}/edit" class="btn btn-default btn-sm" ><span class="fa fa-edit"></span>  </a>

<a  href="/Job/{{$all->id}}/show" class="btn btn-default btn-sm" ><span class="fa fa-eye"></span>  </a>
			</td>
				
                      </tr>
                      @endforeach
                      
                   
                    
                    
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div>
            </div>
@endsection



@section('scripts')
<script type="text/javascript" src="/vendor/jsvalidation/js/jsvalidation.js"></script>
<script src="/dist/jquery.validate.js"></script>
<script type="text/javascript">

 $(document).ready(function () {
   $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
 
      



});


    $(document).ready(function () {




      
$(".country ,.industry ,.job ,.Currency").select2({
    tags: true,
    dropdownParent: $("#myModal1")
});

        $('#check_all').on('click', function(e) {
         if($(this).is(':checked',true))  
         {

            $(".checkbox").prop('checked', true);  
         } else {  
            $(".checkbox").prop('checked',false);  
         }  
        });

         $('.checkbox').on('click',function(){
            if($('.checkbox:checked').length == $('.checkbox').length){
                $('#check_all').prop('checked',true);
            }else{
                $('#check_all').prop('checked',false);
            }
         });

        $('.delete-all').on('click', function(e) {


            var idsArr = [];  
            $(".checkbox:checked").each(function() {  
                idsArr.push($(this).attr('data-id'));
            });  


            if(idsArr.length <=0)  
            {  
                alert("Please select atleast one record to delete.");  
            }  else {  

                if(confirm("Are you sure, you want to delete the selected Jobs?")){  

                    var strIds = idsArr.join(","); 

                    $.ajax({
                        url: '/deletemultiplejobs',
                        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                        type: 'POST',
                        data: {"_token": "{{ csrf_token() }}",
                       ids:strIds },
                        success: function (data) {
                            if (data['status']==true) {
                                $(".checkbox:checked").each(function() {  
                                    $(this).parents("tr").remove();
                                });
                                 $(document).ajaxStop(function() { location.reload(true); });
                                alert(data['message']);
                            } else {
                                alert('Whoops Something went wrong!!');
                            }
                        },
                        error: function (data) {
                            alert(data.responseText);
                        }
                    });


                }  
            }  
        });

        $('[data-toggle=confirmation]').confirmation({

            rootSelector: '[data-toggle=confirmation]',
            onConfirm: function (event, element) {

                element.closest('form').submit();
            }
        });   
    
    });

     $(document).ready(function(){

       $('.Jobs thead tr').clone(true).appendTo( '.Jobs thead' );
    $('.Jobs thead tr:eq(1) th').each( function (i) {
        var title = $(this).text();
         if($(this).index()>=1 && $(this).index()<=5)
        {
        $(this).html( '<input type="text" style="width:100px;" placeholder="'+title+'" />' );
 }
        $( 'input', this ).on( 'keyup change', function () {
            if ( table.column(i).search() !== this.value ) {
                table
                    .column(i)
                    .search( this.value )
                    .draw();
            }
        } );
    } );
        $.fn.dataTable.ext.search.push(
        function (settings, data, dataIndex) {
            var min = $('#min').datepicker("getDate");
            var max = $('#max').datepicker("getDate");


            var startDate = new Date(data[5]);
            console.log(startDate);
            if (min == null && max == null) { return true; }
            if (min == null && startDate < max) { return true;}
            if(max == null && startDate >= min) {return true;}
            if (startDate <= max && startDate >= min) { return true; }
            return false;
        }
        );

       
            $("#min").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
            $("#max").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
            var table = $('.Jobs').DataTable();

            // Event listener to the two range filtering inputs to redraw on input
            $('#min, #max').change(function () {
                table.draw();
            });
        });




</script>
<script type="text/javascript" src="/vendor/jsvalidation/js/jsvalidation.js"></script>
<script src="/dist/jquery.validate.js"></script>

 {!! JsValidator::formRequest('App\Http\Requests\AddJobAdminFormRequest', '.formlogin'); !!} 
@endsection