@extends('layouts.master')


@section('content')
    <section class="mt-4">
      <div class="container">
        <div class="card p-3 rounded-0">
          <h1 class="font-roboto font-25 color-1 text-center pb-3">SCHEDULES SHOWING DETAILS OF INCOME</h1>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Pay & Allowance</th>
                <th scope="col">Amount of Income(Tk.)</th>
                <th scope="col">Amount of exempted income (TK)</th>
                <th scope="col">Net taxable income(Tk.)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th data-name="basic-pay">Basic pay</th>
                <td><input type="number" class=" input-field form-control rounded-0" name="basic_pay_1" data-child="1"></td>
                <td><input type="number" class=" input-field form-control rounded-0" name="basic_pay_2" data-child="2" readonly></td>
                <td><input type="number" class=" input-field form-control rounded-0" name="basic_pay_3" data-child="3" readonly value="124"></td>
              </tr>

              <tr>
                <th data-name="special pay" >Special pay</th>
                <td><input type="number" class=" input-field form-control rounded-0" name="special_pay_1" data-child="1"></td>
                <td><input type="number" class=" input-field form-control rounded-0" name="special_pay_2" data-child="2" readonly></td>
                <td><input type="number" class=" input-field form-control rounded-0" name="special_pay_3" data-child="3" readonly value="34534"></td>
              </tr>

              <tr>
                <th data-name="dearness allowance" >Dearness allowance</th>
                <td><input type="number" class=" input-field form-control rounded-0" name="dearness_allowance_1" data-child="1"></td>
                <td><input type="number" class=" input-field form-control rounded-0" name="dearness_allowance_2" data-child="2" readonly></td>
                <td><input type="number" class=" input-field form-control rounded-0" name="dearness_allowance_3" data-child="3" readonly></td>
              </tr>            

              <tr>
                <th data-name="conveyance allowancev" >Conveyance allowancev</th>
                <td><input type="number" class=" input-field form-control rounded-0" name="conveyance_allowance_1" data-child="1"></td>
                <td><input type="number" class=" input-field form-control rounded-0" name="conveyance_allowance_2" data-child="2" readonly></td>
                <td><input type="number" class=" input-field form-control rounded-0" name="conveyance_allowance_3" data-child="3" readonly></td>
              </tr>            

              <tr>
                <th data-name="house rent allowance" >House rent allowance</th>
                <td><input type="number" class=" input-field form-control rounded-0" name="house_rent_allowance_1" data-child="1"></td>
                <td><input type="number" class=" input-field form-control rounded-0" name="house_rent_allowance_2" data-child="2" readonly></td>
                <td><input type="number" class=" input-field form-control rounded-0" name="house_rent_allowance_3" data-child="3" readonly></td>
              </tr>            

              <tr>
                <th data-name="medical allowance" >Medical allowance</th>
                <td><input type="number" class=" input-field form-control rounded-0" name="medical_allowance_1" data-child="1"></td>
                <td><input type="number" class=" input-field form-control rounded-0" name="medical_allowance_2" data-child="2" readonly></td>
                <td><input type="number" class=" input-field form-control rounded-0" name="medical_allowance_3" data-child="3" readonly></td>
              </tr>           


             
             <tr>
               <th data-name="servant allowance" >Servant allowance</th>
               <td><input type="number" class=" input-field form-control rounded-0" name="servant_allowance_1" data-child="1"></td>
               <td><input type="number" class=" input-field form-control rounded-0" name="servant_allowance_2" data-child="2" readonly></td>
               <td><input type="number" class=" input-field form-control rounded-0" name="servant_allowance_3" data-child="3" readonly></td>
             </tr>   


             <tr>
               <th data-name="leave allowance" >Leave allowance</th>
               <td><input type="number" class=" input-field form-control rounded-0" name="leave_allowance_1" data-child="1"></td>
               <td><input type="number" class=" input-field form-control rounded-0" name="leave_allowance_2" data-child="2" readonly></td>
               <td><input type="number" class=" input-field form-control rounded-0" name="leave_allowance_3" data-child="3" readonly></td>
             </tr>   



             <tr>
               <th data-name="honorarium" >Honorarium / Reward/ Fee</th>
               <td><input type="number" class=" input-field form-control rounded-0" name="honorarium_1" data-child="1"></td>
               <td><input type="number" class=" input-field form-control rounded-0" name="honorarium_2" data-child="2" readonly></td>
               <td><input type="number" class=" input-field form-control rounded-0" name="honorarium_3" data-child="3" readonly></td>
             </tr>   



             <tr>
               <th data-name="overtime allowance" >Overtime allowance</th>
               <td><input type="number" class=" input-field form-control rounded-0" name="overtime_allowance_1" data-child="1"></td>
               <td><input type="number" class=" input-field form-control rounded-0" name="overtime_allowance_2" data-child="2" readonly></td>
               <td><input type="number" class=" input-field form-control rounded-0" name="overtime_allowance_3" data-child="3" readonly></td>
             </tr>


             <tr>
               <th data-name="bonus" >Bonus / Ex-gratia</th>
               <td><input type="number" class=" input-field form-control rounded-0" name="bonus_1" data-child="1"></td>
               <td><input type="number" class=" input-field form-control rounded-0" name="bonus_2" data-child="2" readonly></td>
               <td><input type="number" class=" input-field form-control rounded-0" name="bonus_3" data-child="3" readonly></td>
             </tr>   



             <tr>
               <th data-name="Other" >Other allowances</th>
               <td><input type="number" class=" input-field form-control rounded-0" name="other_allowances_1" data-child="1"></td>
               <td><input type="number" class=" input-field form-control rounded-0" name="other_allowances_2" data-child="2" readonly></td>
               <td><input type="number" class=" input-field form-control rounded-0" name="other_allowances_3" data-child="3" readonly></td>
             </tr>            

              <tr>
               <th data-name="contribution" >Employer’s contribution to <br> Recognized Provident Fund</th>
               <td><input type="number" class=" input-field form-control rounded-0" name="employer_contribution_1" data-child="1"></td>
               <td><input type="number" class=" input-field form-control rounded-0" name="employer_contribution_2" data-child="2" readonly></td>
               <td><input type="number" class=" input-field form-control rounded-0" name="employer_contribution_3" data-child="3" readonly></td>
             </tr>              

             <tr>
               <th data-name="interest" >Interest accrued on Recognized <br> ProvidentFund</th>
               <td><input type="number" class=" input-field form-control rounded-0" name="interest_accrued" data-child="1"></td>
               <td><input type="number" class=" input-field form-control rounded-0" name="interest_accrued" data-child="2"></td>
               <td><input type="number" class=" input-field form-control rounded-0" name="interest_accrued" data-child="3"></td>
             </tr>             

              <tr>
               <th data-name="deemed income" >Deemed income for transport facility</th>
               <td><input type="number" class=" input-field form-control rounded-0" name="deemed_income_1" data-child="1"></td>
               <td><input type="number" class=" input-field form-control rounded-0" name="deemed_income_2" data-child="2" readonly></td>
               <td><input type="number" class=" input-field form-control rounded-0" name="deemed_income_3" data-child="3" readonly></td>
             </tr>               
              <tr>
                <th colspan="4">
                  <input  type="submit" class="form-control rounded-0 btn btn-info  text-light" value="Update"> 
                </th> 
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
@endsection

@section('custom-js')
	<script>
		$(document).ready(function(){
			


			$('.input-field').keyup(function(){
				var all = $(this).parent().siblings();

				var one,two,three;
				var one_val;
				var one_ele;
				th = all[0];
				var name = $(th).data('name');

				var this_data = $(this).data('child');
				if(this_data == 1){
					one = $(this);
					one_val = one.val();
					one_ele = one;

					two = $(all[1]).children()[0];
					two = $(two);

					three = $(all[2]).children()[0];
					three = $(three);
				}

				if(name == 'basic-pay'){
					two.val(one_val);
					three.val(one_val);
				}else if(name == 'special pay'){
					two.val(0);
					three.val(one_val);
				}
			})

			// console.log($('tr')[0].children());

			// var all_tr = $('tr');

			// for(var i=0;i<all_tr.length;i++){
			// 	var all_tr_children = $(all_tr[i]).children();
			// 	var name = $(all_tr_children[0]).data('name')

			// 	var one = $(all_tr_children[1]).children();
			// 	one = $(one[0]);

			// 	var two = $(all_tr_children[2]).children();
			// 	two = $(two[0]);

			// 	var three = $(all_tr_children[3]).children();
			// 	three = $(three[0]);

			// 	console.log(name);

			// 	if(name == 'basic-pay'){
			// 		var last_val = three.val();
			// 		one.val(last_val);
			// 		two.val(last_val);
			// 	}else if(name == 'special pay'){
			// 		var last_val = three.val();
			// 		one.val(last_val);
			// 		two.val(0);
			// 	}
			// }






		})
	</script>
@endsection