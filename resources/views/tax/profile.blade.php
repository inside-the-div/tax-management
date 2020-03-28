@extends('layouts.master')


@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h1 class="font-25 pb-3 text-center card p-3 font-pt">Calculate and update your tax profile</h1>

            <section class="mt-4">
				<form action="{{route('update-tax-profile')}}" method="post">
					@csrf
		            <div class="card p-3 rounded-0">
		                  
		                  <div class="row mt-2">
		                    <div class="col-12 col-lg-6">
		                      <label for="">1. Name of assessee</label>
		                      <input type="text" class="form-control rounded-0"  value="{{$info->name}}"  name="name"> 
		                    </div>
		                    <div class="col-12 col-lg-6">
		                      <label for="">2. National ID No</label>
		                      <input type="text" class="form-control rounded-0"  value="{{$info->nid}}"  name="nid"> 
		                    </div>

		                  </div>

		                  <div class="row mt-2">
		                    <div class="col-12 col-lg-6">
		                      <label for="">3. UTIN(if any)</label>
		                      <input type="text" class="form-control rounded-0"  value="{{$info->utin}}"  name="utin"> 
		                    </div>
		                    <div class="col-12 col-lg-6">
		                      <label for="">4. TIN</label>
		                      <input type="text" class="form-control rounded-0"  value="{{$info->tin}}"  name="tin"> 
		                    </div>
		                  </div>

		                  <div class="row mt-2">
		                    <div class="col-12 col-lg-6">
		                      <label for="">5(a). Circle</label>
		                      <input type="text" class="form-control rounded-0"   value="{{$info->circle}}"  name="circle"> 
		                    </div>
		                    <div class="col-12 col-lg-6">
		                      <label for="">5(b). Taxes Zone</label>
		                      <input type="text" class="form-control rounded-0"   value="{{$info->tax_zone}}"  name="tax_zone"> 
		                    </div>
		                  </div>

		                  <div class="row mt-2">
		                    <div class="col-12 col-lg-6">
		                      <label for="">6. Assessment year</label>
		                      <input type="text" class="form-control rounded-0"   value="{{$info->assessment_year}}"  name="assessment_year"> 
		                    </div>
		                    <div class="col-12 col-lg-6">
		                      <label for="" class="">7. Residential status:</label>
		                      <select  name="residential_status" id="" class="form-control rounded-0">

								<?php 
									$text = ['Resident','Non Residential'];
								?>

								@for($i=0;$i<2;$i++)
									<option value="{{$text[$i]}}" @if($info->residential_status == $text[$i]) selected @endif>{{$text[$i]}}</option>
								@endfor
		                      </select>
		                    </div>
		                  </div>


		                  <div class="row mt-2">
		                    <div class="col-12 col-lg-6">
		                      <label for="">8. Status</label>
		                      <select  name="status" id="" class="form-control rounded-0">

		                      	<?php 
		                      		$text = ['individual','firm','association of persons','hindu'];
		                      	?>

		                      	@for($i=0;$i<4;$i++)
		                      		<option value="{{$text[$i]}}" @if($info->status == $text[$i]) selected @endif>{{$text[$i]}}</option>
		                      	@endfor
		                        
		                     
		                      </select>
		                    </div>
		                    <div class="col-12 col-lg-6">
		                      <label for="">9. Name of the employer/business (where applicable)</label>
		                      <input type="text" class="form-control rounded-0"  value="{{$info->name_of_business}}"  name="name_of_business"> 
		                    </div>
		                  </div>


		                  <div class="row mt-2">
		                    <div class="col-12 col-lg-6">
		                      <label for="">10. Wife/husband's name (if assessee, please mention TIN)</label>
		                      <input type="text" class="form-control rounded-0"  value="{{$info->wife_husband_name}}"  name="wife_husband_name"> 
		                    </div>
		                    <div class="col-12 col-lg-6">
		                      <label for="">11. Father's Name</label>
		                      <input type="text" class="form-control rounded-0"   value="{{$info->father_name}}"  name="father_name"> 
		                    </div>
		                  </div>


		                  <div class="row mt-2">
		                    <div class="col-12 col-lg-6">
		                      <label for="">12. Mother's Name</label>
		                      <input type="text" class="form-control rounded-0"   value="{{$info->mother_name}}"  name="mother_name"> 
		                    </div>
		                    <div class="col-12 col-lg-6">
		                      <label for="">13. Date of birth</label>
		                      <input type="date" class="form-control rounded-0"   value="{{$info->date_of_birth}}"  name="date_of_birth"> 
		                    </div>
		                  </div>


		                  <div class="row mt-2">
		                    <div class="col-12 col-lg-6">
		                      <label for="">14(a). Address Present</label>
		                      <textarea    name="present_address" id="" cols="30" rows="3" class="form-control rounded-0">{{$info->present_address}}</textarea>
		                    </div>
		                    <div class="col-12 col-lg-6">
		                     <label for="">14(b). Address permanent</label>
		                       <textarea    name="permanent_address" id="" cols="30" rows="3" class="form-control rounded-0">{{$info->permanent_address}}</textarea>
		                    </div>
		                  </div>

		                  <div class="row mt-2">
		                    <div class="col-12 col-lg-6">
		                      <label for="">15(a). Telephone(office/business)</label>
		                       <input type="text" class="form-control rounded-0"  value="{{$info->phone_business}}"  name="phone_business"> 
		                    </div>
		                    <div class="col-12 col-lg-6">
		                     <label for="">15(b). Telephone Residential</label>
		                      <input type="text" class="form-control rounded-0"   value="{{$info->phone_residential}}"  name="phone_residential"> 
		                    </div>
		                  </div>

		                  <div class="row mt-2">
		                    <div class="col-12 col-lg-6">
		                      <label for="">16. VAT Registration Number (if any)</label>
		                       <input type="text" class="form-control rounded-0"   value="{{$info->vat_registration_number}}"  name="vat_registration_number"> 
		                    </div>

		                    <div class="col-12 col-lg-6">
		                       <input type="submit" class="form-control rounded-0 btn btn-info mt-4" value="Update"> 
		                    </div>
		                    
		                  </div>
		            </div>
	            </form>
            </section>
        </div>
    </div>
</div>
@endsection