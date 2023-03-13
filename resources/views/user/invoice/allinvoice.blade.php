@extends('layouts.user')
@section('content')
<style>
    .pl25{
        padding-left: 25px;
    }
</style>

<div class="dashboard-content">

    <section class="profile purchase-status px-4">

        <div class="title-section">
            <span class="iconify" data-icon="clarity:heart-solid"></span>
            <div class="mx-2"> Invoice Information</div>
        </div>

        <button class="text-white btn-theme ml-1 mt-3" id="newBtn"> Add User </button>

    </section>  

    <section class="profile purchase-status px-4" id="addThisFormContainer">
        <div class="title-section row mt-3">
            <div class="col-md-12">
                <div class="ermsg"></div>
                <div class="col-md-12 text-muted bg-white ">
                        <div class="row mb-3">
                            <div class="col-md-6 ">
                                <label> Name<span style="color: red">*</span></label>
                                <input type="text" placeholder="Name" id="name" name="name"  class="form-control" >
                            </div>
                            
                            <div class="col-md-6 ">
                                <label> Email<span style="color: red">*</span></label>
                                <input type="email" id="email" name="email" class="form-control" >
                            </div>

                            <div class="col-md-12 ">
                                <label> Address <span style="color: red">*</span></label>
                                <input type="text" placeholder="Address" id="address" name="address" class="form-control" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 my-2">
                                <button class="text-white btn-theme ml-1" id="adduserBtn" type="submit"> Submit </button>
                                <button class="text-white btn btn-warning ml-1" id="FormCloseBtn"> Close </button>
                            </div>
                        </div>
                </div>
            </div>
        </div>

    </section>

    <section class="profile purchase-status px-4">
        <div class="title-section row mt-3">
            <div class="col-md-12">
                <div class="invermsg"></div>
                <div class="col-md-12 text-muted bg-white ">
                        <div class="row mb-3">
                            <div class="col-md-6 ">
                                <label> User name<span style="color: red">*</span></label>
                                <select name="user_name" id="user_name" class="form-control" >
                                    <option value="">Select</option>
                                    @foreach (\App\Models\NewUser::where('user_id', Auth::user()->id)->get() as $nuser)
                                    <option value="{{$nuser->id}}">{{$nuser->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 ">
                                <label> Email<span style="color: red">*</span></label>
                                <input type="email" id="useremail" name="useremail" class="form-control" >
                                <input type="hidden" id="user_id" name="user_id" class="form-control" >
                            </div>
                            <div class="col-md-12 ">
                                <label>Billing Address <span style="color: red">*</span></label>
                                <input type="text" placeholder="Address" id="useraddress" name="useraddress" class="form-control" >
                            </div>
                            <div class="col-md-4 ">
                                <label> Terms<span style="color: red">*</span></label>
                                <input type="text" id="terms" name="terms" class="form-control" >
                            </div>
                            <div class="col-md-4 ">
                                <label> Invoice Date<span style="color: red">*</span></label>
                                <input type="date" id="invoice_date" name="invoice_date" class="form-control" value="{{date('Y-m-d')}}">
                            </div>
                            <div class="col-md-4 ">
                                <label> Due Date<span style="color: red">*</span></label>
                                <input type="date" id="due_date" name="due_date" class="form-control" >
                            </div>
                        </div>

                        <div class="row">

                            {{-- new  --}}
                            <div class="data-container">
                                <table class="table table-theme mt-0">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Product/Services</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Qty</th>
                                            <th scope="col">Rate</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Vat</th>

                                        </tr>
                                    </thead>
                                    <tbody id="inner">

                                            <tr class="item-row" style="position:realative;">
                                                <td class="px-1">
                                                    <div style="color: white;  user-select:none;  padding: 5px;    background: red;    width: 45px;    display: flex;    align-items: center; margin-right:5px;   justify-content: center;    border-radius: 4px;   left: 4px;    top: 8px;" onclick="removeRow(event)" >X</div>
                                                </td>
                                                <td class="px-1">
                                                    <input class="form-control" name="product_name[]" type="text">
                                                </td>
                                                <td class="fs-16 txt-secondary px-1">
                                                    <input class="form-control" name="description[]" >
                                                </td>
                                                <td class="fs-16 txt-secondary px-1">
                                                    <input style="min-width: 50px;"  type="number" name="quantity[]" class="form-control" value="1" min="1">
                                                </td>

                                                <td class="fs-16 txt-secondary px-1">
                                                    <input style="min-width: 50px;"  type="number" name="rate[]" class="form-control rate" value="0" min="0">
                                                </td>

                                                <td class="fs-16 txt-secondary px-1">
                                                    <input style="min-width: 50px;"  type="number" name="amount[]" class="form-control amount" value="0" min="0">
                                                </td>

                                                <td class="fs-16 txt-secondary px-1">
                                                    <input style="min-width: 50px;"  type="number" name="vat[]" class="form-control vat" value="0" min="0">
                                                </td>

                                                
                                            </tr>
                                            

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="10">
                                                <span class="fs16 txt-primary add-row" type="submit" >Add +</span>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            {{-- new  --}}
                            
                            
                        </div>

                        <div class="row mb-3">

                            <div class="col-md-4 ">
                                <label> Message on Invoice</label>
                                <textarea name="invmessg" id="invmessg" cols="30" rows="5" class="form-control"></textarea>
                                
                            </div>
                            <div class="col-md-4 ">
                            </div>
                            <div class="col-md-4 ">
                                <table style="width: 100%">
                                    <tbody>
                                        <tr>
                                            <td style="text-align: right">Subtotal</td>
                                            <td style="text-align: right"> 0</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: right">Total</td>
                                            <td style="text-align: right"> 0</td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: right">Balance Due</td>
                                            <td style="text-align: right"> 0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                        </div>

                        <div class="row mb-3">

                            <div class="col-md-4 ">
                                <label> Message on Appointment</label>
                                <textarea name="invmessg" id="invmessg" cols="30" rows="5" class="form-control"></textarea>
                                
                            </div>
                            <div class="col-md-4 ">
                            </div>
                            <div class="col-md-4 ">
                            </div>


                        </div>


                        <div class="row">
                            <div class="col-md-12 my-2">
                                <button class="text-white btn-theme ml-1" id="addBtn" type="submit"> Save and Send </button>
                            </div>
                        </div>
                </div>
            </div>
        </div>

    </section>




</div>




@endsection
@section('script')
<script type="text/javascript">
    function removeRow(event) {
            event.target.parentElement.parentElement.remove();
    }
</script>
<script>
    $(document).ready(function () {
        
        $(".add-row").click(function() {
            var markup =
                '<tr class="item-row" style="position:realative"><td class="px-1"><div style="color:#fff;user-select:none;padding:5px;background:red;width:45px;display:flex;align-items:center;margin-right:5px;justify-content:center;border-radius:4px;left:4px;top:8px" onclick="removeRow(event)">X</div></td><td class="px-1"><input class="form-control" name="product_name[]" type="text"></td><td class="fs-16 txt-secondary px-1"><input class="form-control" name="description[]"></td><td class="fs-16 txt-secondary px-1"><input style="min-width:50px" type="number" name="quantity[]" class="form-control" value="1" min="1"></td><td class="fs-16 txt-secondary px-1"><input style="min-width:50px" type="number" name="rate[]" class="form-control rate" value="0" min="0"></td><td class="fs-16 txt-secondary px-1"><input style="min-width:50px" type="number" name="amount[]" class="form-control amount" value="0" min="0"></td><td class="fs-16 txt-secondary px-1"><input style="min-width:50px" type="number" name="vat[]" class="form-control vat" value="0" min="0"></td></tr>';

            $("table #inner").append(markup);
        });

        $("#addThisFormContainer").hide();
        $("#newBtn").click(function(){
            $("#newBtn").hide(100);
            $("#addThisFormContainer").show(300);

        });
        $("#FormCloseBtn").click(function(){
            $("#addThisFormContainer").hide(200);
            $("#newBtn").show(100);
        });
        //header for csrf-token is must in laravel
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
        //
        // submit to payrollurl 
        var newuserurl = "{{URL::to('/user/new-user')}}";

            $("body").delegate("#adduserBtn","click",function(event){
                event.preventDefault();

                var name = $("#name").val();
                var email = $("#email").val();
                var address = $("#address").val();
                

                $.ajax({
                    url: newuserurl,
                    method: "POST",
                    data: {name,email,address},

                    success: function (d) {
                        if (d.status == 303) {
                            $(".ermsg").html(d.message);
                            pagetop();
                        }else if(d.status == 300){
                            $(".ermsg").html(d.message);
                            pagetop();
                            window.setTimeout(function(){location.reload()},2000)
                            
                        }
                    },
                    error: function (d) {
                        console.log(d);
                    }
                });

        });
        // submit to purchase end

        // customer destails 

            var newuserurl = "{{URL::to('/user/get-new-users')}}";
            $("#user_name").change(function(){
		            event.preventDefault();
                    var uid = $(this).val();
                    $.ajax({
                    url: newuserurl,
                    method: "POST",
                    data: {uid:uid},

                    success: function (d) {
                        if (d.status == 303) {

                        }else if(d.status == 300){
                            $("#new_user_id").val(d.user_id);
                            $("#username").val(d.username);
                            $("#useraddress").val(d.address);
                            $("#useremail").val(d.useremail);
                           
                        }
                    },
                    error: function (d) {
                        console.log(d);
                    }
                });

            });

      

    });

    $(document).ready(function () {
        $('#example').DataTable();
    });

    

</script>

@endsection
