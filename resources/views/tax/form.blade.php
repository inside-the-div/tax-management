@extends('layouts.master')


@section('content')
    <section class="mt-4">
      <div class="container">
      	<form action="{{route('update-tax-form')}}" method="post">
                  @csrf
      		<div class="card p-3 rounded-0">
      		  <h1 class="font-roboto font-25 color-1 text-center pb-3">SCHEDULES SHOWING DETAILS OF INCOME</h1>
      		  <table class="table table-bordered">
      		    <thead>
      		      <tr>
      		        <th scope="col">Particulars of Expenditure </th>
      		        <th scope="col">Amount of Income(Tk.)</th>
      		        <th scope="col">Comments</th>
      		        
      		      </tr>
      		    </thead>
      		    <tbody>
      		

      		      <tr>
      		        <th>Personal and fooding expenses</th>
      		        <td><input type="number" class=" input-field form-control rounded-0"  value="{{$info->field_1}}" name="field_1" ></td>
      		        <td><input type="text" class=" input-field form-control rounded-0"  value="{{$info->field_1_comment}}" name="field_1_comment"></td>
      		      </tr>

      		      <tr>
      		        <th>Tax paid including deduction at source of the lastfinancial year</th>
      		        <td><input type="number" class=" input-field form-control rounded-0"  value="{{$info->field_2}}" name="field_2" ></td>
      		        <td><input type="text" class=" input-field form-control rounded-0"  value="{{$info->field_2_comment}}" name="field_2_comment"></td>
      		      </tr>

      		      <tr>
      		        <th>Accommodation expenses</th>
      		        <td><input type="number" class=" input-field form-control rounded-0"  value="{{$info->field_3}}" name="field_3" ></td>
      		        <td><input type="text" class=" input-field form-control rounded-0"  value="{{$info->field_3_comment}}" name="field_3_comment"></td>
      		      </tr>  

      		      <tr>
      		        <th>Transport expenses </th>
      		        <td><input type="number" class=" input-field form-control rounded-0"  value="{{$info->field_4}}" name="field_4" ></td>
      		        <td><input type="text" class=" input-field form-control rounded-0"  value="{{$info->field_4_comment}}" name="field_4_comment"></td>
      		      </tr>  
      		      <tr>
      		        <th>Electricity Bill for residence </th>
      		        <td><input type="number" class=" input-field form-control rounded-0"  value="{{$info->field_5}}" name="field_5" ></td>
      		        <td><input type="text" class=" input-field form-control rounded-0"  value="{{$info->field_5_comment}}" name="field_5_comment"></td>
      		      </tr> 
      		      <tr>
      		        <th>Wasa Bill for residence </th>
      		        <td><input type="number" class=" input-field form-control rounded-0"  value="{{$info->field_6}}" name="field_6" ></td>
      		        <td><input type="text" class=" input-field form-control rounded-0"  value="{{$info->field_6_comment}}" name="field_6_comment"></td>
      		      </tr> 
      		       <tr>
      		        <th>Gas Bill for residence </th>
      		        <td><input type="number" class=" input-field form-control rounded-0"  value="{{$info->field_7}}" name="field_7" ></td>
      		        <td><input type="text" class=" input-field form-control rounded-0"  value="{{$info->field_7_comment}}" name="field_7_comment"></td>
      		      </tr> 


      		      <tr>
      		        <th>Telephone Bill for residence  </th>
      		        <td><input type="number" class=" input-field form-control rounded-0"  value="{{$info->field_8}}" name="field_8" ></td>
      		        <td><input type="text" class=" input-field form-control rounded-0"  value="{{$info->field_8_comment}}" name="field_8_comment"></td>
      		      </tr>               

      		      <tr>
      		        <th>Education expenses for children</th>
      		        <td><input type="number" class=" input-field form-control rounded-0"  value="{{$info->field_9}}" name="field_9" ></td>
      		        <td><input type="text" class=" input-field form-control rounded-0"  value="{{$info->field_9_comment}}" name="field_9_comment"></td>
      		      </tr>               
      		      <tr>
      		        <th>Personal expenses for Foreign travel</th>
      		        <td><input type="number" class=" input-field form-control rounded-0"  value="{{$info->field_10}}" name="field_10" ></td>
      		        <td><input type="text" class=" input-field form-control rounded-0"  value="{{$info->field_10_comment}}" name="field_10_comment"></td>
      		      </tr>

      		      <tr>
      		        <th>Festival and other special expenses, if any</th>
      		        <td><input type="number" class=" input-field form-control rounded-0"  value="{{$info->field_11}}" name="field_11" ></td>
      		        <td><input type="text" class=" input-field form-control rounded-0"  value="{{$info->field_11_comment}}" name="field_11_comment"></td>
      		      </tr>

                        <tr>
                          <th class="text-center text-danger font-20">Total Tk</th>
                          <td colspan="2" class="text-center font-20"><b id="total"></b> Tk</td>
                          
                        </tr>


      		      <tr>
      		        <th colspan="3">
      		          <input  type="submit" class="form-control rounded-0 btn btn-info  text-light" value="Update"> 
      		        </th> 
      		      </tr>


      		    </tbody>
      		  </table>
      		</div>
      	</form>
        
      </div>
    </section>
@endsection

@section('custom-js')
      <script>
            $(document).ready(function(){
                  calculateTotal();
                  function calculateTotal(){
                        var total = 0;
                        var all = $('input[type=number]');
                        for(var i =0; i<all.length;i++){
                              total += Number($(all[i]).val());
                        }
                        $("#total").html(total);
                  }

                  $('input[type=number]').keyup(function(){
                        calculateTotal();
                  })
            })
      </script>
@endsection


